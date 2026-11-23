@extends('layouts.app', [
    'role' => 'viewer',
    'pageTitle' => 'Public Document Repository — Guest Observer',
    'breadcrumbs' => ['Public Document Hub', 'Guest Session', 'Catalog Overview']
])

@section('title', 'Public Document Repository — Guest Observer')

@section('content')
<!-- Guest Observer Alert Banner (Taste-Skill distinction) -->
<div class="p-5 rounded-2xl bg-slate-100 dark:bg-white/[0.03] border border-slate-300 dark:border-white/10 flex flex-col md:flex-row md:items-center justify-between gap-4">
    <div class="flex items-start gap-3">
        <div class="w-10 h-10 rounded-xl bg-slate-200 dark:bg-white/10 text-slate-600 dark:text-slate-300 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[22px]">visibility</span>
        </div>
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-2 flex-wrap">
                <span class="text-sm font-bold text-slate-900 dark:text-white">Public Guest Access Session</span>
                <x-badge tier="1" label="Tier 1 Public Access" />
                <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-slate-200 dark:bg-white/10 text-slate-600 dark:text-slate-400">Read-Only</span>
            </div>
            <p class="text-xs text-slate-600 dark:text-slate-400 max-w-2xl leading-relaxed">
                You are accessing DocuSecure as an external visitor. Only Tier 1 public bulletins and university announcements are accessible. Academic records (Tier 2), research databases (Tier 3), and official clearances require an authenticated CvSU institutional account.
            </p>
        </div>
    </div>

    <a href="{{ url('/institutional-account-request') }}" class="shrink-0 px-4 py-2.5 rounded-xl bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-xs font-bold hover:opacity-90 shadow-sm transition active:scale-95 text-center">
        Request Institutional Login
    </a>
</div>

<!-- 4 Viewer Metric Pods -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <x-stat-card 
        icon="public"
        label="Public Documents"
        value="64 Bulletins"
        badge="Unrestricted"
        badgeType="success"
        subtitle="Syllabi, charters, university memos"
    />

    <x-stat-card 
        icon="lock"
        label="Academic Curricula"
        value="Tier 2 Locked"
        badge="Account Required"
        badgeType="danger"
        subtitle="Exclusive to enrolled CvSU scholars"
    />

    <x-stat-card 
        icon="folder_special"
        label="Department Records"
        value="Tier 3 Locked"
        badge="Faculty Only"
        badgeType="danger"
        subtitle="Requires Sub-Custodian clearance"
    />

    <x-stat-card 
        icon="vpn_key"
        label="Session Clearance"
        value="Guest (Anonymous)"
        badge="No Bio-Auth"
        subtitle="IP rate-limited under RA 10173"
    />
</div>

<!-- Main Grid: Public Documents Catalog vs Locked Higher Tiers -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

    <!-- Left Column (8 Cols): Unrestricted Tier 1 Public Documents -->
    <div class="lg:col-span-8 flex flex-col gap-6">

        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm">
            <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-white/10 mb-4">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-slate-700 dark:text-slate-300 text-[20px]">public</span>
                    <div>
                        <h2 class="text-sm font-bold text-slate-900 dark:text-white">Tier 1 Public Institutional Bulletins</h2>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Freely downloadable and verifiable university records</p>
                    </div>
                </div>
                <span class="text-[11px] font-mono text-emerald-600 dark:text-emerald-400 font-semibold">4 Verified Today</span>
            </div>

            @if(false)
            <!-- Static preview list intentionally hidden -->
            <!-- List of Public Documents -->
            <div class="flex flex-col gap-3">
                <div class="p-3.5 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3 hover:border-slate-400 transition">
                    <div class="flex items-center gap-3 min-w-0">
                        <div class="w-9 h-9 rounded-lg bg-emerald-500/10 text-emerald-500 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-[18px]">verified</span>
                        </div>
                        <div class="flex flex-col min-w-0">
                            <span class="text-xs font-bold text-slate-900 dark:text-white truncate">Cavite State University Strategic Plan & Charter 2026-2030.pdf</span>
                            <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400">Institutional • Office of the University President • 4.2 MB • SHA-256 Validated</span>
                        </div>
                    </div>
                    <button type="button" onclick="alert('Downloading public university charter.');" class="px-3 py-1.5 rounded-lg bg-slate-900 text-white dark:bg-white dark:text-slate-900 text-xs font-semibold hover:opacity-90 transition shrink-0 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[14px]">download</span>
                        <span>Download</span>
                    </button>
                </div>

                <div class="p-3.5 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3 hover:border-slate-400 transition">
                    <div class="flex items-center gap-3 min-w-0">
                        <div class="w-9 h-9 rounded-lg bg-emerald-500/10 text-emerald-500 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                        </div>
                        <div class="flex flex-col min-w-0">
                            <span class="text-xs font-bold text-slate-900 dark:text-white truncate">Academic Calendar & Examination Schedule AY 2026–2027.pdf</span>
                            <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400">Office of Academic Affairs • 840 KB • Public Bulletin</span>
                        </div>
                    </div>
                    <button type="button" onclick="alert('Downloading academic calendar.');" class="px-3 py-1.5 rounded-lg bg-slate-900 text-white dark:bg-white dark:text-slate-900 text-xs font-semibold hover:opacity-90 transition shrink-0 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[14px]">download</span>
                        <span>Download</span>
                    </button>
                </div>

                <div class="p-3.5 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3 hover:border-slate-400 transition">
                    <div class="flex items-center gap-3 min-w-0">
                        <div class="w-9 h-9 rounded-lg bg-emerald-500/10 text-emerald-500 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-[18px]">policy</span>
                        </div>
                        <div class="flex flex-col min-w-0">
                            <span class="text-xs font-bold text-slate-900 dark:text-white truncate">Undergraduate Admissions & Scholarship Guidelines 2026.pdf</span>
                            <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400">Admissions Office • 1.6 MB • Public Circular</span>
                        </div>
                    </div>
                    <button type="button" onclick="alert('Downloading admissions guidelines.');" class="px-3 py-1.5 rounded-lg bg-slate-900 text-white dark:bg-white dark:text-slate-900 text-xs font-semibold hover:opacity-90 transition shrink-0 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[14px]">download</span>
                        <span>Download</span>
                    </button>
                </div>
            </div>
        </div>

            @endif
            <div class="flex flex-col gap-3">
                @forelse ($publicDocuments as $document)
                    <div class="p-3.5 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex items-center justify-between gap-3">
                        <div class="min-w-0">
                            <span class="text-xs font-bold text-slate-900 dark:text-white truncate block">{{ $document->title }}</span>
                            <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400">{{ $document->tracking_number }} • {{ number_format($document->size_bytes / 1048576, 1) }} MB</span>
                        </div>
                        <a href="{{ ($guestAccess ?? false) ? route('viewer.guest.documents.download', $document) : route('documents.download', $document) }}" class="shrink-0 px-3 py-1.5 rounded-lg bg-slate-900 text-white dark:bg-white dark:text-slate-900 text-xs font-semibold">Download</a>
                    </div>
                @empty
                    <p class="p-4 text-xs text-slate-500 dark:text-slate-400">No public documents are available yet.</p>
                @endforelse
            </div>
        </div>

        <!-- Locked Documents Showcase (Visualizing Higher Tiers for Guests) -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm">
            <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-white/10 mb-4">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-amber-500 text-[20px]">lock</span>
                    <div>
                        <h2 class="text-sm font-bold text-slate-900 dark:text-white">Restricted Institutional Tiers (Locked)</h2>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">These documents require authenticated institutional clearance to decrypt</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <!-- Locked Tier 2 Example -->
                <div class="p-3.5 rounded-xl bg-slate-100/70 dark:bg-white/[0.01] border border-dashed border-slate-300 dark:border-white/10 flex items-center justify-between opacity-75">
                    <div class="flex items-center gap-3 min-w-0">
                        <span class="material-symbols-outlined text-slate-400 text-[20px]">lock</span>
                        <div class="flex flex-col min-w-0">
                            <span class="text-xs font-semibold text-slate-700 dark:text-slate-300 truncate">BSCS Official Major Curricula & Faculty Syllabi Binder.enc</span>
                            <span class="text-[10px] font-mono text-slate-500">Tier 2 Academic Internal • Enrolled Scholars Only</span>
                        </div>
                    </div>
                    <span class="px-2 py-0.5 rounded text-[10px] font-mono font-semibold bg-rose-500/15 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                        RESTRICTED
                    </span>
                </div>

                <!-- Locked Tier 3 Example -->
                <div class="p-3.5 rounded-xl bg-slate-100/70 dark:bg-white/[0.01] border border-dashed border-slate-300 dark:border-white/10 flex items-center justify-between opacity-75">
                    <div class="flex items-center gap-3 min-w-0">
                        <span class="material-symbols-outlined text-slate-400 text-[20px]">lock</span>
                        <div class="flex flex-col min-w-0">
                            <span class="text-xs font-semibold text-slate-700 dark:text-slate-300 truncate">CEIT Department Thesis Defense & Panel Records.enc</span>
                            <span class="text-[10px] font-mono text-slate-500">Tier 3 Confidential • Faculty Sub-Custodian Clearance Required</span>
                        </div>
                    </div>
                    <span class="px-2 py-0.5 rounded text-[10px] font-mono font-semibold bg-rose-500/15 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                        RESTRICTED
                    </span>
                </div>
            </div>
        </div>

    </div>

    <!-- Right Column (4 Cols): Account Upgrade Invitation -->
    <div class="lg:col-span-4 flex flex-col gap-6">

        <div class="p-6 rounded-2xl bg-gradient-to-b from-slate-100 to-white dark:from-[#111927] dark:to-[#0f1724] border border-slate-300 dark:border-white/10 shadow-sm flex flex-col gap-4 text-center">
            <div class="w-12 h-12 rounded-2xl bg-amber-400/20 text-amber-500 mx-auto flex items-center justify-center">
                <span class="material-symbols-outlined text-[24px]">badge</span>
            </div>
            
            <div class="flex flex-col gap-1">
                <h3 class="text-base font-bold text-slate-900 dark:text-white">Are you a CvSU Member?</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                    Faculty, staff, and enrolled students can request their official institutional NetID to access course syllabi, clearances, and grades.
                </p>
            </div>

            <div class="pt-2 flex flex-col gap-2">
                <a href="{{ url('/institutional-account-request') }}" class="w-full py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold transition shadow-sm">
                    Apply for Institutional Access
                </a>
                <a href="{{ url('/') }}" class="w-full py-2 rounded-xl border border-slate-300 dark:border-white/10 text-slate-700 dark:text-slate-300 text-xs font-semibold hover:bg-slate-50 dark:hover:bg-white/5 transition">
                    Sign in with existing NetID
                </a>
            </div>
        </div>

        <div class="p-4 rounded-2xl bg-slate-100 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 text-xs text-slate-500 dark:text-slate-400 flex flex-col gap-1.5">
            <div class="flex items-center gap-1.5 text-slate-700 dark:text-slate-300 font-bold font-mono text-[11px]">
                <span class="material-symbols-outlined text-[15px] text-emerald-500">shield</span>
                <span>Public Observer Sandbox</span>
            </div>
            <p class="text-[11px] leading-relaxed">
                Anonymous visitor IP addresses and download timestamps are recorded in the central compliance audit ledger in accordance with RA 10173 regulations.
            </p>
        </div>

    </div>
</div>
@endsection
