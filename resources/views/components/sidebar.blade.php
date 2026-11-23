@php
    $role = $currentRole ?? 'student';
    $academicRoutePrefix = $role === 'viewer' ? 'viewer.preview.' : 'student.preview.';

    $themes = [
        'admin' => [
            'tier_label' => 'TIER 4 • SUPERADMIN',
            'badge_bg' => 'bg-amber-400/15 border-amber-400/40 text-amber-300',
            'active_link' => 'bg-amber-50 text-amber-800 ring-amber-500/25 dark:bg-amber-500/15 dark:text-amber-200',
            'sidebar_border' => 'border-amber-500/20',
            'section_label' => 'Vault Administration',
            'user_title' => 'Engr. R. Bautista',
            'user_initials' => 'RB',
            'user_subtitle' => 'MIS Superadministrator',
            'node_id' => 'CVSU-MIS-ROOT-01',
            'logout_route' => route('admin.preview.logout-confirmation'),
            'links' => [
                ['route' => 'admin.preview.dashboard', 'href' => route('admin.preview.dashboard'), 'icon' => 'dashboard', 'label' => 'Admin Console'],
                ['route' => 'admin.preview.user-management', 'href' => route('admin.preview.user-management'), 'icon' => 'group', 'label' => 'User Management'],
                ['route' => 'admin.preview.access-requests', 'href' => route('admin.preview.access-requests'), 'icon' => 'fact_check', 'label' => 'Access Requests', 'badge' => '14'],
                ['route' => 'admin.preview.access-levels', 'href' => route('admin.preview.access-levels'), 'icon' => 'shield', 'label' => 'Document Access Levels'],
                ['route' => 'admin.preview.deposit-file', 'href' => route('admin.preview.deposit-file'), 'icon' => 'note_add', 'label' => 'Deposit & File Creation'],
                ['route' => 'admin.preview.audit-logs', 'href' => route('admin.preview.audit-logs'), 'icon' => 'receipt_long', 'label' => 'Audit Logs'],
                ['route' => 'admin.preview.system-settings', 'href' => route('admin.preview.system-settings'), 'icon' => 'settings', 'label' => 'System Settings'],
            ],
        ],
        'faculty' => [
            'tier_label' => 'TIER 3 • SUB-CUSTODIAN',
            'badge_bg' => 'bg-emerald-500/15 border-emerald-400/40 text-emerald-300',
            'active_link' => 'bg-emerald-50 text-emerald-800 ring-emerald-500/25 dark:bg-emerald-500/15 dark:text-emerald-200',
            'sidebar_border' => 'border-emerald-500/20',
            'section_label' => 'Department Authority',
            'user_title' => 'Prof. Juan Dela Cruz',
            'user_initials' => 'JD',
            'user_subtitle' => 'CEIT Thesis Committee Chair',
            'node_id' => 'CEIT-FAC-88219',
            'logout_route' => route('faculty.preview.logout-confirmation'),
            'links' => [
                ['route' => 'faculty.preview.dashboard', 'href' => route('faculty.preview.dashboard'), 'icon' => 'space_dashboard', 'label' => 'Clearance Command'],
                ['route' => 'faculty.preview.document-library', 'href' => route('faculty.preview.document-library'), 'icon' => 'folder_special', 'label' => 'Document Library'],
                ['route' => 'faculty.preview.clearance-requests', 'href' => route('faculty.preview.clearance-requests'), 'icon' => 'verified_user', 'label' => 'Clearance Requests', 'badge' => '2'],
                ['route' => 'faculty.preview.department-records', 'href' => route('faculty.preview.department-records'), 'icon' => 'account_balance', 'label' => 'Department Records'],
                ['route' => 'faculty.preview.submit-department-file', 'href' => route('faculty.preview.submit-department-file'), 'icon' => 'upload_file', 'label' => 'Submit Department File'],
                ['route' => 'faculty.preview.tier-4-access-request', 'href' => route('faculty.preview.tier-4-access-request'), 'icon' => 'vpn_key', 'label' => 'Tier 4 Access Request'],
            ],
        ],
        'student' => [
            'tier_label' => 'TIER 1-2 • ENROLLED SCHOLAR',
            'badge_bg' => 'bg-sky-500/15 border-sky-400/40 text-sky-300',
            'active_link' => 'bg-sky-50 text-sky-800 ring-sky-500/25 dark:bg-sky-500/15 dark:text-sky-200',
            'sidebar_border' => 'border-sky-500/20',
            'section_label' => 'Academic Workspace',
            'user_title' => 'Maria Santos',
            'user_initials' => 'MS',
            'user_subtitle' => 'BS Computer Science • 4th Year',
            'node_id' => '2023-10492-CS',
            'logout_route' => route('student.preview.logout-confirmation'),
            'links' => [],
        ],
        'viewer' => [
            'tier_label' => 'TIER 1 • GUEST ACCESS',
            'badge_bg' => 'bg-slate-500/20 border-slate-400/30 text-slate-300',
            'active_link' => 'bg-slate-100 text-slate-900 ring-slate-500/25 dark:bg-slate-500/15 dark:text-slate-100',
            'sidebar_border' => 'border-slate-500/20',
            'section_label' => 'Public Access',
            'user_title' => 'Guest Observer',
            'user_initials' => 'GO',
            'user_subtitle' => 'Public Read-Only Session',
            'node_id' => 'GUEST-OBSERVER-001',
            'logout_route' => route('viewer.preview.logout-confirmation'),
            'links' => [],
        ],
        'helpdesk' => [
            'tier_label' => 'PUBLIC SUPPORT',
            'badge_bg' => 'bg-violet-500/15 border-violet-400/40 text-violet-300',
            'active_link' => 'bg-violet-50 text-violet-800 ring-violet-500/25 dark:bg-violet-500/15 dark:text-violet-200',
            'sidebar_border' => 'border-violet-500/20',
            'section_label' => 'Support & Requests',
            'user_title' => '',
            'user_initials' => '',
            'user_subtitle' => '',
            'node_id' => '',
            'logout_route' => route('login'),
            'links' => [
                ['route' => 'helpdesk', 'href' => url('/helpdesk#request-form'), 'icon' => 'support_agent', 'label' => 'Create a Request'],
                ['href' => url('/helpdesk#track-request'), 'icon' => 'manage_search', 'label' => 'Track a Request'],
                ['href' => url('/helpdesk#support-status'), 'icon' => 'monitor_heart', 'label' => 'Support Status'],
                ['href' => url('/helpdesk#faqs'), 'icon' => 'quiz', 'label' => 'Help & FAQs'],
            ],
        ],
    ];

    if ($role === 'student' || $role === 'viewer') {
        $themes[$role]['links'] = [
            [
                'route' => $academicRoutePrefix . 'dashboard',
                'href' => route($academicRoutePrefix . 'dashboard'),
                'icon' => $role === 'viewer' ? 'visibility' : 'dashboard',
                'label' => $role === 'viewer' ? 'Public Catalog' : 'Student Portal',
            ],
            [
                'route' => $academicRoutePrefix . 'document-library',
                'href' => route($academicRoutePrefix . 'document-library'),
                'icon' => $role === 'viewer' ? 'public' : 'folder',
                'label' => $role === 'viewer' ? 'Tier 1 Bulletins' : 'Document Library',
            ],
            ['route' => $academicRoutePrefix . 'categories', 'href' => route($academicRoutePrefix . 'categories'), 'icon' => 'category', 'label' => 'Categories'],
            ['route' => $academicRoutePrefix . 'library-research', 'href' => route($academicRoutePrefix . 'library-research'), 'icon' => 'menu_book', 'label' => 'Library Research'],
            ['route' => $academicRoutePrefix . 'account-settings', 'href' => route($academicRoutePrefix . 'account-settings'), 'icon' => 'manage_accounts', 'label' => 'Account Settings'],
            ['route' => $academicRoutePrefix . 'system-settings', 'href' => route($academicRoutePrefix . 'system-settings'), 'icon' => 'settings', 'label' => 'System Settings'],
        ];
    }

    $cfg = $themes[$role] ?? $themes['student'];
@endphp

<aside
    id="app-sidebar"
    data-sidebar="{{ $role }}"
    aria-label="Main Navigation"
    class="fixed left-0 top-0 z-50 flex h-screen w-64 flex-col justify-between border-r bg-white shadow-lg transition-colors duration-200 max-sm:hidden dark:bg-[#0c1320] {{ $cfg['sidebar_border'] }}"
>
    <div class="flex min-h-0 flex-1 flex-col">
        <div class="flex h-16 items-center border-b border-slate-200 bg-slate-50/70 px-4 dark:border-white/10 dark:bg-[#080d16]">
            <a href="{{ url('/') }}" class="flex min-w-0 items-center gap-3 rounded-md transition-opacity hover:opacity-90 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-slate-500 dark:focus-visible:ring-white" aria-label="DocuSecure home">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center">
                    <img src="{{ asset('images/cvsu-logo.png') }}" alt="CvSU Logo" class="h-full w-full object-contain">
                </span>
                <span class="flex min-w-0 flex-col">
                    <span class="flex items-center gap-1.5 text-base font-bold tracking-tight text-slate-900 dark:text-white">
                        DocuSecure
                        <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-emerald-400" aria-hidden="true"></span>
                    </span>
                    <span class="truncate text-[10px] font-mono font-semibold text-slate-500 dark:text-slate-400">Cavite State University</span>
                </span>
            </a>
        </div>

        <div class="flex flex-col items-start gap-1.5 border-b border-slate-200 bg-slate-100/50 px-4 py-2.5 dark:border-white/5 dark:bg-[#111927]">
            <span class="text-[10px] font-mono font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Clearance Enclave</span>
            <span class="rounded border px-2 py-1 text-[9px] font-mono font-bold uppercase leading-tight {{ $cfg['badge_bg'] }}">
                {{ $cfg['tier_label'] }}
            </span>
        </div>

        <nav class="min-h-0 flex-1 space-y-1 overflow-y-auto p-3 text-sm font-medium" aria-label="{{ $cfg['section_label'] }}">
            <p class="px-3 pb-1 pt-2 text-[10px] font-mono uppercase tracking-wider text-slate-500 dark:text-slate-400">{{ $cfg['section_label'] }}</p>

            @foreach ($cfg['links'] as $link)
                @php($isActive = isset($link['route']) && request()->routeIs($link['route']))
                <a
                    href="{{ $link['href'] }}"
                    @if ($isActive) aria-current="page" @endif
                    class="flex min-h-10 items-center justify-between gap-3 rounded-lg px-3 py-2 text-slate-700 transition-colors hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-slate-500 dark:text-slate-200 dark:hover:bg-white/5 dark:hover:text-white dark:focus-visible:ring-white {{ $isActive ? $cfg['active_link'] . ' font-semibold ring-1 ring-inset' : '' }}"
                >
                    <span class="flex min-w-0 items-center gap-3">
                        <span class="material-symbols-outlined shrink-0 text-[19px]" aria-hidden="true">{{ $link['icon'] }}</span>
                        <span class="min-w-0 truncate">{{ $link['label'] }}</span>
                    </span>
                    @if (isset($link['badge']))
                        <span class="shrink-0 rounded-full border border-rose-500/30 bg-rose-500/10 px-1.5 py-0.5 text-[10px] font-mono font-bold text-rose-700 dark:text-rose-300">{{ $link['badge'] }}</span>
                    @endif
                </a>
            @endforeach

            @if ($role === 'viewer')
                <div class="mt-4 flex flex-col gap-2 rounded-lg border border-slate-200 bg-slate-50 p-3 text-xs dark:border-white/10 dark:bg-white/5">
                    <span class="flex items-center gap-1 font-semibold text-slate-900 dark:text-white">
                        <span class="material-symbols-outlined text-[16px] text-amber-500" aria-hidden="true">lock</span>
                        Need Full Access?
                    </span>
                    <p class="text-[11px] leading-relaxed text-slate-600 dark:text-slate-400">CvSU students and faculty can request an institutional login.</p>
                    <a href="{{ url('/institutional-account-request') }}" class="rounded bg-slate-800 px-2 py-2 text-center text-[11px] font-semibold text-white transition-colors hover:bg-slate-700 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-white dark:bg-white dark:text-slate-900 dark:hover:bg-slate-200">
                        Request Account
                    </a>
                </div>
            @endif
        </nav>
    </div>

    <div class="flex flex-col gap-2 border-t border-slate-200 bg-slate-50 p-3 transition-colors dark:border-white/10 dark:bg-[#080d16]">
        @if ($role === 'helpdesk')
        <div class="rounded-lg border border-violet-200 bg-violet-50 p-3 dark:border-violet-500/20 dark:bg-violet-500/10">
            <p class="text-xs font-semibold text-slate-900 dark:text-white">Need account access?</p>
            <p class="mt-1 text-[11px] leading-relaxed text-slate-600 dark:text-slate-400">Student or faculty? Use the institutional account request flow.</p>
            <a href="{{ route('institutional-account-request') }}" class="mt-2 flex min-h-9 items-center justify-center rounded-lg border border-violet-300 bg-white px-2 text-xs font-semibold text-violet-700 transition-colors hover:bg-violet-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-violet-500 dark:border-violet-400/30 dark:bg-violet-500/10 dark:text-violet-200 dark:hover:bg-violet-500/20">
                Request an Account
            </a>
        </div>
        <a href="{{ route('login') }}" class="flex min-h-10 items-center justify-center gap-1.5 rounded-lg px-2 text-xs font-medium text-slate-600 transition-colors hover:bg-slate-200 hover:text-slate-900 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-slate-500 dark:text-slate-300 dark:hover:bg-white/5 dark:hover:text-white">
            <span class="material-symbols-outlined text-[16px]" aria-hidden="true">login</span>
            <span>Back to Login</span>
        </a>
        @else
        <div class="flex items-center justify-between gap-2 text-[10px] font-mono text-slate-500 dark:text-slate-400">
            <span>NODE ID</span>
            <span class="truncate font-bold text-slate-700 dark:text-slate-300">{{ $cfg['node_id'] }}</span>
        </div>

        <div class="flex min-w-0 items-center gap-2.5 pt-1">
            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-slate-300 bg-slate-200 text-xs font-bold text-slate-700 dark:border-white/20 dark:bg-white/10 dark:text-white">
                {{ $cfg['user_initials'] }}
            </span>
            <span class="flex min-w-0 flex-col">
                <span class="truncate text-xs font-semibold text-slate-900 dark:text-white">{{ $cfg['user_title'] }}</span>
                <span class="truncate text-[10px] text-slate-500 dark:text-slate-400">{{ $cfg['user_subtitle'] }}</span>
            </span>
        </div>

        <a href="{{ $cfg['logout_route'] }}" class="mt-1 flex min-h-10 items-center justify-center gap-1.5 rounded-lg px-2 text-xs font-medium text-rose-700 transition-colors hover:bg-rose-50 hover:text-rose-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-rose-500 dark:text-rose-400 dark:hover:bg-rose-500/10 dark:hover:text-rose-300 dark:focus-visible:ring-rose-400">
            <span class="material-symbols-outlined text-[16px]" aria-hidden="true">logout</span>
            <span>Sign Out Session</span>
        </a>
        @endif
    </div>
</aside>
