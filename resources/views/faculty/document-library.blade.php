<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="web_dashboard" name="shell-type">
<title>DocuSecure - CvSU Document Library</title>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              navy: '#173153',
              'navy-light': '#1e3e68',
              'navy-dark': '#0f223a',
              green: '#14452f',
              'green-accent': '#166534',
              'green-light': '#e8f6ee',
              gold: '#eabf55',
              'gold-hover': '#dfb242',
              'gold-light': '#fdf8ec'
            }
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace']
          }
        }
      }
    }
  </script>
<style>
    @layer base {
      html, body {
        margin: 0;
        padding: 0;
      }
      body {
        overscroll-behavior: none;
      }
    }
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f5f9;
    }
    ::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 3px;
    }
  </style>
</head>

<!-- Sidebar (Institutional Deep Navy Enclave) -->
<body>@include('components.sidebar', ['currentRole' => 'faculty'])

<!-- Main Body Content Area -->
<div class="pl-64 flex flex-col min-h-screen bg-[#0b1120]">
  <!-- Top Navigation Header -->
  <header class="fixed top-0 left-64 right-0 h-16 bg-[#0f172a]/95 backdrop-blur-md border-b border-slate-800 z-40 px-8 flex items-center justify-between shadow-md">
    <div class="flex items-center gap-4 flex-1 max-w-xl">
      <div class="relative w-full flex items-center">
        <span class="material-symbols-outlined absolute left-3.5 text-slate-400 text-[20px]">search</span>
        <input class="w-full bg-[#1e293b]/80 border border-slate-700 rounded-lg pl-10 pr-4 py-2 text-sm text-slate-100 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-[#9fd2b4]/40 focus:border-[#9fd2b4] transition-all" placeholder="Search document manifest, SHA-256 seal, tracking ID (e.g. CVSU-GOV)..." type="search">
      </div>
    </div>
    <div class="flex items-center gap-5">
      <div class="hidden xl:flex items-center gap-2 px-3 py-1 rounded-md bg-[#166534]/30 border border-[#166534]/60 text-xs text-[#9fd2b4]">
        <span class="material-symbols-outlined text-[#9fd2b4] text-[16px]">lock</span>
        <span>CvSU Cloud Enclave: <strong class="text-[#baeecf] font-semibold">Active</strong> • 256-bit HSM Encrypted</span>
      </div>
      <button class="relative p-2 rounded-lg text-slate-300 hover:bg-[#1e293b] hover:text-white transition-colors" title="Notifications">
        <span class="material-symbols-outlined text-[22px]">notifications</span>
        <span class="absolute top-1.5 right-1.5 h-2 w-2 rounded-full bg-rose-500 ring-2 ring-[#0f172a]"></span>
      </button>
      <div class="h-8 w-px bg-slate-800"></div>
      <div class="flex items-center gap-3 pl-1">
        <div class="flex flex-col text-right hidden sm:flex">
          <span class="text-sm font-semibold text-white leading-tight">Prof. Juan Dela Cruz</span>
          <span class="text-xs text-slate-400">CEIT Faculty // Tier 3 Authority</span>
        </div>
        <div class="w-9 h-9 rounded-full bg-[#eabf55] text-[#0f223a] flex items-center justify-center font-bold text-sm shadow-sm ring-2 ring-[#eabf55]/30">JC</div>
      </div>
    </div>
  </header>

  <!-- Main Workspace Container -->
  <main class="w-full pt-20 px-8 pb-12 flex-1 flex flex-col gap-6">
    <!-- Breadcrumbs & Page Header Context Card with Semi-Admin Controls -->
    <div class="bg-[#152238] rounded-xl border border-[#1f3a5f] p-6 shadow-xl flex flex-col md:flex-row md:items-center justify-between gap-5">
      <div class="flex items-start gap-4">
        <div class="h-12 w-12 rounded-xl bg-[#0f223a] border border-[#1f3a5f] flex items-center justify-center text-[#eabf55] shadow-sm flex-shrink-0">
          <span class="material-symbols-outlined text-[28px]">folder_shared</span>
        </div>
        <div class="flex flex-col">
          <div class="flex items-center gap-2.5 flex-wrap">
            <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Enclave Workspace</span>
            <span class="text-xs text-slate-600">/</span>
            <h1 class="text-2xl font-bold text-white tracking-tight">Document Library</h1>
            <span class="text-xs font-bold px-2.5 py-0.5 rounded-full bg-[#166534]/30 border border-[#166534] text-[#9fd2b4] uppercase tracking-wide">CEIT Repository Node</span>
          </div>
          <p class="text-sm text-slate-300 mt-1">Browse, cryptographically endorse, inspect, and elevate access permissions across collegiate and university records.</p>
        </div>
      </div>
      <div class="flex items-center flex-wrap gap-2.5">
        <button class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-[#0f223a] border border-[#1f3a5f] text-slate-200 hover:bg-[#172b47] hover:text-white text-xs font-semibold transition-all shadow-sm">
          <span class="material-symbols-outlined text-[17px] text-[#eabf55]">fact_check</span>
          <span>Batch Verification</span>
        </button>
        <button class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-[#0f223a] border border-[#1f3a5f] text-slate-200 hover:bg-[#172b47] hover:text-white text-xs font-semibold transition-all shadow-sm">
          <span class="material-symbols-outlined text-[17px] text-slate-400">file_download</span>
          <span>Department Manifest CSV</span>
        </button>
        <button class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg bg-[#166534] hover:bg-[#14452f] text-white text-xs font-semibold shadow-md transition-all border border-emerald-600/50">
          <span class="material-symbols-outlined text-[18px] text-emerald-200">verified</span>
          <span>Endorsement Queue (3)</span>
        </button>
      </div>
    </div>

    <!-- Metric Telemetry Cards (4-column grid) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <!-- Stat Card 1 -->
      <div class="bg-[#152238] p-5 rounded-xl border border-[#1f3a5f] shadow-sm flex flex-col justify-between">
        <div class="flex items-start justify-between">
          <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Total Accessible Records</span>
          <div class="h-9 w-9 rounded-lg bg-[#0f223a] flex items-center justify-center text-[#eabf55]">
            <span class="material-symbols-outlined text-[20px]">library_books</span>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-3xl font-bold text-white leading-none">1,248</div>
          <div class="flex items-center gap-1.5 mt-2">
            <span class="material-symbols-outlined text-[#9fd2b4] text-[15px] font-bold">arrow_upward</span>
            <span class="font-mono text-xs font-semibold text-[#9fd2b4]">+32 added this month</span>
          </div>
        </div>
      </div>
      <!-- Stat Card 2 -->
      <div class="bg-[#152238] p-5 rounded-xl border border-[#166534]/60 shadow-sm flex flex-col justify-between">
        <div class="flex items-start justify-between">
          <span class="text-xs font-semibold uppercase tracking-wider text-[#9fd2b4]">Unlocked (Tier 3 CEIT)</span>
          <div class="h-9 w-9 rounded-lg bg-[#166534]/30 border border-[#166534]/60 flex items-center justify-center text-[#9fd2b4]">
            <span class="material-symbols-outlined text-[20px]">lock_open</span>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-3xl font-bold text-[#9fd2b4] leading-none">842</div>
          <div class="flex items-center gap-1.5 mt-2">
            <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-xs text-slate-300">Direct view &amp; cryptographic sign-off</span>
          </div>
        </div>
      </div>
      <!-- Stat Card 3 -->
      <div class="bg-[#152238] p-5 rounded-xl border border-rose-900/50 shadow-sm flex flex-col justify-between">
        <div class="flex items-start justify-between">
          <span class="text-xs font-semibold uppercase tracking-wider text-rose-300">Restricted Vault (Tier 4)</span>
          <div class="h-9 w-9 rounded-lg bg-rose-950/40 border border-rose-800/40 flex items-center justify-center text-rose-400">
            <span class="material-symbols-outlined text-[20px]">encrypted</span>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-3xl font-bold text-white leading-none">406</div>
          <div class="flex items-center gap-1.5 mt-2">
            <span class="material-symbols-outlined text-rose-400 text-[15px]">shield</span>
            <span class="text-xs text-rose-300 font-medium">Dual-officer elevation required</span>
          </div>
        </div>
      </div>
      <!-- Stat Card 4 -->
      <div class="bg-[#152238] p-5 rounded-xl border border-amber-900/40 shadow-sm flex flex-col justify-between">
        <div class="flex items-start justify-between">
          <span class="text-xs font-semibold uppercase tracking-wider text-[#eabf55]">Pending Endorsements</span>
          <div class="h-9 w-9 rounded-lg bg-amber-950/40 border border-amber-800/40 flex items-center justify-center text-[#eabf55]">
            <span class="material-symbols-outlined text-[20px]">pending_actions</span>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-3xl font-bold text-[#eabf55] leading-none">02</div>
          <div class="flex items-center gap-1.5 mt-2">
            <span class="material-symbols-outlined text-[#eabf55] text-[15px]">timelapse</span>
            <span class="font-mono text-xs text-slate-300">Avg SLA response 3.8 hrs</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Filter & Clearance Tier Selector Deck -->
    <div class="bg-[#152238] p-5 rounded-xl border border-[#1f3a5f] shadow-md flex flex-col gap-4">
      <div class="flex flex-col gap-2 pb-3 border-b border-[#1f3a5f]">
        <div class="flex flex-wrap items-center justify-between gap-2">
          <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-[18px] text-[#9fd2b4]">security</span>
            <span class="text-xs font-bold uppercase tracking-wider text-slate-200">Clearance Level Filter &amp; Cryptographic Scope</span>
          </div>
          <span class="text-[11px] font-mono text-[#9fd2b4] bg-[#166534]/25 border border-[#166534]/50 px-2 py-0.5 rounded font-medium">Session Authority: Faculty Tier 3 Confidential</span>
        </div>
        <div class="flex flex-wrap items-center gap-2 pt-1">
          <button class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold bg-[#0f223a] hover:bg-[#172b47] text-slate-300 border border-[#1f3a5f] transition-colors">
            <span class="material-symbols-outlined text-[15px]">apps</span>
            <span>All Documents</span>
            <span class="ml-1 px-1.5 py-0.2 rounded-full bg-slate-800 text-slate-300 font-mono text-[10px]">1,248</span>
          </button>
          <button class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold bg-[#0f223a] hover:bg-[#172b47] text-slate-300 border border-[#1f3a5f] transition-colors">
            <span class="material-symbols-outlined text-[15px] text-slate-400">public</span>
            <span>Tier 1: Public Release</span>
            <span class="ml-1 px-1.5 py-0.2 rounded-full bg-slate-800 text-slate-400 font-mono text-[10px]">180</span>
          </button>
          <button class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold bg-[#172b47]/60 hover:bg-[#172b47] text-[#bbc5f3] border border-[#1f3a5f] transition-colors">
            <span class="material-symbols-outlined text-[15px] text-[#bbc5f3]">domain</span>
            <span>Tier 2: Academic Internal</span>
            <span class="ml-1 px-1.5 py-0.2 rounded-full bg-[#172b47] text-[#bbc5f3] font-mono text-[10px]">220</span>
          </button>
          <button class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-bold bg-[#166534]/30 text-[#9fd2b4] border border-[#166534] shadow-sm ring-1 ring-[#9fd2b4]/40">
            <span class="material-symbols-outlined text-[16px] text-[#9fd2b4]">verified_user</span>
            <span>Tier 3: Dept Confidential</span>
            <span class="ml-1 px-1.5 py-0.2 rounded-full bg-[#166534] text-white font-mono text-[10px]">442</span>
            <span class="text-[10px] uppercase tracking-wider bg-[#166534] text-emerald-100 px-1.5 py-0.5 rounded ml-1 font-bold">Active Clearance</span>
          </button>
          <button class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold bg-rose-950/30 hover:bg-rose-950/50 text-rose-300 border border-rose-900/50 transition-colors">
            <span class="material-symbols-outlined text-[15px] text-rose-400">lock</span>
            <span>Tier 4: Restricted Vault</span>
            <span class="ml-1 px-1.5 py-0.2 rounded-full bg-rose-900/50 text-rose-300 font-mono text-[10px]">406</span>
            <span class="text-[10px] text-rose-400/80 hidden sm:inline">• Requires Elevation</span>
          </button>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-3">
        <!-- Keyword Filter -->
        <div class="lg:col-span-5 relative flex items-center">
          <span class="material-symbols-outlined absolute left-3.5 text-slate-400 text-[19px]">search</span>
          <input class="w-full bg-[#0f223a] border border-[#1f3a5f] rounded-lg pl-10 pr-12 py-2 text-sm text-slate-100 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-[#9fd2b4]/30 focus:border-[#9fd2b4] transition-colors" placeholder="Filter by title, SHA-256 seal, or ID (e.g. CVSU-GOV-2026)..." type="text">
          <span class="absolute right-3 font-mono text-[11px] text-slate-400 px-1.5 py-0.5 rounded bg-[#172b47] border border-[#1f3a5f]">⌘K</span>
        </div>
        <!-- Classification Select -->
        <div class="lg:col-span-2">
          <select class="w-full bg-[#0f223a] border border-[#1f3a5f] rounded-lg px-3 py-2 text-sm text-slate-300 focus:outline-none focus:ring-2 focus:ring-[#9fd2b4]/30 focus:border-[#9fd2b4] transition-colors cursor-pointer">
            <option>All Classifications</option>
            <option>Faculty Governance</option>
            <option>Curriculum &amp; Syllabi</option>
            <option>Administrative Directive</option>
            <option>Accreditation &amp; QA</option>
            <option>Finance &amp; COA Audits</option>
          </select>
        </div>
        <!-- Unit Select -->
        <div class="lg:col-span-3">
          <select class="w-full bg-[#0f223a] border border-[#1f3a5f] rounded-lg px-3 py-2 text-sm text-slate-300 focus:outline-none focus:ring-2 focus:ring-[#9fd2b4]/30 focus:border-[#9fd2b4] transition-colors cursor-pointer">
            <option>Department: CEIT - Engineering &amp; IT</option>
            <option>CAS - Arts &amp; Sciences</option>
            <option>CAFENR - Agriculture</option>
            <option>University Registrar Central</option>
            <option>Office of University President</option>
          </select>
        </div>
        <!-- Switcher & Ledger Sync -->
        <div class="lg:col-span-2 flex items-center justify-end gap-2">
          <div class="flex items-center gap-1 bg-[#0f223a] p-1 rounded-lg border border-[#1f3a5f]">
            <button class="p-1 rounded bg-[#172b47] text-[#eabf55] shadow-xs" title="Table View">
              <span class="material-symbols-outlined text-[18px]">table_rows</span>
            </button>
            <button class="p-1 rounded text-slate-400 hover:text-white transition-colors" title="Grid View">
              <span class="material-symbols-outlined text-[18px]">grid_view</span>
            </button>
          </div>
        </div>
      </div>
      <!-- Filter Pills & Trust Badges -->
      <div class="flex flex-wrap items-center justify-between gap-3 pt-2 border-t border-[#1f3a5f] text-xs">
        <div class="flex items-center gap-2 flex-wrap">
          <span class="text-slate-400 font-semibold uppercase tracking-wider">Active Filter Parameters:</span>
          <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-[#0f223a] border border-[#1f3a5f] text-slate-300 font-medium">
            <span>College: CEIT</span>
            <span class="material-symbols-outlined text-[14px] cursor-pointer text-slate-400 hover:text-rose-400">close</span>
          </span>
          <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-[#0f223a] border border-[#1f3a5f] text-slate-300 font-medium">
            <span>Tier: Faculty Authorized (Tier 3)</span>
            <span class="material-symbols-outlined text-[14px] cursor-pointer text-slate-400 hover:text-rose-400">close</span>
          </span>
          <button class="text-[#eabf55] hover:underline font-semibold ml-1">Reset Filters</button>
        </div>
        <div class="flex items-center gap-3 text-slate-400 font-mono text-[11px]">
          <span class="flex items-center gap-1 text-[#9fd2b4] font-medium">
            <span class="material-symbols-outlined text-[15px] text-[#9fd2b4]">verified</span>
            <span>Zero-Trust Ledger Connected</span>
          </span>
          <span>•</span>
          <span>Block Height: <strong class="text-[#eabf55] font-semibold">#88921-CvSU</strong></span>
        </div>
      </div>
    </div>

    <!-- Document Repository Semi-Admin Table -->
    <div class="bg-[#152238] rounded-xl border border-[#1f3a5f] overflow-hidden shadow-xl">
      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-[#0f223a] text-slate-400 font-semibold text-xs uppercase tracking-wider border-b border-[#1f3a5f]">
              <th class="py-3.5 px-5">Document Identifier &amp; Manifest</th>
              <th class="py-3.5 px-4">Dept Classification</th>
              <th class="py-3.5 px-4">Security Clearance</th>
              <th class="py-3.5 px-4">SHA-256 Integrity Seal</th>
              <th class="py-3.5 px-4">Size</th>
              <th class="py-3.5 px-5 text-right">Semi-Admin Governance Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-[#1f3a5f]/70 text-sm text-slate-200">
            <!-- Row 1 -->
            <tr class="hover:bg-[#172b47]/40 transition-colors">
              <td class="py-4 px-5">
                <div class="flex items-start gap-3">
                  <div class="p-2 rounded-lg bg-[#166534]/30 text-[#9fd2b4] flex-shrink-0 mt-0.5 border border-[#166534]/60">
                    <span class="material-symbols-outlined text-[20px]">description</span>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <a class="font-semibold text-white hover:text-[#9fd2b4] transition-colors leading-snug" href="#">CEIT Computer Studies Faculty Merit &amp; Tenure Guidelines 2026</a>
                    <span class="font-mono text-xs text-slate-400 mt-0.5">CVSU-GOV-2026-0182 • Endorsed 4 hrs ago by CEIT Dean</span>
                  </div>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="text-xs text-slate-300 bg-[#0f223a] border border-[#1f3a5f] px-2.5 py-1 rounded-md font-medium">Faculty Governance</span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#166534]/30 text-[#9fd2b4] text-xs font-semibold border border-[#166534]/70">
                  <span class="material-symbols-outlined text-[15px]">verified</span>
                  <span>Tier 3 (Faculty Auth)</span>
                </span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-[#eabf55]">
                <div class="flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[15px] text-[#9fd2b4]">gpp_good</span>
                  <span title="SHA256: 7f3a098c412e6d542013ce991f8a851d">7f3a09...851d</span>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-slate-400">3.4 MB</td>
              <td class="py-4 px-5 whitespace-nowrap text-right">
                <div class="inline-flex items-center gap-2">
                  <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-[#166534] text-white hover:bg-[#14452f] text-xs font-semibold transition-colors shadow-xs border border-emerald-500/40">
                    <span class="material-symbols-outlined text-[15px] text-emerald-200">draw</span>
                    <span>Verify &amp; Sign</span>
                  </button>
                  <button class="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-medium border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[15px] text-[#eabf55]">fingerprint</span>
                    <span>Inspect Hash</span>
                  </button>
                </div>
              </td>
            </tr>
            <!-- Row 2: Restricted Vault (Tier 4) -->
            <tr class="hover:bg-rose-950/20 transition-colors bg-rose-950/10">
              <td class="py-4 px-5">
                <div class="flex items-start gap-3">
                  <div class="p-2 rounded-lg bg-rose-950/50 text-rose-400 flex-shrink-0 mt-0.5 border border-rose-800/50">
                    <span class="material-symbols-outlined text-[20px]">lock</span>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <span class="font-semibold text-white leading-snug">Board of Regents Resolution No. 2026-094: University Cybersecurity Mandate</span>
                    <span class="font-mono text-xs text-rose-300/80 mt-0.5">CVSU-BOR-2026-0094 • Sealed Yesterday by Board Secretary</span>
                  </div>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="text-xs text-slate-300 bg-[#0f223a] border border-[#1f3a5f] px-2.5 py-1 rounded-md font-medium">Administrative &amp; Board</span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-rose-950/50 text-rose-300 text-xs font-semibold border border-rose-800/60">
                  <span class="material-symbols-outlined text-[15px]">lock</span>
                  <span>Tier 4: Restricted Vault</span>
                </span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-slate-400">
                <div class="flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[15px] text-rose-400">shield_locked</span>
                  <span title="SHA256: 9e4f21bb774020a1c3d18e9065ab4011">9e4f21...4011</span>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-slate-400">14.2 MB</td>
              <td class="py-4 px-5 whitespace-nowrap text-right">
                <div class="inline-flex items-center gap-2">
                  <a href="{{ route('faculty.preview.tier-4-access-request') }}?file=BOR_Resolution_2026_094_FacultyTenure_Clearance.pdf.enc&tracking=CVSU-BOR-2026-0094&hash=9e4f21...4011&size=14.2%20MB" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-rose-950/70 border border-rose-600 text-rose-200 hover:bg-rose-900 text-xs font-semibold transition-all shadow-sm">
                    <span class="material-symbols-outlined text-[15px] text-rose-300">key</span>
                    <span>Request Elevation</span>
                  </a>
                  <button class="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-medium border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[15px] text-slate-400">visibility</span>
                    <span>Manifest</span>
                  </button>
                </div>
              </td>
            </tr>
            <!-- Row 3: Tier 2 Internal Academic -->
            <tr class="hover:bg-[#172b47]/40 transition-colors">
              <td class="py-4 px-5">
                <div class="flex items-start gap-3">
                  <div class="p-2 rounded-lg bg-[#172b47]/70 text-[#bbc5f3] flex-shrink-0 mt-0.5 border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[20px]">architecture</span>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <a class="font-semibold text-white hover:text-[#9fd2b4] transition-colors leading-snug" href="#">CvSU Silang Campus Expansion Feasibility Assessment &amp; Masterplan</a>
                    <span class="font-mono text-xs text-slate-400 mt-0.5">CVSU-INFRA-2026-0311 • Modified 3 days ago by Planning Office</span>
                  </div>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="text-xs text-slate-300 bg-[#0f223a] border border-[#1f3a5f] px-2.5 py-1 rounded-md font-medium">Infrastructure &amp; Planning</span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#172b47]/50 text-[#bbc5f3] text-xs font-semibold border border-[#1f3a5f]">
                  <span class="material-symbols-outlined text-[15px]">domain</span>
                  <span>Tier 2: Academic Internal</span>
                </span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-[#eabf55]">
                <div class="flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[15px] text-[#9fd2b4]">gpp_good</span>
                  <span title="SHA256: 41c888e219ba3d7890f552a488c011e4">41c888...011e</span>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-slate-400">8.9 MB</td>
              <td class="py-4 px-5 whitespace-nowrap text-right">
                <div class="inline-flex items-center gap-2">
                  <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-[#0f223a] text-white hover:bg-[#172b47] text-xs font-semibold transition-colors shadow-xs border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[15px] text-[#eabf55]">download</span>
                    <span>View &amp; Export</span>
                  </button>
                  <button class="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-medium border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[15px] text-[#eabf55]">fingerprint</span>
                    <span>Inspect Hash</span>
                  </button>
                </div>
              </td>
            </tr>
            <!-- Row 4: Tier 3 Authorized -->
            <tr class="hover:bg-[#172b47]/40 transition-colors">
              <td class="py-4 px-5">
                <div class="flex items-start gap-3">
                  <div class="p-2 rounded-lg bg-[#166534]/30 text-[#9fd2b4] flex-shrink-0 mt-0.5 border border-[#166534]/60">
                    <span class="material-symbols-outlined text-[20px]">workspace_premium</span>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <a class="font-semibold text-white hover:text-[#9fd2b4] transition-colors leading-snug" href="#">BS Computer Science CHED Level IV Re-Accreditation Portfolio</a>
                    <span class="font-mono text-xs text-slate-400 mt-0.5">CVSU-QA-2026-0881 • Validated 5 days ago by QA Enclave</span>
                  </div>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="text-xs text-slate-300 bg-[#0f223a] border border-[#1f3a5f] px-2.5 py-1 rounded-md font-medium">Accreditation &amp; QA</span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#166534]/30 text-[#9fd2b4] text-xs font-semibold border border-[#166534]/70">
                  <span class="material-symbols-outlined text-[15px]">verified</span>
                  <span>Tier 3 (Faculty Auth)</span>
                </span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-[#eabf55]">
                <div class="flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[15px] text-[#9fd2b4]">gpp_good</span>
                  <span title="SHA256: d0129fbc8012bbec7192a5438819024f">d0129f...024f</span>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-slate-400">18.5 MB</td>
              <td class="py-4 px-5 whitespace-nowrap text-right">
                <div class="inline-flex items-center gap-2">
                  <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-[#166534] text-white hover:bg-[#14452f] text-xs font-semibold transition-colors shadow-xs border border-emerald-500/40">
                    <span class="material-symbols-outlined text-[15px] text-emerald-200">draw</span>
                    <span>Verify &amp; Sign</span>
                  </button>
                  <button class="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-medium border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[15px] text-[#eabf55]">fingerprint</span>
                    <span>Inspect Hash</span>
                  </button>
                </div>
              </td>
            </tr>
            <!-- Row 5: Tier 4 Restricted Vault -->
            <tr class="hover:bg-rose-950/20 transition-colors bg-rose-950/10">
              <td class="py-4 px-5">
                <div class="flex items-start gap-3">
                  <div class="p-2 rounded-lg bg-rose-950/50 text-rose-400 flex-shrink-0 mt-0.5 border border-rose-800/50">
                    <span class="material-symbols-outlined text-[20px]">account_balance</span>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <span class="font-semibold text-white leading-snug">University Annual Financial Ledger &amp; Procurement Matrix FY2025</span>
                    <span class="font-mono text-xs text-rose-300/80 mt-0.5">CVSU-FIN-2025-1102 • Sealed 1 week ago by Resident COA Auditor</span>
                  </div>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="text-xs text-slate-300 bg-[#0f223a] border border-[#1f3a5f] px-2.5 py-1 rounded-md font-medium">Finance &amp; COA Audits</span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-rose-950/50 text-rose-300 text-xs font-semibold border border-rose-800/60">
                  <span class="material-symbols-outlined text-[15px]">lock</span>
                  <span>Tier 4: Restricted Vault</span>
                </span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-slate-400">
                <div class="flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[15px] text-rose-400">shield_locked</span>
                  <span title="SHA256: 8a1b2c3d4e5f60718293a4b5c6d7e8f9">8a1b2c...e8f9</span>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-slate-400">6.2 MB</td>
              <td class="py-4 px-5 whitespace-nowrap text-right">
                <div class="inline-flex items-center gap-2">
                  <a href="{{ route('faculty.preview.tier-4-access-request') }}?file=University_Annual_Financial_Ledger_FY2025.pdf.enc&tracking=CVSU-FIN-2025-1102&hash=8a1b2c...e8f9&size=6.2%20MB" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-rose-950/70 border border-rose-600 text-rose-200 hover:bg-rose-900 text-xs font-semibold transition-all shadow-sm">
                    <span class="material-symbols-outlined text-[15px] text-rose-300">key</span>
                    <span>Request Elevation</span>
                  </a>
                  <button class="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-medium border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[15px] text-slate-400">visibility</span>
                    <span>Manifest</span>
                  </button>
                </div>
              </td>
            </tr>
            <!-- Row 6: Tier 1 Public Release -->
            <tr class="hover:bg-[#172b47]/40 transition-colors">
              <td class="py-4 px-5">
                <div class="flex items-start gap-3">
                  <div class="p-2 rounded-lg bg-[#0f223a] text-slate-400 flex-shrink-0 mt-0.5 border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[20px]">public</span>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <a class="font-semibold text-white hover:text-[#9fd2b4] transition-colors leading-snug" href="#">CvSU Student Code of Conduct &amp; Academic Integrity Handbook v4.2</a>
                    <span class="font-mono text-xs text-slate-400 mt-0.5">CVSU-OSA-2026-0012 • Published Jan 15 by Office of Student Affairs</span>
                  </div>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="text-xs text-slate-300 bg-[#0f223a] border border-[#1f3a5f] px-2.5 py-1 rounded-md font-medium">Student Affairs &amp; Policies</span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#0f223a] text-slate-300 text-xs font-semibold border border-[#1f3a5f]">
                  <span class="material-symbols-outlined text-[15px]">public</span>
                  <span>Tier 1: Public Release</span>
                </span>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-[#eabf55]">
                <div class="flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[15px] text-[#9fd2b4]">gpp_good</span>
                  <span title="SHA256: 3c914e9f0182ba83104e76a0029bb182">3c914e...b182</span>
                </div>
              </td>
              <td class="py-4 px-4 whitespace-nowrap font-mono text-xs text-slate-400">1.8 MB</td>
              <td class="py-4 px-5 whitespace-nowrap text-right">
                <div class="inline-flex items-center gap-2">
                  <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-[#0f223a] text-white hover:bg-[#172b47] text-xs font-semibold transition-colors shadow-xs border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[15px] text-[#eabf55]">download</span>
                    <span>View &amp; Export</span>
                  </button>
                  <button class="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-medium border border-[#1f3a5f]">
                    <span class="material-symbols-outlined text-[15px] text-[#eabf55]">fingerprint</span>
                    <span>Inspect Hash</span>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Table Footer / Pagination -->
      <div class="px-6 py-4 bg-[#0f223a] border-t border-[#1f3a5f] flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="text-xs text-slate-400 font-medium">Showing <strong class="text-white font-semibold">1–6</strong> of <strong class="text-white font-semibold">1,248</strong> authoritative university records</div>
        <div class="flex items-center gap-1">
          <button class="px-3 py-1.5 rounded-md border border-[#1f3a5f] bg-[#0f223a] text-slate-500 text-xs font-semibold cursor-not-allowed" disabled="">Prev</button>
          <button class="px-3 py-1.5 rounded-md bg-[#166534] text-white text-xs font-semibold shadow-xs border border-emerald-500/40">1</button>
          <button class="px-3 py-1.5 rounded-md border border-[#1f3a5f] bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-semibold transition-colors">2</button>
          <button class="px-3 py-1.5 rounded-md border border-[#1f3a5f] bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-semibold transition-colors">3</button>
          <span class="px-2 text-slate-500 text-xs font-bold">...</span>
          <button class="px-3 py-1.5 rounded-md border border-[#1f3a5f] bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-semibold transition-colors">178</button>
          <button class="px-3 py-1.5 rounded-md border border-[#1f3a5f] bg-[#0f223a] text-slate-300 hover:bg-[#172b47] hover:text-white text-xs font-semibold transition-colors">Next</button>
        </div>
      </div>
    </div>

    <!-- Compliance Notice / Footer Banner -->
    <div class="bg-[#152238] rounded-xl border border-[#1f3a5f] p-5 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <div class="h-10 w-10 rounded-full bg-[#166534]/30 border border-[#166534]/60 flex items-center justify-center text-[#9fd2b4] flex-shrink-0">
          <span class="material-symbols-outlined text-[22px]">verified_user</span>
        </div>
        <div class="flex flex-col">
          <span class="text-xs uppercase font-bold text-[#9fd2b4] tracking-wide">Cavite State University Data Privacy Act of 2012 (RA 10173) Directive</span>
          <span class="text-xs text-slate-300 mt-0.5">All repository accesses, verification signs, and exports are appended to the immutable university clearance ledger. Downloads contain invisible cryptographic steganographic watermarks bound to NetID: <strong class="text-white font-mono">CEIT-FAC-88219</strong>.</span>
        </div>
      </div>
      <div class="flex items-center gap-2 flex-shrink-0">
        <a class="text-xs font-semibold text-[#eabf55] hover:underline flex items-center gap-1.5 bg-[#0f223a] border border-[#1f3a5f] px-3 py-1.5 rounded-lg" href="#">
          <span>Security Policy Document</span>
          <span class="material-symbols-outlined text-[15px]">open_in_new</span>
        </a>
      </div>
    </div>
  </main>
</div>

  <div id="tier-document-modal" class="fixed inset-0 z-[70] hidden items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="tier-document-modal-title">
    <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm" onclick="closeTierDocumentModal()"></div>
    <div class="relative w-full max-w-md overflow-hidden rounded-xl border border-emerald-500/30 bg-[#101827] text-slate-100 shadow-2xl">
      <div class="h-1.5 bg-gradient-to-r from-sky-500 via-emerald-500 to-[#eabf55]"></div>
      <div class="p-6">
        <h2 id="tier-document-modal-title" class="text-lg font-bold text-white">Document Preview</h2>
        <p class="mt-2 text-sm leading-6 text-slate-300">This demo opens a preview confirmation. Real document download and watermarked export can be connected later.</p>
        <button type="button" onclick="closeTierDocumentModal()" class="mt-5 min-h-11 w-full rounded-lg bg-emerald-700 px-4 text-sm font-bold text-white hover:bg-emerald-600">Close Preview</button>
      </div>
    </div>
  </div>
  <script>
    function openTierDocumentModal() {
      const modal = document.getElementById('tier-document-modal');
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    }
    function closeTierDocumentModal() {
      const modal = document.getElementById('tier-document-modal');
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }
    document.querySelectorAll('button').forEach((button) => {
      if (/View & Export|View &amp; Export|Verify & Sign|Inspect Hash/i.test(button.textContent)) {
        button.addEventListener('click', openTierDocumentModal);
      }
    });
  </script>

</body></html>