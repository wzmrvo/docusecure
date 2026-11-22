<!DOCTYPE html>

<html class="dark" lang="en"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><meta content="web_dashboard" name="shell-type"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=JetBrains+Mono:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config={darkMode:"class",theme:{extend:{colors:{"secondary-container":"#3a4d42","primary-fixed-dim":"#9fd2b4","surface-dim":"#111412","surface-container-low":"#191c1a","background":"#111412","on-tertiary":"#242e54","on-secondary":"#22342a","surface-tint":"#9fd2b4","surface-container-lowest":"#0c0f0d","surface-variant":"#323633","outline":"#8a938c","tertiary":"#bbc5f3","outline-variant":"#414943","tertiary-fixed-dim":"#bbc5f3","on-tertiary-container":"#00031a","on-secondary-fixed":"#0d1f16","surface":"#111412","on-primary-fixed":"#002113","error-container":"#93000a","on-secondary-container":"#a8beaf","error":"#ffb4ab","on-error":"#690005","inverse-on-surface":"#2e312f","secondary-fixed-dim":"#b6ccbd","surface-container-highest":"#323633","surface-container":"#1d201e","on-secondary-fixed-variant":"#384b40","tertiary-container":"#6b759f","primary-fixed":"#baeecf","inverse-primary":"#38684f","secondary":"#b6ccbd","on-background":"#e1e3df","on-primary":"#023823","primary":"#9fd2b4","on-primary-container":"#00311e","surface-container-high":"#272b28","on-error-container":"#ffdad6","on-surface-variant":"#c0c9c1","tertiary-fixed":"#dce1ff","primary-container":"#6a9b80","on-primary-fixed-variant":"#1f4f39","on-surface":"#e1e3df","on-tertiary-fixed":"#0e193d","secondary-fixed":"#d2e8d8","surface-bright":"#373a37","inverse-surface":"#e1e3df","on-tertiary-fixed-variant":"#3b456b"},borderRadius:{"DEFAULT":"0.125rem","lg":"0.25rem","xl":"0.5rem","full":"0.75rem"},spacing:{"margin":"3rem","space-xs":"0.25rem","space-lg":"1.5rem","margin-mobile":"1.25rem","gutter":"1.5rem","gutter-mobile":"1rem","space-md":"1rem","space-xl":"2.5rem","space-sm":"0.5rem"},fontFamily:{"display":["Inter"],"headline-lg":["Inter"],"headline-sm":["Inter"],"label-lg":["JetBrains Mono"],"body-sm":["Inter"],"label-md":["JetBrains Mono"],"display-mobile":["Inter"],"headline-md":["Inter"],"code-snippet":["JetBrains Mono"],"body-lg":["Inter"],"headline-lg-mobile":["Inter"],"body-md":["Inter"],"label-sm":["JetBrains Mono"]},fontSize:{"display":["3rem",{"lineHeight":"3.5rem","letterSpacing":"-0.03em","fontWeight":"700"}],"headline-lg":["2rem",{"lineHeight":"2.5rem","letterSpacing":"-0.02em","fontWeight":"600"}],"headline-sm":["1.125rem",{"lineHeight":"1.625rem","fontWeight":"600"}],"label-lg":["0.875rem",{"lineHeight":"1.25rem","letterSpacing":"0.04em","fontWeight":"600"}],"body-sm":["0.75rem",{"lineHeight":"1.125rem","fontWeight":"400"}],"label-md":["0.75rem",{"lineHeight":"1rem","letterSpacing":"0.06em","fontWeight":"500"}],"display-mobile":["2.25rem",{"lineHeight":"2.75rem","letterSpacing":"-0.02em","fontWeight":"700"}],"headline-md":["1.375rem",{"lineHeight":"1.875rem","letterSpacing":"-0.01em","fontWeight":"600"}],"code-snippet":["0.8125rem",{"lineHeight":"1.25rem","fontWeight":"400"}],"body-lg":["1rem",{"lineHeight":"1.5rem","fontWeight":"400"}],"headline-lg-mobile":["1.5rem",{"lineHeight":"2rem","letterSpacing":"-0.01em","fontWeight":"600"}],"body-md":["0.875rem",{"lineHeight":"1.375rem","fontWeight":"400"}],"label-sm":["0.6875rem",{"lineHeight":"0.875rem","letterSpacing":"0.08em","fontWeight":"500"}]}}}}</script></head><body class="bg-surface font-body-md text-body-md text-on-surface antialiased"><aside class="fixed left-0 top-0 h-full w-72 z-50 flex flex-col justify-between py-5 px-4" style="background: linear-gradient(rgb(19, 34, 56) 0%, rgb(13, 24, 41) 100%); border-right: 1px solid rgba(255, 255, 255, 0.08); box-shadow: rgba(0, 0, 0, 0.4) 4px 0px 24px;">
<div class="flex flex-col gap-6">
<!-- Brand Header -->
<div class="flex items-center gap-3 px-2 pt-1 pb-4 border-b border-white/10">
<img alt="CvSU Logo" class="w-9 h-9 object-contain drop-shadow-md flex-shrink-0" src="{{ asset('images/cvsu-logo.png') }}"/>
<div class="flex flex-col min-w-0">
<div class="flex items-center gap-1.5">
<span class="font-bold text-white text-[16px] tracking-tight leading-tight">DocuSecure</span>
<span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
</div>
<span class="text-[10px] text-slate-400 font-mono tracking-wider uppercase truncate">CAVITE STATE UNIVERSITY • CEIT VAULT</span>
</div>
</div>
<!-- Workspace Navigation -->
<div class="flex flex-col gap-1.5">
<span class="text-[11px] font-semibold tracking-wider text-slate-400 uppercase px-3 pb-1">WORKSPACE</span>
<nav class="flex flex-col gap-1">
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all text-sm font-medium group" data-path="dashboard-overview" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-slate-400 group-hover:text-white transition-colors">grid_view</span>
<span>Dashboard (Overview)</span>
</div>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all text-sm font-medium group" data-path="document-library" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-slate-400 group-hover:text-white transition-colors">folder_special</span>
<span>Document Library</span>
</div>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all text-sm font-medium group" data-path="clearance-requests" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-slate-400 group-hover:text-white transition-colors">verified_user</span>
<span>Clearance Requests</span>
</div>
<span class="bg-amber-400 text-slate-900 font-bold text-xs px-2 py-0.5 rounded-full shadow-sm">2 pending</span>
</a>
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-white font-semibold text-sm transition-all shadow-sm" data-path="department-records-ceit" href="#" style="background: rgba(255, 255, 255, 0.12); border-left: 4px solid #34d399;">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-emerald-400">corporate_fare</span>
<span>Department Records (CEIT)</span>
</div>
<span class="h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_8px_#34d399]"></span>
</a>
</nav>
</div>
</div>
<!-- Bottom User Session Footer -->
<div class="flex flex-col gap-3 pt-4 border-t border-white/10 px-2">
<div class="p-3 rounded-lg flex flex-col gap-1" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.07);">
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5">
<span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span class="text-xs font-bold text-emerald-400 tracking-wider uppercase font-mono">TIER 3 CLEARANCE</span>
</div>
<span class="material-symbols-outlined text-[16px] text-emerald-400">encrypted</span>
</div>
<span class="text-[12px] text-slate-400 font-mono">NetID: CEIT-FAC-88219</span>
<span class="text-[11px] text-slate-300 font-medium truncate">Prof. Juan Dela Cruz</span>
</div>
<a class="flex items-center justify-center gap-2 w-full py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 transition-colors text-xs font-medium border border-white/10" data-path="login" href="#">
<span class="material-symbols-outlined text-[16px]">logout</span>
<span>Sign Out Session</span>
</a>
</div>
</aside><div class="pl-72"><header class="fixed top-0 left-72 right-0 h-16 bg-surface/80 backdrop-blur-xl z-40 flex items-center justify-between px-space-lg"><div class="flex items-center gap-space-lg"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-[20px]">shield</span><div class="flex items-center gap-2 font-mono text-xs"><span class="text-slate-400">CEIT Enclave</span><span class="text-slate-600">/</span><span class="text-primary font-semibold">Department Records</span></div><span class="ml-2 text-[10px] font-mono px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">NODE-04 ONLINE</span></div><div class="relative hidden xl:flex items-center"><span class="material-symbols-outlined absolute left-space-sm text-on-surface-variant text-[18px]">search</span><input class="w-96 pl-10 pr-space-md py-1.5 rounded-lg bg-surface-container-low text-on-surface placeholder:text-on-surface-variant font-body-sm text-body-sm focus:outline-none" placeholder="Encrypted Omni-Search (Doc ID, SHA-256, Faculty ID)..." type="text"/></div></div><div class="flex items-center gap-space-md"><div class="hidden md:flex items-center gap-space-xs px-space-sm py-1 rounded bg-surface-container-low"><span class="h-2 w-2 rounded-full bg-primary animate-pulse"></span><span class="font-label-sm text-label-sm text-on-surface-variant">CvSU Cloud Node: Active • 256-bit Encrypted</span></div><div class="relative flex items-center"><button aria-label="Notifications" class="p-1.5 text-on-surface-variant hover:text-on-surface transition-colors rounded-lg bg-surface-container-low flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">notifications</span></button><span class="absolute top-1 right-1 h-2 w-2 bg-error rounded-full"></span></div><div class="flex items-center gap-space-sm pl-space-sm"><div class="flex flex-col items-end"><span class="font-label-md text-label-md text-on-surface">Prof. Juan Dela Cruz</span><span class="font-label-sm text-label-sm text-primary">CEIT Faculty • Tier 3 Clearance</span></div><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></div></header><main class="relative pt-16 bg-surface w-full px-space-lg"><div class="flex flex-col w-full relative">
<!-- Subtle Background Simulation of Document Library underneath Modal Overlay -->
<div aria-hidden="true" class="w-full pointer-events-none select-none opacity-40 blur-[2px] transition-all">
<div class="flex items-center justify-between pb-space-lg">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2">
<span class="font-label-sm text-label-sm text-primary uppercase tracking-widest font-mono">ENCLAVE CLASSIFIED REPOSITORY</span>
<span class="px-2 py-0.5 rounded bg-surface-container-highest text-[11px] font-mono text-secondary">CEIT-ZONE-ALPHA</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface">Document Vault &amp; Clearance Records</h1>
</div>
<div class="flex items-center gap-3">
<div class="px-4 py-2 rounded bg-surface-container text-on-surface-variant font-label-md text-label-md">Filter by Tier (All)</div>
<div class="px-4 py-2 rounded bg-primary text-on-primary font-label-md text-label-md">Secure Document Ingest</div>
</div>
</div>
<!-- Mock Grid Behind -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-lg">
<div class="p-space-md rounded bg-surface-container-low flex flex-col gap-3">
<div class="flex justify-between items-center">
<span class="text-xs font-mono text-primary">TIER 2 VERIFIED</span>
<span class="material-symbols-outlined text-sm text-on-surface-variant">verified</span>
</div>
<div class="font-headline-sm text-headline-sm text-on-surface">CEIT_Syllabus_CS422_Advanced_Algorithms.pdf</div>
<div class="font-label-sm text-label-sm text-on-surface-variant font-mono">SHA256: 8a4f910b...2c4e</div>
</div>
<div class="p-space-md rounded bg-surface-container-low flex flex-col gap-3">
<div class="flex justify-between items-center">
<span class="text-xs font-mono text-tertiary">TIER 3 FACULTY</span>
<span class="material-symbols-outlined text-sm text-tertiary">lock_open</span>
</div>
<div class="font-headline-sm text-headline-sm text-on-surface">Faculty_Evaluation_Summary_AY2025_Q2.xlsx.enc</div>
<div class="font-label-sm text-label-sm text-on-surface-variant font-mono">SHA256: e3b0c442...98b1</div>
</div>
<div class="p-space-md rounded bg-surface-container-low flex flex-col gap-3">
<div class="flex justify-between items-center">
<span class="text-xs font-mono text-error">TIER 4 RESTRICTED</span>
<span class="material-symbols-outlined text-sm text-error">lock</span>
</div>
<div class="font-headline-sm text-headline-sm text-on-surface">BOR_Resolution_2026_094_FacultyTenure_Clearance.pdf.enc</div>
<div class="font-label-sm text-label-sm text-error font-mono">STATUS: ACCESS DENIED</div>
</div>
</div>
</div>
<!-- FIXED MODAL BACKDROP & CENTERING CONTAINER -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 overflow-y-auto" id="clearanceModalWrapper" style="background: rgba(12, 15, 13, 0.78); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);">
<!-- MODAL DIALOG CONTAINER (Max Width ~720px) -->
<div class="relative w-full max-w-[720px] my-auto rounded-lg bg-surface-container-low shadow-2xl flex flex-col overflow-hidden transition-all duration-200" style="background: linear-gradient(180deg, #191c1a 0%, #111412 100%); box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.8), 0 0 0 1px rgba(159, 210, 180, 0.12);">
<!-- Top Micro Security Accent Strip (Dual Academic Gold & Sovereign Emerald) -->
<div class="h-1 w-full flex">
<div class="w-1/3 bg-tertiary"></div>
<div class="w-2/3 bg-primary"></div>
</div>
<!-- 1. MODAL HEADER -->
<div class="px-6 py-5 bg-surface-container flex items-start justify-between gap-4">
<div class="flex items-start gap-3.5">
<div class="w-10 h-10 rounded bg-surface-container-high flex items-center justify-center flex-shrink-0 shadow-inner" style="background: linear-gradient(135deg, #272b28 0%, #191c1a 100%);">
<span class="material-symbols-outlined text-primary text-[24px]">shield_person</span>
</div>
<div class="flex flex-col min-w-0">
<div class="flex items-center gap-2">
<h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">File Tier 4 Access Clearance Slip</h2>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Formal zero-trust access elevation request for Board of Regents &amp; Executive Vault records.</p>
</div>
</div>
<div class="flex items-center gap-2.5 flex-shrink-0">
<span class="px-2.5 py-1 rounded bg-error-container text-on-error-container font-label-sm text-label-sm uppercase tracking-wider flex items-center gap-1 font-mono">
<span class="material-symbols-outlined text-[13px]">lock</span>
            TIER 4 RESTRICTED
          </span>
<button aria-label="Close modal dialog" class="w-8 h-8 rounded bg-surface-container-high hover:bg-surface-variant text-on-surface-variant hover:text-on-surface flex items-center justify-center transition-colors" id="closeModalBtn" type="button">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
</div>
<!-- MODAL BODY -->
<div class="px-6 py-5 flex flex-col gap-5 overflow-y-auto max-h-[calc(85vh-140px)]">
<!-- 2. TARGET RESTRICTED DOCUMENT CARD -->
<div class="rounded-lg p-4 bg-surface-container-lowest flex flex-col gap-3 relative overflow-hidden" style="background: linear-gradient(145deg, #0c0f0d 0%, #141715 100%);">
<!-- Background watermark motif -->
<div class="absolute right-2 -bottom-4 opacity-5 pointer-events-none select-none">
<img alt="CvSU Watermark" class="w-40 h-40 object-contain" src="{{ asset('images/cvsu-logo.png') }}"/>
</div>
<div class="flex items-start justify-between gap-3 relative z-10">
<div class="flex items-start gap-3 min-w-0">
<span class="material-symbols-outlined text-primary text-[26px] mt-0.5 flex-shrink-0">description</span>
<div class="flex flex-col min-w-0">
<span class="font-label-sm text-label-sm text-primary uppercase font-mono tracking-wider">TARGET CLASSIFIED ASSET</span>
<span class="font-headline-sm text-headline-sm text-on-surface truncate font-mono select-all">BOR_Resolution_2026_094_FacultyTenure_Clearance.pdf.enc</span>
</div>
</div>
<span class="px-2 py-0.5 rounded bg-surface-container-highest text-error font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap font-mono flex items-center gap-1">
<span class="h-1.5 w-1.5 rounded-full bg-error animate-ping"></span>
              DUAL-SIGNOFF REQ.
            </span>
</div>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-2 pt-2 bg-surface-container-low/40 p-2.5 rounded relative z-10">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Classification</span>
<span class="font-body-sm text-body-sm text-on-surface font-semibold truncate">BOR / Exec Vault</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">File Integrity</span>
<span class="font-label-sm text-label-sm text-primary font-mono truncate" title="SHA-256: 7f3a8b4112e4fbc901dc9d846102a941d9e2">7f3a...d9e2 (AES-256)</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Document Custodian</span>
<span class="font-body-sm text-body-sm text-on-surface truncate">Main Admin Indang</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Asset Size</span>
<span class="font-body-sm text-body-sm text-on-surface truncate">4.8 MB (Encrypted)</span>
</div>
</div>
</div>
<!-- 3. REQUESTING APPLICANT TELEMETRY POD -->
<div class="rounded-lg p-3.5 bg-surface-container flex flex-col sm:flex-row sm:items-center justify-between gap-3">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-primary flex items-center justify-center text-on-primary font-semibold flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">badge</span>
</div>
<div class="flex flex-col min-w-0">
<div class="flex items-center gap-2">
<span class="font-body-md text-body-md text-on-surface font-semibold">Prof. Juan Dela Cruz, M.Sc.</span>
<span class="px-1.5 py-0.2 rounded bg-surface-container-high text-[10px] font-mono text-on-surface-variant">VERIFIED APPLICANT</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant font-mono">NetID: CEIT-FAC-88219 • Dept. of Computer Studies</span>
</div>
</div>
<div class="flex items-center gap-2 pl-12 sm:pl-0">
<div class="flex flex-col items-start sm:items-end">
<span class="font-label-sm text-label-sm text-on-surface-variant">Active Clearance Level</span>
<span class="font-label-md text-label-md text-primary font-mono flex items-center gap-1">
<span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                Tier 3 (Faculty Standard)
              </span>
</div>
</div>
</div>
<!-- 4. INTERACTIVE REQUEST FORM -->
<form class="flex flex-col gap-4" id="clearanceSlipForm" onsubmit="event.preventDefault();">
<!-- Operational Justification Dropdown -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface flex items-center justify-between" for="operationalPurpose">
<span class="flex items-center gap-1.5">
<span>Operational Purpose / Statutory Ground</span>
<span class="text-error font-mono">*</span>
</span>
<span class="font-label-sm text-label-sm text-on-surface-variant font-mono uppercase tracking-wider">ISO 27001 AUDIT COMPLIANT</span>
</label>
<div class="relative">
<select class="w-full px-3.5 py-2.5 rounded bg-surface-container-high text-on-surface font-body-md text-body-md appearance-none focus:outline-none focus:bg-surface-variant transition-colors cursor-pointer pr-10" id="operationalPurpose">
<option selected="" value="tenure">Tenure &amp; Promotion Committee Deliberation / Accreditation Audit</option>
<option value="aaccup">Accreditation Body (AACCUP / CHED) Compliance Verification</option>
<option value="curriculum">Curriculum Revision Committee Review</option>
<option value="research">Dean-Authorized Institutional Research Inquiry</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-on-surface-variant pointer-events-none text-[20px]">expand_more</span>
</div>
</div>
<!-- Detailed Justification Textarea -->
<div class="flex flex-col gap-1.5">
<div class="flex items-center justify-between">
<label class="font-label-md text-label-md text-on-surface flex items-center gap-1.5" for="justificationDetail">
<span>Detailed Operational Need &amp; Scope</span>
<span class="text-error font-mono">*</span>
</label>
<span class="font-label-sm text-label-sm text-primary font-mono flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">lock</span>
                256-BIT ENCRYPTED
              </span>
</div>
<textarea class="w-full p-3 rounded bg-surface-container-high text-on-surface font-body-sm text-body-sm placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-variant transition-colors resize-none" id="justificationDetail" rows="3">Reviewing Section 4.2 of BOR Resolution 2026-094 regarding revised faculty tenure evaluation guidelines ahead of the upcoming CEIT Academic Council meeting on Friday, March 27, 2026.</textarea>
</div>
<!-- Access Duration Window (Pill Segmented Selector) -->
<div class="flex flex-col gap-2">
<div class="flex items-center justify-between">
<label class="font-label-md text-label-md text-on-surface flex items-center gap-1.5">
<span>Requested Decryption Window</span>
<span class="text-error font-mono">*</span>
</label>
<span class="font-label-sm text-label-sm text-secondary font-mono">Auto-Revoking Ephemeral Token</span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
<!-- Option 1: 24h (Selected) -->
<label class="cursor-pointer p-3 rounded bg-surface-container flex flex-col gap-1 relative transition-all group" id="durationOption1" style="background: rgba(159, 210, 180, 0.08);">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<input checked="" class="accent-primary h-4 w-4" name="accessDuration" onchange="updateDurationStyle()" type="radio" value="24"/>
<span class="font-label-md text-label-md text-on-surface font-semibold">24 Hours</span>
</div>
<span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant pl-6">Standard Review Session</span>
</label>
<!-- Option 2: 48h -->
<label class="cursor-pointer p-3 rounded bg-surface-container flex flex-col gap-1 relative transition-all group hover:bg-surface-container-high" id="durationOption2">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<input class="accent-primary h-4 w-4" name="accessDuration" onchange="updateDurationStyle()" type="radio" value="48"/>
<span class="font-label-md text-label-md text-on-surface font-semibold">48 Hours</span>
</div>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant pl-6">Extended Audit Deliberation</span>
</label>
<!-- Option 3: 72h -->
<label class="cursor-pointer p-3 rounded bg-surface-container flex flex-col gap-1 relative transition-all group hover:bg-surface-container-high" id="durationOption3">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<input class="accent-primary h-4 w-4" name="accessDuration" onchange="updateDurationStyle()" type="radio" value="72"/>
<span class="font-label-md text-label-md text-on-surface font-semibold">72 Hours</span>
</div>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant pl-6">Full Committee Session</span>
</label>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1.5 mt-0.5">
<span class="material-symbols-outlined text-[15px] text-tertiary">info</span>
<span>Access keys are cryptographically revoked and memory-zeroized immediately upon timer expiration.</span>
</p>
</div>
<!-- Dual-Signoff Sequential Pipeline Tracker Preview -->
<div class="p-3.5 rounded bg-surface-container-lowest flex flex-col gap-2.5">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-secondary uppercase font-mono tracking-wider flex items-center gap-1">
<span class="material-symbols-outlined text-[15px]">account_tree</span>
                MANDATORY DUAL-SIGNOFF AUTHORIZATION CHAIN
              </span>
<span class="text-[10px] font-mono text-on-surface-variant">POLICY: CEIT-SEC-2024</span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-1">
<!-- Signer 1 -->
<div class="p-2.5 rounded bg-surface-container flex items-center gap-3">
<div class="w-7 h-7 rounded bg-surface-container-high text-primary flex items-center justify-center font-mono text-xs font-bold">1</div>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-on-surface truncate">Dr. Hermogenes P. Ramos</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Dean, CEIT (Unit Endorsement)</span>
</div>
</div>
<!-- Signer 2 -->
<div class="p-2.5 rounded bg-surface-container flex items-center gap-3">
<div class="w-7 h-7 rounded bg-surface-container-high text-tertiary flex items-center justify-center font-mono text-xs font-bold">2</div>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-on-surface truncate">Engr. R. Bautista</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">MIS Key Custodian (Zero-Trust Key)</span>
</div>
</div>
</div>
</div>
<!-- 5. MANDATORY SECURITY & LEGAL DECLARATIONS -->
<div class="flex flex-col gap-2.5 pt-1">
<span class="font-label-sm text-label-sm text-on-surface font-semibold uppercase tracking-wider">Statutory Clearance Attestations</span>
<label class="flex items-start gap-3 cursor-pointer group p-2 rounded hover:bg-surface-container-high/40 transition-colors">
<input checked="" class="mt-0.5 accent-primary h-4 w-4 rounded-sm flex-shrink-0 cursor-pointer" id="ackWatermark" type="checkbox"/>
<span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">
                I acknowledge that all accessed pages will bear dynamic forensic steganographic watermarks embedding my NetID (<span class="font-mono text-on-surface">CEIT-FAC-88219</span>), UTC timestamp, and workstation IP address.
              </span>
</label>
<label class="flex items-start gap-3 cursor-pointer group p-2 rounded hover:bg-surface-container-high/40 transition-colors">
<input checked="" class="mt-0.5 accent-primary h-4 w-4 rounded-sm flex-shrink-0 cursor-pointer" id="ackPrivacy" type="checkbox"/>
<span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">
                I certify under oath that this restricted record will not be photographed, copied, or disseminated outside authorized university channels under Republic Act No. 10173 (Data Privacy Act of 2012) and CvSU Security Directive 04-2024.
              </span>
</label>
</div>
</form>
</div>
<!-- 6. MODAL FOOTER & ACTION CTAs -->
<div class="px-6 py-4 bg-surface-container flex flex-col sm:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-2 text-on-surface-variant w-full sm:w-auto">
<span class="material-symbols-outlined text-[18px] text-tertiary">support_agent</span>
<span class="font-body-sm text-body-sm">Urgent review? <span class="text-on-surface font-medium">MIS Ops Desk loc. 214</span></span>
</div>
<div class="flex items-center gap-3 w-full sm:w-auto justify-end">
<button class="w-full sm:w-auto px-4 py-2.5 rounded bg-surface-container-high hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors" id="cancelModalBtn" type="button">
            Cancel &amp; Return
          </button>
<button class="w-full sm:w-auto px-5 py-2.5 rounded bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-2 shadow-md hover:bg-primary-fixed transition-all" id="submitSlipBtn" style="background: linear-gradient(135deg, #9fd2b4 0%, #6a9b80 100%);" type="button">
<span class="material-symbols-outlined text-[18px]">vpn_key</span>
<span>Sign &amp; Dispatch Clearance Slip</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
<!-- TOAST NOTIFICATION FOR DISPATCH FEEDBACK -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none rounded-lg p-4 bg-surface-container-highest shadow-2xl flex items-center gap-3 max-w-md" id="dispatchToast">
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-on-primary flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">check</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-on-surface font-bold">Clearance Slip Dispatched</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Request ID #CL-2026-9042 routed to Dean Ramos for cryptographic signature.</span>
</div>
</div>
</div>
<script>
  function updateDurationStyle() {
    const radios = document.querySelectorAll('input[name="accessDuration"]');
    radios.forEach((r, idx) => {
      const parentLabel = document.getElementById(`durationOption${idx + 1}`);
      if (r.checked) {
        parentLabel.style.background = 'rgba(159, 210, 180, 0.08)';
        let checkIcon = parentLabel.querySelector('.material-symbols-outlined');
        if (!checkIcon) {
          const iconSpan = document.createElement('span');
          iconSpan.className = 'material-symbols-outlined text-primary text-[18px]';
          iconSpan.textContent = 'check_circle';
          parentLabel.querySelector('div').appendChild(iconSpan);
        }
      } else {
        parentLabel.style.background = '';
        const checkIcon = parentLabel.querySelector('.material-symbols-outlined');
        if (checkIcon) {
          checkIcon.remove();
        }
      }
    });
  }

  const modalWrapper = document.getElementById('clearanceModalWrapper');
  const closeBtn = document.getElementById('closeModalBtn');
  const cancelBtn = document.getElementById('cancelModalBtn');
  const submitBtn = document.getElementById('submitSlipBtn');
  const toast = document.getElementById('dispatchToast');

  function hideModal() {
    modalWrapper.style.opacity = '0';
    modalWrapper.style.pointerEvents = 'none';
    setTimeout(() => {
      modalWrapper.style.display = 'none';
    }, 200);
  }

  if (closeBtn) closeBtn.addEventListener('click', hideModal);
  if (cancelBtn) cancelBtn.addEventListener('click', hideModal);

  if (submitBtn) {
    submitBtn.addEventListener('click', () => {
      // Visual button loading state
      const originalHTML = submitBtn.innerHTML;
      submitBtn.innerHTML = '<span class="material-symbols-outlined animate-spin text-[18px]">progress_activity</span><span>Signing Token...</span>';
      submitBtn.disabled = true;

      setTimeout(() => {
        hideModal();
        // Trigger Toast
        if (toast) {
          toast.classList.remove('translate-y-24', 'opacity-0');
          toast.classList.add('translate-y-0', 'opacity-100');
          setTimeout(() => {
            toast.classList.add('translate-y-24', 'opacity-0');
            toast.classList.remove('translate-y-0', 'opacity-100');
            submitBtn.innerHTML = originalHTML;
            submitBtn.disabled = false;
          }, 4500);
        }
      }, 900);
    });
  }
</script></main><footer class="w-full bg-surface-container-lowest mt-space-xl py-space-lg px-space-lg"><div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-space-md"><div class="flex flex-col gap-space-xs"><span class="font-label-sm text-label-sm text-on-surface-variant font-bold">Cavite State University Data Privacy Act of 2012 (RA 10173) Directive Notice</span><span class="font-body-sm text-body-sm text-on-surface-variant">All document transactions, SHA-256 cryptographic handshakes, and clearance authorizations are logged in real-time under zero-trust audit protocols.</span></div><div class="flex items-center gap-space-sm"><span class="material-symbols-outlined text-primary text-[18px]">fingerprint</span><span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Steganographic Watermark Protected • TLS 1.3 Strict</span></div></div></footer></div>
</body></html>