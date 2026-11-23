@php
    $portalRoutePrefix = request()->is('viewer/*') ? 'viewer.preview.' : 'student.preview.';
    $isViewer = request()->is('viewer/*');
@endphp
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="web_dashboard" name="shell-type"/>
<title>CvSU DocuSecure - Student Portal - Account Settings</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
              "navy-deep": "#172b47",
              "navy-hover": "#1e3f69",
              green: "#14452f",
              "green-light": "#e8f6ee",
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
<!-- Left Sidebar (Deep Solid Navy Blue matching SCREEN_16) -->
@include('components.sidebar', ['currentRole' => request()->is('viewer/*') ? 'viewer' : 'student'])
<!-- Main Content Layout (Shifted right by 64 Tailwind units) -->
<div class="pl-64 flex flex-col min-h-screen">
<!-- Top Header Bar -->
<header class="h-16 bg-white border-b border-slate-200 sticky top-0 z-40 flex items-center justify-between px-8 shadow-sm">
<div class="flex items-center gap-4">
<div>
<div class="flex items-center gap-2">
<h2 class="text-base font-bold text-[#14452f] tracking-tight font-serif">Cavite State University</h2>
<span class="text-slate-300">|</span>
<span class="text-xs text-[#173153] font-semibold">DocuSecure Enclave</span>
</div>
<p class="text-[11px] text-slate-500 font-mono">Truth • Excellence • Service — Indang, Cavite 4122</p>
</div>
<span class="hidden lg:inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#e8f6ee] text-[#14452f] border border-[#14452f]/20 shadow-xs">
<span class="w-2 h-2 rounded-full bg-[#16a34a] animate-pulse"></span>1st Sem AY 2026–2027 Active
        </span>
</div>
<div class="flex items-center gap-4">
<!-- Search bar -->
<div class="relative w-64 md:w-72">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
<input class="w-full bg-[#f8fafc] border border-slate-200 rounded-lg pl-9 pr-4 py-1.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#14452f]/30 focus:border-[#14452f]" placeholder="Search settings, credentials, keys..." type="text"/>
</div>
<!-- Notification button with indicator -->
<button aria-label="Notifications" class="p-2 text-slate-500 hover:text-[#14452f] hover:bg-emerald-50/50 rounded-lg transition-colors relative border border-slate-200" type="button">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-[#f59e0b] ring-2 ring-white"></span>
</button>
<div class="h-6 w-px bg-slate-200"></div>
<!-- User profile pill -->
<div class="flex items-center gap-3 pl-1 cursor-pointer group">
<div class="w-9 h-9 rounded-full bg-[#14452f] border-2 border-[#d4a017] text-[#fef3c7] flex items-center justify-center font-bold text-xs shadow-sm font-mono">{{ $isViewer ? 'GO' : 'JM' }}</div>
<div class="hidden sm:flex flex-col text-left">
<span class="text-xs font-bold text-slate-900 leading-tight group-hover:text-[#14452f]">{{ $isViewer ? 'Guest Observer' : 'Juanito P. Mendoza' }}</span>
<span class="text-[11px] text-emerald-800 font-mono font-medium">{{ $isViewer ? 'Public Read-Only Access' : 'Tier 1 Student · CEIT' }}</span>
</div>
<span class="material-symbols-outlined text-slate-400 text-[18px] group-hover:text-[#14452f]">expand_more</span>
</div>
</div>
</header>
<!-- Main Content Body -->
<main class="flex-1 p-8 flex flex-col gap-6">
<!-- Breadcrumbs & Compliance Tags -->
<div class="flex flex-wrap items-center justify-between gap-2 -mb-2">
<div class="flex items-center gap-2 text-xs text-slate-500 font-mono">
<span class="text-[#173153] font-semibold">DocuSecure</span>
<span>/</span>
<span>Student Portal</span>
<span>/</span>
<span class="text-slate-800 font-semibold">Account Settings</span>
<span>•</span>
<span class="text-slate-400">{{ $isViewer ? 'PUBLIC-OBSERVER // READ-ONLY' : 'STU-2024-10892 // 0xFA71..89E0' }}</span>
</div>
<div class="flex items-center gap-2">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-md text-[11px] font-medium bg-slate-100 text-slate-600 border border-slate-200">
<span class="material-symbols-outlined text-[14px]">shield</span> RA 10173 ENFORCED
          </span>
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-md text-[11px] font-medium bg-[#eaf1f9] text-[#376ead]">
            Read-Only Sandbox
          </span>
</div>
</div>
<!-- Page Title Banner Section -->
@if ($isViewer)
<div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-7 text-slate-900 shadow-sm">
  <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
    <div class="max-w-2xl">
      <span class="inline-flex items-center gap-1.5 rounded-full border border-slate-200 bg-slate-100 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-slate-600">
        <span class="material-symbols-outlined text-[14px]">visibility</span> Viewer Account
      </span>
      <h1 class="mt-3 text-2xl font-bold tracking-tight text-slate-900">Institutional account not active</h1>
      <p class="mt-2 text-sm leading-relaxed text-slate-600">You are viewing DocuSecure as a public observer. Request institutional access to receive a verified NetID and clearance tier.</p>
    </div>
    <a href="{{ route('institutional-account-request') }}" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg bg-[#173153] px-5 text-sm font-bold text-white hover:bg-[#1f3f69]">
      <span class="material-symbols-outlined text-[18px]">person_add</span>
      Request Institutional Account
    </a>
  </div>
</div>
@else
<div class="relative overflow-hidden bg-gradient-to-r from-[#14452f] via-[#1a533a] to-[#173153] rounded-2xl border-2 border-[#d4a017]/40 p-7 text-white shadow-lg">
<div class="absolute -right-8 -bottom-10 opacity-10 pointer-events-none select-none">
<span class="material-symbols-outlined text-[220px] text-white">security</span>
</div>
<div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
<div class="flex flex-col gap-2.5">
<div class="flex items-center gap-2 flex-wrap">
<span class="px-3 py-0.5 rounded-full text-[11px] font-bold uppercase tracking-wider bg-[#d4a017] text-[#0f3624] shadow-xs">
                CvSU CEIT Enclave Active
              </span>
<span class="text-xs text-emerald-100 flex items-center gap-1 font-medium bg-[#1b4d3e]/80 px-2.5 py-0.5 rounded-full border border-emerald-400/30">
<span class="material-symbols-outlined text-[15px] text-[#9fd2b4]">verified_user</span> Tier 1 Read-Only Clearance
              </span>
<span class="text-[11px] font-mono text-emerald-200/90 flex items-center gap-1 bg-[#0f3624]/60 px-2 py-0.5 rounded border border-emerald-500/20">
<span class="material-symbols-outlined text-[14px] text-[#d4a017]">lock</span> Argon2id Hash Enforced
              </span>
</div>
<h1 class="text-2xl sm:text-3xl font-bold text-white tracking-tight font-serif">Account Settings &amp; Security Credentials</h1>
<p class="text-sm text-emerald-100/90 max-w-2xl leading-relaxed">
              Manage cryptographic keys, biometric passkeys, master password, and verified institutional identity for Juanito P. Mendoza (ID: <span class="font-mono font-bold text-[#fef3c7] bg-[#0c261b] px-2 py-0.5 rounded border border-[#d4a017]/40">2024-10892</span>).
            </p>
</div>
<div class="flex items-center gap-3 shrink-0 flex-wrap sm:flex-nowrap">
<div class="bg-white/10 backdrop-blur-sm border border-[#d4a017]/40 rounded-xl px-4 py-3 flex items-center gap-3 text-left">
<div class="w-10 h-10 rounded-lg bg-[#d4a017] text-[#14452f] flex items-center justify-center font-bold">
<span class="material-symbols-outlined text-[24px]">vpn_key</span>
</div>
<div>
<span class="text-[10px] font-mono uppercase tracking-wider text-emerald-200 block">Active Clearance Key</span>
<span class="text-xs font-mono font-bold text-[#fef3c7]">ED25519-0xFA71</span>
</div>
</div>
@endif
</div>
</div>
</div>
<!-- Main Content Grid (65% Left / 35% Right) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
<!-- Left Column (65% / 8 Cols) -->
<div class="lg:col-span-8 flex flex-col gap-6">
<!-- Section 1: Institutional Identity & Clearance Dossier Card -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden border-t-4 border-t-[#14452f]">
<div class="p-5 border-b border-slate-200 bg-slate-50/60 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="p-2 rounded-lg bg-[#e8f6ee] text-[#14452f]">
<span class="material-symbols-outlined text-[22px]">badge</span>
</div>
<div>
<h2 class="text-base font-bold text-slate-900 font-serif">Institutional Identity &amp; Clearance Dossier</h2>
<p class="text-xs text-slate-500">Official cryptographic identity records validated under the CvSU University Registrar registry</p>
</div>
</div>
<span class="text-xs font-bold text-[#14452f] bg-[#e8f6ee] px-2.5 py-1 rounded-md border border-[#14452f]/20 flex items-center gap-1 font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-[#16a34a]"></span>VERIFIED ENROLLEE
              </span>
</div>
<div class="p-6 flex flex-col gap-5">
<!-- Student Profile Header Row -->
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 p-4 rounded-xl bg-[#f8fafc] border border-slate-200/80">
<div class="relative">
<div class="w-14 h-14 rounded-xl bg-[#14452f] border-2 border-[#d4a017] text-[#fef3c7] flex items-center justify-center font-bold text-lg font-mono shadow-sm">
                    {{ $isViewer ? 'GO' : 'JM' }}
                  </div>
<span class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full bg-white border border-slate-200 flex items-center justify-center shadow-xs">
<span class="material-symbols-outlined text-[#16a34a] text-[14px]">check_circle</span>
</span>
</div>
<div class="flex flex-col flex-1">
<div class="flex items-center gap-2 flex-wrap">
<h3 class="text-base font-bold text-slate-900 font-serif">{{ $isViewer ? 'Guest Observer' : 'Juanito P. Mendoza' }}</h3>
<span class="px-2 py-0.5 rounded text-[11px] font-semibold bg-[#e8f6ee] text-[#14452f] border border-[#14452f]/20">
                      Regular Student (Section A)
                    </span>
<span class="text-[11px] font-mono text-slate-500 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">
                      CHED UniFAST Eligible
                    </span>
</div>
<p class="text-xs text-slate-600 mt-1">
                    Bachelor of Science in Information Technology (BSIT) · College of Engineering and Information Technology (CEIT)
                  </p>
</div>
</div>
<!-- Metadata Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
<div class="p-3.5 rounded-lg border border-slate-200 bg-white">
<span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Student Identification Number</span>
<span class="text-sm font-bold text-[#173153] font-mono mt-0.5 block">{{ $isViewer ? 'NOT ISSUED' : '2024-10892' }}</span>
<span class="text-[11px] text-slate-500 mt-1 block">{{ $isViewer ? 'Guest public session' : 'Campus: Indang Main Campus' }}</span>
</div>
<div class="p-3.5 rounded-lg border border-slate-200 bg-white">
<span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Institutional Email</span>
<span class="text-xs font-bold text-slate-800 font-mono mt-0.5 block truncate">j.mendoza@student.cvsu.edu.ph</span>
<span class="text-[11px] text-[#16a34a] font-medium flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">verified</span> Institutional SSO Synced
                  </span>
</div>
<div class="p-3.5 rounded-lg border border-slate-200 bg-white">
<span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Clearance Horizon</span>
<span class="text-sm font-bold text-[#14452f] font-mono mt-0.5 block">294 Days Remaining</span>
<span class="text-[11px] text-slate-500 mt-1 block">Valid until Jul 31, 2027 PST</span>
</div>
</div>
<!-- Academic Standing banner -->
<div class="p-3.5 rounded-lg bg-[#e8f6ee]/70 border border-[#14452f]/20 flex items-center justify-between">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-[#14452f] text-[20px]">school</span>
<div>
<span class="text-xs font-bold text-[#14452f]">Academic Standing: Good Standing</span>
<p class="text-[11px] text-slate-600">Zero scholastic deficiencies, active matriculation enrollment for AY 2026–2027.</p>
</div>
</div>
<span class="px-2.5 py-1 bg-white text-[#14452f] border border-[#14452f]/30 rounded text-xs font-bold shadow-xs">
                  Level 1 Cleared
                </span>
</div>
</div>
</div>
<!-- Section 2: Cryptographic Password & Authentication Key Reset Card -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden border-t-4 border-t-[#d4a017]">
<div class="p-5 border-b border-slate-200 bg-slate-50/60 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="p-2 rounded-lg bg-[#fef3c7] text-[#b45309]">
<span class="material-symbols-outlined text-[22px]">lock_reset</span>
</div>
<div>
<h2 class="text-base font-bold text-slate-900 font-serif">Cryptographic Password &amp; Master Key Reset</h2>
<p class="text-xs text-slate-500">Your Master Password decrypts your cryptographic institutional session token and signed PDF certificates</p>
</div>
</div>
<span class="text-xs font-mono font-bold text-[#b45309] bg-[#fef3c7] px-2.5 py-1 rounded-md border border-amber-300/50">
                ARGON2ID + PBKDF2
              </span>
</div>
<form class="p-6 flex flex-col gap-5" onsubmit="event.preventDefault();">
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<!-- Current Password -->
<div class="flex flex-col gap-1.5 md:col-span-2">
<div class="flex items-center justify-between">
<label class="text-xs font-bold text-slate-700 uppercase tracking-wider" for="current-pwd">Current Master Security Password</label>
<a class="text-xs text-[#14452f] hover:underline font-semibold" href="#">Forgot Password or Lost Key?</a>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">key</span>
<input class="w-full bg-[#f8fafc] border border-slate-200 rounded-lg pl-9 pr-10 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#14452f]/30 focus:border-[#14452f]" id="current-pwd" placeholder="Enter your current clearance password" type="password" value="••••••••••••••••"/>
<button class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 text-[18px]" type="button">visibility</button>
</div>
</div>
<!-- New Password -->
<div class="flex flex-col gap-1.5">
<label class="text-xs font-bold text-slate-700 uppercase tracking-wider" for="new-pwd">New Security Password</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">lock</span>
<input class="w-full bg-[#f8fafc] border border-slate-200 rounded-lg pl-9 pr-10 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#14452f]/30 focus:border-[#14452f]" id="new-pwd" placeholder="Create high-entropy master key" type="password"/>
<button class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 text-[18px]" type="button">auto_fix_high</button>
</div>
</div>
<!-- Confirm Password -->
<div class="flex flex-col gap-1.5">
<label class="text-xs font-bold text-slate-700 uppercase tracking-wider" for="confirm-pwd">Confirm New Password</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">verified</span>
<input class="w-full bg-[#f8fafc] border border-slate-200 rounded-lg pl-9 pr-10 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#14452f]/30 focus:border-[#14452f]" id="confirm-pwd" placeholder="Re-type new security password" type="password"/>
<button class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 text-[18px]" type="button">visibility</button>
</div>
</div>
</div>
<!-- Strength meter -->
<div class="p-3.5 rounded-lg bg-slate-50 border border-slate-200 flex flex-col gap-2">
<div class="flex items-center justify-between text-xs">
<span class="text-slate-600 font-medium">Entropy Strength Score:</span>
<span class="font-mono font-bold text-[#16a34a] flex items-center gap-1">
<span class="material-symbols-outlined text-[15px]">verified</span> High Cryptographic Strength (88 bits)
                  </span>
</div>
<div class="grid grid-cols-4 gap-1.5 w-full">
<div class="h-1.5 rounded-full bg-[#16a34a]"></div>
<div class="h-1.5 rounded-full bg-[#16a34a]"></div>
<div class="h-1.5 rounded-full bg-[#16a34a]"></div>
<div class="h-1.5 rounded-full bg-[#16a34a]"></div>
</div>
</div>
<!-- CvSU Security Constraints checklist -->
<div class="p-4 rounded-xl bg-[#f8fafc] border border-slate-200">
<span class="text-xs font-bold text-slate-700 uppercase tracking-wider block mb-2.5">
                  CvSU Password Constraints &amp; Enclave Policy
                </span>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs">
<div class="flex items-center gap-1.5 text-emerald-700 font-medium">
<span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span>
<span>Minimum 12 characters required</span>
</div>
<div class="flex items-center gap-1.5 text-emerald-700 font-medium">
<span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span>
<span>Uppercase and lowercase alphabets</span>
</div>
<div class="flex items-center gap-1.5 text-emerald-700 font-medium">
<span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span>
<span>At least 1 numerical digit &amp; symbol (!@#$%^&amp;*)</span>
</div>
<div class="flex items-center gap-1.5 text-emerald-700 font-medium">
<span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span>
<span>No dictionary words or common CvSU names</span>
</div>
</div>
</div>
<!-- Submit button in CvSU dark green (#14452f) with gold glow -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-2">
<span class="text-[11px] text-slate-500 flex items-center gap-1">
<span class="material-symbols-outlined text-[15px] text-[#f59e0b]">info</span> Updating credentials invalidates existing session tokens on other devices.
                </span>
<button class="w-full sm:w-auto px-6 py-2.5 bg-[#14452f] hover:bg-[#0f3624] text-white text-xs font-bold rounded-lg shadow-md hover:shadow-[0_0_15px_rgba(212,160,23,0.35)] transition-all flex items-center justify-center gap-2 border border-[#d4a017]/40" type="submit">
<span class="material-symbols-outlined text-[18px] text-[#d4a017]">lock_reset</span>
<span>Update Master Security Credentials</span>
</button>
</div>
</form>
</div>
<!-- Section 3: Two-Factor Authentication (2FA) & WebAuthn Security Card -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden border-t-4 border-t-[#173153]">
<div class="p-5 border-b border-slate-200 bg-slate-50/60 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="p-2 rounded-lg bg-[#eaf1f9] text-[#173153]">
<span class="material-symbols-outlined text-[22px]">phonelink_lock</span>
</div>
<div>
<h2 class="text-base font-bold text-slate-900 font-serif">Two-Factor Authentication (2FA) &amp; WebAuthn Security</h2>
<p class="text-xs text-slate-500">Multi-factor security methods required for cryptographic certificate access and portal clearance</p>
</div>
</div>
<span class="text-xs font-mono font-bold text-[#173153] bg-[#eaf1f9] px-2.5 py-1 rounded-md border border-[#173153]/20">
                FIDO2 / TOTP
              </span>
</div>
<div class="p-6 divide-y divide-slate-100 flex flex-col gap-4">
<!-- Method 1: TOTP Authenticator -->
<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-1">
<div class="flex items-start gap-3.5">
<div class="p-2.5 rounded-lg bg-[#e8f6ee] text-[#14452f] mt-0.5">
<span class="material-symbols-outlined text-[22px]">smartphone</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-slate-900">CvSU Authenticator App (TOTP)</span>
<span class="px-2 py-0.5 rounded-full text-[11px] font-bold bg-[#e8f6ee] text-[#16a34a] border border-[#16a34a]/20">
                        ACTIVE
                      </span>
</div>
<p class="text-xs text-slate-500 mt-0.5">
                      Time-based 6-digit one-time authorization tokens linked to Android device (Registered Oct 2026).
                    </p>
<span class="text-[11px] font-mono text-slate-400 mt-0.5">RFC 6238 Compliant · 30-second token lifecycle</span>
</div>
</div>
<button class="px-3.5 py-1.5 bg-white border border-slate-300 hover:bg-slate-50 text-slate-700 text-xs font-semibold rounded-lg transition-colors shadow-xs shrink-0 self-end sm:self-auto" type="button">
                  Reconfigure
                </button>
</div>
<!-- Method 2: WebAuthn Hardware Security Key -->
<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-4">
<div class="flex items-start gap-3.5">
<div class="p-2.5 rounded-lg bg-[#fef3c7] text-[#b45309] mt-0.5">
<span class="material-symbols-outlined text-[22px]">key</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-slate-900">WebAuthn Hardware Security Key / Passkey</span>
<span class="px-2 py-0.5 rounded-full text-[11px] font-bold bg-[#e8f6ee] text-[#16a34a] border border-[#16a34a]/20">
                        ACTIVE
                      </span>
</div>
<p class="text-xs text-slate-500 mt-0.5">
                      Physical cryptographic token (YubiKey 5C NFC / FIDO2) configured for biometric and touch challenge.
                    </p>
<span class="text-[11px] font-mono text-slate-400 mt-0.5">Key ID: YUBI-901-CVSU · Curve: ECDSA P-256</span>
</div>
</div>
<button class="px-3.5 py-1.5 bg-white border border-slate-300 hover:bg-slate-50 text-slate-700 text-xs font-semibold rounded-lg transition-colors shadow-xs shrink-0 self-end sm:self-auto" type="button">
                  Manage Keys
                </button>
</div>
<!-- Method 3: Backup Verification Phone -->
<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-4">
<div class="flex items-start gap-3.5">
<div class="p-2.5 rounded-lg bg-slate-100 text-[#173153] mt-0.5">
<span class="material-symbols-outlined text-[22px]">sms</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-slate-900">Backup Emergency Phone Channel</span>
<span class="px-2 py-0.5 rounded-full text-[11px] font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                        BACKUP CHANNEL
                      </span>
</div>
<p class="text-xs text-slate-500 mt-0.5">
                      Emergency recovery codes dispatched via verified SMS to <span class="font-mono font-semibold text-slate-700">+63 917 •••• 8492</span>.
                    </p>
<span class="text-[11px] font-mono text-slate-400 mt-0.5">Used strictly for out-of-band account restoration</span>
</div>
</div>
<button class="px-3.5 py-1.5 bg-white border border-slate-300 hover:bg-slate-50 text-slate-700 text-xs font-semibold rounded-lg transition-colors shadow-xs shrink-0 self-end sm:self-auto" type="button">
                  Verify New Number
                </button>
</div>
</div>
</div>
</div>
<!-- Right Column (35% / 4 Cols) -->
<div class="lg:col-span-4 flex flex-col gap-6">
<!-- Card 1: Clearance Tier & Permissions Summary -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5 flex flex-col gap-4 border-t-4 border-t-[#14452f]">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#14452f] text-[22px]">admin_panel_settings</span>
<h3 class="text-sm font-bold text-slate-900 font-serif">Clearance Tier &amp; Permissions</h3>
</div>
<span class="px-2 py-0.5 rounded text-[11px] font-bold bg-[#fef3c7] text-[#b45309] border border-amber-300/50">
                TIER 1 STUDENT
              </span>
</div>
<div class="flex flex-col gap-3 text-xs">
<div>
<span class="text-[11px] font-bold text-[#14452f] uppercase tracking-wider block mb-1.5 flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-[#16a34a]"></span>Permitted Operations
                </span>
<ul class="space-y-1.5 text-slate-600">
<li class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span>
<span>Can view departmental syllabi and research papers</span>
</li>
<li class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span>
<span>Download cryptographically verified clearance slips</span>
</li>
<li class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[#16a34a] text-[16px]">check_circle</span>
<span>Verify academic standings and clearance stamps</span>
</li>
</ul>
</div>
<div class="pt-2.5 border-t border-slate-100">
<span class="text-[11px] font-bold text-red-600 uppercase tracking-wider block mb-1.5 flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-red-500"></span>Restricted Operations
                </span>
<ul class="space-y-1.5 text-slate-600">
<li class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-red-500 text-[16px]">cancel</span>
<span>Restricted from departmental write / upload privileges</span>
</li>
<li class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-red-500 text-[16px]">cancel</span>
<span>Zero access to faculty grading registers</span>
</li>
<li class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-red-500 text-[16px]">cancel</span>
<span>Cannot derive administrative cryptographic vault keys</span>
</li>
</ul>
</div>
</div>
<button class="w-full py-2 bg-slate-50 hover:bg-emerald-50 text-[#14452f] hover:text-[#14452f] font-semibold text-xs rounded-lg border border-slate-200 hover:border-[#14452f]/30 flex items-center justify-center gap-2 transition-all mt-1 shadow-xs" type="button">
<span class="material-symbols-outlined text-[16px] text-[#d4a017]">contact_support</span>
<span>Request Clearance Elevation (MIS Queue)</span>
</button>
</div>
<!-- Card 2: Active Enclave Sessions & Device Registry -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5 flex flex-col gap-4 border-t-4 border-t-[#173153]">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#173153] text-[22px]">devices</span>
<h3 class="text-sm font-bold text-slate-900 font-serif">Active Enclave Sessions</h3>
</div>
<span class="text-xs font-mono font-bold text-[#14452f] bg-[#e8f6ee] px-2 py-0.5 rounded border border-[#14452f]/20">
                2 SESSIONS
              </span>
</div>
<div class="flex flex-col gap-3">
<!-- Current Session -->
<div class="p-3 bg-emerald-50/40 rounded-lg border border-emerald-200/60 flex flex-col gap-1.5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#14452f] text-[18px]">laptop_windows</span>
<span class="text-xs font-bold text-slate-900">Indang CEIT Lab 3 (Current)</span>
</div>
<span class="text-[10px] font-bold text-[#16a34a] bg-[#e8f6ee] px-2 py-0.5 rounded-full border border-[#16a34a]/30 flex items-center gap-1 font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-[#16a34a] animate-pulse"></span>ACTIVE NOW
                  </span>
</div>
<div class="flex items-center justify-between text-[11px] font-mono text-slate-500">
<span>Node: 10.24.11.89</span>
<span class="text-emerald-700 font-medium">TLS 1.3 // ECDHE-RSA</span>
</div>
</div>
<!-- Secondary Device -->
<div class="p-3 bg-slate-50 rounded-lg border border-slate-200 flex flex-col gap-1.5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-slate-500 text-[18px]">tablet_android</span>
<span class="text-xs font-semibold text-slate-800">Samsung Galaxy Tab S9</span>
</div>
<span class="text-[10px] text-slate-500 font-mono">Idle 2 hrs ago</span>
</div>
<div class="flex items-center justify-between text-[11px] font-mono text-slate-500">
<span>CvSU Mobile Hub (Android)</span>
<span class="text-slate-400">Globe Telecom ASN</span>
</div>
</div>
</div>
<!-- Revoke action button with warning icon -->
<button class="w-full py-2 bg-red-50 hover:bg-red-100 text-red-700 font-semibold text-xs rounded-lg border border-red-200 flex items-center justify-center gap-2 transition-colors shadow-xs" type="button">
<span class="material-symbols-outlined text-[16px] text-red-600">warning</span>
<span>Revoke All Other Sessions</span>
</button>
</div>
<!-- Card 3: Cryptographic Audit Trail & Data Sovereignty -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5 flex flex-col gap-4 border-t-4 border-t-[#d4a017]">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#b45309] text-[22px]">history_edu</span>
<h3 class="text-sm font-bold text-slate-900 font-serif">Audit Trail &amp; Data Sovereignty</h3>
</div>
<span class="material-symbols-outlined text-[#16a34a] text-[18px]">verified</span>
</div>
<div class="flex flex-col gap-2.5 text-xs">
<div class="p-3 bg-[#f8fafc] rounded-lg border border-slate-200/80 flex flex-col gap-1">
<span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Latest Clearance Checksum</span>
<span class="font-mono text-[11px] text-[#173153] font-semibold">0x8a92bb03c4f9cf1a7741e9b</span>
<span class="text-[11px] text-slate-500">Today, 08:42 AM PST · Workstation 10.24.11.89</span>
</div>
<div class="p-3 bg-[#f8fafc] rounded-lg border border-slate-200/80 flex flex-col gap-1">
<span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Key Derivation Standard</span>
<span class="font-mono text-[11px] text-slate-800 font-medium">Argon2id v=19 m=65536 t=3 p=4</span>
<span class="text-[11px] text-emerald-700 font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">shield</span> Cryptographically isolated
                </span>
</div>
<div class="p-3 bg-[#e8f6ee]/60 rounded-lg border border-[#14452f]/20 flex items-start gap-2">
<span class="material-symbols-outlined text-[#16a34a] text-[18px] shrink-0 mt-0.5">verified_user</span>
<p class="text-[11px] text-slate-600 leading-normal">
                  All security operations are audited under <strong class="text-slate-800">ISO 9001:2015</strong> and the <strong class="text-slate-800">Data Privacy Act (RA 10173)</strong>.
                </p>
</div>
</div>
</div>
</div>
</div>
<!-- Institutional Footer (Exact match with SCREEN_16) -->
<footer class="mt-4 py-4 px-6 bg-white border border-slate-200 rounded-xl flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 shadow-sm border-b-2 border-b-[#14452f]">
<div class="flex items-center gap-3">
<div class="p-1.5 bg-[#e8f6ee] rounded-lg text-[#14452f]">
<span class="material-symbols-outlined text-[22px]">account_balance</span>
</div>
<div>
<span class="font-bold text-[#14452f]">Cavite State University</span>
<span class="text-slate-400"> · Indang, Cavite 4122 Philippines · Est. 1906</span>
</div>
</div>
<div class="flex items-center gap-4 text-[11px]">
<span class="flex items-center gap-1 font-medium text-[#14452f]">
<span class="material-symbols-outlined text-[#16a34a] text-[15px]">verified</span>ISO 9001:2015
          </span>
<span class="flex items-center gap-1 font-medium text-[#173153]">
<span class="material-symbols-outlined text-[#173153] text-[15px]">shield</span>RA 10173 Protected
          </span>
<span class="font-mono text-slate-500 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">DocuSecure v4.2.1-Enclave</span>
</div>
</footer>
</main>
</div>

</body></html>