<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Main Login Page
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Helpdesk
Route::view('/helpdesk', 'helpdesk.index')->name('helpdesk');

// Institutional Account Request
Route::view(
    '/institutional-account-request',
    'auth.institutional-account-request'
)->name('institutional-account-request');

// Frontend Preview Routes
Route::prefix('preview')->group(function () {

    // Two-Factor Authentication
    Route::view('/two-factor', 'auth.two-factor');
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
Route::prefix('admin/preview')->name('admin.preview.')->group(function () {

    Route::get('/', fn () => view('admin.index'))->name('dashboard');
    Route::get('/access-levels', fn () => view('admin.access-levels'))->name('access-levels');
    Route::get('/access-requests', fn () => view('admin.access-requests'))->name('access-requests');
    Route::get('/audit-logs', fn () => view('admin.audit-logs'))->name('audit-logs');
    Route::get('/user-management', fn () => view('admin.user-management'))->name('user-management');
    Route::get('/system-settings', fn () => view('admin.system-settings'))->name('system-settings');
    Route::get('/deposit-file', fn () => view('admin.deposit-file'))->name('deposit-file');
    Route::get('/provision-stage-1', fn () => view('admin.provision-stage-1'))->name('provision-stage-1');
    Route::get('/stage-3', fn () => view('admin.stage-3'))->name('stage-3');
    Route::get('/provisioning-receipt', fn () => view('admin.provisioning-receipt'))->name('provisioning-receipt');

    Route::get('/provision-stage-2', fn () =>
        redirect('/admin/preview/provision-stage-1#vault-clearance-tier-delegation')
    )->name('provision-stage-2-embedded');

    // Tier 4 Admin Logout Confirmation
    Route::get('/logout-confirmation', function () {
        return view('admin.logout-confirmation');
    })->name('logout-confirmation');
});

// Faculty Preview Routes
Route::prefix('faculty/preview')->name('faculty.preview.')->group(function () {

    // Faculty Pages
    Route::view('/', 'faculty.dashboard')->name('dashboard');
    Route::view('/document-library', 'faculty.document-library')->name('document-library');
    Route::view('/clearance-requests', 'faculty.clearance-requests')->name('clearance-requests');
    Route::view('/department-records', 'faculty.department-records')->name('department-records');
    Route::view('/submit-department-file', 'faculty.submit-department-file')->name('submit-department-file');
    Route::view('/tier-4-access-request', 'faculty.tier-4-access-request')->name('tier-4-access-request');
    Route::view('/clearance-submitted', 'faculty.clearance-submitted')->name('clearance-submitted');

    // Faculty Logout Confirmation
    Route::get('/logout-confirmation', function () {
        return view('faculty.logout-confirmation');
    })->name('logout-confirmation');
});

// Faculty Direct URL Routes
// These allow pages to be opened without /preview in the URL.

Route::view(
    '/faculty/tier-4-access-request',
    'faculty.tier-4-access-request'
)->name('faculty.tier-4-access-request');

Route::view(
    '/faculty/clearance-submitted',
    'faculty.clearance-submitted'
)->name('faculty.clearance-submitted');

// Faculty Form Submission Routes
Route::post('/faculty/submit-department-file', function (Request $request) {

    // Temporary placeholder until the actual upload handling is implemented.
    return redirect()
        ->route('faculty.preview.department-records')
        ->with('info', 'Department file submission route reached. File processing is not yet configured.');

})->name('faculty.submit-department-file');

Route::post('/faculty/submit-tier-4-access-request', function (Request $request) {

    // Temporary placeholder until the actual Tier 4 request handling is implemented.
    return redirect()
        ->route('faculty.preview.tier-4-access-request')
        ->with('info', 'Tier 4 access request route reached. Request processing is not yet configured.');

})->name('faculty.submit-tier-4-access-request');

// Student Preview Routes
Route::prefix('student/preview')->name('student.preview.')->group(function () {

    Route::view('/', 'student.dashboard')->name('dashboard');
    Route::view('/document-library', 'student.document-library')->name('document-library');
    Route::view('/categories', 'student.categories')->name('categories');
    Route::view('/library-research', 'student.library-research')->name('library-research');
    Route::view('/account-settings', 'student.account-settings')->name('account-settings');
    Route::view('/system-settings', 'student.system-settings')->name('system-settings');
    Route::view('/logout-confirmation', 'student.logout-confirmation')->name('logout-confirmation');
});

// Viewer Preview Routes
Route::prefix('viewer/preview')->name('viewer.preview.')->group(function () {

    Route::view('/', 'student.dashboard')->name('dashboard');
    Route::view('/document-library', 'student.document-library')->name('document-library');
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
