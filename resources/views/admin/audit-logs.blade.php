<!DOCTYPE html><html class="dark" lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script id="tailwind-config">tailwind.config={darkMode:"class",theme:{extend:{colors:{"tertiary-container":"#1d324d","surface-container-low":"#0f1724","on-background":"#e2e8f0","on-secondary-container":"#d1fae5","on-tertiary-fixed-variant":"#3b456b","error-container":"#4c1014","tertiary":"#94a3b8","tertiary-fixed":"#dce1ff","primary-fixed":"#bbf7d0","on-tertiary-fixed":"#0e193d","on-primary-fixed-variant":"#14532d","inverse-surface":"#f1f5f9","surface-container-highest":"#1e293b","inverse-primary":"#15803d","secondary-container":"#14452f","on-secondary-fixed-variant":"#166534","primary":"#22c55e","outline":"#475569","background":"#0a0f18","on-tertiary-container":"#cbd5e1","surface-container":"#131c2e","primary-fixed-dim":"#86efac","on-surface-variant":"#94a3b8","error":"#f87171","primary-container":"#166534","secondary-fixed-dim":"#a7f3d0","secondary":"#10b981","surface-tint":"#22c55e","surface":"#0d1422","inverse-on-surface":"#1e293b","surface-container-lowest":"#080c14","on-secondary":"#ffffff","on-primary":"#052e16","on-surface":"#f8fafc","surface-variant":"#1e293b","surface-bright":"#1e2d44","surface-container-high":"#172338","outline-variant":"#334155","on-primary-container":"#dcfce7","on-tertiary":"#0f172a","on-secondary-fixed":"#052e16","surface-dim":"#0d1422","secondary-fixed":"#d1fae5","on-error-container":"#fee2e2","on-primary-fixed":"#052e16","tertiary-fixed-dim":"#cbd5e1","on-error":"#ffffff"},borderRadius:{DEFAULT:"0.25rem",lg:"0.5rem",xl:"0.75rem",full:"9999px"},fontFamily:{sans:["Inter","sans-serif"],mono:["JetBrains Mono","monospace"]}}}}</script></head><body class="bg-background font-sans text-on-surface antialiased flex min-h-screen">
<!-- Sidebar Navigation -->
@include('components.sidebar', ['currentRole' => 'admin'])
<!-- Main Wrapper -->
<div class="pl-64 flex flex-col flex-1 min-h-screen">
<!-- Clean Header -->
<header class="fixed top-0 left-64 right-0 h-16 bg-[#0b121e]/95 backdrop-blur-md z-40 border-b border-[#1c2a3f] flex items-center justify-between px-6">
<!-- Search Bar -->
<div class="flex items-center max-w-lg w-full"><div class="relative w-full flex items-center"><span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-[19px]">search</span><input class="w-full bg-[#131d2e] border border-[#22334d] text-white placeholder:text-slate-400 pl-10 pr-14 py-2 rounded-lg text-xs font-normal focus:outline-none focus:border-emerald-500/60 transition-colors" placeholder="Search categories, classification policies, documents..." type="text"><div class="absolute right-2.5 top-1/2 -translate-y-1/2 flex items-center gap-0.5 px-1.5 py-0.5 rounded bg-[#1e2e46]/60 border border-[#22334d] text-[10px] font-mono text-slate-400 font-semibold pointer-events-none"><span>⌘</span><span>K</span></div></div></div>
<!-- Header Actions & Profile -->
<div class="flex items-center gap-4">
<!-- Status Pill -->
<div class="hidden sm:flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-950/60 border border-emerald-500/30 text-emerald-400 text-xs font-medium">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span>System Operational</span>
</div>
<!-- Notification Bell -->
<button class="relative p-2 text-slate-300 hover:text-white hover:bg-[#152033] rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500"></span>
</button>
<div class="h-6 w-px bg-[#1e2e46]"></div>
<!-- Admin Profile Info -->
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-emerald-700/40 border border-emerald-500/40 flex items-center justify-center text-emerald-300 font-semibold text-sm">
          RB
        </div>
<div class="flex flex-col text-left">
<span class="text-xs font-semibold text-white leading-tight">Engr. R. Bautista</span>
<span class="text-[11px] text-slate-400 leading-tight">MIS Administrator • Cavite State University</span>
</div>
</div>
</div>
</header>
<!-- Dashboard Body -->
<main class="w-full pt-16 bg-[#0a0f18] min-h-screen text-slate-200"><div class="flex flex-col w-full">
<div class="px-8 py-7 flex flex-col gap-7">
<!-- Page Header -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-5">
<div class="flex flex-col gap-1.5">
<div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors uppercase" href="{{ route('admin.preview.dashboard') }}" title="Return to Dashboard">ADMIN CONSOLE</a>
<span class="font-label-sm text-label-sm text-on-surface-variant">/</span>
<span class="font-label-sm text-label-sm text-primary uppercase font-semibold">AUDIT LOGS</span></div>
<h1 class="font-headline-lg text-headline-lg text-on-surface">Immutable Audit Logs</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Cryptographically signed system activity trail compliant with RA 10173 (Data Privacy Act of 2012).</p>
</div>
<div class="flex flex-wrap items-center gap-3">
<div class="relative inline-block" id="exportDropdownWrap">
  <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-colors shadow-sm cursor-pointer" id="exportAuditBtn" onclick="document.getElementById('exportMenu').classList.toggle('hidden')" type="button">
    <span class="material-symbols-outlined text-[18px] text-on-surface-variant">download</span>
    <span>Export Audit Log (CSV/PDF)</span>
    <span class="material-symbols-outlined text-[16px] text-on-surface-variant">expand_more</span>
  </button>
  <div class="hidden absolute right-0 mt-1.5 w-52 bg-surface-container-high border border-[#22334d] rounded-lg shadow-lg z-50 py-1 font-body-sm" id="exportMenu">
    <a class="flex items-center gap-2 px-3 py-2 text-on-surface hover:bg-surface-bright transition-colors" href="#" onclick="alert('Exporting signed audit logs as CSV...'); document.getElementById('exportMenu').classList.add('hidden'); return false;">
      <span class="material-symbols-outlined text-[18px] text-emerald-400">table_view</span>
      <span>Export as CSV (.csv)</span>
    </a>
    <a class="flex items-center gap-2 px-3 py-2 text-on-surface hover:bg-surface-bright transition-colors" href="#" onclick="alert('Exporting cryptographically sealed PDF report...'); document.getElementById('exportMenu').classList.add('hidden'); return false;">
      <span class="material-symbols-outlined text-[18px] text-rose-400">picture_as_pdf</span>
      <span>Export Sealed PDF (.pdf)</span>
    </a>
    <a class="flex items-center gap-2 px-3 py-2 text-on-surface hover:bg-surface-bright transition-colors border-t border-[#1c2a3f]" href="#" onclick="alert('Exporting Merkle tree cryptographic proof bundle...'); document.getElementById('exportMenu').classList.add('hidden'); return false;">
      <span class="material-symbols-outlined text-[18px] text-primary">verified</span>
      <span>Export Merkle Proof (.json)</span>
    </a>
  </div>
</div>
<button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary/15 hover:bg-primary/25 text-primary font-label-md text-label-md transition-colors shadow-sm" id="verifyLedgerBtn" type="button">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="material-symbols-outlined text-[18px]">verified_user</span>
<span id="verifyLedgerLabel">Verify Ledger Integrity</span>
</button>
</div>
</div>
<!-- Ledger Integrity & Telemetry Bento Strip -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
<!-- 24H Event Velocity -->
<div class="lg:col-span-5 bg-surface-container rounded-xl p-5 flex items-center justify-between gap-4 shadow-md">
<div class="flex flex-col gap-1 min-w-0">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">24H EVENT VELOCITY</span>
<div class="flex items-baseline gap-2.5">
<span class="font-headline-lg text-headline-lg text-on-surface">{{ number_format($logs->total()) }}</span>
<span class="font-label-sm text-label-sm text-primary bg-primary/15 px-2 py-0.5 rounded">+14.2%</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Signed events across 6 campus nodes</span>
</div>
<div class="w-36 h-14 flex items-end justify-end shrink-0">
<svg class="w-full h-full text-primary" fill="none" viewBox="0 0 140 48" xmlns="http://www.w3.org/2000/svg">
<rect fill="currentColor" fill-opacity="0.25" height="18" rx="1.5" width="8" x="4" y="30"></rect>
<rect fill="currentColor" fill-opacity="0.35" height="24" rx="1.5" width="8" x="16" y="24"></rect>
<rect fill="currentColor" fill-opacity="0.25" height="14" rx="1.5" width="8" x="28" y="34"></rect>
<rect fill="currentColor" fill-opacity="0.45" height="30" rx="1.5" width="8" x="40" y="18"></rect>
<rect fill="currentColor" fill-opacity="0.4" height="26" rx="1.5" width="8" x="52" y="22"></rect>
<rect fill="currentColor" fill-opacity="0.65" height="36" rx="1.5" width="8" x="64" y="12"></rect>
<rect fill="currentColor" fill-opacity="0.55" height="32" rx="1.5" width="8" x="76" y="16"></rect>
<rect fill="currentColor" fill-opacity="0.8" height="40" rx="1.5" width="8" x="88" y="8"></rect>
<rect fill="currentColor" fill-opacity="0.7" height="34" rx="1.5" width="8" x="100" y="14"></rect>
<rect fill="currentColor" fill-opacity="0.9" height="42" rx="1.5" width="8" x="112" y="6"></rect>
<rect fill="currentColor" height="44" rx="1.5" width="8" x="124" y="4"></rect>
</svg>
</div>
</div>
<!-- Cryptographic Chain Status -->
<div class="lg:col-span-4 bg-surface-container rounded-xl p-5 flex flex-col justify-between gap-3 shadow-md">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">CRYPTOGRAPHIC CHAIN</span>
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-primary/15 text-primary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
            MERKLE VERIFIED
          </span>
</div>
<div class="flex items-center justify-between gap-2">
<div class="flex flex-col">
<span class="font-code-snippet text-code-snippet text-on-surface">SHA-256 / TLS 1.3</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Root: 0x8f4e...c91a</span>
</div>
<span class="material-symbols-outlined text-[28px] text-primary/70">shield_lock</span>
</div>
</div>
<!-- Threat & Lockout Monitor -->
<div class="lg:col-span-3 bg-surface-container rounded-xl p-5 flex flex-col justify-between gap-3 shadow-md">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">SECURITY ALERTS</span>
<span class="px-2 py-0.5 rounded bg-error-container text-on-error-container font-label-sm text-label-sm">1 BLOCKED</span>
</div>
<div class="flex items-baseline justify-between">
<div class="flex flex-col">
<span class="font-headline-md text-headline-md text-on-surface">99.92%</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">2FA Verification Rate</span>
</div>
<span class="material-symbols-outlined text-[24px] text-error">gpp_maybe</span>
</div>
</div>
</div>
<!-- Verification Banner (Hidden by default, toggled by Verify Ledger Integrity) -->
<div class="hidden bg-primary/15 rounded-xl px-5 py-3.5 flex items-center justify-between gap-4" id="ledgerStatusBanner">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
<span class="font-body-md text-body-md text-on-surface">Ledger Integrity: {{ number_format($logs->total()) }} database audit events currently recorded.</span>
</div>
<span class="font-label-sm text-label-sm text-primary uppercase">0 TAMPERED BLOCKS</span>
</div>
<!-- Filter Toolbar -->
<div class="bg-surface-container rounded-xl p-4 flex flex-col xl:flex-row items-stretch xl:items-center justify-between gap-3 shadow-md">
<div class="relative flex-1 min-w-0">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[19px]">search</span>
<input class="w-full bg-surface-container-low text-on-surface placeholder:text-on-surface-variant pl-10 pr-4 py-2.5 rounded-lg font-body-md text-body-md focus:outline-none focus:bg-surface-container-high transition-colors" id="auditSearchInput" placeholder="Search by user, IP address, document, or SHA-256 hash..." type="text">
</div>
<div class="flex flex-wrap items-center gap-3">
<!-- Event Type Dropdown -->
<div class="relative">
<select class="appearance-none bg-surface-container-low hover:bg-surface-container-high text-on-surface pl-3.5 pr-9 py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none cursor-pointer transition-colors" id="eventTypeFilter">
<option value="all">All Events</option>
<option value="Authentication">Authentication</option>
<option value="Document Access">Document Access</option>
<option value="Clearance Change">Clearance Change</option>
<option value="Admin Action">Admin Action</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px] pointer-events-none">expand_more</span>
</div>
<!-- Severity Dropdown -->
<div class="relative">
<select class="appearance-none bg-surface-container-low hover:bg-surface-container-high text-on-surface pl-3.5 pr-9 py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none cursor-pointer transition-colors" id="severityFilter">
<option value="all">All</option>
<option value="Info">Info</option>
<option value="Warning">Warning</option>
<option value="Critical">Critical</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px] pointer-events-none">expand_more</span>
</div>
<!-- Date Range -->
<div class="relative">
<select class="appearance-none bg-surface-container-low hover:bg-surface-container-high text-on-surface pl-9 pr-9 py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none cursor-pointer transition-colors">
<option>Last 24 Hours</option>
<option>Last 7 Days</option>
<option>Last 30 Days</option>
<option>Custom Range</option>
</select>
<span class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-primary text-[18px] pointer-events-none">calendar_today</span>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px] pointer-events-none">expand_more</span>
</div>
</div>
</div>
<!-- Audit Logs Table -->
<div class="bg-surface-container rounded-xl overflow-hidden shadow-lg">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low">
<th class="px-5 py-3.5 font-label-sm text-label-sm text-on-surface-variant uppercase">Timestamp</th>
<th class="px-5 py-3.5 font-label-sm text-label-sm text-on-surface-variant uppercase">Actor / Identity</th>
<th class="px-5 py-3.5 font-label-sm text-label-sm text-on-surface-variant uppercase">Event &amp; Target</th>
<th class="px-5 py-3.5 font-label-sm text-label-sm text-on-surface-variant uppercase">Origin IP / Node</th>
<th class="px-5 py-3.5 font-label-sm text-label-sm text-on-surface-variant uppercase">Integrity Hash</th>
<th class="px-5 py-3.5 font-label-sm text-label-sm text-on-surface-variant uppercase text-right">Status</th>
</tr>
</thead>
<tbody id="auditTableBody">
@foreach ($logs as $log)
<tr class="audit-row hover:bg-surface-container-high/60 transition-colors" data-event="{{ $log->action }}" data-severity="Info">
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">{{ $log->created_at->format('h:i:s A') }}</td>
<td class="px-5 py-4 whitespace-nowrap">
<div class="flex items-center gap-2.5">
<div class="w-7 h-7 rounded-full bg-primary/15 text-primary flex items-center justify-center font-label-sm text-label-sm">{{ strtoupper(substr($log->user?->name ?: 'SY', 0, 2)) }}</div>
<span class="font-body-md text-body-md text-on-surface font-medium">{{ $log->user?->name ?: 'System' }}</span>
</div>
</td>
<td class="px-5 py-4 font-body-md text-body-md text-on-surface">{{ $log->description ?: $log->action }}</td>
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">{{ $log->ip_address ?: '127.0.0.1' }}</td>
<td class="px-5 py-4 whitespace-nowrap">
<button class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container-low font-code-snippet text-code-snippet text-on-surface-variant" type="button">
<span>{{ substr(hash('sha256', $log->subject_type.$log->subject_id.$log->created_at), 0, 16) }}</span>
</button>
</td>
<td class="px-5 py-4 text-right whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-primary/15 text-primary font-label-sm text-label-sm"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Recorded</span>
</td>
</tr>
@endforeach
@if ($logs->isEmpty())
<tr><td colspan="6" class="px-5 py-10 text-center text-on-surface-variant">No audit events recorded yet.</td></tr>
@endif
{{--
<tr class="audit-row hover:bg-surface-container-high/60 transition-colors" data-event="Authentication" data-severity="Info">
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">10:42:18 AM</td>
<td class="px-5 py-4 whitespace-nowrap">
<a class="flex items-center gap-2.5 group" href="#" title="View user profile in User Management">
<div class="w-7 h-7 rounded-full bg-primary/15 text-primary flex items-center justify-center font-label-sm text-label-sm group-hover:ring-1 group-hover:ring-primary">JD</div>
<span class="font-body-md text-body-md text-on-surface font-medium group-hover:text-primary transition-colors">Prof. Juan Dela Cruz</span>
</a>
</td>
<td class="px-5 py-4 font-body-md text-body-md text-on-surface">User Login (2FA TOTP Verified)</td>
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">10.24.12.8 (Indang Main)</td>
<td class="px-5 py-4 whitespace-nowrap">
<button class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container-low hover:bg-surface-container-highest font-code-snippet text-code-snippet text-on-surface-variant hover:text-on-surface transition-colors" onclick="copyHash(this, 'sha256:9f8a...3c12')" type="button">
<span>sha256:9f8a...3c12</span>
<span class="material-symbols-outlined text-[14px]">content_copy</span>
</button>
</td>
<td class="px-5 py-4 text-right whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-primary/15 text-primary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                  Success
                </span>
</td>
</tr>
<!-- Row 2 -->
<tr class="audit-row bg-surface-container-low/40 hover:bg-surface-container-high/60 transition-colors" data-event="Admin Action" data-severity="Info">
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">10:36:05 AM</td>
<td class="px-5 py-4 whitespace-nowrap">
<a class="flex items-center gap-2.5 group" href="#" title="View administrator profile in User Management">
<div class="w-7 h-7 rounded-full bg-primary/15 text-primary flex items-center justify-center font-label-sm text-label-sm group-hover:ring-1 group-hover:ring-primary">RB</div>
<span class="font-body-md text-body-md text-on-surface font-medium group-hover:text-primary transition-colors">Engr. R. Bautista</span>
</a>
</td>
<td class="px-5 py-4 font-body-md text-body-md text-on-surface">Approved Access: <a class="font-code-snippet text-code-snippet text-primary hover:underline inline-flex items-center gap-1" href="#" title="View Document in Document Access Levels"><span>BOR_RES_2026_094.pdf.enc</span><span class="material-symbols-outlined text-[14px]">open_in_new</span></a></td>
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">10.24.1.4 (MIS Console)</td>
<td class="px-5 py-4 whitespace-nowrap">
<button class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container-low hover:bg-surface-container-highest font-code-snippet text-code-snippet text-on-surface-variant hover:text-on-surface transition-colors" onclick="copyHash(this, 'sha256:4d2e...8a90')" type="button">
<span>sha256:4d2e...8a90</span>
<span class="material-symbols-outlined text-[14px]">content_copy</span>
</button>
</td>
<td class="px-5 py-4 text-right whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-primary/15 text-primary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                  Signed
                </span>
</td>
</tr>
<!-- Row 3 -->
<tr class="audit-row hover:bg-surface-container-high/60 transition-colors" data-event="Clearance Change" data-severity="Warning">
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">10:21:44 AM</td>
<td class="px-5 py-4 whitespace-nowrap">
<a class="flex items-center gap-2.5 group" href="#" title="View user profile in User Management">
<div class="w-7 h-7 rounded-full bg-tertiary-container text-tertiary-fixed flex items-center justify-center font-label-sm text-label-sm group-hover:ring-1 group-hover:ring-tertiary">MS</div>
<span class="font-body-md text-body-md text-on-surface font-medium group-hover:text-tertiary-fixed transition-colors">Maria Santos</span>
</a>
</td>
<td class="px-5 py-4 font-body-md text-body-md text-on-surface">Password Reset Requested</td>
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">10.24.18.22 (Registrar)</td>
<td class="px-5 py-4 whitespace-nowrap">
<button class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container-low hover:bg-surface-container-highest font-code-snippet text-code-snippet text-on-surface-variant hover:text-on-surface transition-colors" onclick="copyHash(this, 'sha256:7b1c...5e04')" type="button">
<span>sha256:7b1c...5e04</span>
<span class="material-symbols-outlined text-[14px]">content_copy</span>
</button>
</td>
<td class="px-5 py-4 text-right whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-tertiary-container text-tertiary-fixed font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                  Pending
                </span>
</td>
</tr>
<!-- Row 4 -->
<tr class="audit-row bg-surface-container-low/40 hover:bg-surface-container-high/60 transition-colors" data-event="Authentication" data-severity="Critical">
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">10:08:12 AM</td>
<td class="px-5 py-4 whitespace-nowrap">
<a class="flex items-center gap-2.5 group" href="#" title="Inspect locked security incident in User Management">
<div class="w-7 h-7 rounded-full bg-error-container text-on-error-container flex items-center justify-center font-label-sm text-label-sm group-hover:ring-1 group-hover:ring-error">!</div>
<span class="font-body-md text-body-md text-error font-medium group-hover:underline">Unknown / j.delacruz</span>
</a>
</td>
<td class="px-5 py-4 font-body-md text-body-md text-on-surface">
<a class="text-error hover:underline flex items-center gap-1" href="#" title="Review lockout details in User Management">
<span>Failed 2FA Attempt (5/5 Lockout Triggered)</span>
<span class="material-symbols-outlined text-[14px]">lock_reset</span>
</a>
</td>
<td class="px-5 py-4 font-code-snippet text-code-snippet text-error whitespace-nowrap">192.168.4.19 (External)</td>
<td class="px-5 py-4 whitespace-nowrap">
<button class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container-low hover:bg-surface-container-highest font-code-snippet text-code-snippet text-on-surface-variant hover:text-on-surface transition-colors" onclick="copyHash(this, 'sha256:1a9f...0d77')" type="button">
<span>sha256:1a9f...0d77</span>
<span class="material-symbols-outlined text-[14px]">content_copy</span>
</button>
</td>
<td class="px-5 py-4 text-right whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-error-container text-on-error-container font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                  Blocked
                </span>
</td>
</tr>
<!-- Row 5 -->
<tr class="audit-row hover:bg-surface-container-high/60 transition-colors" data-event="Document Access" data-severity="Info">
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">09:54:30 AM</td>
<td class="px-5 py-4 whitespace-nowrap">
<a class="flex items-center gap-2.5 group" href="#" title="View user profile in User Management">
<div class="w-7 h-7 rounded-full bg-secondary-container text-secondary-fixed flex items-center justify-center font-label-sm text-label-sm group-hover:ring-1 group-hover:ring-secondary">MR</div>
<span class="font-body-md text-body-md text-on-surface font-medium group-hover:text-secondary-fixed transition-colors">Dr. Maricel Reyes</span>
</a>
</td>
<td class="px-5 py-4 font-body-md text-body-md text-on-surface">Downloaded: <a class="font-code-snippet text-code-snippet text-secondary hover:underline inline-flex items-center gap-1" href="#" title="Inspect File Clearance in Document Access Levels"><span>CHED_Accreditation_2026.xlsx</span><span class="material-symbols-outlined text-[14px]">open_in_new</span></a></td>
<td class="px-5 py-4 font-code-snippet text-code-snippet text-on-surface-variant whitespace-nowrap">10.24.9.15 (CAS)</td>
<td class="px-5 py-4 whitespace-nowrap">
<button class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container-low hover:bg-surface-container-highest font-code-snippet text-code-snippet text-on-surface-variant hover:text-on-surface transition-colors" onclick="copyHash(this, 'sha256:6c3b...2f18')" type="button">
<span>sha256:6c3b...2f18</span>
<span class="material-symbols-outlined text-[14px]">content_copy</span>
</button>
</td>
<td class="px-5 py-4 text-right whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-secondary-container text-secondary-fixed font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                  Watermarked
                </span>
</td>
</tr>
--}}
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="bg-surface-container-low px-5 py-3.5 flex flex-col sm:flex-row items-center justify-between gap-3">
<span class="font-body-sm text-body-sm text-on-surface-variant">Showing {{ $logs->count() }} of {{ $logs->total() }} audit events</span>
<div class="flex items-center gap-1.5">
@if ($logs->onFirstPage())
<span class="px-3 py-1.5 rounded bg-surface-container text-on-surface-variant/50 font-label-sm text-label-sm">Previous</span>
@else
<a class="px-3 py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-colors" href="{{ $logs->previousPageUrl() }}">Previous</a>
@endif
@foreach ($logs->getUrlRange(1, $logs->lastPage()) as $page => $url)
<a class="px-3 py-1.5 rounded {{ $page === $logs->currentPage() ? 'bg-primary text-on-primary' : 'bg-surface-container text-on-surface-variant hover:text-on-surface' }} font-label-sm text-label-sm" href="{{ $url }}">{{ $page }}</a>
@endforeach
@if ($logs->hasMorePages())
<a class="px-3 py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-colors" href="{{ $logs->nextPageUrl() }}">Next</a>
@else
<span class="px-3 py-1.5 rounded bg-surface-container text-on-surface-variant/50 font-label-sm text-label-sm">Next</span>
@endif
</div>
</div>
</div>
</div>
</div>
<script>
  (function () {
    const searchInput = document.getElementById('auditSearchInput');
    const eventFilter = document.getElementById('eventTypeFilter');
    const severityFilter = document.getElementById('severityFilter');
    const rows = document.querySelectorAll('.audit-row');

    function filterRows() {
      const query = (searchInput.value || '').toLowerCase();
      const eventVal = eventFilter.value;
      const severityVal = severityFilter.value;

      rows.forEach((row) => {
        const text = row.innerText.toLowerCase();
        const rowEvent = row.getAttribute('data-event');
        const rowSeverity = row.getAttribute('data-severity');

        const matchesSearch = text.includes(query);
        const matchesEvent = eventVal === 'all' || rowEvent === eventVal;
        const matchesSeverity = severityVal === 'all' || rowSeverity === severityVal;

        row.style.display = matchesSearch && matchesEvent && matchesSeverity ? '' : 'none';
      });
    }

    searchInput.addEventListener('input', filterRows);
    eventFilter.addEventListener('change', filterRows);
    severityFilter.addEventListener('change', filterRows);

    const verifyBtn = document.getElementById('verifyLedgerBtn');
    const verifyLabel = document.getElementById('verifyLedgerLabel');
    const banner = document.getElementById('ledgerStatusBanner');

    verifyBtn.addEventListener('click', function () {
      verifyLabel.textContent = 'Verifying...';
      setTimeout(function () {
        verifyLabel.textContent = 'Ledger Verified';
        banner.classList.remove('hidden');
      }, 450);
    });
  })();

  function copyHash(btn, hash) {
    if (navigator.clipboard) {
      navigator.clipboard.writeText(hash);
    }
    const label = btn.querySelector('span');
    const original = label.textContent;
    label.textContent = 'Copied!';
    setTimeout(() => {
      label.textContent = original;
    }, 1200);
  }
</script></main>
</div>




</body></html>