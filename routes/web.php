<?php

use App\Http\Controllers\AccessRequestController;
use App\Http\Controllers\AccountApplicationController;
use App\Http\Controllers\AuditLogController;
use App\Http\Controllers\DocumentCategoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SystemSettingController;
use App\Http\Controllers\UserManagementController;
use App\Models\AccessRequest;
use App\Models\AccountApplication;
use App\Models\AuditLog;
use App\Models\Department;
use App\Models\Document;
use App\Models\DocumentCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
    Route::get('/document-categories', [DocumentCategoryController::class, 'index'])->name('document-categories');
    Route::post('/document-categories', [DocumentCategoryController::class, 'store'])->name('document-categories.store');
    Route::patch('/document-categories/{documentCategory}', [DocumentCategoryController::class, 'update'])->name('document-categories.update');
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
        $categories = DocumentCategory::query()
            ->with('department')
            ->where('active', true)
            ->orderBy('name')
            ->get();
        $departments = Department::where('active', true)->orderBy('name')->get();
        $documentCount = Document::count();
        $recentDocuments = Document::with(['uploader', 'category', 'department'])
            ->where('status', 'sealed')
            ->latest()
            ->limit(20)
            ->get()
            ->filter(fn (Document $document) => Storage::disk('local')->exists($document->file_path))
            ->take(5)
            ->values();

        return view('admin.deposit-file', compact('categories', 'departments', 'documentCount', 'recentDocuments'));
    })->name('deposit-file');
    Route::get('/document-library', function (Request $request) {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:120'],
            'category' => ['nullable', 'integer', 'exists:document_categories,id'],
        ]);
        $search = trim($validated['search'] ?? '');
        $query = Document::query()
            ->with(['uploader', 'category', 'department'])
            ->latest();

        if ($search !== '') {
            $query->where(function ($documentQuery) use ($search) {
                $documentQuery->where('title', 'like', "%{$search}%")
                    ->orWhere('original_name', 'like', "%{$search}%")
                    ->orWhere('tracking_number', 'like', "%{$search}%");
            });
        }

        if (isset($validated['category'])) {
            $query->where('category_id', $validated['category']);
        }

        $documents = $query->paginate(25)->withQueryString();
        $documents->getCollection()->each(function (Document $document): void {
            $document->setAttribute('file_available', Storage::disk('local')->exists($document->file_path));
        });
        $departments = Department::where('active', true)->orderBy('name')->get();
        $categories = DocumentCategory::where('active', true)->orderBy('name')->get();
        $selectedCategoryId = $validated['category'] ?? null;

        return view('admin.document-library', compact('categories', 'departments', 'documents', 'search', 'selectedCategoryId'));
    })->name('document-library');
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
        $user = Auth::user();
        $clearanceLevel = (int) substr($user->clearance_tier, -1);
        $directTiers = collect(['tier2', 'tier3'])
            ->filter(fn (string $tier) => (int) substr($tier, -1) <= $clearanceLevel)
            ->all();
        $accessibleDocuments = Document::query()
            ->with(['category', 'department'])
            ->where('status', 'sealed')
            ->where(function ($query) use ($user, $directTiers) {
                $query->where('access_tier', 'tier1')
                    ->orWhere(function ($restrictedQuery) use ($user, $directTiers) {
                        $restrictedQuery
                            ->whereIn('access_tier', $directTiers)
                            ->where('department_id', $user->department_id);
                    })
                    ->orWhere(function ($tier4Query) use ($user) {
                        $tier4Query->where('access_tier', 'tier4')
                            ->whereHas('accessRequests', function ($accessQuery) use ($user) {
                                $accessQuery->where('requester_id', $user->id)
                                    ->where('status', 'approved')
                                    ->where(function ($expiryQuery) {
                                        $expiryQuery->whereNull('expires_at')
                                            ->orWhere('expires_at', '>', now());
                                    });
                            });
                    });
            })
            ->latest()
            ->get()
            ->filter(fn (Document $document) => Storage::disk('local')->exists($document->file_path))
            ->values();
        $documents = $accessibleDocuments->take(5);
        $pendingAccessRequests = $user->accessRequests()->where('status', 'pending')->count();
        $documentCount = $accessibleDocuments->count();
        $sealedDocumentCount = $documentCount;
        $personnelCount = User::whereIn('role', ['faculty', 'student', 'admin'])->count();

        return view('faculty.dashboard', compact(
            'documents',
            'pendingAccessRequests',
            'documentCount',
            'sealedDocumentCount',
            'personnelCount',
        ));
    })->name('dashboard');
    Route::get('/document-library', function (Request $request) {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:120'],
            'category' => ['nullable', 'integer', 'exists:document_categories,id'],
        ]);
        $user = Auth::user();
        $clearanceLevel = (int) substr($user->clearance_tier, -1);
        $directTiers = collect(['tier2', 'tier3'])
            ->filter(fn (string $tier) => (int) substr($tier, -1) <= $clearanceLevel)
            ->all();
        $query = Document::query()
            ->with(['category', 'department', 'uploader'])
            ->where('status', 'sealed')
            ->where(function ($query) use ($user, $directTiers) {
                $query->where('access_tier', 'tier1')
                    ->orWhere(function ($restrictedQuery) use ($user, $directTiers) {
                        $restrictedQuery
                            ->whereIn('access_tier', $directTiers)
                            ->where('department_id', $user->department_id);
                    })
                    ->orWhere(function ($tier4Query) use ($user) {
                        $tier4Query->where('access_tier', 'tier4')
                            ->whereHas('accessRequests', function ($accessQuery) use ($user) {
                                $accessQuery->where('requester_id', $user->id)
                                    ->where('status', 'approved')
                                    ->where(function ($expiryQuery) {
                                        $expiryQuery->whereNull('expires_at')
                                            ->orWhere('expires_at', '>', now());
                                    });
                            });
                    });
            });

        $categoryIds = (clone $query)
            ->whereNotNull('category_id')
            ->distinct()
            ->pluck('category_id');
        $search = trim($validated['search'] ?? '');
        if ($search !== '') {
            $query->where(function ($searchQuery) use ($search) {
                $searchQuery->where('title', 'like', "%{$search}%")
                    ->orWhere('original_name', 'like', "%{$search}%")
                    ->orWhere('tracking_number', 'like', "%{$search}%");
            });
        }

        if (isset($validated['category'])) {
            $query->where('category_id', $validated['category']);
        }

        $documents = $query->latest()
            ->get()
            ->filter(fn (Document $document) => Storage::disk('local')->exists($document->file_path))
            ->values();
        $categories = DocumentCategory::query()
            ->where('active', true)
            ->whereIn('id', $categoryIds)
            ->orderBy('name')
            ->get();
        $selectedCategoryId = $validated['category'] ?? null;

        return view('faculty.document-library', compact('categories', 'documents', 'search', 'selectedCategoryId'));
    })->name('document-library');
    Route::get('/document-categories', [DocumentCategoryController::class, 'index'])->name('document-categories');
    Route::post('/document-categories', [DocumentCategoryController::class, 'store'])->name('document-categories.store');
    Route::patch('/document-categories/{documentCategory}', [DocumentCategoryController::class, 'update'])->name('document-categories.update');
    Route::view('/clearance-requests', 'faculty.clearance-requests')->name('clearance-requests');
    Route::get('/department-records', fn () => redirect()->route('faculty.preview.document-library'))
        ->name('department-records');
    Route::get('/submit-department-file', function () {
        $user = Auth::user();
        $clearanceLevel = (int) substr($user->clearance_tier, -1);
        $allowedTiers = collect(['tier1', 'tier2', 'tier3'])
            ->filter(fn (string $tier) => (int) substr($tier, -1) <= $clearanceLevel)
            ->all();
        $categories = DocumentCategory::query()
            ->with('department')
            ->where('active', true)
            ->whereIn('access_tier', $allowedTiers)
            ->where(function ($query) use ($user) {
                $query->where('access_tier', 'tier1')
                    ->orWhere(function ($restrictedQuery) use ($user) {
                        $restrictedQuery
                            ->whereIn('access_tier', ['tier2', 'tier3'])
                            ->where('department_id', $user->department_id);
                    });
            })
            ->orderBy('name')
            ->get();
        $recentDocuments = Auth::user()->documents()
            ->with(['category', 'uploader'])
            ->where('status', 'sealed')
            ->latest()
            ->limit(20)
            ->get()
            ->filter(fn (Document $document) => Storage::disk('local')->exists($document->file_path))
            ->take(5)
            ->values();

        return view('faculty.submit-department-file', compact('categories', 'recentDocuments'));
    })->name('submit-department-file');
    Route::get('/tier-4-access-request', function () {
        $documents = Document::query()
            ->where('access_tier', 'tier4')
            ->where('status', 'sealed')
            ->latest()
            ->get()
            ->filter(fn (Document $document) => Storage::disk('local')->exists($document->file_path))
            ->values();
        $pendingAccessRequests = AccessRequest::with('document')
            ->where('requester_id', Auth::id())
            ->whereHas('document', function ($query) {
                $query->where('access_tier', 'tier4');
            })
            ->whereIn('status', ['pending', 'approved'])
            ->latest()
            ->get();

        return view('faculty.tier-4-access-request', compact('documents', 'pendingAccessRequests'));
    })->name('tier-4-access-request');
    Route::get('/clearance-submitted', fn () => redirect()->route('faculty.preview.tier-4-access-request'))
        ->name('clearance-submitted');

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

Route::get('/faculty/tier-4-access-request', fn () => redirect()->route('faculty.preview.tier-4-access-request'))
    ->middleware(['auth', 'role:faculty'])
    ->name('faculty.tier-4-access-request');

Route::get('/faculty/clearance-submitted', fn () => redirect()->route('faculty.preview.tier-4-access-request'))
    ->middleware(['auth', 'role:faculty'])
    ->name('faculty.clearance-submitted');

// Faculty Form Submission Routes
Route::post('/faculty/submit-department-file', function (Request $request) {
    $request->files->set('file', $request->files->get('department_file'));
    $request->merge([
        'title' => $request->input('document_title'),
        'tracking_number' => 'CEIT-'.Str::upper(Str::uuid()->toString()),
    ]);

    return app(DocumentController::class)->store($request);

})->middleware(['auth', 'role:faculty'])->name('faculty.submit-department-file');

Route::post('/faculty/submit-tier-4-access-request', [AccessRequestController::class, 'store'])
    ->middleware(['auth', 'role:faculty'])
    ->name('faculty.submit-tier-4-access-request');

// Student Preview Routes
Route::prefix('student/preview')->name('student.preview.')->middleware(['auth', 'role:student'])->group(function () {
    $getAccessibleDocuments = static function (?string $search = null, ?int $categoryId = null): Collection {
        $clearanceLevel = (int) substr(Auth::user()->clearance_tier, -1);
        $tiers = $clearanceLevel >= 2 ? ['tier1', 'tier2'] : ['tier1'];

        $query = Document::query()
            ->with(['category', 'department'])
            ->where('status', 'sealed')
            ->whereIn('access_tier', $tiers);

        if ($search !== null && $search !== '') {
            $query->where(function ($searchQuery) use ($search) {
                $searchQuery->where('title', 'like', "%{$search}%")
                    ->orWhere('original_name', 'like', "%{$search}%")
                    ->orWhere('tracking_number', 'like', "%{$search}%");
            });
        }

        if ($categoryId !== null) {
            $query->where('category_id', $categoryId);
        }

        return $query->latest()->get()
            ->filter(fn (Document $document) => Storage::disk('local')->exists($document->file_path))
            ->values();
    };

    Route::get('/', function () use ($getAccessibleDocuments) {
        $accessibleDocuments = $getAccessibleDocuments();
        $documentCount = $accessibleDocuments->count();
        $accessRequestCount = AccessRequest::where('requester_id', Auth::id())->count();
        $documents = $accessibleDocuments->take(5);

        return view('student.dashboard', compact('documentCount', 'accessRequestCount', 'documents', 'accessibleDocuments'));
    })->name('dashboard');
    Route::get('/document-library', function (Request $request) use ($getAccessibleDocuments) {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:120'],
            'category' => ['nullable', 'integer', 'exists:document_categories,id'],
        ]);
        $search = trim($validated['search'] ?? '');
        $categoryId = isset($validated['category']) ? (int) $validated['category'] : null;
        $documents = $getAccessibleDocuments($search, $categoryId);
        $documentCount = $documents->count();
        $categoryCounts = $getAccessibleDocuments()
            ->whereNotNull('category_id')
            ->countBy('category_id');
        $categories = DocumentCategory::query()
            ->where('active', true)
            ->whereIn('id', $categoryCounts->keys())
            ->orderBy('name')
            ->get();
        $categories->each(function (DocumentCategory $category) use ($categoryCounts): void {
            $category->setAttribute('documents_count', $categoryCounts->get($category->id));
        });
        $selectedCategoryId = $categoryId;

        return view('student.document-library', compact('categories', 'documents', 'documentCount', 'search', 'selectedCategoryId'));
    })->name('document-library');
    Route::get('/categories', function () use ($getAccessibleDocuments) {
        $categoryCounts = $getAccessibleDocuments()
            ->whereNotNull('category_id')
            ->countBy('category_id');
        $categories = DocumentCategory::query()
            ->where('active', true)
            ->whereIn('id', $categoryCounts->keys())
            ->orderBy('name')
            ->get();
        $categories->each(function (DocumentCategory $category) use ($categoryCounts): void {
            $category->setAttribute('documents_count', $categoryCounts->get($category->id));
        });

        return view('student.categories', compact('categories'));
    })->name('categories');
    Route::view('/library-research', 'student.library-research')->name('library-research');
    Route::view('/account-settings', 'student.account-settings')->name('account-settings');
    Route::view('/system-settings', 'student.system-settings')->name('system-settings');
    Route::view('/logout-confirmation', 'student.logout-confirmation')->name('logout-confirmation');
});

// Viewer Preview Routes
Route::prefix('viewer/preview')->name('viewer.preview.')->middleware(['auth', 'role:viewer'])->group(function () {
    $getPublicDocuments = static function (?string $search = null, ?int $categoryId = null): Collection {
        $query = Document::query()
            ->with(['category', 'department'])
            ->where('access_tier', 'tier1')
            ->where('status', 'sealed');

        if ($search !== null && $search !== '') {
            $query->where(function ($searchQuery) use ($search) {
                $searchQuery->where('title', 'like', "%{$search}%")
                    ->orWhere('original_name', 'like', "%{$search}%")
                    ->orWhere('tracking_number', 'like', "%{$search}%");
            });
        }

        if ($categoryId !== null) {
            $query->where('category_id', $categoryId);
        }

        return $query->latest()->get()
            ->filter(fn (Document $document) => Storage::disk('local')->exists($document->file_path))
            ->values();
    };

    Route::get('/', function () use ($getPublicDocuments) {
        $publicDocuments = $getPublicDocuments()->take(20)->values();

        return view('viewer.dashboard', [
            'publicDocuments' => $publicDocuments,
            'guestAccess' => false,
        ]);
    })->name('dashboard');
    Route::get('/document-library', function (Request $request) use ($getPublicDocuments) {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:120'],
            'category' => ['nullable', 'integer', 'exists:document_categories,id'],
        ]);
        $search = trim($validated['search'] ?? '');
        $categoryId = isset($validated['category']) ? (int) $validated['category'] : null;
        $publicDocuments = $getPublicDocuments($search, $categoryId);
        $documents = $publicDocuments;
        $documentCount = $documents->count();
        $categoryCounts = $getPublicDocuments()
            ->whereNotNull('category_id')
            ->countBy('category_id');
        $categories = DocumentCategory::query()
            ->where('active', true)
            ->whereIn('id', $categoryCounts->keys())
            ->orderBy('name')
            ->get();
        $categories->each(function (DocumentCategory $category) use ($categoryCounts): void {
            $category->setAttribute('documents_count', $categoryCounts->get($category->id));
        });
        $selectedCategoryId = $categoryId;

        return view('student.document-library', compact('categories', 'documentCount', 'documents', 'publicDocuments', 'search', 'selectedCategoryId'));
    })->name('document-library');
    Route::get('/categories', function () use ($getPublicDocuments) {
        $categoryCounts = $getPublicDocuments()
            ->whereNotNull('category_id')
            ->countBy('category_id');
        $categories = DocumentCategory::query()
            ->where('active', true)
            ->whereIn('id', $categoryCounts->keys())
            ->orderBy('name')
            ->get();
        $categories->each(function (DocumentCategory $category) use ($categoryCounts): void {
            $category->setAttribute('documents_count', $categoryCounts->get($category->id));
        });

        return view('student.categories', compact('categories'));
    })->name('categories');
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
