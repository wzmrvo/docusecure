<!DOCTYPE html><html class="light" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="web_dashboard" name="shell-type">
<title>CvSU DocuSecure - Student Portal</title>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<style>
    @layer base {
      html, body { margin:0; padding:0; }
      body { overscroll-behavior:none; }
      main > :first-child { margin-top:0 !important; }
      main > :last-child { margin-bottom:0 !important; }
    }
    ::-webkit-scrollbar { width: 6px; height: 6px; }
    ::-webkit-scrollbar-track { background: #f1f5f9; }
    ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 3px; }
  </style>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            brand: {
              navy: "#173153",
              "navy-dark": "#112239",
              "navy-hover": "#1e3f69",
              gold: "#d4a017",
              "gold-light": "#fef3c7",
              "gold-text": "#b45309"
            }
          },
          fontFamily: {
            sans: ["Inter", "sans-serif"],
            mono: ["JetBrains Mono", "monospace"]
          }
        }
      }
    };
  </script>
</head>
<body class="bg-[#f8fafc] font-sans text-slate-800 antialiased min-h-screen">
<!-- Left Sidebar (Deep Solid Dark Navy matching IMAGE_2) -->
<aside class="fixed left-0 top-0 bottom-0 w-64 bg-[#173153] z-50 flex flex-col justify-between p-4 text-white select-none">
<div class="flex flex-col gap-6">
<!-- Brand Logo -->
<div class="flex flex-col items-center text-center gap-2.5 px-2 pt-2 pb-3 border-b border-slate-700/50"><img alt="Cavite State University Official Seal" class="w-14 h-auto drop-shadow-md object-contain" src="{{ asset('images/cvsu-logo.png') }}">
<div class="flex flex-col items-center">
<span class="text-lg font-bold tracking-tight text-white leading-tight">DocuSecure</span>
<span class="text-[10px] font-semibold text-slate-300 mt-0.5 uppercase tracking-wider">Cavite State University</span>
<span class="text-[9px] font-mono text-[#9fd2b4] mt-0.5 tracking-wider">STUDENT ENCLAVE • TIER 1</span>
</div></div>
<!-- Navigation Section 1: WORKSPACE -->
<div class="flex flex-col gap-1.5">
<span class="px-3 text-[11px] font-semibold text-slate-400 uppercase tracking-wider">CORE MODULES</span>
<nav class="flex flex-col gap-1"><a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 font-normal text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">grid_view</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 font-normal text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">description</span>
<span>Documents</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 font-normal text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">category</span>
<span>Categories</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 font-normal text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">local_library</span>
<span>Library / Research</span>
</a></nav>
</div>
<!-- Navigation Section 2: ADMINISTRATION / ACCOUNT -->
<div class="flex flex-col gap-1.5">
<span class="px-3 text-[11px] font-semibold text-slate-400 uppercase tracking-wider">SETTINGS &amp; PREFERENCES</span>
<nav class="flex flex-col gap-1"><a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 font-normal text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">manage_accounts</span>
<span>Account Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#112239] text-white font-medium text-sm transition-colors shadow-inner border-l-2 border-amber-500" href="#"><span class="material-symbols-outlined text-[20px] text-amber-500">tune</span><span>System / Portal Settings</span></a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 font-normal text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">logout</span>
<span>Logout</span>
</a></nav>
</div>
</div>
<!-- Bottom Sidebar Footer Indicator (Matching IMAGE_2 prototype pill) -->
<div class="bg-[#112239] rounded-lg p-3 border border-slate-700/60 flex flex-col gap-1.5">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#f59e0b] text-[18px]">verified_user</span>
<span class="text-xs font-semibold text-white">Tier 1 Student Access</span>
</div>
<p class="text-[11px] text-slate-400 leading-tight">Read-only cryptographic session · No upload privileges</p>
<div class="mt-1 flex items-center justify-between text-[10px] font-mono text-slate-400 pt-1 border-t border-slate-700/50">
<span>TLS 1.3 // SHA-256</span>
<span class="text-emerald-400">ACTIVE</span>
</div>
</div>
</aside>
<!-- Main Layout Wrapper (Shifted right by sidebar width) -->
<div class="pl-64 flex flex-col min-h-screen">
<!-- Top Header Bar (Crisp white matching IMAGE_2) -->
<header class="h-16 bg-white border-b border-slate-200 sticky top-0 z-40 flex items-center justify-between px-8">
<div class="flex items-center gap-4"><div class="flex flex-col text-left"><div class="flex items-center gap-1.5 text-[11px] font-medium text-slate-400"><span>DocuSecure</span><span class="text-slate-300">&gt;</span><span>Student Portal</span><span class="text-slate-300">&gt;</span><span class="text-[#173153] font-semibold">System / Portal Settings</span></div><h2 class="text-lg font-bold text-slate-900 tracking-tight leading-tight mt-0.5">Enclave Preferences &amp; Diagnostics</h2></div>
<span class="hidden md:inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-[#e8f6ee] text-[#16a34a] border border-[#16a34a]/20 shadow-sm">
<span class="w-1.5 h-1.5 rounded-full bg-[#16a34a] animate-pulse"></span>
AY 2026–2027 • 1st Semester Active
</span></div>
<div class="flex items-center gap-4">
<!-- Global Search Bar -->
<div class="relative w-72 md:w-80">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
<input class="w-full bg-[#f1f5f9] border-0 rounded-lg pl-9 pr-4 py-1.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#173153]/20" placeholder="Search theses, capstones, journals, faculty publications, SHA-256..." type="text">
</div>
<!-- Notification Bell -->
<button aria-label="Notifications" class="p-2 text-slate-500 hover:text-slate-800 hover:bg-slate-100 rounded-lg transition-colors relative" type="button">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-amber-500 ring-2 ring-white"></span>
</button>
<div class="h-6 w-px bg-slate-200"></div>
<!-- User Profile Dropdown -->
<div class="flex items-center gap-3 pl-1 cursor-pointer group">
<div class="w-8 h-8 rounded-full bg-[#173153] text-white flex items-center justify-center font-semibold text-xs shadow-sm">
            JM
          </div>
<div class="hidden sm:flex flex-col text-left"><span class="text-xs font-semibold text-slate-900 leading-tight group-hover:text-[#173153]">Juanito P. Mendoza</span>
<span class="text-[11px] text-slate-500">Tier 1 Student · CEIT</span></div>
<span class="material-symbols-outlined text-slate-400 text-[18px] group-hover:text-slate-700">expand_more</span>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-1 p-8 flex flex-col gap-6 bg-[#f1f5f9]"><div class="flex flex-col w-full">
<!-- Subtle cryptographic ambiance glow -->
<div class="relative w-full">
<div class="absolute -top-12 -left-12 w-96 h-96 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute top-48 right-0 w-80 h-80 bg-tertiary-container/10 rounded-full blur-3xl pointer-events-none"></div>
<!-- Top Section: Header & Quick Status Strip -->
<div class="relative flex flex-col md:flex-row md:items-end justify-between gap-4 pb-6"><div class="flex flex-col gap-1 max-w-2xl"><div class="flex items-center gap-2"><span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-mono font-bold bg-[#173153] text-amber-500 uppercase tracking-wider">CONFIG-ENCLAVE-V4</span><span class="text-xs font-mono text-slate-500 font-semibold">STU-TERM-SEC // PREF-084</span></div><h1 class="text-2xl font-bold text-slate-900 tracking-tight leading-tight mt-1">Portal Configuration &amp; Client Preferences</h1><p class="text-xs text-slate-500 leading-relaxed">Customize enclave display parameters, cryptographic cache retention, offline storage, and notification channels for student terminal sessions.</p></div><div class="flex items-center gap-3"><div class="flex flex-col items-end bg-[#f8fafc] border border-slate-200 px-4 py-2 rounded-lg shadow-xs"><span class="text-[10px] font-mono font-bold text-slate-400 uppercase tracking-wider">TERMINAL HEARTBEAT</span><span class="text-xs text-amber-500 flex items-center gap-1.5 font-mono font-bold"><span class="w-2 h-2 rounded-full bg-amber-500 animate-ping"></span>99.98% Cryptographic Sync</span></div></div></div>
<!-- Layout Grid: 12-Column Desktop Architecture -->
<div class="grid grid-cols-12 gap-6 items-start">
<!-- LEFT COLUMN: System Telemetry & Node Integrity Card (Span 4) -->
<div class="col-span-12 lg:col-span-4 flex flex-col gap-6"><div class="relative bg-[#f8fafc] rounded-xl p-5 shadow-sm border border-slate-200 flex flex-col gap-5 overflow-hidden"><div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-500 via-[#173153] to-[#16a34a]"></div><div class="flex items-center justify-between"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[#173153] text-[20px]" style="font-variation-settings: 'FILL' 1;">shield_with_heart</span><span class="text-xs font-bold text-slate-900 uppercase tracking-wider font-mono">Node Integrity</span></div><span class="text-[11px] font-mono font-semibold bg-[#e8f6ee] text-[#16a34a] border border-[#16a34a]/20 px-2 py-0.5 rounded">VERIFIED</span></div><div class="bg-white rounded-lg p-3.5 border border-slate-200 flex flex-col gap-3 shadow-xs"><div class="flex justify-between items-center text-xs"><span class="text-slate-500 font-medium">SHA-256 Latency</span><span class="text-amber-500 font-mono font-bold">0.42 ms / record</span></div><div class="w-full h-8 flex items-end"><svg class="w-full h-full text-[#173153]" fill="none" preserveAspectRatio="none" viewBox="0 0 200 40"><path d="M0 32 L20 28 L40 35 L60 20 L80 24 L100 12 L120 18 L140 10 L160 16 L180 8 L200 14" stroke="currentColor" stroke-linecap="round" stroke-width="2" vector-effect="non-scaling-stroke"></path><path d="M0 32 L20 28 L40 35 L60 20 L80 24 L100 12 L120 18 L140 10 L160 16 L180 8 L200 14 L200 40 L0 40 Z" fill="currentColor" fill-opacity="0.08"></path></svg></div><div class="flex justify-between items-center text-[10px] text-slate-400 font-mono"><span>T-60s</span><span class="text-[#16a34a] font-semibold">ZERO DROP PACKETS</span><span>NOW</span></div></div><div class="flex flex-col divide-y divide-slate-100 gap-3 text-xs"><div class="flex flex-col gap-0.5"><span class="text-[10px] font-mono uppercase text-slate-400 font-semibold">ENCLAVE NODE</span><span class="text-slate-800 font-mono font-medium">Indang Main Campus Central Gateway</span><span class="text-[11px] text-[#173153] font-mono font-bold tracking-tight">STU-2024-10892-CEIT</span></div><div class="flex flex-col gap-0.5 pt-2"><span class="text-[10px] font-mono uppercase text-slate-400 font-semibold">CONNECTION PROTOCOL</span><div class="flex items-center gap-1.5 text-slate-800 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-[#16a34a]"></span><span>TLS 1.3 / SHA-256 Strict</span></div><span class="text-[11px] text-slate-500">Zero-Trust Ephemeral Sandbox Active</span></div><div class="flex flex-col gap-0.5 pt-2"><span class="text-[10px] font-mono uppercase text-slate-400 font-semibold">CLIENT RUNTIME VERSION</span><span class="text-slate-800 font-mono">DocuSecure Client v4.2.1-Enclave</span><span class="text-[11px] text-slate-400">Build Tag: Release AY 2026-Q1</span></div><div class="flex flex-col gap-0.5 pt-2"><span class="text-[10px] font-mono uppercase text-slate-400 font-semibold">CRYPTOGRAPHIC ENGINE</span><div class="flex items-center gap-1.5 text-slate-800 font-medium"><span class="material-symbols-outlined text-[16px] text-amber-500">memory</span><span>WebCrypto API + SHA-256 Native Assembly</span></div><span class="text-[11px] text-slate-600 font-mono">Hardware Vector Accelerated [CEIT-ARM64]</span></div></div><div class="bg-white border border-slate-200 rounded-lg p-3 text-center flex flex-col items-center gap-1.5 relative overflow-hidden"><span class="text-[10px] font-mono text-slate-400 uppercase tracking-wider font-semibold">SESSION NONCE IDENTIFIER</span><span class="text-xs text-[#173153] font-mono font-bold break-all select-all">9e7b2f4c-d10a-48f1-a6e3-cvsu0026a7c1</span></div></div><div class="bg-[#f8fafc] border border-slate-200 rounded-xl p-5 shadow-sm flex flex-col gap-3"><div class="flex items-center gap-2 text-slate-900"><span class="material-symbols-outlined text-amber-500 text-[18px]">policy</span><span class="text-sm font-bold text-slate-800">Security Sandbox Directive</span></div><p class="text-xs text-slate-600 leading-relaxed">Settings configured on this terminal apply to local session rendering only. University document cryptographic signatures remain immutable under Republic Act 8792.</p></div></div>
<!-- RIGHT COLUMN: Interactive Preference Panes (Span 8) -->
<div class="col-span-12 lg:col-span-8 flex flex-col gap-6"><div class="bg-[#f8fafc] border border-slate-200 rounded-xl p-6 shadow-sm flex flex-col gap-6"><div class="flex items-center justify-between pb-2 border-b border-slate-200"><div class="flex items-center gap-2.5"><div class="w-8 h-8 rounded-lg bg-[#173153] flex items-center justify-center text-amber-500"><span class="material-symbols-outlined text-[20px]">palette</span></div><div><h2 class="text-base font-bold text-slate-900 leading-tight">Interface &amp; Accessibility</h2><p class="text-xs text-slate-500">Customize viewing parameters for campus workstations &amp; high-glare environments</p></div></div><span class="text-[11px] font-mono font-semibold bg-slate-200 text-slate-700 px-2 py-0.5 rounded">UI.ACCESSIBILITY.01</span></div><div class="flex flex-col gap-2.5"><label class="text-[11px] font-mono text-slate-500 font-semibold uppercase">Portal Theme Profile</label><div class="grid grid-cols-1 md:grid-cols-3 gap-3"><div class="bg-white border-2 border-[#173153] p-3.5 rounded-lg flex flex-col gap-3 cursor-pointer shadow-sm relative"><div class="flex items-center justify-between"><span class="text-xs font-bold text-slate-900 flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-amber-500"></span>Dark Enclave</span><span class="text-[10px] font-mono font-bold bg-[#173153] text-amber-500 px-2 py-0.5 rounded uppercase">ACTIVE</span></div><div class="h-10 w-full rounded bg-[#112239] flex items-center px-2 gap-1.5"><div class="w-4 h-4 rounded bg-[#173153]"></div><div class="h-2 w-12 rounded bg-amber-500"></div><div class="h-2 w-6 rounded bg-[#16a34a]"></div></div><span class="text-[11px] text-slate-500">Institutional zero-glare night session</span></div><div class="bg-white hover:bg-slate-50 border border-slate-200 p-3.5 rounded-lg flex flex-col gap-3 cursor-pointer transition-all"><div class="flex items-center justify-between"><span class="text-xs font-semibold text-slate-800">High Contrast</span><span class="text-[10px] font-mono text-slate-400">7.1:1 AA</span></div><div class="h-10 w-full rounded bg-black flex items-center px-2 gap-1.5"><div class="w-4 h-4 rounded bg-white"></div><div class="h-2 w-12 rounded bg-yellow-400"></div><div class="h-2 w-6 rounded bg-emerald-400"></div></div><span class="text-[11px] text-slate-400">Optimized for sunlit campus kiosks</span></div><div class="bg-white hover:bg-slate-50 border border-slate-200 p-3.5 rounded-lg flex flex-col gap-3 cursor-pointer transition-all"><div class="flex items-center justify-between"><span class="text-xs font-semibold text-slate-800">System Sync</span><span class="text-[10px] font-mono text-slate-400">AUTO</span></div><div class="h-10 w-full rounded bg-slate-200 flex items-center px-2 gap-1.5"><div class="w-4 h-4 rounded bg-slate-400"></div><div class="h-2 w-12 rounded bg-slate-500"></div><div class="h-2 w-6 rounded bg-[#173153]"></div></div><span class="text-[11px] text-slate-400">Follows operating system telemetry</span></div></div></div><div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-1"><div class="bg-white border border-slate-200 p-4 rounded-lg flex items-center justify-between"><div class="flex flex-col gap-0.5"><span class="text-xs font-bold text-slate-800">Compact Document Layout</span><span class="text-[11px] text-slate-500">Dense tables with minimized row heights</span></div><label class="relative inline-flex items-center cursor-pointer"><input checked="" class="sr-only peer" type="checkbox"><div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div></label></div><div class="bg-white border border-slate-200 p-4 rounded-lg flex items-center justify-between"><div class="flex flex-col gap-0.5"><span class="text-xs font-bold text-slate-800">Reduced Motion &amp; Transitions</span><span class="text-[11px] text-slate-500">Suppress animations (WCAG 2.2 compliant)</span></div><label class="relative inline-flex items-center cursor-pointer"><input class="sr-only peer" type="checkbox"><div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div></label></div></div><div class="bg-white border border-slate-200 p-4 rounded-lg flex flex-col gap-3"><div class="flex items-center justify-between"><div class="flex flex-col"><span class="text-xs font-bold text-slate-800">Font Scale &amp; Monospace Display</span><span class="text-[11px] text-slate-500">Adjust cryptographic checksum &amp; typography scale</span></div><span class="text-[11px] font-mono font-bold text-[#173153] bg-slate-100 border border-slate-200 px-2.5 py-1 rounded">Standard Inter (14px baseline)</span></div><div class="flex items-center gap-3"><span class="text-xs font-mono text-slate-500">A-</span><input class="w-full h-1.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-amber-500" max="3" min="1" type="range" value="1"><span class="text-sm font-mono text-slate-700 font-bold">A+</span></div><div class="p-2.5 bg-slate-50 border border-slate-200 rounded text-xs font-mono text-slate-600 flex items-center justify-between"><span class="truncate">PREVIEW: SHA-256 e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855</span><span class="text-[#16a34a] font-bold text-[10px] ml-2">VALID</span></div></div></div><div class="bg-[#f8fafc] border border-slate-200 rounded-xl p-6 shadow-sm flex flex-col gap-6"><div class="flex items-center justify-between pb-2 border-b border-slate-200"><div class="flex items-center gap-2.5"><div class="w-8 h-8 rounded-lg bg-[#173153] flex items-center justify-center text-amber-500"><span class="material-symbols-outlined text-[20px]">lock_reset</span></div><div><h2 class="text-base font-bold text-slate-900 leading-tight">Cryptographic Caching &amp; Offline Vault Storage</h2><p class="text-xs text-slate-500">Local IndexedDB sandbox storage and clearance token lifecycle</p></div></div><span class="text-[11px] font-mono font-semibold bg-slate-200 text-slate-700 px-2 py-0.5 rounded">CACHE.SANDBOX.02</span></div><div class="bg-white border border-slate-200 p-4 rounded-lg flex flex-col gap-3"><div class="flex justify-between items-center"><span class="text-xs font-bold text-slate-800">Offline Curricular Document Cache</span><span class="text-xs font-mono font-bold text-[#173153]">42.8 MB / 250.0 MB (<span class="text-amber-500">17.1%</span>)</span></div><div class="w-full h-2.5 bg-slate-200 rounded-full overflow-hidden"><div class="h-full bg-gradient-to-r from-amber-500 to-[#16a34a] rounded-full" style="width: 17.1%;"></div></div><div class="flex flex-wrap items-center justify-between text-xs text-slate-500 pt-1"><div class="flex items-center gap-4"><span class="flex items-center gap-1.5 font-medium"><span class="w-2 h-2 rounded-full bg-amber-500"></span> 14 Syllabi</span><span class="flex items-center gap-1.5 font-medium"><span class="w-2 h-2 rounded-full bg-[#173153]"></span> 6 Theses &amp; Manuscripts</span><span class="flex items-center gap-1.5 font-medium"><span class="w-2 h-2 rounded-full bg-[#16a34a]"></span> 3 Cryptographic Receipts</span></div><span class="font-mono text-[11px] font-semibold text-slate-400">Encrypted with AES-GCM-256</span></div></div><div class="grid grid-cols-1 md:grid-cols-2 gap-4"><div class="bg-white border border-slate-200 p-4 rounded-lg flex flex-col justify-between gap-3"><div class="flex flex-col gap-1"><span class="text-xs font-bold text-slate-800">In-Memory Clearance Token Retention</span><span class="text-[11px] text-slate-500 leading-tight">Enforce zero-trust token invalidation after terminal inactivity</span></div><div class="flex items-center justify-between pt-2"><span class="text-[10px] font-mono uppercase text-slate-400 font-semibold">Timeout Limit</span><select class="bg-slate-100 text-slate-800 text-xs font-medium rounded px-3 py-1.5 border border-slate-200 focus:ring-1 focus:ring-amber-500"><option selected="">30 minutes (Strict Security Directive)</option><option>15 minutes (High Security High Risk)</option><option>60 minutes (Faculty Enclave Only)</option></select></div></div><div class="bg-white border border-slate-200 p-4 rounded-lg flex items-center justify-between"><div class="flex flex-col gap-1 pr-3"><span class="text-xs font-bold text-slate-800">Auto-Purge on Session Termination</span><span class="text-[11px] text-slate-500 leading-tight">Instantly wipe all client-side cached PDF payloads on user logout</span></div><label class="relative inline-flex items-center cursor-pointer flex-shrink-0"><input checked="" class="sr-only peer" type="checkbox"><div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div></label></div></div><div class="flex items-center justify-between bg-white border border-slate-200 p-4 rounded-lg"><div class="flex items-center gap-3"><span class="material-symbols-outlined text-slate-500 text-[22px]">delete_sweep</span><div class="flex flex-col"><span class="text-xs font-bold text-slate-800">Reclaim Local Disk &amp; Clear Stored Blobs</span><span class="text-[11px] text-slate-400">Forces immediate cryptographic garbage collection</span></div></div><button class="px-4 py-2 bg-slate-100 hover:bg-red-50 text-slate-700 hover:text-red-700 border border-slate-200 rounded-lg text-xs font-semibold transition-colors flex items-center gap-2" type="button"><span class="material-symbols-outlined text-[16px]">mop</span>Purge Local Document Cache</button></div></div><div class="bg-[#f8fafc] border border-slate-200 rounded-xl p-6 shadow-sm flex flex-col gap-6"><div class="flex items-center justify-between pb-2 border-b border-slate-200"><div class="flex items-center gap-2.5"><div class="w-8 h-8 rounded-lg bg-[#173153] flex items-center justify-center text-amber-500"><span class="material-symbols-outlined text-[20px]">notifications_active</span></div><div><h2 class="text-base font-bold text-slate-900 leading-tight">Notification &amp; Clearance Alerts</h2><p class="text-xs text-slate-500">Manage push gateways for dean approvals, registrar endorsements, and terminal alerts</p></div></div><span class="text-[11px] font-mono font-semibold bg-slate-200 text-slate-700 px-2 py-0.5 rounded">DISPATCH.AUTH.03</span></div><div class="flex flex-col gap-3"><div class="bg-white border border-slate-200 p-4 rounded-lg flex items-center justify-between"><div class="flex items-center gap-3.5"><div class="w-9 h-9 rounded bg-[#e8f6ee] text-[#16a34a] flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">sms</span></div><div class="flex flex-col"><div class="flex items-center gap-2"><span class="text-xs font-bold text-slate-800">Clearance Approval SMS Alerts</span><span class="text-[10px] font-mono font-bold bg-[#e8f6ee] text-[#16a34a] px-2 py-0.5 rounded">INSTANT</span></div><span class="text-[11px] text-slate-500">Routed to verified mobile: <span class="font-mono font-semibold text-slate-800">+63 917 •••• 8492</span></span></div></div><label class="relative inline-flex items-center cursor-pointer"><input checked="" class="sr-only peer" type="checkbox"><div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div></label></div><div class="bg-white border border-slate-200 p-4 rounded-lg flex items-center justify-between"><div class="flex items-center gap-3.5"><div class="w-9 h-9 rounded bg-[#173153]/10 text-[#173153] flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">mail</span></div><div class="flex flex-col"><div class="flex items-center gap-2"><span class="text-xs font-bold text-slate-800">Department Notice Email Digest</span><span class="text-[10px] font-mono font-bold bg-slate-100 text-slate-700 px-2 py-0.5 rounded">DAILY 18:00 PHT</span></div><span class="text-[11px] text-slate-500">Consolidated CEIT bulletins sent to: <span class="font-mono font-semibold text-slate-800">j.mendoza@cvsu.edu.ph</span></span></div></div><label class="relative inline-flex items-center cursor-pointer"><input checked="" class="sr-only peer" type="checkbox"><div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div></label></div><div class="bg-white border border-slate-200 p-4 rounded-lg flex items-center justify-between"><div class="flex items-center gap-3.5"><div class="w-9 h-9 rounded bg-amber-500/10 text-amber-500 flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">security</span></div><div class="flex flex-col"><div class="flex items-center gap-2"><span class="text-xs font-bold text-slate-800">Terminal Security Event Warnings</span><span class="text-[10px] font-mono font-bold bg-red-100 text-red-700 px-2 py-0.5 rounded">CRITICAL</span></div><span class="text-[11px] text-slate-500">Immediate push trigger when unknown IP addresses request session verification</span></div></div><label class="relative inline-flex items-center cursor-pointer"><input checked="" class="sr-only peer" type="checkbox"><div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-500"></div></label></div></div></div><div class="bg-[#f8fafc] border border-slate-200 rounded-xl p-6 shadow-sm flex flex-col md:flex-row items-center justify-between gap-4"><div class="flex items-center gap-3"><span class="material-symbols-outlined text-amber-500 text-[24px]">verified</span><div class="flex flex-col"><span class="text-xs font-bold text-slate-800">Preferences Ready for Terminal Commit</span><span class="text-[11px] text-slate-400 font-mono">ENCLAVE CERT: CVSU-CEIT-SEC-2026-A</span></div></div><div class="flex items-center gap-3 w-full md:w-auto"><button class="flex-1 md:flex-initial px-5 py-2.5 bg-white hover:bg-slate-100 border border-slate-300 text-slate-700 rounded-lg text-xs font-semibold transition-colors flex items-center justify-center gap-2" type="button"><span class="material-symbols-outlined text-[18px]">restart_alt</span>Reset to Defaults</button><button class="flex-1 md:flex-initial px-6 py-2.5 bg-[#173153] text-amber-500 hover:text-white hover:bg-[#112239] font-bold text-xs rounded-lg shadow-sm transition-all flex items-center justify-center gap-2 border border-amber-500/30" type="button"><span class="material-symbols-outlined text-[18px] text-amber-500">save</span>Save Preferences</button></div></div><div class="px-2 pb-6 flex flex-col md:flex-row items-center justify-between text-[11px] font-mono text-slate-400 gap-2"><span>Cavite State University • DocuSecure Management Enclave System</span><span>COMPLIANCE: ISO 9001:2015 &amp; PHILIPPINE REPUBLIC ACT 10173</span></div></div>
</div>
</div>
</div></main>
</div>




</body></html>