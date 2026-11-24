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
        ]);

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
        $administrators = User::query()
            ->where('role', 'admin')
            ->where('account_status', 'active')
            ->orderBy('name')
            ->get(['id', 'name']);
        $ticketStatuses = HelpdeskTicket::STATUSES;
        $ticketCategories = HelpdeskTicket::CATEGORIES;
        $ticketCategoryLabels = [
            'account_access' => 'Account lockout or password reset',
            'two_factor' => '2FA token or authenticator issue',
            'document_access' => 'Document access or clearance',
            'technical_incident' => 'Technical incident',
            'other' => 'Other support question',
        ];
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
