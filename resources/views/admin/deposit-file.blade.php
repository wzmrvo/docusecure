<!DOCTYPE html><html class="dark" lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script id="tailwind-config">tailwind.config={darkMode:"class",theme:{extend:{colors:{"tertiary-container":"#1d324d","surface-container-low":"#0f1724","on-background":"#e2e8f0","on-secondary-container":"#d1fae5","on-tertiary-fixed-variant":"#3b456b","error-container":"#4c1014","tertiary":"#94a3b8","tertiary-fixed":"#dce1ff","primary-fixed":"#bbf7d0","on-tertiary-fixed":"#0e193d","on-primary-fixed-variant":"#14532d","inverse-surface":"#f1f5f9","surface-container-highest":"#1e293b","inverse-primary":"#15803d","secondary-container":"#14452f","on-secondary-fixed-variant":"#166534","primary":"#22c55e","outline":"#475569","background":"#0a0f18","on-tertiary-container":"#cbd5e1","surface-container":"#131c2e","primary-fixed-dim":"#86efac","on-surface-variant":"#94a3b8","error":"#f87171","primary-container":"#166534","secondary-fixed-dim":"#a7f3d0","secondary":"#10b981","surface-tint":"#22c55e","surface":"#0d1422","inverse-on-surface":"#1e293b","surface-container-lowest":"#080c14","on-secondary":"#ffffff","on-primary":"#052e16","on-surface":"#f8fafc","surface-variant":"#1e293b","surface-bright":"#1e2d44","surface-container-high":"#172338","outline-variant":"#334155","on-primary-container":"#dcfce7","on-tertiary":"#0f172a","on-secondary-fixed":"#052e16","surface-dim":"#0d1422","secondary-fixed":"#d1fae5","on-error-container":"#fee2e2","on-primary-fixed":"#052e16","tertiary-fixed-dim":"#cbd5e1","on-error":"#ffffff"},borderRadius:{DEFAULT:"0.25rem",lg:"0.5rem",xl:"0.75rem",full:"9999px"},fontFamily:{sans:["Inter","sans-serif"],mono:["JetBrains Mono","monospace"]}}}}</script></head><body class="bg-background font-sans text-on-surface antialiased flex min-h-screen">
<!-- Sidebar Navigation -->
@include('components.sidebar', ['currentRole' => 'admin'])
<!-- Main Wrapper -->
<div class="pl-64 flex flex-col flex-1 min-h-screen">
<!-- Clean Header -->
<header class="fixed top-0 left-64 right-0 h-16 bg-[#0b121e]/95 backdrop-blur-md z-40 border-b border-[#1c2a3f] flex items-center justify-between px-6">
<!-- Search Bar -->
<div class="flex items-center max-w-lg w-full">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-[19px]">search</span>
<input class="w-full bg-[#131d2e] border border-[#22334d] text-white placeholder:text-slate-400 pl-10 pr-4 py-2 rounded-lg text-xs font-normal focus:outline-none focus:border-emerald-500/60 transition-colors" placeholder="Search users, access requests, documents..." type="text">
</div>
</div>
<!-- Header Actions & Profile -->
<div class="flex items-center gap-4">
<!-- Status Pill -->
<div class="hidden sm:flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-950/60 border border-emerald-500/30 text-emerald-400 text-xs font-medium">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span>System Operational</span>
</div>
<!-- Notification Bell -->
<button class="relative p-2 text-slate-300 hover:text-white hover:bg-[#152033] rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500"></span>
</button>
<div class="h-6 w-px bg-[#1e2e46]"></div>
<!-- Admin Profile Info -->
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-emerald-700/40 border border-emerald-500/40 flex items-center justify-center text-emerald-300 font-semibold text-sm">
          RB
        </div>
<div class="flex flex-col text-left">
<span class="text-xs font-semibold text-white leading-tight">Engr. R. Bautista</span>
<span class="text-[11px] text-slate-400 leading-tight">MIS Administrator • Cavite State University</span>
</div>
</div>
</div>
</header>
<!-- Dashboard Body -->
<main class="w-full pt-16 bg-[#0a0f18] min-h-screen text-slate-200"><div class="flex flex-col w-full">
<!-- Content Canvas Container -->
<div class="p-6 md:p-8 space-y-6 max-w-[1560px] mx-auto w-full">
<!-- Breadcrumb & Top Context Banner -->
<div class="flex flex-wrap items-center justify-between gap-4"><div class="flex items-center gap-2">
  <a class="font-label-sm text-label-sm text-outline hover:text-on-surface uppercase tracking-wider transition-colors" href="{{ route('admin.preview.dashboard') }}">ADMIN CONSOLE</a>
  <span class="material-symbols-outlined text-outline text-[14px]">chevron_right</span>
  <a class="font-label-sm text-label-sm text-slate-300 hover:text-primary uppercase tracking-wider flex items-center gap-1 transition-colors" href="{{ route('admin.preview.access-levels') }}">
    <span class="material-symbols-outlined text-[16px]">folder</span>
    <span>DOCUMENT MANAGEMENT</span>
  </a>
  <span class="material-symbols-outlined text-outline text-[14px]">chevron_right</span>
  <span class="font-label-sm text-label-sm text-primary uppercase font-semibold tracking-wider flex items-center gap-1">
    <span>DEPOSIT &amp; CLASSIFY INSTITUTIONAL DOCUMENT</span>
  </span>
</div>
<div class="flex items-center gap-3">
  <div class="flex items-center gap-2 px-2.5 py-1 rounded bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm border border-[#1c2a3f]">
    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
    <span>ENCLAVE DISPATCH READY</span>
  </div>
  <div class="px-2.5 py-1 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase font-mono font-semibold">
    RA 10173 AUDIT ACTIVE
  </div>
</div></div>
<!-- Page Title Bar -->
<div class="relative bg-surface-container-low p-6 rounded-xl shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container-highest flex items-center justify-center text-primary shrink-0 shadow-inner">
<span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">security</span>
</div>
<div>
<div class="flex flex-wrap items-center gap-2.5">
<h1 class="font-headline-md text-headline-md text-on-surface">Deposit &amp; Classify Institutional Document</h1>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-highest text-primary font-mono tracking-wider font-semibold">
              v4.8-SEC / ENCRYPTED INGESTION
            </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mt-1 max-w-3xl">
            Upload authoritative university records, establish ledger metadata, designate access tier levels (Tier 1–4), and apply tamper-evident cryptographic sealing protocols under RA 10173 compliance.
          </p>
</div>
</div>
<div class="flex items-center gap-3 shrink-0">
<a class="px-3.5 py-2 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md transition-colors flex items-center gap-2" href="{{ route('admin.preview.access-levels') }}">
<span class="material-symbols-outlined text-[18px]">history</span>
<span>View Staged Batch (3)</span>
</a>
</div>
</div>
<!-- Main Two-Column Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
<!-- LEFT COLUMN: Form & Ingestion (65% / 8 Cols) -->
<div class="lg:col-span-8 space-y-6">
<!-- 1. Document Upload & Staging Zone -->
<div class="bg-surface-container-low p-6 rounded-xl space-y-5 shadow-sm"><div class="flex items-center justify-between flex-wrap gap-2">
  <div class="flex items-center gap-2.5">
    <span class="w-2.5 h-2.5 rounded-full bg-primary shadow-sm"></span>
    <h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">1. Primary Document Staging &amp; Intake</h2>
  </div>
  <div class="flex items-center gap-1.5 font-mono text-[11px]">
    <span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 border border-[#22334d]">PDF</span>
    <span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 border border-[#22334d]">DOCX</span>
    <span class="px-2 py-0.5 rounded bg-surface-container-highest text-slate-300 border border-[#22334d]">XLSX</span>
    <span class="px-2 py-0.5 rounded bg-surface-container text-primary font-semibold border border-emerald-500/30">MAX 100MB</span>
  </div>
</div>

<!-- Drag and Drop Active Card with refined border glow -->
<div class="relative bg-surface-container p-6 rounded-xl text-center cursor-pointer transition-all border border-dashed border-emerald-500/40 hover:border-emerald-500 hover:bg-[#131d2e] group">
  <input class="absolute inset-0 opacity-0 cursor-pointer" id="primaryDocInput" type="file">
  <div class="flex flex-col items-center justify-center gap-3">
    <div class="w-12 h-12 rounded-xl bg-surface-container-high group-hover:bg-primary group-hover:text-on-primary text-primary flex items-center justify-center transition-all shadow-inner border border-emerald-500/30">
      <span class="material-symbols-outlined text-[28px]">cloud_upload</span>
    </div>
    <div class="space-y-1">
      <p class="font-body-md text-body-md text-on-surface font-medium">
        Drop primary authoritative university record here, or <span class="text-primary font-semibold underline underline-offset-4">browse filesystem</span>
      </p>
      <p class="font-body-sm text-body-sm text-slate-400 font-mono flex items-center justify-center gap-1.5">
        <span class="material-symbols-outlined text-[14px] text-primary">lock</span>
        Client-side SHA-256 zero-knowledge digest pre-computed prior to enclave staging
      </p>
    </div>
  </div>
</div>

<!-- Staged Document Preview Pod with clear file info, integrity validation & actions -->
<div class="bg-surface-container-high border border-emerald-500/30 p-4 rounded-xl flex flex-col md:flex-row md:items-center justify-between gap-4 shadow-sm">
  <div class="flex items-center gap-3.5 min-w-0">
    <div class="w-11 h-11 rounded-lg bg-emerald-500/15 border border-emerald-500/30 flex items-center justify-center text-primary shrink-0">
      <span class="material-symbols-outlined text-[26px]">picture_as_pdf</span>
    </div>
    <div class="min-w-0 flex flex-col space-y-1">
      <div class="flex items-center gap-2 flex-wrap">
        <span class="font-label-lg text-label-lg text-white font-semibold truncate">
          BOR_Resolution_No_2026_094_Establishment_Cybersecurity_Enclave.pdf
        </span>
        <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-lowest text-primary font-mono shrink-0 border border-emerald-500/30 font-semibold">
          14.2 MB
        </span>
        <span class="px-2 py-0.5 rounded bg-emerald-950/60 border border-emerald-500/40 text-emerald-300 text-[10px] font-mono font-medium">
          STAGED
        </span>
      </div>
      <div class="flex items-center gap-2 text-xs flex-wrap">
        <span class="material-symbols-outlined text-primary text-[15px]">verified</span>
        <span class="font-label-sm text-label-sm text-emerald-400 font-mono font-medium">
          Integrity Validated (SHA-256)
        </span>
        <span class="text-outline text-body-sm">•</span>
        <span class="font-code-snippet text-code-snippet text-slate-400 truncate bg-surface-container-lowest px-1.5 py-0.5 rounded font-mono">
          7f3a0942e...88b209d
        </span>
      </div>
    </div>
  </div>
  <div class="flex items-center gap-2 shrink-0 self-end md:self-auto">
    <button class="px-2.5 py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-highest text-slate-300 hover:text-white transition-colors flex items-center gap-1.5 text-xs font-medium border border-[#22334d]" title="Inspect Hash" type="button">
      <span class="material-symbols-outlined text-[17px] text-primary">fingerprint</span>
      <span>Hash</span>
    </button>
    <button class="px-2.5 py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-highest text-slate-300 hover:text-white transition-colors flex items-center gap-1.5 text-xs font-medium border border-[#22334d]" title="Preview PDF" type="button">
      <span class="material-symbols-outlined text-[17px] text-slate-300">visibility</span>
      <span>Preview</span>
    </button>
    <button class="p-1.5 rounded-lg bg-error-container/30 hover:bg-error-container text-error transition-colors border border-rose-500/30" title="Remove File" type="button">
      <span class="material-symbols-outlined text-[18px]">delete</span>
    </button>
  </div>
</div>

<!-- Secondary Appendices Accordion / Add -->
<div class="flex items-center justify-between pt-1 flex-wrap gap-2">
  <a class="px-3.5 py-2 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md transition-colors flex items-center gap-2" href="{{ route('admin.preview.access-levels') }}">
<span class="material-symbols-outlined text-[18px]">history</span>
<span>View Staged Batch (3)</span>
</a>
  <span class="font-label-sm text-label-sm text-outline font-mono flex items-center gap-1">
    <span class="material-symbols-outlined text-[14px]">link</span>
    ARCHIVAL REPOSITORY LINKED
  </span>
</div></div>
<!-- 2. Institutional Metadata Form -->
<div class="bg-surface-container-low p-6 rounded-xl space-y-6 shadow-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2.5">
<span class="w-2 h-2 rounded-full bg-primary"></span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">2. Institutional Record Metadata</h2>
</div>
<span class="font-label-sm text-label-sm text-outline uppercase font-mono">RECORD SCHEMA v2.4</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<!-- Full Title (Span 2) -->
<div class="md:col-span-2 space-y-1.5">
<div class="flex justify-between items-center">
<label class="font-label-md text-label-md text-on-surface font-medium">
                  Document Title / Official Record Name <span class="text-error">*</span>
</label>
<span class="font-label-sm text-label-sm text-primary font-mono">ENCRYPTED INDEX</span>
</div>
<input id="depositDocumentTitle" name="title" class="w-full bg-surface-container text-on-surface font-body-md text-body-md px-3.5 py-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary shadow-inner" type="text" value="Board of Regents Resolution No. 2026-094: University Cybersecurity &amp; Cryptographic Infrastructure Charter">
</div>
<!-- Reference / Tracking Number -->
<div class="space-y-1.5">
<div class="flex justify-between items-center">
<label class="font-label-md text-label-md text-on-surface font-medium">
                  Institutional Tracking / Ledger No. <span class="text-error">*</span>
</label>
<span class="font-label-sm text-label-sm text-outline font-mono">BARCODE SYNCED</span>
</div>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">tag</span>
<input id="depositTrackingNumber" name="tracking_number" class="w-full bg-surface-container text-on-surface font-code-snippet text-code-snippet pl-10 pr-4 py-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary shadow-inner" type="text" value="CVSU-BOR-2026-0094-SEC">
</div>
</div>
<!-- Originating Office / College -->
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">
                Originating Office / College Unit <span class="text-error">*</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">account_balance</span>
<select class="w-full bg-surface-container text-on-surface font-body-md text-body-md pl-10 pr-9 py-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary appearance-none shadow-inner">
<option selected="">Office of the University President / Board of Regents Secretariat</option>
<option>Office of the University Registrar (OUR)</option>
<option>Management Information System Office (CvSU MIS)</option>
<option>Office of the Vice President for Academic Affairs (OVPAA)</option>
<option>Legal Counsel &amp; Data Protection Compliance Office</option>
<option>College of Engineering and Information Technology (CEIT)</option>
</select>
<span class="material-symbols-outlined absolute right-3 text-outline pointer-events-none text-[20px]">expand_more</span>
</div>
</div>
<!-- Document Sub-Format / Legal Nature -->
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">
                Document Classification Type <span class="text-error">*</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">category</span>
<select class="w-full bg-surface-container text-on-surface font-body-md text-body-md pl-10 pr-9 py-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary appearance-none shadow-inner">
<option selected="">Official Board Resolution &amp; Charter</option>
<option>Executive Memorandum Circular</option>
<option>Confidential Personnel Dossier</option>
<option>Financial Audit &amp; Asset Clearance</option>
<option>Curricular Accreditation Transcript Dossier</option>
<option>Intellectual Property &amp; Patent Deed</option>
</select>
<span class="material-symbols-outlined absolute right-3 text-outline pointer-events-none text-[20px]">expand_more</span>
</div>
</div>
<!-- Enclave Category Mapping -->
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium">
                Vault Cluster Mapping <span class="text-error">*</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">folder_special</span>
<select class="w-full bg-surface-container text-on-surface font-body-md text-body-md pl-10 pr-9 py-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary appearance-none shadow-inner">
<option selected="">Administrative &amp; Board Resolutions (CAT-ADM-01)</option>
<option>Academic &amp; Curriculum Governance (CAT-ACA-02)</option>
<option>Financial &amp; Budget Operations (CAT-FIN-03)</option>
<option>Personnel &amp; Faculty Dossiers (CAT-HR-04)</option>
<option>Research Ethics &amp; Patents (CAT-RES-05)</option>
</select>
<span class="material-symbols-outlined absolute right-3 text-outline pointer-events-none text-[20px]">expand_more</span>
</div>
</div>
<!-- Brief Description / Legal Mandate Summary (Span 2) -->
<div class="md:col-span-2 space-y-1.5">
<div class="flex justify-between items-center">
<label class="font-label-md text-label-md text-on-surface font-medium">
                  Document Summary, Context &amp; Statutory Authority
                </label>
<span class="font-label-sm text-label-sm text-outline font-mono">VISIBLE IN AUDIT TRAIL</span>
</div>
<textarea class="w-full bg-surface-container text-on-surface font-body-md text-body-md p-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary shadow-inner" rows="3">Approving the establishment of the Cavite State University Cryptographic Ingestion Node, Zero-Trust Architecture, and Tier-4 secure vault storage for sensitive governance documents, faculty clearances, and registrar master credentials in full compliance with the Republic Act No. 10173 (Data Privacy Act of 2012).</textarea>
</div>
</div>
</div>
<!-- 3. Security Clearance Tier Selection (Interactive 4-Tier Grid) -->
<div class="bg-surface-container-low p-6 rounded-xl space-y-5 shadow-sm">
<div class="flex flex-wrap items-center justify-between gap-2">
<div class="flex items-center gap-2.5">
<span class="w-2 h-2 rounded-full bg-primary"></span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">3. Access Clearance Tier Allocation</h2>
</div>
<span class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-surface-container-highest text-primary font-mono">
              ACTIVE SELECTION: TIER 4 (RESTRICTED)
            </span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<!-- Tier 1 -->
<label class="relative flex flex-col p-4 rounded-xl bg-surface-container cursor-pointer hover:bg-surface-container-high transition-colors">
<input class="sr-only" name="clearance_tier" type="radio" value="tier1">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md font-bold text-on-surface uppercase tracking-wider">Tier 1 • Public Release</span>
</div>
<span class="w-4 h-4 rounded-full bg-surface-container-highest flex items-center justify-center"></span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Unsealed general university circulars, press statements, and public catalogs. Requires no authorization handshake.
              </p>
<div class="mt-3 pt-3 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-outline font-mono">OPEN REPO</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Audit Level: Low</span>
</div>
</label>
<!-- Tier 2 -->
<label class="relative flex flex-col p-4 rounded-xl bg-surface-container cursor-pointer hover:bg-surface-container-high transition-colors">
<input class="sr-only" name="clearance_tier" type="radio" value="tier2">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md font-bold text-on-surface uppercase tracking-wider">Tier 2 • Internal Academic</span>
</div>
<span class="w-4 h-4 rounded-full bg-surface-container-highest flex items-center justify-center"></span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Authenticated CvSU faculty, instructors, and enrolled scholars with active Single Sign-On NetID credentials.
              </p>
<div class="mt-3 pt-3 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-outline font-mono">NETID AUTH</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Audit Level: Standard</span>
</div>
</label>
<!-- Tier 3 -->
<label class="relative flex flex-col p-4 rounded-xl bg-surface-container cursor-pointer hover:bg-surface-container-high transition-colors">
<input class="sr-only" name="clearance_tier" type="radio" value="tier3">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md font-bold text-on-surface uppercase tracking-wider">Tier 3 • Confidential</span>
</div>
<span class="w-4 h-4 rounded-full bg-surface-container-highest flex items-center justify-center"></span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Deans, Department Chairs, and Legal Officers. Requires time-bound clearance requests and ledger witness verification.
              </p>
<div class="mt-3 pt-3 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-outline font-mono">LEDGER WITNESS</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Audit Level: High</span>
</div>
</label>
<!-- Tier 4 [SELECTED] -->
<label class="relative flex flex-col p-4 rounded-xl bg-surface-container-high cursor-pointer shadow-md">
<input checked="" class="sr-only" name="clearance_tier" type="radio" value="tier4">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">lock</span>
<span class="font-label-md text-label-md font-bold text-primary uppercase tracking-wider">Tier 4 • Restricted Vault</span>
</div>
<div class="w-4 h-4 rounded-full bg-primary flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined text-[14px] font-bold">check</span>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface">
                Superadmin, University President &amp; Head Registrar exclusive enclave. HSM hardware FIDO2 token &amp; dual-seal required.
              </p>
<div class="mt-3 pt-3 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-primary font-mono font-semibold">HARDWARE HSM PINNED</span>
<span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-error-container text-error font-mono font-semibold">
                  MAX SECURITY
                </span>
</div>
</label>
</div>
</div>
</div>
<!-- RIGHT COLUMN: Security Enforcement, Cryptography & Sealing Actions (35% / 4 Cols) -->
<div class="lg:col-span-4 space-y-6">
<!-- 1. Security & Statutory Compliance Enforcement -->
<div class="bg-surface-container-low p-6 rounded-xl space-y-5 shadow-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[20px]">verified_user</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Compliance Controls</h2>
</div>
<span class="font-label-sm text-label-sm text-primary font-mono">LOCKDOWN</span>
</div>
<div class="space-y-4">
<!-- Toggle 1: RA 10173 -->
<div class="flex items-start justify-between gap-3 p-3 rounded-lg bg-surface-container">
<div class="space-y-1">
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md text-on-surface font-semibold">RA 10173 Compliance</span>
<span class="px-1.5 py-0.2 rounded bg-secondary-container text-on-secondary-container text-[10px] font-mono">DPA</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                  Mandatory cryptographic audit log written on every preview, unseal, or hash verification.
                </p>
</div>
<button class="w-11 h-6 bg-primary rounded-full relative shrink-0 transition-colors p-0.5 focus:outline-none" type="button">
<span class="block w-5 h-5 bg-on-primary rounded-full shadow-sm transform translate-x-5 transition-transform"></span>
</button>
</div>
<!-- Toggle 2: Dynamic Watermarking -->
<div class="flex items-start justify-between gap-3 p-3 rounded-lg bg-surface-container">
<div class="space-y-1">
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md text-on-surface font-semibold">Dynamic Watermarking</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                  Burn requester NetID, current UTC timestamp, and client IP address onto rendered pages.
                </p>
</div>
<button class="w-11 h-6 bg-primary rounded-full relative shrink-0 transition-colors p-0.5 focus:outline-none" type="button">
<span class="block w-5 h-5 bg-on-primary rounded-full shadow-sm transform translate-x-5 transition-transform"></span>
</button>
</div>
<!-- Toggle 3: Mandatory Dual-Approval -->
<div class="flex items-start justify-between gap-3 p-3 rounded-lg bg-surface-container">
<div class="space-y-1">
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md text-on-surface font-semibold">Dual-Officer Approval</span>
<span class="px-1.5 py-0.2 rounded bg-surface-container-highest text-primary text-[10px] font-mono">2-KEY</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                  Requires concurrent electronic signature from both MIS Superadmin and Registrar to unseal.
                </p>
</div>
<button class="w-11 h-6 bg-primary rounded-full relative shrink-0 transition-colors p-0.5 focus:outline-none" type="button">
<span class="block w-5 h-5 bg-on-primary rounded-full shadow-sm transform translate-x-5 transition-transform"></span>
</button>
</div>
<!-- Toggle 4: Download & Print Restriction -->
<div class="flex items-start justify-between gap-3 p-3 rounded-lg bg-surface-container">
<div class="space-y-1">
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md text-on-surface font-semibold">Airgap Export Lock</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                  Disable native download, external printing, and raw binary blob memory inspection.
                </p>
</div>
<button class="w-11 h-6 bg-primary rounded-full relative shrink-0 transition-colors p-0.5 focus:outline-none" type="button">
<span class="block w-5 h-5 bg-on-primary rounded-full shadow-sm transform translate-x-5 transition-transform"></span>
</button>
</div>
</div>
</div>
<!-- 2. Cryptographic Enclave Ledger Card -->
<div class="bg-surface-container-low p-6 rounded-xl space-y-4 shadow-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[20px]">memory</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Enclave Ledger Specs</h2>
</div>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-highest text-on-surface font-mono">FIPS 140-2 L3</span>
</div>
<!-- HSM Node Spec -->
<div class="p-3.5 rounded-lg bg-surface-container space-y-2">
<div class="flex justify-between items-center text-outline font-label-sm text-label-sm">
<span>TARGET HARDWARE SECURITY MODULE</span>
<span class="text-primary font-mono">SLOT #01</span>
</div>
<div class="flex items-center gap-2 font-label-lg text-label-lg text-on-surface">
<span class="material-symbols-outlined text-primary text-[20px]">hub</span>
<span class="font-mono">Gemalto SafeNet Luna 7.4 (Indang Main)</span>
</div>
</div>
<!-- Cipher Algorithm -->
<div class="grid grid-cols-2 gap-3">
<div class="p-3 rounded-lg bg-surface-container space-y-1">
<span class="font-label-sm text-label-sm text-outline block">CIPHER ALGORITHM</span>
<span class="font-code-snippet text-code-snippet text-on-surface font-semibold">AES-256-GCM</span>
</div>
<div class="p-3 rounded-lg bg-surface-container space-y-1">
<span class="font-label-sm text-label-sm text-outline block">WITNESS CHAIN</span>
<span class="font-code-snippet text-code-snippet text-primary font-semibold">SHA-256 LEDGER</span>
</div>
</div>
<!-- Calculated File Hash Display -->
<div class="p-3 rounded-lg bg-surface-container space-y-1.5">
<div class="flex justify-between items-center">
<span class="font-label-sm text-label-sm text-outline uppercase font-mono">Calculated Digest Hash</span>
<button class="text-primary hover:text-primary-fixed flex items-center gap-1 font-label-sm text-label-sm" title="Copy Hash" type="button">
<span class="material-symbols-outlined text-[14px]">content_copy</span>
<span>Copy</span>
</button>
</div>
<div class="p-2 rounded bg-surface-container-lowest font-code-snippet text-code-snippet text-on-surface break-all select-all">
              7f3a0942eb105a8f89e4c194bb827361a6873bc7019d3fbc9103e8788b209d
            </div>
</div>
<!-- Archival Retention Schedule -->
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface font-medium flex items-center justify-between">
<span>Statutory Retention Schedule</span>
<span class="font-label-sm text-label-sm text-outline font-mono">RA 9470</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">event_repeat</span>
<select class="w-full bg-surface-container text-on-surface font-body-sm text-body-sm pl-10 pr-8 py-2.5 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary appearance-none shadow-inner">
<option selected="">Permanent Institutional Archive (10+ Years / RA 9470)</option>
<option>Standard Academic Record Retention (7 Years)</option>
<option>Active Term Clearance (3 Years from issuance)</option>
<option>Immediate Sunset upon Board Invalidation</option>
</select>
<span class="material-symbols-outlined absolute right-3 text-outline pointer-events-none text-[18px]">expand_more</span>
</div>
</div>
</div>
<!-- 3. Final Submission & Sealing Action Pod -->
<div class="bg-surface-container-low p-6 rounded-xl space-y-4 shadow-sm">
<div class="space-y-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Commitment &amp; Enclave Sealing</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Once committed, this document is permanently time-stamped onto the CvSU institutional immutable audit ledger.
            </p>
</div>
<div class="space-y-3 pt-2">
<!-- Primary High-Impact CTA Button -->
<button type="button" onclick="openSealReviewModal()" class="w-full py-3 px-4 rounded-lg bg-primary hover:bg-primary-fixed text-on-primary font-label-lg text-label-lg font-bold shadow-md flex items-center justify-center gap-2.5 transition-colors cursor-pointer">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">lock</span>
<span>Seal Document &amp; Commit to Enclave</span>
</button>
<!-- Secondary Staging Action -->
<a class="px-3.5 py-2 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md transition-colors flex items-center gap-2" href="{{ route('admin.preview.access-levels') }}">
<span class="material-symbols-outlined text-[18px]">history</span>
<span>View Staged Batch (3)</span>
</a>
<!-- Cancel Link -->
<div class="text-center pt-1"><a class="font-label-md text-label-md text-slate-400 hover:text-primary transition-colors inline-flex items-center gap-1.5 font-medium" href="{{ route('admin.preview.access-levels') }}">
  <span class="material-symbols-outlined text-[16px]">arrow_back</span>
  <span>Cancel &amp; Return to Document Management</span>
</a></div>
</div>
</div>
</div>
</div>
<!-- Institutional Cryptographic Seal / Verification Assurance Footer Bar -->
<div class="bg-surface-container-low p-4 rounded-xl flex flex-col md:flex-row items-center justify-between gap-4 text-outline font-label-sm text-label-sm">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-primary font-bold">
          CvSU
        </div>
<div class="flex flex-col">
<span class="text-on-surface font-medium">Cavite State University • Management Information System Office</span>
<span>DocuSecure Sovereign Cryptographic Archive Platform • RA 10173 Compliance Standard</span>
</div>
</div>
<div class="flex items-center gap-4">
<span class="font-mono">HSM: ONLINE (LATENCY 1.2ms)</span>
<span>•</span>
<span class="font-mono">SESSION: OPERATOR-RB-0924</span>
<span>•</span>
<span class="text-primary font-semibold flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-primary"></span>
          ENCRYPTED TLS 1.3
        </span>
</div>
</div>
</div>
</div>
<div id="seal-review-modal" class="fixed inset-0 z-[60] hidden items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="seal-review-title">
  <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm" onclick="closeSealReviewModal()"></div>
  <div class="relative w-full max-w-lg overflow-hidden rounded-xl border border-emerald-500/30 bg-[#101827] text-slate-100 shadow-2xl">
    <div class="h-1.5 bg-gradient-to-r from-emerald-500 via-[#eabf55] to-[#173153]"></div>
    <div class="p-6">
      <h2 id="seal-review-title" class="text-lg font-bold text-white">Review Document Seal</h2>
      <p class="mt-2 text-sm leading-6 text-slate-300">Confirm the staged file before cryptographic commitment.</p>
      <div class="mt-4 rounded-lg border border-white/10 bg-white/[0.03] p-4">
        <p class="text-xs font-mono text-slate-400">DOCUMENT</p>
        <p class="mt-1 text-sm font-semibold text-white">BOR_Resolution_No_2026_094_Establishment_Cybersecurity_Enclave.pdf</p>
        <p class="mt-3 text-xs font-mono text-emerald-300">SHA-256: 7f3a0942e...88b209d</p>
      </div>
      <div class="mt-5 flex gap-3">
        <button type="button" onclick="closeSealReviewModal()" class="min-h-11 flex-1 rounded-lg border border-white/10 px-4 text-sm font-semibold text-slate-300 hover:bg-white/5">Cancel</button>
        <button type="button" onclick="confirmDocumentSeal()" class="min-h-11 flex-1 rounded-lg bg-emerald-700 px-4 text-sm font-bold text-white hover:bg-emerald-600">Seal & Commit</button>
      </div>
    </div>
  </div>
</div>
<div id="seal-success-modal" class="fixed inset-0 z-[60] hidden items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="seal-success-title">
  <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm"></div>
  <div class="relative w-full max-w-md overflow-hidden rounded-xl border border-emerald-500/30 bg-[#101827] text-slate-100 text-center shadow-2xl">
    <div class="h-1.5 bg-gradient-to-r from-emerald-500 via-[#eabf55] to-[#173153]"></div>
    <div class="p-6">
      <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full border border-emerald-400/40 bg-emerald-500/15 text-emerald-300">
        <span class="material-symbols-outlined text-[26px]">verified</span>
      </div>
      <h2 id="seal-success-title" class="mt-4 text-lg font-bold text-white">Document Committed</h2>
      <p class="mt-2 text-sm leading-6 text-slate-300">The staged document was sealed and recorded in the demo enclave receipt.</p>
      <button type="button" onclick="closeSealSuccessModal()" class="mt-5 min-h-11 w-full rounded-lg bg-emerald-700 px-4 text-sm font-bold text-white hover:bg-emerald-600">Done</button>
    </div>
  </div>
</div>
<script>
  function openSealReviewModal() {
    const modal = document.getElementById('seal-review-modal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
  }
  function closeSealReviewModal() {
    const modal = document.getElementById('seal-review-modal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
  }
  async function confirmDocumentSeal() {
    closeSealReviewModal();
    const fileInput = document.getElementById('primaryDocInput');
    if (!fileInput || !fileInput.files.length) {
      return;
    }

    const selectedTier = document.querySelector('input[name="clearance_tier"]:checked');
    const formData = new FormData();
    formData.append('file', fileInput.files[0]);
    formData.append('title', document.getElementById('depositDocumentTitle')?.value || 'Institutional Document');
    formData.append('tracking_number', document.getElementById('depositTrackingNumber')?.value || `CVSU-${Date.now()}`);
    formData.append('access_tier', selectedTier?.value || 'tier4');
    formData.append('_token', '{{ csrf_token() }}');

    try {
      const response = await fetch('{{ route("admin.preview.deposit-file.store") }}', {
        method: 'POST',
        body: formData,
        headers: { 'Accept': 'application/json' }
      });
      if (!response.ok) {
        return;
      }
    } catch (_) {
      return;
    }

    const modal = document.getElementById('seal-success-modal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
  }
  function closeSealSuccessModal() {
    const modal = document.getElementById('seal-success-modal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
  }
  // Dynamic radio card selection interaction
  document.querySelectorAll('input[name="clearance_tier"]').forEach(radio => {
    radio.addEventListener('change', (e) => {
      document.querySelectorAll('input[name="clearance_tier"]').forEach(r => {
        const card = r.closest('label');
        if (card) {
          card.classList.remove('bg-surface-container-high', 'shadow-md');
          card.classList.add('bg-surface-container');
          const title = card.querySelector('span.font-bold');
          if (title) {
            title.classList.remove('text-primary');
            title.classList.add('text-on-surface');
          }
          const circle = card.querySelector('.w-4.h-4');
          if (circle) {
            circle.className = 'w-4 h-4 rounded-full bg-surface-container-highest flex items-center justify-center';
            circle.innerHTML = '';
          }
        }
      });
      const selected = e.target.closest('label');
      if (selected) {
        selected.classList.remove('bg-surface-container');
        selected.classList.add('bg-surface-container-high', 'shadow-md');
        const title = selected.querySelector('span.font-bold');
        if (title) {
          title.classList.remove('text-on-surface');
          title.classList.add('text-primary');
        }
        const circle = selected.querySelector('.w-4.h-4');
        if (circle) {
          circle.className = 'w-4 h-4 rounded-full bg-primary flex items-center justify-center text-on-primary';
          circle.innerHTML = '<span class="material-symbols-outlined text-[14px] font-bold">check</span>';
        }
      }
    });
  });

  // Toggle buttons micro-interactions
  document.querySelectorAll('button[type="button"]').forEach(btn => {
    const knob = btn.querySelector('span.block.w-5.h-5');
    if (knob && btn.classList.contains('w-11')) {
      btn.addEventListener('click', () => {
        const isChecked = knob.classList.contains('translate-x-5');
        if (isChecked) {
          knob.classList.remove('translate-x-5');
          knob.classList.add('translate-x-0.5');
          btn.classList.remove('bg-primary');
          btn.classList.add('bg-surface-container-highest');
        } else {
          knob.classList.remove('translate-x-0.5');
          knob.classList.add('translate-x-5');
          btn.classList.remove('bg-surface-container-highest');
          btn.classList.add('bg-primary');
        }
      });
    }
  });
</script></main>
</div>




</body></html>