<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DocuSecure — Cavite State University Institutional Workspace</title>
<!-- Google Fonts & Material Symbols -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS v3 with Plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            portal: {
              navy: "#173153",
              "navy-dark": "#0f223a",
              "navy-light": "#1f3f69",
              "navy-accent": "#2d5386",
              gold: "#eabf55",
              "gold-light": "#fdf2d0",
              "gold-dark": "#c89e35"
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            mono: ['"JetBrains Mono"', 'monospace'],
          }
        }
      }
    }
  </script>
<!-- BEGIN: Custom Micro-Styles -->
<style>
    /* Technical blueprint grid overlay */
    .bg-security-grid {
      background-size: 32px 32px;
      background-image: 
        linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
    }
    
    .card-security-shadow {
      box-shadow: 0 20px 50px -12px rgba(15, 34, 58, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.1);
    }

    .transition-elevate {
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .transition-elevate:hover {
      transform: translateY(-1px);
    }
  </style>
<!-- END: Custom Micro-Styles -->
<meta content="web_standard" name="shell-type"/>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen selection:bg-amber-400 selection:text-slate-900">
<!-- BEGIN: MainContainer -->
<main class="min-h-screen w-full flex flex-col lg:flex-row relative overflow-hidden" data-purpose="authentication-split-layout">
<!-- ========================================================================= -->
<!-- LEFT PANEL: Institutional Sovereign Security Showcase (Navy #173153) -->
<!-- ========================================================================= -->
<section class="lg:w-5/12 xl:w-1/2 text-white relative flex flex-col justify-between p-8 sm:p-12 lg:p-12 xl:p-14 overflow-hidden border-r border-slate-800/40" style="background: #173153;">
<!-- Subtle Cyber Matrix Blueprint Grid -->
<div class="absolute inset-0 bg-security-grid pointer-events-none opacity-80"></div>
<div class="absolute -top-32 -left-32 w-96 h-96 pointer-events-none rounded-full blur-3xl opacity-30" style="background: radial-gradient(circle, #376ead 0%, rgba(23,49,83,0) 70%);"></div>
<div class="absolute bottom-10 right-0 w-[420px] h-[420px] rounded-full blur-3xl pointer-events-none opacity-20" style="background: radial-gradient(circle, #eabf55 0%, rgba(15,34,58,0) 70%);"></div>
<!-- Top University & System Identity -->
<div class="relative z-10">
<header class="flex items-center gap-3.5" data-purpose="university-identity-header">
<img alt="CvSU Logo" class="w-16 h-16 object-contain drop-shadow-md flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRK8pFbeshMJlyny86cAR9ZCUYv27Asa15_ceJeV77VNarKWk_x9_4nvmPuzwER0F8wkakA3CwSI5LA8dhwTTWpfT3beaMziwlZrKmQEPZ_tus64g5K4GDyr9XVNRPqfebUtzTA9pDFnS6yAD0-wLqgKl4zHk_T20b5cBowXBT87f4uekl-h0MohzVqjHFe6OHIvt88bKWNJC_nA5KSPjfoi6-h1-Jvw8KUnvoVtmwRJ2hnKSRbGHc" style="width: 64px; height: 64px; object-fit: contain;"/>
<div>
<div class="flex items-center gap-2">
<span class="text-2xl font-bold tracking-tight text-white flex items-center gap-1.5">
<span class="material-symbols-outlined text-[#eabf55] text-2xl" style="font-variation-settings: 'FILL' 1;">shield</span>
              DocuSecure
            </span>
<span class="text-[10px] uppercase font-mono tracking-widest px-2 py-0.5 rounded bg-[#eabf55]/20 text-[#eabf55] border border-[#eabf55]/40 font-bold">
              OFFICIAL
            </span>
</div>
<p class="text-xs text-slate-300 font-medium tracking-wide mt-0.5">Cavite State University • Electronic Document Hub</p>
</div>
</header>
<!-- Main Narrative & Value Statement -->
<div class="mt-10 xl:mt-12 max-w-xl">
<!-- Security Eyebrow Tag -->
<div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-slate-900/60 border border-[#eabf55]/40 text-[#eabf55] text-xs font-semibold uppercase tracking-wider mb-5 shadow-sm backdrop-blur-sm">
<span class="w-2 h-2 rounded-full bg-[#eabf55] animate-pulse"></span>
          SECURITY-FIRST DESIGN
        </div>
<h1 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold tracking-tight text-white leading-[1.15]">
          Your documents.<br/>
<span style="color: #eabf55;">Protected at every step.</span>
</h1>
<p class="mt-4 text-sm sm:text-base text-slate-200/90 leading-relaxed max-w-lg font-normal">
          The central cryptographic repository for confidential academic records, faculty tenure clearances, and administrative transcripts under zero-trust surveillance.
        </p>
</div>
<!-- Security Cards & Document Badge -->
<div class="mt-8 xl:mt-10 relative flex flex-col sm:flex-row items-stretch sm:items-center gap-4" data-purpose="interactive-security-illustration">
<!-- Document Dossier Card -->
<div class="w-full sm:w-72 rounded-2xl bg-[#0f223a]/90 border border-slate-700/60 backdrop-blur-md card-security-shadow p-4 relative overflow-hidden transition-elevate flex flex-col justify-between gap-3">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2 overflow-hidden">
<span class="material-symbols-outlined text-[#eabf55] text-lg">description</span>
<span class="text-xs font-mono font-semibold text-white truncate">B0R_RES_2026_094.pdf.enc</span>
</div>
<span class="text-[9px] font-bold font-mono tracking-wider px-1.5 py-0.5 rounded bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">VERIFIED</span>
</div>
<div class="p-2 rounded bg-slate-900/80 border border-slate-800">
<span class="text-[9px] block text-slate-400 font-mono tracking-wider mb-0.5">SHA-256 CHECKSUM</span>
<span class="text-[10px] font-mono text-emerald-400 truncate block">e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855</span>
</div>
<div class="flex items-center justify-between pt-1 border-t border-slate-700/50">
<div class="flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span class="text-[10px] font-mono text-slate-300">Restricted Enclave</span>
</div>
<span class="text-[10px] text-slate-400 font-mono">TLS 1.3</span>
</div>
</div>
<!-- 3 Compliance Checklist Pills -->
<div class="flex flex-col gap-2 flex-1">
<div class="px-3 py-2 rounded-lg bg-[#0f223a]/80 border border-slate-700/70 text-xs text-slate-200 flex items-center gap-2 backdrop-blur-md shadow-sm">
<span class="material-symbols-outlined text-[#eabf55] text-base font-bold">verified</span>
<span>Role-Based Access Control (RBAC) Enforced</span>
</div>
<div class="px-3 py-2 rounded-lg bg-[#0f223a]/80 border border-slate-700/70 text-xs text-slate-200 flex items-center gap-2 backdrop-blur-md shadow-sm">
<span class="material-symbols-outlined text-[#eabf55] text-base font-bold">verified</span>
<span>Immutable Automated Audit Logging Active</span>
</div>
<div class="px-3 py-2 rounded-lg bg-[#0f223a]/80 border border-slate-700/70 text-xs text-slate-200 flex items-center gap-2 backdrop-blur-md shadow-sm">
<span class="material-symbols-outlined text-[#eabf55] text-base font-bold">verified</span>
<span>RA 10173 (Data Privacy Act of 2012) Certified</span>
</div>
</div>
</div>
</div>
<!-- Bottom Left Sovereign Statement Footer inside Navy Panel -->
<footer class="relative z-10 pt-6 mt-8 border-t border-slate-700/60" data-purpose="institutional-security-footer">
<div class="flex items-center justify-between text-xs text-slate-300">
<div class="flex items-center gap-2 flex-wrap">
<span class="text-[#eabf55] font-bold uppercase tracking-wider">SECURITY GOALS:</span>
<span class="text-slate-300">encrypted storage • role-based access • full audit trail</span>
</div>
<span class="font-mono text-slate-400 text-[11px] hidden sm:inline">v2.4.9_PROD</span>
</div>
</footer>
</section>
<!-- ========================================================================= -->
<!-- RIGHT PANEL: Crisp Light 2FA Verification Flow -->
<!-- ========================================================================= -->
<section class="lg:w-7/12 xl:w-1/2 bg-[#f8fafc] text-slate-800 flex flex-col justify-between p-6 sm:p-10 lg:p-10 xl:p-12 relative overflow-y-auto" data-purpose="user-login-portal">
<!-- Top Utility Header Navigation -->
<div class="w-full max-w-[460px] mx-auto flex items-center justify-between text-xs text-slate-600 mb-6">
<a class="inline-flex items-center gap-1.5 font-semibold text-[#173153] hover:text-[#1f3f69] transition-colors group" href="{{ url("/") }}">
<span class="material-symbols-outlined text-base group-hover:-translate-x-0.5 transition-transform">arrow_back</span>
<span>Return to credential sign-in</span>
</a>
<div class="flex items-center gap-1.5">
<span class="text-slate-500">Need technical assistance?</span>
<a class="font-semibold text-[#173153] hover:underline" href="{{ url("/") }}">CvSU MIS Helpdesk</a>
</div>
</div>
<!-- Center Card Container (Max-Width 460px) -->
<div class="w-full max-w-[460px] mx-auto my-auto py-2">
<div class="bg-white border border-[#e2e8f0] rounded-xl shadow-xl shadow-slate-200/60 p-7 sm:p-8 relative">
<!-- Header Icon & Status Pill -->
<div class="flex items-start gap-3.5 mb-4">
<div class="w-11 h-11 rounded-full bg-emerald-100 border border-emerald-200 flex items-center justify-center text-emerald-600 flex-shrink-0 shadow-sm">
<span class="material-symbols-outlined text-2xl font-bold">check</span>
</div>
<div>
<span class="text-[10px] font-bold tracking-wider text-emerald-800 uppercase bg-emerald-50 px-2.5 py-0.5 rounded border border-emerald-200 inline-block mb-1">
              INSTITUTIONAL 2FA STEP • VERIFIED
            </span>
<h2 class="text-xl font-bold tracking-tight text-slate-900 leading-tight">Two-Factor Authentication</h2>
<p class="text-xs font-semibold text-emerald-700 mt-0.5">Identity Authenticated</p>
</div>
</div>
<p class="text-xs text-slate-600 leading-relaxed mb-4">
          Cryptographic handshake validated against CvSU Indang Authentication HSM. Establishing secure administrative session...
        </p>
<!-- Target Identity Box -->
<div class="bg-slate-50 border border-slate-200 rounded-lg p-3 flex items-center justify-between mb-4 shadow-sm">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-[#173153] text-xl">badge</span>
<div class="flex flex-col">
<span class="text-xs font-bold text-slate-900">Prof. Juan Dela Cruz</span>
<span class="text-[11px] font-mono text-slate-500">j.delacruz@cvsu.edu.ph</span>
</div>
</div>
<span class="inline-flex items-center gap-1 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded text-[10px] font-bold text-emerald-700 uppercase tracking-wider">
            ✓ FIDO2 / TOTP VALIDATED
          </span>
</div>
<!-- 6-Digit Access Token Section -->
<div class="mb-4">
<div class="flex items-center justify-between mb-2">
<label class="block text-[11px] font-bold uppercase tracking-wider text-slate-700">6-Digit Access Token</label>
<span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200 flex items-center gap-1">
<span class="material-symbols-outlined text-xs">lock</span> 256-BIT ENCRYPTED
            </span>
</div>
<!-- 6 input cells displaying the entered digits [4] [8] [2] [9] [1] [0] -->
<div class="grid grid-cols-6 gap-2">
<div class="h-12 flex items-center justify-center text-center font-mono text-xl font-bold rounded-lg border-2 border-[#16a34a] bg-[#f0fdf4] text-emerald-900 shadow-sm">
              4
            </div>
<div class="h-12 flex items-center justify-center text-center font-mono text-xl font-bold rounded-lg border-2 border-[#16a34a] bg-[#f0fdf4] text-emerald-900 shadow-sm">
              8
            </div>
<div class="h-12 flex items-center justify-center text-center font-mono text-xl font-bold rounded-lg border-2 border-[#16a34a] bg-[#f0fdf4] text-emerald-900 shadow-sm">
              2
            </div>
<div class="h-12 flex items-center justify-center text-center font-mono text-xl font-bold rounded-lg border-2 border-[#16a34a] bg-[#f0fdf4] text-emerald-900 shadow-sm">
              9
            </div>
<div class="h-12 flex items-center justify-center text-center font-mono text-xl font-bold rounded-lg border-2 border-[#16a34a] bg-[#f0fdf4] text-emerald-900 shadow-sm">
              1
            </div>
<div class="h-12 flex items-center justify-center text-center font-mono text-xl font-bold rounded-lg border-2 border-[#16a34a] bg-[#f0fdf4] text-emerald-900 shadow-sm">
              0
            </div>
</div>
</div>
<!-- Success Notification Banner -->
<div class="p-3 rounded-lg mb-4 flex items-start gap-2.5" style="background-color: #e8f6ee; border: 1px solid #bfe3cd; color: #14532d;">
<span class="material-symbols-outlined text-emerald-700 text-lg flex-shrink-0 mt-0.5">verified_user</span>
<div class="flex flex-col gap-0.5">
<strong class="text-xs font-bold leading-tight" style="color: #14532d;">✓ Institutional Key Match Confirmed</strong>
<p class="text-[11px] leading-relaxed text-emerald-800">
              One-Time Token verified against CvSU Indang Authentication HSM. Session token <code class="font-mono font-semibold text-emerald-900">#AUTH-90812-TLS</code> granted.
            </p>
</div>
</div>
<!-- Trust Institutional Device Checkbox -->
<div class="flex items-start gap-2.5 p-2.5 rounded-lg bg-slate-50 border border-slate-200 mb-4">
<input checked="" class="w-4 h-4 mt-0.5 rounded text-[#173153] border-slate-300 focus:ring-[#173153] cursor-pointer" id="trust-device" name="trust-device" type="checkbox"/>
<label class="text-xs text-slate-700 cursor-pointer leading-normal" for="trust-device">
<strong class="font-semibold text-slate-800">Trust this institutional device for 30 days</strong> <span class="text-slate-500">(Indang Campus – Administration Building 2F)</span>
</label>
</div>
<!-- Primary Action Button: Full-width navy button (#173153) -->
<button class="w-full py-3 px-4 rounded-xl text-white font-bold text-sm tracking-wide flex items-center justify-center gap-2 transition-elevate shadow-md hover:brightness-110 active:brightness-95" style="background-color: #173153;" type="button">
<span>Entering Secure Workspace</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
<!-- Auto-redirect Status -->
<div class="mt-3 flex items-center justify-between text-[11px] text-slate-500">
<span>Auto-redirecting in <strong class="text-slate-700 font-bold" id="redirectCountdown">0.8s</strong>...</span>
<a class="text-[#173153] hover:underline font-medium" href="{{ url("/") }}">Click here if not redirected automatically</a>
</div>
<!-- Footnote: Lock icon -->
<div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-center gap-1.5 text-center text-[10px] text-slate-500">
<span class="material-symbols-outlined text-xs text-slate-400">lock</span>
<span>Protected by 256-bit encryption • RA 10173 Compliant • CvSU Cybersecurity Operations</span>
</div>
</div>
</div>
<!-- Bottom Copyright Note -->
<footer class="w-full max-w-[460px] mx-auto pt-4 border-t border-slate-200/80 text-center text-[11px] text-slate-500">
<p>© 2026 DocuSecure • Cavite State University | Data Privacy Act of 2012 Certified Environment</p>
</footer>
</section>
</main>
<!-- END: MainContainer -->
<!-- Auto-Redirect Countdown Simulation Script -->
<script>
  (function() {
    let timeLeft = 0.8;
    const cdEl = document.getElementById('redirectCountdown');
    if (cdEl) {
      const timer = setInterval(() => {
        timeLeft -= 0.1;
        if (timeLeft <= 0) {
          clearInterval(timer);
          cdEl.textContent = '0.0s';
        } else {
          cdEl.textContent = timeLeft.toFixed(1) + 's';
        }
      }, 100);
    }
  })();
</script>
</body></html>