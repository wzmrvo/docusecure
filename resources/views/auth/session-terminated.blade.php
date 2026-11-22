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
<!-- Tailwind CSS v3 -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Complete self-contained fallback & custom styles to guarantee 100% styled rendering -->
<style>
    *, ::before, ::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
      background-color: #f8fafc;
      color: #1e293b;
      min-height: 100vh;
      -webkit-font-smoothing: antialiased;
    }
    .font-mono {
      font-family: 'JetBrains Mono', ui-monospace, monospace;
    }
    
    /* Sovereign Navy Left Panel Styling */
    .left-panel {
      background-color: #173153;
      background-image: 
        radial-gradient(circle at 15% 20%, rgba(45, 83, 134, 0.45) 0%, transparent 45%),
        radial-gradient(circle at 85% 80%, rgba(234, 191, 85, 0.08) 0%, transparent 40%),
        linear-gradient(to right, rgba(255, 255, 255, 0.04) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
      background-size: 100% 100%, 100% 100%, 32px 32px, 32px 32px;
    }

    .navy-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .gold-pill {
      background-color: #eabf55;
      color: #0f223a;
    }
    
    .gold-accent {
      color: #eabf55;
    }

    .main-white-card {
      background-color: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 16px;
      box-shadow: 0 10px 25px -5px rgba(23, 49, 83, 0.08), 0 4px 6px -2px rgba(23, 49, 83, 0.03);
    }

    .btn-portal-primary {
      background-color: #173153;
      color: #ffffff;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .btn-portal-primary:hover {
      background-color: #1f3f69;
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(23, 49, 83, 0.25);
    }

    .btn-portal-secondary {
      background-color: #f1f5f9;
      color: #1e293b;
      border: 1px solid #cbd5e1;
      transition: all 0.15s ease-in-out;
    }
    .btn-portal-secondary:hover {
      background-color: #e2e8f0;
      color: #0f172a;
    }
  </style>
</head>
<body class="selection:bg-amber-400 selection:text-slate-900">
<main class="min-h-screen w-full flex flex-col lg:flex-row">
<!-- LEFT COLUMN: Deep Institutional Midnight Navy Enclave (~45% width) -->
<section class="left-panel lg:w-[45%] w-full text-white p-8 lg:p-12 flex flex-col justify-between relative overflow-hidden">
<!-- Top University & System Identity -->
<div class="relative z-10 space-y-6">
<!-- Logo + Brand Row -->
<div class="flex items-center gap-3.5">
<img alt="Cavite State University Official Seal" class="w-11 h-11 object-contain drop-shadow" src="{{ asset('images/cvsu-logo-placeholder.svg') }}" style="width: 44px; height: 44px;"/>
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="text-xl font-bold tracking-tight text-white leading-none">DocuSecure</span>
<span class="gold-pill text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full">OFFICIAL</span>
</div>
<span class="text-[11px] font-medium tracking-wider text-slate-300 uppercase mt-1">
            Cavite State University • Electronic Document Hub
          </span>
</div>
</div>
<!-- Security Eyebrow Badge -->
<div class="pt-2">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-xs font-semibold text-slate-200">
<span class="w-2 h-2 rounded-full bg-[#eabf55] animate-ping"></span>
<span>SECURITY-FIRST DESIGN</span>
</div>
</div>
<!-- Hero Headline & Description -->
<div class="space-y-3">
<h1 class="text-3xl lg:text-4xl font-extrabold text-white leading-tight">
          Your documents. <br/>
<span class="gold-accent">Protected at every step.</span>
</h1>
<p class="text-sm text-slate-300 leading-relaxed max-w-md">
          The sovereign zero-trust document security enclave for faculty clearances, Board of Regents resolutions, and confidential academic records under automated zero-trust surveillance.
        </p>
</div>
</div>
<!-- Center: Telemetry & Security Enclave Status Cards -->
<div class="relative z-10 my-8 space-y-4">
<!-- Primary Telemetry Box -->
<div class="navy-card rounded-xl p-4 space-y-3">
<!-- Active File Badge -->
<div class="flex items-center justify-between pb-2 border-b border-white/10">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#eabf55] text-lg">lock_person</span>
<span class="text-xs font-semibold uppercase tracking-wider text-slate-200">Enclave Memory Vault</span>
</div>
<span class="text-[11px] font-mono px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 font-semibold">
            STATUS: ARMORED
          </span>
</div>
<div class="space-y-2 text-xs">
<div class="flex items-center justify-between bg-black/25 px-3 py-2 rounded-lg font-mono">
<span class="text-slate-400">ACTIVE TARGET FILE</span>
<span class="text-slate-100 font-medium">BOR_RES_2026_094.pdf.enc</span>
</div>
<div class="flex items-center justify-between bg-black/20 px-3 py-1.5 rounded font-mono text-[11px] text-slate-400">
<span>SHA-256 CHECK:</span>
<span class="text-[#eabf55] tracking-tighter">e3b0c44298fc1c149afbf4c8996fb9242...</span>
</div>
</div>
<!-- Badges / Controls Checklist -->
<div class="grid grid-cols-1 gap-2 pt-1">
<div class="flex items-center gap-2 text-xs text-slate-300">
<span class="material-symbols-outlined text-sm text-emerald-400">verified_user</span>
<span>Role-Based Access Control (RBAC Level IV Enforced)</span>
</div>
<div class="flex items-center gap-2 text-xs text-slate-300">
<span class="material-symbols-outlined text-sm text-emerald-400">history_edu</span>
<span>Immutable Automated Audit Logging Active</span>
</div>
<div class="flex items-center gap-2 text-xs text-slate-300">
<span class="material-symbols-outlined text-sm text-[#eabf55]">gavel</span>
<span>RA 10173 (Data Privacy Act of 2012) Certified Enclave</span>
</div>
</div>
</div>
</div>
<!-- Bottom Institutional Credentials Footer -->
<div class="relative z-10 pt-4 border-t border-white/10 text-[11px] font-mono text-slate-400 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
<span>SECURITY GOALS: encrypted storage • role-based access • full audit trail</span>
<span class="text-slate-300 font-semibold">v2.4.9_PROD</span>
</div>
</section>
<!-- RIGHT COLUMN: High-Clarity Institutional Session Screen (~55% width) -->
<section class="lg:w-[55%] w-full bg-[#f8fafc] p-6 lg:p-12 flex flex-col justify-between">
<!-- Top Helpdesk & Navigation Header -->
<div class="flex items-center justify-between pb-6 border-b border-slate-200">
<a class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#173153] hover:text-[#1f3f69] transition-colors" href="login.html">
<span class="material-symbols-outlined text-base">arrow_back</span>
<span>Return to credential sign-in</span>
</a>
<div class="text-right text-xs text-slate-600">
<span class="text-slate-500">Need technical assistance?</span>
<span class="font-bold text-[#173153] block sm:inline sm:ml-1">CvSU MIS Helpdesk (046) 862-0852 loc. 214</span>
</div>
</div>
<!-- Centered Card Container (max-width: 580px) -->
<div class="my-auto py-6 flex justify-center">
<div class="main-white-card w-full max-w-[580px] p-6 sm:p-8 space-y-6">
<!-- Status Alert Pill: SEC-RULE 401 -->
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-200 text-red-700 text-xs font-bold tracking-wide">
<span class="material-symbols-outlined text-base animate-pulse">timer_off</span>
<span>SESSION STATUS • FORCIBLY TERMINATED (SEC-RULE 401)</span>
</div>
<!-- Card Title & Context -->
<div class="space-y-2">
<h2 class="text-2xl font-extrabold text-[#173153] tracking-tight">Session Terminated</h2>
<p class="text-sm text-slate-600 leading-relaxed">
            Your active session was safely closed due to <strong>15 minutes of inactivity</strong> to protect institutional document clearance enclaves and prevent unauthorized terminal exploitation.
          </p>
</div>
<!-- Telemetry Dossier Box -->
<div class="bg-slate-50 border border-slate-200 rounded-lg p-4 space-y-3 font-mono text-xs">
<div class="flex items-center justify-between pb-2 border-b border-slate-200 font-bold">
<span class="text-slate-500 tracking-wider">INCIDENT AUDIT TELEMETRY</span>
<span class="text-red-600 font-semibold">TERMINATION_EVT_ID: #99421A</span>
</div>
<div class="space-y-2">
<div class="flex justify-between items-center">
<span class="text-slate-500 font-sans">Terminated Account:</span>
<span class="text-slate-800 font-semibold">Prof. Juan Dela Cruz (j.delacruz@cvsu.edu.ph)</span>
</div>
<div class="flex justify-between items-center">
<span class="text-slate-500 font-sans">Termination Timestamp:</span>
<span class="text-slate-700">Today, 10:42:18 AM PST</span>
</div>
<div class="flex justify-between items-center">
<span class="text-slate-500 font-sans">Terminal Node ID:</span>
<span class="text-slate-700">INDANG-ADMIN-2F-WS04 (<span class="text-slate-500">10.24.11.89</span>)</span>
</div>
<div class="flex justify-between items-center pt-1 border-t border-slate-200">
<span class="text-slate-500 font-sans">Policy Enforced:</span>
<span class="text-red-600 font-bold">Idle Inactivity Timeout (Policy SEC-RULE-401)</span>
</div>
</div>
</div>
<!-- Safeguards Executed Alert (Emerald Soft Container) -->
<div class="bg-[#ecfdf5] border border-[#a7f3d0] text-[#065f46] rounded-lg p-3.5 space-y-2 text-xs">
<div class="flex items-center gap-1.5 font-bold text-sm text-[#047857]">
<span class="material-symbols-outlined text-base">verified_user</span>
<span>Autonomous Vault Safeguards Executed</span>
</div>
<ul class="space-y-1.5 pl-5 list-disc leading-normal text-[#065f46]">
<li>Cryptographic OAuth &amp; JWT tokens instantly revoked across clusters</li>
<li>Local volatile memory purged (AES-256 session state flushed)</li>
<li>
              1 Draft document backed up: 
              <span class="font-mono bg-emerald-100/80 px-1 py-0.5 rounded text-[11px] font-semibold text-emerald-900 border border-emerald-200">
                BOR_Resolution_Tenure_2026.docx
              </span>
</li>
</ul>
</div>
<!-- Action CTAs -->
<div class="space-y-3 pt-2">
<!-- Primary Sign In Button -->
<button class="btn-portal-primary w-full py-3 px-4 rounded-lg font-bold text-sm flex items-center justify-center gap-2 cursor-pointer shadow-md" onclick="handleResumeSession()" type="button">
<span class="material-symbols-outlined text-base">login</span>
<span>Sign In to Resume Session</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
<!-- Secondary Action Buttons Row -->
<div class="grid grid-cols-2 gap-3">
<button class="btn-portal-secondary py-2.5 px-3 rounded-lg text-xs font-semibold flex items-center justify-center gap-1.5 cursor-pointer" onclick="alert('Cache cleared. Redirecting to CvSU Institutional Identity Switcher.');" type="button">
<span class="material-symbols-outlined text-sm">switch_account</span>
<span>Switch User Account</span>
</button>
<button class="btn-portal-secondary py-2.5 px-3 rounded-lg text-xs font-semibold flex items-center justify-center gap-1.5 cursor-pointer" onclick="alert('Viewing Audit Trail Certificate: Event #99421A verified by PKI CA.');" type="button">
<span class="material-symbols-outlined text-sm">manage_search</span>
<span>View Security Log</span>
</button>
</div>
</div>
<!-- Fast-Pass Biometric Strip -->
<div class="border-t border-dashed border-slate-200 pt-3 mt-3 flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#173153] text-2xl">fingerprint</span>
<div>
<div class="text-xs font-bold text-slate-800">Fast-Pass Biometric Re-Auth</div>
<div class="text-[11px] text-slate-500">Touch your YubiKey or biometric sensor to verify identity</div>
</div>
</div>
<button class="px-3 py-1.5 rounded bg-slate-100 hover:bg-slate-200 text-[#173153] font-bold text-[11px] tracking-wider border border-slate-300 uppercase transition-colors" onclick="triggerFido2Auth()" type="button">
            TRIGGER FIDO2
          </button>
</div>
</div>
</div>
<!-- Footer Below Card -->
<div class="pt-6 border-t border-slate-200 text-center text-xs text-slate-500 space-y-1">
<div>Cavite State University • Republic Act No. 10173 • Philippine Data Privacy Act of 2012 Certified</div>
<div class="font-mono text-[11px] text-slate-400">AES-256 GCM VAULT INTEGRITY OK</div>
</div>
</section>
</main>
<script>
  function handleResumeSession() {
    console.log("[DocuSecure] Authenticating session resumption token.");
    window.location.href = window.location.origin + window.location.pathname.replace(/session-terminated.*/, 'login');
  }

  function triggerFido2Auth() {
    alert("CvSU Security Key / FIDO2 prompt initiated. Please tap your hardware authenticator.");
  }
</script>

<script src="{{ asset('js/docusecure-auth-demo.js') }}" defer></script>
</body></html>
