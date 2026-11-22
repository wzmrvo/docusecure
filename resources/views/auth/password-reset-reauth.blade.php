<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DocuSecure — Cavite State University Institutional Workspace</title>
<!-- Inter Font -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS v3 with Plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {theme: {extend: {colors: {cvsu: {"900": "#071f16", "850": "#0b291d", "800": "#0e3323", "700": "#14452f", "600": "#1a5c3e", "500": "#237a54", gold: "#e6b33a", "gold-light": "#f8df8c", "gold-muted": "#c49526"}, "on-surface-variant": "#c0c9c1", "on-error": "#690005", "on-secondary": "#23342a", "surface-container-high": "#282b28", "surface-container": "#1e201e", "surface-tint": "#9fd2b4", primary: "#9fd2b4", background: "#111412", "on-secondary-fixed-variant": "#394b40", "surface-dim": "#111412", "secondary-fixed": "#d3e8d9", "secondary-container": "#3b4d42", "inverse-surface": "#e2e3df", "on-background": "#e2e3df", "primary-fixed-dim": "#9fd2b4", "surface-variant": "#333533", "on-secondary-container": "#a9bdaf", "tertiary-fixed": "#dce1ff", "surface-bright": "#373a37", "secondary-fixed-dim": "#b7cbbd", "primary-container": "#14452f", "on-surface": "#e2e3df", surface: "#111412", "inverse-primary": "#39684f", "on-primary": "#033823", "on-tertiary": "#242e54", "outline-variant": "#414943", "error-container": "#93000a", "surface-container-low": "#191c1a", "inverse-on-surface": "#2e312f", tertiary: "#bbc5f3", "on-primary-fixed-variant": "#204f39", "on-secondary-fixed": "#0e1f16", "surface-container-lowest": "#0c0f0d", "tertiary-container": "#313b61", outline: "#8b938c", "surface-container-highest": "#333533", "primary-fixed": "#bbeecf", secondary: "#b7cbbd", "on-tertiary-fixed": "#0e193d", "on-tertiary-container": "#9ca6d2", "tertiary-fixed-dim": "#bbc5f3", "on-primary-container": "#81b296", "on-tertiary-fixed-variant": "#3b456b", "on-error-container": "#ffdad6", error: "#ffb4ab", "on-primary-fixed": "#002113"}, fontFamily: {sans: ["\"Plus Jakarta Sans\"", "sans-serif"], mono: ["\"JetBrains Mono\"", "monospace"], headline: ["Inter"], display: ["Inter"], body: ["Inter"], label: ["JetBrains Mono"]}, fontSize: {}, borderRadius: {DEFAULT: "0.125rem", lg: "0.25rem", xl: "0.5rem", full: "0.75rem"}}}}
  </script>
<!-- BEGIN: Custom Micro-Styles -->
<style data-purpose="custom-backgrounds-and-patterns">
    /* Subtle geometric grid backdrop on the dark enclave panel */
    .bg-security-grid {
      background-size: 32px 32px;
      background-image: 
        linear-gradient(to right, rgba(230, 179, 58, 0.04) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(230, 179, 58, 0.04) 1px, transparent 1px);
    }
    
    /* Glowing radial spotlight for institutional badge */
    .radial-emerald-glow {
      background: radial-gradient(circle at 45% 40%, rgba(35, 122, 84, 0.45) 0%, rgba(14, 51, 35, 0) 70%);
    }

    /* Soft ambient card glow */
    .card-security-shadow {
      box-shadow: 0 20px 50px -12px rgba(11, 41, 29, 0.35), 0 0 0 1px rgba(255, 255, 255, 0.08);
    }
  </style>
<style data-purpose="toggle-and-animations">
    /* Smooth transition for inputs and buttons */
    .transition-elevate {
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .transition-elevate:hover {
      transform: translateY(-1px);
    }
  </style>
<!-- END: Custom Micro-Styles -->
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen selection:bg-cvsu-gold selection:text-cvsu-900">
<!-- BEGIN: MainContainer -->
<main class="min-h-screen w-full flex flex-col lg:flex-row relative overflow-hidden" data-purpose="authentication-split-layout">
<!-- ========================================================================= -->
<!-- BEGIN: LeftBrandEnclavePanel -->
<!-- ========================================================================= -->
<section class="lg:w-[50%] xl:w-[48%] bg-gradient-to-br from-cvsu-900 via-cvsu-800 to-cvsu-700 text-white relative flex flex-col justify-between p-8 sm:p-12 lg:p-14 xl:p-16 overflow-hidden border-r border-cvsu-700/60" data-purpose="institutional-branding-panel" style="background: linear-gradient(135deg, #173153 0%, #1f3f69 60%, #173153 100%); border-right-color: rgba(55, 110, 173, 0.35); border-top: 4px solid #eabf55;">
<!-- Ambient Visual Effects & Background Matrix -->
<div class="absolute inset-0 bg-security-grid pointer-events-none opacity-80"></div>
<div class="absolute -top-32 -left-32 w-96 h-96 radial-emerald-glow pointer-events-none" style="background: radial-gradient(circle at 45% 40%, rgba(55, 110, 173, 0.35) 0%, rgba(23, 49, 83, 0) 70%);"></div>
<div class="absolute bottom-10 right-0 w-[420px] h-[420px] bg-cvsu-gold/5 blur-3xl rounded-full pointer-events-none"></div>
<!-- Top University & System Identity -->
<div class="relative z-10">
<header class="flex items-center gap-3.5" data-purpose="university-identity-header">
<!-- Cavite State University Emblem & Badge Container -->
<img alt="Cavite State University Logo" class="w-12 h-12 object-contain" src="{{ asset('images/cvsu-logo.png') }}"/>
<!-- Brand Typography -->
<div>
<div class="flex items-center gap-2">
<span class="text-2xl font-bold tracking-tight text-white flex items-center gap-1.5">
<svg class="w-5 h-5 text-cvsu-gold inline-block" fill="none" stroke="currentColor" stroke-width="2.2" viewbox="0 0 24 24">
<path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
                DocuSecure
              </span>
<span class="text-[10px] uppercase font-mono tracking-widest px-2 py-0.5 rounded bg-cvsu-gold/15 text-cvsu-gold-light border border-cvsu-gold/30 font-semibold">
                Official
              </span>
</div>
<p class="text-xs text-cvsu-gold-light/90 font-medium tracking-wide">Cavite State University · Electronic Document Hub</p>
</div>
</header>
<!-- Main Narrative & Value Statement -->
<div class="mt-14 xl:mt-16 max-w-xl" data-purpose="hero-narrative">
<!-- Security Eyebrow Tag -->
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
<!-- Elevating the Prototype's Document Shield Illustration -->
<div class="mt-10 xl:mt-12 relative flex items-center" data-purpose="interactive-security-illustration">
<!-- Background decorative layer -->
<div class="w-80 h-44 rounded-2xl bg-cvsu-700/40 border border-cvsu-600/50 backdrop-blur-sm card-security-shadow p-5 relative overflow-hidden transition-elevate">
<!-- Document preview skeleton lines -->
<div class="w-16 h-2 rounded bg-cvsu-gold/40 mb-3"></div>
<div class="w-full h-2 rounded bg-emerald-100/20 mb-2"></div>
<div class="w-4/5 h-2 rounded bg-emerald-100/20 mb-2"></div>
<div class="w-3/5 h-2 rounded bg-emerald-100/15 mb-4"></div>
<div class="flex items-center gap-2 pt-2 border-t border-cvsu-600/40">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span class="text-[11px] font-mono text-emerald-200/70 tracking-tight">ENCRYPTED_SHA256 · ISO/IEC 27001</span>
</div>
<!-- Floating Padlock Shield Symbol (Matches & elevates screenshot) -->
<div class="absolute -right-4 -bottom-4 w-36 h-36 bg-gradient-to-br from-cvsu-gold to-amber-600 rounded-3xl p-1 shadow-2xl rotate-6 flex items-center justify-center border-4 border-cvsu-900 group">
<div class="w-full h-full bg-gradient-to-br from-amber-400 via-cvsu-gold to-amber-500 rounded-2xl flex flex-col items-center justify-center text-cvsu-900 shadow-inner">
<!-- Shield and Lock Hole -->
<svg class="w-12 h-12 text-cvsu-950/90" fill="currentColor" viewbox="0 0 24 24">
<path clip-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5zM12 14.25a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" fill-rule="evenodd"></path>
</svg>
<span class="text-[9px] font-black tracking-widest uppercase mt-0.5 text-cvsu-900">VERIFIED</span>
</div>
</div>
</div>
<!-- Feature micro-chips -->
<div class="hidden sm:flex flex-col gap-2 ml-6">
<div class="px-3 py-1.5 rounded-lg bg-cvsu-850/80 border border-emerald-500/20 text-xs text-emerald-200 flex items-center gap-2 backdrop-blur-md">
<svg class="w-3.5 h-3.5 text-cvsu-gold" fill="none" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24">
<path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
              Role-Based Access (RBAC)
            </div>
<div class="px-3 py-1.5 rounded-lg bg-cvsu-850/80 border border-emerald-500/20 text-xs text-emerald-200 flex items-center gap-2 backdrop-blur-md">
<svg class="w-3.5 h-3.5 text-cvsu-gold" fill="none" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24">
<path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
              Automated Audit Trail
            </div>
<div class="px-3 py-1.5 rounded-lg bg-cvsu-850/80 border border-emerald-500/20 text-xs text-emerald-200 flex items-center gap-2 backdrop-blur-md">
<svg class="w-3.5 h-3.5 text-cvsu-gold" fill="none" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24">
<path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
              RA 10173 Privacy Compliance
            </div>
</div>
</div>
</div>
<!-- Bottom Institutional Trust Guarantee -->
<footer class="relative z-10 pt-8 mt-12 border-t border-cvsu-700/70" data-purpose="institutional-security-footer">
<div class="flex items-center gap-2 text-xs text-emerald-200/90 font-medium">
<span class="text-cvsu-gold font-bold uppercase tracking-wider">Security goals:</span>
<span>encrypted storage · role-based access · full audit trail</span>
</div>
</footer>
</section>
<!-- END: LeftBrandEnclavePanel -->
<!-- ========================================================================= -->
<!-- BEGIN: RightAuthenticationPanel -->
<!-- ========================================================================= -->
<section class="flex-1 flex flex-col justify-between p-6 sm:p-12 lg:p-14 xl:p-20 bg-white relative overflow-y-auto" data-purpose="user-login-portal">
<!-- Top Sub-Header & Help link -->
<div class="flex justify-end items-center text-xs text-slate-500 mb-6 lg:mb-0">
<span>Need technical assistance?</span>
<a class="ml-1.5 font-semibold text-cvsu-700 hover:text-cvsu-800 hover:underline" href="#helpdesk" style="color: #376ead;">
          CvSU MIS Helpdesk
        </a>
</div>
<!-- Center Wrapper for Login Card/Form -->
<div class="w-full max-w-md mx-auto my-auto py-6" data-purpose="login-form-container">
<!-- Welcome Headings -->
<header class="mb-6">
<h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">
            Welcome back
          </h2>
<p class="mt-1 text-sm text-slate-500">
            Sign in to your secure institutional workspace.
          </p>
</header>
<!-- Status / Alert Notification (Matches Prototype signed-out banner) -->
<div class="mb-6 p-4 bg-emerald-50/90 border border-emerald-500/30 rounded-xl flex items-start gap-3.5 text-emerald-950 shadow-sm relative overflow-hidden" data-purpose="session-status-banner" role="status"><div class="mt-0.5 p-1.5 rounded-lg bg-emerald-100 text-emerald-800 flex-shrink-0 border border-emerald-500/20"><svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" stroke-width="2.2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><div class="flex-1 text-xs pr-6"><div class="flex items-center gap-2 mb-1"><span class="font-bold text-sm text-emerald-950 tracking-tight">Master Password Reset Successful</span><span class="text-[10px] font-mono px-2 py-0.5 bg-emerald-200/70 text-emerald-900 font-semibold rounded">ZERO-TRUST ACTIVE</span></div><p class="text-emerald-800 text-xs leading-relaxed">For zero-trust institutional security compliance, automatic login is disabled following credential rotation. Please enter your new master password to establish an authenticated session.</p></div><button aria-label="Dismiss message" class="absolute top-3 right-3 text-emerald-600 hover:text-emerald-900 p-1 rounded transition" onclick="this.parentElement.remove()" type="button"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path></svg></button></div>
<!-- Authentication Form -->
<form action="#" class="space-y-4" data-purpose="credential-form" method="POST" onsubmit="event.preventDefault();">
<!-- Email Field -->
<div>
<label class="block text-xs font-semibold uppercase tracking-wider text-slate-700 mb-1.5" for="email">
              Institutional Email address
            </label>
<div class="relative rounded-xl shadow-sm">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
<path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</div>
<input class="block w-full pl-10 pr-3.5 py-2.5 text-sm bg-slate-50/50 border border-slate-300 rounded-xl text-slate-900 placeholder-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-cvsu-700 focus:border-cvsu-700 transition" id="email" name="email" placeholder="username@cvsu.edu.ph" required="" type="email" value="j.delacruz@cvsu.edu.ph"/>
<div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"><span class="inline-flex items-center gap-1 text-[10px] font-mono font-semibold bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded border border-emerald-500/20"><svg class="w-3 h-3 text-emerald-700" fill="none" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>Verified ID</span></div></div>
</div>
<!-- Password Field -->
<div>
<div class="flex items-center justify-between mb-1.5">
<label class="block text-xs font-semibold uppercase tracking-wider text-slate-700" for="password">
                Password
              </label>
</div>
<div class="relative rounded-xl shadow-sm">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
<path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</div>
<input autofocus="autofocus" class="block w-full pl-10 pr-10 py-2.5 text-sm bg-slate-50/50 border border-slate-300 rounded-xl text-slate-900 placeholder-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-cvsu-700 focus:border-cvsu-700 transition" id="password" name="password" placeholder="Enter your new master password" required="" type="password"/>
<!-- Password Toggle Button -->
<button aria-label="Toggle password visibility" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none" id="togglePassword" type="button">
<svg class="w-4 h-4" fill="none" id="eyeIcon" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
<path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</button>
</div>
</div>
<!-- Auxiliary Options (Remember Me & Forgot Password) -->
<div class="flex items-center justify-between pt-1">
<div class="flex items-center">
<input class="h-4 w-4 text-cvsu-700 focus:ring-cvsu-600 border-slate-300 rounded cursor-pointer" id="remember_me" name="remember_me" type="checkbox"/>
<label class="ml-2 block text-xs font-medium text-slate-600 cursor-pointer" for="remember_me">
                Remember me
              </label>
</div>
<div class="text-xs">
<a class="font-semibold text-cvsu-700 hover:text-cvsu-800 hover:underline" href="#forgot" style="color: #376ead;">
                Forgot password?
              </a>
</div>
</div>
<!-- Submit Button -->
<button class="w-full mt-3 flex items-center justify-center gap-2 py-3 px-4 border border-transparent rounded-xl shadow-md text-sm font-semibold text-white bg-cvsu-700 hover:bg-cvsu-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cvsu-700 transition-elevate" style="background-color: #173153;" type="submit">
<svg class="w-4 h-4 text-cvsu-gold" fill="none" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24">
<path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
            Sign in
          </button>
</form>
<!-- Access Boundary Notice -->
<div class="mt-4 flex items-center justify-center gap-1.5 text-xs text-slate-500">
<svg class="w-3.5 h-3.5 text-cvsu-600" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
<path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
<span>For authorized CvSU users only.</span>
</div>
<p class="mt-4 text-center text-xs text-slate-600">
          Need an account? 
          <a class="font-semibold text-cvsu-700 hover:text-cvsu-800 hover:underline" href="#admin-contact" style="color: #376ead;">
            Contact your administrator.
          </a>
</p>
<!-- Demo Mode Accordion Box (Faithful to prototype with interactive role switching) -->
<div class="mt-7 border border-dashed border-slate-300 rounded-xl bg-slate-50/70 p-3.5" data-purpose="demo-mode-container">
<button class="w-full flex items-center justify-between text-left text-xs font-semibold text-slate-700 hover:text-cvsu-800 transition" id="demoToggleBtn" type="button">
<span class="flex items-center gap-1.5">
<svg class="w-3.5 h-3.5 text-slate-500 transition-transform duration-200" fill="none" id="demoChevron" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24">
<path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
              Demo mode (frontend only)
            </span>
<span class="text-[10px] px-2 py-0.5 bg-emerald-100 text-emerald-800 font-mono rounded">
              v2.4-preview
            </span>
</button>
<!-- Collapsible Role Pre-fill List -->
<div class="hidden mt-3 pt-3 border-t border-slate-200 grid grid-cols-3 gap-2" id="demoRoleOptions">
<button class="px-2 py-1.5 text-[11px] font-medium text-slate-700 bg-white border border-slate-200 rounded-lg hover:border-cvsu-600 hover:text-cvsu-700 shadow-sm text-center transition" onclick="fillDemoAccount('registrar@cvsu.edu.ph')" type="button">
              Registrar
            </button>
<button class="px-2 py-1.5 text-[11px] font-medium text-slate-700 bg-white border border-slate-200 rounded-lg hover:border-cvsu-600 hover:text-cvsu-700 shadow-sm text-center transition" onclick="fillDemoAccount('dean.engineering@cvsu.edu.ph')" type="button">
              Dean / Chair
            </button>
<button class="px-2 py-1.5 text-[11px] font-medium text-slate-700 bg-white border border-slate-200 rounded-lg hover:border-cvsu-600 hover:text-cvsu-700 shadow-sm text-center transition" onclick="fillDemoAccount('faculty.records@cvsu.edu.ph')" type="button">
              Faculty
            </button>
</div>
</div>
</div>
<!-- Legal and Compliance Footer -->
<footer class="text-center text-[11px] text-slate-400 pt-6 border-t border-slate-100" data-purpose="compliance-copyright"><p class="font-medium text-slate-500">© 2026 DocuSecure · Cavite State University Institutional Workspace</p><p class="mt-0.5 text-[10px] text-slate-400">Data Privacy Act of 2012 (Republic Act No. 10173) &amp; ISO 9001:2015 · Zero-Trust Active</p></footer>
<aside aria-live="polite" class="fixed bottom-6 right-6 z-50 max-w-sm w-full bg-slate-900/95 backdrop-blur-md text-white p-4 rounded-xl shadow-2xl border border-slate-700/80 flex items-start gap-3 transition-transform duration-200" id="credentialNotificationToast"><div class="p-2 bg-cvsu-800 rounded-lg text-cvsu-gold flex-shrink-0 mt-0.5 border border-cvsu-600/50"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewbox="0 0 24 24"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><div class="flex-1 pr-1"><div class="flex items-center justify-between"><h4 class="text-xs font-bold text-white tracking-tight">Credential Rotation Complete</h4><span class="text-[9px] font-mono px-1.5 py-0.5 bg-cvsu-gold/20 text-cvsu-gold-light rounded font-medium border border-cvsu-gold/30">TERMINALS SYNCED</span></div><p class="mt-1 text-xs text-slate-300 leading-normal">Active sessions across campus terminals have been revoked. Re-authenticate to resume clearance.</p><p class="mt-2 text-[10px] font-mono text-slate-400 flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>Docket #RST-2026-CVSU-4410 • Just now</p></div><button aria-label="Dismiss toast" class="text-slate-400 hover:text-white p-1 rounded transition ml-1" onclick="document.getElementById('credentialNotificationToast').remove()" type="button"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path></svg></button></aside></section>
<!-- END: RightAuthenticationPanel -->
</main>
<!-- END: MainContainer -->
<!-- BEGIN: ClientInteractionsScript -->
<script data-purpose="client-interactions">
    // Toggle Password Visibility
    const togglePasswordBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePasswordBtn.addEventListener('click', () => {
      const isPassword = passwordInput.getAttribute('type') === 'password';
      passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
      
      // Update eye icon state
      if (isPassword) {
        eyeIcon.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
        `;
      } else {
        eyeIcon.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        `;
      }
    });

    // Toggle Demo Mode Box
    const demoToggleBtn = document.getElementById('demoToggleBtn');
    const demoRoleOptions = document.getElementById('demoRoleOptions');
    const demoChevron = document.getElementById('demoChevron');

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

    // Populate Demo Account into Email Field
    function fillDemoAccount(emailValue) {
      const emailField = document.getElementById('email');
      const passwordField = document.getElementById('password');
      emailField.value = emailValue;
      passwordField.value = '••••••••••••';
      emailField.focus();
    }
  </script>
<!-- END: ClientInteractionsScript -->
</body></html>

<!-- DocuSecure - Session Expired / Timeout Modal -->
