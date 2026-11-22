<!DOCTYPE html><html class="dark" lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet">
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
<nav class="flex flex-col gap-1.5 p-4 text-sm font-medium"><div class="px-3 pt-2 pb-1 text-[11px] font-mono uppercase tracking-wider text-slate-500">Admin Navigation</div>
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.dashboard') }}" title="Admin Dashboard">
  <span class="material-symbols-outlined text-[20px] text-slate-400">dashboard</span>
  <span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.user-management') }}" title="User Management &amp; RBAC Roles">
  <span class="material-symbols-outlined text-[20px] text-slate-400">group</span>
  <span>User Management</span>
</a>
<a class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.access-requests') }}" title="Review Clearance Requests">
  <div class="flex items-center gap-3">
    <span class="material-symbols-outlined text-[20px] text-slate-400">fact_check</span>
    <span>Access Requests</span>
  </div>
  <span class="text-[11px] font-mono font-bold px-2 py-0.5 rounded-full bg-rose-500/20 text-rose-300 border border-rose-500/30">12</span>
</a>
<div class="flex flex-col gap-1">
  <a class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container-high text-white border-l-2 border-primary font-medium transition-colors" href="{{ route('admin.preview.access-levels') }}" title="Document Access Levels &amp; Classification">
    <div class="flex items-center gap-3">
      <span class="material-symbols-outlined text-[20px] text-primary">tune</span>
      <span class="text-primary font-semibold">Document Access Levels</span>
    </div>
    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
  </a>
</div>
<a class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors group" href="{{ route('admin.preview.deposit-file') }}" title="Deposit &amp; File Creation screen">
  <div class="flex items-center gap-3">
    <span class="material-symbols-outlined text-[20px] text-slate-400 group-hover:text-emerald-300">upload_file</span>
    <span class="group-hover:text-white">Deposit &amp; File Creation</span>
  </div>
  <span class="text-[9px] font-mono px-1 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">NEW</span>
</a>
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.audit-logs') }}" title="Cryptographic Audit Logs">
  <span class="material-symbols-outlined text-[20px] text-slate-400">receipt_long</span>
  <span>Audit Logs</span>
</a>
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.system-settings') }}" title="Institutional Settings">
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
<main class="w-full pt-16 bg-[#0a0f18] min-h-screen text-slate-200"><div class="flex flex-col w-full">
<!-- Content Body Container -->
<div class="p-6 md:p-8 flex flex-col gap-8 max-w-[1440px] mx-auto w-full">
<!-- 1. Header & Meta Breadcrumbs Area -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
<div class="flex flex-col gap-2">
<!-- Breadcrumb Navigation -->
<nav class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface-variant uppercase"><a href="{{ route('admin.preview.dashboard') }}" class="hover:text-primary transition-colors cursor-pointer" title="Go to Admin Dashboard">Admin Console</a>
<span class="text-outline-variant">/</span>
<a href="{{ route('admin.preview.deposit-file') }}" class="hover:text-primary transition-colors cursor-pointer" title="View Document Management">Document Management</a>
<span class="text-outline-variant">/</span>
<span class="text-primary font-bold">Access Levels &amp; Categories</span></nav>
<!-- Title & Subtitle -->
<div class="flex flex-col gap-1 mt-1">
<div class="flex items-center gap-3">
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Document Access Levels &amp; Classification Categories</h1>
<span class="px-2.5 py-0.5 rounded-full bg-surface-container-high text-primary font-code-snippet text-code-snippet">v4.8-SEC</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
            Configure institutional clearance thresholds, retention policies, and role-based cryptographic permissions across Cavite State University digital records.
          </p>
</div>
</div>
<!-- Action Buttons -->
<div class="flex items-center gap-3 self-start lg:self-auto shrink-0"><a href="/admin/preview/audit-logs" class="flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-all shadow-sm border border-[#1c2a3f]" id="exportSchemaBtn" title="Export schema to Audit Logs &amp; Ledger">
  <span class="material-symbols-outlined text-[18px] text-on-surface-variant">download_for_offline</span>
  <span>Export Schema</span>
</a>
<button class="flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-surface-container-highest hover:bg-surface-bright text-white font-label-md text-label-md border border-[#22334d] transition-all" id="createCategoryBtn">
  <span class="material-symbols-outlined text-[18px] text-primary">add_moderator</span>
  <span>Create Category</span>
</button>
<a href="{{ route('admin.preview.deposit-file') }}" class="flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary hover:bg-primary-fixed-dim text-on-primary font-label-md text-label-md shadow-md transition-all font-semibold" id="depositFileBtn" title="Open File Creation &amp; Categorization">
  <span class="material-symbols-outlined text-[18px]">upload_file</span>
  <span>Deposit &amp; Create File</span>
</a></div>
</div>
<!-- 2. Four Institutional Clearance Tier Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4"><!-- Tier 1: Public Institutional --><div class="relative bg-surface-container rounded-xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between overflow-hidden group border border-[#1c2a3f] hover:border-emerald-500/40"><div class="absolute top-0 left-0 right-0 h-1 bg-emerald-500"></div><div class="absolute -right-8 -top-8 w-24 h-24 bg-primary/10 rounded-full blur-xl pointer-events-none"></div><div class="flex flex-col gap-3 pt-1"><div class="flex items-center justify-between"><span class="px-2.5 py-0.5 rounded font-label-sm text-[10px] font-bold tracking-wider bg-emerald-500/15 border border-emerald-500/30 text-emerald-300">TIER 1 • PUBLIC</span><button class="text-on-surface-variant hover:text-white p-1 rounded hover:bg-surface-container-high transition-colors" title="Configure Tier Policies"><span class="material-symbols-outlined text-[18px]">tune</span></button></div><div class="flex flex-col"><h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Institutional Public</h2><span class="font-body-sm text-xs text-on-surface-variant">Press releases, university catalogs, open bulletins</span></div></div><div class="mt-5 pt-3.5 flex flex-col gap-3 bg-surface-container-low/70 rounded-lg p-3 border border-[#1c2a3f]/60"><div class="flex items-baseline justify-between"><span class="text-xs text-on-surface-variant font-medium">Sealed Records</span><span class="font-code-snippet text-xs font-bold text-on-surface">4,820 docs</span></div><div class="flex items-center justify-between"><span class="text-[11px] font-mono text-on-surface-variant uppercase tracking-wide">Clearance</span><span class="px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 font-label-sm text-[11px] font-semibold border border-emerald-500/20">Public / Guest</span></div><div class="flex items-center justify-between pt-1 border-t border-[#1c2a3f]/60 text-xs"><div class="flex items-center gap-1.5 text-on-surface-variant"><span class="material-symbols-outlined text-[15px] text-emerald-400">lock_open</span><span class="font-code-snippet text-[11px]">TLS 1.3 Strict</span></div><span class="text-[10px] font-mono text-emerald-400 font-semibold">Zero-Auth</span></div></div><a href="{{ route('admin.preview.access-levels') }}" class="mt-3 w-full py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-bright text-xs font-medium text-slate-200 hover:text-white border border-[#22334d] flex items-center justify-center gap-1.5 transition-colors" title="Configure Tier 1 Public Clearance in System Settings"><span class="material-symbols-outlined text-[14px] text-emerald-400">shield</span><span>Configure Clearance</span></a></div><!-- Tier 2: Internal Academic --><div class="relative bg-surface-container rounded-xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between overflow-hidden group border border-[#1c2a3f] hover:border-blue-500/40"><div class="absolute top-0 left-0 right-0 h-1 bg-blue-500"></div><div class="absolute -right-8 -top-8 w-24 h-24 bg-tertiary/10 rounded-full blur-xl pointer-events-none"></div><div class="flex flex-col gap-3 pt-1"><div class="flex items-center justify-between"><span class="px-2.5 py-0.5 rounded font-label-sm text-[10px] font-bold tracking-wider bg-blue-500/15 border border-blue-500/30 text-blue-300">TIER 2 • INTERNAL</span><button class="text-on-surface-variant hover:text-white p-1 rounded hover:bg-surface-container-high transition-colors" title="Configure Tier Policies"><span class="material-symbols-outlined text-[18px]">tune</span></button></div><div class="flex flex-col"><h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Internal Academic</h2><span class="font-body-sm text-xs text-on-surface-variant">Syllabi, staff minutes, unit memos, internal schedules</span></div></div><div class="mt-5 pt-3.5 flex flex-col gap-3 bg-surface-container-low/70 rounded-lg p-3 border border-[#1c2a3f]/60"><div class="flex items-baseline justify-between"><span class="text-xs text-on-surface-variant font-medium">Sealed Records</span><span class="font-code-snippet text-xs font-bold text-on-surface">6,102 docs</span></div><div class="flex items-center justify-between"><span class="text-[11px] font-mono text-on-surface-variant uppercase tracking-wide">Clearance</span><span class="px-2 py-0.5 rounded bg-blue-500/10 text-blue-300 font-label-sm text-[11px] font-semibold border border-blue-500/20">Faculty &amp; Staff</span></div><div class="flex items-center justify-between pt-1 border-t border-[#1c2a3f]/60 text-xs"><div class="flex items-center gap-1.5 text-on-surface-variant"><span class="material-symbols-outlined text-[15px] text-blue-400">security</span><span class="font-code-snippet text-[11px]">CvSU OAuth 2.0</span></div><span class="text-[10px] font-mono text-blue-400 font-semibold">SSO Validated</span></div></div><a href="{{ route('admin.preview.access-levels') }}" class="mt-3 w-full py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-bright text-xs font-medium text-slate-200 hover:text-white border border-[#22334d] flex items-center justify-center gap-1.5 transition-colors" title="Configure Tier 2 Internal Clearance in System Settings"><span class="material-symbols-outlined text-[14px] text-blue-400">shield</span><span>Configure Clearance</span></a></div><!-- Tier 3: Confidential Records --><div class="relative bg-surface-container rounded-xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between overflow-hidden group border border-[#1c2a3f] hover:border-amber-500/40"><div class="absolute top-0 left-0 right-0 h-1 bg-amber-500"></div><div class="absolute -right-8 -top-8 w-24 h-24 bg-amber-500/10 rounded-full blur-xl pointer-events-none"></div><div class="flex flex-col gap-3 pt-1"><div class="flex items-center justify-between"><span class="px-2.5 py-0.5 rounded font-label-sm text-[10px] font-bold tracking-wider bg-amber-500/15 border border-amber-500/30 text-amber-300">TIER 3 • CONFIDENTIAL</span><button class="text-on-surface-variant hover:text-white p-1 rounded hover:bg-surface-container-high transition-colors" title="Configure Tier Policies"><span class="material-symbols-outlined text-[18px]">tune</span></button></div><div class="flex flex-col"><h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Confidential Records</h2><span class="font-body-sm text-xs text-on-surface-variant">Transcripts, faculty evaluations, budget allocations</span></div></div><div class="mt-5 pt-3.5 flex flex-col gap-3 bg-surface-container-low/70 rounded-lg p-3 border border-[#1c2a3f]/60"><div class="flex items-baseline justify-between"><span class="text-xs text-on-surface-variant font-medium">Sealed Records</span><span class="font-code-snippet text-xs font-bold text-amber-300">3,210 docs</span></div><div class="flex items-center justify-between"><span class="text-[11px] font-mono text-on-surface-variant uppercase tracking-wide">Clearance</span><span class="px-2 py-0.5 rounded bg-amber-500/10 text-amber-300 font-label-sm text-[11px] font-semibold border border-amber-500/20">Dean / Dept Head</span></div><div class="flex items-center justify-between pt-1 border-t border-[#1c2a3f]/60 text-xs"><div class="flex items-center gap-1.5 text-on-surface-variant"><span class="material-symbols-outlined text-[15px] text-amber-400">verified_user</span><span class="font-code-snippet text-[11px]">AES-256 Ledger</span></div><span class="text-[10px] font-mono text-amber-400 font-semibold">Dual-Key</span></div></div><a href="{{ route('admin.preview.access-levels') }}" class="mt-3 w-full py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-bright text-xs font-medium text-slate-200 hover:text-white border border-[#22334d] flex items-center justify-center gap-1.5 transition-colors" title="Configure Tier 3 Confidential Clearance in System Settings"><span class="material-symbols-outlined text-[14px] text-amber-400">shield</span><span>Configure Clearance</span></a></div><!-- Tier 4: Restricted Vault --><div class="relative bg-surface-container rounded-xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between overflow-hidden group border border-[#1c2a3f] hover:border-rose-500/40"><div class="absolute top-0 left-0 right-0 h-1 bg-rose-500"></div><div class="absolute -right-8 -top-8 w-24 h-24 bg-rose-500/10 rounded-full blur-xl pointer-events-none"></div><div class="flex flex-col gap-3 pt-1"><div class="flex items-center justify-between"><span class="px-2.5 py-0.5 rounded font-label-sm text-[10px] font-bold tracking-wider bg-rose-500/20 border border-rose-500/40 text-rose-300">TIER 4 • RESTRICTED</span><button class="text-on-surface-variant hover:text-white p-1 rounded hover:bg-surface-container-high transition-colors" title="Configure Tier Policies"><span class="material-symbols-outlined text-[18px]">tune</span></button></div><div class="flex flex-col"><h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Restricted Vault</h2><span class="font-body-sm text-xs text-on-surface-variant">BOR resolutions, HSM keys, proprietary patents</span></div></div><div class="mt-5 pt-3.5 flex flex-col gap-3 bg-surface-container-low/70 rounded-lg p-3 border border-[#1c2a3f]/60"><div class="flex items-baseline justify-between"><span class="text-xs text-on-surface-variant font-medium">Sealed Records</span><span class="font-code-snippet text-xs font-bold text-rose-400">760 docs</span></div><div class="flex items-center justify-between"><span class="text-[11px] font-mono text-on-surface-variant uppercase tracking-wide">Clearance</span><span class="px-2 py-0.5 rounded bg-rose-500/15 text-rose-300 font-label-sm text-[11px] font-semibold border border-rose-500/30">Registrar / Superadmin</span></div><div class="flex items-center justify-between pt-1 border-t border-[#1c2a3f]/60 text-xs"><div class="flex items-center gap-1.5 text-on-surface-variant"><span class="material-symbols-outlined text-[15px] text-rose-400">key</span><span class="font-code-snippet text-[11px]">HSM + FIDO2 2FA</span></div><span class="text-[10px] font-mono text-rose-400 font-semibold">Enclave</span></div></div><a href="{{ route('admin.preview.access-levels') }}" class="mt-3 w-full py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-bright text-xs font-medium text-slate-200 hover:text-white border border-[#22334d] flex items-center justify-center gap-1.5 transition-colors" title="Configure Tier 4 Restricted Vault Clearance in System Settings"><span class="material-symbols-outlined text-[14px] text-rose-400">shield</span><span>Configure Clearance</span></a></div></div>
<!-- 3. Main Workspace Grid: Categories Table (8 cols) & Side Quick Config Drawer (4 cols) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- Table Section (8 cols) -->
<div class="lg:col-span-8 flex flex-col gap-4">
<!-- Filter Bar & Search Container -->
<div class="bg-surface-container rounded-xl p-4 flex flex-col md:flex-row gap-4 justify-between items-center shadow-sm"><!-- Filter Tabs --><div class="flex items-center gap-1.5 overflow-x-auto w-full md:w-auto pb-1 md:pb-0 scrollbar-none"><button class="cat-filter-btn px-3.5 py-1.5 rounded-lg bg-surface-container-highest text-primary font-label-md text-xs font-semibold whitespace-nowrap transition-colors flex items-center gap-1.5" data-filter="all"><span>All Categories</span><span class="px-1.5 py-0.2 rounded-full bg-primary/20 text-primary text-[10px] font-mono font-bold">8</span></button><button class="cat-filter-btn px-3 py-1.5 rounded-lg hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-md text-xs whitespace-nowrap transition-colors flex items-center gap-1.5" data-filter="academic"><span>Academic &amp; Curriculum</span><span class="text-[10px] font-mono text-slate-400">3</span></button><button class="cat-filter-btn px-3 py-1.5 rounded-lg hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-md text-xs whitespace-nowrap transition-colors flex items-center gap-1.5" data-filter="administrative"><span>Administrative &amp; Board</span><span class="text-[10px] font-mono text-slate-400">2</span></button><button class="cat-filter-btn px-3 py-1.5 rounded-lg hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-md text-xs whitespace-nowrap transition-colors flex items-center gap-1.5" data-filter="financial"><span>Financial &amp; BAC</span><span class="text-[10px] font-mono text-slate-400">1</span></button><button class="cat-filter-btn px-3 py-1.5 rounded-lg hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-md text-xs whitespace-nowrap transition-colors flex items-center gap-1.5" data-filter="personnel"><span>Personnel &amp; HR</span><span class="text-[10px] font-mono text-slate-400">2</span></button></div><!-- Search Category Input & Fast Filter --><div class="flex items-center gap-2 w-full md:w-auto shrink-0"><div class="relative w-full md:w-64"><span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[17px]">search</span><input class="w-full bg-surface-container-lowest text-on-surface placeholder:text-outline pl-9 pr-3 py-1.5 rounded-lg font-body-sm text-xs focus:outline-none focus:ring-1 focus:ring-primary border border-[#1c2a3f] transition-all" id="categorySearch" placeholder="Search category, tag, code..." type="text"></div><button class="px-2.5 py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high border border-[#1c2a3f] text-slate-300 hover:text-white transition-colors flex items-center gap-1 text-xs shrink-0" title="Filter by Tier"><span class="material-symbols-outlined text-[16px]">filter_list</span><span>Tier</span></button></div></div>
<!-- Categories Data Table Container -->
<div class="bg-surface-container rounded-xl overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-3.5 px-4 font-semibold">Category Name &amp; Context</th>
<th class="py-3.5 px-4 font-semibold">Clearance Tier</th>
<th class="py-3.5 px-4 font-semibold">Permitted Roles</th>
<th class="py-3.5 px-4 font-semibold">Retention</th>
<th class="py-3.5 px-4 font-semibold">Security Protocol</th>
<th class="py-3.5 px-4 font-semibold text-right">Files</th>
<th class="py-3.5 px-4 font-semibold text-center">Action</th>
</tr>
</thead>
<tbody class="font-body-sm text-body-sm divide-y-0 text-on-surface" id="categoryTableBody"><!-- Row 1: BOR Resolutions --><tr class="hover:bg-surface-container-high/60 transition-colors group border-b border-[#1c2a3f]/40" data-category="administrative"><td class="py-3.5 px-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-lg bg-rose-500/15 border border-rose-500/30 flex items-center justify-center text-rose-400 shrink-0"><span class="material-symbols-outlined text-[19px]">gavel</span></div><div class="flex flex-col min-w-0"><div class="flex items-center gap-2"><span class="font-semibold text-sm text-on-surface group-hover:text-primary transition-colors">Board of Regents (BOR) Resolutions</span><span class="px-1.5 py-0.5 rounded text-[10px] font-mono bg-[#1c2a3f] text-slate-300">CAT-ADM-01</span></div><span class="text-xs text-on-surface-variant truncate">Institutional decrees, charter amendments, sealed minutes</span></div></div></td><td class="py-3.5 px-4 whitespace-nowrap"><span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full font-label-sm text-[11px] font-semibold bg-rose-500/20 text-rose-300 border border-rose-500/40"><span class="w-1.5 h-1.5 rounded-full bg-rose-400"></span>Tier 4 Restricted</span></td><td class="py-3.5 px-4"><div class="flex flex-wrap gap-1"><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">BOR Sec</span><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">Univ President</span></div></td><td class="py-3.5 px-4 whitespace-nowrap font-medium text-xs text-on-surface">Permanent / Archival</td><td class="py-3.5 px-4 whitespace-nowrap"><div class="flex items-center gap-1.5 text-xs text-on-surface"><span class="material-symbols-outlined text-[15px] text-rose-400">encrypted</span><span class="font-mono text-[11px]">HSM-Sign + Dual 2FA</span></div></td><td class="py-3.5 px-4 text-right font-mono text-xs font-semibold text-on-surface whitespace-nowrap">428</td><td class="py-3.5 px-4 text-center"><div class="flex items-center justify-center gap-1"><button class="p-1.5 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors" title="Edit Policy"><span class="material-symbols-outlined text-[17px]">edit_note</span></button><button class="p-1.5 rounded text-on-surface-variant hover:text-white hover:bg-surface-container-highest transition-colors" title="Manage Roles"><span class="material-symbols-outlined text-[17px]">admin_panel_settings</span></button></div></td></tr><!-- Row 2: Faculty Dossiers --><tr class="hover:bg-surface-container-high/60 transition-colors group border-b border-[#1c2a3f]/40" data-category="personnel"><td class="py-3.5 px-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-lg bg-amber-500/15 border border-amber-500/30 flex items-center justify-center text-amber-300 shrink-0"><span class="material-symbols-outlined text-[19px]">badge</span></div><div class="flex flex-col min-w-0"><div class="flex items-center gap-2"><span class="font-semibold text-sm text-on-surface group-hover:text-primary transition-colors">Faculty Evaluation &amp; Tenure Dossiers</span><span class="px-1.5 py-0.5 rounded text-[10px] font-mono bg-[#1c2a3f] text-slate-300">CAT-HR-04</span></div><span class="text-xs text-on-surface-variant truncate">NBC-461 metrics, peer reviews, promotional audits</span></div></div></td><td class="py-3.5 px-4 whitespace-nowrap"><span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full font-label-sm text-[11px] font-semibold bg-amber-500/15 text-amber-300 border border-amber-500/30"><span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>Tier 3 Confidential</span></td><td class="py-3.5 px-4"><div class="flex flex-wrap gap-1"><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">College Deans</span><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">HR Director</span></div></td><td class="py-3.5 px-4 whitespace-nowrap font-medium text-xs text-on-surface">10 Years Post-Tenure</td><td class="py-3.5 px-4 whitespace-nowrap"><div class="flex items-center gap-1.5 text-xs text-on-surface"><span class="material-symbols-outlined text-[15px] text-amber-400">verified</span><span class="font-mono text-[11px]">AES-256 + 2FA Gate</span></div></td><td class="py-3.5 px-4 text-right font-mono text-xs font-semibold text-on-surface whitespace-nowrap">1,142</td><td class="py-3.5 px-4 text-center"><div class="flex items-center justify-center gap-1"><button class="p-1.5 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors" title="Edit Policy"><span class="material-symbols-outlined text-[17px]">edit_note</span></button><button class="p-1.5 rounded text-on-surface-variant hover:text-white hover:bg-surface-container-highest transition-colors" title="Manage Roles"><span class="material-symbols-outlined text-[17px]">admin_panel_settings</span></button></div></td></tr><!-- Row 3: Student Transcripts (TOR) --><tr class="hover:bg-surface-container-high/60 transition-colors group border-b border-[#1c2a3f]/40" data-category="academic"><td class="py-3.5 px-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-lg bg-amber-500/15 border border-amber-500/30 flex items-center justify-center text-amber-300 shrink-0"><span class="material-symbols-outlined text-[19px]">school</span></div><div class="flex flex-col min-w-0"><div class="flex items-center gap-2"><span class="font-semibold text-sm text-on-surface group-hover:text-primary transition-colors">Student Transcript &amp; Grade Sheets</span><span class="px-1.5 py-0.5 rounded text-[10px] font-mono bg-[#1c2a3f] text-slate-300">CAT-ACA-02</span></div><span class="text-xs text-on-surface-variant truncate">Official transcripts of records, registrar grade books</span></div></div></td><td class="py-3.5 px-4 whitespace-nowrap"><span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full font-label-sm text-[11px] font-semibold bg-amber-500/15 text-amber-300 border border-amber-500/30"><span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>Tier 3 Confidential</span></td><td class="py-3.5 px-4"><div class="flex flex-wrap gap-1"><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">Univ Registrar</span><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">Dept Head</span></div></td><td class="py-3.5 px-4 whitespace-nowrap font-medium text-xs text-on-surface">Permanent / Archival</td><td class="py-3.5 px-4 whitespace-nowrap"><div class="flex items-center gap-1.5 text-xs text-on-surface"><span class="material-symbols-outlined text-[15px] text-amber-400">enhanced_encryption</span><span class="font-mono text-[11px]">Watermarked + SHA</span></div></td><td class="py-3.5 px-4 text-right font-mono text-xs font-semibold text-on-surface whitespace-nowrap">2,068</td><td class="py-3.5 px-4 text-center"><div class="flex items-center justify-center gap-1"><button class="p-1.5 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors" title="Edit Policy"><span class="material-symbols-outlined text-[17px]">edit_note</span></button><button class="p-1.5 rounded text-on-surface-variant hover:text-white hover:bg-surface-container-highest transition-colors" title="Manage Roles"><span class="material-symbols-outlined text-[17px]">admin_panel_settings</span></button></div></td></tr><!-- Row 4: Syllabi & Curriculum Guides --><tr class="hover:bg-surface-container-high/60 transition-colors group border-b border-[#1c2a3f]/40" data-category="academic"><td class="py-3.5 px-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-lg bg-blue-500/15 border border-blue-500/30 flex items-center justify-center text-blue-300 shrink-0"><span class="material-symbols-outlined text-[19px]">menu_book</span></div><div class="flex flex-col min-w-0"><div class="flex items-center gap-2"><span class="font-semibold text-sm text-on-surface group-hover:text-primary transition-colors">Institutional Syllabi &amp; Curriculum Guides</span><span class="px-1.5 py-0.5 rounded text-[10px] font-mono bg-[#1c2a3f] text-slate-300">CAT-ACA-01</span></div><span class="text-xs text-on-surface-variant truncate">CHED syllabus compliance, course learning outcomes</span></div></div></td><td class="py-3.5 px-4 whitespace-nowrap"><span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full font-label-sm text-[11px] font-semibold bg-blue-500/15 text-blue-300 border border-blue-500/30"><span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>Tier 2 Internal</span></td><td class="py-3.5 px-4"><div class="flex flex-wrap gap-1"><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">All Faculty</span><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">Curriculum Comm</span></div></td><td class="py-3.5 px-4 whitespace-nowrap font-medium text-xs text-on-surface">5 Years</td><td class="py-3.5 px-4 whitespace-nowrap"><div class="flex items-center gap-1.5 text-xs text-on-surface"><span class="material-symbols-outlined text-[15px] text-blue-400">vpn_key</span><span class="font-mono text-[11px]">Standard RBAC Session</span></div></td><td class="py-3.5 px-4 text-right font-mono text-xs font-semibold text-on-surface whitespace-nowrap">3,980</td><td class="py-3.5 px-4 text-center"><div class="flex items-center justify-center gap-1"><button class="p-1.5 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors" title="Edit Policy"><span class="material-symbols-outlined text-[17px]">edit_note</span></button><button class="p-1.5 rounded text-on-surface-variant hover:text-white hover:bg-surface-container-highest transition-colors" title="Manage Roles"><span class="material-symbols-outlined text-[17px]">admin_panel_settings</span></button></div></td></tr><!-- Row 5: Annual Procurement Plans (APP) --><tr class="hover:bg-surface-container-high/60 transition-colors group border-b border-[#1c2a3f]/40" data-category="financial"><td class="py-3.5 px-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-lg bg-blue-500/15 border border-blue-500/30 flex items-center justify-center text-blue-300 shrink-0"><span class="material-symbols-outlined text-[19px]">receipt</span></div><div class="flex flex-col min-w-0"><div class="flex items-center gap-2"><span class="font-semibold text-sm text-on-surface group-hover:text-primary transition-colors">Annual Procurement Plans (APP)</span><span class="px-1.5 py-0.5 rounded text-[10px] font-mono bg-[#1c2a3f] text-slate-300">CAT-FIN-03</span></div><span class="text-xs text-on-surface-variant truncate">BAC bids, project purchase requests, COA ledgers</span></div></div></td><td class="py-3.5 px-4 whitespace-nowrap"><span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full font-label-sm text-[11px] font-semibold bg-blue-500/15 text-blue-300 border border-blue-500/30"><span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>Tier 2 Internal</span></td><td class="py-3.5 px-4"><div class="flex flex-wrap gap-1"><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">BAC Secretariat</span><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">Budget Office</span></div></td><td class="py-3.5 px-4 whitespace-nowrap font-medium text-xs text-on-surface">7 Years (COA)</td><td class="py-3.5 px-4 whitespace-nowrap"><div class="flex items-center gap-1.5 text-xs text-on-surface"><span class="material-symbols-outlined text-[15px] text-blue-400">lock</span><span class="font-mono text-[11px]">RBAC + Audit Log</span></div></td><td class="py-3.5 px-4 text-right font-mono text-xs font-semibold text-on-surface whitespace-nowrap">842</td><td class="py-3.5 px-4 text-center"><div class="flex items-center justify-center gap-1"><button class="p-1.5 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors" title="Edit Policy"><span class="material-symbols-outlined text-[17px]">edit_note</span></button><button class="p-1.5 rounded text-on-surface-variant hover:text-white hover:bg-surface-container-highest transition-colors" title="Manage Roles"><span class="material-symbols-outlined text-[17px]">admin_panel_settings</span></button></div></td></tr><!-- Row 6: Research Ethics & Patents --><tr class="hover:bg-surface-container-high/60 transition-colors group" data-category="academic"><td class="py-3.5 px-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-lg bg-rose-500/15 border border-rose-500/30 flex items-center justify-center text-rose-400 shrink-0"><span class="material-symbols-outlined text-[19px]">biotech</span></div><div class="flex flex-col min-w-0"><div class="flex items-center gap-2"><span class="font-semibold text-sm text-on-surface group-hover:text-primary transition-colors">Research Ethics &amp; Patent Filings</span><span class="px-1.5 py-0.5 rounded text-[10px] font-mono bg-[#1c2a3f] text-slate-300">CAT-RES-07</span></div><span class="text-xs text-on-surface-variant truncate">IP registrations, unpublished biotechnology research data</span></div></div></td><td class="py-3.5 px-4 whitespace-nowrap"><span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full font-label-sm text-[11px] font-semibold bg-rose-500/20 text-rose-300 border border-rose-500/40"><span class="w-1.5 h-1.5 rounded-full bg-rose-400"></span>Tier 4 Restricted</span></td><td class="py-3.5 px-4"><div class="flex flex-wrap gap-1"><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">OVPRE</span><span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 font-mono text-[11px]">IP Officers</span></div></td><td class="py-3.5 px-4 whitespace-nowrap font-medium text-xs text-on-surface">Permanent / Archival</td><td class="py-3.5 px-4 whitespace-nowrap"><div class="flex items-center gap-1.5 text-xs text-on-surface"><span class="material-symbols-outlined text-[15px] text-rose-400">encrypted</span><span class="font-mono text-[11px]">AES-256 + 2FA Gate</span></div></td><td class="py-3.5 px-4 text-right font-mono text-xs font-semibold text-on-surface whitespace-nowrap">332</td><td class="py-3.5 px-4 text-center"><div class="flex items-center justify-center gap-1"><button class="p-1.5 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors" title="Edit Policy"><span class="material-symbols-outlined text-[17px]">edit_note</span></button><button class="p-1.5 rounded text-on-surface-variant hover:text-white hover:bg-surface-container-highest transition-colors" title="Manage Roles"><span class="material-symbols-outlined text-[17px]">admin_panel_settings</span></button></div></td></tr></tbody>
</table>
</div>
<!-- Table Footer Pagination/Status -->
<div class="p-4 bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-3 text-on-surface-variant font-label-sm text-label-sm">
<span class="font-code-snippet text-code-snippet">Showing 6 of 8 active university classification schemata</span>
<div class="flex items-center gap-2">
<button class="px-3 py-1 rounded bg-surface-container hover:bg-surface-bright text-on-surface transition-colors disabled:opacity-50" disabled="">Previous</button>
<span class="px-2 font-code-snippet text-code-snippet text-primary font-bold">1</span>
<button class="px-3 py-1 rounded bg-surface-container hover:bg-surface-bright text-on-surface transition-colors">Next</button>
</div>
</div>
</div>
<!-- System Cryptographic Status Strip -->
<div class="bg-surface-container-low rounded-xl p-4 flex flex-col sm:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-3">
<span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse shrink-0"></span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface font-semibold">Classification Sync: Active Ledger</span>
<span class="font-code-snippet text-code-snippet text-on-surface-variant">SHA256: d8f39a0...7b41e (Synchronized across CvSU Silang, Carmona &amp; Main Campuses)</span>
</div>
</div>
<a href="{{ route('admin.preview.audit-logs') }}" class="px-3 py-1.5 rounded bg-surface-container hover:bg-surface-container-highest text-primary font-code-snippet text-code-snippet transition-colors border border-emerald-500/20" title="Inspect Synchronized Ledger in Audit Logs">Verify Merkle Root</a>
</div>
</div>
<!-- Quick Configuration Drawer / Policy Controls (4 cols) -->
<div class="lg:col-span-4 flex flex-col gap-6"><!-- Compliance & Security Toggles Card --><div class="bg-surface-container rounded-xl p-5 shadow-sm border border-[#1c2a3f] flex flex-col gap-5"><div class="flex items-center justify-between border-b border-[#1c2a3f] pb-4"><div class="flex items-center gap-2.5"><div class="w-8 h-8 rounded bg-primary/10 border border-primary/20 flex items-center justify-center text-primary"><span class="material-symbols-outlined text-[19px]">gavel</span></div><div><h2 class="font-headline-sm text-sm font-semibold text-on-surface">Default Policy Controls</h2><span class="text-[11px] text-on-surface-variant">Cryptographic baselines</span></div></div><span class="px-2 py-0.5 rounded font-label-sm text-[10px] font-bold bg-primary/15 border border-primary/30 text-primary">ENFORCED</span></div><p class="font-body-sm text-xs text-on-surface-variant leading-relaxed">University-wide cryptographic baseline parameters applying to all document categories without explicit exemptions.</p><!-- Toggle Rules List --><div class="flex flex-col gap-3"><!-- Toggle 1: RA 10173 --><div class="flex items-start justify-between gap-3 p-3 rounded-lg bg-surface-container-low border border-[#1c2a3f]/70"><div class="flex flex-col gap-0.5"><span class="font-label-md text-xs font-semibold text-on-surface">RA 10173 Compliance Rule</span><span class="font-body-sm text-[11px] text-on-surface-variant leading-snug">PH Data Privacy Act mandatory logging on student/faculty PII access</span></div><button aria-checked="true" class="toggle-btn relative inline-flex h-5 w-10 shrink-0 cursor-pointer rounded-full bg-primary transition-colors focus:outline-none" role="switch"><span class="translate-x-5 inline-block h-4 w-4 transform rounded-full bg-surface shadow-sm transition-transform mt-0.5 ml-0.5"></span></button></div><!-- Toggle 2: Mandatory Dual Approval --><div class="flex items-start justify-between gap-3 p-3 rounded-lg bg-surface-container-low border border-[#1c2a3f]/70"><div class="flex flex-col gap-0.5"><span class="font-label-md text-xs font-semibold text-on-surface">Mandatory Dual-Approval</span><span class="font-body-sm text-[11px] text-on-surface-variant leading-snug">Tier 3/4 unsealing requires College Dean + Superadmin consensus</span></div><button aria-checked="true" class="toggle-btn relative inline-flex h-5 w-10 shrink-0 cursor-pointer rounded-full bg-primary transition-colors focus:outline-none" role="switch"><span class="translate-x-5 inline-block h-4 w-4 transform rounded-full bg-surface shadow-sm transition-transform mt-0.5 ml-0.5"></span></button></div><!-- Toggle 3: Auto-quarantine on Velocity --><div class="flex items-start justify-between gap-3 p-3 rounded-lg bg-surface-container-low border border-[#1c2a3f]/70"><div class="flex flex-col gap-0.5"><span class="font-label-md text-xs font-semibold text-on-surface">Suspicious Velocity Quarantine</span><span class="font-body-sm text-[11px] text-on-surface-variant leading-snug">Auto-freeze clearance if user downloads &gt;15 confidential files within 120s</span></div><button aria-checked="true" class="toggle-btn relative inline-flex h-5 w-10 shrink-0 cursor-pointer rounded-full bg-primary transition-colors focus:outline-none" role="switch"><span class="translate-x-5 inline-block h-4 w-4 transform rounded-full bg-surface shadow-sm transition-transform mt-0.5 ml-0.5"></span></button></div><!-- Toggle 4: University Seal Watermarking --><div class="flex items-start justify-between gap-3 p-3 rounded-lg bg-surface-container-low border border-[#1c2a3f]/70"><div class="flex flex-col gap-0.5"><span class="font-label-md text-xs font-semibold text-on-surface">Dynamic Digital Watermarking</span><span class="font-body-sm text-[11px] text-on-surface-variant leading-snug">Embed requester ID, timestamp, and CvSU cryptographic watermark</span></div><button aria-checked="true" class="toggle-btn relative inline-flex h-5 w-10 shrink-0 cursor-pointer rounded-full bg-primary transition-colors focus:outline-none" role="switch"><span class="translate-x-5 inline-block h-4 w-4 transform rounded-full bg-surface shadow-sm transition-transform mt-0.5 ml-0.5"></span></button></div></div><!-- Hardware Security Module (HSM) State --><div class="p-4 rounded-xl bg-gradient-to-b from-[#131d2e] to-[#0c1320] border border-emerald-500/30 flex flex-col gap-3 relative overflow-hidden"><div class="flex items-center justify-between"><span class="font-mono text-[10px] text-slate-400 uppercase tracking-wider font-semibold">HSM ENCLAVE STATUS</span><span class="font-mono text-[11px] font-semibold text-emerald-400 flex items-center gap-1.5 px-2 py-0.5 rounded-full bg-emerald-500/15 border border-emerald-500/30"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>ONLINE</span></div><div class="flex flex-col gap-0.5"><span class="font-label-md text-xs text-white font-semibold flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px] text-emerald-400">token</span>Gemalto SafeNet Luna 7.4</span><span class="font-mono text-[10px] text-emerald-300/80">FIPS 140-2 Level 3 Validated Enclave</span></div><button class="w-full py-2 rounded-lg bg-surface-container-high hover:bg-surface-bright text-on-surface font-mono text-xs border border-[#22334d] transition-colors text-center flex items-center justify-center gap-2"><span class="material-symbols-outlined text-[15px] text-slate-300">key_vertical</span><span>Re-key Master Classification Token</span></button></div></div><!-- Clearance Distribution Mini Visual Card --><div class="bg-surface-container rounded-xl p-5 shadow-sm border border-[#1c2a3f] flex flex-col gap-4"><div class="flex items-center justify-between"><h3 class="font-headline-sm text-sm font-semibold text-on-surface">Repository Tier Ratio</h3><span class="font-mono text-[11px] text-slate-400">14,732 total docs</span></div><!-- Visual Distribution Bar --><div class="w-full h-3 rounded-full bg-[#0a0f18] p-0.5 border border-[#1c2a3f] flex overflow-hidden gap-0.5"><div class="bg-emerald-500 h-full rounded-l-full" style="width: 32.7%;" title="Tier 1: 32.7%"></div><div class="bg-blue-500 h-full" style="width: 41.4%;" title="Tier 2: 41.4%"></div><div class="bg-amber-500 h-full" style="width: 21.8%;" title="Tier 3: 21.8%"></div><div class="bg-rose-500 h-full rounded-r-full" style="width: 5.2%;" title="Tier 4: 5.2%"></div></div><div class="grid grid-cols-2 gap-2.5 pt-1 font-mono text-xs"><div class="flex items-center gap-2 p-1.5 rounded bg-surface-container-low border border-[#1c2a3f]/50"><span class="w-2 h-2 rounded-full bg-emerald-400 shrink-0"></span><span class="text-slate-300 text-[11px]">T1: 32.7%</span></div><div class="flex items-center gap-2 p-1.5 rounded bg-surface-container-low border border-[#1c2a3f]/50"><span class="w-2 h-2 rounded-full bg-blue-400 shrink-0"></span><span class="text-slate-300 text-[11px]">T2: 41.4%</span></div><div class="flex items-center gap-2 p-1.5 rounded bg-surface-container-low border border-[#1c2a3f]/50"><span class="w-2 h-2 rounded-full bg-amber-400 shrink-0"></span><span class="text-slate-300 text-[11px]">T3: 21.8%</span></div><div class="flex items-center gap-2 p-1.5 rounded bg-surface-container-low border border-[#1c2a3f]/50"><span class="w-2 h-2 rounded-full bg-rose-400 shrink-0"></span><span class="text-slate-300 text-[11px]">T4: 5.2%</span></div></div></div></div>
</div>
</div>
<!-- Interactive Modal: Create / Edit Category Modal -->
<div class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm hidden flex items-center justify-center p-4" id="categoryModal">
<div class="bg-surface-container rounded-xl max-w-xl w-full p-6 shadow-xl flex flex-col gap-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-[24px] text-primary">add_moderator</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">New Document Category</h2>
</div>
<button class="p-1 rounded text-on-surface-variant hover:text-on-surface transition-colors" id="closeModalBtn">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<div class="flex flex-col gap-4 font-body-sm text-body-sm">
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-semibold">Category Title</label>
<input class="w-full bg-surface-container-low text-on-surface placeholder:text-outline p-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary" placeholder="e.g. Faculty Research Grants &amp; MOAs" type="text">
</div>
<div class="grid grid-cols-2 gap-4">
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-semibold">Clearance Level</label>
<select class="w-full bg-surface-container-low text-on-surface p-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary">
<option>Tier 1 • Public Institutional</option>
<option>Tier 2 • Internal Academic</option>
<option selected="">Tier 3 • Confidential Records</option>
<option>Tier 4 • Restricted Vault</option>
</select>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-semibold">Retention Period</label>
<select class="w-full bg-surface-container-low text-on-surface p-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary">
<option>Permanent / Archival</option>
<option>10 Years</option>
<option>7 Years (COA)</option>
<option>5 Years</option>
</select>
</div>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-semibold">Security Protocol</label>
<select class="w-full bg-surface-container-low text-on-surface p-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary">
<option>AES-256 + 2FA Gate Required</option>
<option>HSM Sign + Dual 2FA</option>
<option>Dynamic Watermark + SHA Ledger</option>
<option>Standard RBAC Session</option>
</select>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface font-semibold">Allowed Roles</label>
<div class="grid grid-cols-2 gap-2 bg-surface-container-low p-3 rounded-lg text-on-surface font-code-snippet text-code-snippet">
<label class="flex items-center gap-2 cursor-pointer">
<input checked="" class="rounded bg-surface-container-highest text-primary focus:ring-0" type="checkbox">
<span>Univ President</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input checked="" class="rounded bg-surface-container-highest text-primary focus:ring-0" type="checkbox">
<span>College Deans</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input checked="" class="rounded bg-surface-container-highest text-primary focus:ring-0" type="checkbox">
<span>Dept Heads</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input class="rounded bg-surface-container-highest text-primary focus:ring-0" type="checkbox">
<span>Regular Faculty</span>
</label>
</div>
</div>
</div>
<div class="flex items-center justify-end gap-3 pt-2">
<button class="px-4 py-2 rounded-lg bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-colors" id="cancelModalBtn">
          Cancel
        </button>
<button class="px-4 py-2 rounded-lg bg-primary hover:bg-primary-fixed-dim text-on-primary font-label-md text-label-md shadow-md transition-colors" id="saveCategoryBtn">
          Commit Category
        </button>
</div>
</div>
</div>
<!-- Notification Toast Container -->
<div class="fixed bottom-6 right-6 z-50 bg-surface-bright text-on-surface px-4 py-3 rounded-lg shadow-xl hidden flex items-center gap-3 transition-opacity" id="toast">
<span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
<span class="font-body-sm text-body-sm font-medium" id="toastMessage">Policy configuration saved</span>
</div>
<!-- Client-side Logic Script for Filters, Search & Modals -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
      // 1. Interactive Switch Toggles
      const toggles = document.querySelectorAll('.toggle-btn');
      toggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
          const isChecked = toggle.getAttribute('aria-checked') === 'true';
          const newState = !isChecked;
          toggle.setAttribute('aria-checked', String(newState));
          const knob = toggle.querySelector('span');
          
          if (newState) {
            toggle.classList.remove('bg-surface-container-highest');
            toggle.classList.add('bg-primary');
            knob.classList.remove('translate-x-0.5');
            knob.classList.add('translate-x-5');
            showToast('Enforcement rule enabled');
          } else {
            toggle.classList.remove('bg-primary');
            toggle.classList.add('bg-surface-container-highest');
            knob.classList.remove('translate-x-5');
            knob.classList.add('translate-x-0.5');
            showToast('Enforcement rule temporarily bypassed');
          }
        });
      });

      // 2. Table Filter Tabs
      const filterBtns = document.querySelectorAll('.cat-filter-btn');
      const tableRows = document.querySelectorAll('#categoryTableBody tr');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          filterBtns.forEach(b => {
            b.classList.remove('bg-surface-container-highest', 'text-primary', 'font-semibold');
            b.classList.add('text-on-surface-variant');
          });
          btn.classList.add('bg-surface-container-highest', 'text-primary', 'font-semibold');
          btn.classList.remove('text-on-surface-variant');

          const filter = btn.getAttribute('data-filter');
          tableRows.forEach(row => {
            if (filter === 'all' || row.getAttribute('data-category') === filter) {
              row.style.display = '';
            } else {
              row.style.display = 'none';
            }
          });
        });
      });

      // 3. Search Filter
      const searchInput = document.getElementById('categorySearch');
      if (searchInput) {
        searchInput.addEventListener('input', (e) => {
          const val = e.target.value.toLowerCase();
          tableRows.forEach(row => {
            const text = row.textContent.toLowerCase();
            if (text.includes(val)) {
              row.style.display = '';
            } else {
              row.style.display = 'none';
            }
          });
        });
      }

      // 4. Modal Interactions
      const modal = document.getElementById('categoryModal');
      const openBtn = document.getElementById('createCategoryBtn');
      const closeBtn = document.getElementById('closeModalBtn');
      const cancelBtn = document.getElementById('cancelModalBtn');
      const saveBtn = document.getElementById('saveCategoryBtn');
      const exportBtn = document.getElementById('exportSchemaBtn');

      function openModal() {
        if (modal) modal.classList.remove('hidden');
      }
      function closeModal() {
        if (modal) modal.classList.add('hidden');
      }

      if (openBtn) openBtn.addEventListener('click', openModal);
      if (closeBtn) closeBtn.addEventListener('click', closeModal);
      if (cancelBtn) cancelBtn.addEventListener('click', closeModal);

      if (saveBtn) {
        saveBtn.addEventListener('click', () => {
          closeModal();
          showToast('New Document Category committed to CvSU HSM Enclave');
        });
      }

      if (exportBtn) {
        exportBtn.addEventListener('click', () => {
          showToast('Access policy schema exported as CvSU-DPA-Schema.json');
        });
      }

      // Toast Function
      function showToast(msg) {
        const toast = document.getElementById('toast');
        const toastMsg = document.getElementById('toastMessage');
        if (!toast || !toastMsg) return;
        toastMsg.textContent = msg;
        toast.classList.remove('hidden');
        setTimeout(() => {
          toast.classList.add('hidden');
        }, 3000);
      }
    });
  </script>
</div></main>
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