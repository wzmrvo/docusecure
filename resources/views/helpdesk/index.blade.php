@extends('layouts.app', [
    'role' => 'helpdesk',
    'pageTitle' => 'MIS Technical Support & Incident Operations',
    'breadcrumbs' => ['CvSU Central Support', 'Incident Operations', 'Helpdesk Queue']
])

@section('title', 'MIS Technical Support Enclave — Helpdesk')

@section('content')
<!-- Support Advisory Strip -->
<div class="p-4 rounded-2xl bg-violet-500/10 border border-violet-500/30 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
    <div class="flex items-center gap-2.5">
        <span class="material-symbols-outlined text-[20px] text-violet-500">support_agent</span>
        <div class="flex flex-col">
            <span class="text-xs font-bold text-slate-900 dark:text-white">Active Duty Officer: Mark Villareal (HD-MIS-TOKEN-44)</span>
            <span class="text-[11px] text-slate-500 dark:text-slate-400">CvSU Central MIS Data Center • Indang Main Campus</span>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
        <span class="text-xs font-mono text-emerald-600 dark:text-emerald-400 font-semibold">TICKET ENGINE ONLINE</span>
    </div>
</div>

<!-- 4 Helpdesk KPI Metrics -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <x-stat-card 
        icon="report_problem"
        label="Critical Incidents"
        value="3 Open"
        badge="Lockouts & 2FA"
        badgeType="warning"
        subtitle="Average resolution: 8.4 mins"
        :borderHighlight="true"
    />

    <x-stat-card 
        icon="lock_open"
        label="Unlock Queue"
        value="14 Pending"
        badge="Expedited"
        badgeType="danger"
        subtitle="Biometric/Password reset requests"
    />

    <x-stat-card 
        icon="verified_user"
        label="Resolved Today"
        value="48 Tickets"
        badge="+12% vs Yesterday"
        badgeType="success"
        subtitle="100% SLA compliance rate"
    />

    <x-stat-card 
        icon="hub"
        label="System Nodes"
        value="All Online"
        badge="FIPS 140-3 Active"
        badgeType="info"
        subtitle="Indang, Silang, Rosario, Cavite City"
    />
</div>

<!-- Main Two-Column Support Plane -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

    <!-- Left Column (7 Cols): Urgent Account Lockout & Support Queue -->
    <div class="lg:col-span-7 flex flex-col gap-6" id="unlock-queue">

        <!-- Critical Triage Queue Card -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm">
            <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-white/10 mb-4">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-amber-500 text-[20px]">warning</span>
                    <div>
                        <h2 class="text-sm font-bold text-slate-900 dark:text-white">Urgent Incident & Lockout Queue</h2>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Immediate action required for locked institutional accounts</p>
                    </div>
                </div>
                <span class="text-xs font-mono font-bold px-2.5 py-0.5 rounded bg-rose-500/15 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                    3 CRITICAL
                </span>
            </div>

            <!-- Ticket Items -->
            <div class="flex flex-col gap-3">
                <!-- Ticket 1 -->
                <div class="p-4 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-amber-400/40 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="flex flex-col gap-1 min-w-0">
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="text-xs font-bold text-slate-900 dark:text-white">Prof. Juan Dela Cruz</span>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-amber-500/15 text-amber-600 dark:text-amber-300 border border-amber-500/30">
                                TKT-2026-88219
                            </span>
                            <span class="text-[10px] font-mono text-rose-600 dark:text-rose-400 font-bold">LOCKED OUT</span>
                        </div>
                        <span class="text-xs text-slate-700 dark:text-slate-300 font-medium">Critical Account Lockout Bypass Request (Incident INC-2026-CVSU-88219A)</span>
                        <span class="text-[10px] font-mono text-slate-500">CEIT Computer Studies • Received 2m ago</span>
                    </div>

                    <div class="flex items-center gap-2 shrink-0">
                        <button type="button" onclick="openModal('helpdesk-unlock-modal')" class="px-3 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold shadow-sm transition">
                            Unlock Account
                        </button>
                    </div>
                </div>

                <!-- Ticket 2 -->
                <div class="p-4 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="flex flex-col gap-1 min-w-0">
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="text-xs font-bold text-slate-900 dark:text-white">Maria Santos</span>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-violet-500/15 text-violet-600 dark:text-violet-300 border border-violet-500/30">
                                TKT-2026-10492
                            </span>
                            <span class="text-[10px] font-mono text-amber-600 dark:text-amber-400 font-bold">2FA RESYNC</span>
                        </div>
                        <span class="text-xs text-slate-700 dark:text-slate-300 font-medium">Lost mobile authenticator device — Hardware token challenge required</span>
                        <span class="text-[10px] font-mono text-slate-500">Student Scholar (BSIT) • Received 14m ago</span>
                    </div>

                    <div class="flex items-center gap-2 shrink-0">
                        <button type="button" onclick="alert('2FA reset OTP sent to verified institutional SMS.');" class="px-3 py-1.5 rounded-lg bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-xs font-semibold hover:opacity-90 transition">
                            Issue Token
                        </button>
                    </div>
                </div>

                <!-- Ticket 3 -->
                <div class="p-4 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="flex flex-col gap-1 min-w-0">
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="text-xs font-bold text-slate-900 dark:text-white">Engr. R. Bautista</span>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-sky-500/15 text-sky-600 dark:text-sky-300 border border-sky-500/30">
                                TKT-2026-00412
                            </span>
                        </div>
                        <span class="text-xs text-slate-700 dark:text-slate-300 font-medium">HSM Enclave Firmware Scheduled Rotation Notification</span>
                        <span class="text-[10px] font-mono text-slate-500">MIS Infrastructure • Scheduled 11:00 PM PST</span>
                    </div>

                    <div class="flex items-center gap-2 shrink-0">
                        <span class="text-xs font-mono text-emerald-600 dark:text-emerald-400 font-semibold">ACKNOWLEDGED</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Incident Form -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm" id="incident-form">
            <h3 class="text-sm font-bold text-slate-900 dark:text-white mb-1">Submit Security Docket / Escalation</h3>
            <p class="text-xs text-slate-500 dark:text-slate-400 mb-4">Direct dispatch to Indang Central Campus MIS Data Center</p>

            <form onsubmit="event.preventDefault(); alert('Security docket dispatched to MIS Watch Officer.');" class="flex flex-col gap-3.5 text-xs">
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-mono font-semibold uppercase text-slate-700 dark:text-slate-300 mb-1">Requester NetID</label>
                        <input type="text" required placeholder="e.g. CEIT-FAC-88219" class="w-full text-xs rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2.5 text-slate-900 dark:text-white">
                    </div>
                    <div>
                        <label class="block font-mono font-semibold uppercase text-slate-700 dark:text-slate-300 mb-1">Incident Category</label>
                        <select class="w-full text-xs rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2.5 text-slate-900 dark:text-white">
                            <option>Account Lockout / Password Reset</option>
                            <option>2FA Token De-synchronization</option>
                            <option>Clearance Multi-Sig Stall</option>
                            <option>Document Watermark Decryption Failure</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block font-mono font-semibold uppercase text-slate-700 dark:text-slate-300 mb-1">Incident Details</label>
                    <textarea rows="3" required placeholder="Describe the access impediment or technical issue..." class="w-full text-xs rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2.5 text-slate-900 dark:text-white"></textarea>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="px-4 py-2 rounded-xl bg-violet-600 hover:bg-violet-500 text-white font-semibold text-xs shadow-sm transition">
                        Dispatch Incident Ticket
                    </button>
                </div>
            </form>
        </div>

    </div>

    <!-- Right Column (5 Cols): Identity Lookup & Hotlines -->
    <div class="lg:col-span-5 flex flex-col gap-6" id="audit-search">

        <!-- Identity / NetID Lookup Tool -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm">
            <h3 class="text-sm font-bold text-slate-900 dark:text-white mb-1">Institutional NetID Lookup</h3>
            <p class="text-xs text-slate-500 dark:text-slate-400 mb-3">Verify user clearance tier and account active status</p>

            <div class="flex items-center gap-2 mb-3">
                <input type="text" id="lookupInput" placeholder="Enter NetID or Email..." class="flex-1 text-xs rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2.5 text-slate-900 dark:text-white">
                <button type="button" onclick="document.getElementById('lookupResult').classList.remove('hidden');" class="px-3.5 py-2.5 rounded-xl bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-xs font-semibold hover:opacity-90 transition">
                    Search
                </button>
            </div>

            <!-- Simulated Result Box -->
            <div id="lookupResult" class="hidden p-3 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 text-xs flex flex-col gap-1.5">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-slate-900 dark:text-white">Prof. Juan Dela Cruz</span>
                    <x-badge tier="3" label="Tier 3 Faculty" />
                </div>
                <span class="text-[11px] font-mono text-slate-500">NetID: CEIT-FAC-88219 • Status: Temporarily Locked (3 failed OTPs)</span>
                <button type="button" onclick="openModal('helpdesk-unlock-modal')" class="mt-1 text-left text-xs font-semibold text-emerald-600 dark:text-emerald-400 hover:underline">
                    ➔ Proceed to Quick Unlock Verification
                </button>
            </div>
        </div>

        <!-- Emergency Hotlines & Channels -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm flex flex-col gap-3">
            <h3 class="text-sm font-bold text-slate-900 dark:text-white">MIS Command Channels</h3>

            <div class="flex flex-col gap-2.5 text-xs">
                <div class="p-3 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex items-center justify-between">
                    <div>
                        <span class="font-bold text-slate-800 dark:text-white block">Main Campus Data Center</span>
                        <span class="text-[11px] text-slate-500">VOIP Ext: 8810 / 8812</span>
                    </div>
                    <span class="px-2 py-0.5 rounded text-[10px] font-mono text-emerald-600 dark:text-emerald-400 bg-emerald-500/10 font-bold">24/7 LIVE</span>
                </div>

                <div class="p-3 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex items-center justify-between">
                    <div>
                        <span class="font-bold text-slate-800 dark:text-white block">Registrar Clearance Liaison</span>
                        <span class="text-[11px] text-slate-500">clearance-support@cvsu.edu.ph</span>
                    </div>
                    <span class="px-2 py-0.5 rounded text-[10px] font-mono text-slate-500">8AM - 5PM</span>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

@push('modals')
<!-- Helpdesk Unlock Modal -->
<x-modal 
    id="helpdesk-unlock-modal" 
    title="Expedited Account Unlock Clearance" 
    subtitle="NetID: CEIT-FAC-88219 • Prof. Juan Dela Cruz"
    icon="key"
>
    <div class="flex flex-col gap-3 text-xs">
        <p class="text-slate-600 dark:text-slate-400">
            Confirm identity verification with applicant before lifting security freeze. This action creates a permanent signed record in the central compliance audit trail.
        </p>

        <div class="p-3 rounded-xl bg-emerald-50 dark:bg-emerald-950/20 border border-emerald-300 dark:border-emerald-500/30 text-emerald-800 dark:text-emerald-200 font-mono">
            <span>Security Action: </span><strong>LIFT_FREEZE_DISPATCH_NEW_OTP</strong>
        </div>
    </div>

    <x-slot name="footer">
        <button type="button" onclick="closeModal('helpdesk-unlock-modal')" class="px-3.5 py-1.5 rounded-lg border border-slate-300 dark:border-white/10 text-xs font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition">
            Cancel
        </button>
        <button type="button" onclick="closeModal('helpdesk-unlock-modal'); alert('Account unlocked. User notified via registered email.');" class="px-4 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold shadow-sm transition">
            Confirm & Unlock Account
        </button>
    </x-slot>
</x-modal>
@endpush
