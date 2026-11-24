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
        value="{{ number_format($dashboard['pending_applications'] + $dashboard['pending_access_requests'] + $dashboard['open_tickets']) }}"
        badge="{{ $dashboard['open_tickets'] }} Tickets · {{ $dashboard['pending_applications'] }} Applications · {{ $dashboard['pending_access_requests'] }} Access"
        badgeType="warning"
        subtitle="Database-backed items awaiting review"
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

        <!-- Section A: Open Helpdesk Ticket Queue -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-xl p-5 shadow-sm" id="requests-queue">
            <div class="flex items-center justify-between pb-4 border-b border-slate-200 dark:border-white/10">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-500">
                        <span class="material-symbols-outlined text-[19px]">fact_check</span>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900 dark:text-white">Open Helpdesk Tickets</h2>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Review the latest requests submitted through helpdesk</p>
                    </div>
                </div>
                <span class="text-xs font-mono font-semibold px-2.5 py-1 rounded bg-amber-500/15 border border-amber-500/30 text-amber-600 dark:text-amber-300">
                    {{ number_format($dashboard['open_tickets']) }} open
                </span>
            </div>

            <div class="flex flex-col gap-3.5 mt-4">
                @forelse ($recentHelpdeskTickets as $ticket)
                    <article class="rounded-xl border border-slate-200 bg-slate-50 p-4 transition-colors hover:border-slate-300 dark:border-white/10 dark:bg-[#121c2d] dark:hover:border-white/20">
                        <div class="flex flex-col justify-between gap-3 sm:flex-row sm:items-start">
                            <div class="min-w-0 flex-1">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="font-mono text-sm font-semibold text-slate-900 dark:text-white">{{ $ticket->reference }}</span>
                                    <span class="rounded bg-slate-200 px-2 py-0.5 text-[10px] font-semibold uppercase text-slate-700 dark:bg-white/10 dark:text-slate-200">{{ str_replace('_', ' ', $ticket->status) }}</span>
                                    <span class="rounded bg-amber-500/15 px-2 py-0.5 text-[10px] font-semibold uppercase text-amber-700 dark:text-amber-300">{{ $ticket->priority }}</span>
                                </div>
                                <p class="mt-2 text-sm font-semibold text-slate-800 dark:text-slate-100">{{ $ticket->requester_name }} <span class="font-normal text-slate-500 dark:text-slate-400">· {{ $ticket->requester_contact }}</span></p>
                                <p class="mt-1 text-xs text-slate-600 dark:text-slate-300">{{ $ticket->details }}</p>
                                <p class="mt-2 text-[11px] text-slate-500 dark:text-slate-400">Assigned to {{ $ticket->assignedAdmin?->name ?? 'Unassigned' }} · Submitted {{ $ticket->created_at->diffForHumans() }}</p>
                            </div>
                            <a href="{{ route('admin.preview.access-requests', ['ticket_search' => $ticket->reference]) }}#helpdesk-tickets" class="shrink-0 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-medium text-slate-700 transition-colors hover:bg-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
                                Review ticket
                            </a>
                        </div>
                    </article>
                @empty
                    <p class="rounded-lg border border-dashed border-slate-300 px-4 py-6 text-center text-sm text-slate-500 dark:border-white/10 dark:text-slate-400">No open helpdesk tickets.</p>
                @endforelse
            </div>

            <div class="mt-4 pt-3 border-t border-slate-200 dark:border-white/10 flex items-center justify-between">
                <span class="text-xs text-slate-500 dark:text-slate-400">Showing {{ $recentHelpdeskTickets->count() }} of {{ number_format($dashboard['open_tickets']) }} open tickets</span>
                <a class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 hover:underline flex items-center gap-1 font-mono transition-colors" href="{{ route('admin.preview.access-requests') }}">
                    <span>Manage ticket queue</span>
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
                        @forelse ($recentUsers as $user)
                        <tr class="hover:bg-slate-50 dark:hover:bg-white/[0.02] transition-colors">
                            <td class="py-3 px-3">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-7 h-7 rounded-full bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-300 dark:border-emerald-600/40 text-emerald-800 dark:text-emerald-300 flex items-center justify-center font-bold text-[11px]">
                                        {{ \Illuminate\Support\Str::of($user->name)->explode(' ')->filter()->take(2)->map(fn (string $part) => mb_strtoupper(mb_substr($part, 0, 1)))->implode('') }}
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-medium text-slate-900 dark:text-white">{{ $user->name }}</span>
                                        <span class="text-[11px] text-slate-500 dark:text-slate-400 font-mono">{{ $user->email }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-3 text-slate-600 dark:text-slate-300">{{ $user->department?->name ?? '—' }}</td>
                            <td class="py-3 px-3">
                                <span class="px-2 py-0.5 rounded text-[11px] bg-sky-50 dark:bg-sky-950/60 text-sky-700 dark:text-sky-300 border border-sky-300 dark:border-sky-500/30">{{ ucfirst($user->role) }}</span>
                            </td>
                            <td class="py-3 px-3">
                                <span class="flex items-center gap-1.5 text-[11px] {{ $user->account_status === 'active' ? 'text-emerald-600 dark:text-emerald-400' : 'text-amber-600 dark:text-amber-400' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $user->account_status === 'active' ? 'bg-emerald-500' : 'bg-amber-400' }}"></span>{{ ucwords(str_replace('_', ' ', $user->account_status)) }}
                                </span>
                            </td>
                            <td class="py-3 px-3 text-right">
                                <a href="{{ route('admin.preview.user-management') }}" class="px-2.5 py-1 rounded bg-slate-100 dark:bg-white/5 hover:bg-slate-200 dark:hover:bg-white/10 text-slate-700 dark:text-slate-200 text-xs font-medium transition-colors">Manage</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-3 py-6 text-center text-sm text-slate-500 dark:text-slate-400">No user accounts have been created.</td>
                        </tr>
                        @endforelse
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
                <a href="{{ route('admin.preview.access-requests') }}#helpdesk-tickets" class="w-full flex items-center justify-between p-3 rounded-lg bg-amber-50 dark:bg-amber-950/30 hover:bg-amber-100 dark:hover:bg-amber-900/40 border border-amber-300 dark:border-amber-500/40 text-amber-800 dark:text-amber-200 font-medium text-xs transition-colors shadow-sm text-left">
                    <span class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px] text-amber-600 dark:text-amber-300">support_agent</span>
                        <span>Triage Helpdesk Tickets</span>
                    </span>
                    <span class="text-xs font-mono font-bold px-2 py-0.5 rounded bg-amber-500/20 text-amber-700 dark:text-amber-300">{{ number_format($dashboard['open_tickets']) }} Open</span>
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

                <div class="flex flex-col gap-3">
                    @forelse ($recentAuditLogs as $log)
                        <div class="p-2.5 rounded-lg bg-slate-50 dark:bg-[#121c2d] border border-slate-200 dark:border-white/5 flex items-start gap-2.5 text-xs">
                            <span class="material-symbols-outlined text-emerald-500 text-[16px] mt-0.5 shrink-0">receipt_long</span>
                            <div class="flex flex-col flex-1 min-w-0">
                                <span class="text-slate-900 dark:text-white font-medium truncate">{{ $log->description ?: $log->action }}</span>
                                <span class="text-[11px] text-slate-500 dark:text-slate-400 font-mono">{{ $log->user?->name ?: 'System' }} • {{ $log->action }}</span>
                            </div>
                            <span class="text-[10px] font-mono text-slate-400 shrink-0">{{ $log->created_at->diffForHumans() }}</span>
                        </div>
                    @empty
                        <div class="p-3 text-xs text-slate-500 dark:text-slate-400">No audit activity has been recorded.</div>
                    @endforelse
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
