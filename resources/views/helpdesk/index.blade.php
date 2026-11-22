<!DOCTYPE html>

<html lang="en"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><meta content="web_standard" name="shell-type"/><title>DocuSecure Helpdesk — Cavite State University MIS Support</title><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet"/><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script id="tailwind-config">
tailwind.config = {
  theme: {
    extend: {
      colors: {
        cvsu: {
          navy: "#173153",
          "navy-dark": "#11253e",
          "navy-deep": "#0e1e32",
          "navy-light": "#1f3f69",
          "navy-accent": "#376ead",
          gold: "#eabf55",
          "gold-light": "#fef3c7",
          "gold-hover": "#d9a738",
          emerald: "#166534",
          "emerald-light": "#dcfce7",
          "emerald-accent": "#22c55e"
        }
      },
      fontFamily: {
        sans: ["'Plus Jakarta Sans'", "sans-serif"],
        mono: ["'JetBrains Mono'", "monospace"]
      }
    }
  }
};
</script>
<style>
  .blueprint-grid {
    background-size: 28px 28px;
    background-image: 
      linear-gradient(to right, rgba(234, 191, 85, 0.06) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(234, 191, 85, 0.06) 1px, transparent 1px);
  }
  .radial-glow {
    background: radial-gradient(circle at 50% 20%, rgba(55, 110, 173, 0.35) 0%, rgba(17, 37, 62, 0) 70%);
  }
</style>
</head><body class="bg-slate-50 font-sans text-slate-800 antialiased selection:bg-amber-100 selection:text-cvsu-navy"><header class="fixed top-0 left-0 w-full z-50 bg-cvsu-navy-dark shadow-md border-b-2 border-cvsu-gold"><!-- Advisory Sub-Strip --><div class="bg-cvsu-navy-deep px-4 sm:px-8 py-1.5 border-b border-white/10"><div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-2 text-[11px] font-mono"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-cvsu-gold text-[15px]">security</span><span class="uppercase text-slate-300">URGENT ADVISORY // 2FA MANDATE: Faculty &amp; Registrar accounts require FIDO2/WebAuthn hardware verification (ISO 9001:2015).</span></div><div class="flex items-center gap-3 text-slate-400"><span class="text-cvsu-gold flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>NODE: INDANG-CORE-01</span><span class="text-slate-400">TLS 1.3 CERTIFIED</span></div></div></div><!-- Main Nav Bar --><div class="h-16 max-w-7xl mx-auto px-4 sm:px-8 flex items-center justify-between"><div class="flex items-center gap-3"><img alt="cvsu-logo.png" class="h-10 w-auto object-contain drop-shadow" src="https://lh3.googleusercontent.com/aida/ALJJyrDLAbF0x-pFBNrr0SRqYpq8qn-AMK6s7cfR2YfzF4o5Tngz_rh8rQxfe9dH3kxD5QHlIXU-P-INdCgEAPrFwbCoCduFIFklWqDV6dm0Q2C4yTFblHObwGhQ7b_yZjqz3hPAwWovXyFB3NHFMBLkwOkUatOHFQiYk5h4bW7A5rZsCMAvCZ--A49yL6SCZaHSX4ECCa91DdbdIZAlsXQ8933AlWLfk0oI-pjcriXjNBvOS5CLBl8Zo52Ua94"/><div class="flex flex-col"><div class="flex items-center gap-1.5"><span class="font-bold text-white tracking-tight uppercase leading-none text-base">DocuSecure</span><span class="text-[9px] uppercase font-mono px-1.5 py-0.5 rounded bg-cvsu-gold/20 text-cvsu-gold font-semibold border border-cvsu-gold/40">Official</span></div><span class="font-mono text-[10px] text-cvsu-gold tracking-wide uppercase mt-0.5">CvSU MIS Technical Support Portal</span></div></div><nav class="hidden lg:flex items-center gap-1.5"><a class="px-3 py-1.5 font-mono text-xs uppercase tracking-wider text-slate-200 hover:text-white hover:bg-white/10 transition-colors rounded-lg" data-path="knowledge-base" href="#knowledge-base">Knowledge Base</a><a aria-current="page" class="px-3 py-1.5 font-mono text-xs uppercase tracking-wider bg-cvsu-gold text-cvsu-navy font-bold rounded-lg shadow-sm" data-path="submit-ticket" href="#incident-form">Submit Ticket</a><a class="px-3 py-1.5 font-mono text-xs uppercase tracking-wider text-slate-200 hover:text-white hover:bg-white/10 transition-colors rounded-lg" data-path="track-incident" href="#track-docket">Track Incident</a><a class="px-3 py-1.5 font-mono text-xs uppercase tracking-wider text-slate-200 hover:text-white hover:bg-white/10 transition-colors rounded-lg" data-path="system-status" href="#telemetry">System Status</a><a class="px-3 py-1.5 font-mono text-xs uppercase tracking-wider text-slate-200 hover:text-white hover:bg-white/10 transition-colors rounded-lg" data-path="direct-hotline" href="#hotline">Direct Hotline</a></nav><div class="flex items-center gap-3"><div class="hidden sm:flex flex-col text-right"><span class="font-mono text-[10px] text-slate-300 uppercase tracking-wider">Clearance Auth</span><span class="font-mono text-[11px] text-cvsu-gold font-bold uppercase">LEVEL III OFFICER</span></div><div class="w-9 h-9 rounded-full bg-white/10 border border-cvsu-gold/40 flex items-center justify-center text-cvsu-gold"><span class="material-symbols-outlined text-[20px]">person</span></div></div></div></header><main class="w-full pt-[96px] bg-slate-50 min-h-screen"><div class="flex flex-col w-full">
<!-- Security Status Bar & Breadcrumb Matrix -->
<section class="w-full bg-slate-100 border-b border-slate-200 px-4 sm:px-8 py-2.5">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-2">
<nav aria-label="Breadcrumb" class="flex items-center gap-2 font-mono text-xs uppercase tracking-wider text-slate-500">
<a class="hover:text-cvsu-navy transition-colors flex items-center gap-1 font-medium" href="#">
<span class="material-symbols-outlined text-[14px]">home</span>
<span>Home</span>
</a>
<span class="text-slate-400">/</span>
<span class="text-slate-600">Technical Support</span>
<span class="text-slate-400">/</span>
<span class="text-cvsu-navy font-bold">MIS Helpdesk Enclave</span>
</nav>
<div class="flex items-center gap-4">
<div class="flex items-center gap-1.5 font-mono text-xs text-cvsu-navy bg-white border border-slate-200 px-2.5 py-1 rounded-md shadow-sm">
<span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
<span class="font-semibold text-slate-700">ACTIVE HSM ENCLAVE: INDANG-CORE-SEC01</span>
</div>
<div class="hidden sm:flex items-center gap-1.5 font-mono text-xs text-emerald-800 bg-emerald-50 border border-emerald-200 px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[15px] text-emerald-700">verified_user</span>
<span class="font-semibold">FIPS 140-3 HARDENED</span>
</div>
</div>
</div>
</section>
<!-- Hero Header & Emergency Incident Telemetry (Navy Institutional Enclave) -->
<section class="w-full px-4 sm:px-8 py-10 relative overflow-hidden bg-gradient-to-br from-cvsu-navy via-cvsu-navy-dark to-cvsu-navy-deep text-white border-b border-cvsu-navy-light" style="background: linear-gradient(135deg, #173153 0%, #1f3f69 50%, #11253e 100%);">
<div class="absolute inset-0 blueprint-grid pointer-events-none opacity-40"></div>
<div class="absolute -top-24 -right-24 w-96 h-96 radial-glow pointer-events-none"></div>
<div class="max-w-7xl mx-auto flex flex-col gap-6 relative z-10">
<!-- Advisory Ribbon -->
<div class="w-full bg-white/10 backdrop-blur-md border border-white/15 p-3.5 rounded-xl flex flex-col sm:flex-row sm:items-center justify-between gap-3 shadow-md">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-cvsu-gold/20 border border-cvsu-gold/40 flex items-center justify-center text-cvsu-gold flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">emergency_home</span>
</div>
<div class="flex flex-col">
<span class="font-mono text-xs uppercase text-cvsu-gold font-bold tracking-wider">Priority Incident Advisory · Clearance Phase</span>
<p class="text-xs text-slate-200">End-of-Semester Clearance Queue active. Emergency unlock requests processed within <span class="text-cvsu-gold font-semibold underline decoration-cvsu-gold/40">5–15 mins SLA</span> via Duty Custodians.</p>
</div>
</div>
<div class="flex items-center gap-2 flex-shrink-0 bg-black/20 px-3 py-1.5 rounded-lg border border-white/10">
<span class="font-mono text-[11px] text-slate-300 uppercase">SLA METRIC:</span>
<span class="font-mono text-xs text-emerald-300 font-bold">99.98% RESOLUTION</span>
</div>
</div>
<!-- Main Portal Hero Typography -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
<div class="lg:col-span-8 flex flex-col gap-3">
<div class="flex items-center gap-2.5">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-cvsu-gold/15 border border-cvsu-gold/40 text-cvsu-gold text-xs font-mono font-semibold uppercase tracking-wider">
<span class="w-1.5 h-1.5 rounded-full bg-cvsu-gold animate-pulse"></span>
CvSU MIS Cryptographic Helpdesk
</span>
<span class="font-mono text-xs uppercase text-slate-300">· DOCUSECURE CORE V4.2</span>
</div>
<h1 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">CvSU Management Information System (MIS) Support Desk</h1>
<p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-3xl">Official technical assistance, account recovery, WebAuthn token re-issuance, and zero-trust cryptographic incident resolution for Cavite State University faculty, researchers, registrars, and students.</p>
</div>
<div class="lg:col-span-4 flex flex-col justify-end" id="hotline">
<div class="bg-cvsu-navy-deep/90 border border-cvsu-gold/30 p-5 rounded-2xl flex flex-col gap-2 shadow-xl backdrop-blur-md">
<div class="flex items-center justify-between">
<span class="font-mono text-xs uppercase text-cvsu-gold font-semibold tracking-wider">RAPID HOTLINE DISPATCH</span>
<span class="flex h-2 w-2 relative"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span></span>
</div>
<div class="flex items-baseline gap-2">
<span class="font-mono text-2xl text-white font-bold tracking-tight">(046) 862-0852</span>
<span class="font-mono text-xs text-cvsu-gold font-bold">LOC. 214 / 218</span>
</div>
<p class="text-xs text-slate-300">Indang Main Campus Data Center · 24/7 Zero-Trust Lockout Intervention</p>
</div>
</div>
</div>
<!-- Unified Technical Search Engine -->
<div class="w-full bg-white/10 backdrop-blur-md border border-white/20 p-2 rounded-xl shadow-lg mt-2">
<form class="flex flex-col md:flex-row items-center gap-2" onsubmit="event.preventDefault();">
<div class="flex items-center gap-2.5 flex-1 w-full px-3 py-1">
<span class="material-symbols-outlined text-cvsu-gold text-[22px]">search</span>
<input class="w-full bg-transparent text-white placeholder:text-slate-300 text-sm focus:outline-none font-sans" placeholder="Search troubleshooting guides, error codes (e.g., ERR-AUTH-2FA, SEC-LOCKOUT-05), or clearance procedures..." type="text"/>
</div>
<div class="flex items-center gap-2 w-full md:w-auto">
<span class="hidden lg:inline-block font-mono text-[11px] text-slate-300 px-2 py-1 bg-white/10 rounded uppercase">ESC to clear</span>
<button class="w-full md:w-auto px-5 py-2.5 bg-cvsu-gold text-cvsu-navy hover:bg-amber-400 font-mono text-xs font-bold uppercase rounded-lg transition-colors flex items-center justify-center gap-1.5 shadow-md" type="submit">
<span>Query Index</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</form>
</div>
</div>
</section>
<!-- Fast-Track Action Bento Grid (4 Columns) -->
<section class="w-full px-4 sm:px-8 py-10 bg-slate-50 border-b border-slate-200">
<div class="max-w-7xl mx-auto flex flex-col gap-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-md bg-cvsu-navy text-cvsu-gold flex items-center justify-center"><span class="material-symbols-outlined text-[18px]">bolt</span></div>
<span class="font-bold text-lg uppercase tracking-wide text-cvsu-navy">Fast-Track Technical Triage</span>
</div>
<span class="font-mono text-xs text-slate-500 uppercase tracking-wider font-medium">DIRECT ACTION CLEARANCE LANES</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
<!-- Bento 1: Lockout -->
<div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md hover:border-cvsu-navy-accent transition-all flex flex-col justify-between gap-4 group">
<div class="flex flex-col gap-3">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 border border-red-200 flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">lock_reset</span>
</div>
<span class="font-mono text-[11px] font-semibold uppercase text-red-700 bg-red-50 border border-red-200 px-2 py-0.5 rounded">ERR-SEC-05</span>
</div>
<h2 class="font-bold text-base text-cvsu-navy leading-snug">Account Lockout Resolution</h2>
<p class="text-xs text-slate-600 leading-relaxed">Triggered following 5 invalid cryptographic challenges. Fast-track one-time bypass dispatch or emergency MIS cooling-off clearance.</p>
</div>
<a class="flex items-center justify-between font-mono text-xs font-bold text-cvsu-navy hover:text-cvsu-navy-accent pt-2 border-t border-slate-100 transition-colors" href="#incident-form">
<span class="uppercase">Resolve Lockout</span>
<span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<!-- Bento 2: 2FA Hardware Key -->
<div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md hover:border-cvsu-navy-accent transition-all flex flex-col justify-between gap-4 group">
<div class="flex flex-col gap-3">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-700 border border-amber-200 flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">key</span>
</div>
<span class="font-mono text-[11px] font-semibold uppercase text-amber-800 bg-amber-50 border border-amber-200 px-2 py-0.5 rounded">FIDO2/TOTP</span>
</div>
<h2 class="font-bold text-base text-cvsu-navy leading-snug">2FA / Hardware Key Desync</h2>
<p class="text-xs text-slate-600 leading-relaxed">Re-register WebAuthn passkeys, provision replacement YubiKey dongles, or re-synchronize drifted institutional TOTP timeframes.</p>
</div>
<a class="flex items-center justify-between font-mono text-xs font-bold text-cvsu-navy hover:text-cvsu-navy-accent pt-2 border-t border-slate-100 transition-colors" href="#incident-form">
<span class="uppercase">Request 2FA Reset</span>
<span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<!-- Bento 3: Clearance Elevation -->
<div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md hover:border-cvsu-navy-accent transition-all flex flex-col justify-between gap-4 group">
<div class="flex flex-col gap-3">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-200 flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">verified</span>
</div>
<span class="font-mono text-[11px] font-semibold uppercase text-emerald-800 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded">TIER III/IV</span>
</div>
<h2 class="font-bold text-base text-cvsu-navy leading-snug">Clearance Elevation &amp; Tier</h2>
<p class="text-xs text-slate-600 leading-relaxed">Audit stalled multi-signature dossiers, request registrar endorsement escalation, or check unblock status for university thesis clearance.</p>
</div>
<a class="flex items-center justify-between font-mono text-xs font-bold text-cvsu-navy hover:text-cvsu-navy-accent pt-2 border-t border-slate-100 transition-colors" href="#incident-form">
<span class="uppercase">Check Clearance Status</span>
<span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<!-- Bento 4: New Account Provisioning -->
<div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md hover:border-cvsu-navy-accent transition-all flex flex-col justify-between gap-4 group">
<div class="flex flex-col gap-3">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-blue-50 text-cvsu-navy border border-blue-200 flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">badge</span>
</div>
<span class="font-mono text-[11px] font-semibold uppercase text-cvsu-navy bg-blue-50 border border-blue-200 px-2 py-0.5 rounded">ONBOARDING</span>
</div>
<h2 class="font-bold text-base text-cvsu-navy leading-snug">Institutional NetID Request</h2>
<p class="text-xs text-slate-600 leading-relaxed">Verify onboarding queues for adjunct faculty, institutional researchers, and graduate thesis dockets pending automated digital signatures.</p>
</div>
<a class="flex items-center justify-between font-mono text-xs font-bold text-cvsu-navy hover:text-cvsu-navy-accent pt-2 border-t border-slate-100 transition-colors" href="#incident-form">
<span class="uppercase">Track Application</span>
<span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
<!-- Main Workplane: Ticket Submission (60%) + Duty Desk Directory (40%) -->
<section class="w-full px-4 sm:px-8 py-10 bg-white" id="incident-form">
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Incident Submission Form (Left 7 Cols ~ 60%) -->
<div class="lg:col-span-7 flex flex-col gap-6">
<div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200 shadow-lg flex flex-col gap-6">
<div class="flex flex-col gap-1 pb-2 border-b border-slate-100">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2 text-cvsu-navy">
<span class="material-symbols-outlined text-[20px] text-amber-500">report_problem</span>
<span class="font-mono text-xs uppercase font-bold tracking-wider">Official Escalation Protocol</span>
</div>
<span class="font-mono text-[11px] text-slate-400 uppercase font-semibold">SEC-FORM-CvSU-09</span>
</div>
<h2 class="text-xl sm:text-2xl font-bold text-cvsu-navy tracking-tight mt-1">Submit an Urgent Technical or Security Incident</h2>
<p class="text-xs sm:text-sm text-slate-500">All submissions are cryptographically hashed and forwarded directly to the active MIS Duty Watch Officer at the Indang Main Campus Data Center.</p>
</div>
<form class="flex flex-col gap-4" id="helpdesk-incident-form" onsubmit="handleTicketSubmit(event)">
<!-- Requester Name & Academic NetID -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex flex-col gap-1.5">
<label class="font-mono text-xs uppercase font-semibold text-slate-700 flex items-center justify-between">
<span>Requester Full Name</span>
<span class="text-red-500 text-[11px]">*Required</span>
</label>
<div class="flex items-center gap-2 bg-slate-50 border border-slate-300 focus-within:border-cvsu-navy focus-within:bg-white focus-within:ring-2 focus-within:ring-cvsu-navy/20 px-3 py-2 rounded-xl transition">
<span class="material-symbols-outlined text-[18px] text-slate-400">person</span>
<input class="w-full bg-transparent text-sm text-slate-900 placeholder:text-slate-400 focus:outline-none" placeholder="Prof. Juan Dela Cruz" required="" type="text"/>
</div>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-mono text-xs uppercase font-semibold text-slate-700 flex items-center justify-between">
<span>CvSU Academic NetID</span>
<span class="text-red-500 text-[11px]">*Required</span>
</label>
<div class="flex items-center gap-2 bg-slate-50 border border-slate-300 focus-within:border-cvsu-navy focus-within:bg-white focus-within:ring-2 focus-within:ring-cvsu-navy/20 px-3 py-2 rounded-xl transition">
<span class="material-symbols-outlined text-[18px] text-slate-400">badge</span>
<input class="w-full bg-transparent text-sm font-mono text-slate-900 placeholder:text-slate-400 focus:outline-none uppercase" placeholder="CEIT-FAC-88219" required="" type="text"/>
</div>
</div>
</div>
<!-- Email & College Dropdown -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex flex-col gap-1.5">
<label class="font-mono text-xs uppercase font-semibold text-slate-700 flex items-center justify-between">
<span>Institutional Email</span>
<span class="text-cvsu-navy text-[11px] font-mono">*@cvsu.edu.ph</span>
</label>
<div class="flex items-center gap-2 bg-slate-50 border border-slate-300 focus-within:border-cvsu-navy focus-within:bg-white focus-within:ring-2 focus-within:ring-cvsu-navy/20 px-3 py-2 rounded-xl transition">
<span class="material-symbols-outlined text-[18px] text-slate-400">alternate_email</span>
<input class="w-full bg-transparent text-sm text-slate-900 placeholder:text-slate-400 focus:outline-none" placeholder="juan.delacruz@cvsu.edu.ph" required="" type="email"/>
</div>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-mono text-xs uppercase font-semibold text-slate-700 flex items-center justify-between">
<span>Department / College Unit</span>
<span class="text-red-500 text-[11px]">*Required</span>
</label>
<div class="flex items-center gap-2 bg-slate-50 border border-slate-300 focus-within:border-cvsu-navy focus-within:bg-white focus-within:ring-2 focus-within:ring-cvsu-navy/20 px-3 py-2 rounded-xl transition">
<span class="material-symbols-outlined text-[18px] text-slate-400">account_balance</span>
<select class="w-full bg-transparent text-sm text-slate-900 focus:outline-none cursor-pointer" required="">
<option disabled="" selected="" value="">Select Department...</option>
<option value="CEIT">College of Engineering &amp; Information Technology (CEIT)</option>
<option value="CAS">College of Arts and Sciences (CAS)</option>
<option value="CEM">College of Economics, Management &amp; Dev. Studies (CEMDS)</option>
<option value="CON">College of Nursing (CON)</option>
<option value="CAFENR">CAFENR (Agriculture &amp; Forestry)</option>
<option value="GS">Graduate School &amp; Research Directorate</option>
<option value="REGISTRAR">University Registrar Office</option>
<option value="SATELLITE">Satellite Campus Unit (Rosario / Cavite City / Bacoor)</option>
</select>
</div>
</div>
</div>
<!-- Incident Category & Docket Ref -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex flex-col gap-1.5">
<label class="font-mono text-xs uppercase font-semibold text-slate-700 flex items-center justify-between">
<span>Incident Classification</span>
<span class="text-red-500 text-[11px]">*Required</span>
</label>
<div class="flex items-center gap-2 bg-slate-50 border border-slate-300 focus-within:border-cvsu-navy focus-within:bg-white focus-within:ring-2 focus-within:ring-cvsu-navy/20 px-3 py-2 rounded-xl transition">
<span class="material-symbols-outlined text-[18px] text-slate-400">category</span>
<select class="w-full bg-transparent text-sm text-slate-900 focus:outline-none cursor-pointer" required="">
<option value="LOCKOUT">Account Lockout / 15-Min Cooling Off</option>
<option value="WEBAUTHN">2FA Token Error / Hardware Key Desync</option>
<option value="CLEARANCE">Clearance Slip Docket Inactive / Broken Chain</option>
<option value="WATERMARK">Steganographic Watermark / Checksum Mismatch</option>
<option value="KEY_EXPIRE">Tier 4 Decryption Key Expiration Delay</option>
<option value="OTHER">Other Cryptographic Support Requirement</option>
</select>
</div>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-mono text-xs uppercase font-semibold text-slate-700 flex items-center justify-between">
<span>Incident Docket Reference</span>
<span class="text-slate-400 text-[11px]">Optional</span>
</label>
<div class="flex items-center gap-2 bg-slate-50 border border-slate-300 focus-within:border-cvsu-navy focus-within:bg-white focus-within:ring-2 focus-within:ring-cvsu-navy/20 px-3 py-2 rounded-xl transition">
<span class="material-symbols-outlined text-[18px] text-slate-400">tag</span>
<input class="w-full bg-transparent text-sm font-mono text-slate-900 placeholder:text-slate-400 focus:outline-none uppercase" placeholder="e.g., INC-2026-CVSU-88219A" type="text"/>
</div>
</div>
</div>
<!-- Urgency Level Radio Group -->
<div class="flex flex-col gap-1.5">
<label class="font-mono text-xs uppercase font-semibold text-slate-700">Triage Urgency Level</label>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-3" id="urgency-selector">
<label class="flex items-center gap-3 p-3 bg-slate-50 border border-slate-200 rounded-xl cursor-pointer hover:bg-slate-100 transition">
<input checked="" class="text-cvsu-navy focus:ring-cvsu-navy" name="urgency" type="radio" value="normal"/>
<div class="flex flex-col">
<span class="font-mono text-xs font-bold text-slate-800 uppercase">Routine</span>
<span class="text-[11px] text-slate-500">Standard 24-hr queue</span>
</div>
</label>
<label class="flex items-center gap-3 p-3 bg-slate-50 border border-slate-200 rounded-xl cursor-pointer hover:bg-amber-50 hover:border-amber-300 transition">
<input class="text-amber-600 focus:ring-amber-500" name="urgency" type="radio" value="high"/>
<div class="flex flex-col">
<span class="font-mono text-xs font-bold text-amber-800 uppercase">High Priority</span>
<span class="text-[11px] text-amber-700">Faculty thesis/grades</span>
</div>
</label>
<label class="flex items-center gap-3 p-3 bg-slate-50 border border-slate-200 rounded-xl cursor-pointer hover:bg-red-50 hover:border-red-300 transition">
<input class="text-red-600 focus:ring-red-500" name="urgency" type="radio" value="critical"/>
<div class="flex flex-col">
<span class="font-mono text-xs font-bold text-red-700 uppercase">Critical Lockout</span>
<span class="text-[11px] text-red-600">5-15 min urgent SLA</span>
</div>
</label>
</div>
</div>
<!-- Detailed Description -->
<div class="flex flex-col gap-1.5">
<label class="font-mono text-xs uppercase font-semibold text-slate-700 flex items-center justify-between">
<span>Detailed Description &amp; Error Message</span>
<span class="text-red-500 text-[11px]">*Required</span>
</label>
<div class="bg-slate-50 border border-slate-300 focus-within:border-cvsu-navy focus-within:bg-white focus-within:ring-2 focus-within:ring-cvsu-navy/20 p-3 rounded-xl flex flex-col gap-2 transition">
<textarea class="w-full bg-transparent text-sm text-slate-900 placeholder:text-slate-400 focus:outline-none resize-none font-sans" placeholder="Paste exact terminal/browser error codes, describe what action failed, and specify the device used (e.g. Chrome 124, Indang Campus LAN IP)..." required="" rows="4"></textarea>
<div class="flex items-center justify-between pt-2 border-t border-slate-200 text-slate-400 font-mono text-[11px]">
<span class="text-emerald-700 font-medium flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>AES-256 ENCRYPTED PAYLOAD</span>
<span>MAX 2000 CHARS</span>
</div>
</div>
</div>
<!-- Drag & Drop Attachment Box -->
<div class="flex flex-col gap-1.5">
<label class="font-mono text-xs uppercase font-semibold text-slate-700">Attachment / Diagnostic Error Logs</label>
<div class="p-5 bg-slate-50 border-2 border-dashed border-slate-300 rounded-xl flex flex-col items-center justify-center text-center gap-1.5 hover:bg-slate-100 hover:border-cvsu-navy transition cursor-pointer group">
<span class="material-symbols-outlined text-[30px] text-cvsu-navy group-hover:scale-110 transition-transform">cloud_upload</span>
<span class="font-mono text-xs font-bold text-slate-800 uppercase">Drop screenshot or diagnostic log here</span>
<span class="text-[11px] text-slate-500">PNG, JPG, PDF, or HAR log file up to 10MB</span>
</div>
</div>
<!-- Statutory Compliance Checkbox -->
<div class="flex items-start gap-3 p-3.5 bg-slate-50 border border-slate-200 rounded-xl">
<input class="mt-1 rounded text-cvsu-navy focus:ring-cvsu-navy" id="compliance-check" required="" type="checkbox"/>
<label class="text-xs text-slate-600 leading-relaxed cursor-pointer" for="compliance-check">
                I hereby certify under penalties of university administrative sanctions that the provided technical information is accurate and authorized. In accordance with <span class="text-cvsu-navy font-bold">Republic Act No. 10173 (Data Privacy Act of 2012)</span> and CvSU MIS Security Circular 2025-04, this transaction is logged with client IP telemetry.
              </label>
</div>
<!-- Form Submit Actuator -->
<div class="pt-2">
<button class="w-full py-3.5 px-6 bg-cvsu-navy hover:bg-cvsu-navy-light text-white font-mono text-xs font-bold uppercase rounded-xl transition-all shadow-md flex items-center justify-center gap-2 hover:shadow-lg active:scale-[0.99]" type="submit">
<span class="material-symbols-outlined text-[20px] text-cvsu-gold">send</span>
<span class="tracking-wider">Submit Support Ticket to Duty Officer</span>
</button>
</div>
<div class="hidden p-4 bg-emerald-50 border border-emerald-200 text-emerald-900 rounded-xl font-mono text-xs flex items-center gap-3 shadow-sm" id="ticket-feedback">
<span class="material-symbols-outlined text-[22px] text-emerald-600">task_alt</span>
<div>
<p class="font-bold">Docket registered: TKT-2026-99120</p>
<p class="text-[11px] text-emerald-800">Assigned to Lead Custodian Engr. Bautista. Notification dispatched to your CvSU email.</p>
</div>
</div>
</form>
</div>
</div>
<!-- Right Column: Duty Desk & Live Directory (5 Cols ~ 40%) -->
<div class="lg:col-span-5 flex flex-col gap-6">
<!-- Live Duty Officer Card -->
<div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-lg flex flex-col gap-5">
<div class="flex items-center justify-between pb-2 border-b border-slate-100">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
<span class="font-mono text-xs uppercase text-cvsu-navy font-bold tracking-wider">Active Support Watch</span>
</div>
<span class="font-mono text-[11px] text-slate-500 uppercase bg-slate-100 px-2 py-0.5 rounded">SHIFT: ALPHA-01</span>
</div>
<div class="flex items-center gap-4 p-4 bg-gradient-to-r from-slate-50 to-white border border-slate-200 rounded-xl">
<div class="w-14 h-14 rounded-2xl bg-cvsu-navy flex items-center justify-center text-cvsu-gold flex-shrink-0 shadow-md">
<span class="material-symbols-outlined text-[32px]">shield_person</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-mono text-[11px] uppercase text-cvsu-navy font-bold">Live Custody Officer</span>
<span class="text-base font-bold text-slate-900 truncate">Engr. R. Bautista</span>
<span class="text-xs text-slate-500 truncate">MIS Lead Systems Custodian · Indang Main</span>
</div>
</div>
<!-- Channel Directory List -->
<div class="flex flex-col gap-3.5 pt-1">
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-lg bg-blue-50 text-cvsu-navy flex items-center justify-center flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[18px]">call</span>
</div>
<div class="flex flex-col">
<span class="font-mono text-[11px] uppercase text-slate-500 font-semibold">Direct Telephone Hotline</span>
<span class="font-mono text-sm font-bold text-cvsu-navy">(046) 862-0852 loc. 214 / loc. 218</span>
</div>
</div>
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-lg bg-blue-50 text-cvsu-navy flex items-center justify-center flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[18px]">mail</span>
</div>
<div class="flex flex-col">
<span class="font-mono text-[11px] uppercase text-slate-500 font-semibold">Direct Escalation Mailboxes</span>
<span class="font-mono text-xs font-semibold text-slate-800">mis@cvsu.edu.ph</span>
<span class="font-mono text-xs text-slate-600">docusecure-support@cvsu.edu.ph</span>
</div>
</div>
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-lg bg-blue-50 text-cvsu-navy flex items-center justify-center flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[18px]">location_on</span>
</div>
<div class="flex flex-col">
<span class="font-mono text-[11px] uppercase text-slate-500 font-semibold">Physical Office Dispatch</span>
<span class="text-xs text-slate-600">2nd Floor, Administration Building, CvSU Main Campus, Indang, Cavite</span>
</div>
</div>
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-lg bg-blue-50 text-cvsu-navy flex items-center justify-center flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[18px]">schedule</span>
</div>
<div class="flex flex-col">
<span class="font-mono text-[11px] uppercase text-slate-500 font-semibold">Desk Operational Hours</span>
<span class="text-xs text-slate-600">Monday – Friday: 8:00 AM – 5:00 PM PST</span>
<span class="font-mono text-[11px] text-emerald-700 font-bold mt-0.5">24/7 AUTOMATED ZERO-TRUST LOCKOUT TELEMETRY</span>
</div>
</div>
</div>
</div>
<!-- Real-Time Ticket Status Checker Widget -->
<div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-lg flex flex-col gap-4" id="track-docket">
<div class="flex items-center justify-between">
<span class="font-mono text-xs uppercase text-cvsu-navy font-bold tracking-wider">Track Incident Docket</span>
<span class="material-symbols-outlined text-cvsu-navy text-[20px]">satellite_alt</span>
</div>
<p class="text-xs text-slate-500">Query live cryptographic clearance status or track administrative SLA timers using your support ticket identifier.</p>
<form class="flex flex-col gap-2.5" onsubmit="trackTicket(event)">
<div class="flex items-center gap-2 bg-slate-50 border border-slate-300 focus-within:border-cvsu-navy focus-within:bg-white focus-within:ring-2 focus-within:ring-cvsu-navy/20 px-3 py-2 rounded-xl transition">
<span class="material-symbols-outlined text-[18px] text-slate-400">confirmation_number</span>
<input class="w-full bg-transparent font-mono text-sm font-bold text-slate-900 placeholder:text-slate-400 focus:outline-none uppercase" id="tracking-input" placeholder="TKT-2026-88219" type="text" value="TKT-2026-88219"/>
</div>
<button class="w-full py-2.5 px-4 bg-slate-100 hover:bg-slate-200 text-cvsu-navy font-mono text-xs font-bold uppercase rounded-xl transition-colors flex items-center justify-center gap-1.5" type="submit">
<span class="material-symbols-outlined text-[16px] text-cvsu-navy">radar</span>
<span>Inspect Docket Status</span>
</button>
</form>
<!-- Interactive Track Preview Status Card -->
<div class="p-4 bg-slate-50 border border-slate-200 rounded-xl flex flex-col gap-2" id="tracking-result">
<div class="flex items-center justify-between">
<span class="font-mono text-xs text-slate-600 font-semibold uppercase">DOCKET: TKT-2026-88219</span>
<span class="font-mono text-[11px] text-amber-800 uppercase bg-amber-100 border border-amber-200 px-2 py-0.5 rounded font-bold">IN PROGRESS</span>
</div>
<span class="font-bold text-sm text-cvsu-navy">WebAuthn Token Resync Request</span>
<p class="text-xs text-slate-600">Assigned to: <strong class="text-slate-900">Engr. R. Bautista</strong> · Dual clearance verified. Passkey dispatch awaiting client handshake response.</p>
<div class="w-full bg-slate-200 rounded-full h-2 mt-1 overflow-hidden">
<div class="bg-cvsu-navy h-full w-2/3 rounded-full"></div>
</div>
<div class="flex items-center justify-between text-slate-500 font-mono text-[11px] pt-1">
<span>ESTIMATED TIME: ~8 MINS</span>
<span class="text-cvsu-navy font-bold">STAGE 2 OF 3</span>
</div>
</div>
</div>
<!-- Telemetry & Diagnostic Chart Metric -->
<div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-lg flex flex-col gap-3" id="telemetry">
<div class="flex items-center justify-between">
<span class="font-mono text-xs uppercase text-slate-500 font-semibold">Cluster Telemetry (Past 24h)</span>
<span class="font-mono text-xs text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded font-bold uppercase">99.98% HEALTH</span>
</div>
<!-- Inline Sparkline / Metrics Visualization -->
<div class="h-20 w-full flex items-end gap-2 pt-2">
<div class="flex-1 bg-slate-200 h-[40%] rounded-t hover:bg-cvsu-navy transition-colors" title="00:00 - 12 Lockouts"></div>
<div class="flex-1 bg-slate-200 h-[60%] rounded-t hover:bg-cvsu-navy transition-colors" title="04:00 - 24 Lockouts"></div>
<div class="flex-1 bg-slate-200 h-[30%] rounded-t hover:bg-cvsu-navy transition-colors" title="08:00 - 8 Lockouts"></div>
<div class="flex-1 bg-slate-200 h-[85%] rounded-t hover:bg-cvsu-navy transition-colors" title="12:00 - 64 Cleared"></div>
<div class="flex-1 bg-cvsu-navy h-[95%] rounded-t shadow" title="Current Peak - Fast Track active"></div>
<div class="flex-1 bg-slate-200 h-[50%] rounded-t hover:bg-cvsu-navy transition-colors" title="Estimated SLA"></div>
<div class="flex-1 bg-slate-200 h-[45%] rounded-t hover:bg-cvsu-navy transition-colors" title="Projected Buffer"></div>
</div>
<div class="flex items-center justify-between font-mono text-[11px] text-slate-500 pt-2 border-t border-slate-100">
<span>RESOLVED: 1,429 CASES</span>
<span class="font-bold text-cvsu-navy">MEAN RESOLUTION: 7.2 MINS</span>
</div>
</div>
</div>
</div>
</section>
<!-- Knowledge Base & Common Solutions Accordion -->
<section class="w-full px-4 sm:px-8 py-12 bg-slate-50 border-t border-slate-200" id="knowledge-base">
<div class="max-w-7xl mx-auto flex flex-col gap-8">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-2 pb-2 border-b border-slate-200">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2 text-cvsu-navy">
<span class="material-symbols-outlined text-[20px] text-cvsu-gold">menu_book</span>
<span class="font-mono text-xs uppercase font-bold tracking-wider">Institutional Knowledge Base</span>
</div>
<h2 class="text-2xl sm:text-3xl font-extrabold text-cvsu-navy tracking-tight">Frequently Addressed Protocol Inquiries</h2>
</div>
<span class="font-mono text-xs text-slate-500 uppercase font-medium">DOCUMENTATION REPOSITORY REV 2026.2</span>
</div>
<!-- Accordion Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<!-- Item 1 -->
<div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow flex flex-col gap-3">
<div class="flex items-start justify-between gap-3">
<h3 class="font-bold text-base text-cvsu-navy leading-snug">Why did my account lock out for 15 minutes?</h3>
<div class="w-8 h-8 rounded-lg bg-blue-50 text-cvsu-navy flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">security</span>
</div>
</div>
<p class="text-xs sm:text-sm text-slate-600 leading-relaxed">Under the university's zero-trust institutional protection policy, 5 consecutive failed credential attempts or invalid TOTP codes initiate an automated 15-minute cooling-off lockdown. This mitigates distributed brute-force attacks against registrar grading rolls. You can wait for the cooling-off window or use the Fast-Track Emergency Unlock above.</p>
<div class="pt-2 flex items-center gap-1.5 font-mono text-xs text-cvsu-navy font-bold hover:underline cursor-pointer">
<span class="material-symbols-outlined text-[15px] text-cvsu-gold">link</span>
<span>SEE POLICY: CVSU-MIS-SEC-014</span>
</div>
</div>
<!-- Item 2 -->
<div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow flex flex-col gap-3">
<div class="flex items-start justify-between gap-3">
<h3 class="font-bold text-base text-cvsu-navy leading-snug">How does dual-signature clearance approval work?</h3>
<div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">draw</span>
</div>
</div>
<p class="text-xs sm:text-sm text-slate-600 leading-relaxed">Tier 3 and Tier 4 sensitive academic records require concurrent digital signatures from both the Department Chairperson and the University Registrar. Each party signs the ledger using an asymmetric ECDSA-SHA256 signature chain. If either party's token is unconfirmed, the clearance docket remains in a pending quarantine state.</p>
<div class="pt-2 flex items-center gap-1.5 font-mono text-xs text-emerald-800 font-bold hover:underline cursor-pointer">
<span class="material-symbols-outlined text-[15px] text-emerald-600">link</span>
<span>SEE CLEARANCE WORKFLOW MANUAL</span>
</div>
</div>
<!-- Item 3 -->
<div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow flex flex-col gap-3">
<div class="flex items-start justify-between gap-3">
<h3 class="font-bold text-base text-cvsu-navy leading-snug">What should I do if my 6-digit authenticator code fails?</h3>
<div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">timer</span>
</div>
</div>
<p class="text-xs sm:text-sm text-slate-600 leading-relaxed">Time-based One-Time Passwords (TOTP) rely on RFC 6238 synchronized timestamps. If your mobile device clock differs by more than ±30 seconds from the CvSU NTP Indang Master Node, authentication handshakes will fail. Perform a time-sync in your Google/Microsoft Authenticator app settings or submit a 2FA Re-pair ticket.</p>
<div class="pt-2 flex items-center gap-1.5 font-mono text-xs text-amber-800 font-bold hover:underline cursor-pointer">
<span class="material-symbols-outlined text-[15px] text-amber-600">link</span>
<span>NTP MASTER: TIME.CVSU.EDU.PH</span>
</div>
</div>
<!-- Item 4 -->
<div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow flex flex-col gap-3">
<div class="flex items-start justify-between gap-3">
<h3 class="font-bold text-base text-cvsu-navy leading-snug">How long is an ephemeral Tier 4 decryption lease valid?</h3>
<div class="w-8 h-8 rounded-lg bg-blue-50 text-cvsu-navy flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">hourglass_top</span>
</div>
</div>
<p class="text-xs sm:text-sm text-slate-600 leading-relaxed">Once authorized by the College Dean, ephemeral decryption tokens for sensitive graduation dossiers and sealed thesis manuscripts remain active for exactly 120 minutes. After lease expiration, the session key is wiped from the secure memory enclave, requiring re-authorization if verification was incomplete.</p>
<div class="pt-2 flex items-center gap-1.5 font-mono text-xs text-cvsu-navy font-bold hover:underline cursor-pointer">
<span class="material-symbols-outlined text-[15px] text-cvsu-gold">link</span>
<span>HSM EPHEMERAL LEASE ARCHITECTURE</span>
</div>
</div>
</div>
</div>
</section>
<!-- Institutional Compliance Anchor -->
<section class="w-full bg-slate-100 border-t border-slate-200 px-4 sm:px-8 py-4">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-3 text-center md:text-left">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-cvsu-navy text-[24px]">verified</span>
<div class="flex flex-col">
<span class="font-mono text-xs font-bold text-cvsu-navy uppercase">Cavite State University Management Information System</span>
<span class="text-xs text-slate-500">ISO 9001:2015 Certified Institutional Operations · DICT Cyber-Readiness Level 3 Verified</span>
</div>
</div>
<div class="flex items-center gap-2 font-mono text-xs text-slate-500">
<span>COMPLIANT WITH REPUBLIC ACT NO. 10173</span>
<span>·</span>
<span class="text-cvsu-navy font-bold">DATA PRIVACY ACT OF 2012</span>
</div>
</div>
</section>
</div>
<script>
  function handleTicketSubmit(event) {
    event.preventDefault();
    const feedback = document.getElementById('ticket-feedback');
    if (feedback) {
      feedback.classList.remove('hidden');
      feedback.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
  }

  function trackTicket(event) {
    event.preventDefault();
    const result = document.getElementById('tracking-result');
    const inputVal = document.getElementById('tracking-input').value.trim() || 'TKT-2026-88219';
    if (result) {
      result.classList.remove('hidden');
      result.querySelector('.font-mono.text-xs.text-slate-600').innerText = 'DOCKET: ' + inputVal.toUpperCase();
    }
  }
</script></main><footer class="w-full bg-cvsu-navy-deep text-white py-12 border-t-4 border-cvsu-gold"><div class="max-w-7xl mx-auto px-4 sm:px-8"><div class="grid grid-cols-1 md:grid-cols-4 gap-8 pb-8 border-b border-white/10"><div class="flex flex-col gap-3 md:col-span-2"><div class="flex items-center gap-3"><img alt="cvsu-logo.png" class="h-9 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/ALJJyrDLAbF0x-pFBNrr0SRqYpq8qn-AMK6s7cfR2YfzF4o5Tngz_rh8rQxfe9dH3kxD5QHlIXU-P-INdCgEAPrFwbCoCduFIFklWqDV6dm0Q2C4yTFblHObwGhQ7b_yZjqz3hPAwWovXyFB3NHFMBLkwOkUatOHFQiYk5h4bW7A5rZsCMAvCZ--A49yL6SCZaHSX4ECCa91DdbdIZAlsXQ8933AlWLfk0oI-pjcriXjNBvOS5CLBl8Zo52Ua94"/><span class="font-bold text-lg text-white tracking-tight uppercase">CvSU DocuSecure MIS</span></div><p class="text-xs text-slate-300 max-w-md leading-relaxed">Management Information Systems &amp; Document Integrity Verification Unit. Ensuring institutional authenticity, zero-trust cryptographic assurance, and automated technical support for Cavite State University.</p><div class="flex items-center gap-2 font-mono text-xs text-cvsu-gold"><span class="material-symbols-outlined text-[16px]">verified_user</span><span>ISO 9001:2015 CERTIFIED INSTITUTIONAL REPOSITORY</span></div></div><div class="flex flex-col gap-2"><span class="font-mono text-xs uppercase font-bold text-cvsu-gold tracking-wider">Statutory Standards</span><span class="text-xs text-slate-300">RA 10173 Data Privacy Compliance</span><span class="text-xs text-slate-300">DICT Cybersecurity Circular 001</span><span class="text-xs text-slate-300">ISO/IEC 27001 Cryptographic Protocols</span><span class="text-xs text-slate-300">National Privacy Commission Registry</span></div><div class="flex flex-col gap-2"><span class="font-mono text-xs uppercase font-bold text-cvsu-gold tracking-wider">Emergency Support</span><span class="font-mono text-xs text-slate-300">MIS HOTLINE: [To be provided by CvSU MIS]</span><span class="font-mono text-xs text-slate-300">MIS EMAIL: [Official MIS email to be provided]</span><span class="font-mono text-xs text-slate-300">OFFICE: [Official MIS office address to be provided]</span><span class="font-mono text-xs text-emerald-400 font-bold">TELEMETRY: ALL CLUSTERS OPERATIONAL</span></div></div><div class="pt-6 flex flex-col md:flex-row items-center justify-between gap-4"><span class="font-mono text-xs text-slate-400 uppercase">© 2026 Cavite State University (CvSU). All rights reserved. DocuSecure MIS.</span><div class="flex items-center gap-4 font-mono text-xs text-slate-400"><a class="hover:text-cvsu-gold transition-colors" href="#">PRIVACY NOTICE</a><span>•</span><a class="hover:text-cvsu-gold transition-colors" href="#">TERMS OF CLEARANCE</a><span>•</span><a class="hover:text-cvsu-gold transition-colors" href="#">SYSTEM AUDIT LOGS</a></div></div></div></footer></body></html>