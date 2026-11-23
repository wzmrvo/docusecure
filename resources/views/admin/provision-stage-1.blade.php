<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DocuSecure MIS DARK-OPS // Provision Institutional User</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        colors: {
          background: "#070d18",
          surface: "#0b1322",
          "surface-container": "#0e1726",
          "surface-container-high": "#121d30",
          "cvsu-gold": "#eabf55",
          "cvsu-green": "#10b981"
        },
        fontFamily: {
          sans: ["Inter", "sans-serif"],
          mono: ["JetBrains Mono", "monospace"]
        }
      }
    }
  };
</script>
<style>
  body {
    background-color: #070d18;
    color: #e2e8f0;
    margin: 0;
    padding: 0;
  }
  ::-webkit-scrollbar {
    width: 6px;
    height: 6px;
  }
  ::-webkit-scrollbar-track {
    background: #09101d;
  }
  ::-webkit-scrollbar-thumb {
    background: #1e293b;
    border-radius: 3px;
  }
  ::-webkit-scrollbar-thumb:hover {
    background: #334155;
  }
</style>
</head>
<body class="bg-[#070d18] text-slate-200 font-sans antialiased min-h-screen flex flex-col">
<!-- Top Bar: Dark Console Header -->
<header class="h-16 bg-[#0a1120] border-b border-[#1e293b] px-4 lg:px-6 flex items-center justify-between sticky top-0 z-50 flex-shrink-0">
<!-- Left: System Ops breadcrumb path -->
<div class="flex items-center space-x-2 text-xs font-mono tracking-tight overflow-hidden">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span class="text-emerald-400 font-bold tracking-wider uppercase text-[11px] whitespace-nowrap">DocuSecure MIS DARK-OPS // V4.19-PROD</span>
</div>
<span class="text-slate-600">/</span>
<span class="text-slate-400 uppercase tracking-wide hidden sm:inline">ADMIN CONSOLE</span>
<span class="text-slate-600 hidden sm:inline">/</span>
<span class="text-slate-300 uppercase tracking-wide hidden md:inline">USER MANAGEMENT</span>
<span class="text-slate-600 hidden md:inline">/</span>
<span class="text-[#eabf55] font-semibold uppercase tracking-wide text-[11px]">STAGE 01</span>
</div>
<!-- Center: Search input -->
<div class="hidden md:flex items-center w-72 lg:w-96 relative">
<span class="material-symbols-outlined absolute left-3 text-slate-500 text-[18px]">search</span>
<input class="w-full bg-[#070d18] border border-[#1e293b] rounded-lg pl-9 pr-12 py-1.5 text-xs text-slate-200 placeholder:text-slate-500 focus:outline-none focus:border-emerald-500/60 focus:ring-1 focus:ring-emerald-500/30 font-mono transition-all" placeholder="Search categories, classification policies..." type="text"/>
<span class="absolute right-2.5 px-1.5 py-0.5 rounded bg-[#111e33] border border-[#1e293b] text-[10px] font-mono text-slate-400">⌘K</span>
</div>
<!-- Right: Telemetry & Operator Profile -->
<div class="flex items-center space-x-3 sm:space-x-4">
<!-- System Operational indicator -->
<div class="flex items-center space-x-2 bg-[#061e16] border border-emerald-500/30 px-2.5 py-1 rounded-full text-[10px] font-mono text-emerald-400">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span class="hidden sm:inline tracking-wider font-semibold">SYSTEM OPERATIONAL</span>
<span class="sm:hidden font-bold">OPS ON</span>
</div>
<!-- Notification Bell -->
<button class="relative p-2 rounded-lg bg-[#0e1726] border border-[#1e293b] text-slate-300 hover:text-white hover:border-slate-500 transition-colors">
<span class="material-symbols-outlined text-[18px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 bg-[#eabf55] rounded-full"></span>
</button>
<!-- Superadmin Root Active Badge -->
<div class="flex items-center space-x-2.5 pl-2 border-l border-[#1e293b]">
<div class="w-8 h-8 rounded-lg bg-[#0e2a22] border border-emerald-500/40 flex items-center justify-center text-emerald-300 font-mono font-bold text-xs">
        RB
      </div>
<div class="hidden lg:block text-left">
<div class="text-xs font-semibold text-slate-200 flex items-center gap-1.5">
<span>Engr. R. Bautista</span>
<span class="bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-[9px] font-mono px-1.5 py-0.2 rounded font-bold uppercase">ROOT ACTIVE</span>
</div>
<div class="text-[10px] font-mono text-slate-400 leading-tight">MIS Superadmin • CvSU Main</div>
</div>
</div>
</div>
</header>
<!-- Main Shell -->
<div class="flex-1 flex overflow-hidden">
<!-- Left Persistent Dark Sidebar -->
<aside class="w-64 bg-[#0a1120] border-r border-[#1e293b] flex flex-col justify-between flex-shrink-0 hidden md:flex">
<div>
<!-- CvSU Brand Header -->
<div class="p-4 border-b border-[#1e293b] flex items-center space-x-3">
<div class="w-10 h-10 flex-shrink-0 flex items-center justify-center p-1 bg-[#0f172a] border border-[#1e293b] rounded-xl shadow-inner">
<img alt="CvSU Logo" class="w-full h-full object-contain" src="{{ asset('images/cvsu-logo.png') }}"/>
</div>
<div>
<div class="flex items-center space-x-1.5">
<span class="font-bold text-slate-100 text-sm tracking-tight">DocuSecure</span>
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span class="text-[9px] font-mono bg-[#eabf55] text-slate-950 font-bold px-1.5 py-0.2 rounded tracking-wider">CvSU</span>
</div>
<div class="text-[10px] font-mono text-slate-400 tracking-wider uppercase mt-0.5">MIS Authority Enclave</div>
</div>
</div>
<!-- Navigation Links -->
<nav class="p-3 space-y-1 text-xs font-medium">
<a class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-[#111e33] transition-colors" href="{{ route('admin.preview.dashboard') }}">
<span class="material-symbols-outlined text-[18px]">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg bg-[#0e2a22] text-emerald-300 border border-emerald-500/40 font-semibold shadow-sm" href="{{ route('admin.preview.user-management') }}">
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-[18px] text-emerald-400">group</span>
<span>User Management</span>
</div>
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-[#111e33] transition-colors" href="{{ route('admin.preview.access-requests') }}">
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-[18px]">key</span>
<span>Access Requests</span>
</div>
<span class="px-1.5 py-0.5 rounded text-[10px] font-mono bg-[#0f172a] border border-[#1e293b] text-emerald-400 font-bold">12</span>
</a>
<a class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-[#111e33] transition-colors" href="{{ route('admin.preview.access-levels') }}">
<span class="material-symbols-outlined text-[18px]">shield_person</span>
<span>Document Access Levels</span>
</a>
<a class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-[#111e33] transition-colors" href="{{ route('admin.preview.deposit-file') }}">
<span class="material-symbols-outlined text-[18px]">upload_file</span>
<span>Deposit &amp; File Creation</span>
</a>
<a class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-[#111e33] transition-colors" href="{{ route('admin.preview.audit-logs') }}">
<span class="material-symbols-outlined text-[18px]">history</span>
<span>Audit Logs</span>
</a>
<a class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-[#111e33] transition-colors" href="{{ route('admin.preview.system-settings') }}">
<span class="material-symbols-outlined text-[18px]">settings</span>
<span>System Settings</span>
</a>
</nav>
</div>
<!-- Bottom Operator Profile Card -->
<div class="p-3 border-t border-[#1e293b]">
<div class="bg-[#0f172a] border border-[#1e293b] rounded-xl p-3 mb-2">
<div class="flex items-center space-x-2.5">
<div class="w-8 h-8 rounded-lg bg-[#0e2a22] flex items-center justify-center text-emerald-300 font-mono font-bold text-xs flex-shrink-0">
            RB
          </div>
<div class="overflow-hidden">
<p class="text-xs font-semibold text-slate-200 truncate">Engr. R. Bautista</p>
<p class="text-[10px] font-mono text-[#eabf55] tracking-tight truncate">SUPERADMIN • ROOT NODE</p>
</div>
</div>
</div>
<button class="w-full flex items-center justify-center space-x-2 px-3 py-2 rounded-lg text-xs font-mono text-slate-400 hover:text-red-300 hover:bg-red-950/20 border border-transparent hover:border-red-900/40 transition-colors">
<span class="material-symbols-outlined text-[16px]">logout</span>
<span>Sign Out Session</span>
</button>
</div>
</aside>
<!-- Main Stage Content Area -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#070d18]">
<div class="max-w-5xl mx-auto space-y-6">
<!-- Breadcrumb & Header Title -->
<div>
<div class="flex items-center space-x-2 text-xs font-mono text-emerald-400 mb-2">
<a class="hover:text-emerald-300 transition-colors inline-flex items-center gap-1.5" href="{{ route('admin.preview.user-management') }}">
<span class="material-symbols-outlined text-[16px]">arrow_back</span>
<span>Back to User Management</span>
</a>
<span class="text-slate-600">/</span>
<span class="text-[#eabf55] font-semibold">STAGE 01</span>
</div>
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
<div>
<h1 class="text-xl sm:text-2xl font-bold text-white tracking-tight flex items-center gap-2.5">
<span>Provision Institutional User Account</span>
<span class="bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-[10px] font-mono px-2 py-0.5 rounded-full font-bold uppercase tracking-wider">ACTIVE</span>
</h1>
<p class="text-xs sm:text-sm text-slate-400 mt-1 max-w-2xl leading-relaxed">
              Direct administrative provisioning for Cavite State University faculty, staff, and personnel with zero-trust key generation.
            </p>
</div>
<div class="flex items-center space-x-2 self-start sm:self-auto">
<span class="px-2.5 py-1 rounded-lg bg-[#0e1726] border border-[#1e293b] font-mono text-[11px] text-slate-300 flex items-center gap-2 shadow-sm">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
              HSM ENCLAVE ONLINE
            </span>
</div>
</div>
</div>
<!-- Pipeline Progress Stepper -->
<div class="bg-[#0b1322] border border-[#1e293b] rounded-xl p-4 sm:p-5 shadow-sm">
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<!-- Step 01: Active -->
<div class="flex items-center space-x-3.5 relative">
<div class="w-9 h-9 rounded-xl bg-[#0e2a22] border-2 border-emerald-400 text-emerald-300 flex items-center justify-center font-mono font-bold text-sm shadow-[0_0_12px_rgba(16,185,129,0.25)] flex-shrink-0">
              01
            </div>
<div>
<p class="text-[11px] font-mono text-emerald-400 uppercase tracking-wider font-semibold">Step 01 • Active</p>
<p class="text-xs font-bold text-white">User Identity Intake</p>
</div>
<div class="hidden md:block absolute -right-2 top-1/2 -translate-y-1/2 text-slate-600 font-mono text-xs">→</div>
</div>
<!-- Step 02: In Queue -->
<div class="flex items-center space-x-3.5 relative opacity-80">
<div class="w-9 h-9 rounded-xl bg-[#070d18] border border-[#1e293b] text-slate-400 flex items-center justify-center font-mono font-bold text-sm flex-shrink-0">
              02
            </div>
<div>
<p class="text-[11px] font-mono text-slate-500 uppercase tracking-wider font-semibold">Step 02 • In Queue</p>
<p class="text-xs font-bold text-slate-300">Role &amp; Clearance Tier</p>
</div>
<div class="hidden md:block absolute -right-2 top-1/2 -translate-y-1/2 text-slate-600 font-mono text-xs">→</div>
</div>
<!-- Step 03: In Queue -->
<div class="flex items-center space-x-3.5 opacity-80">
<div class="w-9 h-9 rounded-xl bg-[#070d18] border border-[#1e293b] text-slate-400 flex items-center justify-center font-mono font-bold text-sm flex-shrink-0">
              03
            </div>
<div>
<p class="text-[11px] font-mono text-slate-500 uppercase tracking-wider font-semibold">Step 03 • In Queue</p>
<p class="text-xs font-bold text-slate-300">Key Derivation &amp; Sign-Off</p>
</div>
</div>
</div>
</div>
<!-- Comprehensive Form Container -->
<form class="space-y-6" onsubmit="event.preventDefault();">
<!-- Card 1: 1. TARGET PERSONNEL IDENTITY -->
<div class="bg-[#0b1322] border border-[#1e293b] rounded-2xl p-5 sm:p-6 space-y-4 shadow-xl">
<div class="flex items-center justify-between border-b border-[#1e293b] pb-3">
<div class="flex items-center space-x-2">
<span class="material-symbols-outlined text-emerald-400 text-lg">badge</span>
<h2 class="text-sm font-semibold uppercase tracking-wider text-slate-100 font-mono">1. Target Personnel Identity</h2>
</div>
<span class="text-[10px] font-mono text-[#eabf55] bg-[#eabf55]/10 border border-[#eabf55]/30 px-2 py-0.5 rounded font-semibold uppercase tracking-wider">Direct Intake</span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<!-- Employee / Student ID -->
<div class="space-y-1.5">
<label class="block text-xs font-mono text-slate-300 uppercase tracking-wider">
                Employee / Student ID <span class="text-red-400">*</span>
</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3.5 top-2.5 text-slate-500 text-[18px]">badge</span>
<input class="w-full bg-[#070d18] border border-[#1e293b] text-slate-100 font-mono text-xs pl-10 pr-4 py-2.5 rounded-xl focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500/30 placeholder:text-slate-600 transition-all" placeholder="e.g. 2026-CEIT-9921" required="" type="text" value="2026-CEIT-9921"/>
</div>
</div>
<!-- Full Name & Title -->
<div class="space-y-1.5">
<label class="block text-xs font-mono text-slate-300 uppercase tracking-wider">
                Full Name &amp; Title <span class="text-red-400">*</span>
</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3.5 top-2.5 text-slate-500 text-[18px]">person</span>
<input class="w-full bg-[#070d18] border border-[#1e293b] text-slate-100 text-xs pl-10 pr-4 py-2.5 rounded-xl focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500/30 placeholder:text-slate-600 transition-all" placeholder="Prof. Juan Dela Cruz" required="" type="text" value="Prof. Juan Dela Cruz"/>
</div>
</div>
<!-- Institutional Email -->
<div class="space-y-1.5 sm:col-span-2">
<label class="block text-xs font-mono text-slate-300 uppercase tracking-wider">
                Institutional Email Address <span class="text-red-400">*</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3.5 text-slate-500 text-[18px]">mail</span>
<input class="w-full bg-[#070d18] border border-[#1e293b] text-slate-100 text-xs pl-10 pr-36 py-2.5 rounded-xl focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500/30 placeholder:text-slate-600 font-mono transition-all" placeholder="j.delacruz" required="" type="text" value="j.delacruz"/>
<span class="absolute right-2 font-mono text-[11px] text-emerald-300 bg-[#0e2a22] border border-emerald-500/40 px-2.5 py-1 rounded-lg font-bold select-none">
                  @cvsu.edu.ph
                </span>
</div>
</div>
<!-- College / Department -->
<div class="space-y-1.5">
<label class="block text-xs font-mono text-slate-300 uppercase tracking-wider">
                College / Department <span class="text-red-400">*</span>
</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3.5 top-2.5 text-slate-500 text-[18px]">account_tree</span>
<select class="w-full bg-[#070d18] border border-[#1e293b] text-slate-200 text-xs pl-10 pr-8 py-2.5 rounded-xl focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500/30 appearance-none cursor-pointer transition-all">
<option selected="">CEIT - Dept. of Information Technology</option>
<option>CEIT - Dept. of Computer Science</option>
<option>CEIT - Dept. of Engineering</option>
<option>CAS - Dept. of Physical Sciences</option>
<option>CEMDS - Dept. of Economics</option>
<option>CED - Dept. of Teacher Education</option>
<option>CON - College of Nursing</option>
<option>MIS - Management Information Systems</option>
<option>OUR - Office of the University Registrar</option>
</select>
<span class="material-symbols-outlined absolute right-3.5 top-2.5 text-slate-500 pointer-events-none text-[18px]">expand_more</span>
</div>
</div>
<!-- Campus Location -->
<div class="space-y-1.5">
<label class="block text-xs font-mono text-slate-300 uppercase tracking-wider">
                Campus Location <span class="text-red-400">*</span>
</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3.5 top-2.5 text-slate-500 text-[18px]">location_on</span>
<select class="w-full bg-[#070d18] border border-[#1e293b] text-slate-200 text-xs pl-10 pr-8 py-2.5 rounded-xl focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500/30 appearance-none cursor-pointer transition-all">
<option selected="">Indang (Main Campus)</option>
<option>CCAT Campus (Rosario)</option>
<option>Silang Campus</option>
<option>Carmona Campus</option>
<option>Bacoor City Campus</option>
<option>Imus Campus</option>
<option>General Trias Campus</option>
<option>Trece Martires City Campus</option>
<option>Naic Campus</option>
<option>Maragondon Campus</option>
<option>Tanza Campus</option>
</select>
<span class="material-symbols-outlined absolute right-3.5 top-2.5 text-slate-500 pointer-events-none text-[18px]">expand_more</span>
</div>
</div>
</div>
</div>
<!-- Card 2: 2. VAULT CLEARANCE TIER DELEGATION -->
<div class="bg-[#0b1322] border border-[#1e293b] rounded-2xl p-5 sm:p-6 space-y-4 shadow-xl">
<div class="flex items-center justify-between border-b border-[#1e293b] pb-3">
<div class="flex items-center space-x-2">
<span class="material-symbols-outlined text-emerald-400 text-lg">security</span>
<h2 class="text-sm font-semibold uppercase tracking-wider text-slate-100 font-mono">2. Vault Clearance Tier Delegation</h2>
</div>
<span class="text-[11px] font-mono text-slate-400 uppercase">Select Authorized Level</span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
<!-- Tier 1: Public / Student -->
<label class="bg-[#070d18] border border-[#1e293b] rounded-xl p-4 cursor-pointer hover:border-slate-500 transition-all flex flex-col justify-between group">
<div>
<div class="flex items-center justify-between mb-2">
<span class="font-mono text-[10px] text-slate-400 uppercase font-bold tracking-wider">Tier 1</span>
<input class="accent-emerald-500 w-4 h-4 cursor-pointer" name="clearance_tier" type="radio" value="tier1"/>
</div>
<p class="font-bold text-xs text-slate-200">Public / Student</p>
<p class="text-[11px] text-slate-400 mt-1 leading-snug">Public memorandums, open syllabi, university calendar bulletins.</p>
</div>
<div class="mt-4 pt-2.5 border-t border-[#1e293b] text-[10px] font-mono text-slate-500">Read &amp; Acknowledge</div>
</label>
<!-- Tier 2: Academic Staff / Personnel -->
<label class="bg-[#070d18] border border-[#1e293b] rounded-xl p-4 cursor-pointer hover:border-slate-500 transition-all flex flex-col justify-between group">
<div>
<div class="flex items-center justify-between mb-2">
<span class="font-mono text-[10px] text-emerald-400 uppercase font-bold tracking-wider">Tier 2</span>
<input class="accent-emerald-500 w-4 h-4 cursor-pointer" name="clearance_tier" type="radio" value="tier2"/>
</div>
<p class="font-bold text-xs text-slate-200">Academic Staff / Personnel</p>
<p class="text-[11px] text-slate-400 mt-1 leading-snug">Operational clearance, departmental memos, internal records.</p>
</div>
<div class="mt-4 pt-2.5 border-t border-[#1e293b] text-[10px] font-mono text-slate-500">Department Write</div>
</label>
<!-- Tier 3: Faculty Auth (Recommended) -->
<label class="bg-[#0c241c] border-2 border-emerald-500 rounded-xl p-4 cursor-pointer shadow-lg shadow-emerald-950/50 flex flex-col justify-between relative">
<span class="absolute -top-2.5 right-3 bg-emerald-500 text-slate-950 font-mono text-[9px] font-extrabold uppercase px-2 py-0.5 rounded shadow">RECOMMENDED</span>
<div>
<div class="flex items-center justify-between mb-2">
<span class="font-mono text-[10px] text-emerald-300 uppercase font-bold tracking-wider">Tier 3</span>
<input checked="" class="accent-emerald-500 w-4 h-4 cursor-pointer" name="clearance_tier" type="radio" value="tier3"/>
</div>
<p class="font-bold text-xs text-emerald-300">Faculty Auth</p>
<p class="text-[11px] text-slate-300 mt-1 leading-snug">Confidential grade sheets, syllabi repository, curriculum revisions, official transcripts.</p>
</div>
<div class="mt-4 pt-2.5 border-t border-emerald-800/60 text-[10px] font-mono text-emerald-400">Cryptographic Signing</div>
</label>
<!-- Tier 4: Executive Vault -->
<label class="bg-[#070d18] border border-[#1e293b] rounded-xl p-4 cursor-pointer hover:border-slate-500 transition-all flex flex-col justify-between group">
<div>
<div class="flex items-center justify-between mb-2">
<span class="font-mono text-[10px] text-[#eabf55] uppercase font-bold tracking-wider">Tier 4</span>
<input class="accent-emerald-500 w-4 h-4 cursor-pointer" name="clearance_tier" type="radio" value="tier4"/>
</div>
<p class="font-bold text-xs text-slate-200">Executive Vault</p>
<p class="text-[11px] text-slate-400 mt-1 leading-snug">Board resolutions, registrar root credentials, legal proceedings.</p>
</div>
<div class="mt-4 pt-2.5 border-t border-[#1e293b] text-[10px] font-mono text-amber-500/80">Air-Gapped Approval</div>
</label>
</div>
</div>
<!-- Card 3: 3. SECURITY KEYS & POLICIES -->
<div class="bg-[#0b1322] border border-[#1e293b] rounded-2xl p-5 sm:p-6 space-y-4 shadow-xl">
<div class="flex items-center justify-between border-b border-[#1e293b] pb-3">
<div class="flex items-center space-x-2">
<span class="material-symbols-outlined text-emerald-400 text-lg">vpn_key</span>
<h2 class="text-sm font-semibold uppercase tracking-wider text-slate-100 font-mono">3. Security Keys &amp; Policies</h2>
</div>
<span class="text-[11px] font-mono text-emerald-400 flex items-center gap-1.5">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
              HARDWARE ENCLAVE
            </span>
</div>
<!-- Auto-Generated Master Clearance Key / OTP -->
<div class="bg-[#070d18] border border-[#1e293b] rounded-xl p-4 space-y-2.5">
<div class="flex justify-between items-center text-xs">
<span class="font-mono text-slate-300 font-medium">Auto-Generated Master Clearance Key / One-Time Passcode</span>
<span class="font-mono text-[10px] text-[#eabf55] bg-[#eabf55]/10 border border-[#eabf55]/30 px-2 py-0.5 rounded font-semibold uppercase">Expires in 24h</span>
</div>
<div class="relative flex items-center">
<input class="w-full bg-[#0a1120] border border-[#1e293b] text-emerald-300 font-mono text-xs pl-3.5 pr-28 py-2.5 rounded-xl focus:outline-none select-all" id="master-key-input" readonly="" type="text" value="CvSU-MIS-8849-XZ90Q#kL2"/>
<button class="absolute right-2 px-3 py-1.5 bg-[#111e33] hover:bg-[#1a2b47] border border-[#1e293b] rounded-lg text-slate-200 text-xs font-mono flex items-center gap-1.5 transition-colors" onclick="navigator.clipboard ? navigator.clipboard.writeText('CvSU-MIS-8849-XZ90Q#kL2') : null;" type="button">
<span class="material-symbols-outlined text-[14px] text-emerald-400">content_copy</span>
<span>Copy Key</span>
</button>
</div>
<p class="text-[11px] text-slate-500 font-mono">
              Dispatched automatically via university relay to registered @cvsu.edu.ph inbox.
            </p>
</div>
<!-- Zero-Trust Checkboxes -->
<div class="space-y-2.5 pt-1">
<label class="flex items-start space-x-3 p-3.5 rounded-xl bg-[#070d18] border border-[#1e293b] cursor-pointer hover:border-slate-600 transition-colors">
<input checked="" class="mt-0.5 w-4 h-4 rounded border-[#1e293b] bg-[#0b1322] text-emerald-600 focus:ring-0 accent-emerald-500 cursor-pointer" type="checkbox"/>
<div>
<span class="text-xs font-semibold text-slate-200 block">Require hardware FIDO2 WebAuthn key enrollment on first session</span>
<span class="text-[11px] text-slate-400 font-mono block mt-0.5">Mandates physical security key registration (YubiKey/TouchID) before accessing restricted institutional files.</span>
</div>
</label>
<label class="flex items-start space-x-3 p-3.5 rounded-xl bg-[#070d18] border border-[#1e293b] cursor-pointer hover:border-slate-600 transition-colors">
<input checked="" class="mt-0.5 w-4 h-4 rounded border-[#1e293b] bg-[#0b1322] text-emerald-600 focus:ring-0 accent-emerald-500 cursor-pointer" type="checkbox"/>
<div>
<span class="text-xs font-semibold text-slate-200 block">Log administrative provisioning to immutable SHA-256 audit ledger</span>
<span class="text-[11px] text-slate-400 font-mono block mt-0.5">Binds this provisioning event to Superadmin R. Bautista with terminal signature block #8820A.</span>
</div>
</label>
</div>
</div>
<!-- Bottom Actions -->
<div class="pt-2 flex flex-col sm:flex-row items-center justify-between gap-3">
<button class="w-full sm:w-auto px-5 py-2.5 rounded-xl border border-[#1e293b] text-slate-400 hover:text-slate-100 hover:bg-[#111e33] font-mono text-xs transition-colors text-center inline-flex items-center justify-center" type="button">
            Cancel &amp; Discard
          </button>
<button class="w-full sm:w-auto px-6 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 active:bg-emerald-700 text-white font-mono text-xs font-semibold tracking-wider flex items-center justify-center space-x-2 shadow-lg shadow-emerald-950/60 transition-all cursor-pointer active:scale-[0.99]" type="button">
<span>Proceed to Role Authorization</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</form>
<!-- Compliance & Operator Audit Footer -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-3 px-2 py-4 text-[11px] font-mono text-slate-500 border-t border-[#1e293b]">
<div class="flex items-center space-x-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
<span>CAVITE STATE UNIVERSITY • MIS AUDIT NODE #8820</span>
<span>•</span>
<span>ISO/IEC 27001 COMPLIANT</span>
</div>
<div class="text-slate-400">
          OPERATOR: <span class="text-slate-200">ENGR. R. BAUTISTA</span> • TOKEN: <span class="text-emerald-400 font-bold">MIS-ADM-8820A</span>
</div>
</div>
</div>
</main>
</div>
</body></html>