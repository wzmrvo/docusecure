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
<div class="flex flex-col items-center text-center gap-2.5 px-2 pt-2 pb-3 border-b border-slate-700/50"><div class="flex items-center gap-3 w-full px-1">
  <img alt="Cavite State University Seal" class="w-10 h-10 object-contain shrink-0 drop-shadow" src="{{ asset('images/cvsu-logo.png') }}">
  <div class="flex flex-col text-left">
    <div class="flex items-center gap-1.5">
      <span class="text-[15px] font-bold tracking-tight text-white leading-tight">DocuSecure</span>
      <span class="px-1.5 py-0.2 rounded text-[9px] font-mono font-semibold bg-[#14452f] text-[#9fd2b4] border border-[#9fd2b4]/30">CvSU</span>
    </div>
    <span class="text-[10px] font-semibold text-slate-300 uppercase tracking-wider leading-tight mt-0.5">CAVITE STATE UNIVERSITY</span>
    <span class="text-[9px] font-mono text-[#9fd2b4]/80 tracking-wider mt-0.5">STUDENT ENCLAVE • TIER 1</span>
  </div>
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
<a class="flex items-center justify-between px-3 py-2 rounded-lg bg-[#24436c] text-white font-medium text-sm transition-colors shadow-inner border-l-4 border-[#eabf55]" href="#">
  <div class="flex items-center gap-3">
    <span class="material-symbols-outlined text-[20px] text-[#eabf55]">category</span>
    <span>Categories</span>
  </div>
  <span class="w-1.5 h-1.5 rounded-full bg-[#9fd2b4]"></span>
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
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 font-normal text-sm transition-colors" href="#">
  <span class="material-symbols-outlined text-[20px]">tune</span>
  <span>System / Portal Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-red-400 hover:bg-white/10 font-normal text-sm transition-colors mt-1" href="#">
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
<div class="flex items-center gap-4"><div class="flex flex-col">
  <div class="flex items-center gap-1.5 text-[11px] font-medium text-slate-500"><span>CvSU</span>
<span class="material-symbols-outlined text-[12px]">chevron_right</span>
<span>Student Portal</span>
<span class="material-symbols-outlined text-[12px]">chevron_right</span>
<span class="text-[#173153] font-semibold">Categories View</span></div>
  <div class="flex items-center gap-3 mt-0.5">
    <h2 class="text-base font-bold text-slate-900 tracking-tight">Document Categories</h2>
    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-[#e8f6ee] text-[#14452f] border border-[#9fd2b4]/40">
      <span class="w-1.5 h-1.5 rounded-full bg-[#16a34a] animate-pulse"></span>
      AY 2026–2027 • 1st Semester
    </span>
  </div>
</div></div>
<div class="flex items-center gap-4">
<!-- Global Search Bar -->
<div class="relative w-72 md:w-80">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
<input class="w-full bg-[#f1f5f9] border-0 rounded-lg pl-9 pr-4 py-1.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#173153]/20" placeholder="Search documents, syllabi, clearances..." type="text">
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
<div class="hidden sm:flex flex-col text-left">
<span class="text-xs font-semibold text-slate-900 leading-tight group-hover:text-[#173153]">Juanito P. Mendoza</span>
<span class="text-[11px] text-slate-500">Tier 1 Student</span>
</div>
<span class="material-symbols-outlined text-slate-400 text-[18px] group-hover:text-slate-700">expand_more</span>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-1 p-8 flex flex-col gap-6"><div class="flex flex-col w-full">
<!-- Dynamic Header / Title Synchronization Script for App Shell -->
<script>
    (function() {
      // Synchronize shell header title and navigation highlight seamlessly
      const shellHeaderTitle = document.querySelector('header h2');
      if (shellHeaderTitle) {
        shellHeaderTitle.textContent = "Document Categories";
      }
      
      const navLinks = document.querySelectorAll('aside nav a');
      navLinks.forEach(link => {
        const text = link.textContent.trim().toLowerCase();
        if (text.includes('categories')) {
          link.classList.remove('text-slate-300', 'hover:text-white', 'hover:bg-white/10', 'font-normal');
          link.classList.add('bg-[#24436c]', 'text-white', 'font-medium', 'shadow-inner');
        } else if (text.includes('dashboard')) {
          link.classList.remove('bg-[#24436c]', 'text-white', 'font-medium', 'shadow-inner');
          link.classList.add('text-slate-300', 'hover:text-white', 'hover:bg-white/10', 'font-normal');
        }
      });
    })();
  </script>
<!-- Cryptographic Session Bar & Institutional Scope Indicator -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-3 px-5 py-3 rounded-lg bg-surface-container-low text-on-surface shadow-sm"><div class="flex flex-wrap items-center gap-3">
  <div class="flex items-center gap-2">
    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
    <span class="font-label-md text-label-md tracking-wider text-primary font-semibold">ENCLAVE CONNECTED</span>
  </div>
  <span class="text-outline-variant font-label-md text-label-sm">|</span>
  <span class="font-label-sm text-label-sm text-on-surface-variant tracking-wide">
    CEIT / INDANG MAIN CAMPUS • SESSION: <span class="text-on-surface font-semibold font-code-snippet text-white">STU-2024-10892-CEIT</span> // <span class="text-primary-fixed-dim font-code-snippet">0xFA71..89E0</span>
  </span>
</div>
<div class="flex items-center gap-3 font-label-sm text-label-sm">
  <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container-high text-secondary-fixed">
    <span class="material-symbols-outlined text-[14px]">shield</span>
    RA 10173 ENFORCED
  </span>
  <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-secondary-container text-on-secondary-container">
    <span class="material-symbols-outlined text-[14px]">lock</span>
    Read-Only Sandbox
  </span>
</div></div>
<!-- Hero / Classification Header -->
<div class="mt-6 p-7 rounded-xl bg-[#14452f] text-white shadow-md relative overflow-hidden border border-[#9fd2b4]/30">
  <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
    <div class="max-w-3xl flex flex-col gap-2">
      <div class="inline-flex items-center gap-2 font-label-md text-label-md tracking-widest text-[#eabf55] uppercase font-semibold">
        <span class="material-symbols-outlined text-[18px] text-[#eabf55]">account_balance</span>
        Cavite State University • CEIT Knowledge Vault
      </div>
      <h1 class="font-headline-lg text-headline-lg tracking-tight text-white font-bold">
        Institutional Academic Classification Scheme &amp; Knowledge Vault
      </h1>
      <p class="font-body-md text-body-md text-slate-200 leading-relaxed">
        Access official curricula, verified college syllabi, institutional codes of conduct, and administrative issuances authorized for student review. All items are authenticated with tamper-proof SHA-256 cryptographic provenance.
      </p>
    </div>
    <div class="flex flex-col sm:flex-row lg:flex-col gap-3 min-w-[230px]">
      <div class="p-3.5 rounded-lg bg-[#112239] border border-[#eabf55]/30 flex flex-col gap-1.5 shadow-sm">
        <div class="flex items-center justify-between text-slate-300">
          <span class="font-label-sm text-label-sm tracking-wider uppercase text-[#eabf55] font-semibold">REGISTRY STATUS</span>
          <span class="material-symbols-outlined text-[#eabf55] text-[18px]">verified</span>
        </div>
        <span class="font-code-snippet text-code-snippet text-[#9fd2b4] font-semibold flex items-center gap-1.5">
          <span class="w-2 h-2 rounded-full bg-[#16a34a] animate-pulse"></span> ENCLAVE VERIFIED
        </span>
        <span class="font-label-sm text-label-sm text-slate-300">Academic Year 2026–2027</span>
      </div>
    </div>
  </div>
</div>
<!-- Key Metrics / Fast Stats Bar -->
<div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Stat 1 -->
<div class="p-5 rounded-lg bg-surface-container text-on-surface shadow-sm flex items-center justify-between">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant tracking-wider uppercase">Active Categories</span>
<span class="font-headline-md text-headline-md font-bold text-white">8 Available</span>
<span class="font-label-sm text-label-sm text-primary">7 Tier-1 Unrestricted</span>
</div>
<div class="w-12 h-12 rounded-lg bg-primary-container/30 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[26px]">category</span>
</div>
</div>
<!-- Stat 2 -->
<div class="p-5 rounded-lg bg-surface-container text-on-surface shadow-sm flex items-center justify-between">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant tracking-wider uppercase">Public Documents</span>
<span class="font-headline-md text-headline-md font-bold text-white">142 Documents</span>
<span class="font-label-sm text-label-sm text-secondary-fixed">Indexed &amp; Downloadable</span>
</div>
<div class="w-12 h-12 rounded-lg bg-secondary-container text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-[26px]">library_books</span>
</div>
</div>
<!-- Stat 3 -->
<div class="p-5 rounded-lg bg-surface-container text-on-surface shadow-sm flex items-center justify-between">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant tracking-wider uppercase">Curricular &amp; Syllabi</span>
<span class="font-headline-md text-headline-md font-bold text-white">62 Files</span>
<span class="font-label-sm text-label-sm text-tertiary">AY 2026–2027 Revisions</span>
</div>
<div class="w-12 h-12 rounded-lg bg-tertiary-container/30 text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined text-[26px]">menu_book</span>
</div>
</div>
<!-- Stat 4 -->
<div class="p-5 rounded-lg bg-surface-container text-on-surface shadow-sm flex items-center justify-between">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant tracking-wider uppercase">Clearance Access</span>
<span class="font-headline-md text-headline-md font-bold text-white">Tier 1</span>
<span class="font-label-sm text-label-sm text-primary">Public &amp; Curricular Sandbox</span>
</div>
<div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[26px]">admin_panel_settings</span>
</div>
</div>
</div>
<!-- Search, Filter & View Controls -->
<div class="mt-6 p-4 rounded-lg bg-surface-container flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-4 shadow-sm">
<!-- Search Bar -->
<div class="relative flex-1">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
<input class="w-full bg-surface-container-low text-on-surface placeholder:text-outline font-body-md text-body-md rounded-md pl-11 pr-4 py-2.5 focus:outline-none focus:bg-surface-container-lowest" id="categorySearch" placeholder="Filter categories, syllabi, manuals or keyword tokens..." type="text">
</div>
<!-- Filters & Toggle -->
<div class="flex flex-wrap items-center gap-3">
<!-- Department Selector -->
<div class="relative">
<select class="appearance-none bg-surface-container-low text-on-surface font-label-md text-label-md rounded-md pl-3.5 pr-9 py-2.5 cursor-pointer focus:outline-none" id="departmentFilter">
<option value="all">All Departments / Colleges</option>
<option selected="" value="ceit">CEIT (Engineering &amp; IT)</option>
<option value="cas">CAS (Arts &amp; Sciences)</option>
<option value="cafenr">CAFENR (Agriculture)</option>
<option value="admin">University Administration</option>
</select>
<span class="material-symbols-outlined pointer-events-none absolute right-2.5 top-1/2 -translate-y-1/2 text-outline text-[18px]">expand_more</span>
</div>
<!-- Quick Filter Pills -->
<div class="flex items-center gap-1.5 p-1 rounded-md bg-surface-container-low">
<button class="category-filter-btn px-3 py-1 rounded font-label-sm text-label-sm bg-primary text-on-primary font-semibold transition-all" data-filter="all">
          All (8)
        </button>
<button class="category-filter-btn px-3 py-1 rounded font-label-sm text-label-sm text-on-surface-variant hover:text-white transition-all" data-filter="academic">
          Academic (4)
        </button>
<button class="category-filter-btn px-3 py-1 rounded font-label-sm text-label-sm text-on-surface-variant hover:text-white transition-all" data-filter="administrative">
          Admin (2)
        </button>
<button class="category-filter-btn px-3 py-1 rounded font-label-sm text-label-sm text-on-surface-variant hover:text-white transition-all" data-filter="institutional">
          Guidelines (2)
        </button>
</div>
<!-- Layout View Mode Buttons -->
<div class="hidden sm:flex items-center gap-1 p-1 rounded-md bg-surface-container-low">
<button aria-label="Grid View" class="p-1.5 rounded bg-surface-container text-primary" id="viewGridBtn">
<span class="material-symbols-outlined text-[18px]">grid_view</span>
</button>
<button aria-label="List View" class="p-1.5 rounded text-outline hover:text-on-surface" id="viewListBtn">
<span class="material-symbols-outlined text-[18px]">format_list_bulleted</span>
</button>
</div>
</div>
</div>
<!-- Categories Grid -->
<div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5" id="categoryGrid"><!-- CARD 1: CEIT Academic -->
<article class="category-card p-5 rounded-lg bg-white hover:bg-[#f8fafc] transition-all flex flex-col justify-between shadow-sm group border-t-4 border-[#14452f] border-x border-b border-slate-200" data-dept="ceit" data-group="academic">
  <div>
    <div class="flex items-start justify-between gap-3">
      <div class="w-12 h-12 rounded-lg bg-[#14452f] text-[#9fd2b4] flex items-center justify-center shadow-sm">
        <span class="material-symbols-outlined text-[24px]">menu_book</span>
      </div>
      <div class="flex flex-col items-end gap-1">
        <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-[#e8f6ee] text-[#14452f] font-semibold border border-[#9fd2b4]/40">
          Tier 1 Public
        </span>
        <span class="px-1.5 py-0.2 rounded font-code-snippet text-[11px] font-semibold bg-[#fef3c7] text-[#eabf55] border border-[#eabf55]/30">38 Documents</span>
      </div>
    </div>
    <div class="mt-4 flex flex-col gap-1.5">
      <span class="font-label-sm text-label-sm text-[#14452f] font-bold tracking-widest uppercase">CEIT ACADEMIC</span>
      <h3 class="font-headline-sm text-headline-sm text-[#173153] font-bold group-hover:text-[#14452f] transition-colors">
        Course Syllabi &amp; Lecture Guides
      </h3>
      <p class="font-body-sm text-body-sm text-slate-600 line-clamp-2 mt-1">
        Official college course syllabi, lecture plans, intended learning outcomes, and grading rubrics approved by CEIT Department Chairs.
      </p>
    </div>
    <div class="mt-4 flex flex-wrap gap-1.5">
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">ITEC 85</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">DCIT 24</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">COSC 50</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-slate-500 font-medium border border-slate-200">+35 more</span>
    </div>
  </div>
  <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between font-label-sm text-label-sm text-slate-500">
    <span class="truncate">Updated 3d ago • CEIT Council</span>
    <button class="inline-flex items-center gap-1 font-label-sm text-label-sm text-[#14452f] hover:text-[#173153] font-bold transition-colors">
      Browse
      <span class="material-symbols-outlined text-[16px] text-[#eabf55] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
    </button>
  </div>
</article>

<!-- CARD 2: Degree Programs & Curricula -->
<article class="category-card p-5 rounded-lg bg-white hover:bg-[#f8fafc] transition-all flex flex-col justify-between shadow-sm group border-t-4 border-[#173153] border-x border-b border-slate-200" data-dept="ceit" data-group="academic">
  <div>
    <div class="flex items-start justify-between gap-3">
      <div class="w-12 h-12 rounded-lg bg-[#173153] text-[#9fd2b4] flex items-center justify-center shadow-sm">
        <span class="material-symbols-outlined text-[24px]">school</span>
      </div>
      <div class="flex flex-col items-end gap-1">
        <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-[#e8f6ee] text-[#14452f] font-semibold border border-[#9fd2b4]/40">
          Tier 1 Public
        </span>
        <span class="px-1.5 py-0.2 rounded font-code-snippet text-[11px] font-semibold bg-[#fef3c7] text-[#eabf55] border border-[#eabf55]/30">24 Documents</span>
      </div>
    </div>
    <div class="mt-4 flex flex-col gap-1.5">
      <span class="font-label-sm text-label-sm text-[#173153] font-bold tracking-widest uppercase">DEGREE PROGRAMS</span>
      <h3 class="font-headline-sm text-headline-sm text-[#173153] font-bold group-hover:text-[#14452f] transition-colors">
        Degree Programs &amp; Curricula
      </h3>
      <p class="font-body-sm text-body-sm text-slate-600 line-clamp-2 mt-1">
        Curriculum flowcharts, prerequisite ladders, and official graduation matrices for BSIT, BSCS, and BSCpE engineering programs.
      </p>
    </div>
    <div class="mt-4 flex flex-wrap gap-1.5">
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">BSIT 2024–2028</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">BSCS 2024–2028</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">BSCpE 2024</span>
    </div>
  </div>
  <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between font-label-sm text-label-sm text-slate-500">
    <span class="truncate">Updated 1w ago • Registrar</span>
    <button class="inline-flex items-center gap-1 font-label-sm text-label-sm text-[#14452f] hover:text-[#173153] font-bold transition-colors">
      Browse
      <span class="material-symbols-outlined text-[16px] text-[#eabf55] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
    </button>
  </div>
</article>

<!-- CARD 3: Student Governance & Handbooks -->
<article class="category-card p-5 rounded-lg bg-white hover:bg-[#f8fafc] transition-all flex flex-col justify-between shadow-sm group border-t-4 border-[#14452f] border-x border-b border-slate-200" data-dept="all" data-group="institutional">
  <div>
    <div class="flex items-start justify-between gap-3">
      <div class="w-12 h-12 rounded-lg bg-[#14452f] text-[#9fd2b4] flex items-center justify-center shadow-sm">
        <span class="material-symbols-outlined text-[24px]">gavel</span>
      </div>
      <div class="flex flex-col items-end gap-1">
        <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-[#e8f6ee] text-[#14452f] font-semibold border border-[#9fd2b4]/40">
          Tier 1 Public
        </span>
        <span class="px-1.5 py-0.2 rounded font-code-snippet text-[11px] font-semibold bg-[#fef3c7] text-[#eabf55] border border-[#eabf55]/30">16 Documents</span>
      </div>
    </div>
    <div class="mt-4 flex flex-col gap-1.5">
      <span class="font-label-sm text-label-sm text-[#14452f] font-bold tracking-widest uppercase">STUDENT GOVERNANCE</span>
      <h3 class="font-headline-sm text-headline-sm text-[#173153] font-bold group-hover:text-[#14452f] transition-colors">
        Student Governance &amp; Handbooks
      </h3>
      <p class="font-body-sm text-body-sm text-slate-600 line-clamp-2 mt-1">
        CvSU Student Charter, official Code of Discipline, campus rights, student council bylaws, and academic honesty governance.
      </p>
    </div>
    <div class="mt-4 flex flex-wrap gap-1.5">
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">Student Handbook 2026</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">Code of Discipline</span>
    </div>
  </div>
  <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between font-label-sm text-label-sm text-slate-500">
    <span class="truncate">Updated Oct 2026 • OSAS</span>
    <button class="inline-flex items-center gap-1 font-label-sm text-label-sm text-[#14452f] hover:text-[#173153] font-bold transition-colors">
      Browse
      <span class="material-symbols-outlined text-[16px] text-[#eabf55] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
    </button>
  </div>
</article>

<!-- CARD 4: Administrative Issuances & Circulars -->
<article class="category-card p-5 rounded-lg bg-white hover:bg-[#f8fafc] transition-all flex flex-col justify-between shadow-sm group border-t-4 border-[#173153] border-x border-b border-slate-200" data-dept="all" data-group="administrative">
  <div>
    <div class="flex items-start justify-between gap-3">
      <div class="w-12 h-12 rounded-lg bg-[#173153] text-[#9fd2b4] flex items-center justify-center shadow-sm">
        <span class="material-symbols-outlined text-[24px]">campaign</span>
      </div>
      <div class="flex flex-col items-end gap-1">
        <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-[#e8f6ee] text-[#14452f] font-semibold border border-[#9fd2b4]/40">
          Tier 1 Public
        </span>
        <span class="px-1.5 py-0.2 rounded font-code-snippet text-[11px] font-semibold bg-[#fef3c7] text-[#eabf55] border border-[#eabf55]/30">18 Documents</span>
      </div>
    </div>
    <div class="mt-4 flex flex-col gap-1.5">
      <span class="font-label-sm text-label-sm text-[#173153] font-bold tracking-widest uppercase">ADMIN ISSUANCES</span>
      <h3 class="font-headline-sm text-headline-sm text-[#173153] font-bold group-hover:text-[#14452f] transition-colors">
        Administrative Issuances &amp; Circulars
      </h3>
      <p class="font-body-sm text-body-sm text-slate-600 line-clamp-2 mt-1">
        University Registrar notices, OVPAA academic directives, enrollment protocols, and campus schedule announcements.
      </p>
    </div>
    <div class="mt-4 flex flex-wrap gap-1.5">
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">Memo 2026-081</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">CHED Enrolment</span>
    </div>
  </div>
  <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between font-label-sm text-label-sm text-slate-500">
    <span class="truncate">Updated 2d ago • OVPAA</span>
    <button class="inline-flex items-center gap-1 font-label-sm text-label-sm text-[#14452f] hover:text-[#173153] font-bold transition-colors">
      Browse
      <span class="material-symbols-outlined text-[16px] text-[#eabf55] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
    </button>
  </div>
</article>

<!-- CARD 5: Laboratory & NetLab Directives -->
<article class="category-card p-5 rounded-lg bg-white hover:bg-[#f8fafc] transition-all flex flex-col justify-between shadow-sm group border-t-4 border-[#14452f] border-x border-b border-slate-200" data-dept="ceit" data-group="institutional">
  <div>
    <div class="flex items-start justify-between gap-3">
      <div class="w-12 h-12 rounded-lg bg-[#14452f] text-[#9fd2b4] flex items-center justify-center shadow-sm">
        <span class="material-symbols-outlined text-[24px]">science</span>
      </div>
      <div class="flex flex-col items-end gap-1">
        <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-[#e8f6ee] text-[#14452f] font-semibold border border-[#9fd2b4]/40">
          Tier 1 Public
        </span>
        <span class="px-1.5 py-0.2 rounded font-code-snippet text-[11px] font-semibold bg-[#fef3c7] text-[#eabf55] border border-[#eabf55]/30">14 Documents</span>
      </div>
    </div>
    <div class="mt-4 flex flex-col gap-1.5">
      <span class="font-label-sm text-label-sm text-[#14452f] font-bold tracking-widest uppercase">LABORATORY &amp; NETLAB</span>
      <h3 class="font-headline-sm text-headline-sm text-[#173153] font-bold group-hover:text-[#14452f] transition-colors">
        Laboratory &amp; NetLab Directives
      </h3>
      <p class="font-body-sm text-body-sm text-slate-600 line-clamp-2 mt-1">
        CEIT engineering lab safety protocols, Cisco NetLab accountability standards, hardware borrowing rules, and workshop hygiene.
      </p>
    </div>
    <div class="mt-4 flex flex-wrap gap-1.5">
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">IT Lab Policy</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">Cisco NetLab Safety</span>
    </div>
  </div>
  <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between font-label-sm text-label-sm text-slate-500">
    <span class="truncate">Updated 2w ago • CEIT Labs</span>
    <button class="inline-flex items-center gap-1 font-label-sm text-label-sm text-[#14452f] hover:text-[#173153] font-bold transition-colors">
      Browse
      <span class="material-symbols-outlined text-[16px] text-[#eabf55] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
    </button>
  </div>
</article>

<!-- CARD 6: Financial Grants & CHED UniFAST Guidelines -->
<article class="category-card p-5 rounded-lg bg-white hover:bg-[#f8fafc] transition-all flex flex-col justify-between shadow-sm group border-t-4 border-[#eabf55] border-x border-b border-slate-200" data-dept="all" data-group="administrative">
  <div>
    <div class="flex items-start justify-between gap-3">
      <div class="w-12 h-12 rounded-lg bg-[#24436c] text-[#eabf55] flex items-center justify-center border border-[#eabf55]/30 shadow-sm">
        <span class="material-symbols-outlined text-[24px]">payments</span>
      </div>
      <div class="flex flex-col items-end gap-1">
        <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-[#e8f6ee] text-[#14452f] font-semibold border border-[#9fd2b4]/40">
          Tier 1 Public
        </span>
        <span class="px-1.5 py-0.2 rounded font-code-snippet text-[11px] font-semibold bg-[#fef3c7] text-[#eabf55] border border-[#eabf55]/30">12 Documents</span>
      </div>
    </div>
    <div class="mt-4 flex flex-col gap-1.5">
      <span class="font-label-sm text-label-sm text-[#eabf55] font-bold tracking-widest uppercase">FINANCIAL ASSISTANCE</span>
      <h3 class="font-headline-sm text-headline-sm text-[#173153] font-bold group-hover:text-[#14452f] transition-colors">
        Financial Grants &amp; UniFAST Guidelines
      </h3>
      <p class="font-body-sm text-body-sm text-slate-600 line-clamp-2 mt-1">
        CHED UniFAST Tertiary Education Subsidy (TES) directives, Cavite provincial scholarships, and RA 10931 free tuition validations.
      </p>
    </div>
    <div class="mt-4 flex flex-wrap gap-1.5">
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">UniFAST Billing</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">RA 10931 Guidelines</span>
    </div>
  </div>
  <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between font-label-sm text-label-sm text-slate-500">
    <span class="truncate">Updated 5d ago • OSAS Aid</span>
    <button class="inline-flex items-center gap-1 font-label-sm text-label-sm text-[#14452f] hover:text-[#173153] font-bold transition-colors">
      Browse
      <span class="material-symbols-outlined text-[16px] text-[#eabf55] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
    </button>
  </div>
</article>

<!-- CARD 7: Academic Rosters & Calendars -->
<article class="category-card p-5 rounded-lg bg-white hover:bg-[#f8fafc] transition-all flex flex-col justify-between shadow-sm group border-t-4 border-[#173153] border-x border-b border-slate-200" data-dept="all" data-group="academic">
  <div>
    <div class="flex items-start justify-between gap-3">
      <div class="w-12 h-12 rounded-lg bg-[#173153] text-[#9fd2b4] flex items-center justify-center shadow-sm">
        <span class="material-symbols-outlined text-[24px]">calendar_month</span>
      </div>
      <div class="flex flex-col items-end gap-1">
        <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-[#e8f6ee] text-[#14452f] font-semibold border border-[#9fd2b4]/40">
          Tier 1 Public
        </span>
        <span class="px-1.5 py-0.2 rounded font-code-snippet text-[11px] font-semibold bg-[#fef3c7] text-[#eabf55] border border-[#eabf55]/30">8 Documents</span>
      </div>
    </div>
    <div class="mt-4 flex flex-col gap-1.5">
      <span class="font-label-sm text-label-sm text-[#173153] font-bold tracking-widest uppercase">SCHEDULES &amp; CALENDARS</span>
      <h3 class="font-headline-sm text-headline-sm text-[#173153] font-bold group-hover:text-[#14452f] transition-colors">
        Academic Rosters &amp; Calendars
      </h3>
      <p class="font-body-sm text-body-sm text-slate-600 line-clamp-2 mt-1">
        AY 2026–2027 Schedule of Terms, midterm and final examination timetables, add/drop periods, and official University grade deadlines.
      </p>
    </div>
    <div class="mt-4 flex flex-wrap gap-1.5">
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">AY 2026–2027 Term 1</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#f1f5f9] text-[#173153] font-medium border border-slate-200">Finals Week Slot</span>
    </div>
  </div>
  <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between font-label-sm text-label-sm text-slate-500">
    <span class="truncate">Updated 1w ago • Registrar</span>
    <button class="inline-flex items-center gap-1 font-label-sm text-label-sm text-[#14452f] hover:text-[#173153] font-bold transition-colors">
      Browse
      <span class="material-symbols-outlined text-[16px] text-[#eabf55] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
    </button>
  </div>
</article>

<!-- CARD 8: Classified Board of Regents Archives (Tier 4 Restricted) -->
<article class="category-card p-5 rounded-lg bg-[#112239] hover:bg-[#173153] transition-all flex flex-col justify-between shadow-md group border-t-4 border-[#eabf55] border-x border-b border-slate-700/60" data-dept="all" data-group="administrative">
  <div>
    <div class="flex items-start justify-between gap-3">
      <div class="w-12 h-12 rounded-lg bg-[#14452f] text-[#eabf55] flex items-center justify-center border border-[#eabf55]/30 shadow-sm">
        <span class="material-symbols-outlined text-[24px]">lock</span>
      </div>
      <div class="flex flex-col items-end gap-1">
        <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-error-container text-white font-semibold inline-flex items-center gap-1">
          <span class="material-symbols-outlined text-[12px] text-[#eabf55]">lock</span>
          Tier 4 Restricted
        </span>
        <span class="px-1.5 py-0.2 rounded font-code-snippet text-[11px] font-semibold bg-[#24436c] text-[#eabf55] border border-[#eabf55]/30">12 Documents</span>
      </div>
    </div>
    <div class="mt-4 flex flex-col gap-1.5">
      <span class="font-label-sm text-label-sm text-[#eabf55] font-bold tracking-widest uppercase">BOR VAULT ARCHIVE</span>
      <h3 class="font-headline-sm text-headline-sm text-white group-hover:text-[#9fd2b4] transition-colors font-bold">
        Classified Board of Regents Archives
      </h3>
      <p class="font-body-sm text-body-sm text-slate-300 line-clamp-2 mt-1">
        Executive resolutions, university capital audits, and sealed Board of Regents meeting minutes. Elevation clearance required.
      </p>
    </div>
    <div class="mt-4 flex flex-wrap gap-1.5">
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#173153] text-[#9fd2b4] border border-[#9fd2b4]/20">BOR Minutes (Sealed)</span>
      <span class="px-2 py-0.5 rounded font-code-snippet text-[11px] bg-[#173153] text-[#9fd2b4] border border-[#9fd2b4]/20">Audit 2026-Q3</span>
    </div>
  </div>
  <div class="mt-6 pt-4 border-t border-slate-700/60 flex items-center justify-between font-label-sm text-label-sm text-slate-400">
    <span class="truncate text-[#eabf55] font-semibold flex items-center gap-1">
      <span class="w-1.5 h-1.5 rounded-full bg-[#eabf55]"></span> Restricted Vault
    </span>
    <button class="inline-flex items-center gap-1 font-label-sm text-label-sm text-[#112239] hover:text-[#173153] font-bold transition-colors px-2.5 py-1 rounded bg-[#eabf55] border border-[#eabf55] shadow-sm">
      Request Clearance
      <span class="material-symbols-outlined text-[14px]">vpn_key</span>
    </button>
  </div>
</article></div>
<!-- Category Governance & Sandbox Footnote Card -->
<div class="mt-8 p-6 rounded-xl bg-surface-container text-on-surface shadow-md flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
<div class="flex items-start gap-4">
<div class="w-10 h-10 rounded-lg bg-surface-container-high text-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[24px]">verified_user</span>
</div>
<div class="flex flex-col gap-1">
<h4 class="font-headline-sm text-headline-sm text-white">
          Tier 1 Student Access &amp; Read-Only Governance
        </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-3xl">
          Tier 1 clearance allows real-time inspection, verification of SHA-256 signatures, and downloading of public institutional categories. For restricted research datasets, thesis repositories, or executive records, submit a Tier 4 Access Clearance Slip to the CEIT Department Office.
        </p>
</div>
</div>
<div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto shrink-0">
<a class="w-full sm:w-auto px-4 py-2.5 rounded bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-md text-label-md text-center transition-colors" href="#">
        MIS Helpdesk
      </a>
<a class="w-full sm:w-auto px-4 py-2.5 rounded bg-primary text-on-primary hover:bg-primary-fixed-dim font-label-md text-label-md font-semibold text-center transition-colors" href="#">
        Request Elevation Inquiry
      </a>
</div>
</div>
<!-- Institutional Audit Footer -->
<footer class="mt-10 pt-6 pb-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-outline font-label-sm text-label-sm"><div class="flex flex-wrap items-center gap-2">
  <span class="text-on-surface font-semibold">Cavite State University — Indang Main Campus</span>
  <span>•</span>
  <span>ISO 9001:2015 Certified Management System</span>
  <span>•</span>
  <span class="text-primary font-medium">Republic Act No. 10173 (Data Privacy Act of 2012) Governed</span>
</div>
<div class="flex items-center gap-2 font-code-snippet text-slate-400">
  <span>DocuSecure v4.2.1-Enclave</span>
  <span class="text-slate-600">//</span>
  <span class="text-primary font-semibold">CRYPTOGRAPHIC SESSION ACTIVE</span>
</div></footer>
<!-- Realtime Client-Side Filtering Script -->
<script>
    (function() {
      const searchInput = document.getElementById('categorySearch');
      const deptFilter = document.getElementById('departmentFilter');
      const filterBtns = document.querySelectorAll('.category-filter-btn');
      const cards = document.querySelectorAll('.category-card');
      const gridContainer = document.getElementById('categoryGrid');
      const viewGridBtn = document.getElementById('viewGridBtn');
      const viewListBtn = document.getElementById('viewListBtn');

      let currentGroup = 'all';

      function applyFilters() {
        const query = searchInput.value.toLowerCase().trim();
        const selectedDept = deptFilter.value;

        cards.forEach(card => {
          const title = card.querySelector('h3').textContent.toLowerCase();
          const desc = card.querySelector('p').textContent.toLowerCase();
          const tags = Array.from(card.querySelectorAll('.font-code-snippet')).map(el => el.textContent.toLowerCase()).join(' ');
          const cardGroup = card.getAttribute('data-group');
          const cardDept = card.getAttribute('data-dept');

          const matchesQuery = !query || title.includes(query) || desc.includes(query) || tags.includes(query);
          const matchesGroup = (currentGroup === 'all') || (cardGroup === currentGroup);
          const matchesDept = (selectedDept === 'all') || (cardDept === 'all') || (cardDept === selectedDept);

          if (matchesQuery && matchesGroup && matchesDept) {
            card.classList.remove('hidden');
          } else {
            card.classList.add('hidden');
          }
        });
      }

      if (searchInput) searchInput.addEventListener('input', applyFilters);
      if (deptFilter) deptFilter.addEventListener('change', applyFilters);

      filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          filterBtns.forEach(b => {
            b.classList.remove('bg-primary', 'text-on-primary', 'font-semibold');
            b.classList.add('text-on-surface-variant');
          });
          this.classList.remove('text-on-surface-variant');
          this.classList.add('bg-primary', 'text-on-primary', 'font-semibold');

          currentGroup = this.getAttribute('data-filter');
          applyFilters();
        });
      });

      // View Layout Toggle
      if (viewListBtn && viewGridBtn && gridContainer) {
        viewListBtn.addEventListener('click', () => {
          gridContainer.classList.remove('grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4');
          gridContainer.classList.add('grid-cols-1');
          viewListBtn.classList.add('bg-surface-container', 'text-primary');
          viewListBtn.classList.remove('text-outline');
          viewGridBtn.classList.remove('bg-surface-container', 'text-primary');
          viewGridBtn.classList.add('text-outline');
        });

        viewGridBtn.addEventListener('click', () => {
          gridContainer.classList.add('grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4');
          viewGridBtn.classList.add('bg-surface-container', 'text-primary');
          viewGridBtn.classList.remove('text-outline');
          viewListBtn.classList.remove('bg-surface-container', 'text-primary');
          viewListBtn.classList.add('text-outline');
        });
      }
    })();
  </script>
</div></main>
</div>






</body></html>