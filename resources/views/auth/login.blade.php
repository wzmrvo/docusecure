<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sign In | DocuSecure — Cavite State University</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">

    <!-- Tailwind CSS with Forms -->
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
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
                            800: '#0e3323',
                            700: '#14452f',
                            600: '#1a5c3e',
                            gold: '#e6b33a',
                            'gold-light': '#f8df8c',
                        }
                    }
                }
            }
        };
    </script>

    <style>
        .bg-security-grid {
            background-size: 32px 32px;
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.04) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
        }
        .transition-elevate {
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .transition-elevate:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased min-h-screen selection:bg-amber-400 selection:text-slate-950">

<main class="min-h-screen w-full flex flex-col lg:flex-row relative overflow-hidden" role="main">

    <!-- ========================================================================= -->
    <!-- LEFT PANEL: Institutional Security Enclave (Neutral Institutional Tone)   -->
    <!-- ========================================================================= -->
    <section class="lg:w-[50%] xl:w-[48%] bg-[#0c1424] text-white relative flex flex-col justify-between p-8 sm:p-12 lg:p-14 xl:p-16 overflow-hidden border-r border-white/10" aria-label="Institutional Branding">
        <!-- Ambient Security Grid -->
        <div class="absolute inset-0 bg-security-grid pointer-events-none opacity-60"></div>
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-0 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

        <!-- Top Identity Header -->
        <div class="relative z-10">
            <header class="flex items-center gap-3.5">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl border border-white/20 bg-white flex items-center justify-center p-1 shadow-lg">
                    <img src="{{ asset('images/cvsu-logo.png') }}" alt="Cavite State University Emblem" class="w-full h-full object-contain">
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <span class="text-2xl font-bold tracking-tight text-white flex items-center gap-1.5 font-sans">
                            DocuSecure
                        </span>
                        <span class="text-[10px] uppercase font-mono tracking-wider px-2 py-0.5 rounded bg-amber-400/15 text-amber-300 border border-amber-400/30 font-semibold">
                            Official Enclave
                        </span>
                    </div>
                    <p class="text-xs text-slate-400 font-medium tracking-wide">Cavite State University • Electronic Document Hub</p>
                </div>
            </header>

            <!-- Main Narrative -->
            <div class="mt-12 xl:mt-16 max-w-xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-slate-300 text-xs font-mono font-semibold uppercase tracking-wider mb-5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    RA 10173 ZERO-TRUST ENCLAVE
                </div>
                
                <h1 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold tracking-tight text-white leading-tight font-sans">
                    Institutional documents.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-amber-200 to-emerald-400">
                        Cryptographically protected.
                    </span>
                </h1>
                
                <p class="mt-4 text-base text-slate-300 leading-relaxed max-w-lg font-normal">
                    One unified workspace to organize university records, verify clearance dockets, and govern classified document tiers with verifiable audit trails.
                </p>
            </div>

            <!-- Security Architecture Pod -->
            <div class="mt-10 relative flex items-center">
                <div class="w-full max-w-md rounded-2xl bg-white/[0.03] border border-white/10 p-5 backdrop-blur-sm shadow-xl transition-elevate">
                    <div class="flex items-center justify-between pb-3 border-b border-white/10">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-emerald-400 text-[18px]">verified</span>
                            <span class="text-xs font-mono font-semibold text-slate-200">Hardware Security Module</span>
                        </div>
                        <span class="text-[10px] font-mono text-emerald-400 font-bold">FIPS 140-3 ACTIVE</span>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-3 mt-3.5 text-xs font-mono text-slate-300">
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span>SHA-256 Validated</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                            <span>RBAC Multi-Tier</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                            <span>Stego Watermark</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
                            <span>Dual-Signatory Slips</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left Footer -->
        <footer class="relative z-10 pt-6 mt-8 border-t border-white/10 text-xs text-slate-400 flex items-center justify-between">
            <span>TLS 1.3 Strict Security</span>
            <span class="font-mono">NODE: CVSU-CENTRAL-01</span>
        </footer>
    </section>

    <!-- ========================================================================= -->
    <!-- RIGHT PANEL: Authentication Form & Interactive Role Demo Switcher          -->
    <!-- ========================================================================= -->
    <section class="flex-1 flex flex-col justify-between p-6 sm:p-12 lg:p-14 xl:p-20 bg-white dark:bg-[#090f19] relative overflow-y-auto transition-colors duration-200">
        
        <!-- Top Assistance Link -->
        <div class="flex justify-end items-center text-xs text-slate-500 dark:text-slate-400 mb-6 lg:mb-0">
            <span>Need technical assistance?</span>
            <a class="ml-1.5 font-semibold text-emerald-600 dark:text-emerald-400 hover:underline" href="{{ url('/helpdesk') }}">
                CvSU MIS Helpdesk
            </a>
        </div>

        <!-- Form Container -->
        <div class="w-full max-w-md mx-auto my-auto py-6">
            <header class="mb-6">
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white font-sans">
                    Welcome back
                </h2>
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
                    Sign in to your secure institutional workspace.
                </p>
            </header>

            <!-- Authentication Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4" id="loginForm">
                @csrf

                <!-- Error Alert Box -->
                <p id="loginError" class="hidden rounded-xl border border-rose-500/30 bg-rose-50 dark:bg-rose-950/30 px-3.5 py-2.5 text-xs font-medium text-rose-700 dark:text-rose-300" role="alert"></p>

                <!-- Email Field -->
                <div>
                    <label class="block text-xs font-mono font-semibold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-1.5" for="email">
                        Institutional Email Address
                    </label>
                    <div class="relative rounded-xl shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <span class="material-symbols-outlined text-[18px]">alternate_email</span>
                        </div>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            autocomplete="email" 
                            required 
                            placeholder="username@cvsu.edu.ph" 
                            value="admin@cvsu.edu.ph"
                            class="block w-full pl-10 pr-3.5 py-2.5 text-sm bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 focus:bg-white dark:focus:bg-[#0c1424] focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"
                        >
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label class="block text-xs font-mono font-semibold uppercase tracking-wider text-slate-700 dark:text-slate-300" for="password">
                            Password
                        </label>
                        <a href="{{ url('/preview/forgot-password') }}" class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 hover:underline">
                            Forgot password?
                        </a>
                    </div>
                    <div class="relative rounded-xl shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <span class="material-symbols-outlined text-[18px]">lock</span>
                        </div>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            autocomplete="current-password" 
                            required 
                            placeholder="••••••••••••" 
                            value="Demo@123"
                            class="block w-full pl-10 pr-10 py-2.5 text-sm bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 focus:bg-white dark:focus:bg-[#0c1424] focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"
                        >
                        <button 
                            type="button" 
                            id="togglePassword" 
                            aria-label="Toggle password visibility" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 dark:hover:text-white focus:outline-none"
                        >
                            <span class="material-symbols-outlined text-[18px]" id="eyeIcon">visibility</span>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center text-xs font-medium text-slate-600 dark:text-slate-400 cursor-pointer">
                        <input type="checkbox" id="remember_me" name="remember_me" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-slate-300 dark:border-white/20 rounded cursor-pointer">
                        <span class="ml-2">Remember this device</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full mt-3 flex items-center justify-center gap-2 py-3 px-4 rounded-xl shadow-md text-sm font-bold text-white bg-emerald-700 hover:bg-emerald-600 active:scale-[0.99] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-all duration-200"
                >
                    <span class="material-symbols-outlined text-[18px]">login</span>
                    <span>Sign in to Workspace</span>
                </button>
            </form>

            <p class="mt-4 text-center text-xs text-slate-500 dark:text-slate-400">
                Need an account? 
                <a class="font-semibold text-emerald-600 dark:text-emerald-400 hover:underline" href="{{ url('/institutional-account-request') }}">
                    Request institutional access.
                </a>
            </p>

            <!-- Demo Mode Role Pre-Fill Box (Taste-Skill: Real micro-interactions) -->
            <div class="mt-7 border border-dashed border-slate-300 dark:border-white/15 rounded-xl bg-slate-50 dark:bg-white/[0.02] p-3.5">
                <button type="button" id="demoToggleBtn" class="w-full flex items-center justify-between text-left text-xs font-semibold text-slate-700 dark:text-slate-300 hover:text-emerald-500 transition">
                    <span class="flex items-center gap-1.5 font-mono">
                        <span class="material-symbols-outlined text-[16px] text-slate-400 transition-transform duration-200" id="demoChevron">chevron_right</span>
                        Demo Mode (Quick Role Switcher)
                    </span>
                    <span class="text-[10px] px-2 py-0.5 bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 font-mono rounded">
                        v2.4-preview
                    </span>
                </button>

                <div id="demoRoleOptions" class="hidden mt-3 pt-3 border-t border-slate-200 dark:border-white/10 grid grid-cols-2 gap-2">
                    <button type="button" onclick="fillDemoAccount('admin@cvsu.edu.ph')" class="px-2 py-1.5 text-[11px] font-mono font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-lg hover:border-amber-400 hover:text-amber-500 shadow-sm text-center transition">
                        Tier 4 Admin
                    </button>
                    <button type="button" onclick="fillDemoAccount('faculty@cvsu.edu.ph')" class="px-2 py-1.5 text-[11px] font-mono font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-lg hover:border-emerald-400 hover:text-emerald-500 shadow-sm text-center transition">
                        Tier 3 Faculty
                    </button>
                    <button type="button" onclick="fillDemoAccount('student@cvsu.edu.ph')" class="px-2 py-1.5 text-[11px] font-mono font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-lg hover:border-sky-400 hover:text-sky-500 shadow-sm text-center transition">
                        Student Scholar
                    </button>
                    <button type="button" onclick="fillDemoAccount('viewer@cvsu.edu.ph')" class="px-2 py-1.5 text-[11px] font-mono font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-lg hover:border-slate-400 hover:text-slate-900 dark:hover:text-white shadow-sm text-center transition">
                        Guest Viewer
                    </button>
                </div>
            </div>
        </div>

        <!-- Legal Footer -->
        <footer class="text-center text-[11px] text-slate-400 dark:text-slate-500 pt-6 border-t border-slate-100 dark:border-white/5">
            <p>© 2026 DocuSecure • Cavite State University</p>
            <p class="mt-0.5 text-[10px]">Data Privacy Act of 2012 (Republic Act No. 10173) Certified Environment</p>
        </footer>
    </section>

</main>

<script>
    // Password visibility toggle
    const togglePasswordBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (togglePasswordBtn) {
        togglePasswordBtn.addEventListener('click', () => {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            eyeIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
        });
    }

    // Demo Mode Accordion Toggle
    const demoToggleBtn = document.getElementById('demoToggleBtn');
    const demoRoleOptions = document.getElementById('demoRoleOptions');
    const demoChevron = document.getElementById('demoChevron');

    if (demoToggleBtn) {
        demoToggleBtn.addEventListener('click', () => {
            const isHidden = demoRoleOptions.classList.contains('hidden');
            if (isHidden) {
                demoRoleOptions.classList.remove('hidden');
                demoChevron.classList.add('rotate-90');
            } else {
                demoRoleOptions.classList.add('hidden');
                demoChevron.classList.remove('rotate-90');
            }
        });
    }

    // Fill demo account helper
    window.fillDemoAccount = function(emailValue) {
        const emailField = document.getElementById('email');
        const passwordField = document.getElementById('password');
        if (emailField && passwordField) {
            emailField.value = emailValue;
            passwordField.value = 'Demo@123';
            emailField.focus();
        }
    };
</script>

<script src="{{ asset('js/docusecure-auth-demo.js') }}" defer></script>
</body>
</html>
