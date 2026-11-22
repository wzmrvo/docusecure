
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>DocuSecure — Cavite State University Institutional Workspace</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cvsu: {
                            "900": "#071f16",
                            "850": "#0b291d",
                            "800": "#0e3323",
                            "700": "#14452f",
                            "600": "#1a5c3e",
                            "500": "#237a54",
                            gold: "#e6b33a",
                            "gold-light": "#f8df8c",
                            "gold-muted": "#c49526"
                        }
                    },
                    fontFamily: {
                        sans: ["Plus Jakarta Sans", "sans-serif"],
                        mono: ["JetBrains Mono", "monospace"]
                    },
                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem"
                    }
                }
            }
        }
    </script>

    <style>
        .bg-security-grid {
            background-size: 32px 32px;
            background-image:
                linear-gradient(to right, rgba(230,179,58,0.04) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(230,179,58,0.04) 1px, transparent 1px);
        }

        .radial-emerald-glow {
            background: radial-gradient(circle at 45% 40%, rgba(35,122,84,0.45) 0%, rgba(14,51,35,0) 70%);
        }

        .card-security-shadow {
            box-shadow: 0 20px 50px -12px rgba(11,41,29,0.35), 0 0 0 1px rgba(255,255,255,0.08);
        }

        .transition-elevate {
            transition: all 0.2s cubic-bezier(0.16,1,0.3,1);
        }

        .transition-elevate:hover {
            transform: translateY(-1px);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen selection:bg-cvsu-gold selection:text-cvsu-900">

<main class="min-h-screen w-full flex flex-col lg:flex-row relative overflow-hidden">

    <!-- LEFT BRAND PANEL -->
    <section
        class="lg:w-[50%] xl:w-[48%] text-white relative flex flex-col justify-between p-8 sm:p-12 lg:p-14 xl:p-16 overflow-hidden border-r"
        style="background: linear-gradient(135deg, #173153 0%, #1f3f69 60%, #173153 100%); border-right-color: rgba(55,110,173,0.35); border-top: 4px solid #eabf55;"
    >

        <div class="absolute inset-0 bg-security-grid pointer-events-none opacity-80"></div>

        <div class="absolute -top-32 -left-32 w-96 h-96 radial-emerald-glow pointer-events-none"
             style="background: radial-gradient(circle at 45% 40%, rgba(55,110,173,0.35) 0%, rgba(23,49,83,0) 70%);">
        </div>

        <div class="absolute bottom-10 right-0 w-[420px] h-[420px] bg-cvsu-gold/5 blur-3xl rounded-full pointer-events-none"></div>

        <div class="relative z-10">

            <!-- UNIVERSITY IDENTITY -->
            <header class="flex items-center gap-3.5">

                <!-- UPDATED TRANSPARENT CVSU LOGO -->
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-transparent flex items-center justify-center overflow-hidden p-1">
                    <img
                        src="{{ asset('images/cvsu-logo.png') }}"
                        alt="Cavite State University Logo"
                        class="w-full h-full object-contain"
                    >
                </div>

                <!-- BRAND NAME -->
                <div>
                    <div class="flex items-center gap-2">

                        <span class="text-2xl font-bold tracking-tight text-white flex items-center gap-1.5">

                            <svg class="w-5 h-5 text-cvsu-gold inline-block"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2.2"
                                 viewBox="0 0 24 24">

                                <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                      stroke-linecap="round"
                                      stroke-linejoin="round">
                                </path>
                            </svg>

                            DocuSecure
                        </span>

                        <span class="text-[10px] uppercase font-mono tracking-widest px-2 py-0.5 rounded bg-cvsu-gold/15 text-cvsu-gold-light border border-cvsu-gold/30 font-semibold">
                            Official
                        </span>

                    </div>

                    <p class="text-xs text-cvsu-gold-light/90 font-medium tracking-wide">
                        Cavite State University · Electronic Document Hub
                    </p>
                </div>
            </header>

            <!-- HERO CONTENT -->
            <div class="mt-14 xl:mt-16 max-w-xl">

                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cvsu-gold/10 border border-cvsu-gold/30 text-cvsu-gold text-xs font-semibold uppercase tracking-wider mb-5">
                    <span class="w-1.5 h-1.5 rounded-full bg-cvsu-gold animate-pulse"></span>
                    SECURITY-FIRST DESIGN
                </div>

                <h1 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold tracking-tight text-white leading-tight">
                    Your documents.<br/>

                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cvsu-gold-light via-cvsu-gold to-amber-400">
                        Protected at every step.
                    </span>
                </h1>

                <p class="mt-5 text-base sm:text-lg text-emerald-100/80 leading-relaxed max-w-lg font-normal">
                    One trusted workspace to organize your institution’s knowledge, verify clearances, and strictly control who can access it.
                </p>
            </div>

            <!-- SECURITY ILLUSTRATION -->
            <div class="mt-10 xl:mt-12 relative flex items-center">

                <div class="w-80 h-44 rounded-2xl bg-cvsu-700/40 border border-cvsu-600/50 backdrop-blur-sm card-security-shadow p-5 relative overflow-hidden transition-elevate">

                    <div class="w-16 h-2 rounded bg-cvsu-gold/40 mb-3"></div>
                    <div class="w-full h-2 rounded bg-emerald-100/20 mb-2"></div>
                    <div class="w-4/5 h-2 rounded bg-emerald-100/20 mb-2"></div>
                    <div class="w-3/5 h-2 rounded bg-emerald-100/15 mb-4"></div>

                    <div class="flex items-center gap-2 pt-2 border-t border-cvsu-600/40">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        <span class="text-[11px] font-mono text-emerald-200/70 tracking-tight">
                            ENCRYPTED_SHA256 · ISO/IEC 27001
                        </span>
                    </div>

                    <div class="absolute -right-4 -bottom-4 w-36 h-36 bg-gradient-to-br from-cvsu-gold to-amber-600 rounded-3xl p-1 shadow-2xl rotate-6 flex items-center justify-center border-4 border-cvsu-900">

                        <div class="w-full h-full bg-gradient-to-br from-amber-400 via-cvsu-gold to-amber-500 rounded-2xl flex flex-col items-center justify-center text-cvsu-900 shadow-inner">

                            <svg class="w-12 h-12 text-cvsu-950/90"
                                 fill="currentColor"
                                 viewBox="0 0 24 24">
                                <path clip-rule="evenodd"
                                      d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5zM12 14.25a1.5 1.5 0 100 3 1.5 1.5 0 000-3z"
                                      fill-rule="evenodd">
                                </path>
                            </svg>

                            <span class="text-[9px] font-black tracking-widest uppercase mt-0.5 text-cvsu-900">
                                VERIFIED
                            </span>

                        </div>
                    </div>
                </div>

                <!-- FEATURE CHIPS -->
                <div class="hidden sm:flex flex-col gap-2 ml-6">

                    <div class="px-3 py-1.5 rounded-lg bg-cvsu-850/80 border border-emerald-500/20 text-xs text-emerald-200 flex items-center gap-2 backdrop-blur-md">
                        <span class="text-cvsu-gold">✓</span>
                        Role-Based Access (RBAC)
                    </div>

                    <div class="px-3 py-1.5 rounded-lg bg-cvsu-850/80 border border-emerald-500/20 text-xs text-emerald-200 flex items-center gap-2 backdrop-blur-md">
                        <span class="text-cvsu-gold">✓</span>
                        Automated Audit Trail
                    </div>

                    <div class="px-3 py-1.5 rounded-lg bg-cvsu-850/80 border border-emerald-500/20 text-xs text-emerald-200 flex items-center gap-2 backdrop-blur-md">
                        <span class="text-cvsu-gold">✓</span>
                        RA 10173 Privacy Compliance
                    </div>

                </div>
            </div>
        </div>

        <!-- LEFT FOOTER -->
        <footer class="relative z-10 pt-8 mt-12 border-t border-cvsu-700/70">
            <div class="flex items-center gap-2 text-xs text-emerald-200/90 font-medium">
                <span class="text-cvsu-gold font-bold uppercase tracking-wider">Security goals:</span>
                <span>encrypted storage · role-based access · full audit trail</span>
            </div>
        </footer>

    </section>

    <!-- RIGHT LOGIN PANEL -->
    <section class="flex-1 flex flex-col justify-between p-6 sm:p-12 lg:p-14 xl:p-20 bg-white relative overflow-y-auto">

        <!-- HELP LINK -->
        <div class="flex justify-end items-center text-xs text-slate-500 mb-6 lg:mb-0">
            <span>Need technical assistance?</span>
            <a class="ml-1.5 font-semibold text-cvsu-700 hover:text-cvsu-800 hover:underline"
               href="#helpdesk"
               style="color: #376ead;">
                CvSU MIS Helpdesk
            </a>
        </div>

        <!-- LOGIN FORM CONTAINER -->
        <div class="w-full max-w-md mx-auto my-auto py-6">

            <header class="mb-6">
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">
                    Welcome back
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Sign in to your secure institutional workspace.
                </p>
            </header>

            <!-- SIGNED OUT MESSAGE -->
            <div class="mb-6 p-3.5 bg-emerald-50/90 border border-emerald-200/80 rounded-xl flex items-start gap-3 text-emerald-900 shadow-sm"
                 role="status">

                <div class="mt-0.5 p-1 rounded-full bg-emerald-100 text-emerald-700 flex-shrink-0">
                    ✓
                </div>

                <div class="text-xs leading-relaxed">
                    <p class="font-semibold text-emerald-950">Signed out</p>
                    <p class="text-emerald-800">
                        You have been securely signed out of DocuSecure.
                    </p>
                </div>

                <button aria-label="Dismiss message"
                        class="ml-auto text-emerald-500 hover:text-emerald-800 p-0.5 rounded"
                        onclick="this.parentElement.remove()"
                        type="button">
                    ✕
                </button>
            </div>

            <!-- LOGIN FORM -->
            <form id="loginForm" action="#" class="space-y-4" method="POST">

                <!-- EMAIL -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-700 mb-1.5"
                           for="email">
                        Institutional Email address
                    </label>

                    <div class="relative rounded-xl shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            ✉
                        </div>

                        <input
                            class="block w-full pl-10 pr-3.5 py-2.5 text-sm bg-slate-50/50 border border-slate-300 rounded-xl text-slate-900 placeholder-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-cvsu-700 focus:border-cvsu-700 transition"
                            id="email"
                            name="email"
                            placeholder="username@cvsu.edu.ph"
                            required
                            type="email"
                            value="name@cvsu.edu.ph"
                        >
                    </div>
                </div>

                <!-- PASSWORD -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-700"
                               for="password">
                            Password
                        </label>
                    </div>

                    <div class="relative rounded-xl shadow-sm">

                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <span>🔒</span>
                        </div>

                        <input
                            class="block w-full pl-10 pr-10 py-2.5 text-sm bg-slate-50/50 border border-slate-300 rounded-xl text-slate-900 placeholder-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-cvsu-700 focus:border-cvsu-700 transition"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            required
                            type="password"
                        >

                        <button
                            aria-label="Toggle password visibility"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none"
                            id="togglePassword"
                            type="button">
                            <svg class="w-4 h-4" fill="none" id="eyeIcon" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>

                    </div>
                </div>

                <!-- REMEMBER ME AND FORGOT PASSWORD -->
                <div class="flex items-center justify-between pt-1">

                    <div class="flex items-center">
                        <input class="h-4 w-4 text-cvsu-700 focus:ring-cvsu-600 border-slate-300 rounded cursor-pointer"
                               id="remember_me"
                               name="remember_me"
                               type="checkbox">

                        <label class="ml-2 block text-xs font-medium text-slate-600 cursor-pointer"
                               for="remember_me">
                            Remember me
                        </label>
                    </div>

                    <div class="text-xs">
                        <a class="font-semibold text-cvsu-700 hover:text-cvsu-800 hover:underline"
                           href="{{ url('/preview/forgot-password') }}"
                           style="color: #376ead;">
                            Forgot password?
                        </a>
                    </div>
                </div>

                <!-- SIGN IN BUTTON -->
                <button
                    class="w-full mt-3 flex items-center justify-center gap-2 py-3 px-4 border border-transparent rounded-xl shadow-md text-sm font-semibold text-white bg-cvsu-700 hover:bg-cvsu-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cvsu-700 transition-elevate"
                    style="background-color: #173153;"
                    type="submit">

                    <span class="text-cvsu-gold">➜</span>
                    Sign in
                </button>

            </form>

            <!-- ACCESS NOTICE -->
            <div class="mt-4 flex items-center justify-center gap-1.5 text-xs text-slate-500">
                <span>🔒</span>
                <span>For authorized CvSU users only.</span>
            </div>

            <p class="mt-4 text-center text-xs text-slate-600">
                Need an account?
                <a class="font-semibold text-cvsu-700 hover:text-cvsu-800 hover:underline"
                   href="#admin-contact"
                   style="color: #376ead;">
                    Contact your administrator.
                </a>
            </p>

            <!-- DEMO MODE -->
            <div class="mt-7 border border-dashed border-slate-300 rounded-xl bg-slate-50/70 p-3.5">

                <button
                    class="w-full flex items-center justify-between text-left text-xs font-semibold text-slate-700 hover:text-cvsu-800 transition"
                    id="demoToggleBtn"
                    type="button">

                    <span class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-slate-500 transition-transform duration-200"
                             fill="none"
                             id="demoChevron"
                             stroke="currentColor"
                             stroke-width="2.5"
                             viewBox="0 0 24 24">
                            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                        Demo mode (frontend only)
                    </span>

                    <span class="text-[10px] px-2 py-0.5 bg-emerald-100 text-emerald-800 font-mono rounded">
                        v2.4-preview
                    </span>
                </button>

                <div class="hidden mt-3 pt-3 border-t border-slate-200 grid grid-cols-3 gap-2"
                     id="demoRoleOptions">

                    <button class="px-2 py-1.5 text-[11px] font-medium text-slate-700 bg-white border border-slate-200 rounded-lg hover:border-cvsu-600 hover:text-cvsu-700 shadow-sm text-center transition"
                            onclick="fillDemoAccount('registrar@cvsu.edu.ph')"
                            type="button">
                        Registrar
                    </button>

                    <button class="px-2 py-1.5 text-[11px] font-medium text-slate-700 bg-white border border-slate-200 rounded-lg hover:border-cvsu-600 hover:text-cvsu-700 shadow-sm text-center transition"
                            onclick="fillDemoAccount('dean.engineering@cvsu.edu.ph')"
                            type="button">
                        Dean / Chair
                    </button>

                    <button class="px-2 py-1.5 text-[11px] font-medium text-slate-700 bg-white border border-slate-200 rounded-lg hover:border-cvsu-600 hover:text-cvsu-700 shadow-sm text-center transition"
                            onclick="fillDemoAccount('faculty.records@cvsu.edu.ph')"
                            type="button">
                        Faculty
                    </button>

                </div>
            </div>

        </div>

        <!-- RIGHT FOOTER -->
        <footer class="text-center text-[11px] text-slate-400 pt-6 border-t border-slate-100">
            <p>© 2026 DocuSecure · Cavite State University</p>
            <p class="mt-0.5 text-[10px] text-slate-400">
                Data Privacy Act of 2012 (Republic Act No. 10173) Certified Environment
            </p>
        </footer>

    </section>

</main>

<!-- JAVASCRIPT -->
<script>
    // Password visibility
    
// Password visibility
const togglePasswordBtn = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');
const eyeIcon = document.getElementById('eyeIcon');

if (togglePasswordBtn && passwordInput && eyeIcon) {
    togglePasswordBtn.addEventListener('click', () => {
        const isPassword = passwordInput.type === 'password';

        passwordInput.type = isPassword ? 'text' : 'password';

        eyeIcon.innerHTML = isPassword
            ? `<path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M3 3l18 18" />`
            : `<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
    });
}

// Demo mode toggle
const demoToggleBtn = document.getElementById('demoToggleBtn');
const demoRoleOptions = document.getElementById('demoRoleOptions');
const demoChevron = document.getElementById('demoChevron');

if (demoToggleBtn && demoRoleOptions && demoChevron) {
    demoToggleBtn.addEventListener('click', () => {
        const isHidden = demoRoleOptions.classList.contains('hidden');

        demoRoleOptions.classList.toggle('hidden');
        demoChevron.classList.toggle('rotate-90', isHidden);
    });
}

// Demo account autofill
function fillDemoAccount(emailValue) {
    document.getElementById('email').value = emailValue;
    document.getElementById('password').value = 'Demo@123';
}

// Frontend-only login simulation
const loginForm = document.getElementById('loginForm');

if (loginForm) {
    loginForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;

        if (!email.endsWith('@cvsu.edu.ph')) {
            alert('Please use a valid CvSU institutional email address.');
            return;
        }

        if (!password.trim()) {
            alert('Please enter your password.');
            return;
        }

        // Simulated login: proceed to 2FA
        window.location.href = @json(url('/preview/two-factor'));
    });
}
</script>

</body>
</html>
