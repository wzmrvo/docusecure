@extends('layouts.app', [
    'role' => 'admin',
    'pageTitle' => 'Admin Console • Vault Authority',
    'breadcrumbs' => ['CvSU Central MIS', 'Term 2025-2026', 'Admin Console']
])

@section('title', 'Admin Console • Tier 4 Vault')

@section('content')
<!-- Page Header & Vault Node Status -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2 border-b border-slate-200 dark:border-white/10">
    <div class="flex flex-col gap-1">
        <div class="flex items-center gap-2 flex-wrap">
            <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 dark:text-white font-sans">Admin Console</h1>
            <x-badge tier="4" label="TIER 4 ROOT CUSTODIAN" />
            <span class="px-2 py-0.5 rounded text-[10px] font-mono font-semibold bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20">
                ACTIVE SESSION
            </span>
        </div>
        <p class="text-xs text-slate-500 dark:text-slate-400">
            Cryptographic document governance, clearance docket review, and institutional user provisioning.
        </p>
    </div>

    <div class="flex items-center gap-2">
        <span class="text-xs font-mono text-slate-600 dark:text-slate-400 bg-slate-100 dark:bg-white/5 px-3 py-1.5 rounded-lg border border-slate-200 dark:border-white/10">
            CvSU Central MIS • Term 2025-2026
        </span>
    </div>
</div>

<!-- 4 Tier-Themed Stat Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <x-stat-card 
        icon="group"
        label="Total Users"
        value="{{ number_format($dashboard['user_count']) }}"
        subtitle="{{ number_format($dashboard['user_count']) }} total registered accounts"
    />

    <x-stat-card 
        icon="support_agent"
        label="Inbound Queue"
        value="{{ number_format($dashboard['pending_applications'] + $dashboard['pending_access_requests']) }}"
        badge="{{ $dashboard['pending_applications'] }} Applications · {{ $dashboard['pending_access_requests'] }} Access"
        badgeType="warning"
        subtitle="3 Active Tickets • 14 Clearance Requests"
        :borderHighlight="true"
    />

    <x-stat-card 
        icon="description"
        label="Total Documents"
        value="{{ number_format($dashboard['document_count']) }}"
        badge="AES-256 Validated"
        badgeType="success"
        subtitle="Cryptographically sealed under RA 10173"
    />

    <x-stat-card 
        icon="verified_user"
        label="Audit Events Today"
        value="{{ number_format($dashboard['audit_today']) }}"
        badge="0 Incidents"
        badgeType="success"
        subtitle="Steganographic watermark intact"
    />
</div>

<!-- Main Two-Column Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

    <!-- Left Column: Primary Lists (8 Cols) -->
    <div class="lg:col-span-8 flex flex-col gap-6">

        <!-- Section A: Pending Access Requests Queue -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-xl p-5 shadow-sm" id="requests-queue">
            <div class="flex items-center justify-between pb-4 border-b border-slate-200 dark:border-white/10">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-500">
                        <span class="material-symbols-outlined text-[19px]">fact_check</span>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900 dark:text-white">Pending Access Requests Queue</h2>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Review and authorize institutional clearance applications</p>
                    </div>
                </div>
                <span class="text-xs font-mono font-semibold px-2.5 py-1 rounded bg-amber-500/15 border border-amber-500/30 text-amber-600 dark:text-amber-300">
                    17 In Queue (3 Tickets)
                </span>
            </div>

            <!-- List of Request Cards -->
            <div class="flex flex-col gap-3.5 mt-4">

                <!-- Urgent Helpdesk Ticket Card -->
                <div class="bg-slate-50 dark:bg-[#141f30] border border-amber-400/40 p-4 rounded-xl flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:border-amber-400 transition-colors">
                    <div class="flex flex-col gap-1.5 min-w-0 flex-1">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Prof. Juan Dela Cruz</span>
                            <span class="text-xs font-mono text-slate-500 dark:text-slate-400">• CEIT (Computer Studies)</span>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-amber-500/15 border border-amber-500/30 text-amber-600 dark:text-amber-300 font-semibold uppercase flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">confirmation_number</span>Helpdesk Ticket
                            </span>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-rose-500/20 border border-rose-500/30 text-rose-600 dark:text-rose-300 font-semibold uppercase">Critical</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-slate-700 dark:text-slate-200">
                            <span class="material-symbols-outlined text-[16px] text-amber-500 shrink-0">lock_reset</span>
                            <span class="font-mono font-medium text-amber-600 dark:text-amber-300 truncate">TKT-2026-88219 (Incident INC-2026-CVSU-88219A): Critical Account Lockout Bypass Request</span>
                        </div>
                        <div class="flex flex-wrap items-center gap-2 text-[11px] font-mono text-slate-500 dark:text-slate-400">
                            <span class="text-emerald-600 dark:text-emerald-400 font-medium">Portal Ticket</span>
                            <span>•</span>
                            <span>Source: MIS Helpdesk Self-Service Portal</span>
                            <span>•</span>
                            <span class="text-slate-500 dark:text-slate-300">Received 1m ago</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 shrink-0 sm:ml-auto">
                        <button type="button" onclick="openModal('resolve-unlock-modal')" class="px-3.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs transition-colors shadow-sm active:scale-95 flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[14px]">key</span>
                            <span>Resolve Unlock</span>
                        </button>
                        <button type="button" onclick="openModal('request-detail-modal')" class="px-3 py-1.5 rounded-lg bg-slate-200 dark:bg-[#182538] hover:bg-slate-300 dark:hover:bg-[#20324c] border border-slate-300 dark:border-[#253956] text-slate-700 dark:text-slate-300 text-xs transition-colors font-medium">
                            Review
                        </button>
                    </div>
                </div>

                <!-- Tier 4 Restricted Elevation Request -->
                <div class="bg-slate-50 dark:bg-[#121c2d] border border-slate-200 dark:border-white/10 p-4 rounded-xl flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:border-slate-300 dark:hover:border-white/20 transition-colors">
                    <div class="flex flex-col gap-1.5 min-w-0 flex-1">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Prof. Juan Dela Cruz</span>
                            <span class="text-xs font-mono text-slate-500 dark:text-slate-400">• CEIT (Computer Studies)</span>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-rose-500/20 border border-rose-500/30 text-rose-600 dark:text-rose-300 font-semibold uppercase">Tier 4 Restricted Elevation</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-slate-700 dark:text-slate-200">
                            <span class="material-symbols-outlined text-[16px] text-sky-500 shrink-0">description</span>
                            <span class="font-mono font-medium text-sky-600 dark:text-sky-300 truncate">BOR_Resolution_2026_094_FacultyTenure_Clearance.pdf</span>
                        </div>
                        <div class="flex flex-wrap items-center gap-2 text-[11px] font-mono text-slate-500 dark:text-slate-400">
                            <span class="text-emerald-600 dark:text-emerald-400 font-medium">Docket: CLR-2026-CEIT-0842</span>
                            <span>•</span>
                            <span>Stage 02 Dean Endorsed</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 shrink-0 sm:ml-auto">
                        <button type="button" class="px-3.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs transition-colors shadow-sm active:scale-95">Approve</button>
                        <button type="button" class="px-3.5 py-1.5 rounded-lg bg-slate-200 dark:bg-[#182538] hover:bg-rose-500/20 hover:text-rose-600 dark:hover:text-rose-300 text-slate-700 dark:text-slate-300 text-xs transition-colors font-medium">Reject</button>
                    </div>
                </div>

                <!-- Account Application Request -->
                <div class="bg-slate-50 dark:bg-[#121c2d] border border-slate-200 dark:border-white/10 p-4 rounded-xl flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:border-slate-300 dark:hover:border-white/20 transition-colors">
                    <div class="flex flex-col gap-1.5 min-w-0 flex-1">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Engr. Maria Santos, M.Sc.</span>
                            <span class="text-xs font-mono text-slate-500 dark:text-slate-400">• CEIT (Dept. of IT)</span>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-purple-500/15 border border-purple-500/30 text-purple-700 dark:text-purple-300 font-semibold uppercase">Institutional Account</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-slate-700 dark:text-slate-200">
                            <span class="material-symbols-outlined text-[16px] text-amber-500 shrink-0">badge</span>
                            <span class="font-mono font-medium text-amber-600 dark:text-amber-300">Tier 3 Faculty Request</span>
                            <span class="text-slate-400 font-mono text-[11px]">(Ref: DOCUSEC-REQ-2026-v4)</span>
                        </div>
                        <p class="text-xs text-slate-500 dark:text-slate-400 italic">New Faculty Provisioning & Keycard Verification</p>
                    </div>
                    <div class="flex items-center gap-2 shrink-0 sm:ml-auto">
                        <a href="{{ route('admin.preview.provision-stage-1') }}" class="px-3.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs transition-colors shadow-sm active:scale-95">Review & Provision</a>
                    </div>
                </div>

            </div>

            <!-- Footer Link -->
            <div class="mt-4 pt-3 border-t border-slate-200 dark:border-white/10 flex items-center justify-between">
                <span class="text-xs text-slate-500 dark:text-slate-400">Showing 3 of 17 active items</span>
                <a class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 hover:underline flex items-center gap-1 font-mono transition-colors" href="{{ route('admin.preview.access-requests') }}">
                    <span>View All 17 Requests</span>
                    <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Section B: Recent User Management Directory -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-xl p-5 shadow-sm">
            <div class="flex items-center justify-between pb-4 border-b border-slate-200 dark:border-white/10">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-sky-500/10 border border-sky-500/20 flex items-center justify-center text-sky-500">
                        <span class="material-symbols-outlined text-[19px]">manage_accounts</span>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900 dark:text-white">Recent Provisioned Personnel</h2>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Directory of institutional staff, faculty, and administrators</p>
                    </div>
                </div>
                <a class="text-xs font-mono text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white flex items-center gap-1 bg-slate-100 dark:bg-white/5 px-2.5 py-1 rounded border border-slate-200 dark:border-white/10" href="{{ route('admin.preview.user-management') }}">
                    <span>Manage Users</span>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                </a>
            </div>

            <!-- User Table -->
            <div class="overflow-x-auto mt-3">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="border-b border-slate-200 dark:border-white/10 text-slate-500 dark:text-slate-400 font-mono">
                            <th class="py-2.5 px-3 font-medium">User / Account</th>
                            <th class="py-2.5 px-3 font-medium">Department</th>
                            <th class="py-2.5 px-3 font-medium">Role</th>
                            <th class="py-2.5 px-3 font-medium">Status</th>
                            <th class="py-2.5 px-3 font-medium text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-white/5">
                        <tr class="hover:bg-slate-50 dark:hover:bg-white/[0.02] transition-colors">
                            <td class="py-3 px-3">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-7 h-7 rounded-full bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-300 dark:border-emerald-600/40 text-emerald-800 dark:text-emerald-300 flex items-center justify-center font-bold text-[11px]">
                                        RC
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-medium text-slate-900 dark:text-white">Prof. Rowena Carpio</span>
                                        <span class="text-[11px] text-slate-500 dark:text-slate-400 font-mono">rcarpio@cvsu.edu.ph</span>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-3 text-slate-600 dark:text-slate-300 font-mono">CAFENR Agriculture</td>
                            <td class="py-3 px-3">
                                <span class="px-2 py-0.5 rounded text-[11px] font-mono bg-sky-50 dark:bg-sky-950/60 text-sky-700 dark:text-sky-300 border border-sky-300 dark:border-sky-500/30">Faculty</span>
                            </td>
                            <td class="py-3 px-3">
                                <span class="flex items-center gap-1.5 text-emerald-600 dark:text-emerald-400 text-[11px] font-mono">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Active
                                </span>
                            </td>
                            <td class="py-3 px-3 text-right">
                                <button class="px-2.5 py-1 rounded bg-slate-100 dark:bg-white/5 hover:bg-slate-200 dark:hover:bg-white/10 text-slate-700 dark:text-slate-200 text-xs font-medium transition-colors">
                                    Edit
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-slate-50 dark:hover:bg-white/[0.02] transition-colors">
                            <td class="py-3 px-3">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-7 h-7 rounded-full bg-amber-100 dark:bg-amber-950/60 border border-amber-300 dark:border-amber-600/40 text-amber-800 dark:text-amber-300 flex items-center justify-center font-bold text-[11px]">
                                        AL
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-medium text-slate-900 dark:text-white">Annalyn L. Loyola</span>
                                        <span class="text-[11px] text-slate-500 dark:text-slate-400 font-mono">aloyola@cvsu.edu.ph</span>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-3 text-slate-600 dark:text-slate-300 font-mono">Accounting & Budget</td>
                            <td class="py-3 px-3">
                                <span class="px-2 py-0.5 rounded text-[11px] font-mono bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300 border border-purple-300 dark:border-purple-500/30">Staff</span>
                            </td>
                            <td class="py-3 px-3">
                                <span class="flex items-center gap-1.5 text-amber-600 dark:text-amber-400 text-[11px] font-mono">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>Pending 2FA
                                </span>
                            </td>
                            <td class="py-3 px-3 text-right">
                                <button class="px-2.5 py-1 rounded bg-slate-100 dark:bg-white/5 hover:bg-slate-200 dark:hover:bg-white/10 text-slate-700 dark:text-slate-200 text-xs font-medium transition-colors">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Right Column: Quick Admin Actions & Live Audit Stream (4 Cols) -->
    <div class="lg:col-span-4 flex flex-col gap-6">

        <!-- Section A: Quick Actions -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-xl p-5 shadow-sm">
            <h3 class="text-sm font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3.5">
                <span class="material-symbols-outlined text-amber-500 text-[18px]">bolt</span>
                <span>Quick Admin Actions</span>
            </h3>
            
            <div class="flex flex-col gap-2.5">
                <a href="#requests-queue" class="w-full flex items-center justify-between p-3 rounded-lg bg-amber-50 dark:bg-amber-950/30 hover:bg-amber-100 dark:hover:bg-amber-900/40 border border-amber-300 dark:border-amber-500/40 text-amber-800 dark:text-amber-200 font-medium text-xs transition-colors shadow-sm text-left">
                    <span class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px] text-amber-600 dark:text-amber-300">support_agent</span>
                        <span>Triage Helpdesk Tickets</span>
                    </span>
                    <span class="text-xs font-mono font-bold px-2 py-0.5 rounded bg-amber-500/20 text-amber-700 dark:text-amber-300">3 Open</span>
                </a>

                <a href="{{ route('admin.preview.deposit-file') }}" class="w-full flex items-center justify-between p-3 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs transition-colors shadow-sm text-left">
                    <span class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
                        <span>Deposit Sealed Record (Vault)</span>
                    </span>
                    <span class="material-symbols-outlined text-[16px]">add</span>
                </a>

                <a href="{{ route('admin.preview.provision-stage-1') }}" class="w-full flex items-center justify-between p-3 rounded-lg bg-slate-50 dark:bg-white/5 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10 text-slate-700 dark:text-slate-200 font-medium text-xs transition-colors text-left">
                    <span class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px] text-emerald-500">person_add</span>
                        <span>Provision New Institutional User</span>
                    </span>
                    <span class="material-symbols-outlined text-[16px] text-slate-400">arrow_forward</span>
                </a>

                <a href="{{ route('admin.preview.audit-logs') }}" class="w-full flex items-center justify-between p-3 rounded-lg bg-slate-50 dark:bg-white/5 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10 text-slate-700 dark:text-slate-200 font-medium text-xs transition-colors text-left">
                    <span class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px] text-sky-500">receipt_long</span>
                        <span>View Immutable Audit Trail</span>
                    </span>
                    <span class="material-symbols-outlined text-[16px] text-slate-400">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Section B: Live Audit Logs Activity -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-xl p-5 shadow-sm flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-white/10 mb-3">
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-emerald-500 text-[18px]">history</span>
                        <span>Live Audit Telemetry</span>
                    </h3>
                    <span class="flex items-center gap-1.5 text-[10px] font-mono text-emerald-600 dark:text-emerald-400">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        STREAMING
                    </span>
                </div>

                <!-- Stream Event Items -->
                <div class="flex flex-col gap-3">
                    <div class="p-2.5 rounded-lg bg-amber-50 dark:bg-amber-950/20 border border-amber-300 dark:border-amber-500/30 flex items-start gap-2.5 text-xs">
                        <span class="material-symbols-outlined text-amber-500 text-[16px] mt-0.5 shrink-0">confirmation_number</span>
                        <div class="flex flex-col flex-1 min-w-0">
                            <span class="text-slate-900 dark:text-white font-medium truncate">Helpdesk ticket submitted — Prof. Dela Cruz</span>
                            <span class="text-[11px] text-amber-600 dark:text-amber-300 font-mono">TKT-2026-88219 • MIS Helpdesk Portal</span>
                        </div>
                        <span class="text-[10px] font-mono text-emerald-600 dark:text-emerald-400 shrink-0">1m ago</span>
                    </div>

                    <div class="p-2.5 rounded-lg bg-slate-50 dark:bg-[#121c2d] border border-slate-200 dark:border-white/5 flex items-start gap-2.5 text-xs">
                        <span class="material-symbols-outlined text-emerald-500 text-[16px] mt-0.5 shrink-0">login</span>
                        <div class="flex flex-col flex-1 min-w-0">
                            <span class="text-slate-900 dark:text-white font-medium truncate">User login — Prof. Juan Dela Cruz</span>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400 font-mono">CEIT Computer Studies • IP: 10.24.12.8</span>
                        </div>
                        <span class="text-[10px] font-mono text-slate-400 shrink-0">2m ago</span>
                    </div>

                    <div class="p-2.5 rounded-lg bg-slate-50 dark:bg-[#121c2d] border border-slate-200 dark:border-white/5 flex items-start gap-2.5 text-xs">
                        <span class="material-symbols-outlined text-sky-500 text-[16px] mt-0.5 shrink-0">lock_open</span>
                        <div class="flex flex-col flex-1 min-w-0">
                            <span class="text-slate-900 dark:text-white font-medium truncate">Access granted to BOR_RES_2026.pdf</span>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400 font-mono">Authorized by Admin Bautista</span>
                        </div>
                        <span class="text-[10px] font-mono text-slate-400 shrink-0">8m ago</span>
                    </div>
                </div>
            </div>

            <!-- Bottom Link -->
            <div class="mt-4 pt-3 border-t border-slate-200 dark:border-white/10 flex items-center justify-between">
                <span class="text-[11px] text-slate-500 dark:text-slate-400 font-mono">FIPS 140-3 Compliant</span>
                <a class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 hover:underline font-mono flex items-center gap-1 transition-colors" href="{{ route('admin.preview.audit-logs') }}">
                    <span>View Full Log</span>
                    <span class="material-symbols-outlined text-[13px]">arrow_forward</span>
                </a>
            </div>
        </div>

    </div>

</div>
@endsection

@push('modals')
{{-- Resolve Unlock Modal (Powered by Phase 1 Modal Component) --}}
<x-modal 
    id="resolve-unlock-modal" 
    title="Resolve Account Lockout Bypass" 
    subtitle="Incident INC-2026-CVSU-88219A • Prof. Juan Dela Cruz"
    icon="key"
>
    <div class="flex flex-col gap-4">
        <div class="p-3.5 rounded-xl bg-amber-50 dark:bg-amber-950/30 border border-amber-300 dark:border-amber-500/30 text-xs text-amber-800 dark:text-amber-200 flex items-start gap-2.5">
            <span class="material-symbols-outlined text-[18px] text-amber-500 shrink-0 mt-0.5">warning</span>
            <div class="flex flex-col gap-1">
                <span class="font-bold">Administrative Override Required</span>
                <span>You are approving an expedited biometric/token reset for NetID: <strong>CEIT-FAC-88219</strong> under Section 4.2 of CvSU Information Security Policy.</span>
            </div>
        </div>

        <div class="flex flex-col gap-1.5">
            <label class="text-xs font-mono font-semibold text-slate-700 dark:text-slate-300 uppercase">Verification Channel</label>
            <select class="w-full text-xs rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2 text-slate-800 dark:text-slate-200">
                <option>Physical Presentation at CvSU MIS Office</option>
                <option>Verified University Video Call with Dept. Dean</option>
                <option>Hardware Token Challenge-Response Verified</option>
            </select>
        </div>

        <div class="flex flex-col gap-1.5">
            <label class="text-xs font-mono font-semibold text-slate-700 dark:text-slate-300 uppercase">Administrator Authorization Note</label>
            <textarea rows="2" class="w-full text-xs rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2 text-slate-800 dark:text-slate-200" placeholder="State reason for manual bypass clearance..."></textarea>
        </div>
    </div>

    <x-slot name="footer">
        <button type="button" onclick="closeModal('resolve-unlock-modal')" class="px-3.5 py-1.5 rounded-lg border border-slate-300 dark:border-white/10 text-xs font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition">
            Cancel
        </button>
        <button type="button" onclick="closeModal('resolve-unlock-modal'); alert('Lockout successfully resolved. Unlock token dispatched to user.');" class="px-4 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold shadow-sm transition">
            Authorize & Dispatch Token
        </button>
    </x-slot>
</x-modal>

<!-- Request Detail Modal -->
<x-modal 
    id="request-detail-modal" 
    title="Clearance Docket Details" 
    subtitle="Docket CLR-2026-CEIT-0842 • Tier 4 Elevation"
    icon="fact_check"
>
    <div class="flex flex-col gap-3 text-xs">
        <div class="flex items-center justify-between pb-2 border-b border-slate-200 dark:border-white/10 font-mono">
            <span class="text-slate-500 dark:text-slate-400">Document Target:</span>
            <span class="font-bold text-slate-800 dark:text-white">BOR_Resolution_2026_094.pdf</span>
        </div>
        <div class="flex items-center justify-between pb-2 border-b border-slate-200 dark:border-white/10 font-mono">
            <span class="text-slate-500 dark:text-slate-400">Current Security Tier:</span>
            <x-badge tier="4" label="Tier 4 Vault" />
        </div>
        <div class="flex items-center justify-between pb-2 border-b border-slate-200 dark:border-white/10 font-mono">
            <span class="text-slate-500 dark:text-slate-400">Applicant:</span>
            <span class="text-slate-800 dark:text-white">Prof. Juan Dela Cruz (CEIT)</span>
        </div>
        <div class="p-3 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10">
            <span class="font-semibold text-slate-700 dark:text-slate-300 block mb-1">Stated Justification:</span>
            <p class="text-slate-600 dark:text-slate-400 italic">"Required for CEIT Computer Studies Level IV accreditation evidence binder."</p>
        </div>
    </div>

    <x-slot name="footer">
        <button type="button" onclick="closeModal('request-detail-modal')" class="px-3.5 py-1.5 rounded-lg border border-slate-300 dark:border-white/10 text-xs font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition">
            Close
        </button>
        <button type="button" onclick="closeModal('request-detail-modal'); alert('Access approved under dual-custodian protocol.');" class="px-4 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold shadow-sm transition">
            Grant 24h Elevated Access
        </button>
    </x-slot>
</x-modal>
@endpush
