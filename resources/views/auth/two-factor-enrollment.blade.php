<!DOCTYPE html>

<html class="dark" lang="en"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><meta content="web_blank" name="shell-type"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config={darkMode:"class",theme:{extend:{colors:{"primary":"#9fd2b4","primary-fixed":"#baeecf","primary-fixed-dim":"#9fd2b4","secondary":"#b6ccbd","secondary-fixed":"#d2e8d8","surface":"#0f172a","background":"#0f172a","outline":"#8a938c","outline-variant":"#414943"},borderRadius:{DEFAULT:"0.125rem",lg:"0.25rem",xl:"0.5rem","2xl":"0.75rem",full:"0.75rem"},spacing:{"space-xs":"0.25rem","space-sm":"0.5rem","space-md":"1rem","space-lg":"1.5rem","space-xl":"2.5rem","margin":"3rem","gutter":"1.5rem","gutter-mobile":"1rem"},fontFamily:{display:["Inter","sans-serif"],body:["Inter","sans-serif"],"label-mono":["JetBrains Mono","monospace"]},fontSize:{"display-sm":["1.125rem",{lineHeight:"1.625rem",fontWeight:"600"}],"display-md":["1.5rem",{lineHeight:"2rem",fontWeight:"700"}],"display-lg":["2rem",{lineHeight:"2.5rem",fontWeight:"700"}],"body-xs":["0.75rem",{lineHeight:"1.125rem",fontWeight:"400"}],"body-sm":["0.8125rem",{lineHeight:"1.25rem",fontWeight:"400"}],"body-md":["0.875rem",{lineHeight:"1.375rem",fontWeight:"400"}],"label-xs":["0.6875rem",{lineHeight:"0.875rem",letterSpacing:"0.06em",fontWeight:"500"}],"label-sm":["0.75rem",{lineHeight:"1rem",letterSpacing:"0.05em",fontWeight:"500"}],"label-md":["0.875rem",{lineHeight:"1.25rem",letterSpacing:"0.04em",fontWeight:"600"}]}}}};</script></head><body class="bg-[#0f172a] font-body text-[#e1e3df] antialiased min-h-screen flex flex-col justify-between selection:bg-[#baeecf] selection:text-[#00311e]"><main class="w-full flex-1 flex flex-col items-center justify-center p-space-sm md:p-space-md"><div class="flex flex-col w-full max-w-6xl mx-auto py-2 md:py-space-md px-gutter-mobile md:px-gutter">
<!-- Top Telemetry & Session Diagnostic Strip -->
<div class="w-full flex flex-wrap items-center justify-between gap-space-sm bg-[#162032] border border-[#23354d] px-space-md py-space-xs rounded-xl shadow-sm mb-space-md">
<div class="flex items-center gap-space-sm">
<span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-[#14452f] text-[#baeecf] font-label-mono text-label-xs font-bold">4</span>
<span class="font-label-mono text-label-xs text-white uppercase tracking-wider font-semibold">SECURITY ENROLLMENT PHASE</span>
<span class="text-[#414943] font-label-mono text-label-xs">•</span>
<span class="font-label-mono text-label-xs text-[#9fd2b4] tracking-wide">STAGE 4 OF 4: HARDWARE CREDENTIAL ATTESTATION</span>
</div>
<div class="flex items-center gap-space-md font-label-mono text-label-xs text-[#8a938c]">
<span class="flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-[#9fd2b4] animate-pulse"></span>
<span>SESSION: <strong class="text-white">#SEC-90812-FIPS</strong></span>
</span>
<span class="hidden md:inline-block text-[#414943]">•</span>
<span class="hidden md:flex items-center gap-1">SESSION TIMEOUT: <span class="text-[#9fd2b4] font-bold" id="timer">14:59</span></span>
</div>
</div>
<!-- Main Split Architecture Card -->
<div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-stretch">
<!-- LEFT PANEL: Brand & Security Authority (Deep Institutional Navy) -->
<div class="lg:col-span-5 relative flex flex-col justify-between p-6 sm:p-space-xl rounded-xl bg-[#173153] text-[#e1e3df] overflow-hidden shadow-2xl border border-[#22446d]">
<!-- Engineering Micro-Grid SVG Overlay -->
<div class="absolute inset-0 opacity-10 pointer-events-none">
<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
<defs>
<pattern height="28" id="eng-grid" patternunits="userSpaceOnUse" width="28">
<path d="M 28 0 L 0 0 0 28" fill="none" stroke="#baeecf" stroke-width="0.75"></path>
</pattern>
</defs>
<rect fill="url(#eng-grid)" height="100%" width="100%"></rect>
</svg>
</div>
<!-- Left Panel Content -->
<div class="relative z-10 flex flex-col space-y-4">
<!-- University Seal Header -->
<div class="flex items-start justify-between">
<div class="flex items-center gap-3">
<img alt="Cavite State University Official Seal" class="w-14 h-14 object-contain filter drop-shadow-md" src="{{ asset('images/cvsu-logo-placeholder.svg') }}"/>
<div class="flex flex-col">
<span class="font-label-mono text-label-xs uppercase tracking-wider text-[#eabf55] font-semibold">Cavite State University</span>
<span class="font-body text-body-sm text-[#b6ccbd] opacity-90">DocuSecure Vault Infrastructure</span>
</div>
</div>
<div class="bg-[#14452f] text-[#baeecf] font-label-mono text-label-xs px-2.5 py-1 rounded shadow-sm font-semibold">
REV-24
</div>
</div>
<!-- Golden Tag Security Pill -->
<div class="inline-flex items-center gap-1.5 bg-[#0c1f35] px-3 py-1 rounded w-fit text-[#eabf55] border border-[#eabf55]/20">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span class="font-label-mono text-label-xs tracking-wider font-semibold">INITIAL ONBOARDING • FIPS 140-3 LEVEL 3</span>
</div>
<!-- Bold Sovereign Headline -->
<div class="space-y-1.5 pt-1">
<h1 class="font-display text-display-lg text-white leading-tight font-bold">
Enroll your cryptographic authenticator.
</h1>
<p class="font-body text-body-md text-[#b6ccbd] leading-relaxed">
CvSU Institutional Zero-Trust Directive requires a cryptographically bound hardware token (FIDO2/WebAuthn) or time-synchronized multi-factor authenticator prior to accessing institutional clearance vaults.
</p>
</div>
<!-- Target Identity Dossier Section -->
<div class="bg-[#0f243e]/90 border border-[#244b7a] rounded-lg p-3.5 space-y-3">
<div class="flex items-center justify-between pb-1.5 border-b border-[#244b7a]">
<span class="font-label-mono text-[10px] uppercase tracking-wider text-[#9bb3ce]">IDENTITY DOSSIER // STAGE 3 VALIDATED</span>
<span class="inline-flex items-center gap-1 font-label-mono text-label-xs text-[#9fd2b4] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#9fd2b4]"></span> AUTHORIZED
</span>
</div>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded bg-[#1f456e] flex items-center justify-center text-[#baeecf] font-display text-base font-bold shadow-inner">
JD
</div>
<div class="flex flex-col min-w-0 flex-1">
<div class="flex items-center gap-1.5">
<span class="font-display text-body-md font-bold text-white truncate">Prof. Juan Dela Cruz</span>
<span class="material-symbols-outlined text-[15px] text-[#9fd2b4]">verified</span>
</div>
<span class="font-label-mono text-body-xs text-[#9bb3ce] truncate">j.delacruz@cvsu.edu.ph</span>
<span class="font-body text-[11px] text-[#b6ccbd] truncate">Faculty • CEIT Department</span>
</div>
</div>
<div class="grid grid-cols-2 gap-2 pt-1 font-label-mono text-body-xs bg-[#0b1b2d] p-2 rounded">
<div>
<span class="text-[#8a938c] block text-[10px] uppercase tracking-wider">Faculty Ref ID</span>
<span class="text-white font-semibold">CVSU-FAC-2016-0842</span>
</div>
<div>
<span class="text-[#8a938c] block text-[10px] uppercase tracking-wider">Clearance</span>
<span class="text-white font-semibold">Tier IV (Registrar)</span>
</div>
</div>
</div>
<!-- Compliance Checklist Bullets -->
<div class="space-y-2 pt-1">
<div class="flex items-center gap-2.5">
<div class="rounded-full p-0.5 bg-[#14452f] text-[#9fd2b4] flex items-center justify-center">
<span class="material-symbols-outlined text-[15px]">check_circle</span>
</div>
<span class="font-body text-body-xs text-[#b6ccbd]">CHED Memo Order No. 44 Series 2021 Compliant</span>
</div>
<div class="flex items-center gap-2.5">
<div class="rounded-full p-0.5 bg-[#14452f] text-[#9fd2b4] flex items-center justify-center">
<span class="material-symbols-outlined text-[15px]">verified_user</span>
</div>
<span class="font-body text-body-xs text-[#b6ccbd]">NPC Circular 16-01 Personal Data Protection Bound</span>
</div>
<div class="flex items-center gap-2.5">
<div class="rounded-full p-0.5 bg-[#14452f] text-[#9fd2b4] flex items-center justify-center">
<span class="material-symbols-outlined text-[15px]">policy</span>
</div>
<span class="font-body text-body-xs text-[#b6ccbd]">Dual-Factor Key Derivation (PBKDF2-HMAC-SHA512)</span>
</div>
</div>
<!-- MIS Operations Desk Notice -->
<div class="bg-[#0b1b2d]/80 border border-[#1f3f63] rounded-lg p-3 flex items-start gap-2.5 mt-2">
<span class="material-symbols-outlined text-[18px] text-[#eabf55] mt-0.5">contact_support</span>
<div class="flex flex-col text-body-xs">
<span class="text-white font-semibold">MIS Operations Desk</span>
<span class="text-[#9bb3ce]">Key malfunction? Contact MIS: <strong class="text-[#eabf55] font-label-mono">(046) 862-0852 loc. 214</strong></span>
</div>
</div>
</div>
<!-- Bottom Gateway Status -->
<div class="relative z-10 pt-4 mt-4 border-t border-[#244b7a]/50 flex items-center justify-between text-[#8a938c]">
<div class="flex items-center gap-1 font-label-mono text-label-xs">
<span class="material-symbols-outlined text-[15px] text-[#eabf55]">dns</span>
<span>SECURITY VAULT // NODE 04</span>
</div>
<span class="font-label-mono text-label-xs tracking-wider text-[#9fd2b4]">STATUS: NOMINAL</span>
</div>
</div>
<!-- RIGHT PANEL: Action Card (Crisp Bright White Card #ffffff) -->
<div class="lg:col-span-7 bg-[#ffffff] text-[#111412] p-6 sm:p-8 rounded-xl shadow-2xl flex flex-col justify-between border border-slate-200">
<div class="space-y-5">
<!-- Card Header Area -->
<div class="flex items-start sm:items-center justify-between gap-3 pb-3 border-b border-slate-100">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded bg-[#173153] text-[#baeecf] flex items-center justify-center shadow-sm flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">shield_person</span>
</div>
<div>
<h2 class="font-display text-display-md text-[#173153] font-bold tracking-tight">Set Up Two-Factor Authentication (2FA)</h2>
<p class="font-body text-body-sm text-slate-500">Select your primary attestation hardware protocol</p>
</div>
</div>
<span class="inline-flex items-center gap-1 bg-[#14452f]/10 text-[#14452f] font-label-mono text-label-xs px-2.5 py-1 rounded font-bold uppercase tracking-wider flex-shrink-0">
<span class="material-symbols-outlined text-[14px]">lock_clock</span>
MANDATORY
</span>
</div>
<!-- Protocol Switcher Tabs -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 p-1 bg-slate-100 rounded-lg">
<button class="flex items-center gap-2.5 px-3.5 py-2.5 rounded-md text-left transition-all duration-150 bg-[#173153] text-white shadow-sm font-label-mono text-label-sm" id="tab-hardware" onclick="switchMethod('hardware')" type="button">
<span class="material-symbols-outlined text-[18px] text-[#9fd2b4]">key</span>
<div class="flex flex-col min-w-0">
<span class="font-bold text-white text-xs">Hardware Key (FIDO2)</span>
<span class="text-[10px] text-[#9fd2b4] font-medium tracking-wide">RECOMMENDED • FASTEST</span>
</div>
</button>
<button class="flex items-center gap-2.5 px-3.5 py-2.5 rounded-md text-left transition-all duration-150 hover:bg-white/80 text-slate-600 font-label-mono text-label-sm" id="tab-totp" onclick="switchMethod('totp')" type="button">
<span class="material-symbols-outlined text-[18px]">phone_android</span>
<div class="flex flex-col min-w-0">
<span class="font-bold text-slate-700 text-xs">CvSU Authenticator / TOTP</span>
<span class="text-[10px] text-slate-500 font-medium tracking-wide">RFC 6238 COMPLIANT</span>
</div>
</button>
</div>
<!-- FLOW 1: Hardware Security Key -->
<div class="flex flex-col gap-4" id="flow-hardware">
<!-- Prompt & Biometric Visual Box -->
<div class="bg-slate-50 border border-slate-200/80 rounded-xl p-6 flex flex-col items-center justify-center text-center">
<div class="w-16 h-16 rounded-2xl bg-[#173153]/5 border border-[#173153]/15 flex items-center justify-center mb-3">
<span class="material-symbols-outlined text-[36px] text-[#173153]">usb</span>
</div>
<h3 class="font-display text-display-sm font-bold text-[#173153]">
Plug in your FIDO2 key or trigger biometrics
</h3>
<p class="font-body text-body-sm text-slate-600 max-w-md mt-1 leading-relaxed">
Insert your physical USB / NFC security key (YubiKey, SoloKey) or initiate your system's Windows Hello / Apple Touch ID passkey.
</p>
<!-- Key Registration Trigger Button -->
<div class="mt-4 w-full max-w-xs">
<button class="w-full flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg bg-[#14452f] hover:bg-[#103826] text-white font-label-mono text-label-sm font-semibold shadow transition-all cursor-pointer" id="btn-register-key" onclick="simulateHardwareRegister()" type="button">
<span class="material-symbols-outlined text-[18px]">fingerprint</span>
<span>Register Security Key / Biometric</span>
</button>
</div>
<!-- Listener Status Box -->
<div class="mt-3 flex items-center gap-2 px-3 py-1 rounded bg-white border border-slate-200 font-label-mono text-[11px] text-slate-600" id="key-status-box">
<span class="w-2 h-2 rounded-full bg-[#14452f] animate-ping" id="key-status-dot"></span>
<span id="key-status-text">WebAuthn Listener Ready: Awaiting Hardware Challenge...</span>
</div>
</div>
<!-- Hardware Key Features Micro-Grid -->
<div class="grid grid-cols-3 gap-2">
<div class="bg-slate-50 border border-slate-200/70 p-2.5 rounded-lg">
<div class="flex items-center gap-1 text-[#173153] font-label-mono text-[11px] font-bold">
<span class="material-symbols-outlined text-[15px] text-[#14452f]">shield</span>
Phishing-Proof
</div>
<p class="text-[11px] text-slate-500 mt-0.5">Bound to domain <code class="text-[#173153] font-semibold">cvsu.edu.ph</code></p>
</div>
<div class="bg-slate-50 border border-slate-200/70 p-2.5 rounded-lg">
<div class="flex items-center gap-1 text-[#173153] font-label-mono text-[11px] font-bold">
<span class="material-symbols-outlined text-[15px] text-[#14452f]">bolt</span>
Single-Touch
</div>
<p class="text-[11px] text-slate-500 mt-0.5">Hardware attestation in under 1.2s</p>
</div>
<div class="bg-slate-50 border border-slate-200/70 p-2.5 rounded-lg">
<div class="flex items-center gap-1 text-[#173153] font-label-mono text-[11px] font-bold">
<span class="material-symbols-outlined text-[15px] text-[#14452f]">devices</span>
Universal
</div>
<p class="text-[11px] text-slate-500 mt-0.5">USB-A/C, NFC, Passkeys</p>
</div>
</div>
</div>
<!-- FLOW 2: TOTP Flow (Hidden by Default) -->
<div class="hidden flex-col gap-4" id="flow-totp">
<div class="bg-slate-50 border border-slate-200 rounded-xl p-4 flex flex-col sm:flex-row gap-4 items-center">
<!-- QR Preview -->
<div class="flex flex-col items-center gap-1.5 p-2 bg-white border border-slate-200 rounded-lg shadow-sm flex-shrink-0">
<div class="w-32 h-32 bg-slate-900 rounded p-1 flex items-center justify-center">
<svg class="w-full h-full text-white" fill="currentColor" viewbox="0 0 100 100">
<rect fill="currentColor" height="28" rx="2" width="28" x="0" y="0"></rect>
<rect fill="#0f172a" height="20" rx="1" width="20" x="4" y="4"></rect>
<rect fill="currentColor" height="12" rx="1" width="12" x="8" y="8"></rect>
<rect fill="currentColor" height="28" rx="2" width="28" x="72" y="0"></rect>
<rect fill="#0f172a" height="20" rx="1" width="20" x="76" y="4"></rect>
<rect fill="currentColor" height="12" rx="1" width="12" x="80" y="8"></rect>
<rect fill="currentColor" height="28" rx="2" width="28" x="0" y="72"></rect>
<rect fill="#0f172a" height="20" rx="1" width="20" x="4" y="76"></rect>
<rect fill="currentColor" height="12" rx="1" width="12" x="8" y="80"></rect>
<rect fill="currentColor" height="8" width="8" x="36" y="4"></rect>
<rect fill="currentColor" height="8" width="8" x="48" y="4"></rect>
<rect fill="currentColor" height="8" width="16" x="36" y="16"></rect>
<rect fill="currentColor" height="12" width="12" x="44" y="32"></rect>
<rect fill="currentColor" height="16" width="8" x="28" y="36"></rect>
<rect fill="currentColor" height="8" width="20" x="36" y="52"></rect>
<rect fill="currentColor" height="8" width="16" x="48" y="68"></rect>
<circle cx="50" cy="50" fill="#baeecf" r="7"></circle>
</svg>
</div>
<span class="font-label-mono text-[10px] text-slate-500">Scan via Authenticator</span>
</div>
<div class="flex-1 flex flex-col gap-2.5 w-full">
<div class="space-y-0.5">
<span class="font-display text-body-md font-bold text-[#173153]">Enter Secret Key or Scan</span>
<p class="font-body text-body-xs text-slate-500">Use Google Authenticator or Microsoft Authenticator.</p>
</div>
<div class="flex items-center gap-2 bg-white border border-slate-200 p-1.5 rounded-lg">
<code class="flex-1 font-label-mono text-body-xs text-[#173153] font-bold px-2 tracking-wider" id="secret-key-val">CVSU-7X9B-44KM-SEC9</code>
<button class="px-2.5 py-1 rounded bg-slate-100 hover:bg-slate-200 text-slate-700 font-label-mono text-[11px] flex items-center gap-1 transition-colors" onclick="copySecretKey()" type="button">
<span class="material-symbols-outlined text-[14px]">content_copy</span>
<span id="copy-btn-label">Copy</span>
</button>
</div>
<!-- 6-Digit Code Input -->
<div class="space-y-1 pt-1">
<label class="font-label-mono text-[11px] font-semibold text-slate-700">Verify 6-Digit Authenticator Code</label>
<div class="flex items-center gap-1.5">
<input class="totp-digit w-9 h-10 text-center font-label-mono text-display-sm font-bold bg-white border border-slate-300 rounded focus:border-[#173153] focus:outline-none" maxlength="1" oninput="handleDigitInput(this, 0)" type="text"/>
<input class="totp-digit w-9 h-10 text-center font-label-mono text-display-sm font-bold bg-white border border-slate-300 rounded focus:border-[#173153] focus:outline-none" maxlength="1" oninput="handleDigitInput(this, 1)" type="text"/>
<input class="totp-digit w-9 h-10 text-center font-label-mono text-display-sm font-bold bg-white border border-slate-300 rounded focus:border-[#173153] focus:outline-none" maxlength="1" oninput="handleDigitInput(this, 2)" type="text"/>
<span class="text-slate-400 font-bold">-</span>
<input class="totp-digit w-9 h-10 text-center font-label-mono text-display-sm font-bold bg-white border border-slate-300 rounded focus:border-[#173153] focus:outline-none" maxlength="1" oninput="handleDigitInput(this, 3)" type="text"/>
<input class="totp-digit w-9 h-10 text-center font-label-mono text-display-sm font-bold bg-white border border-slate-300 rounded focus:border-[#173153] focus:outline-none" maxlength="1" oninput="handleDigitInput(this, 4)" type="text"/>
<input class="totp-digit w-9 h-10 text-center font-label-mono text-display-sm font-bold bg-white border border-slate-300 rounded focus:border-[#173153] focus:outline-none" maxlength="1" oninput="handleDigitInput(this, 5)" type="text"/>
</div>
</div>
</div>
</div>
</div>
<!-- Cryptographic Backup Bypass Codes Block -->
<div class="bg-slate-50 border border-slate-200/90 rounded-xl p-4 space-y-3">
<div class="flex items-center justify-between gap-3">
<div class="flex items-center gap-2.5">
<div class="p-1.5 rounded bg-slate-200/80 text-[#173153]">
<span class="material-symbols-outlined text-[18px]">key</span>
</div>
<div>
<h4 class="font-display text-body-sm font-bold text-[#173153]">Cryptographic Backup Bypass Codes</h4>
<p class="font-body text-[11px] text-slate-500">10 single-use recovery codes generated for emergency account salvage.</p>
</div>
</div>
<button class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-white hover:bg-slate-100 border border-slate-300 text-slate-700 font-label-mono text-[11px] transition-colors shadow-sm" onclick="downloadCodes()" type="button">
<span class="material-symbols-outlined text-[14px]">download</span>
<span>Download .TXT</span>
</button>
</div>
<!-- 10 Monospace Backup Codes Grid -->
<div class="grid grid-cols-2 sm:grid-cols-5 gap-1.5 font-label-mono text-[11px] text-slate-700 bg-white p-2.5 rounded-lg border border-slate-200 shadow-inner">
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">9012-A832</span>
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">4419-BC99</span>
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">1029-ZZ48</span>
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">7821-MN51</span>
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">6603-QX10</span>
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">3389-KL02</span>
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">5471-TR84</span>
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">8802-WE11</span>
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">2190-FA77</span>
<span class="p-1 rounded bg-slate-50 border border-slate-200 text-center font-semibold">4955-OP93</span>
</div>
<!-- Policy Checkbox -->
<label class="flex items-start gap-2.5 cursor-pointer pt-0.5 select-none">
<input class="mt-0.5 w-4 h-4 rounded text-[#173153] border-slate-300 focus:ring-0 cursor-pointer accent-[#173153]" id="policy-ack" type="checkbox"/>
<span class="font-body text-[11px] text-slate-600 leading-snug">
I confirm that I have securely exported or stored my single-use backup recovery codes in accordance with the <strong class="text-slate-800">CvSU Institutional ICT Security and Data Retention Policy (Rev. 2024)</strong>.
</span>
</label>
</div>
<!-- Primary Full-Width Solid Navy Action CTA -->
<div class="space-y-2 pt-1">
<button class="w-full bg-[#173153] hover:bg-[#1f4270] active:bg-[#0f2138] text-white font-label-mono text-label-md py-3 px-space-lg rounded-lg flex items-center justify-center gap-2 shadow-lg transition-all cursor-pointer group font-bold" id="btn-complete-setup" onclick="completeEnrollment()" type="button">
<span class="material-symbols-outlined text-[18px]">lock</span>
<span>Complete Setup &amp; Launch Workspace</span>
<span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
<div class="flex items-center justify-center">
<button class="text-slate-500 hover:text-red-700 font-label-mono text-label-xs text-center transition-colors underline decoration-dotted" onclick="confirmDeferral()" type="button">
Skip for 24 Hours (Restricted Access Tier)
</button>
</div>
</div>
</div>
<!-- Action Card Footer Info -->
<div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-2 text-slate-500 font-body text-body-xs">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[15px] text-[#14452f]">security</span>
<span>FIPS 140-3 Hardware Enclave Attested</span>
</div>
<div class="flex items-center gap-1 font-label-mono text-[11px]">
<span class="material-symbols-outlined text-[14px] text-[#eabf55]">support_agent</span>
<span>CvSU MIS: <strong class="text-[#173153]">(046) 862-0852 loc. 214</strong></span>
</div>
</div>
</div>
</div>
<!-- Bottom Legal & Compliance Telemetry Strip -->
<div class="w-full mt-space-md py-space-xs px-space-md flex flex-wrap items-center justify-between gap-space-sm text-[#8a938c] font-label-mono text-label-xs">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-[16px] text-[#9fd2b4]">policy</span>
<span>Republic Act No. 10173 (Data Privacy Act of 2012) • Automated MIS Cryptographic Record</span>
</div>
<div class="flex items-center gap-space-md">
<span>ISO 9001:2015 CERTIFIED SYSTEM</span>
<span>CVSU-MIS-SEC-V4</span>
</div>
</div>
</div>
<script>
  // Dynamic Tab Switching
  function switchMethod(method) {
    const hwTab = document.getElementById('tab-hardware');
    const totpTab = document.getElementById('tab-totp');
    const hwFlow = document.getElementById('flow-hardware');
    const totpFlow = document.getElementById('flow-totp');

    if (method === 'hardware') {
      hwTab.className = "flex items-center gap-2.5 px-3.5 py-2.5 rounded-md text-left transition-all duration-150 bg-[#173153] text-white shadow-sm font-label-mono text-label-sm";
      hwTab.querySelector('.text-xs').className = "font-bold text-white text-xs";
      totpTab.className = "flex items-center gap-2.5 px-3.5 py-2.5 rounded-md text-left transition-all duration-150 hover:bg-white/80 text-slate-600 font-label-mono text-label-sm";
      totpTab.querySelector('.text-xs').className = "font-bold text-slate-700 text-xs";
      hwFlow.classList.remove('hidden');
      hwFlow.classList.add('flex');
      totpFlow.classList.add('hidden');
      totpFlow.classList.remove('flex');
    } else {
      totpTab.className = "flex items-center gap-2.5 px-3.5 py-2.5 rounded-md text-left transition-all duration-150 bg-[#173153] text-white shadow-sm font-label-mono text-label-sm";
      totpTab.querySelector('.text-xs').className = "font-bold text-white text-xs";
      hwTab.className = "flex items-center gap-2.5 px-3.5 py-2.5 rounded-md text-left transition-all duration-150 hover:bg-white/80 text-slate-600 font-label-mono text-label-sm";
      hwTab.querySelector('.text-xs').className = "font-bold text-slate-700 text-xs";
      totpFlow.classList.remove('hidden');
      totpFlow.classList.add('flex');
      hwFlow.classList.add('hidden');
      hwFlow.classList.remove('flex');
    }
  }

  // Simulate Hardware Key Attestation
  let isHardwareRegistered = false;
  function simulateHardwareRegister() {
    const statusText = document.getElementById('key-status-text');
    const statusDot = document.getElementById('key-status-dot');
    const btn = document.getElementById('btn-register-key');

    statusText.innerText = "Listening for FIDO2 assertion... Touch your hardware key now.";
    statusDot.className = "w-2 h-2 rounded-full bg-[#eabf55] animate-ping";
    btn.disabled = true;
    btn.innerHTML = `<span class="material-symbols-outlined text-[18px] animate-spin">progress_activity</span> Authenticating Key...`;

    setTimeout(() => {
      statusText.innerText = "Hardware Key Enrolled: FIDO2 Attestation Verified [YubiKey 5C NFC / ECDSA]";
      statusDot.className = "w-2 h-2 rounded-full bg-[#14452f]";
      btn.className = "w-full flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg bg-[#14452f] text-[#baeecf] font-label-mono text-label-sm font-semibold shadow cursor-default";
      btn.innerHTML = `<span class="material-symbols-outlined text-[18px] text-[#baeecf]">check_circle</span> Hardware Key Registered`;
      isHardwareRegistered = true;
    }, 1600);
  }

  // Copy Secret Key Helper
  function copySecretKey() {
    const key = document.getElementById('secret-key-val').innerText;
    navigator.clipboard.writeText(key).then(() => {
      const lbl = document.getElementById('copy-btn-label');
      lbl.innerText = "Copied!";
      setTimeout(() => { lbl.innerText = "Copy"; }, 2000);
    });
  }

  // Digit Input auto-focus advancement
  function handleDigitInput(el, index) {
    const digits = document.querySelectorAll('.totp-digit');
    if (el.value.length === 1 && index < digits.length - 1) {
      digits[index + 1].focus();
    }
  }

  // Download Backup Codes
  function downloadCodes() {
    const content = "CAVITE STATE UNIVERSITY - DOCUSECURE VAULT\nEMERGENCY 2FA BACKUP RECOVERY CODES\nUSER: Prof. Juan Dela Cruz (j.delacruz@cvsu.edu.ph)\nISSUE DATE: 2025-02-23\n\n1. 9012-A832\n2. 4419-BC99\n3. 1029-ZZ48\n4. 7821-MN51\n5. 6603-QX10\n6. 3389-KL02\n7. 5471-TR84\n8. 8802-WE11\n9. 2190-FA77\n10. 4955-OP93\n\nStore securely. Each code is valid once.";
    const blob = new Blob([content], { type: 'text/plain' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'CvSU-DocuSecure-Backup-Codes.txt';
    a.click();
    URL.revokeObjectURL(url);
  }

  // Session countdown timer simulation
  let duration = 899;
  const timerDisplay = document.getElementById('timer');
  setInterval(() => {
    if (duration <= 0) return;
    duration--;
    const minutes = Math.floor(duration / 60);
    const seconds = duration % 60;
    if (timerDisplay) {
      timerDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    }
  }, 1000);

  // Complete Enrollment Action with Validation
  function completeEnrollment() {
    const ack = document.getElementById('policy-ack');
    if (!ack.checked) {
      alert("Please confirm acknowledgment of storing your emergency backup recovery codes prior to continuing.");
      ack.focus();
      return;
    }

    const btn = document.getElementById('btn-complete-setup');
    btn.disabled = true;
    btn.innerHTML = `<span class="material-symbols-outlined text-[18px] animate-spin">progress_activity</span> Generating Cryptographic Vault Keypair...`;

    setTimeout(() => {
      btn.innerHTML = `<span class="material-symbols-outlined text-[18px] text-[#baeecf]">verified</span> 2FA Enrollment Complete`;
      btn.classList.remove('bg-[#173153]');
      btn.classList.add('bg-[#14452f]');
      setTimeout(() => {
        alert("Two-Factor Authentication Enrolled Successfully. Launching CEIT Registrar Workspace.");
      }, 300);
    }, 1200);
  }

  // Deferral warning confirmation
  function confirmDeferral() {
    if (confirm("Deferring 2FA enrollment will restrict document export, grade verification signing, and registrar approvals for 24 hours. Proceed to restricted tier?")) {
      alert("Session restricted to Read-Only Clearance. Redirecting...");
    }
  }
</script></main><footer class="w-full bg-[#0b1322] border-t border-[#1e293b] px-space-lg py-space-md flex flex-col md:flex-row items-center justify-between gap-space-sm"><div class="flex items-center gap-space-xs font-label-mono text-label-xs text-[#8a938c]"><span class="material-symbols-outlined text-[16px] text-[#9fd2b4]">verified</span><span>Cavite State University • Confidential Record Verification System • ISO 9001:2015 / RA 10173 Compliant</span></div><div class="font-label-mono text-label-xs text-[#414943]">ISO/IEC 27001 AUDITED INFRASTRUCTURE • ZERO-TRUST ACTIVE</div></footer>
<script src="{{ asset('js/docusecure-auth-demo.js') }}" defer></script>
</body></html>

<!-- DocuSecure - Stage 3 Clearance Action Required (Theme Aligned) -->
