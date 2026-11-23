<?php

use App\Http\Controllers\AccessRequestController;
use App\Http\Controllers\AccountApplicationController;
use App\Http\Controllers\AuditLogController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SystemSettingController;
use App\Http\Controllers\UserManagementController;
use App\Models\AccessRequest;
use App\Models\AccountApplication;
use App\Models\AuditLog;
use App\Models\Document;
use App\Models\DocumentCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Main Login Page
Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (! Auth::attempt([
        'email' => strtolower(trim($validated['email'])),
        'password' => $validated['password'],
        'account_status' => 'active',
    ])) {
        return back()->withErrors(['email' => 'The institutional credentials are invalid.']);
    }

    $request->session()->regenerate();

    return redirect('/preview/two-factor');
});

// Helpdesk
Route::view('/helpdesk', 'helpdesk.index')->name('helpdesk');

// Institutional Account Request
Route::get('/institutional-account-request', fn () => view('auth.institutional-account-request'))
    ->name('institutional-account-request');
Route::post('/institutional-account-request', [AccountApplicationController::class, 'store'])
    ->name('institutional-account-request.store');

Route::get('/documents/{document}/download', [DocumentController::class, 'download'])
    ->middleware('auth')
    ->name('documents.download');

Route::get('/viewer/guest', [DocumentController::class, 'guestDashboard'])
    ->middleware('throttle:60,1')
    ->name('viewer.guest.dashboard');
Route::get('/viewer/guest/documents/{document}/download', [DocumentController::class, 'downloadPublic'])
    ->middleware('throttle:20,1')
    ->name('viewer.guest.documents.download');

// Frontend Preview Routes
Route::prefix('preview')->group(function () {

    // Two-Factor Authentication
    Route::view('/two-factor', 'auth.two-factor')->middleware('auth');
    Route::view('/two-factor-invalid', 'auth.two-factor-invalid');
    Route::view('/two-factor-success', 'auth.two-factor-success');
    Route::view('/two-factor-enrollment', 'auth.two-factor-enrollment');

    // Account Lockout and Unlock
    Route::view('/account-locked', 'auth.account-locked');
    Route::view('/unlock-request', 'auth.unlock-request');
    Route::view('/unlock-request-submitted', 'auth.unlock-request-submitted');
    Route::view('/unlock-confirmation', 'auth.unlock-confirmation');

    // Password Recovery
    Route::view('/forgot-password', 'auth.forgot-password');
    Route::view('/reset-success', 'auth.password-reset-success');
    Route::view('/set-password', 'auth.set-new-password');
    Route::view('/reauth', 'auth.password-reset-reauth');

    // Security and Session Management
    Route::view('/clearance-action', 'auth.clearance-action');
    Route::view('/sessions', 'auth.terminated-sessions');
    Route::view('/session-expired', 'auth.session-expired-modal');
    Route::view('/session-terminated', 'auth.session-terminated');
});

// Admin Preview Routes
Route::prefix('admin/preview')->name('admin.preview.')->middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/', function () {
        $dashboard = [
            'user_count' => User::count(),
            'document_count' => Document::count(),
            'pending_applications' => AccountApplication::where('status', 'pending')->count(),
            'pending_access_requests' => AccessRequest::where('status', 'pending')->count(),
            'audit_today' => AuditLog::whereDate('created_at', today())->count(),
        ];
        $recentAuditLogs = AuditLog::with('user')->latest()->limit(10)->get();
        $recentUsers = User::with('department')->latest()->limit(5)->get();

        return view('admin.index', compact('dashboard', 'recentAuditLogs', 'recentUsers'));
    })->name('dashboard');
    Route::get('/access-levels', fn () => view('admin.access-levels'))->name('access-levels');
    Route::get('/access-requests', [AccountApplicationController::class, 'index'])->name('access-requests');
    Route::post('/access-requests/{application}/approve', [AccountApplicationController::class, 'approve'])->name('access-requests.approve');
    Route::post('/access-requests/{application}/reject', [AccountApplicationController::class, 'reject'])->name('access-requests.reject');
    Route::patch('/access-requests/{application}/identification-number', [AccountApplicationController::class, 'updateIdentificationNumber'])->name('access-requests.identification-number.update');
    Route::post('/access-requests/{application}/reprovision', [AccountApplicationController::class, 'reprovision'])->name('access-requests.reprovision');
    Route::post('/document-access-requests/{accessRequest}/approve', [AccessRequestController::class, 'approve'])->name('document-access-requests.approve');
    Route::post('/document-access-requests/{accessRequest}/reject', [AccessRequestController::class, 'reject'])->name('document-access-requests.reject');
    Route::get('/audit-logs', [AuditLogController::class, 'index'])->name('audit-logs');
    Route::get('/user-management', function () {
        $users = User::with('department')->orderBy('name')->paginate(25);
        $roleCounts = User::selectRaw('role, COUNT(*) as total')->groupBy('role')->pluck('total', 'role');
        $statusCounts = User::selectRaw('account_status, COUNT(*) as total')->groupBy('account_status')->pluck('total', 'account_status');

        return view('admin.user-management', compact('users', 'roleCounts', 'statusCounts'));
    })->name('user-management');
    Route::patch('/user-management/{user}', [UserManagementController::class, 'update'])->name('user-management.update');
    Route::get('/system-settings', [SystemSettingController::class, 'index'])->name('system-settings');
    Route::put('/system-settings', [SystemSettingController::class, 'update'])->name('system-settings.update');
    Route::get('/deposit-file', function () {
        $categories = DocumentCategory::where('active', true)->orderBy('name')->get();
        $recentDocuments = Document::with(['uploader', 'category'])->latest()->limit(5)->get();

        return view('admin.deposit-file', compact('categories', 'recentDocuments'));
    })->name('deposit-file');
    Route::post('/deposit-file', [DocumentController::class, 'store'])->name('deposit-file.store');
    Route::patch('/documents/{document}', [DocumentController::class, 'update'])->name('documents.update');
    Route::delete('/documents/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy');
    Route::get('/provision-stage-1', fn () => view('admin.provision-stage-1'))->name('provision-stage-1');
    Route::get('/stage-3', fn () => view('admin.stage-3'))->name('stage-3');
    Route::get('/provisioning-receipt', fn () => view('admin.provisioning-receipt'))->name('provisioning-receipt');

    Route::get('/provision-stage-2', fn () => redirect('/admin/preview/provision-stage-1#vault-clearance-tier-delegation')
    )->name('provision-stage-2-embedded');

    // Tier 4 Admin Logout Confirmation
    Route::get('/logout-confirmation', function () {
        return view('admin.logout-confirmation');
    })->name('logout-confirmation');
});

// Faculty Preview Routes
Route::prefix('faculty/preview')->name('faculty.preview.')->middleware(['auth', 'role:faculty'])->group(function () {

    // Faculty Pages
    Route::get('/', function () {
        $documents = Document::with(['category', 'department'])->latest()->limit(20)->get();
        $pendingAccessRequests = AccessRequest::where('status', 'pending')->count();
        $documentCount = Document::count();
        $sealedDocumentCount = Document::where('status', 'sealed')->count();
        $personnelCount = User::whereIn('role', ['faculty', 'student', 'admin'])->count();

        return view('faculty.dashboard', compact(
            'documents',
            'pendingAccessRequests',
            'documentCount',
            'sealedDocumentCount',
            'personnelCount',
        ));
    })->name('dashboard');
    Route::get('/document-library', function () {
        $user = Auth::user();
        $documents = Document::query()
            ->with(['category', 'department', 'uploader'])
            ->where(function ($query) use ($user) {
                $query->whereIn('access_tier', ['tier1', 'tier2', 'tier3'])
                    ->where(function ($departmentQuery) use ($user) {
                        $departmentQuery->whereNull('department_id')
                            ->orWhere('department_id', $user->department_id);
                    })
                    ->orWhere(function ($tier4Query) use ($user) {
                        $tier4Query->where('access_tier', 'tier4')
                            ->whereHas('accessRequests', function ($accessQuery) use ($user) {
                                $accessQuery->where('requester_id', $user->id)
                                    ->where('status', 'approved')
                                    ->where(function ($expiryQuery) {
                                        $expiryQuery->whereNull('expires_at')->orWhere('expires_at', '>', now());
                                    });
                            });
                    });
            })
            ->latest()
            ->get();

        return view('faculty.document-library', compact('documents'));
    })->name('document-library');
    Route::view('/clearance-requests', 'faculty.clearance-requests')->name('clearance-requests');
    Route::view('/department-records', 'faculty.department-records')->name('department-records');
    Route::view('/submit-department-file', 'faculty.submit-department-file')->name('submit-department-file');
    Route::get('/tier-4-access-request', function () {
        $documents = Document::where('access_tier', 'tier4')->latest()->get();
        $pendingAccessRequests = AccessRequest::where('requester_id', Auth::id())
            ->whereHas('document', function ($query) {
                $query->where('access_tier', 'tier4');
            })
            ->whereIn('status', ['pending', 'approved'])
            ->latest()
            ->get();

        return view('faculty.tier-4-access-request', compact('documents', 'pendingAccessRequests'));
    })->name('tier-4-access-request');
    Route::view('/clearance-submitted', 'faculty.clearance-submitted')->name('clearance-submitted');

    // Faculty Logout Confirmation
    Route::get('/logout-confirmation', function () {
        return view('faculty.logout-confirmation');
    })->name('logout-confirmation');
});

Route::post('/faculty/access-requests', [AccessRequestController::class, 'store'])
    ->middleware(['auth', 'role:faculty'])
    ->name('faculty.access-requests.store');

Route::post('/student/access-requests', [AccessRequestController::class, 'store'])
    ->middleware(['auth', 'role:student'])
    ->name('student.access-requests.store');

// Faculty Direct URL Routes
// These allow pages to be opened without /preview in the URL.

Route::get('/faculty/tier-4-access-request', function () {
    $documents = Document::where('access_tier', 'tier4')->latest()->get();
    $pendingAccessRequests = AccessRequest::where('requester_id', Auth::id())
        ->whereHas('document', function ($query) {
            $query->where('access_tier', 'tier4');
        })
        ->whereIn('status', ['pending', 'approved'])
        ->latest()
        ->get();

    return view('faculty.tier-4-access-request', compact('documents', 'pendingAccessRequests'));
})->middleware(['auth', 'role:faculty'])->name('faculty.tier-4-access-request');

Route::view(
    '/faculty/clearance-submitted',
    'faculty.clearance-submitted'
)->middleware(['auth', 'role:faculty'])->name('faculty.clearance-submitted');

// Faculty Form Submission Routes
Route::post('/faculty/submit-department-file', function (Request $request) {
    $request->files->set('file', $request->file('department_file'));
    $category = DocumentCategory::query()
        ->where('slug', (string) $request->input('document_category'))
        ->orWhere('name', (string) $request->input('document_category'))
        ->first();
    $request->merge([
        'title' => $request->input('document_title'),
        'tracking_number' => 'CEIT-'.strtoupper(substr(hash('sha256', (string) now()), 0, 12)),
        'category_id' => $category?->id,
        'access_tier' => match ((string) $request->input('access_tier', 'tier3')) {
            '2' => 'tier2',
            '4' => 'tier4',
            'tier2' => 'tier2',
            'tier4' => 'tier4',
            default => 'tier3',
        },
    ]);

    return app(DocumentController::class)->store($request);

})->middleware(['auth', 'role:faculty'])->name('faculty.submit-department-file');

Route::post('/faculty/submit-tier-4-access-request', [AccessRequestController::class, 'store'])
    ->middleware(['auth', 'role:faculty'])
    ->name('faculty.submit-tier-4-access-request');

// Student Preview Routes
Route::prefix('student/preview')->name('student.preview.')->middleware(['auth', 'role:student'])->group(function () {

    Route::get('/', function () {
        $documentCount = Document::whereIn('access_tier', ['tier1', 'tier2'])->count();
        $accessRequestCount = AccessRequest::where('requester_id', Auth::id())->count();
        $accessibleDocuments = Document::whereIn('access_tier', ['tier1', 'tier2'])
            ->latest()
            ->get();
        $documents = Document::whereIn('access_tier', ['tier1', 'tier2'])
            ->with(['category', 'department'])
            ->latest()
            ->limit(5)
            ->get();

        return view('student.dashboard', compact('documentCount', 'accessRequestCount', 'documents', 'accessibleDocuments'));
    })->name('dashboard');
    Route::get('/document-library', function () {
        $documents = Document::whereIn('access_tier', ['tier1', 'tier2'])
            ->with(['category', 'department'])
            ->latest()
            ->get();
        $documentCount = $documents->count();

        return view('student.document-library', compact('documents', 'documentCount'));
    })->name('document-library');
    Route::view('/categories', 'student.categories')->name('categories');
    Route::view('/library-research', 'student.library-research')->name('library-research');
    Route::view('/account-settings', 'student.account-settings')->name('account-settings');
    Route::view('/system-settings', 'student.system-settings')->name('system-settings');
    Route::view('/logout-confirmation', 'student.logout-confirmation')->name('logout-confirmation');
});

// Viewer Preview Routes
Route::prefix('viewer/preview')->name('viewer.preview.')->middleware(['auth', 'role:viewer'])->group(function () {

    Route::get('/', function () {
        $publicDocuments = Document::where('access_tier', 'tier1')->latest()->limit(20)->get();

        return view('viewer.dashboard', [
            'publicDocuments' => $publicDocuments,
            'guestAccess' => false,
        ]);
    })->name('dashboard');
    Route::get('/document-library', function () {
        $publicDocuments = Document::where('access_tier', 'tier1')->latest()->get();
        $documents = $publicDocuments;

        return view('student.document-library', compact('publicDocuments', 'documents'));
    })->name('document-library');
    Route::view('/categories', 'student.categories')->name('categories');
    Route::view('/library-research', 'student.library-research')->name('library-research');
    Route::view('/account-settings', 'student.account-settings')->name('account-settings');
    Route::view('/system-settings', 'student.system-settings')->name('system-settings');
    Route::view('/logout-confirmation', 'student.logout-confirmation')->name('logout-confirmation');
});

// Actual Laravel Logout
Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');

})->name('logout');
