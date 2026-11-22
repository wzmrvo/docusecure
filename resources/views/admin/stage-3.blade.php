<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DocuSecure MIS DARK-OPS // Stage 03 - Final Clearance &amp; Vault Key Generation</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            cvsu: {
              green: '#14452f',
              lightGreen: '#1b382b',
              hoverGreen: '#0f3624',
              accentGreen: '#10b981',
              emerald: '#166534',
            },
            dark: {
              bg: '#070d18',
              surface: '#0b1322',
              card: '#0f172a',
              cardBorder: '#1e293b',
              subtle: '#334155',
            }
          },
          fontFamily: {
            sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace'],
          }
        }
      }
    }
  </script>
<style>
    body {
      font-family: 'Inter', system-ui, -apple-system, sans-serif;
      background-color: #070d18;
      color: #e2e8f0;
      min-height: 100vh;
      -webkit-font-smoothing: antialiased;
    }
    .custom-scrollbar::-webkit-scrollbar {
      width: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
      background: #070d18;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
      background: #1e293b;
      border-radius: 3px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
      background: #334155;
    }
  </style>
</head>
<body class="bg-[#070d18] text-slate-200 flex flex-col min-h-screen">
<!-- TOP BAR: Institutional Dark Console Header -->
<header class="h-14 bg-[#0a1120] border-b border-slate-800/80 px-4 sm:px-6 flex items-center justify-between flex-shrink-0 z-30 sticky top-0">
<!-- Left: Institutional Logo + Brand + Search Bar -->
<div class="flex items-center gap-4 sm:gap-6 flex-1 max-w-2xl">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-emerald-950/80 border border-emerald-500/40 text-emerald-400 flex items-center justify-center font-bold text-sm shadow-inner">
<span class="material-symbols-outlined text-lg text-emerald-400">shield_lock</span>
</div>
<div class="flex items-center gap-2">
<span class="font-bold text-white tracking-tight text-sm sm:text-base">
          DocuSecure
        </span>
<span class="px-1.5 py-0.5 text-[9px] font-bold rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 uppercase tracking-wider font-mono">
          MIS DARK-OPS // V4.19-PROD
        </span>
</div>
</div>
<!-- Search Bar -->
<div class="hidden md:flex items-center flex-1 max-w-md relative">
<span class="material-symbols-outlined absolute left-3 text-slate-400 text-sm pointer-events-none">search</span>
<input class="w-full bg-[#070d18] border border-slate-800 text-slate-200 text-xs rounded-lg pl-9 pr-3 py-1.5 placeholder-slate-500 focus:outline-none focus:border-emerald-500/50 transition-colors font-sans" placeholder="Search categories, classification policies, documents..." type="text"/>
</div>
</div>
<!-- Right: Telemetry + Notifications + Operator Profile -->
<div class="flex items-center gap-3 sm:gap-4">
<!-- System Operational Badge -->
<div class="hidden sm:inline-flex items-center gap-2 px-2.5 py-1 rounded-full bg-emerald-950/40 border border-emerald-500/30 text-emerald-400 text-[11px] font-mono font-medium">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
      SYSTEM OPERATIONAL
    </div>
<!-- Notifications -->
<button class="relative p-1.5 text-slate-400 hover:text-white hover:bg-slate-800/60 rounded-lg transition-colors" title="System Notifications" type="button">
<span class="material-symbols-outlined text-xl">notifications</span>
<span class="absolute top-1 right-1 w-2 h-2 rounded-full bg-emerald-400"></span>
</button>
<!-- Superadmin Profile -->
<div class="flex items-center gap-2.5 pl-3 border-l border-slate-800">
<div class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700 text-emerald-400 flex items-center justify-center font-bold text-xs font-mono shadow-sm">
        RB
      </div>
<div class="hidden lg:block text-left">
<div class="text-xs font-semibold text-white leading-tight flex items-center gap-1.5">
          Engr. R. Bautista
          <span class="px-1 py-0.2 rounded text-[9px] font-mono bg-emerald-950/80 text-emerald-400 font-bold border border-emerald-500/30">ROOT ACTIVE</span>
</div>
<div class="text-[10px] font-mono text-slate-400">Superadmin (MIS-DIR-771)</div>
</div>
</div>
</div>
</header>
<!-- MAIN WRAPPER -->
<div class="flex flex-1">
<!-- LEFT SIDEBAR: Persistent MIS Admin Navigation -->
<aside class="w-64 bg-[#0a1120] border-r border-slate-800/80 flex flex-col justify-between flex-shrink-0 hidden md:flex">
<!-- Nav Links -->
<div class="p-3 space-y-1 font-mono text-xs">
<div class="px-3 py-2 text-[10px] font-bold uppercase tracking-wider text-slate-500">Enclave Core Navigation</div>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors" href="#">
<span class="material-symbols-outlined text-lg">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg bg-emerald-950/40 text-emerald-400 border border-emerald-500/30 font-medium" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-lg text-emerald-400">manage_accounts</span>
<span>User Management</span>
</div>
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-lg">pending_actions</span>
<span>Access Requests</span>
</div>
<span class="px-1.5 py-0.2 rounded text-[10px] font-mono font-bold bg-slate-800 text-slate-300 border border-slate-700">12</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors" href="#">
<span class="material-symbols-outlined text-lg">lock_open</span>
<span>Document Access Levels</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors" href="#">
<span class="material-symbols-outlined text-lg">note_add</span>
<span>Deposit &amp; File Creation</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors" href="#">
<span class="material-symbols-outlined text-lg">verified_user</span>
<span>Audit Logs</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors" href="#">
<span class="material-symbols-outlined text-lg">settings</span>
<span>System Settings</span>
</a>
<div class="pt-4 px-3 py-2 text-[10px] font-bold uppercase tracking-wider text-slate-500">System Node Context</div>
<div class="mx-2 p-2.5 rounded-lg bg-[#070d18] border border-slate-800 text-[11px] font-mono space-y-1.5">
<div class="flex justify-between text-slate-400"><span>Cluster:</span><span class="text-slate-200 font-semibold">IND-CEIT-SEC</span></div>
<div class="flex justify-between text-slate-400"><span>Enclave Node:</span><span class="text-emerald-400 font-semibold">Node 04 (Tier-4)</span></div>
<div class="flex justify-between text-slate-400"><span>TLS Standard:</span><span class="text-slate-300 font-mono">v1.3 TLS_AES_256</span></div>
</div>
</div>
<!-- Operator Profile Badge at Bottom -->
<div class="p-3 border-t border-slate-800/80 bg-[#070d18]/60">
<div class="p-2.5 rounded-lg bg-[#0f172a] border border-slate-800 flex items-center justify-between">
<div class="flex items-center gap-2.5">
<div class="relative">
<div class="w-8 h-8 rounded-lg bg-emerald-950/80 border border-emerald-500/40 text-emerald-400 flex items-center justify-center font-mono font-bold text-xs">
              <img alt="Cavite State University Logo" class="w-full h-full object-contain p-1" src="{{ asset('images/cvsu-logo.png') }}"/></div>
<span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 rounded-full bg-emerald-500 ring-2 ring-[#0f172a]"></span>
</div>
<div>
<div class="text-[11px] font-semibold text-white leading-tight">Engr. R. Bautista</div>
<div class="text-[10px] font-mono text-emerald-400">MIS Root Officer (MIS-DIR-771)</div>
</div>
</div>
<button class="text-slate-400 hover:text-white p-1 rounded hover:bg-slate-800" title="Officer Key Management" type="button">
<span class="material-symbols-outlined text-base">settings</span>
</button>
</div>
</div>
</aside>
<!-- MAIN WORKSPACE CONTENT AREA -->
<main class="flex-1 overflow-y-auto custom-scrollbar bg-[#070d18] p-4 sm:p-6 lg:p-8 flex flex-col justify-between">
<div class="max-w-5xl w-full mx-auto space-y-6">
<!-- Top Header & Breadcrumb -->
<div class="space-y-3">
<div class="flex items-center gap-2 text-xs font-mono">
<a class="text-slate-400 hover:text-emerald-400 transition-colors flex items-center gap-1.5" href="#">
<span class="material-symbols-outlined text-sm">arrow_back</span>
            BACK TO STAGE 02
          </a>
<span class="text-slate-600">/</span>
<span class="text-slate-400">USER MANAGEMENT</span>
<span class="text-slate-600">/</span>
<span class="text-emerald-400 font-semibold tracking-wider">STAGE 03</span>
</div>
<div class="flex flex-wrap items-start justify-between gap-4 border-b border-slate-800 pb-5">
<div>
<div class="flex items-center gap-2 mb-2">
<span class="px-2.5 py-0.5 rounded text-[10px] font-mono font-semibold bg-emerald-950/60 text-emerald-400 border border-emerald-500/30 flex items-center gap-1.5">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                ADMIN ROOT DIRECTIVE • STAGE 3 OF 3
              </span>
<span class="px-2.5 py-0.5 rounded text-[10px] font-mono font-semibold bg-cyan-950/50 text-cyan-400 border border-cyan-500/30">
                TIER-IV CLEARANCE ENCLAVE
              </span>
</div>
<h1 class="text-xl sm:text-2xl font-bold text-white tracking-tight">
              Admin Authority: Final Cryptographic Sign-off &amp; Vault Key Generation
            </h1>
<p class="text-xs sm:text-sm text-slate-400 mt-1 max-w-3xl leading-relaxed">
              Execute root system provisioning and valid cryptographic access keys for authenticated applicant.
            </p>
</div>
<div class="flex items-center gap-2">
<span class="px-3 py-1.5 text-xs font-mono font-bold rounded-lg bg-[#0f172a] text-slate-200 border border-slate-800 shadow-sm flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
              Admin Root Enclave
            </span>
<span class="px-2.5 py-1.5 text-xs font-mono font-semibold rounded-lg bg-emerald-950/40 text-emerald-400 border border-emerald-500/30">
              MIS-DIR-771
            </span>
</div>
</div>
</div>
<!-- 3-STEP WORKFLOW STEPPER -->
<div class="bg-[#0f172a] border border-slate-800 rounded-xl p-4 sm:p-5 shadow-lg">
<div class="flex items-center justify-between mb-3 text-xs font-mono">
<span class="uppercase tracking-wider text-slate-400 font-semibold flex items-center gap-2">
<span class="material-symbols-outlined text-emerald-400 text-sm">hub</span>
            Provisioning Pipeline Progress
          </span>
<span class="text-[11px] text-emerald-400 bg-emerald-950/60 border border-emerald-500/30 px-2.5 py-0.5 rounded font-semibold flex items-center gap-1.5">
<span class="material-symbols-outlined text-xs">verified</span>
            2 of 3 Stages Locked &amp; Validated
          </span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-3 text-xs">
<!-- Step 1: Completed -->
<div class="p-3 rounded-lg bg-[#0b1322] border border-emerald-500/30 flex items-start gap-3 transition-colors">
<div class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 flex items-center justify-center font-bold text-xs flex-shrink-0 mt-0.5">
              ✓
            </div>
<div class="min-w-0">
<div class="font-semibold text-slate-200 text-xs flex items-center gap-1">1. User Identity Verified</div>
<div class="text-[10px] text-emerald-400 font-mono mt-0.5">Admin Verified &amp; Signed ✓</div>
</div>
</div>
<!-- Step 2: Completed -->
<div class="p-3 rounded-lg bg-[#0b1322] border border-emerald-500/30 flex items-start gap-3 transition-colors">
<div class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 flex items-center justify-center font-bold text-xs flex-shrink-0 mt-0.5">
              ✓
            </div>
<div class="min-w-0">
<div class="font-semibold text-slate-200 text-xs flex items-center gap-1">2. Role &amp; Clearance Set</div>
<div class="text-[10px] text-emerald-400 font-mono mt-0.5">Admin Authorized ✓</div>
</div>
</div>
<!-- Step 3: Active with Glowing Border -->
<div class="p-3 rounded-lg bg-[#0b1322] border border-emerald-400/60 shadow-[0_0_15px_rgba(16,185,129,0.15)] flex items-start gap-3 ring-1 ring-emerald-400/50">
<div class="w-6 h-6 rounded-full bg-emerald-950/80 text-emerald-400 border border-emerald-500/60 flex items-center justify-center font-bold text-xs flex-shrink-0 mt-0.5">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
</div>
<div class="min-w-0">
<div class="font-semibold text-white text-xs flex items-center gap-1.5">
                3. Cryptographic Sign-Off
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
</div>
<div class="text-[10px] text-emerald-400 font-mono font-medium mt-0.5">Awaiting Cryptographic Sign-off</div>
</div>
</div>
</div>
<div class="w-full bg-[#070d18] h-1.5 rounded-full mt-3.5 overflow-hidden border border-slate-800">
<div class="bg-gradient-to-r from-emerald-500 to-emerald-400 h-full rounded-full transition-all duration-500" style="width: 90%"></div>
</div>
</div>
<!-- TARGET PERSONNEL CARD -->
<div class="bg-[#0f172a] border border-slate-800 rounded-xl p-4 sm:p-5 shadow-lg">
<div class="flex flex-wrap items-center justify-between gap-3 pb-3.5 border-b border-slate-800">
<div class="flex items-center gap-3.5">
<div class="w-11 h-11 rounded-full bg-emerald-950/80 border border-emerald-500/40 text-emerald-400 flex items-center justify-center font-mono font-bold text-sm shadow-inner">
              JD
            </div>
<div>
<span class="text-[10px] font-mono uppercase tracking-wider text-slate-400 block font-semibold">
                Target Subject Identity Dossier
              </span>
<div class="flex items-center gap-2 mt-0.5">
<h3 class="text-sm font-bold text-white">Prof. Juan Dela Cruz</h3>
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-semibold bg-emerald-950/80 text-emerald-400 border border-emerald-500/30">
                  Verified Faculty
                </span>
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-medium bg-slate-800 text-slate-300 border border-slate-700">
                  NetID: CEIT-FAC-88219
                </span>
</div>
</div>
</div>
<div class="text-right">
<span class="text-[10px] font-mono uppercase tracking-wider text-slate-400 block font-semibold">
              Docket Identifier
            </span>
<div class="flex items-center gap-1.5 justify-end mt-0.5">
<span class="text-xs font-mono font-bold text-emerald-400 bg-[#070d18] px-2.5 py-1 rounded border border-slate-800" id="docketNumber">
                REG-2026-CEIT-9921
              </span>
<button class="p-1 text-slate-400 hover:text-white hover:bg-slate-800 rounded transition-colors" onclick="navigator.clipboard.writeText('REG-2026-CEIT-9921')" title="Copy Docket ID" type="button">
<span class="material-symbols-outlined text-sm">content_copy</span>
</button>
</div>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-3.5 text-xs">
<div>
<span class="text-slate-400 text-[11px] font-mono block">Institutional Email:</span>
<span class="font-medium text-slate-200 break-all flex items-center gap-1.5 mt-1 font-mono text-[12px]">
              j.delacruz@cvsu.edu.ph
              <span class="material-symbols-outlined text-emerald-400 text-sm">check_circle</span>
</span>
</div>
<div>
<span class="text-slate-400 text-[11px] font-mono block">Campus &amp; Department:</span>
<span class="font-medium text-slate-200 block mt-1">Indang Main Campus • CEIT Department</span>
</div>
<div>
<span class="text-slate-400 text-[11px] font-mono block">Target Clearance Level:</span>
<span class="font-semibold text-emerald-400 block mt-1 flex items-center gap-1.5">
<span class="material-symbols-outlined text-emerald-400 text-sm">verified</span>
              Tier 3 Department Confidential
            </span>
</div>
</div>
</div>
<!-- CLEARANCE VALIDITY TERM CONFIGURATION & STAFF SETTINGS -->
<div class="bg-[#0f172a] border border-slate-800 rounded-xl p-4 sm:p-5 shadow-lg space-y-4">
<div class="flex flex-wrap items-center justify-between pb-3 border-b border-slate-800 gap-2">
<h4 class="text-xs font-bold font-mono text-slate-200 uppercase tracking-wider flex items-center gap-2">
<span class="material-symbols-outlined text-emerald-400 text-base">timelapse</span>
            CLEARANCE TERM DURATION &amp; REVOCATION POLICY
          </h4>
<span class="text-[10px] font-mono text-emerald-400 bg-emerald-950/60 px-2.5 py-0.5 rounded border border-emerald-500/30 font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
            POLICY COMPLIANT • CVSU ISO SEC-04
          </span>
</div>
<!-- Term Duration Presets -->
<div>
<label class="block text-[11px] font-mono text-slate-400 uppercase tracking-wider font-semibold mb-2">
            Term Duration Select / Presets
          </label>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2.5">
<!-- Preset 1: Selected -->
<label class="flex items-start gap-2.5 p-3 rounded-lg border border-emerald-500/50 bg-[#0b1322] cursor-pointer hover:border-emerald-400 transition-colors">
<input checked="" class="mt-0.5 text-emerald-500 focus:ring-emerald-500/30 bg-[#070d18] border-slate-700" name="term_duration" type="radio"/>
<div class="text-xs">
<div class="font-semibold text-white">1 Academic Year</div>
<div class="text-[10px] text-emerald-400 font-mono mt-0.5">Standard Staff Term (AY 2026-2027)</div>
</div>
</label>
<!-- Preset 2 -->
<label class="flex items-start gap-2.5 p-3 rounded-lg border border-slate-800 bg-[#070d18] cursor-pointer hover:border-slate-700 transition-colors">
<input class="mt-0.5 text-emerald-500 focus:ring-emerald-500/30 bg-[#070d18] border-slate-700" name="term_duration" type="radio"/>
<div class="text-xs">
<div class="font-semibold text-slate-200">2 Academic Years</div>
<div class="text-[10px] text-slate-400 font-mono mt-0.5">Staff Extended Assignment</div>
</div>
</label>
<!-- Preset 3 -->
<label class="flex items-start gap-2.5 p-3 rounded-lg border border-slate-800 bg-[#070d18] cursor-pointer hover:border-slate-700 transition-colors">
<input class="mt-0.5 text-emerald-500 focus:ring-emerald-500/30 bg-[#070d18] border-slate-700" name="term_duration" type="radio"/>
<div class="text-xs">
<div class="font-semibold text-slate-200">3 Academic Years</div>
<div class="text-[10px] text-slate-400 font-mono mt-0.5">Tenure Track Faculty</div>
</div>
</label>
<!-- Preset 4 -->
<label class="flex items-start gap-2.5 p-3 rounded-lg border border-slate-800 bg-[#070d18] cursor-pointer hover:border-slate-700 transition-colors">
<input class="mt-0.5 text-emerald-500 focus:ring-emerald-500/30 bg-[#070d18] border-slate-700" name="term_duration" type="radio"/>
<div class="text-xs">
<div class="font-semibold text-slate-200">Custom Expiration Date</div>
<div class="text-[10px] text-slate-400 font-mono mt-0.5">Admin Designated Window</div>
</div>
</label>
</div>
</div>
<!-- Validity Dates & Counter -->
<div class="p-3.5 rounded-lg bg-[#070d18] border border-slate-800 flex flex-wrap items-center justify-between gap-4">
<div class="flex flex-wrap items-center gap-3 sm:gap-6 text-xs font-mono">
<div>
<span class="text-slate-500 text-[10px] block uppercase">Valid From</span>
<span class="text-white font-semibold flex items-center gap-1.5 mt-0.5">
<span class="material-symbols-outlined text-emerald-400 text-sm">calendar_today</span>
                Aug 15, 2026
              </span>
</div>
<span class="text-slate-600 font-bold hidden sm:inline">→</span>
<div>
<span class="text-slate-500 text-[10px] block uppercase">Valid Until</span>
<span class="text-white font-semibold flex items-center gap-1.5 mt-0.5">
<span class="material-symbols-outlined text-emerald-400 text-sm">event_available</span>
                Jul 31, 2027
              </span>
</div>
</div>
<div class="flex items-center gap-2">
<span class="px-3 py-1 rounded bg-emerald-950/60 border border-emerald-500/30 text-emerald-400 font-mono text-xs font-bold flex items-center gap-1.5">
<span class="material-symbols-outlined text-sm">hourglass_top</span>
              350 Days Remaining Active Term
            </span>
</div>
</div>
<!-- Expiration Behavior Policy -->
<div class="space-y-2 pt-1">
<label class="block text-[11px] font-mono text-slate-400 uppercase tracking-wider font-semibold">
            Expiration Behavior Policy
          </label>
<div class="space-y-2 text-xs">
<!-- Radio 1: Selected -->
<label class="flex items-start gap-2.5 p-2.5 rounded-lg border border-emerald-500/40 bg-[#0b1322] cursor-pointer hover:border-emerald-400 transition-colors">
<input checked="" class="mt-0.5 text-emerald-500 focus:ring-emerald-500/30 bg-[#070d18] border-slate-700" name="expiration_action" type="radio"/>
<div>
<div class="font-semibold text-white flex items-center gap-1.5">
                  Auto-downgrade to Tier 1 Read-Only upon expiration
                  <span class="px-1.5 py-0.2 rounded text-[9px] font-mono bg-emerald-950 text-emerald-400 border border-emerald-500/30">RECOMMENDED</span>
</div>
<div class="text-[11px] text-slate-400 mt-0.5">Staff loses deposit &amp; signing rights, retains read-only record access.</div>
</div>
</label>
<!-- Radio 2 -->
<label class="flex items-start gap-2.5 p-2.5 rounded-lg border border-slate-800 bg-[#070d18] cursor-pointer hover:border-slate-700 transition-colors">
<input class="mt-0.5 text-emerald-500 focus:ring-emerald-500/30 bg-[#070d18] border-slate-700" name="expiration_action" type="radio"/>
<div>
<div class="font-semibold text-slate-200">Complete Account Suspension &amp; Lockout</div>
<div class="text-[11px] text-slate-400 mt-0.5">Staff account fully frozen pending administrative re-clearance.</div>
</div>
</label>
</div>
</div>
<!-- Mandatory Policy Checkbox -->
<div class="pt-2 border-t border-slate-800">
<label class="flex items-center gap-2.5 text-xs cursor-pointer">
<input checked="" class="rounded text-emerald-500 focus:ring-emerald-500/30 bg-[#070d18] border-slate-700" type="checkbox"/>
<span class="text-slate-300 font-medium">Require Annual Dean / Supervisor Re-Clearance Attestation prior to automatic key rollover</span>
</label>
</div>
</div>
<!-- CRYPTOGRAPHIC KEY GENERATION PARAMETER CARD -->
<div class="bg-[#0f172a] border border-slate-800 rounded-xl p-4 sm:p-5 shadow-lg">
<div class="flex flex-wrap items-center justify-between pb-3 mb-3 border-b border-slate-800 gap-2">
<h4 class="text-xs font-bold font-mono text-slate-200 uppercase tracking-wider flex items-center gap-2">
<span class="material-symbols-outlined text-emerald-400 text-base">vpn_key</span>
            Cryptographic Key Derivation Parameters
          </h4>
<span class="text-[10px] font-mono text-emerald-400 bg-emerald-950/60 px-2.5 py-0.5 rounded border border-emerald-500/30 font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
            HSM READY • FIPS 140-2 LEVEL 3 VALIDATED
          </span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 text-xs">
<div class="bg-[#070d18] p-3 rounded-lg border border-slate-800/80">
<span class="text-slate-400 text-[10px] font-mono uppercase tracking-wider block">Asymmetric Algorithm</span>
<span class="font-mono font-bold text-white text-xs block mt-1">Ed25519 + PBKDF2</span>
<span class="text-[10px] text-slate-400 font-mono block mt-0.5">HMAC-SHA512 (100k iter)</span>
</div>
<div class="bg-[#070d18] p-3 rounded-lg border border-slate-800/80">
<span class="text-slate-400 text-[10px] font-mono uppercase tracking-wider block">Target Enclave Gateway</span>
<span class="font-mono font-bold text-emerald-400 text-xs block mt-1">Node 04 Indang Gateway</span>
<span class="text-[10px] text-slate-400 font-mono block mt-0.5">Cluster: IND-CEIT-SEC</span>
</div>
<div class="bg-[#070d18] p-3 rounded-lg border border-slate-800/80">
<span class="text-slate-400 text-[10px] font-mono uppercase tracking-wider block">Key Attestation Method</span>
<span class="font-mono font-bold text-cyan-400 text-xs block mt-1">FIPS 140-2 Level 3</span>
<span class="text-[10px] text-slate-400 font-mono block mt-0.5">Hardware HSM Protected</span>
</div>
<div class="bg-[#070d18] p-3 rounded-lg border border-slate-800/80">
<span class="text-slate-400 text-[10px] font-mono uppercase tracking-wider block">Sign-Off Operator</span>
<span class="font-mono font-bold text-emerald-400 text-xs block mt-1">Engr. R. Bautista</span>
<span class="text-[10px] text-slate-400 font-mono block mt-0.5">Officer ID: MIS-DIR-771</span>
</div>
</div>
</div>
<!-- OFFICER AUTHORIZATION CERTIFICATE NOTICE -->
<div class="p-4 sm:p-5 rounded-xl bg-gradient-to-r from-emerald-950/30 via-[#0f172a] to-[#0f172a] border border-emerald-500/30 flex items-start gap-3.5 shadow-lg">
<div class="p-2.5 rounded-lg bg-emerald-950/60 text-emerald-400 border border-emerald-500/40 flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-emerald-400 text-xl">verified_user</span>
</div>
<div class="text-xs space-y-1.5 flex-1">
<div class="flex items-center justify-between gap-2 flex-wrap">
<h4 class="font-bold text-white text-sm flex items-center gap-2">
              Officer Authorization Certificate &amp; Sign-Off Directive
            </h4>
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-emerald-950/60 text-emerald-400 border border-emerald-500/40 uppercase tracking-wider">
              IMMUTABLE AUDIT RECORD
            </span>
</div>
<p class="text-slate-300 leading-relaxed font-sans text-xs">
<strong class="text-emerald-400">Admin Root Direct Execution:</strong> Sign-off operator <strong class="text-white font-mono">Engr. R. Bautista (MIS-DIR-771)</strong> with FIPS 140-2 Level 3 HSM hardware key attestation. Final clearance authorizes root vault generation and distributes encrypted credentials directly to <span class="text-emerald-400 font-mono">j.delacruz@cvsu.edu.ph</span>.
          </p>
</div>
</div>
<!-- BOTTOM ACTIONS -->
<div class="pt-2 pb-6 space-y-3">
<div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
<!-- Back to Stage 02 Button -->
<a class="h-12 bg-[#0f172a] hover:bg-slate-800 border border-slate-700 text-slate-300 hover:text-white font-semibold text-xs sm:text-sm rounded-xl transition-all shadow-sm flex items-center justify-center gap-2 px-4" href="#">
<span class="material-symbols-outlined text-slate-400 text-lg">arrow_back</span>
<span>Back to Stage 02</span>
</a>
<!-- Primary Execution Button (Prominent Emerald CTA) -->
<a class="h-12 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs sm:text-sm rounded-xl transition-all shadow-lg shadow-emerald-950/60 flex items-center justify-center gap-2 px-4 group" href="#">
<span class="material-symbols-outlined text-white text-lg">verified</span>
<span>Commit Sign-Off &amp; Generate Ledger Receipt</span>
<span class="material-symbols-outlined text-base group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
</a>
</div>
<div class="flex items-center justify-center pt-1">
<a class="inline-flex items-center gap-1.5 text-xs font-mono text-slate-400 hover:text-emerald-400 transition-colors" href="#">
<span class="material-symbols-outlined text-sm">dashboard</span>
            Return to MIS Officer Enclave Dashboard
          </a>
</div>
</div>
</div>
<!-- FOOTER: Telemetry & ISO Compliance -->
<footer class="max-w-5xl w-full mx-auto pt-4 border-t border-slate-800/80 flex flex-wrap items-center justify-between text-[11px] font-mono text-slate-400 gap-3">
<div class="flex items-center gap-2">
<span>CAVITE STATE UNIVERSITY • BANCALAN, INDANG, CAVITE</span>
<span class="text-slate-700">|</span>
<span class="text-emerald-400 font-semibold">ISO 9001:2015 CERTIFIED</span>
<span class="text-slate-700">|</span>
<span>RA 10173 COMPLIANT</span>
</div>
<div class="flex items-center gap-4">
<span class="text-emerald-400">DOCUSECURE v4.19-PROD</span>
<span class="text-slate-700">•</span>
<span>NODE_SESSION: CVSU-SEC-AUTH-9921D</span>
</div>
</footer>
</main>
</div>
</body></html>