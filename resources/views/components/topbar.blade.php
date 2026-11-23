@php
    $role = $currentRole ?? 'student';
    $title = $pageTitle ?? 'Command Overview';
    $crumbs = $breadcrumbs ?? [];
@endphp

<header class="fixed left-64 right-0 top-0 z-40 flex h-16 items-center justify-between border-b border-slate-200 bg-white/90 px-6 backdrop-blur-md transition-colors duration-200 max-sm:left-0 max-sm:px-3 dark:border-white/10 dark:bg-[#090f19]/90" role="banner">
    <!-- Left: Breadcrumb / Page Title -->
    <div class="flex items-center gap-3">
        @if ($role === 'helpdesk')
        <button
            id="mobile-menu-button"
            type="button"
            aria-controls="app-sidebar"
            aria-expanded="false"
            onclick="const sidebar=document.getElementById('app-sidebar'); if(sidebar){sidebar.classList.toggle('max-sm:hidden'); this.setAttribute('aria-expanded', sidebar.classList.contains('max-sm:hidden') ? 'false' : 'true');}"
            class="hidden min-h-10 min-w-10 items-center justify-center rounded-lg border border-slate-200 text-slate-600 max-sm:flex dark:border-white/10 dark:text-slate-300"
        >
            <span class="material-symbols-outlined text-[20px]" aria-hidden="true">menu</span>
            <span class="sr-only">Toggle Helpdesk navigation</span>
        </button>
        @endif
        <div class="flex items-center gap-2 text-xs font-mono text-slate-500 dark:text-slate-400">
            <span class="material-symbols-outlined text-[16px] text-emerald-500">lock</span>
            <span class="hover:text-slate-900 dark:hover:text-white transition-colors">CvSU Institutional Workspace</span>
            <span class="text-slate-400 dark:text-slate-600">/</span>
            <span class="text-slate-900 dark:text-white font-semibold">{{ $title }}</span>
        </div>
    </div>

    <!-- Center: Search Input (Taste Skill: Quiet input, Web Design Guidelines: accessible label) -->
    <div class="hidden lg:flex items-center w-80 relative">
        <label for="topbar-search" class="sr-only">Search documents, clearances, and records</label>
        <span class="material-symbols-outlined absolute left-3 text-slate-400 text-[18px] pointer-events-none">search</span>
        <input 
            id="topbar-search" 
            type="search" 
            placeholder="Search documents, records, slips..." 
            class="w-full bg-slate-100 dark:bg-white/5 border border-slate-300 dark:border-white/10 rounded-lg pl-9 pr-8 py-1.5 text-xs text-slate-800 dark:text-slate-200 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/50 transition-colors"
        >
        <kbd class="absolute right-2 px-1.5 py-0.5 text-[10px] font-mono text-slate-400 bg-white dark:bg-white/10 rounded border border-slate-200 dark:border-white/10">⌘K</kbd>
    </div>

    <!-- Right Actions: Security Status, Light/Dark Toggle, Notifications -->
    <div class="flex items-center gap-3">
        <!-- Hardware Security Indicator -->
        <div class="hidden sm:flex items-center gap-2 px-2.5 py-1 rounded-full bg-emerald-50 dark:bg-emerald-950/40 border border-emerald-200 dark:border-emerald-500/20 text-emerald-700 dark:text-emerald-400 text-[11px] font-mono">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
            @if ($role === 'helpdesk')
            <span>Support Desk: <strong class="font-semibold">Open</strong></span>
            @else
            <span>Zero-Trust Node: <strong class="font-semibold">Online</strong></span>
            @endif
        </div>

        <!-- Light / Dark Mode Toggle Button (Taste-Skill compliant) -->
        <button 
            type="button" 
            onclick="toggleTheme()" 
            aria-label="Toggle between light and dark theme" 
            class="p-2 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors border border-slate-200 dark:border-white/10"
            title="Switch theme"
        >
            <span class="material-symbols-outlined text-[19px] dark:hidden">dark_mode</span>
            <span class="material-symbols-outlined text-[19px] hidden dark:inline text-amber-300">light_mode</span>
        </button>

        <!-- Notification Bell -->
        @if ($role !== 'helpdesk')
            <button
                type="button"
                aria-label="Notifications"
                class="relative p-2 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors border border-slate-200 dark:border-white/10"
            >
                <span class="material-symbols-outlined text-[19px]">notifications</span>
                <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500"></span>
            </button>
        @endif

        <!-- Role Badge -->
        <span class="px-2 py-1 rounded text-[10px] font-mono font-bold uppercase tracking-wider bg-slate-100 dark:bg-white/5 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-white/10">
            {{ strtoupper($role) }}
        </span>
    </div>
</header>
