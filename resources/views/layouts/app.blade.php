<!DOCTYPE html>
<html lang="en" class="{{ ($role ?? 'student') === 'student' ? 'light' : 'dark' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Workspace') | DocuSecure — Cavite State University</title>

    <!-- Theme Initialization (prevents flash of incorrect theme) -->
    <script>
        if ('{{ $role ?? 'student' }}' === 'student' || localStorage.getItem('docusecure-theme') === 'light') {
            document.documentElement.classList.remove('dark');
        } else {
            document.documentElement.classList.add('dark');
        }
    </script>

    <!-- Google Fonts (Plus Jakarta Sans, JetBrains Mono, Material Symbols) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">

    <!-- Tailwind CSS with Forms and Container Queries -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        cvsu: {
                            900: '#071f16',
                            850: '#0b291d',
                            800: '#0e3323',
                            700: '#14452f',
                            600: '#1a5c3e',
                            500: '#237a54',
                            gold: '#e6b33a',
                            'gold-light': '#f8df8c',
                            'gold-muted': '#c49526',
                        }
                    }
                }
            }
        };
    </script>

    @if (file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" onerror="this.onerror=null;">

    @stack('styles')
</head>
<body class="{{ ($role ?? 'student') === 'student' ? 'bg-white text-slate-800' : 'bg-slate-50 text-slate-800' }} {{ ($role ?? 'student') === 'helpdesk' ? 'dark:bg-[var(--tier-helpdesk-bg)]' : 'dark:bg-[#0a0f18]' }} dark:text-slate-100 font-sans antialiased min-h-screen flex selection:bg-amber-400 selection:text-slate-900 transition-colors duration-200">

    <!-- Role-Adaptive Dynamic Sidebar -->
    @include('components.sidebar', [
        'currentRole' => $role ?? 'student',
        'guestAccess' => $guestAccess ?? false,
    ])

    <!-- Main Content Enclave -->
    <div class="pl-64 max-sm:pl-0 flex flex-col flex-1 min-h-screen">
        
        <!-- Topbar Command Header -->
        @include('components.topbar', [
            'currentRole' => $role ?? 'student',
            'pageTitle' => $pageTitle ?? 'Command Overview',
            'breadcrumbs' => $breadcrumbs ?? []
        ])

        <!-- Primary Page Content -->
        <main class="w-full pt-16 flex-1 px-6 py-8 max-w-[1560px] mx-auto flex flex-col gap-6">
            @yield('content')
        </main>

        <!-- Compliance & Security Watermark Footer -->
        <footer class="w-full border-t border-slate-200 dark:border-white/5 py-4 px-6 text-xs text-slate-500 dark:text-slate-400 flex flex-col sm:flex-row items-center justify-between gap-3 bg-white dark:bg-[#070b12] transition-colors">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span class="font-semibold text-slate-700 dark:text-slate-200">Cavite State University</span>
                <span>• RA 10173 Zero-Trust Electronic Document System</span>
            </div>
            <div class="flex items-center gap-4 font-mono text-[11px]">
                <span class="hidden md:inline text-slate-400 dark:text-slate-500">SHA-256 Validated</span>
                <span>TLS 1.3 Strict Enclave</span>
            </div>
        </footer>
    </div>

    <!-- Modals Stack (for Approvals, Uploads, Denials) -->
    @stack('modals')

    <!-- Global Scripts & Light/Dark Theme Switcher Logic -->
    <script>
        function toggleTheme() {
            const html = document.documentElement;
            const isDark = html.classList.contains('dark');
            if (isDark) {
                html.classList.remove('dark');
                localStorage.setItem('docusecure-theme', 'light');
            } else {
                html.classList.add('dark');
                localStorage.setItem('docusecure-theme', 'dark');
            }
            // Dispatch event for components that need to respond
            window.dispatchEvent(new CustomEvent('theme-changed', { detail: { dark: !isDark } }));
        }

        // Close any modal via Escape key (Web Design Guidelines A11y rule)
        window.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const openModals = document.querySelectorAll('[data-modal-open="true"]');
                openModals.forEach(modal => {
                    if (typeof closeModal === 'function') {
                        closeModal(modal.id);
                    } else {
                        modal.classList.add('hidden');
                        modal.setAttribute('data-modal-open', 'false');
                    }
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
