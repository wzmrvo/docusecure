<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DocuSecure — Cavite State University Institutional Workspace</title>
<!-- Google Fonts & Material Symbols -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS v3 with Plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {theme: {extend: {colors: {portal: {navy: "#173153", "navy-dark": "#0f223a", "navy-light": "#1f3f69", "navy-accent": "#2d5386", gold: "#eabf55", "gold-light": "#fdf2d0", "gold-dark": "#c89e35"}, "on-surface-variant": "#c0c9c1", "on-error": "#690005", "on-secondary": "#23342a", "surface-container-high": "#282b28", "surface-container": "#1e201e", "surface-tint": "#9fd2b4", primary: "#9fd2b4", background: "#111412", "on-secondary-fixed-variant": "#394b40", "surface-dim": "#111412", "secondary-fixed": "#d3e8d9", "secondary-container": "#3b4d42", "inverse-surface": "#e2e3df", "on-background": "#e2e3df", "primary-fixed-dim": "#9fd2b4", "surface-variant": "#333533", "on-secondary-container": "#a9bdaf", "tertiary-fixed": "#dce1ff", "surface-bright": "#373a37", "secondary-fixed-dim": "#b7cbbd", "primary-container": "#14452f", "on-surface": "#e2e3df", surface: "#111412", "inverse-primary": "#39684f", "on-primary": "#033823", "on-tertiary": "#242e54", "outline-variant": "#414943", "error-container": "#93000a", "surface-container-low": "#191c1a", "inverse-on-surface": "#2e312f", tertiary: "#bbc5f3", "on-primary-fixed-variant": "#204f39", "on-secondary-fixed": "#0e1f16", "surface-container-lowest": "#0c0f0d", "tertiary-container": "#313b61", outline: "#8b938c", "surface-container-highest": "#333533", "primary-fixed": "#bbeecf", secondary: "#b7cbbd", "on-tertiary-fixed": "#0e193d", "on-tertiary-container": "#9ca6d2", "tertiary-fixed-dim": "#bbc5f3", "on-primary-container": "#81b296", "on-tertiary-fixed-variant": "#3b456b", "on-error-container": "#ffdad6", error: "#ffb4ab", "on-primary-fixed": "#002113"}, fontFamily: {sans: ["\"Plus Jakarta Sans\"", "sans-serif"], mono: ["\"JetBrains Mono\"", "monospace"], headline: ["Inter"], display: ["Inter"], body: ["Inter"], label: ["JetBrains Mono"]}, fontSize: {}, borderRadius: {DEFAULT: "0.125rem", lg: "0.25rem", xl: "0.5rem", full: "0.75rem"}}}}
  </script>
<!-- BEGIN: Custom Micro-Styles -->
<style data-purpose="custom-backgrounds-and-patterns">
    [data-purpose="user-login-portal"] .bg-white,
    [data-purpose="user-login-portal"] [class*="bg-slate-50"],
    [data-purpose="user-login-portal"] [class*="border-slate-"] {
      background-color: #101827 !important;
      border-color: #334155 !important;
    }
    .bg-security-grid {
      background-size: 32px 32px;
      background-image: 
        linear-gradient(to right, rgba(234, 191, 85, 0.05) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(234, 191, 85, 0.05) 1px, transparent 1px);
    }
    
    .card-security-shadow {
      box-shadow: 0 20px 50px -12px rgba(15, 34, 58, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.1);
    }

    .transition-elevate {
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .transition-elevate:hover {
      transform: translateY(-1px);
    }
  </style>
<!-- END: Custom Micro-Styles -->
<meta content="web_standard" name="shell-type"/></head>
<body class="bg-[#0b1322] text-slate-100 font-sans antialiased min-h-screen selection:bg-amber-400 selection:text-slate-900">
<!-- BEGIN: MainContainer -->
<main class="min-h-screen w-full flex flex-col lg:flex-row relative overflow-hidden" data-purpose="authentication-split-layout">
<!-- ========================================================================= -->
<!-- LEFT PANEL: Institutional Sovereign Security Showcase (Deep Navy Blue #173153 to #0f223a) -->
<!-- ========================================================================= -->
<section class="lg:w-5/12 xl:w-1/2 text-white relative flex flex-col justify-between p-8 sm:p-12 lg:p-14 xl:p-16 overflow-hidden border-r border-slate-800/40" style="background: linear-gradient(145deg, #173153 0%, #112642 55%, #0f223a 100%);">
<!-- Subtle Cyber Matrix & Radial Glow Elements -->
<div class="absolute inset-0 bg-security-grid pointer-events-none opacity-70"></div>
<div class="absolute -top-32 -left-32 w-96 h-96 pointer-events-none rounded-full blur-3xl opacity-30" style="background: radial-gradient(circle, #376ead 0%, rgba(23,49,83,0) 70%);"></div>
<div class="absolute bottom-10 right-0 w-[420px] h-[420px] rounded-full blur-3xl pointer-events-none opacity-20" style="background: radial-gradient(circle, #eabf55 0%, rgba(15,34,58,0) 70%);"></div>
<!-- Top University & System Identity -->
<div class="relative z-10">
<header class="flex items-center gap-3.5" data-purpose="university-identity-header">
<!-- CvSU Logo -->
<img alt="CvSU Logo" class="h-12 w-12 object-contain sm:h-14 sm:w-14" src="{{ asset('images/cvsu-logo.png') }}" />
<!-- Brand Typography -->
<div>
<div class="flex items-center gap-2">
<span class="text-2xl font-bold tracking-tight text-white flex items-center gap-1.5">
<span class="material-symbols-outlined text-portal-gold text-2xl" style="font-variation-settings: 'FILL' 1;">shield</span>
            DocuSecure
          </span>
<span class="text-[10px] uppercase font-mono tracking-widest px-2 py-0.5 rounded bg-portal-gold/20 text-portal-gold border border-portal-gold/40 font-bold">
            OFFICIAL
          </span>
</div>
<p class="text-xs text-slate-300 font-medium tracking-wide mt-0.5">Cavite State University • Electronic Document Hub</p>
</div>
</header>
<!-- Main Narrative & Value Statement -->
<div class="mt-12 xl:mt-16 max-w-xl">
<!-- Security Eyebrow Tag -->
<div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-slate-900/60 border border-portal-gold/40 text-portal-gold text-xs font-semibold uppercase tracking-wider mb-6 shadow-sm backdrop-blur-sm">
<span class="w-2 h-2 rounded-full bg-portal-gold animate-pulse"></span>
        SECURITY-FIRST DESIGN
      </div>
<h1 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold tracking-tight text-white leading-[1.15]">
        Your documents.<br/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-portal-gold to-yellow-200">
          Protected at every step.
        </span>
</h1>
<p class="mt-5 text-sm sm:text-base text-slate-200/90 leading-relaxed max-w-lg font-normal">
        One trusted workspace to organize your institution’s knowledge, verify clearances, and strictly control who can access it.
      </p>
</div>
<!-- Security Graphic Visual Card (Matching Screen 4) -->
<div class="mt-10 xl:mt-12 relative flex items-center" data-purpose="interactive-security-illustration">
<!-- Visual Card Frame -->
<div class="w-72 sm:w-80 h-44 rounded-2xl bg-portal-navy-dark/90 border border-slate-700/60 backdrop-blur-md card-security-shadow p-5 relative overflow-hidden transition-elevate flex flex-col justify-between">
<div>
<!-- Document skeleton preview bars -->
<div class="w-16 h-2 rounded bg-portal-gold/60 mb-3"></div>
<div class="w-full h-2 rounded bg-slate-600/50 mb-2"></div>
<div class="w-4/5 h-2 rounded bg-slate-600/40 mb-2"></div>
<div class="w-3/5 h-2 rounded bg-slate-600/30 mb-3"></div>
</div>
<div class="flex items-center gap-2 pt-2 border-t border-slate-700/50">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span class="text-[11px] font-mono text-slate-300 tracking-tight font-medium">ENCRYPTED_SHA256</span>
</div>
<!-- Floating Verified Padlock Card -->
<div class="absolute -right-3 -bottom-3 w-32 h-32 sm:w-36 sm:h-36 bg-gradient-to-br from-amber-400 via-portal-gold to-amber-600 rounded-3xl p-1 shadow-2xl rotate-6 flex items-center justify-center border-4 border-slate-900 group">
<div class="w-full h-full bg-gradient-to-br from-amber-300 via-portal-gold to-amber-500 rounded-2xl flex flex-col items-center justify-center text-slate-900 shadow-inner">
<span class="material-symbols-outlined text-4xl text-slate-900" style="font-variation-settings: 'FILL' 1;">lock</span>
<span class="text-[9px] font-black tracking-widest uppercase mt-1 text-slate-950">VERIFIED</span>
</div>
</div>
</div>
<!-- Compliance Mini Badge Pills -->
<div class="hidden sm:flex flex-col gap-2.5 ml-6">
<div class="px-3.5 py-2 rounded-lg bg-portal-navy-dark/80 border border-slate-700/70 text-xs text-slate-200 flex items-center gap-2 backdrop-blur-md shadow-sm">
<span class="material-symbols-outlined text-portal-gold text-base font-bold">check</span>
<span>Role-Based Access (RBAC)</span>
</div>
<div class="px-3.5 py-2 rounded-lg bg-portal-navy-dark/80 border border-slate-700/70 text-xs text-slate-200 flex items-center gap-2 backdrop-blur-md shadow-sm">
<span class="material-symbols-outlined text-portal-gold text-base font-bold">check</span>
<span>Automated Audit Trail</span>
</div>
<div class="px-3.5 py-2 rounded-lg bg-portal-navy-dark/80 border border-slate-700/70 text-xs text-slate-200 flex items-center gap-2 backdrop-blur-md shadow-sm">
<span class="material-symbols-outlined text-portal-gold text-base font-bold">check</span>
<span>RA 10173 Privacy Compliance</span>
</div>
</div>
</div>
</div>
<!-- Bottom Left Sovereign Statement Footer -->
<footer class="relative z-10 pt-8 mt-12 border-t border-slate-700/60" data-purpose="institutional-security-footer">
<div class="flex items-center justify-between text-xs text-slate-300">
<div class="flex items-center gap-2">
<span class="text-portal-gold font-bold uppercase tracking-wider">SECURITY GOALS:</span>
<span class="text-slate-300">encrypted storage • role-based access • full audit trail</span>
</div>
<span class="font-mono text-slate-400 text-[11px] hidden sm:inline">v2.4.9_PROD</span>
</div>
</footer>
</section>
<!-- ========================================================================= -->
<!-- RIGHT PANEL: Crisp White 2FA Verification Flow -->
<!-- ========================================================================= -->
<section class="lg:w-7/12 xl:w-1/2 bg-[#0b1322] text-slate-100 flex flex-col justify-between p-6 sm:p-10 lg:p-12 xl:p-16 relative overflow-y-auto" data-purpose="user-login-portal">
<!-- Top Utility Header Navigation -->
<div class="w-full max-w-xl mx-auto flex items-center justify-between text-xs text-slate-600 mb-6">
<a class="inline-flex items-center gap-1.5 font-semibold text-portal-navy hover:text-portal-navy-light transition-colors group" href="{{ url("/") }}">
<span class="material-symbols-outlined text-base group-hover:-translate-x-0.5 transition-transform">arrow_back</span>
<span>Return to credential sign-in</span>
</a>
<div class="flex items-center gap-1.5">
<span class="text-slate-500">Need technical assistance?</span>
<a class="font-semibold text-portal-navy hover:underline" href="{{ url("/") }}">CvSU MIS Helpdesk</a>
</div>
</div>
<!-- Center Card Container -->
<div class="w-full max-w-xl mx-auto my-auto py-4">
<!-- Verification Card Frame -->
<div class="bg-[#101827] border border-slate-700/70 rounded-2xl shadow-2xl shadow-black/20 p-6 sm:p-9 relative">
<!-- Card Header: Authenticator Icon & Step -->
<div class="flex items-start gap-4 mb-5">
<div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-portal-navy flex-shrink-0 shadow-sm">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">phonelink_lock</span>
</div>
<div>
<span class="text-[11px] font-bold tracking-wider text-portal-navy-accent uppercase bg-slate-100 px-2.5 py-0.5 rounded border border-slate-200 inline-block mb-1">
            INSTITUTIONAL 2FA STEP
          </span>
<h2 class="text-2xl font-bold tracking-tight text-slate-900">Two-Factor Authentication</h2>
</div>
</div>
<p class="text-sm text-slate-600 leading-relaxed mb-6">
        Enter the 6-digit cryptographic verification code sent to your registered institutional mobile or generated by your <strong class="text-slate-800 font-semibold">CvSU Authenticator app</strong>.
      </p>
<!-- Target Identity Chip -->
<div class="mb-5 p-3.5 rounded-xl border border-red-300 bg-red-50 text-red-900 flex items-start gap-3 shadow-sm" role="alert" style="background-color: #fef2f2; border-color: #fca5a5;"><span class="material-symbols-outlined text-red-600 text-xl flex-shrink-0 mt-0.5" style="font-variation-settings: 'FILL' 1;">error</span><div class="flex flex-col gap-0.5"><div class="flex items-center justify-between"><span class="text-xs font-bold text-red-950 uppercase tracking-wide">Invalid Verification Code</span><span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-red-100 text-red-700 border border-red-200">Attempt 1 of 5</span></div><p class="text-xs text-red-700 leading-relaxed">The 6-digit access token entered is incorrect or has expired. Please check your CvSU Authenticator app and try again.</p></div></div><div class="bg-slate-50 border border-slate-200 rounded-xl p-3 flex items-center justify-between mb-6 shadow-sm">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-portal-navy text-xl">fingerprint</span>
<div class="flex flex-col">
<span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Target Identity</span>
<span class="font-mono text-xs font-semibold text-slate-800">••••••••8492 (@cvsu.edu.ph)</span>
</div>
</div>
<div class="flex items-center gap-1.5 bg-emerald-50 border border-emerald-200/60 px-2.5 py-1 rounded-md">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600 animate-pulse"></span>
<span class="text-[11px] font-bold text-emerald-800 uppercase tracking-wider">Time-based OTP</span>
</div>
</div>
<!-- 6-Digit Code Inputs -->
<div class="mb-5">
<label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2.5">6-Digit Access Token</label>
<div class="grid grid-cols-6 gap-2 sm:gap-3" id="otp-container"><input aria-invalid="true" class="w-full h-14 text-center font-mono text-2xl font-bold rounded-xl border-2 text-slate-900 focus:outline-none transition-all shadow-sm" maxlength="1" style="border-color: #dc2626; background-color: #fff5f5;" type="text" value="4"/><input aria-invalid="true" class="w-full h-14 text-center font-mono text-2xl font-bold rounded-xl border-2 text-slate-900 focus:outline-none transition-all shadow-sm" maxlength="1" style="border-color: #dc2626; background-color: #fff5f5;" type="text" value="8"/><input aria-invalid="true" class="w-full h-14 text-center font-mono text-2xl font-bold rounded-xl border-2 text-slate-900 focus:outline-none transition-all shadow-sm" maxlength="1" style="border-color: #dc2626; background-color: #fff5f5;" type="text" value="2"/><input aria-invalid="true" class="w-full h-14 text-center font-mono text-2xl font-bold rounded-xl border-2 text-slate-900 focus:outline-none transition-all shadow-sm" maxlength="1" style="border-color: #dc2626; background-color: #fff5f5;" type="text" value="9"/><input aria-invalid="true" class="w-full h-14 text-center font-mono text-2xl font-bold rounded-xl border-2 text-slate-900 focus:outline-none transition-all shadow-sm" maxlength="1" style="border-color: #dc2626; background-color: #fff5f5;" type="text" value="1"/><input aria-invalid="true" autofocus="" class="w-full h-14 text-center font-mono text-2xl font-bold rounded-xl border-2 text-slate-900 focus:outline-none focus:ring-2 transition-all shadow-md" maxlength="1" style="border-color: #dc2626; background-color: #fff5f5;" type="text" value="0"/></div><div class="flex items-center gap-1.5 mt-2.5 text-xs font-medium text-red-600"><span class="material-symbols-outlined text-sm flex-shrink-0 text-red-600" style="font-variation-settings: 'FILL' 1;">error</span><span>Incorrect verification code. <span id="otpAttemptsRemaining">4</span> attempts remaining before temporary clearance lockout.</span></div>
<!-- Resend Countdown Row -->
<div class="flex items-center justify-between mt-3 text-xs">
<div class="flex items-center gap-1.5 text-slate-600">
<span class="material-symbols-outlined text-sm text-slate-500">schedule</span>
<span>Didn't receive a code?</span>
<span class="font-mono font-bold text-portal-navy" id="countdown">Resend in 0:39</span>
</div>
<button class="font-semibold text-portal-navy hover:underline transition-colors" type="button">
            Send via SMS instead
          </button>
</div>
</div>
<!-- Trust Institutional Device Checkbox -->
<div class="flex items-start gap-2.5 p-3 rounded-xl bg-slate-50 border border-slate-200 mb-6">
<input checked="" class="w-4 h-4 mt-0.5 rounded text-portal-navy border-slate-300 focus:ring-portal-navy cursor-pointer" id="trust-device" name="trust-device" type="checkbox"/>
<div class="flex flex-col">
<label class="text-xs font-bold text-slate-800 cursor-pointer" for="trust-device">
            Trust this institutional device for 30 days
          </label>
<span class="text-xs text-slate-500 leading-normal">Recommended only for personal or assigned administrative workstations.</span>
</div>
</div>
<!-- Primary Action CTA Button (Deep Navy Matching SCREEN_4) -->
<button id="retryOtpBtn" class="w-full py-3.5 px-4 rounded-xl text-white font-bold text-sm tracking-wide flex items-center justify-center gap-2 transition-elevate shadow-md" style="background-color: #173153;" type="button">
<span class="material-symbols-outlined text-lg" style="font-variation-settings: 'FILL' 1;">security_update_good</span>
<span>Verify &amp; Enter Workspace</span>
</button>
<!-- Alternative Methods & Links -->
<div class="mt-4 pt-3 flex flex-col gap-1.5">
<button class="w-full py-2 px-3 rounded-lg text-xs font-medium text-slate-700 hover:bg-slate-100 hover:text-slate-900 flex items-center justify-center gap-2 transition-colors" type="button">
<span class="material-symbols-outlined text-base text-slate-500">vpn_key</span>
<span>Use backup security key (FIDO2 / WebAuthn)</span>
</button>
<button class="w-full py-2 px-3 rounded-lg text-xs font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-800 flex items-center justify-center gap-2 transition-colors" type="button">
<span class="material-symbols-outlined text-base text-slate-500">emergency_home</span>
<span>Enter emergency clearance bypass code</span>
</button>
</div>
<!-- Security Stamp Footnote -->
<div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-center gap-1.5 text-center text-[11px] text-slate-500">
<span class="material-symbols-outlined text-xs text-slate-600">lock</span>
<span>Protected by 256-bit encryption • RA 10173 Compliant • CvSU Cybersecurity Operations</span>
</div>
</div>
<!-- Demo Mode / Preview Accordion Drawer -->
<div class="mt-4 border border-dashed border-slate-300 rounded-xl bg-slate-50/70 p-3.5">
<div class="flex items-center justify-between cursor-pointer" id="demoToggle">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-slate-600 text-sm">terminal</span>
<span class="font-mono text-xs font-semibold text-slate-700">DEMO CONTEXT - v2.4-preview</span>
</div>
<span class="material-symbols-outlined text-slate-500 text-sm transition-transform" id="demoChevron">expand_more</span>
</div>
<div class="hidden mt-3 pt-3 border-t border-slate-200 flex flex-col gap-2 font-mono text-xs text-slate-600" id="demoContent">
<div class="flex justify-between items-center">
<span>SIMULATED TEST CODE:</span>
<code class="text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded font-bold border border-emerald-200">482-901</code>
</div>
<button class="bg-white hover:bg-slate-100 text-slate-800 py-1.5 px-3 rounded-lg border border-slate-200 font-sans text-xs font-medium text-left flex items-center justify-between transition-colors shadow-sm" id="fillDemoOtp" type="button">
<span>Fill Test Code (482901)</span>
<span class="material-symbols-outlined text-sm text-slate-500">input</span>
</button>
</div>
</div>
</div>
<!-- Bottom Legal and Compliance Footer -->
<footer class="w-full max-w-xl mx-auto pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-1 text-[11px] text-slate-500">
<p>© 2026 DocuSecure · Cavite State University</p>
<p class="text-right">Data Privacy Act of 2012 (RA 10173) Certified Environment</p>
</footer>
</section>
</main>
<!-- END: MainContainer -->
<!-- Client Interactions Script -->
<script>
  // OTP Input autofocus & keyboard navigation
  const inputs = document.querySelectorAll('#otp-container input');
  inputs.forEach((input, index) => {
    input.addEventListener('input', (e) => {
      if (e.target.value.length === 1 && index < inputs.length - 1) {
        inputs[index + 1].focus();
      }
    });

    input.addEventListener('keydown', (e) => {
      if (e.key === 'Backspace' && !e.target.value && index > 0) {
        inputs[index - 1].focus();
      }
    });
  });

  // Demo Drawer Expand/Collapse
  const demoToggle = document.getElementById('demoToggle');
  const demoContent = document.getElementById('demoContent');
  const demoChevron = document.getElementById('demoChevron');

  if (demoToggle) {
    demoToggle.addEventListener('click', () => {
      const isHidden = demoContent.classList.contains('hidden');
      if (isHidden) {
        demoContent.classList.remove('hidden');
        demoChevron.textContent = 'expand_less';
      } else {
        demoContent.classList.add('hidden');
        demoChevron.textContent = 'expand_more';
      }
    });
  }

  // Pre-fill demo OTP code button
  const fillDemoOtpBtn = document.getElementById('fillDemoOtp');
  if (fillDemoOtpBtn) {
    fillDemoOtpBtn.addEventListener('click', () => {
      const demoDigits = ['4', '8', '2', '9', '0', '1'];
      inputs.forEach((input, idx) => {
        input.value = demoDigits[idx] || '';
      });
      inputs[inputs.length - 1].focus();
    });
  }

  // Countdown timer simulation
  let timeLeft = 39;
  const countdownEl = document.getElementById('countdown');
  if (countdownEl) {
    const timer = setInterval(() => {
      if (timeLeft <= 0) {
        clearInterval(timer);
        countdownEl.textContent = 'Code expired. Request new OTP';
      } else {
        timeLeft -= 1;
        const formatted = timeLeft < 10 ? '0' + timeLeft : timeLeft;
        countdownEl.textContent = 'Resend in 0:' + formatted;
      }
    }, 1000);
  }
</script>

<script src="{{ asset('js/docusecure-auth-demo.js') }}" defer></script>
</body></html>