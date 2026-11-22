<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DocuSecure — Account Temporarily Locked | Cavite State University</title>
<!-- Google Fonts & Material Symbols -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS v3 with Plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {theme: {extend: {colors: {portal: {navy: "#173153", "navy-dark": "#0c1a2d", "navy-light": "#1e3d67", "navy-accent": "#2d5386", gold: "#eabf55", "gold-light": "#fdf3d7", "gold-dark": "#c89e35"}, "on-surface-variant": "#c0c9c1", "on-error": "#690005", "on-secondary": "#23342a", "surface-container-high": "#282b28", "surface-container": "#1e201e", "surface-tint": "#9fd2b4", primary: "#9fd2b4", background: "#111412", "on-secondary-fixed-variant": "#394b40", "surface-dim": "#111412", "secondary-fixed": "#d3e8d9", "secondary-container": "#3b4d42", "inverse-surface": "#e2e3df", "on-background": "#e2e3df", "primary-fixed-dim": "#9fd2b4", "surface-variant": "#333533", "on-secondary-container": "#a9bdaf", "tertiary-fixed": "#dce1ff", "surface-bright": "#373a37", "secondary-fixed-dim": "#b7cbbd", "primary-container": "#14452f", "on-surface": "#e2e3df", surface: "#111412", "inverse-primary": "#39684f", "on-primary": "#033823", "on-tertiary": "#242e54", "outline-variant": "#414943", "error-container": "#93000a", "surface-container-low": "#191c1a", "inverse-on-surface": "#2e312f", tertiary: "#bbc5f3", "on-primary-fixed-variant": "#204f39", "on-secondary-fixed": "#0e1f16", "surface-container-lowest": "#0c0f0d", "tertiary-container": "#313b61", outline: "#8b938c", "surface-container-highest": "#333533", "primary-fixed": "#bbeecf", secondary: "#b7cbbd", "on-tertiary-fixed": "#0e193d", "on-tertiary-container": "#9ca6d2", "tertiary-fixed-dim": "#bbc5f3", "on-primary-container": "#81b296", "on-tertiary-fixed-variant": "#3b456b", "on-error-container": "#ffdad6", error: "#ffb4ab", "on-primary-fixed": "#002113"}, fontFamily: {sans: ["\"Plus Jakarta Sans\"", "sans-serif"], mono: ["\"JetBrains Mono\"", "monospace"], headline: ["Inter"], display: ["Inter"], body: ["Inter"], label: ["JetBrains Mono"]}, fontSize: {}, borderRadius: {DEFAULT: "0.125rem", lg: "0.25rem", xl: "0.5rem", full: "0.75rem"}}}}
  </script>
<!-- Micro-Styles -->
<style data-purpose="custom-backgrounds-and-patterns">
    .bg-security-grid {
      background-size: 32px 32px;
      background-image: 
        linear-gradient(to right, rgba(234, 191, 85, 0.07) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(234, 191, 85, 0.07) 1px, transparent 1px);
    }
    
    .card-security-shadow {
      box-shadow: 0 16px 36px -10px rgba(12, 26, 45, 0.35), 0 0 0 1px rgba(255, 255, 255, 0.1);
    }
  </style>
<meta content="web_standard" name="shell-type"/>
</head>
<body class="bg-slate-100 text-slate-800 font-sans antialiased min-h-screen selection:bg-amber-400 selection:text-slate-900">
<!-- BEGIN: MainContainer -->
<main class="min-h-screen w-full flex flex-col lg:flex-row relative" data-purpose="authentication-split-layout">
<!-- LEFT PANEL: Institutional Midnight Navy Security Showcase -->
<aside class="w-full lg:w-5/12 bg-portal-navy-dark text-slate-100 p-8 sm:p-10 lg:p-14 flex flex-col justify-between relative overflow-hidden bg-security-grid border-b lg:border-b-0 lg:border-r border-slate-800">
<!-- Ambient Glow Behind Elements -->
<div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-portal-gold/10 blur-3xl pointer-events-none"></div>
<div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-blue-500/10 blur-3xl pointer-events-none"></div>
<!-- Top Section: Header & Identity -->
<div class="relative z-10">
<div class="flex items-center gap-3.5 mb-10">
<div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl border border-amber-300/50 bg-white/10 flex items-center justify-center text-amber-300 text-xs font-extrabold tracking-widest" aria-label="CvSU logo placeholder">CvSU</div>
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="text-xl font-bold text-white tracking-tight">DocuSecure</span>
<span class="px-2 py-0.5 rounded bg-portal-gold text-slate-950 font-bold text-xs uppercase tracking-wider">Official</span>
</div>
<p class="text-slate-300 text-xs font-medium tracking-wide">Cavite State University • Electronic Document Hub</p>
</div>
</div>
<div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-portal-navy-light/60 border border-slate-700/60 text-portal-gold text-xs font-semibold uppercase tracking-wider mb-6">
<span class="material-symbols-outlined text-sm text-portal-gold">verified_user</span>
        SECURITY-FIRST DESIGN
      </div>
<h1 class="text-3xl sm:text-4xl font-extrabold text-white mb-4 leading-tight tracking-tight">
        Your documents.<br/>
<span class="text-portal-gold">Protected at every step.</span>
</h1>
<p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-md mb-8">
        The central cryptographic repository for confidential academic records, faculty tenure clearances, and administrative transcripts under zero-trust surveillance.
      </p>
<!-- Encrypted Document Card Showcase -->
<div class="bg-portal-navy/80 border border-slate-700/80 backdrop-blur-md rounded-xl p-5 shadow-xl card-security-shadow max-w-md relative">
<div class="flex items-center justify-between pb-3.5 mb-3.5 border-b border-slate-700/70">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-portal-gold/15 border border-portal-gold/30 flex items-center justify-center text-portal-gold">
<span class="material-symbols-outlined text-xl">description</span>
</div>
<div class="flex flex-col">
<span class="text-xs sm:text-sm font-semibold text-white font-mono">BOR_RES_2026_094.pdf.enc</span>
<span class="text-xs text-slate-300 font-mono">SHA-256: 7f3a...d9e2</span>
</div>
</div>
<span class="px-2.5 py-1 rounded bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-xs font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-xs">lock</span>
            VERIFIED
          </span>
</div>
<div class="space-y-2.5 text-xs sm:text-sm text-slate-200">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-base text-emerald-400">check_circle</span>
<span>Role-Based Access Control (RBAC) Enforced</span>
</div>
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-base text-emerald-400">check_circle</span>
<span>Immutable Automated Audit Logging Active</span>
</div>
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-base text-emerald-400">check_circle</span>
<span>RA 10173 (Data Privacy Act of 2012) Certified</span>
</div>
</div>
</div>
</div>
<!-- Bottom Panel Metadata -->
<div class="relative z-10 pt-8 mt-8 border-t border-slate-800">
<div class="flex items-center justify-between text-slate-300 text-xs font-medium">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-portal-gold animate-pulse"></span>
<span class="text-white font-semibold">SYSTEM INTEGRITY: RESTRICTED</span>
</div>
<span class="text-slate-400 font-mono">v2.4.9_PROD</span>
</div>
<p class="font-mono text-xs text-slate-400 mt-1 uppercase tracking-wider">
        encrypted storage • role-based access • full audit trail
      </p>
</div>
</aside>
<!-- RIGHT PANEL: Elevated Institutional Lockout Container -->
<section class="w-full lg:w-7/12 bg-slate-50 flex flex-col justify-between p-4 sm:p-8 lg:p-12 relative overflow-y-auto">
<!-- Top Utility Navigation -->
<header class="w-full max-w-2xl mx-auto flex items-center justify-between mb-6 pb-2">
<div class="flex items-center gap-2 bg-rose-50 text-rose-800 border border-rose-200 px-3 py-1 rounded-full shadow-sm">
<span class="w-2 h-2 rounded-full bg-rose-600 animate-ping"></span>
<span class="text-xs uppercase tracking-wider font-bold">Incident Node Active</span>
</div>
<nav class="flex items-center gap-4 text-xs sm:text-sm font-semibold text-slate-600">
<a class="text-slate-600 hover:text-portal-navy transition-colors flex items-center gap-1 font-medium" href="{{ url("/") }}">
<span class="material-symbols-outlined text-base">arrow_back</span>
          Return to sign-in
        </a>
<span class="text-slate-300">|</span>
<a class="text-portal-navy hover:text-portal-navy-light transition-colors flex items-center gap-1 font-semibold" href="mailto:mis@cvsu.edu.ph">
<span class="material-symbols-outlined text-base">headset_mic</span>
          CvSU MIS Helpdesk
        </a>
</nav>
</header>
<!-- Center Lockout Dossier Module (White Elevated Institutional Card) -->
<div class="w-full max-w-2xl mx-auto my-auto bg-white rounded-2xl shadow-xl border border-slate-200/90 p-6 sm:p-9 relative">
<!-- Header Incident Badge & Title -->
<div class="flex flex-col sm:flex-row sm:items-start gap-4 mb-5">
<div class="w-13 h-13 sm:w-14 sm:h-14 rounded-xl bg-rose-100 text-rose-700 border border-rose-200 flex-shrink-0 flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-3xl">gpp_bad</span>
</div>
<div class="flex-1">
<div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-rose-50 text-rose-700 border border-rose-200 text-xs font-bold tracking-wider uppercase mb-1.5">
<span class="material-symbols-outlined text-xs">warning</span>
            SECURITY PROTOCOL • LOCKOUT TRIGGERED
          </div>
<h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Account Temporarily Locked</h2>
</div>
</div>
<!-- Clear Policy Explanation -->
<div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 mb-6 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3"><div class="flex items-start gap-3"><div class="w-9 h-9 rounded-lg bg-emerald-100 border border-emerald-200 text-emerald-700 flex-shrink-0 flex items-center justify-center mt-0.5 sm:mt-0"><span class="material-symbols-outlined text-xl text-emerald-600">check_circle</span></div><div><div class="flex items-center gap-2 flex-wrap"><h3 class="text-sm font-bold text-emerald-950">Unlock Request Submitted to CvSU MIS Desk</h3><span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 border border-emerald-300 text-xs font-semibold uppercase tracking-wider">In Review</span></div><p class="text-xs text-emerald-900 mt-1 leading-relaxed">Ticket Docket: <strong class="font-mono text-emerald-950 font-bold">INC-2026-CVSU-88219A</strong> • Submitted just now. An MIS security officer is reviewing your identity clearance. Estimated resolution: 5–15 mins.</p></div></div><div class="flex items-center gap-1.5 self-start sm:self-auto px-2.5 py-1 rounded bg-white/80 border border-emerald-200 text-xs font-medium text-emerald-800"><span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span><span>Pending MIS Audit</span></div></div><p class="text-sm text-slate-600 mb-6 leading-relaxed">
        Too many consecutive failed authentication attempts were detected for this account. To protect institutional documents, grade matrices, and clearance integrity, access has been automatically suspended in accordance with <span class="font-semibold text-slate-800">CvSU Cybersecurity Directive 04–2024</span>.
      </p>
<!-- Active Cooling-Off Countdown Timer Module -->
<div class="bg-amber-50/80 border border-amber-200/90 rounded-xl p-4 sm:p-5 mb-6 shadow-sm">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-3">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-amber-100 text-amber-800 flex items-center justify-center border border-amber-300/50">
<span class="material-symbols-outlined text-2xl animate-spin" style="animation-duration: 6s;">timer</span>
</div>
<div>
<span class="text-xs uppercase tracking-wider text-amber-800 font-bold block">Mandatory Isolation Window</span>
<div class="text-lg sm:text-xl text-slate-900 font-mono font-bold" id="lockoutTimerDisplay">
                Lockout expires in: <span class="text-portal-navy bg-white px-2 py-0.5 rounded border border-amber-300/80 ml-1 font-extrabold" id="countdownClock">14:57</span>
</div>
</div>
</div>
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-amber-100/90 text-amber-900 border border-amber-300 font-bold text-xs self-start sm:self-auto uppercase tracking-wide">
<span class="material-symbols-outlined text-sm text-amber-700">lock_clock</span>
            Cooling-Off Active
          </div>
</div>
<!-- Animated Visual Progress Rail -->
<div class="w-full bg-amber-200/70 h-2.5 rounded-full overflow-hidden mb-2.5">
<div class="h-full bg-amber-500 rounded-full transition-all duration-1000 ease-linear shadow-inner" id="coolingOffProgress" style="width: 82%;"></div>
</div>
<p class="text-xs text-amber-900/90 flex items-center gap-1.5 font-medium">
<span class="material-symbols-outlined text-base text-amber-700 flex-shrink-0">info</span>
          Inputs are temporarily disabled until the timer elapses. Do not repeatedly attempt sign-in to avoid an extended 60-minute suspension.
        </p>
</div>
<!-- Incident & Target Identity Telemetry Card -->
<div class="bg-slate-50 border border-slate-200 rounded-xl p-4 sm:p-5 mb-6">
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<div class="space-y-1">
<span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Target Identity</span>
<div class="text-xs sm:text-sm font-mono font-semibold text-slate-900 flex items-center gap-1.5">
<span>j.delacruz@cvsu.edu.ph</span>
<span class="text-slate-400">/</span>
<span class="text-amber-700 font-bold">••••••••8492</span>
</div>
</div>
<div class="space-y-1">
<span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Security Status</span>
<div class="text-xs sm:text-sm font-mono font-bold text-rose-700 flex items-center gap-1.5">
<span class="material-symbols-outlined text-base">block</span>
              LOCKED OUT (5 of 5 attempts exceeded)
            </div>
</div>
<div class="space-y-1">
<span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Incident Docket Reference</span>
<div class="text-xs sm:text-sm font-mono font-semibold text-portal-navy flex items-center gap-1.5">
<span class="material-symbols-outlined text-base text-portal-navy">receipt_long</span>
              INC-2026-CVSU-88219A
            </div>
</div>
<div class="space-y-1">
<span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Captured Origin Node</span>
<div class="text-xs sm:text-sm font-mono font-semibold text-slate-800 flex items-center gap-1.5">
<span class="material-symbols-outlined text-base text-slate-500">dns</span>
              Indang Main Campus Node [10.24.11.89]
            </div>
</div>
</div>
</div>
<!-- Disabled / Blocked Input State Notice -->
<div class="bg-slate-100/90 border border-slate-200 rounded-lg p-3.5 mb-6 flex items-start gap-3">
<span class="material-symbols-outlined text-slate-500 text-xl mt-0.5 flex-shrink-0">do_not_disturb_on</span>
<div class="space-y-0.5">
<div class="text-xs sm:text-sm font-semibold text-slate-800">Credentials &amp; 2FA Input Tokens Suspended</div>
<p class="text-xs text-slate-600 leading-normal">
            WebAuthn biometrics, institutional passwords, and TOTP verification nodes are temporarily rejected by the proxy firewall.
          </p>
</div>
</div>
<!-- Administrative Resolution & Unlock Actions (Clear Hierarchy) -->
<div class="space-y-3 mb-2">
<div class="flex flex-col sm:flex-row gap-3">
<!-- Primary Action Button: Navy with white text -->
<div class="flex-1 px-4 py-2.5 rounded-lg bg-portal-navy/10 border border-portal-navy/30 flex items-center justify-between gap-2" id="unlockInProgressBanner"><div class="flex items-center gap-2.5 min-w-0"><span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-ping flex-shrink-0"></span><div class="flex flex-col min-w-0"><span class="text-xs font-bold text-portal-navy uppercase tracking-wider truncate">Unlock Request in Progress</span><span class="text-xs font-mono font-semibold text-slate-700 truncate">INC-2026-CVSU-88219A</span></div></div><button class="px-2.5 py-1 rounded bg-white hover:bg-slate-50 border border-slate-300 text-slate-700 text-xs font-semibold flex items-center gap-1 shadow-sm transition-colors flex-shrink-0" onclick="navigator.clipboard.writeText('INC-2026-CVSU-88219A'); this.innerText='Copied!';" type="button"><span class="material-symbols-outlined text-sm">content_copy</span><span>Copy Ref</span></button></div>
<!-- Secondary Action: Clean bordered button -->
<button class="px-5 py-3 rounded-lg bg-white border border-slate-300 hover:bg-slate-50 active:bg-slate-100 text-slate-700 font-semibold text-sm flex items-center justify-center gap-2 transition-colors shadow-sm" id="verifyHardwareKeyBtn" type="button">
<span class="material-symbols-outlined text-xl text-slate-600">vpn_key</span>
            Hardware Key (Admin Bypass)
          </button>
</div>
<div class="flex flex-col sm:flex-row items-center justify-between pt-2 px-1 text-slate-600 text-xs font-medium gap-2">
<a class="text-portal-navy hover:text-portal-navy-light hover:underline flex items-center gap-1 font-semibold" href="https://faculty.cvsu.edu.ph" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-sm">badge</span>
            Verify Identity via Faculty Portal
          </a>
<button class="text-slate-400 cursor-not-allowed flex items-center gap-1" disabled="" type="button">
<span class="material-symbols-outlined text-sm">lock_reset</span>
            Direct Sign-in Locked (Disabled)
          </button>
</div>
</div>
<!-- Unlock Request Submission Dialog / Drawer (Simulated Action) -->
</div>
<!-- Compliance & Institutional Support Footer -->
<footer class="w-full max-w-2xl mx-auto pt-6 pb-2 text-xs">
<div class="bg-white rounded-xl border border-slate-200/90 p-4 mb-4 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
<div class="space-y-1">
<div class="font-bold text-slate-900 flex items-center gap-1.5 text-xs sm:text-sm">
<span class="material-symbols-outlined text-base text-portal-navy">support_agent</span>
            CvSU Management Information System (MIS) Operations
          </div>
<p class="text-slate-600 text-xs">
            Email: <a class="text-portal-navy font-semibold hover:underline" href="mailto:mis@cvsu.edu.ph">mis@cvsu.edu.ph</a> • Hotline: (046) 862-0852 loc. 214 • Main Admin Bldg.
          </p>
</div>
<div class="flex items-center gap-2 text-slate-700 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 flex-shrink-0">
<span class="material-symbols-outlined text-base text-emerald-600">lock</span>
<span class="text-xs font-bold uppercase tracking-wider text-slate-700">256-Bit SSL Protected</span>
</div>
</div>
<div class="flex flex-col sm:flex-row items-center justify-between gap-2 text-slate-500 font-medium px-1">
<span>© 2026 DocuSecure · Cavite State University | Data Privacy Act of 2012 (RA 10173) Certified Environment</span>
<span class="font-mono text-xs text-slate-600 font-semibold">NODE_HASH: e9f27c81aa90</span>
</div>
</footer>
</section>
<aside aria-live="polite" class="fixed bottom-5 right-5 z-50 max-w-sm w-full p-4 bg-white border border-emerald-300 rounded-xl shadow-xl flex items-start gap-3 transition-all duration-300" id="requestSuccessToast" role="alert"><div class="w-9 h-9 rounded-lg bg-emerald-100 text-emerald-700 border border-emerald-200 flex items-center justify-center flex-shrink-0 mt-0.5"><span class="material-symbols-outlined text-xl text-emerald-600">mark_email_read</span></div><div class="flex-1 pr-1"><div class="flex items-center justify-between"><span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Request Dispatched</span><span class="text-slate-400 text-xs">Just now</span></div><h4 class="text-sm font-bold text-slate-900 mt-0.5">Docket INC-2026-CVSU-88219A</h4><p class="text-xs text-slate-600 mt-1 leading-normal">Sent to MIS Security Operations. Check your university email &amp; SMS for the 6-digit confirmation code.</p></div><button aria-label="Dismiss alert" class="text-slate-400 hover:text-slate-700 flex-shrink-0 p-1 rounded-md transition-colors" onclick="document.getElementById('requestSuccessToast').remove();" type="button"><span class="material-symbols-outlined text-base">close</span></button></aside></main>
<!-- END: MainContainer -->
<script>
  // Countdown Timer Logic: 14 minutes 57 seconds simulation
  let totalSeconds = 14 * 60 + 57;
  const initialSeconds = 15 * 60;
  const clockElement = document.getElementById('countdownClock');
  const progressBar = document.getElementById('coolingOffProgress');

  const updateClock = () => {
    if (totalSeconds <= 0) {
      if (clockElement) clockElement.textContent = "00:00 - UNLOCKED";
      if (progressBar) progressBar.style.width = "0%";
      return;
    }
    const minutes = Math.floor(totalSeconds / 60);
    const seconds = totalSeconds % 60;
    const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
    const formattedSeconds = seconds < 10 ? '0' + seconds : seconds;
    
    if (clockElement) {
      clockElement.textContent = formattedMinutes + ':' + formattedSeconds;
    }
    
    if (progressBar) {
      const percentage = (totalSeconds / initialSeconds) * 100;
      progressBar.style.width = percentage + '%';
    }

    totalSeconds--;
  };

  setInterval(updateClock, 1000);

  // Immediate Unlock Request Toggle
  const openModalBtn = document.getElementById('openUnlockModalBtn');
  const unlockDrawer = document.getElementById('unlockDrawer');
  const closeModalBtn = document.getElementById('closeUnlockDrawerBtn');
  const emergencyForm = document.getElementById('emergencyUnlockForm');
  const successAlert = document.getElementById('unlockSuccessAlert');

  if (openModalBtn && unlockDrawer) {
    openModalBtn.addEventListener('click', () => {
      unlockDrawer.classList.toggle('hidden');
      if (!unlockDrawer.classList.contains('hidden')) {
        const firstInput = document.getElementById('escalationDepartment');
        if (firstInput) firstInput.focus();
      }
    });
  }

  if (closeModalBtn && unlockDrawer) {
    closeModalBtn.addEventListener('click', () => {
      unlockDrawer.classList.add('hidden');
    });
  }

  if (emergencyForm && successAlert) {
    emergencyForm.addEventListener('submit', (e) => {
      e.preventDefault();
      emergencyForm.classList.add('hidden');
      successAlert.classList.remove('hidden');
    });
  }

  // Hardware Key Bypass Alert simulation
  const verifyHardwareKeyBtn = document.getElementById('verifyHardwareKeyBtn');
  if (verifyHardwareKeyBtn) {
    verifyHardwareKeyBtn.addEventListener('click', () => {
      alert("DocuSecure Admin Security Daemon:\nPlease insert your registered YubiKey or institutional FIDO2 passkey into your workstation to bypass the lockout.");
    });
  }
</script>
</body></html>