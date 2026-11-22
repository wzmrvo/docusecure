<!DOCTYPE html><html class="dark" lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script id="tailwind-config">tailwind.config={darkMode:"class",theme:{extend:{colors:{"tertiary-container":"#1d324d","surface-container-low":"#0f1724","on-background":"#e2e8f0","on-secondary-container":"#d1fae5","on-tertiary-fixed-variant":"#3b456b","error-container":"#4c1014","tertiary":"#94a3b8","tertiary-fixed":"#dce1ff","primary-fixed":"#bbf7d0","on-tertiary-fixed":"#0e193d","on-primary-fixed-variant":"#14532d","inverse-surface":"#f1f5f9","surface-container-highest":"#1e293b","inverse-primary":"#15803d","secondary-container":"#14452f","on-secondary-fixed-variant":"#166534","primary":"#22c55e","outline":"#475569","background":"#0a0f18","on-tertiary-container":"#cbd5e1","surface-container":"#131c2e","primary-fixed-dim":"#86efac","on-surface-variant":"#94a3b8","error":"#f87171","primary-container":"#166534","secondary-fixed-dim":"#a7f3d0","secondary":"#10b981","surface-tint":"#22c55e","surface":"#0d1422","inverse-on-surface":"#1e293b","surface-container-lowest":"#080c14","on-secondary":"#ffffff","on-primary":"#052e16","on-surface":"#f8fafc","surface-variant":"#1e293b","surface-bright":"#1e2d44","surface-container-high":"#172338","outline-variant":"#334155","on-primary-container":"#dcfce7","on-tertiary":"#0f172a","on-secondary-fixed":"#052e16","surface-dim":"#0d1422","secondary-fixed":"#d1fae5","on-error-container":"#fee2e2","on-primary-fixed":"#052e16","tertiary-fixed-dim":"#cbd5e1","on-error":"#ffffff"},borderRadius:{DEFAULT:"0.25rem",lg:"0.5rem",xl:"0.75rem",full:"9999px"},fontFamily:{sans:["Inter","sans-serif"],mono:["JetBrains Mono","monospace"]}}}}</script></head><body class="bg-background font-sans text-on-surface antialiased flex min-h-screen">
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-0 h-screen w-64 bg-surface-container-lowest z-50 flex flex-col justify-between border-r border-[#1c2a3f]">
<div class="flex flex-col">
<!-- Brand / Logo Area -->
<div class="h-16 px-5 flex items-center justify-between border-b border-[#1c2a3f] bg-[#0c1320]">
<div class="flex items-center gap-3">
<img alt="CvSU Logo" class="h-8 w-8 object-contain" src="{{ asset('images/cvsu-logo.png') }}">
<div class="flex flex-col">
<span class="text-base font-bold text-white tracking-tight flex items-center gap-1.5">
            DocuSecure
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
</span>
<span class="text-[11px] font-mono text-emerald-400 font-medium">CvSU MIS Admin</span>
</div>
</div>
</div>
<!-- Navigation Links -->
<nav class="flex flex-col gap-1.5 p-4 text-sm font-medium"><div class="px-3 pt-2 pb-1 text-[11px] font-mono uppercase tracking-wider text-slate-500">Navigation</div>
<!-- 1. Dashboard -->
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.dashboard') }}">
  <span class="material-symbols-outlined text-[20px] text-slate-400">dashboard</span>
  <span>Dashboard</span>
</a>
<!-- 2. User Management -->
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.user-management') }}">
  <span class="material-symbols-outlined text-[20px] text-slate-400">group</span>
  <span>User Management</span>
</a>
<!-- 3. Access Requests (ACTIVE) -->
<a class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container-high text-white border-l-2 border-primary font-medium transition-colors" href="{{ route('admin.preview.access-requests') }}">
  <div class="flex items-center gap-3">
    <span class="material-symbols-outlined text-[20px] text-primary">fact_check</span>
    <span>Access Requests</span>
  </div>
  <div class="flex items-center gap-2">
    <span class="text-[11px] font-mono font-bold px-2 py-0.5 rounded-full bg-emerald-500/15 border border-emerald-500/30 text-emerald-400">12</span>
    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
  </div>
</a>
<!-- 4. Document Access Levels -->
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.access-levels') }}">
  <span class="material-symbols-outlined text-[20px] text-slate-400">lock_person</span>
  <span>Document Access Levels</span>
</a>
<!-- 5. Deposit & File Creation -->
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.deposit-file') }}">
  <span class="material-symbols-outlined text-[20px] text-slate-400">upload_file</span>
  <span>Deposit &amp; File Creation</span>
</a>
<!-- 6. Audit Logs -->
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.audit-logs') }}">
  <span class="material-symbols-outlined text-[20px] text-slate-400">receipt_long</span>
  <span>Audit Logs</span>
</a>
<!-- 7. System Settings -->
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.system-settings') }}">
  <span class="material-symbols-outlined text-[20px] text-slate-400">settings</span>
  <span>System Settings</span>
</a></nav>
</div>
<!-- Bottom Admin Badge -->
<div class="p-4 border-t border-[#1c2a3f] bg-[#0c1320] flex flex-col gap-2.5">
<div class="flex items-center justify-between">
<span class="text-[11px] font-mono uppercase tracking-wider text-slate-400 font-medium">Logged In Role</span>
<span class="text-[10px] font-mono px-2 py-0.5 rounded bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 font-semibold">SUPERADMIN</span>
</div>
<div class="flex flex-col">
<span class="text-xs font-semibold text-white">Engr. R. Bautista</span>
<span class="text-[11px] text-slate-400">MIS Administrator</span>
</div>
<a class="flex items-center gap-1.5 text-xs text-rose-400 hover:text-rose-300 pt-1 font-medium transition-colors" href="/">
<span class="material-symbols-outlined text-[16px]">logout</span>
<span>Sign out</span>
</a>
</div>
</aside>
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
<main class="w-full pt-16 bg-[#0a0f18] min-h-screen text-slate-200"><div class="flex flex-col w-full p-6 lg:p-10 gap-8">
<!-- Page Header -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2 font-label-sm text-label-sm uppercase text-primary"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
<a href="{{ route('admin.preview.dashboard') }}" class="hover:underline text-slate-400 hover:text-primary transition-colors flex items-center gap-1">
  <span class="material-symbols-outlined text-[14px]">arrow_back</span>
  <span>ADMIN CONSOLE</span>
</a>
<span class="text-slate-500">/</span>
<span class="text-primary">ACCESS REQUESTS</span></div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Document Access Requests</h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
        Review, approve, or reject institutional clearance applications for Tier 2–4 documents.
      </p>
</div>
<div class="flex items-center gap-4 shrink-0">
<!-- Mini Queue Velocity Telemetry -->
<div class="hidden xl:flex items-center gap-3 px-4 py-2.5 rounded-lg bg-surface-container-low">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase text-on-surface-variant">Queue Velocity</span>
<span class="font-label-md text-label-md text-primary">4.2m avg SLA</span>
</div>
<svg aria-hidden="true" class="w-16 h-7 text-primary" fill="none" viewBox="0 0 64 28">
<polyline points="2,22 12,18 22,20 32,11 42,14 52,6 62,9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
<circle cx="62" cy="9" fill="currentColor" r="2.5"></circle>
</svg>
</div>
<button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-lg text-label-lg transition-colors shadow-sm" id="exportCsvBtn" type="button">
<span class="material-symbols-outlined text-[18px] text-primary">download</span>
<span>Export Queue (CSV)</span>
</button>
</div>
</div>
<!-- Filter & Tab Bar -->
<div class="flex flex-wrap items-center justify-between gap-3 px-4 py-2.5 rounded-lg bg-surface-container border border-[#1c2a3f] text-body-sm text-on-surface-variant">
  <div class="flex items-center gap-2">
    <span class="material-symbols-outlined text-primary text-[18px]">info</span>
    <span>Clearance tier criteria, roles, and automated escalation policies are managed in Document Classification.</span>
  </div>
  <div class="flex items-center gap-4">
    <a href="{{ route('admin.preview.access-levels') }}" class="inline-flex items-center gap-1.5 text-xs text-primary hover:underline font-label-md">
      <span>View Document Access Levels &amp; Policies</span>
      <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
    </a>
    <a href="#" class="inline-flex items-center gap-1.5 text-xs text-slate-400 hover:text-white transition-colors font-label-md">
      <span class="material-symbols-outlined text-[14px]">category</span>
      <span>Document Categories</span>
    </a>
  </div>
</div><div class="flex flex-col gap-4 p-4 rounded-xl bg-surface-container-low shadow-sm">
<div class="flex flex-col xl:flex-row xl:items-center justify-between gap-4">
<!-- Pill Tabs -->
<div aria-label="Request status tabs" class="flex flex-wrap items-center gap-2" role="tablist">
<button class="tab-btn px-4 py-2 rounded-full bg-primary text-on-primary font-label-md text-label-md transition-colors" data-tab="pending" type="button">
          Pending Review (<span id="pendingCountLabel">12</span>)
        </button>
<button class="tab-btn px-4 py-2 rounded-full bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-colors" data-tab="approved" type="button">
          Approved (148)
        </button>
<button class="tab-btn px-4 py-2 rounded-full bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-colors" data-tab="rejected" type="button">
          Rejected (19)
        </button>
<button class="tab-btn px-4 py-2 rounded-full bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-colors" data-tab="all" type="button">
          All Requests (179)
        </button>
</div>
<!-- Search & Dropdowns -->
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 flex-1 xl:max-w-2xl justify-end">
<div class="relative flex-1 min-w-0">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
<input class="w-full bg-surface-container-lowest text-on-surface placeholder:text-on-surface-variant pl-9 pr-4 py-2 rounded-lg font-body-sm text-body-sm focus:outline-none" id="requestSearch" placeholder="Search by requestor, document, or department..." type="text">
</div>
<select aria-label="Filter by clearance tier" class="bg-surface-container-high text-on-surface px-3 py-2 rounded-lg font-label-md text-label-md focus:outline-none" id="tierFilter">
<option value="all">All Clearance Tiers</option>
<option value="Tier 2">Tier 2 Internal</option>
<option value="Tier 3">Tier 3 Confidential</option>
<option value="Tier 4">Tier 4 Restricted</option>
</select>
<select aria-label="Filter by college or unit" class="bg-surface-container-high text-on-surface px-3 py-2 rounded-lg font-label-md text-label-md focus:outline-none" id="unitFilter">
<option value="all">All Colleges/Units</option>
<option value="CEIT">CEIT - Computer Studies</option>
<option value="CAS">CAS - Biological Sciences</option>
<option value="COE">COE - Engineering</option>
<option value="Registrar">University Registrar</option>
</select>
</div>
</div>
</div>
<!-- Main Content: Pending Access Requests List -->
<div class="flex flex-col gap-3" id="requestsList">
<!-- Card 1 -->
<article class="request-card flex flex-col lg:flex-row lg:items-center justify-between gap-5 p-5 rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors shadow-sm" data-doc="Faculty Tenure Dossier.pdf" data-hash="8f4a2c9e1b7d...3a91" data-id="REQ-2026-0891" data-reason="Promotion &amp; Board Review" data-requestor="Prof. Juan Dela Cruz" data-tier="Tier 3" data-time="Requested 14 mins ago" data-unit="CEIT - Computer Studies">
<div class="flex items-start gap-4 min-w-0 flex-1">
<div class="w-11 h-11 rounded-lg bg-surface-container-highest text-primary flex items-center justify-center font-label-lg text-label-lg shrink-0">
          JD
        </div>
<div class="flex flex-col gap-1.5 min-w-0">
<div class="flex flex-wrap items-center gap-2.5">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate">Prof. Juan Dela Cruz</h2>
<span class="px-2.5 py-0.5 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">CEIT - Computer Studies</span>
<span class="px-2.5 py-0.5 rounded bg-tertiary-container text-tertiary-fixed font-label-sm text-label-sm uppercase">Tier 3 Confidential</span>
</div>
<div class="flex flex-wrap items-center gap-x-4 gap-y-1 font-body-sm text-body-sm text-on-surface-variant">
<span class="inline-flex items-center gap-1.5 text-on-surface font-code-snippet text-code-snippet">
<span class="material-symbols-outlined text-[16px] text-primary">description</span>
              Faculty Tenure Dossier.pdf
            </span>
<span>Reason: <strong class="text-on-surface font-medium">Promotion &amp; Board Review</strong></span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Requested 14 mins ago</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center gap-2.5 shrink-0">
<button class="approve-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-primary text-on-primary hover:bg-primary-fixed-dim font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">check_circle</span>
<span>Approve</span>
</button>
<button class="reject-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">cancel</span>
<span>Reject</span>
</button>
<button class="details-btn inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>View Details</span>
</button>
</div>
</article>
<!-- Card 2 -->
<article class="request-card flex flex-col lg:flex-row lg:items-center justify-between gap-5 p-5 rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors shadow-sm" data-doc="CHED Regional Accreditation.xlsx" data-hash="4d1e9b0c7a2f...9c04" data-id="REQ-2026-0890" data-reason="Accreditation submission" data-requestor="Dr. Maricel Reyes" data-tier="Tier 3" data-time="Requested 42 mins ago" data-unit="CAS - Biological Sciences">
<div class="flex items-start gap-4 min-w-0 flex-1">
<div class="w-11 h-11 rounded-lg bg-surface-container-highest text-primary flex items-center justify-center font-label-lg text-label-lg shrink-0">
          MR
        </div>
<div class="flex flex-col gap-1.5 min-w-0">
<div class="flex flex-wrap items-center gap-2.5">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate">Dr. Maricel Reyes</h2>
<span class="px-2.5 py-0.5 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">CAS - Biological Sciences</span>
<span class="px-2.5 py-0.5 rounded bg-tertiary-container text-tertiary-fixed font-label-sm text-label-sm uppercase">Tier 3 Confidential</span>
</div>
<div class="flex flex-wrap items-center gap-x-4 gap-y-1 font-body-sm text-body-sm text-on-surface-variant">
<span class="inline-flex items-center gap-1.5 text-on-surface font-code-snippet text-code-snippet">
<span class="material-symbols-outlined text-[16px] text-primary">table_chart</span>
              CHED Regional Accreditation.xlsx
            </span>
<span>Reason: <strong class="text-on-surface font-medium">Accreditation submission</strong></span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Requested 42 mins ago</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center gap-2.5 shrink-0">
<button class="approve-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-primary text-on-primary hover:bg-primary-fixed-dim font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">check_circle</span>
<span>Approve</span>
</button>
<button class="reject-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">cancel</span>
<span>Reject</span>
</button>
<button class="details-btn inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>View Details</span>
</button>
</div>
</article>
<!-- Card 3 -->
<article class="request-card flex flex-col lg:flex-row lg:items-center justify-between gap-5 p-5 rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors shadow-sm" data-doc="Lab Infrastructure Inventory.pdf" data-hash="7c2b5e8a1d4f...6e12" data-id="REQ-2026-0889" data-reason="Procurement &amp; annual maintenance plan" data-requestor="Engr. Kyle Arboleda" data-tier="Tier 2" data-time="Requested 1 hr ago" data-unit="COE - Engineering">
<div class="flex items-start gap-4 min-w-0 flex-1">
<div class="w-11 h-11 rounded-lg bg-surface-container-highest text-primary flex items-center justify-center font-label-lg text-label-lg shrink-0">
          KA
        </div>
<div class="flex flex-col gap-1.5 min-w-0">
<div class="flex flex-wrap items-center gap-2.5">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate">Engr. Kyle Arboleda</h2>
<span class="px-2.5 py-0.5 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">COE - Engineering</span>
<span class="px-2.5 py-0.5 rounded bg-secondary-container text-secondary-fixed font-label-sm text-label-sm uppercase">Tier 2 Internal</span>
</div>
<div class="flex flex-wrap items-center gap-x-4 gap-y-1 font-body-sm text-body-sm text-on-surface-variant">
<span class="inline-flex items-center gap-1.5 text-on-surface font-code-snippet text-code-snippet">
<span class="material-symbols-outlined text-[16px] text-primary">description</span>
              Lab Infrastructure Inventory.pdf
            </span>
<span>Reason: <strong class="text-on-surface font-medium">Procurement &amp; annual maintenance plan</strong></span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Requested 1 hr ago</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center gap-2.5 shrink-0">
<button class="approve-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-primary text-on-primary hover:bg-primary-fixed-dim font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">check_circle</span>
<span>Approve</span>
</button>
<button class="reject-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">cancel</span>
<span>Reject</span>
</button>
<button class="details-btn inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>View Details</span>
</button>
</div>
</article>
<!-- Card 4 -->
<article class="request-card flex flex-col lg:flex-row lg:items-center justify-between gap-5 p-5 rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors shadow-sm" data-doc="BOR_RES_2026_094.pdf.enc" data-hash="9a0f3e6b2c8d...1f77" data-id="REQ-2026-0888" data-reason="Charter amendment verification" data-requestor="Maria Santos" data-tier="Tier 4" data-time="Requested 2 hrs ago" data-unit="University Registrar">
<div class="flex items-start gap-4 min-w-0 flex-1">
<div class="w-11 h-11 rounded-lg bg-surface-container-highest text-primary flex items-center justify-center font-label-lg text-label-lg shrink-0">
          MS
        </div>
<div class="flex flex-col gap-1.5 min-w-0">
<div class="flex flex-wrap items-center gap-2.5">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate">Maria Santos</h2>
<span class="px-2.5 py-0.5 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">University Registrar</span>
<span class="px-2.5 py-0.5 rounded bg-error-container text-on-error-container font-label-sm text-label-sm uppercase">Tier 4 Restricted</span>
</div>
<div class="flex flex-wrap items-center gap-x-4 gap-y-1 font-body-sm text-body-sm text-on-surface-variant">
<span class="inline-flex items-center gap-1.5 text-on-surface font-code-snippet text-code-snippet">
<span class="material-symbols-outlined text-[16px] text-error">lock</span>
              BOR_RES_2026_094.pdf.enc
            </span>
<span>Reason: <strong class="text-on-surface font-medium">Charter amendment verification</strong></span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Requested 2 hrs ago</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center gap-2.5 shrink-0">
<button class="approve-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-primary text-on-primary hover:bg-primary-fixed-dim font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">check_circle</span>
<span>Approve</span>
</button>
<button class="reject-btn inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">cancel</span>
<span>Reject</span>
</button>
<button class="details-btn inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>View Details</span>
</button>
</div>
</article>
</div>
<!-- Pagination Footer -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
<p class="font-body-sm text-body-sm text-on-surface-variant" id="paginationSummary">
      Showing <span class="text-on-surface font-medium">4</span> of <span class="text-on-surface font-medium">12</span> pending requests
    </p>
<div class="flex items-center gap-1.5">
<button class="px-3 py-1.5 rounded-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-colors" type="button">
        Previous
      </button>
<button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center" type="button">
        1
      </button>
<button class="w-8 h-8 rounded-lg bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors" type="button">
        2
      </button>
<button class="w-8 h-8 rounded-lg bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors" type="button">
        3
      </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container-low text-on-surface hover:bg-surface-container-high font-label-md text-label-md transition-colors" type="button">
        Next
      </button>
</div>
</div>
<!-- Details Modal -->
<div class="fixed inset-0 z-50 hidden items-center justify-center bg-surface-container-lowest/80 backdrop-blur-sm p-4" id="detailsModal">
<div class="w-full max-w-lg rounded-xl bg-surface-container p-6 shadow-xl flex flex-col gap-5">
<div class="flex items-start justify-between gap-4">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-primary uppercase" id="modalReqId">REQ-2026-0891</span>
<h3 class="font-headline-md text-headline-md text-on-surface" id="modalRequestor">Prof. Juan Dela Cruz</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant" id="modalUnit">CEIT - Computer Studies</p>
</div>
<button class="p-1.5 rounded-lg bg-surface-container-high text-on-surface-variant hover:text-on-surface" id="closeModalBtn" type="button">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<div class="flex flex-col gap-3 p-4 rounded-lg bg-surface-container-low">
<div class="flex justify-between gap-4">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Document</span>
<span class="font-code-snippet text-code-snippet text-on-surface text-right" id="modalDoc">Faculty Tenure Dossier.pdf</span>
</div>
<div class="flex justify-between gap-4">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Clearance</span>
<span class="font-label-md text-label-md text-primary" id="modalTier">Tier 3</span>
</div>
<div class="flex justify-between gap-4">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Justification</span>
<span class="font-body-sm text-body-sm text-on-surface text-right" id="modalReason">Promotion &amp; Board Review</span>
</div>
<div class="flex justify-between gap-4">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">SHA-256 Digest</span>
<span class="font-code-snippet text-code-snippet text-on-surface-variant" id="modalHash">8f4a2c9e1b7d...3a91</span>
</div>
</div>
<div class="flex justify-end gap-2"><div class="flex items-center justify-between w-full">
  <a href="{{ route('admin.preview.audit-logs') }}" class="inline-flex items-center gap-1.5 text-xs text-slate-400 hover:text-primary transition-colors font-label-md">
    <span class="material-symbols-outlined text-[16px]">receipt_long</span>
    <span>View Request History in Audit Logs</span>
  </a>
  <div class="flex items-center gap-2">
    <button class="px-4 py-2 rounded-lg bg-surface-container-high text-on-surface font-label-md text-label-md hover:bg-surface-bright transition-colors" id="modalCloseFooterBtn" type="button">
      Close Dossier
    </button>
  </div>
</div></div>
</div>
</div>
<!-- Toast Notification -->
<div class="fixed bottom-6 right-6 z-50 hidden items-center gap-3 px-4 py-3 rounded-lg bg-surface-container-highest text-on-surface shadow-xl" id="actionToast">
<span class="material-symbols-outlined text-[18px] text-primary">verified_user</span>
<span class="font-label-md text-label-md" id="toastMessage">Action recorded in audit log.</span>
</div>
</div>
<script>
  (function () {
    const searchInput = document.getElementById('requestSearch');
    const tierFilter = document.getElementById('tierFilter');
    const unitFilter = document.getElementById('unitFilter');
    const cards = Array.from(document.querySelectorAll('.request-card'));
    const tabBtns = Array.from(document.querySelectorAll('.tab-btn'));
    const pendingCountLabel = document.getElementById('pendingCountLabel');
    const modal = document.getElementById('detailsModal');
    const toast = document.getElementById('actionToast');
    const toastMessage = document.getElementById('toastMessage');

    let pendingCount = 12;

    function showToast(msg) {
      toastMessage.textContent = msg;
      toast.classList.remove('hidden');
      toast.classList.add('flex');
      setTimeout(() => {
        toast.classList.add('hidden');
        toast.classList.remove('flex');
      }, 2600);
    }

    function applyFilters() {
      const q = searchInput.value.trim().toLowerCase();
      const tier = tierFilter.value;
      const unit = unitFilter.value;

      cards.forEach((card) => {
        const text = (
          card.dataset.requestor + ' ' +
          card.dataset.unit + ' ' +
          card.dataset.doc + ' ' +
          card.dataset.reason
        ).toLowerCase();
        const matchesQuery = !q || text.includes(q);
        const matchesTier = tier === 'all' || card.dataset.tier === tier;
        const matchesUnit = unit === 'all' || card.dataset.unit.includes(unit);
        card.style.display = (matchesQuery && matchesTier && matchesUnit) ? '' : 'none';
      });
    }

    searchInput.addEventListener('input', applyFilters);
    tierFilter.addEventListener('change', applyFilters);
    unitFilter.addEventListener('change', applyFilters);

    tabBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        tabBtns.forEach((b) => {
          b.classList.remove('bg-primary', 'text-on-primary');
          b.classList.add('bg-surface-container-high', 'text-on-surface-variant');
        });
        btn.classList.add('bg-primary', 'text-on-primary');
        btn.classList.remove('bg-surface-container-high', 'text-on-surface-variant');
      });
    });

    cards.forEach((card) => {
      const approveBtn = card.querySelector('.approve-btn');
      const rejectBtn = card.querySelector('.reject-btn');
      const detailsBtn = card.querySelector('.details-btn');

      approveBtn.addEventListener('click', () => {
        card.style.opacity = '0.45';
        card.style.pointerEvents = 'none';
        pendingCount = Math.max(0, pendingCount - 1);
        pendingCountLabel.textContent = pendingCount;
        showToast(`Approved access for ${card.dataset.requestor}`);
      });

      rejectBtn.addEventListener('click', () => {
        card.style.opacity = '0.45';
        card.style.pointerEvents = 'none';
        pendingCount = Math.max(0, pendingCount - 1);
        pendingCountLabel.textContent = pendingCount;
        showToast(`Rejected access for ${card.dataset.requestor}`);
      });

      detailsBtn.addEventListener('click', () => {
        document.getElementById('modalReqId').textContent = card.dataset.id;
        document.getElementById('modalRequestor').textContent = card.dataset.requestor;
        document.getElementById('modalUnit').textContent = card.dataset.unit;
        document.getElementById('modalDoc').textContent = card.dataset.doc;
        document.getElementById('modalTier').textContent = card.dataset.tier;
        document.getElementById('modalReason').textContent = card.dataset.reason;
        document.getElementById('modalHash').textContent = card.dataset.hash;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      });
    });

    function closeModal() {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }

    document.getElementById('closeModalBtn').addEventListener('click', closeModal);
    document.getElementById('modalCloseFooterBtn').addEventListener('click', closeModal);
    document.getElementById('exportCsvBtn').addEventListener('click', () => {
      showToast('Exported 12 pending access requests to CSV.');
    });
  })();
</script></main>
</div>





<style>.docusecure-nav-current{background:rgba(148,163,184,.20)!important;color:#fff!important;outline:1px solid rgba(148,163,184,.22)}.docusecure-nav-current span{color:inherit}</style>
<script>(function(){
  var path=window.location.pathname.replace(/\/$/,'')||'/';
  document.querySelectorAll('aside a[href]').forEach(function(link){
    var raw=link.getAttribute('href')||'';
    if(!raw || raw.charAt(0)==='#' || raw.indexOf('mailto:')===0 || raw==='/' || raw.indexOf('javascript:')===0) return;
    var url; try{url=new URL(raw,window.location.origin);}catch(e){return;}
    var target=url.pathname.replace(/\/$/,'')||'/';
    if(target===path){link.classList.add('docusecure-nav-current');link.setAttribute('aria-current','page');}
  });
})();</script>
</body></html>