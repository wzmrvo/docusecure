<?php

namespace App\Http\Controllers;

use App\Models\AccessRequest;
use App\Models\AccountApplication;
use App\Models\AccountProvisioningRecord;
use App\Models\AuditLog;
use App\Models\Department;
use App\Models\HelpdeskTicket;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AccountApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'idNumber' => [
                'required',
                'string',
                'max:100',
                Rule::unique('users', 'identification_number'),
                Rule::unique('account_applications', 'identification_number'),
            ],
            'cvsuEmail' => ['required', 'email', 'max:255', 'unique:account_applications,institutional_email'],
            'phoneNumber' => ['required', 'string', 'max:50'],
            'collegeUnit' => ['required', 'string', 'max:255'],
            'deptUnit' => ['required', 'string', 'max:255'],
            'clearanceTier' => ['required', 'in:tier1,tier2,tier3,tier4'],
            'justification' => ['required', 'string', 'max:3000'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $application = AccountApplication::create([
            'full_name' => $validated['fullName'],
            'identification_number' => $validated['idNumber'],
            'institutional_email' => $validated['cvsuEmail'],
            'phone' => $validated['phoneNumber'],
            'college_unit' => $validated['collegeUnit'],
            'department_unit' => $validated['deptUnit'],
            'clearance_tier' => $validated['clearanceTier'],
            'justification' => $validated['justification'],
            'password_hash' => Hash::make($validated['password']),
            'status' => 'pending',
        ]);

        $this->audit('account_application.submitted', $application, 'Institutional account application submitted.');

        return back()->with('account_application_submitted', true);
    }

    public function index(Request $request): View
    {
        $filters = $request->validate([
            'ticket_search' => ['nullable', 'string', 'max:100'],
            'ticket_status' => ['nullable', Rule::in(HelpdeskTicket::STATUSES)],
            'ticket_category' => ['nullable', Rule::in(HelpdeskTicket::CATEGORIES)],
            'ticket_priority' => ['nullable', Rule::in(HelpdeskTicket::PRIORITIES)],
            'queue_type' => ['nullable', Rule::in(['all', 'helpdesk', 'clearance', 'onboarding', 'escalations', 'archive'])],
            'queue_search' => ['nullable', 'string', 'max:100'],
            'queue_tier' => ['nullable', Rule::in(['tier1', 'tier2', 'tier3', 'tier4'])],
            'queue_unit' => ['nullable', 'string', 'max:255'],
        ]);
        $queueType = $filters['queue_type']
            ?? (filled($filters['ticket_search'] ?? null) ? 'helpdesk' : 'all');
        $queueSearch = trim($filters['queue_search'] ?? $filters['ticket_search'] ?? '');
        $queueTier = $filters['queue_tier'] ?? null;
        $queueUnit = $filters['queue_unit'] ?? null;
        $openTicketStatuses = ['new', 'in_progress', 'waiting_on_requester'];
        $ticketCategoryLabels = [
            'account_access' => 'Account lockout or password reset',
            'two_factor' => '2FA token or authenticator issue',
            'document_access' => 'Document access or clearance',
            'technical_incident' => 'Technical incident',
            'other' => 'Other support question',
        ];

        $applications = AccountApplication::query()
            ->with(['userAccount', 'provisioningRecord'])
            ->latest()
            ->paginate(20);
        $documentAccessRequests = AccessRequest::with(['requester', 'document', 'reviewer'])
            ->latest()
            ->paginate(20, ['*'], 'access_page');
        $helpdeskTickets = HelpdeskTicket::query()
            ->with(['assignedAdmin', 'activities.actor'])
            ->when($filters['ticket_search'] ?? null, function (Builder $query, string $search): void {
                $query->where(function (Builder $searchQuery) use ($search): void {
                    $searchQuery->where('reference', 'like', "%{$search}%")
                        ->orWhere('requester_name', 'like', "%{$search}%")
                        ->orWhere('requester_contact', 'like', "%{$search}%");
                });
            })
            ->when($filters['ticket_status'] ?? null, fn (Builder $query, string $status): Builder => $query->where('status', $status))
            ->when($filters['ticket_category'] ?? null, fn (Builder $query, string $category): Builder => $query->where('category', $category))
            ->when($filters['ticket_priority'] ?? null, fn (Builder $query, string $priority): Builder => $query->where('priority', $priority))
            ->latest()
            ->paginate(10, ['*'], 'ticket_page')
            ->withQueryString();

        $queueCounts = [
            'helpdesk' => HelpdeskTicket::whereIn('status', $openTicketStatuses)->count(),
            'clearance' => AccessRequest::where('status', 'pending')->count(),
            'onboarding' => AccountApplication::where('status', 'pending')->count(),
            'escalations' => HelpdeskTicket::whereIn('status', $openTicketStatuses)
                ->where('priority', 'urgent')
                ->count(),
            'archive' => HelpdeskTicket::whereIn('status', ['resolved', 'closed'])->count()
                + AccessRequest::whereIn('status', ['approved', 'rejected'])->count()
                + AccountApplication::whereIn('status', ['approved', 'rejected'])->count(),
        ];
        $queueCounts['total_active'] = $queueCounts['helpdesk'] + $queueCounts['clearance'] + $queueCounts['onboarding'];
        $queueUnits = Department::query()->where('active', true)->pluck('name')
            ->merge(Department::query()->where('active', true)->pluck('code'))
            ->merge(AccountApplication::query()->where('status', 'pending')->distinct()->pluck('college_unit'))
            ->merge(AccountApplication::query()->where('status', 'pending')->distinct()->pluck('department_unit'))
            ->merge(User::query()->whereNotNull('college')->distinct()->pluck('college'))
            ->filter()
            ->unique()
            ->sort()
            ->values();

        $queueItems = collect();
        $matchedQueueCount = 0;
        $isArchive = $queueType === 'archive';

        if (in_array($queueType, ['all', 'helpdesk', 'escalations', 'archive'], true) && ! $queueTier) {
            $queueTicketStatuses = $isArchive
                ? ['resolved', 'closed']
                : ($queueType === 'helpdesk' && isset($filters['ticket_status'])
                    ? [$filters['ticket_status']]
                    : $openTicketStatuses);
            $ticketQuery = HelpdeskTicket::query()
                ->whereIn('status', $queueTicketStatuses);

            if ($queueType === 'escalations') {
                $ticketQuery->where('priority', 'urgent');
            }

            if ($queueType === 'helpdesk') {
                if (isset($filters['ticket_status'])) {
                    $ticketQuery->where('status', $filters['ticket_status']);
                }

                if (isset($filters['ticket_category'])) {
                    $ticketQuery->where('category', $filters['ticket_category']);
                }

                if (isset($filters['ticket_priority'])) {
                    $ticketQuery->where('priority', $filters['ticket_priority']);
                }
            }

            if ($queueSearch !== '') {
                $ticketQuery->where(function (Builder $query) use ($queueSearch): void {
                    $query->where('reference', 'like', "%{$queueSearch}%")
                        ->orWhere('requester_name', 'like', "%{$queueSearch}%")
                        ->orWhere('requester_contact', 'like', "%{$queueSearch}%")
                        ->orWhere('details', 'like', "%{$queueSearch}%");
                });
            }

            if ($queueUnit !== null) {
                $ticketQuery->whereIn('requester_contact', User::query()
                    ->select('email')
                    ->where(function (Builder $query) use ($queueUnit): void {
                        $query->where('college', $queueUnit)
                            ->orWhereHas('department', fn (Builder $departmentQuery): Builder => $departmentQuery
                                ->where('name', $queueUnit)
                                ->orWhere('code', $queueUnit));
                    }));
            }

            $matchedQueueCount += (clone $ticketQuery)->count();
            $queueItems = $queueItems->merge($ticketQuery->latest()->limit(5)->get()->map(
                fn (HelpdeskTicket $ticket): array => [
                    'type' => 'helpdesk',
                    'id' => $ticket->id,
                    'reference' => $ticket->reference,
                    'requester' => $ticket->requester_name,
                    'contact' => $ticket->requester_contact,
                    'tier' => null,
                    'unit' => null,
                    'label' => $ticketCategoryLabels[$ticket->category] ?? 'Helpdesk ticket',
                    'status' => $ticket->status,
                    'priority' => $ticket->priority,
                    'details' => $ticket->details,
                    'created_at' => $ticket->created_at,
                ],
            ));
        }

        if (in_array($queueType, ['all', 'clearance', 'archive'], true)) {
            $accessRequestQuery = AccessRequest::query()
                ->with(['requester.department', 'document'])
                ->whereIn('status', $isArchive ? ['approved', 'rejected'] : ['pending']);

            if ($queueSearch !== '') {
                $accessRequestQuery->where(function (Builder $query) use ($queueSearch): void {
                    $query->where('justification', 'like', "%{$queueSearch}%")
                        ->orWhereHas('requester', fn (Builder $requesterQuery): Builder => $requesterQuery
                            ->where('name', 'like', "%{$queueSearch}%")
                            ->orWhere('email', 'like', "%{$queueSearch}%"))
                        ->orWhereHas('document', fn (Builder $documentQuery): Builder => $documentQuery
                            ->where('title', 'like', "%{$queueSearch}%")
                            ->orWhere('tracking_number', 'like', "%{$queueSearch}%"));
                });
            }

            if ($queueTier !== null) {
                $accessRequestQuery->where('requested_tier', $queueTier);
            }

            if ($queueUnit !== null) {
                $accessRequestQuery->whereHas('requester', fn (Builder $requesterQuery): Builder => $requesterQuery
                    ->where('college', $queueUnit)
                    ->orWhereHas('department', fn (Builder $departmentQuery): Builder => $departmentQuery
                        ->where('name', $queueUnit)
                        ->orWhere('code', $queueUnit)));
            }

            $matchedQueueCount += (clone $accessRequestQuery)->count();
            $queueItems = $queueItems->merge($accessRequestQuery->latest()->limit(5)->get()->map(
                fn (AccessRequest $accessRequest): array => [
                    'type' => 'clearance',
                    'id' => $accessRequest->id,
                    'reference' => 'Access request #'.$accessRequest->id,
                    'requester' => $accessRequest->requester->name,
                    'contact' => $accessRequest->requester->email,
                    'tier' => $accessRequest->requested_tier,
                    'unit' => $accessRequest->requester->department?->name ?? $accessRequest->requester->college,
                    'label' => $accessRequest->document->title,
                    'status' => $accessRequest->status,
                    'priority' => null,
                    'details' => $accessRequest->justification,
                    'created_at' => $accessRequest->created_at,
                ],
            ));
        }

        if (in_array($queueType, ['all', 'onboarding', 'archive'], true)) {
            $applicationQuery = AccountApplication::query()
                ->whereIn('status', $isArchive ? ['approved', 'rejected'] : ['pending']);

            if ($queueSearch !== '') {
                $applicationQuery->where(function (Builder $query) use ($queueSearch): void {
                    $query->where('full_name', 'like', "%{$queueSearch}%")
                        ->orWhere('institutional_email', 'like', "%{$queueSearch}%")
                        ->orWhere('identification_number', 'like', "%{$queueSearch}%")
                        ->orWhere('college_unit', 'like', "%{$queueSearch}%")
                        ->orWhere('department_unit', 'like', "%{$queueSearch}%")
                        ->orWhere('justification', 'like', "%{$queueSearch}%");
                });
            }

            if ($queueTier !== null) {
                $applicationQuery->where('clearance_tier', $queueTier);
            }

            if ($queueUnit !== null) {
                $applicationQuery->where(function (Builder $query) use ($queueUnit): void {
                    $query->where('college_unit', $queueUnit)
                        ->orWhere('department_unit', $queueUnit);
                });
            }

            $matchedQueueCount += (clone $applicationQuery)->count();
            $queueItems = $queueItems->merge($applicationQuery->latest()->limit(5)->get()->map(
                fn (AccountApplication $application): array => [
                    'type' => 'onboarding',
                    'id' => $application->id,
                    'reference' => 'Application #'.$application->id,
                    'requester' => $application->full_name,
                    'contact' => $application->institutional_email,
                    'tier' => $application->clearance_tier,
                    'unit' => $application->department_unit ?: $application->college_unit,
                    'label' => 'Institutional account application',
                    'status' => $application->status,
                    'priority' => null,
                    'details' => $application->justification,
                    'created_at' => $application->created_at,
                ],
            ));
        }

        $queueItems = $queueItems->sortByDesc('created_at')->take(5)->values();

        $administrators = User::query()
            ->where('role', 'admin')
            ->where('account_status', 'active')
            ->orderBy('name')
            ->get(['id', 'name']);
        $ticketStatuses = HelpdeskTicket::STATUSES;
        $ticketCategories = HelpdeskTicket::CATEGORIES;
        $ticketPriorities = HelpdeskTicket::PRIORITIES;

        return view('admin.access-requests', compact(
            'applications',
            'documentAccessRequests',
            'helpdeskTickets',
            'administrators',
            'ticketStatuses',
            'ticketCategories',
            'ticketCategoryLabels',
            'ticketPriorities',
            'queueCounts',
            'queueItems',
            'matchedQueueCount',
            'queueUnits',
            'queueType',
            'queueSearch',
            'queueTier',
            'queueUnit',
        ));
    }

    public function approve(AccountApplication $application)
    {
        abort_if($application->status !== 'pending', 409);
        abort_if(blank($application->password_hash), 422, 'This application has no password set. It must be resubmitted.');

        Validator::make(
            ['identification_number' => $application->identification_number],
            ['identification_number' => ['required', Rule::unique('users', 'identification_number')]],
        )->validate();

        $departmentCode = Str::upper(Str::slug($application->department_unit, '-'));
        $department = Department::firstOrCreate(
            ['code' => $departmentCode],
            [
                'name' => $application->department_unit,
                'college' => $application->college_unit,
                'active' => true,
            ],
        );

        $role = match ($application->clearance_tier) {
            'tier1', 'tier2' => 'student',
            'tier3' => 'faculty',
            'tier4' => 'admin',
        };

        $user = User::updateOrCreate(
            ['email' => $application->institutional_email],
            [
                'name' => $application->full_name,
                'password' => $application->password_hash,
                'role' => $role,
                'identification_number' => $application->identification_number,
                'phone' => $application->phone,
                'college' => $application->college_unit,
                'clearance_tier' => $application->clearance_tier,
                'account_status' => 'active',
                'department_id' => $department->id,
            ],
        );

        $application->update([
            'status' => 'approved',
            'reviewed_by' => Auth::id(),
            'reviewed_at' => now(),
            'password_hash' => null,
        ]);

        $record = AccountProvisioningRecord::create([
            'application_id' => $application->id,
            'user_id' => $user->id,
            'reviewer_id' => Auth::id(),
            'role' => $role,
            'clearance_tier' => $application->clearance_tier,
            'department_id' => $department->id,
            'status' => 'provisioned',
            'provisioned_at' => now(),
        ]);

        $this->audit('account_application.approved', $application, 'Institutional account application approved and provisioned.');

        return back()->with('success', "Application approved. {$user->email} is now provisioned.");
    }

    public function reprovision(Request $request, AccountApplication $application): RedirectResponse
    {
        $validated = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        abort_unless(Auth::user()?->role === 'admin', 403);
        Validator::make(
            ['identification_number' => $application->identification_number],
            ['identification_number' => ['required', Rule::unique('users', 'identification_number')]],
        )->validate();

        $user = DB::transaction(function () use ($application, $validated): User {
            $application = AccountApplication::query()
                ->whereKey($application->id)
                ->lockForUpdate()
                ->firstOrFail();

            abort_unless($application->status === 'approved', 409);
            abort_if(User::query()->where('email', $application->institutional_email)->exists(), 409);

            $role = match ($application->clearance_tier) {
                'tier1', 'tier2' => 'student',
                'tier3' => 'faculty',
                'tier4' => 'admin',
                default => abort(422, 'The application has an unsupported clearance tier.'),
            };

            $departmentCode = Str::upper(Str::slug($application->department_unit, '-'));
            $department = Department::firstOrCreate(
                ['code' => $departmentCode],
                [
                    'name' => $application->department_unit,
                    'college' => $application->college_unit,
                    'active' => true,
                ],
            );

            $user = User::create([
                'name' => $application->full_name,
                'email' => $application->institutional_email,
                'password' => Hash::make($validated['password']),
                'role' => $role,
                'identification_number' => $application->identification_number,
                'phone' => $application->phone,
                'college' => $application->college_unit,
                'clearance_tier' => $application->clearance_tier,
                'account_status' => 'active',
                'department_id' => $department->id,
            ]);

            AccountProvisioningRecord::updateOrCreate(
                ['application_id' => $application->id],
                [
                    'user_id' => $user->id,
                    'reviewer_id' => Auth::id(),
                    'role' => $role,
                    'clearance_tier' => $application->clearance_tier,
                    'department_id' => $department->id,
                    'status' => 'provisioned',
                    'provisioned_at' => now(),
                ],
            );

            $this->audit('account_application.reprovisioned', $application, 'Administrator restored a missing account from its approved application.');

            return $user;
        });

        return back()->with('success', "Account restored for {$user->email}. Provide the new password to the account holder through a secure channel.");
    }

    public function updateIdentificationNumber(Request $request, AccountApplication $application): RedirectResponse
    {
        abort_unless(Auth::user()?->role === 'admin', 403);
        abort_unless($application->status === 'pending', 409);

        $validated = $request->validate([
            'identification_number' => [
                'required',
                'string',
                'max:100',
                Rule::unique('users', 'identification_number'),
                Rule::unique('account_applications', 'identification_number')->ignore($application->id),
            ],
        ]);

        $application->update(['identification_number' => $validated['identification_number']]);
        $this->audit('account_application.identification_updated', $application, 'Administrator corrected the applicant identification number.');

        return back()->with('success', 'Applicant identification number updated. The application can now be approved.');
    }

    public function reject(Request $request, AccountApplication $application)
    {
        abort_if($application->status !== 'pending', 409);

        $validated = $request->validate([
            'rejection_reason' => ['required', 'string', 'max:2000'],
        ]);

        $application->update([
            'status' => 'rejected',
            'reviewed_by' => Auth::id(),
            'reviewed_at' => now(),
            'rejection_reason' => $validated['rejection_reason'],
        ]);

        $this->audit('account_application.rejected', $application, 'Institutional account application rejected.');

        return back()->with('success', 'Application rejected.');
    }

    private function audit(string $action, $subject, string $description): void
    {
        AuditLog::create([
            'user_id' => Auth::id(),
            'action' => $action,
            'subject_type' => get_class($subject),
            'subject_id' => $subject->id,
            'description' => $description,
            'ip_address' => request()->ip(),
            'metadata' => null,
        ]);
    }
}
