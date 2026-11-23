@php
    $role = $currentRole ?? 'student';

    // Tier 60/30/10 configuration per role
    $themes = [
        'admin' => [
            'tier_label' => 'TIER 4 • SUPERADMIN',
            'badge_bg' => 'bg-amber-400/15 border-amber-400/40 text-amber-300',
            'active_link' => 'bg-amber-500/15 text-amber-300 border-l-4 border-amber-400',
            'sidebar_border' => 'border-r border-amber-500/20',
            'user_title' => 'Engr. R. Bautista',
            'user_subtitle' => 'MIS Superadministrator',
            'node_id' => 'CVSU-MIS-ROOT-01',
            'logout_route' => route('admin.preview.logout-confirmation'),
        ],
        'faculty' => [
            'tier_label' => 'TIER 3 • SUB-CUSTODIAN',
            'badge_bg' => 'bg-emerald-500/15 border-emerald-400/40 text-emerald-300',
            'active_link' => 'bg-emerald-500/15 text-emerald-300 border-l-4 border-emerald-400',
            'sidebar_border' => 'border-r border-emerald-500/20',
            'user_title' => 'Prof. Juan Dela Cruz',
            'user_subtitle' => 'CEIT Thesis Committee Chair',
            'node_id' => 'CEIT-FAC-88219',
            'logout_route' => route('faculty.preview.logout-confirmation'),
        ],
        'student' => [
            'tier_label' => 'TIER 1-2 • ENROLLED SCHOLAR',
            'badge_bg' => 'bg-sky-500/15 border-sky-400/40 text-sky-300',
            'active_link' => 'bg-sky-500/15 text-sky-300 border-l-4 border-sky-400',
            'sidebar_border' => 'border-r border-sky-500/20',
            'user_title' => 'Maria Santos',
            'user_subtitle' => 'BS Computer Science • 4th Year',
            'node_id' => '2023-10492-CS',
            'logout_route' => route('student.preview.logout-confirmation'),
        ],
        'viewer' => [
            'tier_label' => 'TIER 1 • GUEST ACCESS',
            'badge_bg' => 'bg-slate-500/20 border-slate-400/30 text-slate-300',
            'active_link' => 'bg-slate-500/15 text-slate-200 border-l-4 border-slate-400',
            'sidebar_border' => 'border-r border-slate-500/20',
            'user_title' => 'Guest Observer',
            'user_subtitle' => 'Public Read-Only Session',
            'node_id' => 'GUEST-OBSERVER-001',
            'logout_route' => route('login'),
        ],
        'helpdesk' => [
            'tier_label' => 'IT SUPPORT OPERATIONS',
            'badge_bg' => 'bg-violet-500/15 border-violet-400/40 text-violet-300',
            'active_link' => 'bg-violet-500/15 text-violet-300 border-l-4 border-violet-400',
            'sidebar_border' => 'border-r border-violet-500/20',
            'user_title' => 'Mark Villareal',
            'user_subtitle' => 'CvSU MIS Helpdesk Officer',
            'node_id' => 'HD-MIS-TOKEN-44',
            'logout_route' => route('login'),
        ],
    ];

    $cfg = $themes[$role] ?? $themes['student'];
@endphp

<aside class="fixed left-0 top-0 h-screen w-64 bg-white dark:bg-[#0c1320] z-50 flex flex-col justify-between {{ $cfg['sidebar_border'] }} shadow-lg transition-colors duration-200" aria-label="Main Navigation">
    <div class="flex flex-col">
        <!-- University & DocuSecure Identity -->
        <div class="h-16 px-4 flex items-center justify-between border-b border-slate-200 dark:border-white/10 bg-slate-50/70 dark:bg-[#080d16]">
            <a href="{{ url('/') }}" class="flex items-center gap-3 hover:opacity-90 transition-opacity">
                <div class="w-8 h-8 rounded-lg overflow-hidden border border-slate-200 dark:border-white/20 bg-white flex items-center justify-center p-0.5">
                    <img src="{{ asset('images/cvsu-logo.png') }}" alt="CvSU Logo" class="w-full h-full object-contain">
                </div>
                <div class="flex flex-col min-w-0">
                    <div class="flex items-center gap-1.5">
                        <span class="text-base font-bold tracking-tight text-slate-900 dark:text-white">DocuSecure</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    </div>
                    <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400 font-semibold truncate">Cavite State University</span>
                </div>
            </a>
        </div>

        <!-- Clearance Enclave Badge -->
        <div class="px-4 py-2.5 bg-slate-100/50 dark:bg-[#111927] border-b border-slate-200 dark:border-white/5 flex items-center justify-between">
            <span class="text-[10px] font-mono tracking-wider text-slate-500 dark:text-slate-400 uppercase font-semibold">Clearance Enclave</span>
            <span class="px-2 py-0.5 rounded text-[9px] font-mono font-bold uppercase border {{ $cfg['badge_bg'] }}">
                {{ $cfg['tier_label'] }}
            </span>
        </div>

        <!-- Role-Specific Navigation Menu -->
        <nav class="flex flex-col gap-1 p-3 text-sm font-medium overflow-y-auto max-h-[calc(100vh-230px)]">

            @if($role === 'admin')
                <div class="px-3 pt-2 pb-1 text-[10px] font-mono uppercase tracking-wider text-slate-400">Vault Administration</div>
                <a href="{{ route('admin.preview.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('admin.preview.dashboard') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">dashboard</span>
                    <span>Admin Console</span>
                </a>
                <a href="{{ route('admin.preview.user-management') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('admin.preview.user-management') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">group</span>
                    <span>User Management</span>
                </a>
                <a href="{{ route('admin.preview.access-requests') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('admin.preview.access-requests') ? $cfg['active_link'] : '' }}">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[19px]">fact_check</span>
                        <span>Access Requests</span>
                    </div>
                    <span class="text-[10px] font-mono font-bold px-1.5 py-0.2 rounded-full bg-rose-500/20 text-rose-400 border border-rose-500/30">14</span>
                </a>
                <a href="{{ route('admin.preview.access-levels') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('admin.preview.access-levels') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">shield</span>
                    <span>Document Access Levels</span>
                </a>
                <a href="{{ route('admin.preview.deposit-file') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('admin.preview.deposit-file') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">note_add</span>
                    <span>Deposit & File Creation</span>
                </a>
                <a href="{{ route('admin.preview.audit-logs') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('admin.preview.audit-logs') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">receipt_long</span>
                    <span>Audit Logs</span>
                </a>
                <a href="{{ route('admin.preview.system-settings') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('admin.preview.system-settings') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">settings</span>
                    <span>System Settings</span>
                </a>

            @elseif($role === 'faculty')
                <div class="px-3 pt-2 pb-1 text-[10px] font-mono uppercase tracking-wider text-slate-400">Department Authority</div>
                <a href="{{ route('faculty.preview.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('faculty.preview.dashboard') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">space_dashboard</span>
                    <span>Clearance Command</span>
                </a>
                <a href="{{ route('faculty.preview.document-library') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('faculty.preview.document-library') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">folder_special</span>
                    <span>Document Library</span>
                </a>
                <a href="{{ route('faculty.preview.clearance-requests') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('faculty.preview.clearance-requests') ? $cfg['active_link'] : '' }}">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[19px]">verified_user</span>
                        <span>Clearance Requests</span>
                    </div>
                    <span class="text-[10px] font-mono font-bold px-1.5 py-0.2 rounded-full bg-amber-400/20 text-amber-300 border border-amber-400/30">2 pending</span>
                </a>
                <a href="{{ route('faculty.preview.department-records') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('faculty.preview.department-records') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">account_balance</span>
                    <span>Department Records</span>
                </a>
                <a href="{{ route('faculty.preview.tier-4-access-request') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('faculty.preview.tier-4-access-request') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">vpn_key</span>
                    <span>Tier 4 Access Request</span>
                </a>

            @elseif($role === 'student')
                <div class="px-3 pt-2 pb-1 text-[10px] font-mono uppercase tracking-wider text-slate-400">Academic Workspace</div>
                <a href="{{ route('student.preview.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('student.preview.dashboard') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">dashboard</span>
                    <span>Student Portal</span>
                </a>
                <a href="{{ route('student.preview.document-library') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('student.preview.document-library') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">folder</span>
                    <span>Document Library</span>
                </a>
                <a href="{{ route('student.preview.categories') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('student.preview.categories') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">category</span>
                    <span>Categories</span>
                </a>
                <a href="{{ route('student.preview.library-research') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('student.preview.library-research') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">menu_book</span>
                    <span>Library Research</span>
                </a>
                <a href="{{ route('student.preview.account-settings') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('student.preview.account-settings') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">manage_accounts</span>
                    <span>Account Settings</span>
                </a>

            @elseif($role === 'viewer')
                <div class="px-3 pt-2 pb-1 text-[10px] font-mono uppercase tracking-wider text-slate-400">Public Access (Observer)</div>
                <a href="{{ route('viewer.preview.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('viewer.preview.dashboard') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">visibility</span>
                    <span>Public Catalog</span>
                </a>
                <a href="{{ route('viewer.preview.document-library') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors {{ request()->routeIs('viewer.preview.document-library') ? $cfg['active_link'] : '' }}">
                    <span class="material-symbols-outlined text-[19px]">public</span>
                    <span>Tier 1 Bulletins</span>
                </a>
                
                <!-- Guest Upgrade Call-To-Action (Distinction from Student) -->
                <div class="mt-4 p-3 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-300 dark:border-white/10 text-xs flex flex-col gap-2">
                    <span class="font-semibold text-slate-900 dark:text-white flex items-center gap-1">
                        <span class="material-symbols-outlined text-[16px] text-amber-400">lock</span>
                        Need Full Access?
                    </span>
                    <p class="text-slate-600 dark:text-slate-400 text-[11px] leading-relaxed">CvSU students and faculty can request an institutional login.</p>
                    <a href="{{ url('/institutional-account-request') }}" class="w-full py-1.5 px-2 text-center rounded bg-slate-800 text-white dark:bg-white dark:text-slate-900 font-semibold text-[11px] hover:opacity-90 transition">
                        Request Account
                    </a>
                </div>

            @elseif($role === 'helpdesk')
                <div class="px-3 pt-2 pb-1 text-[10px] font-mono uppercase tracking-wider text-slate-400">Helpdesk Support</div>
                <a href="{{ route('helpdesk') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors">
                    <span class="material-symbols-outlined text-[19px]">support_agent</span>
                    <span>Tickets & Queue</span>
                </a>
                <a href="{{ url('/helpdesk#unlock-queue') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors">
                    <span class="material-symbols-outlined text-[19px]">lock_open</span>
                    <span>Unlock Requests</span>
                </a>
                <a href="{{ url('/helpdesk#audit-search') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-white/5 transition-colors">
                    <span class="material-symbols-outlined text-[19px]">person_search</span>
                    <span>Identity Lookup</span>
                </a>
            @endif

        </nav>
    </div>

    <!-- Bottom User Identity & Session Status -->
    <div class="p-3 border-t border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-[#080d16] flex flex-col gap-2 transition-colors">
        <div class="flex items-center justify-between font-mono text-[10px] text-slate-500 dark:text-slate-400">
            <span>NODE ID</span>
            <span class="font-bold text-slate-700 dark:text-slate-300">{{ $cfg['node_id'] }}</span>
        </div>
        
        <div class="flex items-center gap-2.5 pt-1">
            <div class="w-8 h-8 rounded-full bg-slate-200 dark:bg-white/10 border border-slate-300 dark:border-white/20 flex items-center justify-center font-bold text-xs text-slate-700 dark:text-white flex-shrink-0">
                {{ substr($cfg['user_title'], 0, 2) }}
            </div>
            <div class="flex flex-col min-w-0">
                <span class="text-xs font-semibold text-slate-900 dark:text-white truncate">{{ $cfg['user_title'] }}</span>
                <span class="text-[10px] text-slate-500 dark:text-slate-400 truncate">{{ $cfg['user_subtitle'] }}</span>
            </div>
        </div>

        <a href="{{ $cfg['logout_route'] }}" class="mt-1 flex items-center justify-center gap-1.5 py-1.5 rounded-lg text-xs font-medium text-rose-600 dark:text-rose-400 hover:bg-rose-50 dark:hover:bg-rose-500/10 transition-colors">
            <span class="material-symbols-outlined text-[16px]">logout</span>
            <span>Sign Out Session</span>
        </a>
    </div>
</aside>
