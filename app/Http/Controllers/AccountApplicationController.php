<?php

namespace App\Http\Controllers;

use App\Models\AccessRequest;
use App\Models\AccountApplication;
use App\Models\AccountProvisioningRecord;
use App\Models\AuditLog;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccountApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'idNumber' => ['required', 'string', 'max:100'],
            'cvsuEmail' => ['required', 'email', 'max:255', 'unique:account_applications,institutional_email'],
            'phoneNumber' => ['required', 'string', 'max:50'],
            'collegeUnit' => ['required', 'string', 'max:255'],
            'deptUnit' => ['required', 'string', 'max:255'],
            'clearanceTier' => ['required', 'in:tier1,tier2,tier3,tier4'],
            'justification' => ['required', 'string', 'max:3000'],
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
            'status' => 'pending',
        ]);

        $this->audit('account_application.submitted', $application, 'Institutional account application submitted.');

        return back()->with('account_application_submitted', true);
    }

    public function index()
    {
        $applications = AccountApplication::query()
            ->latest()
            ->paginate(20);
        $documentAccessRequests = AccessRequest::with(['requester', 'document', 'reviewer'])
            ->latest()
            ->paginate(20, ['*'], 'access_page');

        return view('admin.access-requests', compact('applications', 'documentAccessRequests'));
    }

    public function approve(AccountApplication $application)
    {
        abort_if($application->status !== 'pending', 409);

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
                'password' => Hash::make(Str::random(32)),
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
