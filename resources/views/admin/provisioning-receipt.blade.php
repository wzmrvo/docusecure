<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DocuSecure MIS Dark-Ops // Admin User Provisioning Confirmation &amp; Cryptographic Ledger Receipt</title>
<!-- Load Tailwind CSS v3 with forms and container-queries plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts: Inter & JetBrains Mono -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace'],
          },
          colors: {
            ops: {
              void: '#030712',
              bg: '#070d18',
              surface: '#0b1322',
              panel: '#0f172a',
              border: '#1e293b',
              borderlight: '#334155',
              emerald: '#10b981',
              emeraldlight: '#34d399',
              amber: '#f59e0b',
              muted: '#64748b',
              dim: '#94a3b8',
            }
          }
        }
      }
    }
</script>
<style>
    body {
      background-color: #070d18;
      color: #e2e8f0;
      min-height: 100vh;
    }
    .custom-scroll::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    .custom-scroll::-webkit-scrollbar-track {
      background: #070d18;
    }
    .custom-scroll::-webkit-scrollbar-thumb {
      background: #1e293b;
      border-radius: 3px;
    }
    .custom-scroll::-webkit-scrollbar-thumb:hover {
      background: #334155;
    }
</style>
</head>
<body class="bg-[#070d18] text-slate-200 min-h-screen flex flex-col font-sans antialiased selection:bg-emerald-500 selection:text-slate-950">
<!-- TOP SHELL HEADER -->
<header class="h-14 bg-[#0b1322] border-b border-[#1e293b] px-4 lg:px-6 flex items-center justify-between z-30 shrink-0">
<div class="flex items-center space-x-4">
<div class="flex items-center space-x-2.5 pr-4 border-r border-[#1e293b]">
<img alt="CvSU Seal" class="w-8 h-8 object-contain shrink-0 drop-shadow" src="{{ asset('images/cvsu-logo.png') }}"/>
<div class="flex items-center space-x-1.5">
<span class="font-extrabold text-white text-base tracking-tight">DocuSecure</span>
<span class="bg-emerald-500 text-slate-950 font-black text-[9px] px-1.5 py-0.5 rounded leading-none tracking-wider">MIS ADMIN</span>
</div>
</div>
<!-- Top Breadcrumbs -->
<div class="hidden xl:flex items-center space-x-1.5 text-[11px] font-mono text-slate-400">
<span class="text-emerald-400 font-semibold tracking-wide">DOCUSECURE MIS DARK-OPS</span>
<span class="text-slate-600">//</span>
<span class="text-slate-400">V4.19-PROD</span>
<span class="text-slate-600">/</span>
<span class="text-slate-400">ADMIN CONSOLE</span>
<span class="text-slate-600">/</span>
<span class="text-slate-400">USER MANAGEMENT</span>
<span class="text-slate-600">/</span>
<span class="text-emerald-300 font-semibold">PROVISIONING RECEIPT</span>
</div>
</div>
<!-- Center/Right Global Controls -->
<div class="flex items-center space-x-4">
<!-- Search Input with cmd+k badge -->
<div class="hidden md:flex items-center relative w-64 lg:w-80">
<span class="material-symbols-outlined text-[16px] text-slate-400 absolute left-3 pointer-events-none">search</span>
<input class="w-full bg-[#070d18] border border-[#1e293b] rounded-md pl-9 pr-12 py-1.5 text-xs text-slate-200 placeholder-slate-500 focus:outline-none focus:border-emerald-500 font-sans transition-colors" placeholder="Search identities, keys, ledger..." type="text"/>
<kbd class="absolute right-2 text-[10px] font-mono bg-[#1e293b] text-slate-400 px-1.5 py-0.5 rounded border border-slate-700">⌘K</kbd>
</div>
<!-- Operational Badge -->
<div class="hidden sm:inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-emerald-950/60 border border-emerald-500/30 text-[10.5px] font-mono text-emerald-400">
<span class="w-2 h-2 rounded-full bg-emerald-400 shadow-[0_0_8px_#34d399] animate-pulse"></span>
<span class="font-semibold tracking-wide">SYSTEM OPERATIONAL</span>
</div>
<!-- Notification Bell -->
<button class="relative p-1.5 rounded-lg text-slate-400 hover:text-white hover:bg-[#131d2e] transition-colors" title="Notifications" type="button">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1 right-1 w-2 h-2 rounded-full bg-emerald-400 ring-2 ring-[#0b1322]"></span>
</button>
<!-- Profile Avatar -->
<div class="flex items-center space-x-3 pl-3 border-l border-[#1e293b]">
<div class="text-right hidden sm:block">
<div class="text-xs font-bold text-white leading-tight">Engr. R. Bautista</div>
<div class="text-[9.5px] font-mono text-emerald-400 tracking-wider">ROOT ACTIVE</div>
</div>
<div class="w-8 h-8 rounded-lg bg-emerald-950/70 border border-emerald-500/40 flex items-center justify-center font-bold text-xs text-emerald-300 ring-1 ring-emerald-500/20">
        RB
      </div>
</div>
</div>
</header>
<!-- BODY SHELL WRAPPER -->
<div class="flex flex-1 overflow-hidden">
<!-- LEFT PERSISTENT SIDEBAR -->
<aside class="w-64 bg-[#0b1322] border-r border-[#1e293b] flex flex-col justify-between shrink-0 hidden md:flex">
<div class="p-3 space-y-6 overflow-y-auto custom-scroll">
<div>
<div class="px-3 pb-2 text-[10px] font-mono font-bold uppercase tracking-wider text-slate-400">Institutional Ops</div>
<nav class="space-y-1">
<a class="flex items-center space-x-3 px-3 py-2 rounded-lg text-xs font-medium text-slate-400 hover:text-slate-100 hover:bg-[#131d2e] transition-colors" href="{{ route('admin.preview.dashboard') }}">
<span class="material-symbols-outlined text-[18px]">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center space-x-3 px-3 py-2 rounded-lg text-xs font-semibold text-emerald-300 bg-emerald-950/40 border border-emerald-500/30" href="{{ route('admin.preview.user-management') }}">
<span class="material-symbols-outlined text-[18px] text-emerald-400">manage_accounts</span>
<span>User Management</span>
</a>
<a class="flex items-center justify-between px-3 py-2 rounded-lg text-xs font-medium text-slate-400 hover:text-slate-100 hover:bg-[#131d2e] transition-colors" href="{{ route('admin.preview.access-requests') }}">
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-[18px]">mark_email_unread</span>
<span>Access Requests</span>
</div>
<span class="px-1.5 py-0.5 rounded text-[10px] font-mono font-bold bg-[#eabf55] text-slate-950 leading-none">12</span>
</a>
<a class="flex items-center space-x-3 px-3 py-2 rounded-lg text-xs font-medium text-slate-400 hover:text-slate-100 hover:bg-[#131d2e] transition-colors" href="{{ route('admin.preview.access-levels') }}">
<span class="material-symbols-outlined text-[18px]">admin_panel_settings</span>
<span>Document Access Levels</span>
</a>
<a class="flex items-center space-x-3 px-3 py-2 rounded-lg text-xs font-medium text-slate-400 hover:text-slate-100 hover:bg-[#131d2e] transition-colors" href="{{ route('admin.preview.deposit-file') }}">
<span class="material-symbols-outlined text-[18px]">note_add</span>
<span>Deposit &amp; File Creation</span>
</a>
</nav>
</div>
<div>
<div class="px-3 pb-2 text-[10px] font-mono font-bold uppercase tracking-wider text-slate-400">Cryptographic Control</div>
<nav class="space-y-1">
<a class="flex items-center space-x-3 px-3 py-2 rounded-lg text-xs font-medium text-slate-400 hover:text-slate-100 hover:bg-[#131d2e] transition-colors" href="{{ route('admin.preview.audit-logs') }}">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
<span>Audit Logs</span>
</a>
<a class="flex items-center space-x-3 px-3 py-2 rounded-lg text-xs font-medium text-slate-400 hover:text-slate-100 hover:bg-[#131d2e] transition-colors" href="{{ route('admin.preview.system-settings') }}">
<span class="material-symbols-outlined text-[18px]">settings</span>
<span>System Settings</span>
</a>
</nav>
</div>
</div>
<!-- Sidebar Operator Profile Card -->
<div class="p-3 border-t border-[#1e293b] bg-[#070d18]/80">
<div class="p-2.5 rounded-lg bg-[#0f172a] border border-[#1e293b]">
<div class="flex items-center justify-between mb-1.5">
<span class="text-[9.5px] font-mono text-slate-400">SESSION: NODE-04</span>
<span class="text-[9px] font-mono px-1.5 py-0.2 rounded bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 font-bold">ROOT ACTIVE</span>
</div>
<div class="text-[11px] font-semibold text-white truncate">Engr. R. Bautista</div>
<div class="text-[9.5px] font-mono text-slate-400 truncate">CvSU Indang MIS Admin</div>
</div>
</div>
</aside>
<!-- MAIN STAGE -->
<main class="flex-1 overflow-y-auto custom-scroll p-4 sm:p-6 lg:p-8 bg-[#070d18]">
<div class="max-w-5xl mx-auto space-y-6">
<!-- 3-STEP PIPELINE PROGRESS BANNER -->
<div class="bg-[#0b1322] border border-[#1e293b] rounded-xl p-4 shadow-xl" data-purpose="pipeline-stepper">
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 pb-3 border-b border-[#1e293b]/70">
<div class="flex items-center space-x-2">
<span class="inline-block w-2 h-2 rounded-full bg-emerald-400 shadow-[0_0_8px_#34d399]"></span>
<span class="text-xs font-mono font-bold tracking-wider text-slate-300 uppercase">Cryptographic Provisioning Pipeline</span>
</div>
<div class="inline-flex items-center space-x-2 px-2.5 py-1 rounded bg-emerald-950/80 border border-emerald-500/40 text-[10.5px] font-mono font-bold text-emerald-300">
<span class="material-symbols-outlined text-[14px] text-emerald-400">verified</span>
<span>PROVISIONING COMMITTED &amp; IMMUTABLE</span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-3 pt-3">
<!-- Step 1 -->
<div class="flex items-center space-x-3 p-2.5 rounded-lg bg-[#070d18] border border-emerald-500/30">
<div class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[14px] font-bold">check</span>
</div>
<div class="min-w-0">
<div class="text-[9.5px] font-mono text-emerald-400 uppercase font-semibold">Stage 01 • Complete</div>
<div class="text-xs font-bold text-white truncate">User Identity Intake</div>
</div>
</div>
<!-- Step 2 -->
<div class="flex items-center space-x-3 p-2.5 rounded-lg bg-[#070d18] border border-emerald-500/30">
<div class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[14px] font-bold">check</span>
</div>
<div class="min-w-0">
<div class="text-[9.5px] font-mono text-emerald-400 uppercase font-semibold">Stage 02 • Complete</div>
<div class="text-xs font-bold text-white truncate">Role &amp; Clearance Tier</div>
</div>
</div>
<!-- Step 3 -->
<div class="flex items-center space-x-3 p-2.5 rounded-lg bg-[#070d18] border border-emerald-500/30">
<div class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[14px] font-bold">check</span>
</div>
<div class="min-w-0">
<div class="text-[9.5px] font-mono text-emerald-400 uppercase font-semibold">Stage 03 • Complete</div>
<div class="text-xs font-bold text-white truncate">Key Derivation &amp; Sign-off</div>
</div>
</div>
</div>
</div>
<!-- 1. SUCCESS HERO BANNER CARD -->
<section class="p-6 sm:p-7 rounded-2xl bg-[#0b1322] border border-emerald-500/40 relative overflow-hidden shadow-2xl" data-purpose="success-hero-banner">
<div class="absolute -top-12 -right-12 w-56 h-56 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-5 relative z-10">
<div class="relative shrink-0">
<div class="w-14 h-14 rounded-2xl bg-emerald-500/10 border border-emerald-500/50 flex items-center justify-center shadow-[0_0_24px_rgba(16,185,129,0.25)]">
<span class="material-symbols-outlined text-[32px] text-emerald-400 font-bold">verified_user</span>
</div>
<span class="absolute -bottom-1 -right-1 flex h-4 w-4">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-4 w-4 bg-emerald-500 border-2 border-[#0b1322]"></span>
</span>
</div>
<div class="flex-1">
<div class="flex flex-wrap items-center gap-2 mb-1.5">
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold uppercase tracking-wider bg-emerald-950/60 text-emerald-300 border border-emerald-500/40">
                ACCOUNT ACTIVE &amp; CREDENTIALS DISPATCHED
              </span>
<span class="text-xs font-mono text-slate-400">DISPATCH_STAMP: 2026-03-29 10:24:00 PST</span>
</div>
<h1 class="text-xl sm:text-2xl font-black text-white tracking-tight">Administrative Provisioning Complete &amp; Active</h1>
<p class="text-xs sm:text-sm text-slate-300 mt-1 leading-relaxed">
              Cryptographic credentials and the clearance permissions have been formally minted and bound for the personnel identity.
            </p>
</div>
</div>
</section>
<!-- 2. CENTRAL MERKLE LEDGER CARD -->
<section class="rounded-2xl bg-[#0b1322] border border-[#1e293b] overflow-hidden shadow-2xl relative" data-purpose="cryptographic-ledger-card">
<!-- Receipt Header Bar -->
<div class="px-5 py-4 border-b border-[#1e293b] bg-[#0f172a] flex flex-wrap items-center justify-between gap-3">
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-emerald-400 text-[20px]">token</span>
<div>
<span class="text-[10px] font-mono font-bold uppercase tracking-wider text-slate-400 block">CvSU Indang MIS Cryptographic Ledger</span>
<span class="text-xs font-bold text-white">Immutable Subject Provisioning Receipt</span>
</div>
</div>
<div class="flex items-center space-x-2 bg-[#070d18] px-3 py-1.5 rounded-lg border border-[#1e293b]">
<span class="text-[10px] font-mono text-slate-400">MERKLE ENCLAVE:</span>
<span class="text-xs font-mono font-bold text-emerald-400">Block #8820-STG4</span>
<span class="text-[10px] font-mono text-slate-400 ml-1">(10:24 AM PST)</span>
</div>
</div>
<!-- Receipt Core Details Grid -->
<div class="p-5 sm:p-6 space-y-5 text-xs">
<!-- Subject Profile Banner -->
<div class="p-4 rounded-xl bg-[#070d18] border border-[#1e293b] flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="flex items-center space-x-3.5">
<div class="w-12 h-12 rounded-xl bg-emerald-950/80 border border-emerald-500/30 text-emerald-400 flex items-center justify-center font-bold text-sm tracking-wider shadow-inner">
                JD
              </div>
<div>
<div class="text-[10px] font-mono uppercase text-slate-400">Subject Identity</div>
<div class="text-base font-bold text-white flex items-center space-x-2">
<span>Prof. Juan Dela Cruz</span>
<span class="px-2 py-0.5 rounded text-[10px] font-mono font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">2026-CEIT-9921</span>
</div>
<div class="text-[11px] text-slate-300 font-mono mt-0.5">CEIT • Dept. of Information Tech | CvSU Indang Main Campus</div>
</div>
</div>
<div class="text-left md:text-right">
<span class="text-[10px] font-mono text-slate-400 block uppercase">Target Binding Enclave</span>
<span class="text-xs font-mono font-semibold text-emerald-300">Node 04 (Indang Main Gateway)</span>
<span class="text-[10px] font-mono text-slate-400 block mt-0.5">Campus Intranet Gateway Certified</span>
</div>
</div>
<!-- Assigned Clearance & Algorithm Details -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<!-- Assigned Clearance Tier Card -->
<div class="p-4 rounded-xl bg-[#070d18] border border-[#1e293b]">
<div class="flex items-center justify-between mb-2">
<span class="text-[10px] font-mono uppercase text-slate-400 font-semibold">Assigned Clearance Tier</span>
<span class="material-symbols-outlined text-[#eabf55] text-[16px]">lock</span>
</div>
<div class="text-sm font-bold text-[#eabf55] tracking-tight">Tier 3 — Faculty Auth</div>
<p class="text-[11px] text-slate-300 mt-1 leading-relaxed">
                Confidential grade sheets, syllabus repository, Ed25519 digital signature attestation.
              </p>
<div class="mt-3 pt-2 border-t border-[#1e293b] flex items-center justify-between text-[10px] font-mono">
<span class="text-slate-400">Authentication: FIDO2 Hardware Key Enforced</span>
<span class="text-emerald-400 font-semibold">Auto-Renew Eligible</span>
</div>
</div>
<!-- Cryptographic Algorithm Card -->
<div class="p-4 rounded-xl bg-[#070d18] border border-[#1e293b]">
<div class="flex items-center justify-between mb-2">
<span class="text-[10px] font-mono uppercase text-slate-400 font-semibold">Digital Signature &amp; Enclave Proof</span>
<span class="material-symbols-outlined text-emerald-400 text-[16px]">fingerprint</span>
</div>
<div class="text-sm font-mono font-bold text-white">Ed25519 + PBKDF2-HMAC-SHA512</div>
<p class="text-[11px] text-slate-300 mt-1 leading-relaxed">
                Hardware HSM Attestation with 100k Key Stretching Iterations &amp; Asymmetric Pair.
              </p>
<div class="mt-3 pt-2 border-t border-[#1e293b] flex items-center justify-between text-[10px] font-mono">
<span class="text-slate-400">Ledger Enclave Proof</span>
<span class="text-emerald-400 font-semibold">SHA-512 Enclave Validated</span>
</div>
</div>
<!-- 3. CLEARANCE VALIDITY & ACCESS EXPIRATION DOSSIER (Full Width across 2 cols) -->
<div class="md:col-span-2 p-4 sm:p-5 rounded-xl bg-[#070d18] border border-emerald-500/40 relative overflow-hidden shadow-lg">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-3 mb-3 border-b border-[#1e293b]">
<div class="flex items-center space-x-2.5">
<div class="w-7 h-7 rounded-lg bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[16px]">event_available</span>
</div>
<div>
<div class="text-[10px] font-mono uppercase text-emerald-400 font-bold tracking-wider">Clearance Policy Framework</div>
<div class="text-sm font-bold text-white tracking-tight">CLEARANCE VALIDITY &amp; ACCESS EXPIRATION</div>
</div>
</div>
<div class="inline-flex items-center space-x-1.5 px-2.5 py-1 rounded bg-emerald-950/60 border border-emerald-500/30 text-[11px] font-mono font-semibold text-emerald-300 self-start sm:self-auto">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span>ACTIVE &amp; TIME-LOCKED</span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 mb-3">
<div class="p-3 rounded-lg bg-[#0b1322] border border-[#1e293b]">
<span class="text-[10px] font-mono uppercase text-slate-400 block">Term Duration</span>
<span class="text-xs font-bold text-white mt-0.5 block">3 Academic Years</span>
<span class="text-[10px] font-mono text-emerald-400 block mt-0.5">Tenure Faculty Term</span>
</div>
<div class="p-3 rounded-lg bg-[#0b1322] border border-[#1e293b]">
<span class="text-[10px] font-mono uppercase text-slate-400 block">Validity Window</span>
<span class="text-xs font-mono font-semibold text-white mt-0.5 block">Aug 15, 2026 → Aug 15, 2029</span>
<span class="text-[10px] font-mono text-slate-400 block mt-0.5">Auto-Activated &amp; Time-Locked</span>
</div>
<div class="p-3 rounded-lg bg-[#0b1322] border border-[#1e293b]">
<span class="text-[10px] font-mono uppercase text-slate-400 block">Annual Re-Attestation</span>
<span class="text-xs font-mono font-semibold text-[#eabf55] mt-0.5 block">July 15, 2027</span>
<span class="text-[10px] font-mono text-slate-400 block mt-0.5">Supervisor &amp; MIS Compliance Verification</span>
</div>
</div>
<div class="p-3 rounded-lg bg-[#0b1322]/80 border border-[#1e293b] flex items-start space-x-3">
<span class="material-symbols-outlined text-[#eabf55] text-[18px] shrink-0 mt-0.5">crisis_alert</span>
<div class="text-[11px] leading-relaxed">
<span class="font-mono font-bold text-slate-300 uppercase tracking-wider text-[10px] block">Access Sunset Behavior:</span>
<span class="text-slate-300">Upon expiration, automatic downgrading to <span class="text-[#eabf55] font-semibold font-mono">Tier 1 Read-Only</span> pending MIS re-clearance review and departmental dean approval.</span>
</div>
</div>
</div>
</div>
<!-- 4. Cryptographic Transaction Hash -->
<div class="space-y-3">
<div class="p-3.5 rounded-xl bg-[#070d18] border border-[#1e293b]">
<div class="flex items-center justify-between mb-1.5">
<span class="text-[10px] font-mono uppercase text-slate-400">Cryptographic Transaction Hash</span>
<div class="flex items-center space-x-2">
<span class="text-[9.5px] font-mono text-emerald-400 flex items-center space-x-1">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span>LEDGER VERIFIED</span>
</span>
<button class="text-xs font-mono text-emerald-400 hover:text-emerald-300 flex items-center space-x-1 px-1.5 py-0.5 rounded bg-emerald-950/40 border border-emerald-500/30" onclick="navigator.clipboard.writeText('0x9924ba93c7811ef420b9921e04a112df8820c71'); alert('Transaction hash copied to clipboard');" title="Copy Transaction Hash" type="button">
<span>Copy</span>
<span class="material-symbols-outlined text-[13px]">content_copy</span>
</button>
</div>
</div>
<div class="font-mono text-xs sm:text-[13px] text-emerald-300 bg-[#0b1322] px-3 py-2 rounded-lg border border-[#1e293b] flex items-center justify-between overflow-x-auto">
<span class="font-semibold">0x9924ba93c7811ef420b9921e04a112df8820c71</span>
<span class="text-[9.5px] font-mono text-slate-400 uppercase tracking-wider shrink-0 ml-2">IMMUTABLE ROOT</span>
</div>
</div>
<!-- Operator Signature & Dispatch Status -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-3">
<div class="p-3.5 rounded-xl bg-[#070d18] border border-[#1e293b] flex items-start space-x-3">
<span class="material-symbols-outlined text-[#eabf55] text-[20px] shrink-0 mt-0.5">draw</span>
<div>
<span class="text-[10px] font-mono text-slate-400 uppercase block">Operator Digital Signature</span>
<div class="text-xs font-bold text-white">Engr. R. Bautista <span class="text-emerald-400 font-mono text-[11px]">(ID: MIS-ADMIN-09)</span></div>
<div class="text-[10px] font-mono text-slate-400 mt-0.5">Hardware HSM Signed (YubiKey 5 FIPS)</div>
</div>
</div>
<div class="p-3.5 rounded-xl bg-[#070d18] border border-[#1e293b] flex items-start space-x-3">
<span class="material-symbols-outlined text-emerald-400 text-[20px] shrink-0 mt-0.5">mark_email_read</span>
<div>
<span class="text-[10px] font-mono text-slate-400 uppercase block">Dispatch Status</span>
<div class="text-xs font-semibold text-white">Sealed invite and initial passkey dispatched</div>
<div class="text-[11px] font-mono text-emerald-400 truncate mt-0.5">j.delacruz@cvsu.edu.ph (Verified Institutional Email)</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- 5. BOTTOM ACTION BUTTONS -->
<section class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4 pt-2" data-purpose="bottom-action-buttons">
<div class="flex flex-wrap items-center gap-3">
<a class="px-4 py-2.5 rounded-lg bg-[#0b1322] hover:bg-[#131d2e] border border-[#1e293b] hover:border-slate-600 text-xs font-mono font-medium text-slate-200 transition-colors flex items-center space-x-1.5 focus:outline-none focus:ring-2 focus:ring-slate-500" href="{{ route('admin.preview.audit-logs') }}">
<span>View in Admin Audit Ledger</span>
<span class="material-symbols-outlined text-[15px] text-emerald-400">north_east</span>
</a>
<button class="px-4 py-2.5 rounded-lg bg-[#0b1322] hover:bg-[#131d2e] border border-[#1e293b] hover:border-slate-600 text-xs font-mono font-medium text-slate-200 transition-colors flex items-center space-x-1.5 focus:outline-none focus:ring-2 focus:ring-slate-500" onclick="const t=document.getElementById('receipt-toast'); if(t){t.classList.remove('hidden'); setTimeout(()=&gt;t.classList.add('hidden'), 4500);}" type="button">
<span class="material-symbols-outlined text-[16px] text-[#eabf55]">download</span>
<span>Download PDF Audit Receipt</span>
</button>
</div>
<div>
<a class="w-full sm:w-auto px-6 py-3 rounded-lg bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-xs sm:text-sm flex items-center justify-center space-x-2 shadow-lg shadow-emerald-950/50 hover:shadow-emerald-900/60 transition-all focus:ring-2 focus:ring-emerald-400 focus:outline-none" href="{{ route('admin.preview.user-management') }}">
<span>Return to User Management Console</span>
<span class="font-black text-base leading-none">→</span>
</a>
</div>
</section>
<!-- Interactive Toast Notification -->
<div class="hidden p-3.5 rounded-xl bg-emerald-950/80 border border-emerald-500/40 flex items-center justify-between text-xs text-emerald-300 font-mono shadow-xl" id="receipt-toast">
<div class="flex items-center space-x-2.5">
<span class="material-symbols-outlined text-emerald-400 text-[18px]">verified</span>
<span>Generating Signed PDF Audit Receipt (REG-2026-CEIT-9921-RECEIPT.pdf)... Dispatch ready.</span>
</div>
<button class="text-slate-400 hover:text-white ml-3" onclick="document.getElementById('receipt-toast').classList.add('hidden')" type="button">
<span class="material-symbols-outlined text-[16px]">close</span>
</button>
</div>
<!-- Institutional Telemetry Footer -->
<footer class="pt-6 border-t border-[#1e293b] text-center text-[10px] font-mono text-slate-400 space-y-1">
<p>CAVITE STATE UNIVERSITY • BANCALAN, INDANG, CAVITE | ISO 9001:2015 CERTIFIED | RA 10173 COMPLIANT</p>
<p class="text-slate-500">DOCUSECURE v4.19-PROD • OPERATIONAL_GATEWAY: INDANG-MAIN-GW-04 • TLS 1.3 SECURED • HARDWARE HSM ATTESTED</p>
</footer>
</div>
</main>
</div>
</body></html>