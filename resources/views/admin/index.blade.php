<!DOCTYPE html><html class="dark" lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script id="tailwind-config">tailwind.config={darkMode:"class",theme:{extend:{colors:{"tertiary-container":"#1d324d","surface-container-low":"#0f1724","on-background":"#e2e8f0","on-secondary-container":"#d1fae5","on-tertiary-fixed-variant":"#3b456b","error-container":"#4c1014","tertiary":"#94a3b8","tertiary-fixed":"#dce1ff","primary-fixed":"#bbf7d0","on-tertiary-fixed":"#0e193d","on-primary-fixed-variant":"#14532d","inverse-surface":"#f1f5f9","surface-container-highest":"#1e293b","inverse-primary":"#15803d","secondary-container":"#14452f","on-secondary-fixed-variant":"#166534","primary":"#22c55e","outline":"#475569","background":"#0a0f18","on-tertiary-container":"#cbd5e1","surface-container":"#131c2e","primary-fixed-dim":"#86efac","on-surface-variant":"#94a3b8","error":"#f87171","primary-container":"#166534","secondary-fixed-dim":"#a7f3d0","secondary":"#10b981","surface-tint":"#22c55e","surface":"#0d1422","inverse-on-surface":"#1e293b","surface-container-lowest":"#080c14","on-secondary":"#ffffff","on-primary":"#052e16","on-surface":"#f8fafc","surface-variant":"#1e293b","surface-bright":"#1e2d44","surface-container-high":"#172338","outline-variant":"#334155","on-primary-container":"#dcfce7","on-tertiary":"#0f172a","on-secondary-fixed":"#052e16","surface-dim":"#0d1422","secondary-fixed":"#d1fae5","on-error-container":"#fee2e2","on-primary-fixed":"#052e16","tertiary-fixed-dim":"#cbd5e1","on-error":"#ffffff"},borderRadius:{DEFAULT:"0.25rem",lg:"0.5rem",xl:"0.75rem",full:"9999px"},fontFamily:{sans:["Inter","sans-serif"],mono:["JetBrains Mono","monospace"]}}}}</script></head><body class="bg-background font-sans text-on-surface antialiased flex min-h-screen">
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-0 h-screen w-64 bg-surface-container-lowest z-50 flex flex-col justify-between border-r border-[#1c2a3f]">
<div class="flex flex-col">
<!-- Brand / Logo Area -->
<div class="h-16 px-5 flex items-center justify-between border-b border-[#1c2a3f] bg-[#0c1320]">
<a href="{{ route('admin.preview.dashboard') }}" data-route="dashboard" class="flex items-center gap-3 hover:opacity-90 transition-opacity"><img alt="CvSU Logo" class="h-8 w-8 object-contain" src="{{ asset('images/cvsu-logo.png') }}"><div class="flex flex-col"><span class="text-base font-bold text-white tracking-tight flex items-center gap-1.5">DocuSecure<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span></span><span class="text-[11px] font-mono text-emerald-400 font-medium">CvSU MIS Admin</span></div></a>
</div>
<!-- Navigation Links -->
<nav class="flex flex-col gap-1.5 p-4 text-sm font-medium"><div class="px-3 pt-2 pb-1 text-[11px] font-mono uppercase tracking-wider text-slate-500">Navigation</div><a aria-current="page" data-route="dashboard" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg bg-emerald-600/15 border border-emerald-500/30 text-emerald-400 font-semibold transition-colors" href="{{ route('admin.preview.dashboard') }}"><span class="material-symbols-outlined text-[20px]">dashboard</span><span>Dashboard</span></a><a data-route="user-management" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.user-management') }}"><span class="material-symbols-outlined text-[20px] text-slate-400">group</span><span>User Management</span></a><a data-route="access-requests" class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.access-requests') }}"><div class="flex items-center gap-3"><span class="material-symbols-outlined text-[20px] text-slate-400">fact_check</span><span>Access Requests</span></div><span class="text-[11px] font-mono font-bold px-2 py-0.5 rounded-full bg-rose-500/20 text-rose-300 border border-rose-500/30">12</span></a><a data-route="document-access-levels" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.access-levels') }}"><span class="material-symbols-outlined text-[20px] text-slate-400">shield</span><span>Document Access Levels</span></a><a data-route="file-creation" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.deposit-file') }}"><span class="material-symbols-outlined text-[20px] text-slate-400">note_add</span><span>Deposit &amp; File Creation</span></a><a data-route="audit-logs" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.audit-logs') }}"><span class="material-symbols-outlined text-[20px] text-slate-400">receipt_long</span><span>Audit Logs</span></a><a data-route="system-settings" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-slate-300 hover:bg-surface-container-high hover:text-white transition-colors" href="{{ route('admin.preview.system-settings') }}"><span class="material-symbols-outlined text-[20px] text-slate-400">settings</span><span>System Settings</span></a></nav>
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
<a class="flex items-center gap-1.5 text-xs text-rose-400 hover:text-rose-300 pt-1 font-medium transition-colors" href="{{ route('admin.preview.logout-confirmation') }}">
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
<div class="flex items-center max-w-lg w-full">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-[19px]">search</span>
<input class="w-full bg-[#131d2e] border border-[#22334d] text-white placeholder:text-slate-400 pl-10 pr-4 py-2 rounded-lg text-xs font-normal focus:outline-none focus:border-emerald-500/60 transition-colors" placeholder="Search users, access requests, documents..." type="text">
</div>
</div>
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
<main class="w-full pt-16 bg-[#0a0f18] min-h-screen text-slate-200">
<div class="p-6 max-w-[1560px] mx-auto flex flex-col gap-6">
<!-- Page Header -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-1">
<div>
<h1 class="text-2xl font-bold text-white tracking-tight">Admin Console</h1>
<p class="text-xs text-slate-400 mt-1">Manage user roles, review document access requests, and monitor audit trails.</p>
</div>
<div class="flex items-center gap-2">
<span class="text-xs font-mono text-slate-400 bg-[#111a2a] px-3 py-1.5 rounded-lg border border-[#1e2f47]">
            CvSU Central MIS • Term 2025-2026
          </span>
</div>
</div>
<!-- 4 Stat Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Stat 1: Total Users -->
<div class="bg-[#0e1726] border border-[#1d2d44] p-5 rounded-xl flex flex-col justify-between shadow-sm hover:border-emerald-500/40 transition-colors">
<div class="flex items-start justify-between">
<div>
<span class="text-[11px] font-mono uppercase tracking-wider text-slate-400 font-medium">Total Users</span>
<div class="text-3xl font-bold text-white mt-1.5 tracking-tight">3,420</div>
</div>
<div class="w-10 h-10 rounded-lg bg-emerald-950/40 border border-emerald-500/30 flex items-center justify-center text-emerald-400">
<span class="material-symbols-outlined text-[22px]">group</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-[#1a293f] text-[11px] font-mono text-slate-400">
            1,800 Faculty • 680 Staff • 940 Students
          </div>
</div>
<!-- Stat 2: Pending Access Requests -->
<div class="bg-[#0e1726] border border-[#1d2d44] p-5 rounded-xl flex flex-col justify-between shadow-sm hover:border-amber-500/40 transition-colors">
<div class="flex items-start justify-between">
<div>
<span class="text-[11px] font-mono uppercase tracking-wider text-slate-400 font-medium">Pending Requests</span>
<div class="flex items-baseline gap-2 mt-1.5">
<span class="text-3xl font-bold text-white tracking-tight">12</span>
<span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-amber-500/15 border border-amber-500/30 text-amber-300">Requires Review</span>
</div>
</div>
<div class="w-10 h-10 rounded-lg bg-amber-950/40 border border-amber-500/30 flex items-center justify-center text-amber-400">
<span class="material-symbols-outlined text-[22px]">pending_actions</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-[#1a293f] flex items-center justify-between text-[11px]">
<span class="text-amber-300 font-medium font-mono">Action needed</span>
<a class="text-emerald-400 hover:text-emerald-300 font-semibold font-mono flex items-center gap-0.5" href="{{ route('admin.preview.access-requests') }}">
<span>Queue</span>
<span class="material-symbols-outlined text-[13px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Stat 3: Total Documents -->
<div class="bg-[#0e1726] border border-[#1d2d44] p-5 rounded-xl flex flex-col justify-between shadow-sm hover:border-emerald-500/40 transition-colors">
<div class="flex items-start justify-between">
<div>
<span class="text-[11px] font-mono uppercase tracking-wider text-slate-400 font-medium">Total Documents</span>
<div class="text-3xl font-bold text-white mt-1.5 tracking-tight">14,892</div>
</div>
<div class="w-10 h-10 rounded-lg bg-[#142236] border border-[#213552] flex items-center justify-center text-sky-400">
<span class="material-symbols-outlined text-[22px]">description</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-[#1a293f] flex items-center justify-between text-[11px] font-mono">
<span class="text-emerald-400 flex items-center gap-1 font-medium">
<span class="material-symbols-outlined text-[14px]">lock</span>Secure &amp; Encrypted
            </span>
<span class="text-slate-400">AES-256</span>
</div>
</div>
<!-- Stat 4: Audit Events Today -->
<div class="bg-[#0e1726] border border-[#1d2d44] p-5 rounded-xl flex flex-col justify-between shadow-sm hover:border-emerald-500/40 transition-colors">
<div class="flex items-start justify-between">
<div>
<span class="text-[11px] font-mono uppercase tracking-wider text-slate-400 font-medium">Audit Events Today</span>
<div class="text-3xl font-bold text-white mt-1.5 tracking-tight">1,248</div>
</div>
<div class="w-10 h-10 rounded-lg bg-emerald-950/40 border border-emerald-500/30 flex items-center justify-center text-emerald-400">
<span class="material-symbols-outlined text-[22px]">verified_user</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-[#1a293f] flex items-center gap-1.5 text-[11px] font-mono text-emerald-400 font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span>No security incidents</span>
</div>
</div>
</div>
<!-- Main Two-Column Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
<!-- Left Column: Primary Lists (8 Cols) -->
<div class="lg:col-span-8 flex flex-col gap-6">
<!-- Section A: Pending Access Requests Queue -->
<div class="bg-[#0e1726] border border-[#1d2d44] rounded-xl p-5 shadow-sm" id="requests-queue">
<div class="flex items-center justify-between pb-4 border-b border-[#1a293f]">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-lg bg-emerald-950/50 border border-emerald-500/30 flex items-center justify-center text-emerald-400">
<span class="material-symbols-outlined text-[19px]">fact_check</span>
</div>
<div>
<h2 class="text-base font-bold text-white">Pending Access Requests Queue</h2>
<p class="text-xs text-slate-400">Review and authorize institutional clearance applications</p>
</div>
</div>
<span class="text-xs font-mono font-semibold px-2.5 py-1 rounded bg-amber-500/15 border border-amber-500/30 text-amber-300">
                12 Pending
              </span>
</div>
<!-- List of Request Cards -->
<div class="flex flex-col gap-3.5 mt-4">
<!-- Request Item 1 -->
<div class="bg-[#121c2d] border border-[#1e2f47] p-4 rounded-lg flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:border-[#2b4163] transition-colors">
<div class="flex flex-col gap-1.5">
<div class="flex flex-wrap items-center gap-2">
<span class="text-sm font-bold text-white">Prof. Juan Dela Cruz</span>
<span class="text-xs font-mono text-slate-400">• CEIT (Computer Studies)</span>
<span class="text-[10px] font-mono px-2 py-0.5 rounded bg-amber-500/15 border border-amber-500/30 text-amber-300 font-semibold uppercase">Level 3 Confidential</span>
</div>
<div class="flex items-center gap-1.5 text-xs text-slate-200">
<span class="material-symbols-outlined text-[16px] text-sky-400">description</span>
<span class="font-mono font-medium text-sky-300">Faculty Tenure Dossier.pdf</span>
</div>
<p class="text-xs text-slate-400 italic">Reason: “Promotion &amp; Board Review”</p>
</div>
<div class="flex items-center gap-2 shrink-0">
<button class="px-3.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs transition-colors shadow-sm active:scale-95">
                    Approve
                  </button>
<button class="px-3 py-1.5 rounded-lg bg-[#182538] hover:bg-rose-950/60 hover:text-rose-400 border border-[#253956] text-slate-300 text-xs transition-colors">
                    Reject
                  </button>
<button class="px-3 py-1.5 rounded-lg bg-[#182538] hover:bg-[#20324c] border border-[#253956] text-slate-300 text-xs transition-colors">
                    View Details
                  </button>
</div>
</div>
<!-- Request Item 2 -->
<div class="bg-[#121c2d] border border-[#1e2f47] p-4 rounded-lg flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:border-[#2b4163] transition-colors">
<div class="flex flex-col gap-1.5">
<div class="flex flex-wrap items-center gap-2">
<span class="text-sm font-bold text-white">Dr. Maricel Reyes</span>
<span class="text-xs font-mono text-slate-400">• CAS (Biological Sci)</span>
<span class="text-[10px] font-mono px-2 py-0.5 rounded bg-amber-500/15 border border-amber-500/30 text-amber-300 font-semibold uppercase">Level 3 Confidential</span>
</div>
<div class="flex items-center gap-1.5 text-xs text-slate-200">
<span class="material-symbols-outlined text-[16px] text-emerald-400">table_chart</span>
<span class="font-mono font-medium text-emerald-300">CHED Regional Accreditation.xlsx</span>
</div>
<p class="text-xs text-slate-400 italic">Reason: “Accreditation submission”</p>
</div>
<div class="flex items-center gap-2 shrink-0">
<button class="px-3.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs transition-colors shadow-sm active:scale-95">
                    Approve
                  </button>
<button class="px-3 py-1.5 rounded-lg bg-[#182538] hover:bg-rose-950/60 hover:text-rose-400 border border-[#253956] text-slate-300 text-xs transition-colors">
                    Reject
                  </button>
<button class="px-3 py-1.5 rounded-lg bg-[#182538] hover:bg-[#20324c] border border-[#253956] text-slate-300 text-xs transition-colors">
                    View Details
                  </button>
</div>
</div>
<!-- Request Item 3 -->
<div class="bg-[#121c2d] border border-[#1e2f47] p-4 rounded-lg flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:border-[#2b4163] transition-colors">
<div class="flex flex-col gap-1.5">
<div class="flex flex-wrap items-center gap-2">
<span class="text-sm font-bold text-white">Engr. Kyle Arboleda</span>
<span class="text-xs font-mono text-slate-400">• COE (Engineering)</span>
<span class="text-[10px] font-mono px-2 py-0.5 rounded bg-sky-500/15 border border-sky-500/30 text-sky-300 font-semibold uppercase">Level 2 Internal</span>
</div>
<div class="flex items-center gap-1.5 text-xs text-slate-200">
<span class="material-symbols-outlined text-[16px] text-sky-400">description</span>
<span class="font-mono font-medium text-sky-300">Lab Infrastructure Inventory.pdf</span>
</div>
<p class="text-xs text-slate-400 italic">Reason: “Procurement &amp; annual maintenance plan”</p>
</div>
<div class="flex items-center gap-2 shrink-0">
<button class="px-3.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs transition-colors shadow-sm active:scale-95">
                    Approve
                  </button>
<button class="px-3 py-1.5 rounded-lg bg-[#182538] hover:bg-rose-950/60 hover:text-rose-400 border border-[#253956] text-slate-300 text-xs transition-colors">
                    Reject
                  </button>
<button class="px-3 py-1.5 rounded-lg bg-[#182538] hover:bg-[#20324c] border border-[#253956] text-slate-300 text-xs transition-colors">
                    View Details
                  </button>
</div>
</div>
</div>
<!-- Footer Link -->
<div class="mt-4 pt-3 border-t border-[#1a293f] flex items-center justify-between">
<span class="text-xs text-slate-400">Showing 3 of 12 urgent requests</span>
<a class="text-xs font-semibold text-emerald-400 hover:text-emerald-300 flex items-center gap-1 font-mono transition-colors" href="{{ route('admin.preview.access-requests') }}" data-route="access-requests">
<span>View All Requests</span>
<span class="material-symbols-outlined text-[14px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Section B: Recent User Management & Provisioning -->
<div class="bg-[#0e1726] border border-[#1d2d44] rounded-xl p-5 shadow-sm">
<div class="flex items-center justify-between pb-4 border-b border-[#1a293f]">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-lg bg-sky-950/50 border border-sky-500/30 flex items-center justify-center text-sky-400">
<span class="material-symbols-outlined text-[19px]">manage_accounts</span>
</div>
<div>
<h2 class="text-base font-bold text-white">Recent User Management &amp; Provisioning</h2>
<p class="text-xs text-slate-400">Directory of recently provisioned institutional staff and faculty</p>
</div>
</div>
<a class="text-xs font-mono text-slate-300 hover:text-white flex items-center gap-1 bg-[#131d2e] px-2.5 py-1 rounded border border-[#22334d]" href="{{ route('admin.preview.user-management') }}" data-route="user-management">
<span>Manage Users</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
</a>
</div>
<!-- User Table -->
<div class="overflow-x-auto mt-3">
<table class="w-full text-left border-collapse text-xs">
<thead>
<tr class="border-b border-[#1a293f] text-slate-400 font-mono">
<th class="py-2.5 px-3 font-medium">User / Account</th>
<th class="py-2.5 px-3 font-medium">Department</th>
<th class="py-2.5 px-3 font-medium">Role</th>
<th class="py-2.5 px-3 font-medium">Status</th>
<th class="py-2.5 px-3 font-medium text-right">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-[#18253a]">
<!-- Row 1 -->
<tr class="hover:bg-[#131d2e] transition-colors">
<td class="py-3 px-3">
<div class="flex items-center gap-2.5">
<div class="w-7 h-7 rounded-full bg-emerald-900/60 border border-emerald-600/40 text-emerald-300 flex items-center justify-center font-bold text-[11px]">
                          RC
                        </div>
<div class="flex flex-col">
<span class="font-medium text-white">Prof. Rowena Carpio</span>
<span class="text-[11px] text-slate-400 font-mono">rcarpio@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-3 px-3 text-slate-300 font-mono">CAFENR Agriculture</td>
<td class="py-3 px-3">
<span class="px-2 py-0.5 rounded text-[11px] font-mono bg-sky-950/60 text-sky-300 border border-sky-500/30">Faculty</span>
</td>
<td class="py-3 px-3">
<span class="flex items-center gap-1.5 text-emerald-400 text-[11px] font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>Active
                      </span>
</td>
<td class="py-3 px-3 text-right">
<button class="px-2.5 py-1 rounded bg-[#182538] hover:bg-[#20324c] border border-[#253956] text-slate-200 text-xs font-medium transition-colors">
                        Edit
                      </button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-[#131d2e] transition-colors">
<td class="py-3 px-3">
<div class="flex items-center gap-2.5">
<div class="w-7 h-7 rounded-full bg-sky-900/60 border border-sky-600/40 text-sky-300 flex items-center justify-center font-bold text-[11px]">
                          MT
                        </div>
<div class="flex flex-col">
<span class="font-medium text-white">Mark Joseph Tolentino</span>
<span class="text-[11px] text-slate-400 font-mono">mtolentino@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-3 px-3 text-slate-300 font-mono">University Registrar</td>
<td class="py-3 px-3">
<span class="px-2 py-0.5 rounded text-[11px] font-mono bg-emerald-950/60 text-emerald-300 border border-emerald-500/30">Admin</span>
</td>
<td class="py-3 px-3">
<span class="flex items-center gap-1.5 text-emerald-400 text-[11px] font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>Active
                      </span>
</td>
<td class="py-3 px-3 text-right">
<button class="px-2.5 py-1 rounded bg-[#182538] hover:bg-[#20324c] border border-[#253956] text-slate-200 text-xs font-medium transition-colors">
                        Edit
                      </button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-[#131d2e] transition-colors">
<td class="py-3 px-3">
<div class="flex items-center gap-2.5">
<div class="w-7 h-7 rounded-full bg-amber-900/60 border border-amber-600/40 text-amber-300 flex items-center justify-center font-bold text-[11px]">
                          AL
                        </div>
<div class="flex flex-col">
<span class="font-medium text-white">Annalyn L. Loyola</span>
<span class="text-[11px] text-slate-400 font-mono">aloyola@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-3 px-3 text-slate-300 font-mono">Accounting &amp; Budget</td>
<td class="py-3 px-3">
<span class="px-2 py-0.5 rounded text-[11px] font-mono bg-purple-950/60 text-purple-300 border border-purple-500/30">Staff</span>
</td>
<td class="py-3 px-3">
<span class="flex items-center gap-1.5 text-amber-400 text-[11px] font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>Pending 2FA
                      </span>
</td>
<td class="py-3 px-3 text-right">
<button class="px-2.5 py-1 rounded bg-[#182538] hover:bg-[#20324c] border border-[#253956] text-slate-200 text-xs font-medium transition-colors">
                        Edit
                      </button>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-[#131d2e] transition-colors">
<td class="py-3 px-3">
<div class="flex items-center gap-2.5">
<div class="w-7 h-7 rounded-full bg-slate-800 border border-slate-600 text-slate-300 flex items-center justify-center font-bold text-[11px]">
                          GB
                        </div>
<div class="flex flex-col">
<span class="font-medium text-white">Gerald M. Bautista</span>
<span class="text-[11px] text-slate-400 font-mono">gbautista@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-3 px-3 text-slate-300 font-mono">College of Nursing</td>
<td class="py-3 px-3">
<span class="px-2 py-0.5 rounded text-[11px] font-mono bg-sky-950/60 text-sky-300 border border-sky-500/30">Faculty</span>
</td>
<td class="py-3 px-3">
<span class="flex items-center gap-1.5 text-emerald-400 text-[11px] font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>Active
                      </span>
</td>
<td class="py-3 px-3 text-right">
<button class="px-2.5 py-1 rounded bg-[#182538] hover:bg-[#20324c] border border-[#253956] text-slate-200 text-xs font-medium transition-colors">
                        Edit
                      </button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- Right Column: Quick Actions & Live Audit Stream (4 Cols) -->
<div class="lg:col-span-4 flex flex-col gap-6">
<!-- Section A: Quick Admin Actions -->
<div class="bg-[#0e1726] border border-[#1d2d44] rounded-xl p-5 shadow-sm">
<h3 class="text-sm font-bold text-white flex items-center gap-2 mb-3.5">
<span class="material-symbols-outlined text-emerald-400 text-[18px]">bolt</span>
<span>Quick Admin Actions</span>
</h3>
<div class="flex flex-col gap-2.5"><a href="{{ route('admin.preview.user-management') }}" data-route="provision-user" class="w-full flex items-center justify-between p-3 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs transition-colors shadow-sm text-left"><span class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">person_add</span><span>Provision New User</span></span><span class="material-symbols-outlined text-[16px]">arrow_forward</span></a><a href="{{ route('admin.preview.access-requests') }}" data-route="access-requests" class="w-full flex items-center justify-between p-3 rounded-lg bg-[#141f30] hover:bg-[#1a293f] border border-[#223550] text-slate-200 font-medium text-xs transition-colors text-left"><span class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-amber-400">pending_actions</span><span>Review Pending Requests</span></span><span class="text-xs font-mono font-bold px-2 py-0.5 rounded bg-amber-500/20 text-amber-300">12</span></a><a href="{{ route('admin.preview.audit-logs') }}" data-route="audit-logs" class="w-full flex items-center justify-between p-3 rounded-lg bg-[#141f30] hover:bg-[#1a293f] border border-[#223550] text-slate-200 font-medium text-xs transition-colors text-left"><span class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-sky-400">download</span><span>Export Audit Log (CSV/PDF)</span></span><span class="material-symbols-outlined text-[16px] text-slate-400">file_download</span></a><a href="#" data-route="system-settings" class="w-full flex items-center justify-between p-3 rounded-lg bg-[#141f30] hover:bg-[#1a293f] border border-[#223550] text-slate-200 font-medium text-xs transition-colors text-left"><span class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-slate-400">build</span><span>System Maintenance &amp; Backup</span></span><span class="text-[10px] font-mono text-emerald-400">Ready</span></a></div>
</div>
<!-- Section B: Live Audit Logs Activity -->
<div class="bg-[#0e1726] border border-[#1d2d44] rounded-xl p-5 shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center justify-between pb-3 border-b border-[#1a293f] mb-3">
<h3 class="text-sm font-bold text-white flex items-center gap-2">
<span class="material-symbols-outlined text-emerald-400 text-[18px]">history</span>
<span>Live Audit Logs</span>
</h3>
<span class="flex items-center gap-1.5 text-[10px] font-mono text-emerald-400">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                  STREAMING
                </span>
</div>
<!-- Stream Event Items -->
<div class="flex flex-col gap-3">
<!-- Event 1 -->
<div class="p-2.5 rounded-lg bg-[#121c2d] border border-[#1e2f47] flex items-start gap-2.5 text-xs">
<span class="material-symbols-outlined text-emerald-400 text-[16px] mt-0.5 shrink-0">login</span>
<div class="flex flex-col flex-1 min-w-0">
<span class="text-white font-medium truncate">User login — Prof. Dela Cruz</span>
<span class="text-[11px] text-slate-400 font-mono">CEIT Computer Studies • IP: 10.24.12.8</span>
</div>
<span class="text-[10px] font-mono text-slate-400 shrink-0">2m ago</span>
</div>
<!-- Event 2 -->
<div class="p-2.5 rounded-lg bg-[#121c2d] border border-[#1e2f47] flex items-start gap-2.5 text-xs">
<span class="material-symbols-outlined text-sky-400 text-[16px] mt-0.5 shrink-0">lock_open</span>
<div class="flex flex-col flex-1 min-w-0">
<span class="text-white font-medium truncate">Access granted to BOR_RES_2026.pdf</span>
<span class="text-[11px] text-slate-400 font-mono">Approved by Admin Bautista</span>
</div>
<span class="text-[10px] font-mono text-slate-400 shrink-0">8m ago</span>
</div>
<!-- Event 3 -->
<div class="p-2.5 rounded-lg bg-[#121c2d] border border-[#1e2f47] flex items-start gap-2.5 text-xs">
<span class="material-symbols-outlined text-amber-400 text-[16px] mt-0.5 shrink-0">key</span>
<div class="flex flex-col flex-1 min-w-0">
<span class="text-white font-medium truncate">Password reset requested</span>
<span class="text-[11px] text-slate-400 font-mono">Maria Santos (Registrar Staff)</span>
</div>
<span class="text-[10px] font-mono text-slate-400 shrink-0">19m ago</span>
</div>
<!-- Event 4 -->
<div class="p-2.5 rounded-lg bg-[#121c2d] border border-[#1e2f47] flex items-start gap-2.5 text-xs">
<span class="material-symbols-outlined text-rose-400 text-[16px] mt-0.5 shrink-0">gpp_bad</span>
<div class="flex flex-col flex-1 min-w-0">
<span class="text-rose-300 font-medium truncate">Failed 2FA attempt locked out</span>
<span class="text-[11px] text-slate-400 font-mono">10-minute temporary cooldown</span>
</div>
<span class="text-[10px] font-mono text-slate-400 shrink-0">34m ago</span>
</div>
</div>
</div>
<!-- Bottom Link -->
<div class="mt-4 pt-3 border-t border-[#1a293f] flex items-center justify-between">
<span class="text-[11px] text-slate-400 font-mono">Immutable audit storage</span>
<a class="text-xs font-semibold text-emerald-400 hover:text-emerald-300 font-mono flex items-center gap-1 transition-colors" href="{{ route('admin.preview.audit-logs') }}" data-route="audit-logs">
<span>View Full Log</span>
<span class="material-symbols-outlined text-[13px]">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</div>
</main>
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