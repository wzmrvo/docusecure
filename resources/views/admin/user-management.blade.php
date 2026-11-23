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
<div class="px-8 py-8 flex flex-col gap-8 max-w-[1440px] w-full mx-auto">
<!-- Page Header -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
<div class="flex flex-col gap-2 min-w-0">
<div class="flex items-center gap-2 font-label-sm text-label-sm text-primary uppercase"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
<a href="{{ route('admin.preview.dashboard') }}" class="hover:underline text-on-surface-variant transition-colors">ADMIN CONSOLE</a>
<span class="text-slate-500">/</span>
<a href="{{ route('admin.preview.dashboard') }}" class="hover:underline text-on-surface-variant transition-colors">DASHBOARD</a>
<span class="text-slate-500">/</span>
<span class="text-primary font-semibold">USER MANAGEMENT</span></div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
          User Management &amp; Provisioning
        </h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
          Manage Cavite State University faculty, staff, student, and administrator accounts and 2FA clearances.
        </p>
</div>
<div class="flex items-center gap-3 shrink-0">
<button class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:bg-primary-fixed-dim transition-colors cursor-pointer" id="openProvisionModalBtn" type="button">
<span class="material-symbols-outlined text-[18px]">person_add</span>
<span>+ Provision New User</span>
</button>
</div>
</div>
<!-- Role Summary Filter Cards (4-column grid) -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">
<!-- Card 1: All Users -->
<button class="role-filter-card text-left w-full p-5 rounded-xl bg-surface-container-high shadow-md flex flex-col justify-between gap-4 transition-all hover:bg-surface-bright cursor-pointer" data-role-filter="all" type="button">
<div class="flex items-start justify-between w-full">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-primary uppercase">All Users</span>
<span class="font-headline-lg text-headline-lg text-on-surface">3,420</span>
</div>
<div class="w-10 h-10 rounded-lg bg-primary/15 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">groups</span>
</div>
</div>
<div class="flex items-center justify-between w-full pt-2">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-primary/15 text-primary font-label-sm text-label-sm uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
            Active
          </span>
<svg class="w-16 h-5 text-primary" fill="none" viewBox="0 0 64 20">
<path d="M2 16 L14 12 L26 14 L38 7 L50 9 L62 3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</div>
</button>
<!-- Card 2: Faculty -->
<button class="role-filter-card text-left w-full p-5 rounded-xl bg-surface-container shadow-sm flex flex-col justify-between gap-4 transition-all hover:bg-surface-container-high cursor-pointer" data-role-filter="Faculty" type="button">
<div class="flex items-start justify-between w-full">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Faculty</span>
<span class="font-headline-lg text-headline-lg text-on-surface">1,800</span>
</div>
<div class="w-10 h-10 rounded-lg bg-tertiary/15 text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">school</span>
</div>
</div>
<div class="flex items-center justify-between w-full pt-2">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-tertiary/15 text-tertiary font-label-sm text-label-sm uppercase">
            Tier 2–3
          </span>
<div class="w-20 h-1.5 rounded-full bg-surface-container-highest overflow-hidden">
<div class="h-full bg-tertiary w-[53%] rounded-full"></div>
</div>
</div>
</button>
<!-- Card 3: Staff & Registrars -->
<button class="role-filter-card text-left w-full p-5 rounded-xl bg-surface-container shadow-sm flex flex-col justify-between gap-4 transition-all hover:bg-surface-container-high cursor-pointer" data-role-filter="StaffAdmin" type="button">
<div class="flex items-start justify-between w-full">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Staff &amp; Registrars</span>
<span class="font-headline-lg text-headline-lg text-on-surface">680</span>
</div>
<div class="w-10 h-10 rounded-lg bg-secondary/15 text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">admin_panel_settings</span>
</div>
</div>
<div class="flex items-center justify-between w-full pt-2">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-secondary/15 text-secondary font-label-sm text-label-sm uppercase">
            Tier 2–4
          </span>
<div class="w-20 h-1.5 rounded-full bg-surface-container-highest overflow-hidden">
<div class="h-full bg-secondary w-[20%] rounded-full"></div>
</div>
</div>
</button>
<!-- Card 4: Students -->
<button class="role-filter-card text-left w-full p-5 rounded-xl bg-surface-container shadow-sm flex flex-col justify-between gap-4 transition-all hover:bg-surface-container-high cursor-pointer" data-role-filter="Student" type="button">
<div class="flex items-start justify-between w-full">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Students</span>
<span class="font-headline-lg text-headline-lg text-on-surface">940</span>
</div>
<div class="w-10 h-10 rounded-lg bg-surface-container-highest text-on-surface-variant flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">badge</span>
</div>
</div>
<div class="flex items-center justify-between w-full pt-2">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm uppercase">
            Tier 1
          </span>
<div class="w-20 h-1.5 rounded-full bg-surface-container-highest overflow-hidden">
<div class="h-full bg-on-surface-variant w-[27%] rounded-full"></div>
</div>
</div>
</button>
</div>
<!-- Main Users Directory Panel -->
<div class="flex flex-col rounded-xl bg-surface-container shadow-lg overflow-hidden">
<!-- Toolbar -->
<div class="p-5 bg-surface-container-low flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
<div class="relative flex-1 max-w-xl">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
<input class="w-full bg-surface-container-highest text-on-surface placeholder:text-on-surface-variant pl-10 pr-36 py-2.5 rounded-lg font-body-md text-body-md focus:outline-none focus:bg-surface-bright transition-colors" id="userSearchInput" placeholder="Search by name, @cvsu.edu.ph email, or employee ID..." type="text">
<div class="absolute right-2.5 top-1/2 -translate-y-1/2 hidden sm:flex items-center gap-1.5 px-2 py-0.5 rounded bg-surface-container text-primary font-label-sm text-label-sm pointer-events-none">
<span class="material-symbols-outlined text-[13px]">lock</span>
<span>256-BIT ENCRYPTED</span>
</div>
</div>
<div class="flex flex-wrap items-center gap-3">
<div class="relative">
<select class="appearance-none bg-surface-container-highest text-on-surface pl-3.5 pr-9 py-2.5 rounded-lg font-label-md text-label-md focus:outline-none cursor-pointer" id="roleFilterSelect">
<option value="all">All Roles</option>
<option value="Superadmin">Superadmin</option>
<option value="Admin">Admin</option>
<option value="Faculty">Faculty</option>
<option value="Staff">Staff</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px] pointer-events-none">expand_more</span>
</div>
<div class="relative">
<select class="appearance-none bg-surface-container-highest text-on-surface pl-3.5 pr-9 py-2.5 rounded-lg font-label-md text-label-md focus:outline-none cursor-pointer" id="statusFilterSelect">
<option value="all">All Statuses</option>
<option value="Active">Active</option>
<option value="Pending 2FA">Pending 2FA</option>
<option value="Locked">Locked</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px] pointer-events-none">expand_more</span>
</div>
</div>
</div>
<!-- Users Table -->
<div class="w-full overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm uppercase">
<th class="py-3.5 px-6">User / Account</th>
<th class="py-3.5 px-5">Department / Unit</th>
<th class="py-3.5 px-5">Role</th>
<th class="py-3.5 px-5">Clearance Tier</th>
<th class="py-3.5 px-5">2FA / Status</th>
<th class="py-3.5 px-6 text-right">Actions</th>
</tr>
</thead>
<tbody class="font-body-md text-body-md" id="usersTableBody">
<!-- Row 1 -->
<tr class="user-row bg-surface-container hover:bg-surface-container-high transition-colors" data-role="Superadmin" data-search="Engr. R. Bautista rbautista@cvsu.edu.ph MIS Operations" data-status="Active">
<td class="py-4 px-6">
<div class="flex items-center gap-3 min-w-0">
<div class="w-9 h-9 rounded-lg bg-primary/20 text-primary flex items-center justify-center font-label-md text-label-md shrink-0">RB</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface truncate">Engr. R. Bautista</span>
<span class="font-code-snippet text-code-snippet text-on-surface-variant truncate">rbautista@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-4 px-5 text-on-surface">MIS Operations</td>
<td class="py-4 px-5">
<span class="inline-flex items-center px-2.5 py-1 rounded bg-primary/15 text-primary font-label-sm text-label-sm uppercase">Superadmin</span>
</td>
<td class="py-4 px-5">
<span class="font-label-md text-label-md text-on-surface">Tier 4 Restricted</span>
</td>
<td class="py-4 px-5">
<span class="inline-flex items-center gap-2 font-label-md text-label-md text-primary">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                  Active • FIDO2
                </span>
</td>
<td class="py-4 px-6 text-right">
<div class="inline-flex items-center gap-2">
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Edit</button>
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface-variant hover:text-on-surface hover:bg-surface-bright font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Reset 2FA</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="user-row bg-surface-container-low hover:bg-surface-container-high transition-colors" data-role="Faculty" data-search="Prof. Rowena Carpio rcarpio@cvsu.edu.ph CAFENR Agriculture" data-status="Active">
<td class="py-4 px-6">
<div class="flex items-center gap-3 min-w-0">
<div class="w-9 h-9 rounded-lg bg-tertiary/20 text-tertiary flex items-center justify-center font-label-md text-label-md shrink-0">RC</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface truncate">Prof. Rowena Carpio</span>
<span class="font-code-snippet text-code-snippet text-on-surface-variant truncate">rcarpio@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-4 px-5 text-on-surface">CAFENR Agriculture</td>
<td class="py-4 px-5">
<span class="inline-flex items-center px-2.5 py-1 rounded bg-tertiary/15 text-tertiary font-label-sm text-label-sm uppercase">Faculty</span>
</td>
<td class="py-4 px-5">
<span class="font-label-md text-label-md text-on-surface">Tier 3 Confidential</span>
</td>
<td class="py-4 px-5">
<span class="inline-flex items-center gap-2 font-label-md text-label-md text-primary">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                  Active • TOTP
                </span>
</td>
<td class="py-4 px-6 text-right">
<div class="inline-flex items-center gap-2">
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Edit</button>
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-error hover:bg-error-container hover:text-on-error-container font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Suspend</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="user-row bg-surface-container hover:bg-surface-container-high transition-colors" data-role="Admin" data-search="Mark Joseph Tolentino mtolentino@cvsu.edu.ph University Registrar" data-status="Active">
<td class="py-4 px-6">
<div class="flex items-center gap-3 min-w-0">
<div class="w-9 h-9 rounded-lg bg-tertiary-container/40 text-tertiary-fixed flex items-center justify-center font-label-md text-label-md shrink-0">MT</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface truncate">Mark Joseph Tolentino</span>
<span class="font-code-snippet text-code-snippet text-on-surface-variant truncate">mtolentino@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-4 px-5 text-on-surface">University Registrar</td>
<td class="py-4 px-5">
<span class="inline-flex items-center px-2.5 py-1 rounded bg-tertiary-container/40 text-tertiary-fixed font-label-sm text-label-sm uppercase">Admin</span>
</td>
<td class="py-4 px-5">
<span class="font-label-md text-label-md text-on-surface">Tier 4 Restricted</span>
</td>
<td class="py-4 px-5">
<span class="inline-flex items-center gap-2 font-label-md text-label-md text-primary">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                  Active • FIDO2
                </span>
</td>
<td class="py-4 px-6 text-right">
<div class="inline-flex items-center gap-2">
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Edit</button>
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface-variant hover:text-on-surface hover:bg-surface-bright font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Reset 2FA</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="user-row bg-surface-container-low hover:bg-surface-container-high transition-colors" data-role="Staff" data-search="Annalyn L. Loyola aloyola@cvsu.edu.ph Accounting &amp; Budget" data-status="Pending 2FA">
<td class="py-4 px-6">
<div class="flex items-center gap-3 min-w-0">
<div class="w-9 h-9 rounded-lg bg-secondary/20 text-secondary flex items-center justify-center font-label-md text-label-md shrink-0">AL</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface truncate">Annalyn L. Loyola</span>
<span class="font-code-snippet text-code-snippet text-on-surface-variant truncate">aloyola@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-4 px-5 text-on-surface">Accounting &amp; Budget</td>
<td class="py-4 px-5">
<span class="inline-flex items-center px-2.5 py-1 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm uppercase">Staff</span>
</td>
<td class="py-4 px-5">
<span class="font-label-md text-label-md text-on-surface">Tier 2 Internal</span>
</td>
<td class="py-4 px-5">
<span class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
                  Pending 2FA
                </span>
</td>
<td class="py-4 px-6 text-right">
<div class="inline-flex items-center gap-2">
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Edit</button>
<button class="px-3 py-1.5 rounded bg-secondary/20 text-secondary hover:bg-secondary/30 font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Resend Invite</button>
</div>
</td>
</tr>
<!-- Row 5 -->
<tr class="user-row bg-surface-container hover:bg-surface-container-high transition-colors" data-role="Faculty" data-search="Gerald M. Bautista gbautista@cvsu.edu.ph College of Nursing" data-status="Active">
<td class="py-4 px-6">
<div class="flex items-center gap-3 min-w-0">
<div class="w-9 h-9 rounded-lg bg-tertiary/20 text-tertiary flex items-center justify-center font-label-md text-label-md shrink-0">GB</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface truncate">Gerald M. Bautista</span>
<span class="font-code-snippet text-code-snippet text-on-surface-variant truncate">gbautista@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-4 px-5 text-on-surface">College of Nursing</td>
<td class="py-4 px-5">
<span class="inline-flex items-center px-2.5 py-1 rounded bg-tertiary/15 text-tertiary font-label-sm text-label-sm uppercase">Faculty</span>
</td>
<td class="py-4 px-5">
<span class="font-label-md text-label-md text-on-surface">Tier 2 Internal</span>
</td>
<td class="py-4 px-5">
<span class="inline-flex items-center gap-2 font-label-md text-label-md text-primary">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                  Active • TOTP
                </span>
</td>
<td class="py-4 px-6 text-right">
<div class="inline-flex items-center gap-2">
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Edit</button>
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-error hover:bg-error-container hover:text-on-error-container font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Suspend</button>
</div>
</td>
</tr>
<!-- Row 6 -->
<tr class="user-row bg-surface-container-low hover:bg-surface-container-high transition-colors" data-role="Faculty" data-search="Juan Dela Cruz j.delacruz@cvsu.edu.ph CEIT Computer Studies" data-status="Locked">
<td class="py-4 px-6">
<div class="flex items-center gap-3 min-w-0">
<div class="w-9 h-9 rounded-lg bg-error-container/50 text-error flex items-center justify-center font-label-md text-label-md shrink-0">JD</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface truncate">Juan Dela Cruz</span>
<span class="font-code-snippet text-code-snippet text-on-surface-variant truncate">j.delacruz@cvsu.edu.ph</span>
</div>
</div>
</td>
<td class="py-4 px-5 text-on-surface">CEIT Computer Studies</td>
<td class="py-4 px-5">
<span class="inline-flex items-center px-2.5 py-1 rounded bg-tertiary/15 text-tertiary font-label-sm text-label-sm uppercase">Faculty</span>
</td>
<td class="py-4 px-5">
<span class="font-label-md text-label-md text-on-surface">Tier 3 Confidential</span>
</td>
<td class="py-4 px-5">
<span class="inline-flex items-center gap-2 font-label-md text-label-md text-error">
<span class="w-2 h-2 rounded-full bg-error"></span>
                  Locked
                </span>
</td>
<td class="py-4 px-6 text-right"><div class="inline-flex items-center gap-2">
<button class="px-3 py-1.5 rounded bg-primary/20 text-primary hover:bg-primary/30 font-label-sm text-label-sm transition-colors cursor-pointer" onclick="alert('Security Clearance Override: Account unlocked. Audit event CVSU-SEC-402 logged.'); this.closest('tr').setAttribute('data-status', 'Active'); this.closest('tr').querySelector('td:nth-child(5)').innerHTML='&lt;span class=\'inline-flex items-center gap-2 font-label-md text-label-md text-primary\'&gt;&lt;span class=\'w-2 h-2 rounded-full bg-primary\'&gt;&lt;/span&gt;Active • TOTP&lt;/span&gt;'; this.remove();" type="button">Unlock</button>
<a href="{{ route('admin.preview.provision-stage-1') }}" class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface hover:bg-surface-bright font-label-sm text-label-sm transition-colors cursor-pointer inline-flex items-center">Edit &amp; Auth</a>
<a href="{{ route('admin.preview.audit-logs') }}" class="p-1.5 rounded bg-surface-container-highest text-on-surface-variant hover:text-on-surface hover:bg-surface-bright font-label-sm text-label-sm transition-colors cursor-pointer inline-flex items-center" title="View Security Audit Trail"><span class="material-symbols-outlined text-[16px]">history</span></a>
</div></td>
</tr>
</tbody>
</table>
</div>
<!-- Empty State (Hidden by default) -->
<div class="hidden py-12 px-6 text-center flex-col items-center gap-2 bg-surface-container" id="emptyFilterState">
<span class="material-symbols-outlined text-[32px] text-on-surface-variant">person_search</span>
<p class="font-headline-sm text-headline-sm text-on-surface">No matching institutional accounts</p>
<p class="font-body-md text-body-md text-on-surface-variant">Adjust your search query, role, or 2FA status filter.</p>
</div>
<!-- Pagination Footer -->
<div class="px-6 py-4 bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-4">
<span class="font-label-md text-label-md text-on-surface-variant" id="paginationSummary">
          Showing 6 of 3,420 institutional accounts
        </span>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Previous</button>
<button class="px-3 py-1.5 rounded bg-primary text-on-primary font-label-sm text-label-sm cursor-pointer" type="button">1</button>
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-colors cursor-pointer" type="button">2</button>
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-colors cursor-pointer" type="button">3</button>
<span class="px-1 text-on-surface-variant font-label-sm text-label-sm">…</span>
<button class="px-3 py-1.5 rounded bg-surface-container-highest text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-colors cursor-pointer" type="button">Next</button>
</div>
</div>
</div>
</div>
<!-- Provision New User Modal -->
<div class="fixed inset-0 z-50 hidden items-center justify-center bg-surface-container-lowest/80 backdrop-blur-sm p-4" id="provisionModal">
<div class="w-full max-w-lg rounded-xl bg-surface-container-high shadow-xl p-6 flex flex-col gap-5">
<div class="flex items-center justify-between">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-primary uppercase">ZERO-TRUST PROVISIONING</span>
<h2 class="font-headline-md text-headline-md text-on-surface">Provision New Institutional User</h2>
</div>
<button class="p-1.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface cursor-pointer" id="closeProvisionModalBtn" type="button">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<form class="flex flex-col gap-4" id="provisionForm">
<div class="flex flex-col gap-1.5">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Full Name</label>
<input class="w-full bg-surface-container-lowest text-on-surface placeholder:text-on-surface-variant px-3.5 py-2.5 rounded-lg font-body-md text-body-md focus:outline-none" placeholder="e.g. Dr. Maria Clara Santos" required="" type="text">
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Institutional Email</label>
<input class="w-full bg-surface-container-lowest text-on-surface placeholder:text-on-surface-variant px-3.5 py-2.5 rounded-lg font-code-snippet text-code-snippet focus:outline-none" placeholder="username@cvsu.edu.ph" required="" type="email">
</div>
<div class="grid grid-cols-2 gap-4">
<div class="flex flex-col gap-1.5">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Role</label>
<select class="w-full bg-surface-container-lowest text-on-surface px-3.5 py-2.5 rounded-lg font-body-md text-body-md focus:outline-none">
<option>Faculty</option>
<option>Staff</option>
<option>Admin</option>
<option>Superadmin</option>
</select>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Clearance Tier</label>
<select class="w-full bg-surface-container-lowest text-on-surface px-3.5 py-2.5 rounded-lg font-body-md text-body-md focus:outline-none">
<option>Tier 2 Internal</option>
<option>Tier 3 Confidential</option>
<option>Tier 4 Restricted</option>
</select>
</div>
</div>
<div class="flex items-center justify-end gap-3 pt-2">
<button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface font-label-md text-label-md cursor-pointer" id="cancelProvisionBtn" type="button">Cancel</button>
<button class="px-5 py-2 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-fixed-dim transition-colors cursor-pointer" type="submit">Issue 2FA Invite</button>
</div>
</form>
</div>
</div>
</div>
<script>
  (function () {
    const searchInput = document.getElementById('userSearchInput');
    const roleSelect = document.getElementById('roleFilterSelect');
    const statusSelect = document.getElementById('statusFilterSelect');
    const rows = Array.from(document.querySelectorAll('.user-row'));
    const emptyState = document.getElementById('emptyFilterState');
    const summaryEl = document.getElementById('paginationSummary');
    const roleCards = Array.from(document.querySelectorAll('.role-filter-card'));

    function applyFilters() {
      const query = (searchInput.value || '').toLowerCase().trim();
      const roleVal = roleSelect.value;
      const statusVal = statusSelect.value;
      let visibleCount = 0;

      rows.forEach((row) => {
        const rowRole = row.getAttribute('data-role');
        const rowStatus = row.getAttribute('data-status');
        const rowSearch = (row.getAttribute('data-search') || '').toLowerCase();

        const matchesSearch = !query || rowSearch.includes(query);
        const matchesRole = roleVal === 'all' || rowRole === roleVal || (roleVal === 'StaffAdmin' && (rowRole === 'Staff' || rowRole === 'Admin'));
        const matchesStatus = statusVal === 'all' || rowStatus === statusVal;

        if (matchesSearch && matchesRole && matchesStatus) {
          row.classList.remove('hidden');
          visibleCount++;
        } else {
          row.classList.add('hidden');
        }
      });

      if (visibleCount === 0) {
        emptyState.classList.remove('hidden');
        emptyState.classList.add('flex');
      } else {
        emptyState.classList.add('hidden');
        emptyState.classList.remove('flex');
      }

      summaryEl.textContent = `Showing ${visibleCount} of 3,420 institutional accounts`;
    }

    searchInput.addEventListener('input', applyFilters);
    roleSelect.addEventListener('change', applyFilters);
    statusSelect.addEventListener('change', applyFilters);

    roleCards.forEach((card) => {
      card.addEventListener('click', () => {
        const filter = card.getAttribute('data-role-filter');
        roleCards.forEach((c) => {
          c.classList.remove('bg-surface-container-high', 'shadow-md');
          c.classList.add('bg-surface-container', 'shadow-sm');
        });
        card.classList.remove('bg-surface-container', 'shadow-sm');
        card.classList.add('bg-surface-container-high', 'shadow-md');

        if (filter === 'all' || filter === 'Faculty') {
          roleSelect.value = filter;
        } else if (filter === 'StaffAdmin') {
          roleSelect.value = 'Staff';
        } else {
          roleSelect.value = 'all';
        }
        applyFilters();
      });
    });

    const modal = document.getElementById('provisionModal');
    const openBtn = document.getElementById('openProvisionModalBtn');
    const closeBtn = document.getElementById('closeProvisionModalBtn');
    const cancelBtn = document.getElementById('cancelProvisionBtn');
    const form = document.getElementById('provisionForm');

    function closeModal() {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }

    openBtn.addEventListener('click', () => {
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    });

    closeBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      closeModal();
    });
  })();
</script></main>
</div>




</body></html>