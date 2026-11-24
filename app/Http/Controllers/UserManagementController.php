<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserManagementController extends Controller
{
    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'role' => ['required', Rule::in(['admin', 'faculty', 'student', 'viewer'])],
            'clearance_tier' => ['required', Rule::in(['tier1', 'tier2', 'tier3', 'tier4'])],
            'account_status' => ['required', Rule::in(['active', 'inactive', 'suspended'])],
        ]);

        $currentAdmin = Auth::user();
        abort_unless($currentAdmin && $currentAdmin->role === 'admin', 403);

        if ($user->is(Auth::user()) && $validated['role'] !== 'admin') {
            return back()->withErrors(['role' => 'You cannot remove your own administrator role.'])->withInput();
        }

        if ($user->is(Auth::user()) && $validated['account_status'] !== 'active') {
            return back()->withErrors(['account_status' => 'You cannot deactivate or suspend your own administrator account.'])->withInput();
        }

        if ($user->role === 'admin' && $validated['role'] !== 'admin') {
            $activeAdmins = User::where('role', 'admin')->where('account_status', 'active')->count();
            if ($activeAdmins <= 1) {
                return back()->withErrors(['role' => 'At least one active administrator must remain.'])->withInput();
            }
        }

        if ($user->role === 'admin'
            && $user->account_status === 'active'
            && $validated['account_status'] !== 'active') {
            $activeAdmins = User::where('role', 'admin')->where('account_status', 'active')->count();
            if ($activeAdmins <= 1) {
                return back()->withErrors(['account_status' => 'At least one active administrator must remain.'])->withInput();
            }
        }

        $before = $user->only(['role', 'clearance_tier', 'account_status']);
        $user->update($validated);

        AuditLog::create([
            'user_id' => $currentAdmin->id,
            'action' => 'user.management.updated',
            'subject_type' => User::class,
            'subject_id' => $user->id,
            'description' => 'Administrator updated role, clearance tier, or account status.',
            'ip_address' => $request->ip(),
            'metadata' => [
                'before' => $before,
                'after' => $user->only(['role', 'clearance_tier', 'account_status']),
            ],
        ]);

        return back()->with('success', 'User account settings updated.');
    }
}
