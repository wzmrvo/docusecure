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
<script>
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
<header class="h-16 bg-white border-b border-slate-200 sticky top-0 z-40 flex items-center justify-between px-8 shadow-sm"><div class="flex items-center gap-4"><div><div class="flex items-center gap-2"><h2 class="text-base font-bold text-[#14452f] tracking-tight font-serif">Cavite State University</h2><span class="text-slate-300">|</span><span class="text-xs text-[#173153] font-semibold">DocuSecure Enclave</span></div><p class="text-[11px] text-slate-500 font-mono">Truth • Excellence • Service — Indang, Cavite 4122</p></div><span class="hidden lg:inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#e8f6ee] text-[#14452f] border border-[#14452f]/20 shadow-xs"><span class="w-2 h-2 rounded-full bg-[#16a34a] animate-pulse"></span>1st Sem AY 2026–2027 Active</span></div><div class="flex items-center gap-4"><div class="relative w-64 md:w-72"><span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span><input class="w-full bg-[#f8fafc] border border-slate-200 rounded-lg pl-9 pr-4 py-1.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#14452f]/30 focus:border-[#14452f]" placeholder="Search documents, syllabi, circulars..." type="text"></div><button aria-label="Notifications" class="p-2 text-slate-500 hover:text-[#14452f] hover:bg-emerald-50/50 rounded-lg transition-colors relative border border-slate-200" type="button"><span class="material-symbols-outlined text-[20px]">notifications</span><span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-[#f59e0b] ring-2 ring-white"></span></button><div class="h-6 w-px bg-slate-200"></div><div class="flex items-center gap-3 pl-1 cursor-pointer group"><div class="w-9 h-9 rounded-full bg-[#14452f] border-2 border-[#d4a017] text-[#fef3c7] flex items-center justify-center font-bold text-xs shadow-sm font-mono">JM</div><div class="hidden sm:flex flex-col text-left"><span class="text-xs font-bold text-slate-900 leading-tight group-hover:text-[#14452f]">Juanito P. Mendoza</span><span class="text-[11px] text-emerald-800 font-mono font-medium">Tier 1 Student · CEIT</span></div><span class="material-symbols-outlined text-slate-400 text-[18px] group-hover:text-[#14452f]">expand_more</span></div></div></header>
<!-- Main Content Area -->
<main class="flex-1 p-8 flex flex-col gap-6">
<!-- Breadcrumbs & Status Tag -->
<div class="flex flex-wrap items-center justify-between gap-2 -mb-2"><div class="flex items-center gap-2 text-xs text-slate-500 font-mono"><span class="text-[#173153] font-semibold">DocuSecure</span><span>/</span><span>Student Portal</span><span>/</span><span class="text-slate-800 font-semibold">Dashboard Overview</span><span>•</span><span class="text-slate-400">STU-2024-10892 // 0xFA71..89E0</span></div><div class="flex items-center gap-2"><span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-md text-[11px] font-medium bg-slate-100 text-slate-600 border border-slate-200"><span class="material-symbols-outlined text-[14px]">shield</span> RA 10173 ENFORCED</span><span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-md text-[11px] font-medium bg-[#eaf1f9] text-[#376ead]">Read-Only Sandbox</span></div></div>
<!-- Welcome Banner (Light Clean Aesthetic matching IMAGE_2) -->
<div class="relative overflow-hidden bg-gradient-to-r from-[#14452f] via-[#1a533a] to-[#173153] rounded-2xl border-2 border-[#d4a017]/40 p-7 text-white shadow-lg"><div class="absolute -right-8 -bottom-10 opacity-10 pointer-events-none select-none"><span class="material-symbols-outlined text-[220px] text-white">school</span></div><div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6"><div class="flex flex-col gap-2.5"><div class="flex items-center gap-2 flex-wrap"><span class="px-3 py-0.5 rounded-full text-[11px] font-bold uppercase tracking-wider bg-[#d4a017] text-[#0f3624] shadow-xs">CEIT • Main Campus</span><span class="text-xs text-emerald-100 flex items-center gap-1 font-medium bg-[#1b4d3e]/80 px-2.5 py-0.5 rounded-full border border-emerald-400/30"><span class="material-symbols-outlined text-[15px] text-[#9fd2b4]">verified</span> Official Student Enrollee</span><span class="text-[11px] font-mono text-emerald-200/90 flex items-center gap-1 bg-[#0f3624]/60 px-2 py-0.5 rounded border border-emerald-500/20"><span class="material-symbols-outlined text-[14px] text-[#d4a017]">fingerprint</span> Bio-Auth #0xFA71</span></div><h1 class="text-2xl sm:text-3xl font-bold text-white tracking-tight font-serif">Welcome back, Juanito P. Mendoza</h1><p class="text-sm text-emerald-100/90 max-w-2xl leading-relaxed">Bachelor of Science in Information Technology (3rd Year, Regular Section A) · Student ID: <span class="font-mono font-bold text-[#fef3c7] bg-[#0c261b] px-2 py-0.5 rounded border border-[#d4a017]/40">2024-10892</span></p></div><div class="flex items-center gap-3 shrink-0 flex-wrap sm:flex-nowrap"><a class="px-4 py-2.5 bg-[#d4a017] hover:bg-[#eab308] text-[#0f3624] text-xs font-bold rounded-lg flex items-center gap-2 transition-all shadow-md transform hover:-translate-y-0.5" href="#"><span class="material-symbols-outlined text-[18px] text-[#0f3624]">verified</span><span>Official Clearance Certificate (PDF)</span></a><a class="px-4 py-2.5 bg-[#14452f]/60 hover:bg-[#14452f] text-white text-xs font-semibold rounded-lg border border-emerald-300/40 flex items-center gap-2 transition-colors shadow-sm backdrop-blur-sm" href="#"><span class="material-symbols-outlined text-[18px] text-[#fef3c7]">menu_book</span><span>Student Code of Conduct</span></a></div></div></div>
<!-- 4 KPI Metrics Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5"><div class="bg-white rounded-xl border border-slate-200 p-5 flex flex-col justify-between gap-3 shadow-sm border-t-4 border-t-[#14452f] hover:shadow-md transition-shadow"><div class="flex items-center justify-between"><span class="text-xs font-bold uppercase tracking-wider text-slate-500">Academic Clearance</span><span class="p-1.5 rounded-lg bg-[#e8f6ee] text-[#14452f]"><span class="material-symbols-outlined text-[18px]">assignment_turned_in</span></span></div><div class="flex flex-col gap-2"><div class="flex items-baseline justify-between"><span class="text-2xl font-bold text-slate-900 font-serif">3 of 4 Signed</span><span class="text-xs font-bold text-[#b45309] bg-[#fef3c7] px-2 py-0.5 rounded-full border border-amber-300/60 font-mono">75% Completed</span></div><div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden"><div class="bg-gradient-to-r from-[#14452f] to-[#d4a017] h-full rounded-full w-3/4"></div></div></div><span class="text-xs text-[#b45309] font-semibold flex items-center gap-1.5 bg-[#fef3c7]/60 px-2 py-1 rounded-md border border-amber-300/40"><span class="material-symbols-outlined text-[15px] text-[#f59e0b]">hourglass_empty</span> Cashier Subsidy Validation Pending</span></div><div class="bg-white rounded-xl border border-slate-200 p-5 flex flex-col justify-between gap-3 shadow-sm border-t-4 border-t-[#173153] hover:shadow-md transition-shadow"><div class="flex items-center justify-between"><span class="text-xs font-bold uppercase tracking-wider text-slate-500">Verified Syllabi &amp; Memos</span><span class="p-1.5 rounded-lg bg-[#eaf1f9] text-[#173153]"><span class="material-symbols-outlined text-[18px]">library_books</span></span></div><div class="flex flex-col"><span class="text-2xl font-bold text-slate-900 font-serif">142 Documents</span><span class="text-xs text-slate-500">Curricula, BOR resolutions, circulars</span></div><span class="text-xs text-[#14452f] font-medium flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-[#16a34a]">verified</span> Cryptographically ledger-backed</span></div><div class="bg-white rounded-xl border border-slate-200 p-5 flex flex-col justify-between gap-3 shadow-sm border-t-4 border-t-[#d4a017] hover:shadow-md transition-shadow"><div class="flex items-center justify-between"><span class="text-xs font-bold uppercase tracking-wider text-slate-500">Academic Standing</span><span class="p-1.5 rounded-lg bg-[#fef3c7] text-[#b45309]"><span class="material-symbols-outlined text-[18px]">verified</span></span></div><div class="flex flex-col"><span class="text-2xl font-bold text-slate-900 font-serif">Good Standing</span><span class="text-xs text-slate-500">No scholastic deficiencies or flags</span></div><span class="text-xs text-[#14452f] font-semibold flex items-center gap-1 bg-[#e8f6ee] px-2 py-1 rounded-md"><span class="material-symbols-outlined text-[14px] text-[#16a34a]">check_circle</span> CHED UniFAST Grantee Eligible</span></div><div class="bg-white rounded-xl border border-slate-200 p-5 flex flex-col justify-between gap-3 shadow-sm border-t-4 border-t-[#14452f] hover:shadow-md transition-shadow"><div class="flex items-center justify-between"><span class="text-xs font-bold uppercase tracking-wider text-slate-500">Term Validity Horizon</span><span class="p-1.5 rounded-lg bg-[#14452f] text-[#fef3c7]"><span class="material-symbols-outlined text-[18px]">event_available</span></span></div><div class="flex flex-col"><span class="text-2xl font-bold text-[#14452f] font-serif">294 Days</span><span class="text-xs text-slate-500">1st Semester AY 2026–2027</span></div><span class="text-xs text-slate-500 font-mono flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-[#d4a017]"></span>Valid until: Jul 31, 2027 PST</span></div></div>
<!-- Main Layout Grid (Left: 8 Cols, Right: 4 Cols) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
<!-- Left Major Column (Clearance Checklist & Public Documents) -->
<div class="lg:col-span-8 flex flex-col gap-6">
<!-- Card 1: Midterm Academic Clearance Checklist -->
<div class="bg-white rounded-xl border border-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.04)] overflow-hidden">
<div class="p-5 border-b border-slate-200 bg-slate-50/50 flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-l-4 border-l-[#14452f]"><div><h2 class="text-base font-bold text-slate-900 flex items-center gap-2 font-serif"><span class="material-symbols-outlined text-[#14452f] text-[22px]">assignment_turned_in</span>Midterm Academic Clearance Checklist</h2><p class="text-xs text-slate-500 mt-0.5">Official clearance registry for Academic Year 2026–2027 (1st Semester)</p></div><span class="px-3 py-1 rounded-md bg-[#fef3c7] font-mono text-xs text-[#b45309] font-bold border border-[#f59e0b]/30 self-start sm:self-auto flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">verified</span>CY-2026-REG-A</span></div>
<!-- Checklist Rows -->
<div class="divide-y divide-slate-100">
<!-- Item 1: CEIT Clearance -->
<div class="p-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 hover:bg-slate-50/70 transition-colors">
<div class="flex items-start gap-3">
<div class="p-2 rounded-lg bg-[#e8f6ee] text-[#16a34a] mt-0.5">
<span class="material-symbols-outlined text-[20px]">domain_verification</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2 flex-wrap">
<span class="text-sm font-semibold text-slate-900">CEIT Department Clearance</span>
<span class="px-2 py-0.5 rounded-full text-[11px] font-semibold bg-[#e8f6ee] text-[#16a34a]">
                        Approved
                      </span>
</div>
<span class="text-xs text-slate-500 mt-0.5">
                      Validated by Engr. M. Ramos (Dept Chair) · Sep 12, 2026
                    </span>
<span class="text-[11px] font-mono text-slate-400 mt-0.5">
                      Hash: 0x8a92bb03c4f9cf1a7741e · Sig: ED25519-OK
                    </span>
</div>
</div>
<div class="flex items-center gap-1.5 text-emerald-600 text-xs font-semibold self-end sm:self-auto">
<span class="material-symbols-outlined text-[16px]">lock</span>
<span>SIGNED</span>
</div>
</div>
<!-- Item 2: Main Library -->
<div class="p-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 hover:bg-slate-50/70 transition-colors">
<div class="flex items-start gap-3">
<div class="p-2 rounded-lg bg-[#e8f6ee] text-[#16a34a] mt-0.5">
<span class="material-symbols-outlined text-[20px]">local_library</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2 flex-wrap">
<span class="text-sm font-semibold text-slate-900">University Main Library</span>
<span class="px-2 py-0.5 rounded-full text-[11px] font-semibold bg-[#e8f6ee] text-[#16a34a]">
                        Approved
                      </span>
</div>
<span class="text-xs text-slate-500 mt-0.5">
                      Zero overdue items · Turnitin similarity threshold compliant (&lt;12%)
                    </span>
<span class="text-[11px] font-mono text-slate-400 mt-0.5">
                      Circulation Token: LIB-CVSU-9902-IND · Auto-Certified
                    </span>
</div>
</div>
<div class="flex items-center gap-1.5 text-emerald-600 text-xs font-semibold self-end sm:self-auto">
<span class="material-symbols-outlined text-[16px]">lock</span>
<span>SIGNED</span>
</div>
</div>
<!-- Item 3: Registrar -->
<div class="p-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 hover:bg-slate-50/70 transition-colors">
<div class="flex items-start gap-3">
<div class="p-2 rounded-lg bg-[#e8f6ee] text-[#16a34a] mt-0.5">
<span class="material-symbols-outlined text-[20px]">school</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2 flex-wrap">
<span class="text-sm font-semibold text-slate-900">Office of the University Registrar</span>
<span class="px-2 py-0.5 rounded-full text-[11px] font-semibold bg-[#e8f6ee] text-[#16a34a]">
                        Approved
                      </span>
</div>
<span class="text-xs text-slate-500 mt-0.5">
                      Form 137 verified · Prerequisite course chain confirmed
                    </span>
<span class="text-[11px] font-mono text-slate-400 mt-0.5">
                      Certificate Key: REG-VER-44102-CvSU · Validated
                    </span>
</div>
</div>
<div class="flex items-center gap-1.5 text-emerald-600 text-xs font-semibold self-end sm:self-auto">
<span class="material-symbols-outlined text-[16px]">lock</span>
<span>SIGNED</span>
</div>
</div>
<!-- Item 4: Cashier / Accounting -->
<div class="p-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 bg-amber-50/30 hover:bg-amber-50/50 transition-colors">
<div class="flex items-start gap-3">
<div class="p-2 rounded-lg bg-[#fef3c7] text-[#b45309] mt-0.5">
<span class="material-symbols-outlined text-[20px]">receipt_long</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2 flex-wrap">
<span class="text-sm font-semibold text-slate-900">University Cashier / Accounting</span>
<span class="px-2 py-0.5 rounded-full text-[11px] font-semibold bg-[#fef3c7] text-[#b45309]">
                        Pending Review
                      </span>
</div>
<span class="text-xs text-slate-600 mt-0.5">
                      CHED UniFAST Free Higher Education Act Subsidy reconciliation queued
                    </span>
<span class="text-[11px] font-mono text-amber-700 mt-0.5">
                      Batch: UNIF-2026-Q1 · Queue Position: #14 · Est. wait: ~24 hrs
                    </span>
</div>
</div>
<div class="flex items-center gap-1.5 text-amber-600 text-xs font-semibold self-end sm:self-auto">
<span class="material-symbols-outlined text-[16px]">hourglass_top</span>
<span>WAITING SIGNATURE</span>
</div>
</div>
</div>
<!-- Footer Bar of Checklist -->
<div class="p-4 bg-slate-50 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3">
<div class="flex items-center gap-2 text-slate-500 text-xs">
<span class="material-symbols-outlined text-[18px] text-[#173153]">info</span>
<span>Upon University Cashier sign-off, the cryptographically sealed Clearance Certificate will activate instantly.</span>
</div>
<button class="px-3 py-1.5 bg-white border border-slate-300 text-slate-700 hover:bg-slate-50 text-xs font-medium rounded-lg transition-colors whitespace-nowrap" type="button">
                Preview Draft Slip
              </button>
</div>
</div>
<!-- Card 2: Public Syllabi, Prospectuses & Documents (Styled like Table in IMAGE_2) -->
<div class="bg-white rounded-xl border border-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.04)] overflow-hidden">
<div class="p-5 border-b border-slate-200 bg-slate-50/50 flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-l-4 border-l-[#173153]"><div><h2 class="text-base font-bold text-slate-900 flex items-center gap-2 font-serif"><span class="material-symbols-outlined text-[#173153] text-[22px]">auto_stories</span>Public Syllabi, Prospectuses &amp; Documents</h2><p class="text-xs text-slate-500 mt-0.5">Institutional documents verified against CvSU Central Document Cryptographic Ledger</p></div><span class="text-xs font-mono font-bold text-[#14452f] bg-[#e8f6ee] px-2.5 py-1 rounded-md border border-[#14452f]/20">TIER 1 OPEN ACCESS</span></div>
<!-- Category Sub-tabs matching IMAGE_2 -->
<div class="px-5 pt-3 pb-2.5 border-b border-slate-200 flex flex-wrap items-center gap-2 bg-slate-50/80"><button class="px-3.5 py-1.5 text-xs font-bold rounded-lg bg-[#14452f] text-white shadow-sm flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-[#d4a017]"></span>All documents (142)</button><button class="px-3 py-1.5 text-xs font-medium rounded-lg text-slate-700 hover:text-[#14452f] hover:bg-emerald-50 transition-colors">CEIT Syllabi (38)</button><button class="px-3 py-1.5 text-xs font-medium rounded-lg text-slate-700 hover:text-[#14452f] hover:bg-emerald-50 transition-colors">Campus Circulars (18)</button><button class="px-3 py-1.5 text-xs font-medium rounded-lg text-slate-700 hover:text-[#14452f] hover:bg-emerald-50 transition-colors">University Handbooks (6)</button></div>
<!-- Table (Exact column structure from IMAGE_2) -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-[#f8fafc] border-b border-slate-200 text-[11px] font-semibold text-slate-500 uppercase tracking-wider">
<th class="py-3 px-4">Document Name</th>
<th class="py-3 px-4">Category</th>
<th class="py-3 px-4">Uploaded By</th>
<th class="py-3 px-4">Date Uploaded</th>
<th class="py-3 px-4">Classification</th>
<th class="py-3 px-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 text-xs">
<!-- Doc 1 -->
<tr class="hover:bg-slate-50/80 transition-colors">
<td class="py-3 px-4 font-medium text-slate-800">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-slate-400 text-[18px]">description</span>
<span>BSIT-Curriculum-Prospectus-2026.pdf</span>
</div>
</td>
<td class="py-3 px-4 text-slate-500">Curriculum</td>
<td class="py-3 px-4 text-slate-600">CEIT Academic Council</td>
<td class="py-3 px-4 text-slate-500 font-mono text-[11px]">Nov 18, 2026</td>
<td class="py-3 px-4">
<span class="px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-[#eaf1f9] text-[#376ead]">
                        Public
                      </span>
</td>
<td class="py-3 px-4 text-right">
<div class="flex items-center justify-end gap-2 text-slate-400">
<button class="hover:text-slate-700 p-1" title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
<button class="hover:text-[#173153] p-1" title="Download"><span class="material-symbols-outlined text-[18px]">download</span></button>
</div>
</td>
</tr>
<!-- Doc 2 -->
<tr class="hover:bg-slate-50/80 transition-colors">
<td class="py-3 px-4 font-medium text-slate-800">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-slate-400 text-[18px]">description</span>
<span>CvSU-Student-Handbook-Rev2025.pdf</span>
</div>
</td>
<td class="py-3 px-4 text-slate-500">Handbook</td>
<td class="py-3 px-4 text-slate-600">Office of Student Affairs</td>
<td class="py-3 px-4 text-slate-500 font-mono text-[11px]">Nov 15, 2026</td>
<td class="py-3 px-4">
<span class="px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-[#e8f6ee] text-[#16a34a]">
                        Official Sealed
                      </span>
</td>
<td class="py-3 px-4 text-right">
<div class="flex items-center justify-end gap-2 text-slate-400">
<button class="hover:text-slate-700 p-1" title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
<button class="hover:text-[#173153] p-1" title="Download"><span class="material-symbols-outlined text-[18px]">download</span></button>
</div>
</td>
</tr>
<!-- Doc 3 -->
<tr class="hover:bg-slate-50/80 transition-colors">
<td class="py-3 px-4 font-medium text-slate-800">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-slate-400 text-[18px]">description</span>
<span>Academic-Calendar-AY2026-2027.pdf</span>
</div>
</td>
<td class="py-3 px-4 text-slate-500">Calendar</td>
<td class="py-3 px-4 text-slate-600">Univ. Registrar</td>
<td class="py-3 px-4 text-slate-500 font-mono text-[11px]">Nov 10, 2026</td>
<td class="py-3 px-4">
<span class="px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-[#eaf1f9] text-[#376ead]">
                        Public
                      </span>
</td>
<td class="py-3 px-4 text-right">
<div class="flex items-center justify-end gap-2 text-slate-400">
<button class="hover:text-slate-700 p-1" title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
<button class="hover:text-[#173153] p-1" title="Download"><span class="material-symbols-outlined text-[18px]">download</span></button>
</div>
</td>
</tr>
<!-- Doc 4 -->
<tr class="hover:bg-slate-50/80 transition-colors">
<td class="py-3 px-4 font-medium text-slate-800">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-slate-400 text-[18px]">description</span>
<span>CEIT-Laboratory-Safety-Guidelines.pdf</span>
</div>
</td>
<td class="py-3 px-4 text-slate-500">Policies</td>
<td class="py-3 px-4 text-slate-600">Engr. Ramos</td>
<td class="py-3 px-4 text-slate-500 font-mono text-[11px]">Nov 08, 2026</td>
<td class="py-3 px-4">
<span class="px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-[#fdf5df] text-[#8a6411]">
                        Internal
                      </span>
</td>
<td class="py-3 px-4 text-right">
<div class="flex items-center justify-end gap-2 text-slate-400">
<button class="hover:text-slate-700 p-1" title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
<button class="hover:text-[#173153] p-1" title="Download"><span class="material-symbols-outlined text-[18px]">download</span></button>
</div>
</td>
</tr>
<!-- Doc 5 (Locked Tier 4 Item) -->
<tr class="bg-slate-50/60 opacity-75">
<td class="py-3 px-4 font-medium text-slate-600">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-red-500 text-[18px]">lock</span>
<span>BOR_Executive_Resolution_2026_094.pdf</span>
</div>
</td>
<td class="py-3 px-4 text-slate-500">Executive</td>
<td class="py-3 px-4 text-slate-500">Board of Regents</td>
<td class="py-3 px-4 text-slate-400 font-mono text-[11px]">Oct 28, 2026</td>
<td class="py-3 px-4">
<span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#fcebeb] text-[#dc2626]">
                        Restricted
                      </span>
</td>
<td class="py-3 px-4 text-right">
<span class="text-[11px] text-red-600 font-medium">Access Denied</span>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Pagination matching IMAGE_2 -->
<div class="p-4 border-t border-slate-200 flex items-center justify-between text-xs text-slate-500">
<span>Showing 1–5 of 142 documents</span>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1 rounded border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 transition-colors disabled:opacity-50" disabled="">Previous</button>
<button class="px-2.5 py-1 rounded bg-[#173153] text-white font-medium">1</button>
<button class="px-2.5 py-1 rounded border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 transition-colors">2</button>
<button class="px-2.5 py-1 rounded border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 transition-colors">3</button>
<button class="px-2.5 py-1 rounded border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 transition-colors">Next</button>
</div>
</div>
</div>
</div>
<!-- Right Column (Digital ID Badge, Permissions & Circulars) -->
<div class="lg:col-span-4 flex flex-col gap-6">
<!-- Student Digital Identity Badge Card -->
<!-- Tier 1 Permissions Pod -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5 flex flex-col gap-4 border-t-4 border-t-[#14452f]"><div class="flex items-center justify-between"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[#14452f] text-[22px]">admin_panel_settings</span><h3 class="text-sm font-bold text-slate-900 font-serif">Tier 1 Permissions</h3></div><span class="px-2 py-0.5 rounded text-[11px] font-bold bg-[#fef3c7] text-[#b45309] border border-amber-300/50">GUEST / STUDENT</span></div><div class="flex flex-col gap-3 text-xs"><div><span class="text-[11px] font-bold text-[#14452f] uppercase tracking-wider block mb-1.5 flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-[#16a34a]"></span>Permitted Operations</span><ul class="space-y-1.5 text-slate-600"><li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span><span>View academic clearance statuses in real time</span></li><li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span><span>Download public curricula, handbooks &amp; memos</span></li><li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span><span>Export verified personal clearance pass (upon approval)</span></li></ul></div><div class="pt-2.5 border-t border-slate-100"><span class="text-[11px] font-bold text-red-600 uppercase tracking-wider block mb-1.5 flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-red-500"></span>Restricted Operations</span><ul class="space-y-1.5 text-slate-600"><li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-red-500 text-[16px]">cancel</span><span>No institutional upload or submission privileges</span></li><li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-red-500 text-[16px]">cancel</span><span>No cryptographic key derivation or departmental signing</span></li><li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-red-500 text-[16px]">cancel</span><span>Zero access to faculty grading registers or executive files</span></li></ul></div></div><button class="w-full py-2 bg-slate-50 hover:bg-emerald-50 text-[#14452f] hover:text-[#14452f] font-semibold text-xs rounded-lg border border-slate-200 hover:border-[#14452f]/30 flex items-center justify-center gap-2 transition-all mt-1 shadow-xs" type="button"><span class="material-symbols-outlined text-[16px] text-[#d4a017]">contact_support</span><span>Request Elevation / Clearance Inquiry</span></button></div>
<!-- Campus Announcements & Circulars Card -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5 flex flex-col gap-4 border-t-4 border-t-[#d4a017]"><div class="flex items-center justify-between"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[#b45309] text-[22px]">campaign</span><h3 class="text-sm font-bold text-slate-900 font-serif">Campus Circulars</h3></div><a class="text-xs font-bold text-[#14452f] hover:underline flex items-center gap-0.5" href="#"><span>View All</span><span class="material-symbols-outlined text-[14px]">arrow_forward</span></a></div><div class="flex flex-col gap-3"><div class="p-3 bg-amber-50/40 hover:bg-amber-50/70 rounded-lg border-l-4 border-l-[#d4a017] border border-slate-100 transition-colors flex flex-col gap-1"><div class="flex items-center justify-between"><span class="text-[11px] font-bold text-red-600 uppercase flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-red-600 animate-pulse"></span>Deadline Notice</span><span class="text-[11px] text-slate-500 font-mono">Oct 24, 2026</span></div><h4 class="text-xs font-bold text-slate-900 leading-snug">Midterm Clearance Deadline for 1st Semester AY 2026-2027</h4><p class="text-[11px] text-slate-600 leading-normal">All continuing students must secure cashier validation before the mid-term assessment cutoff.</p></div><div class="p-3 bg-slate-50 hover:bg-slate-100/70 rounded-lg border-l-4 border-l-[#14452f] border border-slate-100 transition-colors flex flex-col gap-1"><div class="flex items-center justify-between"><span class="text-[11px] font-bold text-[#14452f] uppercase">Registrar Memo #44</span><span class="text-[11px] text-slate-500 font-mono">Oct 18, 2026</span></div><h4 class="text-xs font-semibold text-slate-900 leading-snug">Rollout of Electronic True Copy of Grades (eTCG)</h4><p class="text-[11px] text-slate-600 leading-normal">QR-verified transcripts now acceptable for scholarship and private foundation clearance.</p></div><div class="p-3 bg-slate-50 hover:bg-slate-100/70 rounded-lg border-l-4 border-l-[#173153] border border-slate-100 transition-colors flex flex-col gap-1"><div class="flex items-center justify-between"><span class="text-[11px] font-bold text-slate-600 uppercase">MIS Advisory</span><span class="text-[11px] text-slate-500 font-mono">Oct 15, 2026</span></div><h4 class="text-xs font-semibold text-slate-900 leading-snug">Scheduled Server Maintenance Window</h4><p class="text-[11px] text-slate-600 leading-normal">DocuSecure cryptographic gateway will perform key rotation on Sunday at 02:00 PST.</p></div></div></div>
</div>
</div>
<!-- Institutional Footer -->
<footer class="mt-4 py-4 px-6 bg-white border border-slate-200 rounded-xl flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 shadow-sm border-b-2 border-b-[#14452f]"><div class="flex items-center gap-3"><div class="p-1.5 bg-[#e8f6ee] rounded-lg text-[#14452f]"><span class="material-symbols-outlined text-[22px]">account_balance</span></div><div><span class="font-bold text-[#14452f]">Cavite State University</span><span class="text-slate-400"> · Indang, Cavite 4122 Philippines · Est. 1906</span></div></div><div class="flex items-center gap-4 text-[11px]"><span class="flex items-center gap-1 font-medium text-[#14452f]"><span class="material-symbols-outlined text-[#16a34a] text-[15px]">verified</span>ISO 9001:2015</span><span class="flex items-center gap-1 font-medium text-[#173153]"><span class="material-symbols-outlined text-[#173153] text-[15px]">shield</span>RA 10173 Protected</span><span class="font-mono text-slate-500 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">DocuSecure v4.2.1-Enclave</span></div></footer>
</main>
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