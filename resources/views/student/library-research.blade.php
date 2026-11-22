@php($portalRoutePrefix = request()->is('viewer/*') ? 'viewer.preview.' : 'student.preview.')
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
<div class="flex flex-col items-center text-center gap-2.5 px-2 pt-2 pb-3 border-b border-slate-700/50">
<img alt="Cavite State University Official Seal" class="w-14 h-auto drop-shadow-md object-contain" src="{{ asset('images/cvsu-logo.png') }}">
<div class="flex flex-col items-center">
<span class="text-lg font-bold tracking-tight text-white leading-tight">DocuSecure</span>
<span class="text-[10px] font-semibold text-slate-300 mt-0.5 uppercase tracking-wider">Cavite State University</span>
<span class="text-[9px] font-mono text-[#9fd2b4] mt-0.5 tracking-wider">STUDENT ENCLAVE • TIER 1</span>
</div></div>
<div class="flex flex-col gap-1.5">
<span class="px-3 text-[11px] font-semibold text-slate-400 uppercase tracking-wider">CORE MODULES</span>
<nav class="flex flex-col gap-1">
<a @class(['flex items-center gap-3 px-3 py-2 rounded-lg', request()->routeIs($portalRoutePrefix . 'dashboard') ? 'bg-[#112239] text-white font-medium shadow-inner border-l-2 border-amber-500' : 'text-slate-300 hover:text-white hover:bg-white/10 font-normal', 'text-sm transition-colors']) href="{{ route($portalRoutePrefix . 'dashboard') }}" @if(request()->routeIs($portalRoutePrefix . 'dashboard')) aria-current="page" @endif>
<span @class(['material-symbols-outlined text-[20px]', request()->routeIs($portalRoutePrefix . 'dashboard') ? 'text-amber-500' : null])>grid_view</span>
<span>Dashboard</span>
</a>
<a @class(['flex items-center gap-3 px-3 py-2 rounded-lg', request()->routeIs($portalRoutePrefix . 'document-library') ? 'bg-[#112239] text-white font-medium shadow-inner border-l-2 border-amber-500' : 'text-slate-300 hover:text-white hover:bg-white/10 font-normal', 'text-sm transition-colors']) href="{{ route($portalRoutePrefix . 'document-library') }}" @if(request()->routeIs($portalRoutePrefix . 'document-library')) aria-current="page" @endif>
<span @class(['material-symbols-outlined text-[20px]', request()->routeIs($portalRoutePrefix . 'document-library') ? 'text-amber-500' : null])>description</span>
<span>Documents</span>
</a>
<a @class(['flex items-center gap-3 px-3 py-2 rounded-lg', request()->routeIs($portalRoutePrefix . 'categories') ? 'bg-[#112239] text-white font-medium shadow-inner border-l-2 border-amber-500' : 'text-slate-300 hover:text-white hover:bg-white/10 font-normal', 'text-sm transition-colors']) href="{{ route($portalRoutePrefix . 'categories') }}" @if(request()->routeIs($portalRoutePrefix . 'categories')) aria-current="page" @endif>
<span @class(['material-symbols-outlined text-[20px]', request()->routeIs($portalRoutePrefix . 'categories') ? 'text-amber-500' : null])>category</span>
<span>Categories</span>
</a>
<a @class(['flex items-center gap-3 px-3 py-2 rounded-lg', request()->routeIs($portalRoutePrefix . 'library-research') ? 'bg-[#112239] text-white font-medium shadow-inner border-l-2 border-amber-500' : 'text-slate-300 hover:text-white hover:bg-white/10 font-normal', 'text-sm transition-colors']) href="{{ route($portalRoutePrefix . 'library-research') }}" @if(request()->routeIs($portalRoutePrefix . 'library-research')) aria-current="page" @endif>
<span @class(['material-symbols-outlined text-[20px]', request()->routeIs($portalRoutePrefix . 'library-research') ? 'text-amber-500' : null])>local_library</span>
<span>Library / Research</span>
</a>
</nav></div>
<div class="flex flex-col gap-1.5">
<span class="px-3 text-[11px] font-semibold text-slate-400 uppercase tracking-wider">SETTINGS &amp; PREFERENCES</span>
<nav class="flex flex-col gap-1">
<a @class(['flex items-center gap-3 px-3 py-2 rounded-lg', request()->routeIs($portalRoutePrefix . 'account-settings') ? 'bg-[#112239] text-white font-medium shadow-inner border-l-2 border-amber-500' : 'text-slate-300 hover:text-white hover:bg-white/10 font-normal', 'text-sm transition-colors']) href="{{ route($portalRoutePrefix . 'account-settings') }}" @if(request()->routeIs($portalRoutePrefix . 'account-settings')) aria-current="page" @endif>
<span @class(['material-symbols-outlined text-[20px]', request()->routeIs($portalRoutePrefix . 'account-settings') ? 'text-amber-500' : null])>manage_accounts</span>
<span>Account Settings</span>
</a>
<a @class(['flex items-center gap-3 px-3 py-2 rounded-lg', request()->routeIs($portalRoutePrefix . 'system-settings') ? 'bg-[#112239] text-white font-medium shadow-inner border-l-2 border-amber-500' : 'text-slate-300 hover:text-white hover:bg-white/10 font-normal', 'text-sm transition-colors']) href="{{ route($portalRoutePrefix . 'system-settings') }}" @if(request()->routeIs($portalRoutePrefix . 'system-settings')) aria-current="page" @endif>
<span @class(['material-symbols-outlined text-[20px]', request()->routeIs($portalRoutePrefix . 'system-settings') ? 'text-amber-500' : null])>tune</span>
<span>System / Portal Settings</span>
</a>
<a @class(['flex items-center gap-3 px-3 py-2 rounded-lg', request()->routeIs($portalRoutePrefix . 'logout-confirmation') ? 'bg-[#112239] text-white font-medium shadow-inner border-l-2 border-amber-500' : 'text-slate-300 hover:text-white hover:bg-white/10 font-normal', 'text-sm transition-colors']) href="{{ route($portalRoutePrefix . 'logout-confirmation') }}" @if(request()->routeIs($portalRoutePrefix . 'logout-confirmation')) aria-current="page" @endif>
<span @class(['material-symbols-outlined text-[20px]', request()->routeIs($portalRoutePrefix . 'logout-confirmation') ? 'text-amber-500' : null])>logout</span>
<span>Logout</span>
</a>
</nav></div></div>
<div class="bg-[#112239] rounded-lg p-3 border border-slate-700/60 flex flex-col gap-1.5">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#f59e0b] text-[18px]">verified_user</span>
<span class="text-xs font-semibold text-white">Tier 1 Student Access</span>
</div>
<p class="text-[11px] text-slate-400 leading-tight">Read-only cryptographic session · No upload privileges</p>
<div class="mt-1 flex items-center justify-between text-[10px] font-mono text-slate-400 pt-1 border-t border-slate-700/50">
<span>TLS 1.3 // SHA-256</span><span class="text-emerald-400">ACTIVE</span>
</div></div></aside>
<!-- Main Layout Wrapper (Shifted right by sidebar width) -->
<div class="pl-64 flex flex-col min-h-screen">
<!-- Top Header Bar (Crisp white matching IMAGE_2) -->
<header class="h-16 bg-white border-b border-slate-200 sticky top-0 z-40 flex items-center justify-between px-8">
<div class="flex items-center gap-4"><div class="flex flex-col text-left"><div class="flex items-center gap-1.5 text-[11px] font-medium text-slate-400"><span>DocuSecure</span><span class="text-slate-300">&gt;</span><span>Student Portal</span><span class="text-slate-300">&gt;</span><span class="text-[#173153] font-semibold">Library / Research</span></div>
<h2 class="text-lg font-bold text-slate-900 tracking-tight leading-tight mt-0.5">Library &amp; Research Repository</h2></div>
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
<main class="flex-1 p-8 flex flex-col gap-6"><div class="flex flex-col w-full">
<!-- Telemetry & Security Subheader Strip -->
<div class="bg-surface-container-high rounded-lg p-3 mb-6 shadow-sm flex flex-wrap items-center justify-between gap-4">
<div class="flex flex-wrap items-center gap-3">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">verified</span>
<span class="font-label-sm text-label-sm text-on-surface uppercase tracking-wider font-semibold">LADISLAO N. DIWA CENTRAL NODE // INDANG</span>
</div>
<span class="text-outline-variant font-label-sm text-label-sm">•</span>
<div class="flex items-center gap-1.5 font-label-sm text-label-sm text-secondary">
<span class="text-outline">OPAC REPOSITORY:</span>
<span class="bg-surface-container-lowest px-2 py-0.5 rounded text-primary font-code-snippet">RES-2026-CAT-094 // ONLINE</span>
</div>
<span class="text-outline-variant font-label-sm text-label-sm">•</span>
<span class="text-[11px] font-label-sm text-tertiary">AY 2026-2027 Term 1 Synchronization</span>
</div>
<div class="flex items-center gap-2">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">lock</span>
RA 10173 &amp; ISO 9001:2015
</span>
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-surface-container text-primary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
Read-Only Cryptographic Sandbox
</span>
</div>
</div>
<!-- Hero / Introduction Banner -->
<div class="relative bg-white border border-slate-200 rounded-xl p-6 md:p-8 mb-6 shadow-sm overflow-hidden">
<div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-[#173153] via-[#16a34a] to-amber-500"></div>
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
<div class="max-w-2xl">
<div class="flex items-center gap-2 mb-2">
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-[#16a34a]/20 text-[#16a34a] border border-[#16a34a]/30 uppercase tracking-widest">Ladislao N. Diwa Central Node</span>
<span class="w-1 h-1 rounded-full bg-slate-300"></span>
<span class="text-xs font-semibold text-slate-500">Institutional Research Repository</span>
<span class="w-1 h-1 rounded-full bg-slate-300"></span>
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-[#f59e0b]/20 text-amber-500 border border-[#f59e0b]/30 uppercase">OPAC Online</span>
</div>
<h1 class="text-2xl lg:text-3xl font-bold text-[#173153] tracking-tight mb-2">Institutional Theses, Capstones &amp; Research Archives</h1>
<p class="text-sm text-slate-600 leading-relaxed">
Access accredited undergraduate theses, faculty research publications, DOST-funded monographs, and collegiate capstones. Cryptographically timestamped and indexed across Cavite State University colleges.
</p>
</div>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-3 flex-shrink-0 min-w-[320px] lg:min-w-[420px]">
<div class="bg-[#f8fafc] border border-slate-200 rounded-lg p-3.5 flex flex-col justify-center text-center shadow-sm">
<span class="text-[1.75rem] font-bold text-[#16a34a] leading-tight">1,420</span>
<span class="text-[11px] font-medium text-slate-600 mt-1 whitespace-nowrap">Cataloged Manuscripts</span>
</div>
<div class="bg-[#f8fafc] border border-slate-200 rounded-lg p-3.5 flex flex-col justify-center text-center shadow-sm">
<span class="text-[1.75rem] font-bold text-[#173153] leading-tight">342</span>
<span class="text-[11px] font-medium text-slate-600 mt-1 whitespace-nowrap">CEIT Special Collections</span>
</div>
<div class="bg-[#f8fafc] border border-slate-200 rounded-lg p-3.5 flex flex-col justify-center text-center shadow-sm">
<span class="text-[1.75rem] font-bold text-amber-500 leading-tight">88</span>
<span class="text-[11px] font-medium text-slate-600 mt-1 whitespace-nowrap">Open Citations &amp; Journals</span>
</div>
<div class="bg-[#f8fafc] border border-amber-500/30 rounded-lg p-3.5 flex flex-col justify-center text-center shadow-sm bg-[#fef3c7]/20">
<span class="text-[1.75rem] font-bold text-amber-500 leading-tight">14</span>
<span class="text-[11px] font-semibold text-slate-700 mt-1 whitespace-nowrap">Tier 4 Restricted Vault</span>
</div>
</div>
</div>
</div>
<!-- Filter & Tab Navigation Pod -->
<div class="flex flex-col gap-4 mb-6"><!-- OPAC Call Number & Shelf Locator Banner --><div class="bg-white border border-slate-200 border-l-4 border-l-[#16a34a] rounded-lg p-3.5 flex flex-wrap items-center justify-between gap-3 shadow-sm">
<div class="flex flex-wrap items-center gap-3">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#16a34a] text-[20px]">shelves</span>
<span class="text-xs font-bold text-[#173153] tracking-wider uppercase">LADISLAO N. DIWA ARCHIVE LOCATION ENGINE</span>
</div>
<span class="text-slate-300">•</span>
<div class="flex items-center gap-1.5 text-xs font-mono text-slate-600">
<span class="text-slate-400 font-semibold">CALL NUMBER RANGE:</span>
<span class="bg-amber-500/10 text-amber-500 border border-amber-500/30 px-2 py-0.5 rounded font-bold">QA76.9.A25 — TJ223.M53</span>
</div>
<span class="text-slate-300">•</span>
<span class="text-xs text-slate-600 font-sans font-medium">Stack 3-B · CEIT Hardbound &amp; Digital Microfiche</span>
</div>
<div class="flex items-center gap-2">
<span class="text-[11px] font-mono text-slate-500">DEWEY DECIMAL: 005.8 / 621.39</span>
<button class="px-2.5 py-1 rounded bg-[#e8f6ee] hover:bg-[#16a34a]/20 text-[#16a34a] text-xs font-semibold border border-[#16a34a]/30 flex items-center gap-1 transition-colors">
<span class="material-symbols-outlined text-[14px]">map</span>
<span>Floor Map (3rd Flr)</span>
</button>
</div>
</div><!-- Faceted Domain Badges & Advanced Search Toolbar --><div class="bg-white border border-slate-200 rounded-xl p-4 shadow-sm flex flex-col gap-3.5">
<div class="flex flex-col md:flex-row gap-3 items-stretch md:items-center justify-between">
<div class="relative flex-1">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">search</span>
<input class="w-full bg-[#f8fafc] text-slate-800 placeholder-slate-400 rounded-lg pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#173153]/20 border border-slate-200" placeholder="Search institutional manuscripts, capstone abstracts, IEEE citations, or SHA-256 hashes..." type="text">
</div>
<div class="flex items-center gap-2.5 flex-wrap">
<div class="flex items-center bg-[#f8fafc] rounded-lg px-3 py-1 border border-slate-200">
<span class="text-xs font-semibold text-slate-500 mr-2">College:</span>
<select class="bg-transparent text-slate-800 text-xs py-1 focus:outline-none cursor-pointer font-medium">
<option selected="" value="ceit">CEIT (Engineering &amp; IT)</option>
<option value="cas">CAS (Arts &amp; Sciences)</option>
<option value="caafen">CAAFEN (Agri-Engineering)</option>
<option value="all">All Cavite State Colleges</option>
</select>
</div>
<div class="flex items-center bg-[#f8fafc] rounded-lg px-3 py-1 border border-slate-200">
<span class="text-xs font-semibold text-slate-500 mr-2">Publication:</span>
<select class="bg-transparent text-slate-800 text-xs py-1 focus:outline-none cursor-pointer font-medium">
<option selected="" value="all">All Academic Formats</option>
<option value="capstone">BSIT/BSCS Capstones</option>
<option value="thesis">Masteral / Doctoral Theses</option>
<option value="dost">DOST-PCAARRD Monographs</option>
<option value="scopus">Scopus Indexed Papers</option>
</select>
</div>
<div class="flex items-center bg-[#f8fafc] rounded-lg px-3 py-1 border border-slate-200">
<span class="text-xs font-semibold text-slate-500 mr-2">Catalog Term:</span>
<select class="bg-transparent text-slate-800 text-xs py-1 focus:outline-none cursor-pointer font-medium">
<option selected="" value="ay26">AY 2026–2027</option>
<option value="ay25">AY 2025–2026</option>
<option value="ay24">AY 2024–2025</option>
<option value="archive">Historical Archive (2015–2023)</option>
</select>
</div>
</div>
</div>
<div class="flex items-center gap-2 overflow-x-auto pb-1 pt-2 border-t border-slate-100">
<span class="text-xs font-bold text-slate-500 uppercase tracking-wider whitespace-nowrap flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">filter_alt</span>Facets:
</span>
<button class="px-3 py-1 rounded-full bg-[#16a34a] text-white text-xs font-semibold whitespace-nowrap shadow-sm hover:bg-[#16a34a]/90 transition-colors">All Collections (1,420)</button>
<button class="px-3 py-1 rounded-full bg-[#f1f5f9] hover:bg-slate-200 text-[#173153] font-medium text-xs whitespace-nowrap transition-colors border border-slate-200">Cryptography &amp; Security (342)</button>
<button class="px-3 py-1 rounded-full bg-[#f1f5f9] hover:bg-slate-200 text-[#173153] font-medium text-xs whitespace-nowrap transition-colors border border-slate-200">Agricultural AI &amp; Vision (114)</button>
<button class="px-3 py-1 rounded-full bg-[#f1f5f9] hover:bg-slate-200 text-[#173153] font-medium text-xs whitespace-nowrap transition-colors border border-slate-200">IoT &amp; LoRaWAN Telemetry (88)</button>
<button class="px-3 py-1 rounded-full bg-[#f1f5f9] hover:bg-slate-200 text-[#173153] font-medium text-xs whitespace-nowrap transition-colors border border-slate-200">Cloud &amp; SDN Systems (76)</button>
<button class="px-3 py-1 rounded-full bg-amber-500/10 hover:bg-amber-500/20 text-amber-500 font-medium text-xs whitespace-nowrap transition-colors border border-amber-500/30">Classified Defense IP (14)</button>
</div>
</div></div>
<!-- Research Items Catalog Ledger -->
<div class="bg-surface-container rounded-xl shadow-md overflow-hidden flex flex-col mb-6"><!-- Dossier Stream Header --><div class="bg-surface-container-high px-6 py-4 border-b border-outline-variant/20 flex flex-wrap items-center justify-between gap-3"><div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[22px]">auto_stories</span><span class="font-label-sm text-label-sm font-bold text-on-surface uppercase tracking-wider">Archival Manuscript Dossiers &amp; Monograph Records</span><span class="px-2 py-0.5 rounded-full text-xs font-mono bg-primary/20 text-primary border border-primary/30">Showing 1–3 of 1,420 Accredited Artifacts</span></div><div class="flex items-center gap-2"><span class="text-xs text-outline">Sort by:</span><button class="px-2.5 py-1 rounded bg-surface-container text-on-surface font-label-sm text-label-sm border border-outline-variant/30 flex items-center gap-1.5"><span>Timestamp / Relevance</span><span class="material-symbols-outlined text-[14px]">expand_more</span></button></div></div><!-- Dossier Cards Grid / Stack --><div class="p-6 flex flex-col gap-5 bg-[#f8fafc]">
<!-- Dossier 1 -->
<article class="bg-white rounded-xl border border-slate-200 hover:border-[#16a34a]/60 transition-all p-5 shadow-sm flex flex-col gap-4">
<div class="flex flex-col lg:flex-row lg:items-start justify-between gap-4">
<div class="flex items-start gap-3.5 flex-1">
<div class="w-12 h-12 rounded-lg bg-[#e8f6ee] border border-[#16a34a]/30 flex flex-col items-center justify-center text-[#16a34a] flex-shrink-0">
<span class="material-symbols-outlined text-[24px]">verified</span>
<span class="text-[9px] font-mono font-bold mt-0.5">CV-2026</span>
</div>
<div class="flex flex-col gap-1">
<div class="flex flex-wrap items-center gap-2">
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-[#16a34a]/20 text-[#16a34a] border border-[#16a34a]/30 uppercase">BSIT Capstone 2026</span>
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-[#173153]/10 text-[#173153] border border-[#173153]/20 uppercase">Public Institutional</span>
<span class="px-2 py-0.5 rounded text-[10px] font-mono text-slate-600 bg-slate-100 border border-slate-200">OPAC Shelf: QA76.9.A25-M46</span>
</div>
<h2 class="text-base lg:text-lg font-bold text-[#173153] hover:text-[#16a34a] transition-colors cursor-pointer leading-snug mt-1">
DocuSecure: A Cryptographically Sealed Document Management and Clearance Verification Protocol for Cavite State University
</h2>
<div class="flex flex-wrap items-center gap-2 text-xs text-slate-500 mt-0.5">
<span>Authors: <strong class="text-slate-800">Juanito P. Mendoza, A. Ramos, K. Beltran</strong></span>
<span>•</span>
<span>Adviser: <strong class="text-slate-800">Engr. Mark Ramos, M.Eng.</strong></span>
<span>•</span>
<span class="text-[#16a34a] font-medium">CEIT - Department of Information Technology</span>
</div>
</div>
</div>
<div class="flex lg:flex-col items-end justify-between gap-2 flex-shrink-0">
<div class="flex items-center gap-1.5 text-xs text-amber-500 bg-amber-500/10 px-2.5 py-1 rounded border border-amber-500/30">
<span class="material-symbols-outlined text-[14px]">fingerprint</span>
<span class="font-mono font-semibold">SHA: 9e3a10cf...741b</span>
</div>
<span class="text-[11px] font-mono text-slate-400">Archived: Nov 14, 2026</span>
</div>
</div>
<div class="bg-[#f8fafc] rounded-lg p-3.5 border-l-4 border-[#16a34a]">
<span class="text-xs font-bold uppercase tracking-wider text-[#16a34a] block mb-1">Abstract Preview</span>
<p class="text-xs text-slate-600 leading-relaxed">
This study presents the architectural formulation and testnet deployment of DocuSecure, an institutional clearance verification ledger developed specifically for CvSU. Utilizing Ed25519 digital signatures coupled with Merkle-proof timestamping across multi-department nodes, the system reduces cross-campus registrar clearance verification latency from 72 hours down to 180 milliseconds under peak load conditions while maintaining strict compliance with RA 10173.
</p>
</div>
<div class="flex flex-wrap items-center justify-between gap-3 pt-2 border-t border-slate-100">
<div class="flex items-center gap-3 text-xs text-slate-500">
<span class="flex items-center gap-1 text-slate-700 font-medium"><span class="material-symbols-outlined text-[16px] text-amber-500">bookmark</span>18 Citations</span>
<span>•</span>
<span class="flex items-center gap-1 text-slate-700 font-medium"><span class="material-symbols-outlined text-[16px] text-slate-400">visibility</span>1,248 Reads</span>
<span>•</span>
<span class="text-[#16a34a] font-semibold flex items-center gap-1"><span class="material-symbols-outlined text-[15px]">verified</span>Manuscript PDF (6.8 MB) · Cryptographically Verified</span>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-white hover:bg-slate-50 text-slate-700 hover:text-[#173153] text-xs font-semibold transition-colors flex items-center gap-1.5 border border-slate-200 shadow-sm">
<span class="material-symbols-outlined text-[16px]">format_quote</span>
<span>Cite (APA/IEEE)</span>
</button>
<button class="px-3 py-1.5 rounded-lg bg-white hover:bg-slate-50 text-[#173153] text-xs font-semibold transition-colors flex items-center gap-1.5 border border-slate-200 shadow-sm">
<span class="material-symbols-outlined text-[16px]">menu_book</span>
<span>Read Full Manuscript</span>
</button>
<button class="px-3.5 py-1.5 rounded-lg bg-[#173153] hover:bg-[#112239] text-white text-xs font-semibold transition-colors flex items-center gap-1.5 shadow-sm">
<span class="material-symbols-outlined text-[16px] text-amber-500">download</span>
<span>Download Verified PDF</span>
</button>
</div>
</div>
</article>
<!-- Dossier 2 -->
<article class="bg-white rounded-xl border border-slate-200 hover:border-[#173153]/60 transition-all p-5 shadow-sm flex flex-col gap-4">
<div class="flex flex-col lg:flex-row lg:items-start justify-between gap-4">
<div class="flex items-start gap-3.5 flex-1">
<div class="w-12 h-12 rounded-lg bg-[#173153]/10 border border-[#173153]/20 flex flex-col items-center justify-center text-[#173153] flex-shrink-0">
<span class="material-symbols-outlined text-[24px]">psychology</span>
<span class="text-[9px] font-mono font-bold mt-0.5">CV-2025</span>
</div>
<div class="flex flex-col gap-1">
<div class="flex flex-wrap items-center gap-2">
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-[#16a34a]/20 text-[#16a34a] border border-[#16a34a]/30 uppercase">BSCS Thesis 2025</span>
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-[#173153]/10 text-[#173153] border border-[#173153]/20 uppercase">PhilJ-AgroComp Indexed</span>
<span class="px-2 py-0.5 rounded text-[10px] font-mono text-slate-600 bg-slate-100 border border-slate-200">OPAC Shelf: SB608.C6-V55</span>
</div>
<h2 class="text-base lg:text-lg font-bold text-[#173153] hover:text-[#16a34a] transition-colors cursor-pointer leading-snug mt-1">
Automated Crop Disease Detection Using Convolutional Neural Networks on Coffee Leaf Datasets in Cavite
</h2>
<div class="flex flex-wrap items-center gap-2 text-xs text-slate-500 mt-0.5">
<span>Authors: <strong class="text-slate-800">Kristel L. Villanueva, T. Soriano</strong></span>
<span>•</span>
<span>Adviser: <strong class="text-slate-800">Dr. Roberto Bautista, Ph.D.</strong></span>
<span>•</span>
<span class="text-[#16a34a] font-medium">CEIT - Department of Computer Science</span>
</div>
</div>
</div>
<div class="flex lg:flex-col items-end justify-between gap-2 flex-shrink-0">
<div class="flex items-center gap-1.5 text-xs text-amber-500 bg-amber-500/10 px-2.5 py-1 rounded border border-amber-500/30">
<span class="material-symbols-outlined text-[14px]">fingerprint</span>
<span class="font-mono font-semibold">SHA: 4e91bd02...bb83</span>
</div>
<span class="text-[11px] font-mono text-slate-400">Archived: Oct 02, 2025</span>
</div>
</div>
<div class="bg-[#f8fafc] rounded-lg p-3.5 border-l-4 border-[#173153]">
<span class="text-xs font-bold uppercase tracking-wider text-[#173153] block mb-1">Abstract Preview</span>
<p class="text-xs text-slate-600 leading-relaxed">
An edge-computable deep learning framework leveraging lightweight MobileNet-V3 architectures trained over 8,400 field-curated coffee leaf imagery samples gathered across Silang and Amadeo coffee orchards. The resulting localized disease classifier delivers 97.4% mAP for Cercospora coffeicola detection in offline conditions suitable for deployment on low-power agricultural IoT nodes.
</p>
</div>
<div class="flex flex-wrap items-center justify-between gap-3 pt-2 border-t border-slate-100">
<div class="flex items-center gap-3 text-xs text-slate-500">
<span class="flex items-center gap-1 text-slate-700 font-medium"><span class="material-symbols-outlined text-[16px] text-amber-500">bookmark</span>34 Citations</span>
<span>•</span>
<span class="flex items-center gap-1 text-slate-700 font-medium"><span class="material-symbols-outlined text-[16px] text-slate-400">visibility</span>3,410 Reads</span>
<span>•</span>
<span class="text-[#173153] font-semibold flex items-center gap-1"><span class="material-symbols-outlined text-[15px]">verified</span>Scopus Indexed · Dataset Available</span>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-white hover:bg-slate-50 text-slate-700 hover:text-[#173153] text-xs font-semibold transition-colors flex items-center gap-1.5 border border-slate-200 shadow-sm">
<span class="material-symbols-outlined text-[16px]">format_quote</span>
<span>Cite (APA/IEEE)</span>
</button>
<button class="px-3 py-1.5 rounded-lg bg-white hover:bg-slate-50 text-[#173153] text-xs font-semibold transition-colors flex items-center gap-1.5 border border-slate-200 shadow-sm">
<span class="material-symbols-outlined text-[16px]">menu_book</span>
<span>Read Full Manuscript</span>
</button>
<button class="px-3.5 py-1.5 rounded-lg bg-[#173153] hover:bg-[#112239] text-white text-xs font-semibold transition-colors flex items-center gap-1.5 shadow-sm">
<span class="material-symbols-outlined text-[16px] text-amber-500">download</span>
<span>Download Verified PDF</span>
</button>
</div>
</div>
</article>
<!-- Dossier 3 -->
<article class="bg-white rounded-xl border border-slate-200 hover:border-amber-500/60 transition-all p-5 shadow-sm flex flex-col gap-4">
<div class="flex flex-col lg:flex-row lg:items-start justify-between gap-4">
<div class="flex items-start gap-3.5 flex-1">
<div class="w-12 h-12 rounded-lg bg-amber-500/10 border border-amber-500/30 flex flex-col items-center justify-center text-amber-500 flex-shrink-0">
<span class="material-symbols-outlined text-[24px]">sensors</span>
<span class="text-[9px] font-mono font-bold mt-0.5">CV-2025</span>
</div>
<div class="flex flex-col gap-1">
<div class="flex flex-wrap items-center gap-2">
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-amber-500/20 text-amber-500 border border-amber-500/30 uppercase">DOST-PCAARRD Funded</span>
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-[#16a34a]/20 text-[#16a34a] border border-[#16a34a]/30 uppercase">Peer Reviewed Monograph</span>
<span class="px-2 py-0.5 rounded text-[10px] font-mono text-slate-600 bg-slate-100 border border-slate-200">OPAC Shelf: S594.A43-2025</span>
</div>
<h2 class="text-base lg:text-lg font-bold text-[#173153] hover:text-[#16a34a] transition-colors cursor-pointer leading-snug mt-1">
Low-Cost LoRaWAN Mesh Network for Real-Time Soil Hydrology Monitoring in Upland Indang Coffee Plantations
</h2>
<div class="flex flex-wrap items-center gap-2 text-xs text-slate-500 mt-0.5">
<span>Authors: <strong class="text-slate-800">Prof. G. Alcantara, Engr. L. Ramos, CEIT Research Team</strong></span>
<span>•</span>
<span class="text-[#16a34a] font-medium">CEIT - Dept. of Computer Engineering &amp; NCRDEC</span>
</div>
</div>
</div>
<div class="flex lg:flex-col items-end justify-between gap-2 flex-shrink-0">
<div class="flex items-center gap-1.5 text-xs text-amber-500 bg-amber-500/10 px-2.5 py-1 rounded border border-amber-500/30">
<span class="material-symbols-outlined text-[14px]">fingerprint</span>
<span class="font-mono font-semibold">SHA: a780e159...01cf</span>
</div>
<span class="text-[11px] font-mono text-slate-400">Archived: Aug 18, 2025</span>
</div>
</div>
<div class="bg-[#f8fafc] rounded-lg p-3.5 border-l-4 border-amber-500">
<span class="text-xs font-bold uppercase tracking-wider text-amber-500 block mb-1">Abstract Preview</span>
<p class="text-xs text-slate-600 leading-relaxed">
Field monograph assessing solar-harvested 915 MHz LoRa mesh repeaters across deep topographic micro-catchments in upland Indang. Demonstrates telemetry propagation stability through dense Coffea liberica canopies with 99.2% packet reception rate across a 4.2 km perimeter.
</p>
</div>
<div class="flex flex-wrap items-center justify-between gap-3 pt-2 border-t border-slate-100">
<div class="flex items-center gap-3 text-xs text-slate-500">
<span class="flex items-center gap-1 text-slate-700 font-medium"><span class="material-symbols-outlined text-[16px] text-amber-500">bookmark</span>42 Citations</span>
<span>•</span>
<span class="flex items-center gap-1 text-slate-700 font-medium"><span class="material-symbols-outlined text-[16px] text-slate-400">visibility</span>2,190 Reads</span>
<span>•</span>
<span class="text-amber-500 font-semibold flex items-center gap-1"><span class="material-symbols-outlined text-[15px]">verified</span>Grant Ref: PCAARRD-AGRI-2024-09</span>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-white hover:bg-slate-50 text-slate-700 hover:text-[#173153] text-xs font-semibold transition-colors flex items-center gap-1.5 border border-slate-200 shadow-sm">
<span class="material-symbols-outlined text-[16px]">format_quote</span>
<span>Cite (APA/IEEE)</span>
</button>
<button class="px-3 py-1.5 rounded-lg bg-white hover:bg-slate-50 text-[#173153] text-xs font-semibold transition-colors flex items-center gap-1.5 border border-slate-200 shadow-sm">
<span class="material-symbols-outlined text-[16px]">menu_book</span>
<span>Read Full Manuscript</span>
</button>
<button class="px-3.5 py-1.5 rounded-lg bg-[#173153] hover:bg-[#112239] text-white text-xs font-semibold transition-colors flex items-center gap-1.5 shadow-sm">
<span class="material-symbols-outlined text-[16px] text-amber-500">download</span>
<span>Download Verified PDF</span>
</button>
</div>
</div>
</article>
</div><!-- Dossier Pagination --><div class="bg-white px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-slate-200">
<div class="flex items-center gap-2 text-slate-500 text-xs font-medium">
<span>Displaying dossier batch</span>
<span class="font-bold text-[#173153]">1–3</span>
<span>of</span>
<span class="font-bold text-[#173153]">1,420</span>
<span>OPAC manuscripts</span>
</div>
<div class="flex items-center gap-1.5 text-xs font-medium">
<button class="px-2.5 py-1.5 rounded-lg bg-slate-100 text-slate-400 flex items-center gap-1 cursor-not-allowed opacity-60 border border-slate-200">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
<span>Previous</span>
</button>
<button class="w-8 h-8 rounded-lg bg-[#173153] text-white font-bold flex items-center justify-center shadow-sm">1</button>
<button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 flex items-center justify-center transition-colors">2</button>
<button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 flex items-center justify-center transition-colors">3</button>
<span class="text-slate-400 px-1">...</span>
<button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 flex items-center justify-center transition-colors">474</button>
<button class="px-2.5 py-1.5 rounded-lg bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 hover:text-[#173153] transition-colors flex items-center gap-1">
<span>Next</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</div>
</div></div>
<!-- Bottom Physical Library Reserves Card -->
<div class="bg-white rounded-xl p-6 border-2 border-[#16a34a]/30 shadow-md flex flex-col md:flex-row items-start md:items-center justify-between gap-6 mb-6 relative overflow-hidden">
<div class="absolute top-0 left-0 right-0 h-1 bg-[#16a34a]"></div>
<div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 w-full">
<div class="flex items-start gap-4 flex-1">
<div class="w-14 h-14 rounded-xl bg-[#e8f6ee] text-[#16a34a] border border-[#16a34a]/30 flex items-center justify-center flex-shrink-0 shadow-sm">
<span class="material-symbols-outlined text-[32px]">local_library</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-amber-500/20 text-amber-500 border border-amber-500/30 uppercase tracking-wider">Physical Manuscript Lending &amp; Hardbound Stack</span>
<span class="text-slate-300">•</span>
<span class="text-xs text-slate-500 font-mono font-semibold">Stack Room 304</span>
</div>
<h3 class="text-base lg:text-lg font-bold text-[#173153] tracking-tight leading-tight mt-1">CEIT Reading Room &amp; Ladislao N. Diwa Memorial Physical Reserve</h3>
<p class="text-xs text-slate-600 mt-1 max-w-2xl leading-relaxed">Need access to original hardbound senior design prototypes, circuit schematics, or non-circulating faculty capstones? Physical reserve carrels are open Mon–Fri 08:00–17:00 at <strong class="text-slate-800">CEIT 3rd Floor, Engineering Building</strong>. Active biometric or student ID card is mandatory for archive room entry.</p>
<div class="flex flex-wrap items-center gap-3 mt-3">
<div class="flex items-center gap-1.5 text-xs text-slate-800 font-medium">
<span class="w-2 h-2 rounded-full bg-[#16a34a] animate-pulse"></span>
<span>Carrels Available Today: <strong class="text-[#16a34a]">14 / 28 seats</strong></span>
</div>
<span class="text-slate-300">•</span>
<div class="flex items-center gap-1.5 text-xs text-slate-600">
<span class="material-symbols-outlined text-[16px] text-amber-500">schedule</span>
<span>Next Available Slot: <strong class="text-[#173153]">Today, 14:00 – 16:00</strong></span>
</div>
</div>
</div>
</div>
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 flex-shrink-0">
<button class="px-4 py-2.5 rounded-lg bg-white text-slate-700 hover:text-[#173153] hover:bg-slate-50 text-xs font-semibold transition-colors flex items-center justify-center gap-2 border border-slate-200 shadow-sm">
<span class="material-symbols-outlined text-[18px]">menu_book</span>
<span>Request Physical Loan</span>
</button>
<button class="px-4 py-2.5 rounded-lg bg-[#16a34a] hover:bg-[#16a34a]/90 text-white text-xs font-bold transition-colors flex items-center justify-center gap-2 shadow-sm">
<span class="material-symbols-outlined text-[18px]">event_seat</span>
<span>Reserve Reading Carrel</span>
</button>
</div>
</div>
</div>
<!-- Bottom Regulatory & Trust Verification Footer -->
<footer class="mt-4 pt-6 pb-2 border-t-0 flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
<div class="flex items-center gap-3">
<img alt="Cavite State University" class="w-8 h-8 object-contain opacity-80" src="{{ asset('images/cvsu-logo.png') }}">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm font-semibold text-on-surface">Cavite State University • Indang, Cavite 4122 Philippines</span>
<span class="font-body-sm text-body-sm text-outline">Established 1906 • Truth, Excellence, Service</span>
</div>
</div>
<div class="flex flex-wrap items-center justify-center md:justify-end gap-3 font-label-sm text-label-sm text-secondary">
<span class="px-2 py-0.5 rounded bg-surface-container-high">ISO 9001:2015 Protected</span>
<span>•</span>
<span class="px-2 py-0.5 rounded bg-surface-container-high">RA 10173 Protected</span>
<span>•</span>
<span class="font-code-snippet text-code-snippet text-primary">TLS 1.3 // SHA-256</span>
</div>
</footer>
</div></main>
</div>





<style>.docusecure-nav-current{background:rgba(148,163,184,.20)!important;color:#fff!important;outline:1px solid rgba(148,163,184,.22)}.docusecure-nav-current span{color:inherit}</style>
<script>(function(){
  var path=window.location.pathname.replace(/\/$/,'')||'/';
  document.querySelectorAll('aside a[href]').forEach(function(link){
    var raw=link.getAttribute('href')||'';
    if(!raw || raw.charAt(0)==='#' || raw.indexOf('mailto:')===0 || raw==='/' || raw.indexOf('javascript:')===0) return;
    var url; try{url=new URL(raw,window.location.origin);}catch(e){return;}
    var target=url.pathname.replace(/\/$/,'')||'/';
    if(target===path){link.classList.add('docusecure-nav-current');link.setAttribute('aria-current','page');}
  });
})();</script>
</body></html>