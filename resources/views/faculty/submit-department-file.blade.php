<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_dashboard" name="shell-type"/>
    <title>DocuSecure - Deposit &amp; Seal Department Record</title>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-darkest": "#090d15",
                        "surface-dark": "#0c121d",
                        "surface-card": "#111a28",
                        "surface-card-hover": "#162235",
                        "surface-elevated": "#1c2b42",
                        "border-subtle": "rgba(255, 255, 255, 0.08)",
                        "border-medium": "rgba(255, 255, 255, 0.15)",
                        "primary": "#10b981",
                        "primary-dark": "#059669",
                        "primary-light": "#34d399",
                        "accent-gold": "#eabf55",
                        "accent-blue": "#38bdf8",
                        "on-surface": "#f1f5f9",
                        "on-surface-muted": "#94a3b8",
                        "on-surface-subtle": "#64748b"
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
                background-color: #0c121d;
                color: #f1f5f9;
                font-family: 'Inter', sans-serif;
            }

            ::-webkit-scrollbar {
                width: 6px;
                height: 6px;
            }

            ::-webkit-scrollbar-track {
                background: #090d15;
            }

            ::-webkit-scrollbar-thumb {
                background: #1c2b42;
                border-radius: 3px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #273e5f;
            }
        }
    </style>
</head>

<body class="bg-surface-dark font-sans text-on-surface antialiased min-h-screen">

<!-- ==================== SIDEBAR ==================== -->
@include('components.sidebar', ['currentRole' => 'faculty'])

<!-- ==================== MAIN CONTENT WRAPPER ==================== -->
<div class="pl-64 flex flex-col min-h-screen">

    <!-- Top Navigation Bar -->
    <header class="fixed top-0 left-64 right-0 h-16 bg-[#0c121d]/90 backdrop-blur-xl z-40 flex items-center justify-between px-8 border-b border-border-subtle shadow-sm">

        <div class="flex items-center gap-6">
            <div class="flex items-center gap-2.5">
                <span class="material-symbols-outlined text-emerald-400 text-[20px]">shield</span>

                <div class="flex items-center gap-2 font-mono text-xs">
                    <span class="text-slate-400">CEIT Enclave</span>
                    <span class="text-slate-600">/</span>
                    <a href="{{ route('faculty.preview.department-records') }}" class="text-slate-400 hover:text-white">Department Records</a>
                    <span class="text-slate-600">/</span>
                    <span class="text-emerald-400 font-semibold">Submit Department File</span>
                </div>

                <span class="ml-2 text-[10px] font-mono px-2 py-0.5 rounded bg-emerald-500/15 text-emerald-300 border border-emerald-500/30 font-semibold tracking-wide">
                    NODE-04 ONLINE
                </span>
            </div>
        </div>

        <div class="flex items-center gap-5">

            <div class="hidden md:flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-card border border-border-subtle">
                <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-[11px] font-mono text-slate-300">CvSU Cloud Node: Active • 256-bit Encrypted</span>
            </div>

            <div class="relative flex items-center">
                <button
                    aria-label="Notifications"
                    class="p-2 text-slate-400 hover:text-white transition-colors rounded-lg bg-surface-card border border-border-subtle hover:bg-surface-card-hover flex items-center justify-center"
                    type="button"
                >
                    <span class="material-symbols-outlined text-[19px]">notifications</span>
                </button>
                <span class="absolute top-1.5 right-1.5 h-2 w-2 bg-rose-500 rounded-full ring-2 ring-[#0c121d]"></span>
            </div>

            <div class="flex items-center gap-3 pl-2 border-l border-border-subtle">
                <div class="flex flex-col items-end">
                    <span class="text-xs font-semibold text-white">Prof. Juan Dela Cruz</span>
                    <span class="text-[11px] text-emerald-400 font-mono">CEIT Faculty • Tier 3 Clearance</span>
                </div>

                <div class="w-9 h-9 rounded-full bg-emerald-500/20 border border-emerald-500/40 flex items-center justify-center text-emerald-300 font-bold text-sm shadow-inner">
                    JD
                </div>
            </div>
        </div>
    </header>

    <!-- Main Body Area -->
    <main class="pt-24 px-8 pb-16 flex-1 max-w-[1600px] w-full mx-auto">

        <!-- Telemetry Status Ribbon -->
        <div class="w-full bg-surface-card border border-border-subtle rounded-xl px-5 py-3 mb-6 flex flex-wrap items-center justify-between gap-4 shadow-md">

            <div class="flex items-center gap-3">
                <div class="h-9 w-9 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 flex-shrink-0">
                    <span class="material-symbols-outlined text-[20px]">enhanced_encryption</span>
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <span class="text-xs font-mono font-bold text-white tracking-wide uppercase">SECURE INTAKE TERMINAL // CEIT-SUB-VAULT-04</span>
                        <span class="px-2 py-0.5 rounded-full bg-emerald-500/10 text-emerald-300 text-[10px] font-mono border border-emerald-500/20 font-semibold">FIPS 140-3 COMPLIANT</span>
                    </div>
                    <span class="text-xs text-slate-400 mt-0.5">Client-side zero-trust record payload hashing prior to CvSU Cloud Node replication.</span>
                </div>
            </div>

            <div class="flex items-center gap-5 text-xs font-mono">
                <div class="hidden xl:flex items-center gap-1.5">
                    <span class="text-slate-400">CIPHER:</span>
                    <span class="text-emerald-400 font-semibold">AES-GCM-256</span>
                </div>

                <div class="hidden lg:flex items-center gap-1.5">
                    <span class="text-slate-400">SESSION KEY:</span>
                    <span class="text-slate-300 bg-surface-darkest px-2 py-0.5 rounded border border-border-subtle">0x9A4F...71EC</span>
                </div>

                <div class="flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-emerald-500/10 text-emerald-300 border border-emerald-500/20">
                    <span class="material-symbols-outlined text-[15px]">verified</span>
                    <span class="font-semibold">Sub-Custodian Authorized</span>
                </div>
            </div>
        </div>

        <!-- Page Hero Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8 bg-surface-card/60 p-6 rounded-2xl border border-border-subtle">

            <div class="flex items-center gap-4">
                <div class="p-2 rounded-xl bg-surface-darkest border border-border-subtle flex items-center justify-center flex-shrink-0 shadow-lg">
                    <img
                        alt="CvSU Seal"
                        class="w-11 h-11 object-contain"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsjajJy1vubsTKTrxx9Sel0EMh2o_6E_PWpmcxRjyjmo7rA5w9S0-R0nLac0RBMTN27YQ62Sc-7PK1r9iG6tJ87-mRCBjMvOaEuF6NTs1HxhZv19KPlFQktysf6XBZa0CgLibwAYt1SG35AXChZXGFguADdS3rzSq-NdKeBpkBgp_QvLM6OjG-fflJt-hds5Rw_3O5k6SdiF0Jc51RdQ9hZd71_9Y08-XUlO42B8SnHE5WCP12UZNh"
                    />
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center gap-2.5">
                        <span class="text-[11px] font-mono uppercase tracking-widest text-emerald-400 font-bold">Cavite State University • CEIT Custodial Gate</span>
                        <span class="h-1.5 w-1.5 rounded-full bg-slate-500"></span>
                        <span class="text-[11px] font-mono text-slate-400">ISO 9001:2015 &amp; RA 10173 Audit Standard</span>
                    </div>

                    <h1 class="text-2xl lg:text-3xl font-extrabold text-white tracking-tight mt-1">
                        Deposit &amp; Seal Department Record
                    </h1>

                    <p class="text-xs sm:text-sm text-slate-400 mt-1 max-w-3xl leading-relaxed">
                        Direct cryptographic submission terminal for College of Engineering and Information Technology official documentation, curriculum packages, and accreditation assets.
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-3 self-start md:self-center">
                <div class="px-4 py-2 rounded-lg bg-surface-darkest border border-border-subtle flex flex-col items-end">
                    <span class="text-[10px] uppercase font-mono text-slate-400">Ledger Block Height</span>
                    <span class="font-mono text-xs text-emerald-400 font-bold">#CEIT-891,241</span>
                </div>

                <button class="px-3.5 py-2.5 rounded-lg bg-surface-elevated hover:bg-surface-card-hover text-slate-200 border border-border-subtle transition-all flex items-center gap-2 text-xs font-semibold" type="button">
                    <span class="material-symbols-outlined text-[17px] text-emerald-400">history</span>
                    <span>Intake Audit Log</span>
                </button>
            </div>
        </div>

        <!-- Multi-Step Pipeline Indicator -->
        <div class="w-full bg-surface-card rounded-xl p-4 mb-8 border border-border-subtle shadow-md">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                <div class="flex items-center gap-3 p-3 rounded-lg bg-surface-elevated border border-emerald-500/30 shadow-sm relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-emerald-400"></div>
                    <div class="w-8 h-8 rounded-lg bg-emerald-500 text-slate-950 flex items-center justify-center text-xs font-mono font-bold flex-shrink-0">01</div>
                    <div class="flex flex-col min-w-0">
                        <span class="text-xs font-bold text-white truncate">Ingestion &amp; Metadata</span>
                        <span class="text-[11px] text-emerald-400 font-mono truncate">Active Payload Staging</span>
                    </div>
                    <span class="material-symbols-outlined ml-auto text-emerald-400 text-[18px]">radio_button_checked</span>
                </div>

                <div class="flex items-center gap-3 p-3 rounded-lg bg-surface-darkest/60 border border-border-subtle">
                    <div class="w-8 h-8 rounded-lg bg-surface-card border border-border-subtle text-slate-400 flex items-center justify-center text-xs font-mono font-semibold flex-shrink-0">02</div>
                    <div class="flex flex-col min-w-0">
                        <span class="text-xs font-semibold text-slate-300 truncate">Access Tier &amp; Retention</span>
                        <span class="text-[11px] text-slate-500 font-mono truncate">Tier 2/3 Classification</span>
                    </div>
                    <span class="material-symbols-outlined ml-auto text-slate-600 text-[18px]">arrow_forward</span>
                </div>

                <div class="flex items-center gap-3 p-3 rounded-lg bg-surface-darkest/60 border border-border-subtle">
                    <div class="w-8 h-8 rounded-lg bg-surface-card border border-border-subtle text-slate-400 flex items-center justify-center text-xs font-mono font-semibold flex-shrink-0">03</div>
                    <div class="flex flex-col min-w-0">
                        <span class="text-xs font-semibold text-slate-300 truncate">Cryptographic Attestation</span>
                        <span class="text-[11px] text-slate-500 font-mono truncate">FIDO2 PIN &amp; SHA-256 Commit</span>
                    </div>
                    <span class="material-symbols-outlined ml-auto text-slate-600 text-[18px]">lock</span>
                </div>

            </div>
        </div>

        <!-- Main Form Workspace Split -->
        <form id="departmentUploadForm" action="{{ route('faculty.submit-department-file') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            @csrf

            <!-- LEFT COLUMN -->
            <div class="lg:col-span-8 flex flex-col gap-6">

                <!-- Section 1 -->
                <div class="bg-surface-card border border-border-subtle rounded-xl p-6 shadow-md flex flex-col gap-5">

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-emerald-400 text-[22px]">cloud_upload</span>
                            <h2 class="text-base font-bold text-white tracking-tight">1. Department Payload Intake</h2>
                        </div>

                        <span class="text-[10px] font-mono font-semibold text-emerald-400 uppercase bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded">
                            Stage: Staged in Local RAM
                        </span>
                    </div>

                    <!-- Drag & Drop Box -->
                    <div
                        id="dropZone"
                        class="group relative rounded-xl border-2 border-dashed border-border-subtle bg-surface-darkest/70 p-8 flex flex-col items-center justify-center text-center cursor-pointer transition-all hover:border-emerald-500/50 hover:bg-surface-darkest"
                    >
                        <input
                            class="absolute inset-0 opacity-0 cursor-pointer w-full h-full"
                            id="recordFileInput"
                            name="department_file"
                            accept=".pdf,.doc,.docx,.xls,.xlsx,.zip"
                            type="file"
                        />

                        <div class="w-14 h-14 rounded-2xl bg-surface-card border border-border-subtle flex items-center justify-center text-emerald-400 group-hover:scale-105 group-hover:border-emerald-500/40 transition-all mb-3 shadow-md">
                            <span class="material-symbols-outlined text-[30px]">folder_zip</span>
                        </div>

                        <h3 id="fileSelectionLabel" class="text-sm font-semibold text-white">
                            Drop department payload here, or browse files
                        </h3>

                        <p class="text-xs text-slate-400 mt-1">
                            Accepted file types:
                            <span class="font-mono text-emerald-400">PDF, DOCX, XLSX, ZIP</span>
                            up to 150 MB.
                        </p>

                        <div class="flex items-center gap-1.5 mt-4 px-3 py-1.5 rounded-full bg-surface-card border border-emerald-500/20 text-emerald-300 text-[11px] font-mono">
                            <span class="material-symbols-outlined text-[15px] text-emerald-400">lock</span>
                            <span>Pre-upload AES-256-GCM client-side encryption active</span>
                        </div>
                    </div>

                    <!-- Selected File Details -->
                    <div id="selectedFileCard" class="hidden bg-surface-darkest/90 border border-emerald-500/30 rounded-xl p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-sm">

                        <div class="flex items-center gap-3.5 min-w-0">
                            <div class="w-10 h-10 rounded-lg bg-rose-500/10 border border-rose-500/20 flex items-center justify-center text-rose-400 flex-shrink-0">
                                <span class="material-symbols-outlined text-[24px]">description</span>
                            </div>

                            <div class="flex flex-col min-w-0">
                                <span id="selectedFileName" class="text-xs font-semibold text-white break-all"></span>
                                <span id="selectedFileSize" class="text-[11px] font-mono text-slate-400 mt-0.5"></span>
                            </div>
                        </div>

                        <button
                            id="removeSelectedFileBtn"
                            class="p-2 rounded-lg bg-surface-card hover:bg-rose-500/10 text-slate-400 hover:text-rose-400 border border-border-subtle transition-colors"
                            title="Remove file"
                            type="button"
                        >
                            <span class="material-symbols-outlined text-[18px]">delete</span>
                        </button>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="bg-surface-card border border-border-subtle rounded-xl p-6 shadow-md flex flex-col gap-5">

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-emerald-400 text-[22px]">assignment</span>
                            <h2 class="text-base font-bold text-white tracking-tight">2. Institutional Record Classification &amp; Governance</h2>
                        </div>

                        <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-surface-darkest border border-border-subtle text-emerald-400 flex items-center gap-1">
                            <span class="material-symbols-outlined text-[13px]">lock</span>
                            256-BIT ENCRYPTED
                        </span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <div class="md:col-span-2 flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-slate-200 flex items-center justify-between" for="documentTitle">
                                <span>Official Document Title *</span>
                                <span class="text-[11px] text-slate-400 font-normal">Fields marked * are mandatory</span>
                            </label>

                            <input
                                class="w-full px-4 py-2.5 rounded-lg bg-surface-darkest border border-border-subtle text-slate-100 text-xs font-medium focus:border-emerald-500/60 focus:outline-none transition-colors"
                                id="documentTitle"
                                name="document_title"
                                required
                                type="text"
                                placeholder="Enter the official document title"
                            />
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-slate-200">Academic Unit / Originating Dept *</label>

                            <div class="relative">
                                <input
                                    class="w-full px-4 py-2.5 rounded-lg bg-surface-darkest/70 border border-border-subtle text-slate-400 text-xs font-medium cursor-not-allowed pr-9"
                                    readonly
                                    type="text"
                                    value="CEIT - Dept. of Information Technology"
                                />

                                <span class="material-symbols-outlined absolute right-3 top-2.5 text-emerald-400 text-[18px]">lock</span>
                            </div>

                            <span class="text-[10px] text-slate-400">Locked to authenticated faculty enclave (Prof. Juan Dela Cruz).</span>
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-slate-200" for="documentCategory">Classification Category *</label>

                            <div class="relative">
                                <select
                                    id="documentCategory"
                                    name="document_category"
                                    class="w-full px-4 py-2.5 rounded-lg bg-surface-darkest border border-border-subtle text-slate-200 text-xs font-medium focus:border-emerald-500/60 focus:outline-none appearance-none cursor-pointer pr-10"
                                >
                                    <option selected>Curriculum &amp; Syllabi Packages</option>
                                    <option>CHED &amp; PACUCOA Accreditation Evidence</option>
                                    <option>CEIT Departmental Council Resolutions</option>
                                    <option>Faculty Evaluation &amp; Peer Reviews (Restricted)</option>
                                    <option>Laboratory Safety &amp; Asset Inventory Dossiers</option>
                                    <option>Senior Thesis &amp; Capstone Defense Repository</option>
                                </select>

                                <span class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 text-[18px] pointer-events-none">expand_more</span>
                            </div>
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-slate-200 flex items-center gap-1.5" for="accessTier">
                                <span>Vault Sensitivity Tier *</span>
                                <span class="material-symbols-outlined text-slate-400 text-[15px] cursor-help" title="Dual-signoff requires Dean approval for release">info</span>
                            </label>

                            <div class="relative">
                                <select
                                    id="accessTier"
                                    name="access_tier"
                                    required
                                    class="w-full px-4 py-2.5 rounded-lg bg-surface-darkest border border-border-subtle text-slate-200 text-xs font-medium focus:border-emerald-500/60 focus:outline-none appearance-none cursor-pointer pr-10"
                                >
                                    <option value="" disabled selected>Select requested access tier</option>
                                    <option value="2">Tier 2 - Departmental Authorized (All CEIT Faculty)</option>
                                    <option value="3">Tier 3 - Sub-Custodian Restricted (Dual-Signoff)</option>
                                    <option value="4">Tier 4 - Confidential Executive (Dean &amp; Registrar Only)</option>
                                </select>

                                <span class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 text-[18px] pointer-events-none">expand_more</span>
                            </div>
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-slate-200" for="retentionPolicy">Retention &amp; Lifecycle Policy *</label>

                            <div class="relative">
                                <select
                                    id="retentionPolicy"
                                    name="retention_policy"
                                    class="w-full px-4 py-2.5 rounded-lg bg-surface-darkest border border-border-subtle text-slate-200 text-xs font-medium focus:border-emerald-500/60 focus:outline-none appearance-none cursor-pointer pr-10"
                                >
                                    <option value="3-academic-years" selected>3 Academic Years (Accreditation Cycle 2029)</option>
                                    <option value="5-academic-years">5 Academic Years (CHED Compliance Mandate)</option>
                                    <option value="permanent">Permanent University Archive (Sovereign Vault)</option>
                                </select>

                                <span class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 text-[18px] pointer-events-none">expand_more</span>
                            </div>
                        </div>

                        <div class="md:col-span-2 flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-slate-200">Departmental Metadata Keywords &amp; Tags</label>

                            <div class="flex flex-wrap items-center gap-2 p-2.5 rounded-lg bg-surface-darkest border border-border-subtle">
                                <span class="px-2.5 py-1 rounded bg-surface-card border border-border-subtle text-slate-200 font-mono text-[11px] flex items-center gap-1.5">
                                    #CPE-BS-2026
                                    <span class="material-symbols-outlined text-[13px] text-slate-400">close</span>
                                </span>

                                <span class="px-2.5 py-1 rounded bg-surface-card border border-border-subtle text-slate-200 font-mono text-[11px] flex items-center gap-1.5">
                                    #OBE-SYLLABUS
                                    <span class="material-symbols-outlined text-[13px] text-slate-400">close</span>
                                </span>

                                <span class="px-2.5 py-1 rounded bg-surface-card border border-border-subtle text-slate-200 font-mono text-[11px] flex items-center gap-1.5">
                                    #ACCREDITATION-LEVEL-IV
                                    <span class="material-symbols-outlined text-[13px] text-slate-400">close</span>
                                </span>

                                <div class="flex items-center gap-1 text-slate-400 text-xs px-2">
                                    <span class="material-symbols-outlined text-[15px]">add</span>
                                    <input
                                        class="bg-transparent text-slate-200 placeholder:text-slate-500 font-mono text-[11px] focus:outline-none min-w-[120px]"
                                        placeholder="Add tag + Enter..."
                                        type="text"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="bg-surface-card border border-border-subtle rounded-xl p-6 shadow-md flex flex-col gap-5">

                    <div class="flex items-center gap-2.5">
                        <span class="material-symbols-outlined text-emerald-400 text-[22px]">verified_user</span>
                        <h2 class="text-base font-bold text-white tracking-tight">3. Sub-Custodian Digital Attestation &amp; Passkey</h2>
                    </div>

                    <label class="flex items-start gap-3 p-4 rounded-xl bg-surface-darkest border border-border-subtle cursor-pointer hover:border-emerald-500/40 transition-colors">
                        <input
                            id="attestationCheckbox"
                            checked
                            class="mt-1 w-4 h-4 rounded text-emerald-500 bg-surface-card border-border-subtle focus:ring-emerald-500 focus:ring-offset-0 cursor-pointer"
                            type="checkbox"
                        />

                        <div class="flex flex-col">
                            <span class="text-xs font-semibold text-white">
                                Legal Attestation under Cavite State University Privacy Charter
                            </span>

                            <span class="text-[11px] text-slate-400 mt-1 leading-relaxed">
                                I certify as an authorized CEIT Sub-Custodian (Prof. Juan Dela Cruz) that this document conforms to CHED guidelines and contains no unredacted student PII without university legal counsel clearance.
                            </span>
                        </div>
                    </label>

                    <!-- Hardware Key -->
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center bg-surface-darkest border border-border-subtle p-4 rounded-xl">

                        <div class="md:col-span-7 flex items-center gap-3.5">
                            <div class="w-10 h-10 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 flex-shrink-0">
                                <span class="material-symbols-outlined text-[22px]">key</span>
                            </div>

                            <div class="flex flex-col">
                                <span class="text-xs font-semibold text-white">FIDO2 / YubiKey Hardware Authentication</span>
                                <span class="text-[11px] text-slate-400">Tap your CEIT security key or enter your 6-digit Master PIN.</span>
                            </div>
                        </div>

                        <div class="md:col-span-5 flex items-center gap-2">
                            <div class="relative w-full">
                                <input
                                    id="masterPin"
                                    class="w-full tracking-[0.3em] text-center px-4 py-2 rounded-lg bg-surface-card border border-border-subtle text-emerald-400 font-mono text-sm focus:outline-none focus:border-emerald-500/50"
                                    maxlength="6"
                                    minlength="6"
                                    inputmode="numeric"
                                    pattern="[0-9]{6}"
                                    type="password"
                                    placeholder="••••••"
                                />

                                <span class="material-symbols-outlined absolute right-2.5 top-2.5 text-emerald-400 text-[18px]">fingerprint</span>
                            </div>

                            <span class="px-2.5 py-1.5 rounded bg-emerald-500/15 border border-emerald-500/30 text-emerald-300 font-mono text-[10px] font-bold whitespace-nowrap">
                                KEY-OK
                            </span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-3 border-t border-border-subtle">

                        <button
                            class="w-full sm:w-auto px-4 py-2.5 rounded-lg bg-surface-darkest hover:bg-surface-elevated text-slate-300 hover:text-white border border-border-subtle transition-colors flex items-center justify-center gap-2 text-xs font-semibold"
                            type="button"
                            id="discardPayloadBtn"
                        >
                            <span class="material-symbols-outlined text-[16px]">close</span>
                            <span>Cancel &amp; Clear Payload</span>
                        </button>

                        <div class="flex items-center gap-3 w-full sm:w-auto">

                            <button
                                class="w-full sm:w-auto px-4 py-2.5 rounded-lg bg-surface-elevated hover:bg-surface-card-hover text-slate-200 border border-border-subtle transition-colors text-xs font-semibold"
                                type="button"
                                id="saveDraftBtn"
                            >
                                Save Draft
                            </button>

                            <button
                                class="w-full sm:w-auto px-6 py-2.5 rounded-lg bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-xs shadow-lg shadow-emerald-500/20 transition-all flex items-center justify-center gap-2"
                                id="commitEnclaveBtn"
                                type="button"
                            >
                                <span class="material-symbols-outlined text-[18px]">lock</span>
                                <span>Sign &amp; Commit to Enclave →</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT RAIL COLUMN -->
            <div class="lg:col-span-4 flex flex-col gap-6">

                <!-- Card 1 -->
                <div class="bg-surface-card border border-border-subtle rounded-xl p-5 shadow-md flex flex-col gap-4">

                    <div class="flex items-center gap-2 border-b border-border-subtle pb-3">
                        <span class="material-symbols-outlined text-amber-400 text-[20px]">policy</span>
                        <h3 class="text-sm font-bold text-white tracking-tight">Sub-Custodian Ingestion Rules</h3>
                    </div>

                    <p class="text-xs text-slate-400 leading-relaxed">
                        Pursuant to <span class="text-slate-200 font-semibold">CvSU Memorandum Circular No. 24-B</span>, all materials uploaded to the CEIT Enclave undergo real-time ledger attestation:
                    </p>

                    <div class="flex flex-col gap-3">

                        <div class="flex items-start gap-3 p-3 rounded-lg bg-surface-darkest border border-border-subtle">
                            <span class="material-symbols-outlined text-emerald-400 text-[18px] mt-0.5">water_drop</span>
                            <div class="flex flex-col">
                                <span class="text-xs font-semibold text-white">Automatic Steganographic Watermark</span>
                                <span class="text-[11px] text-slate-400 mt-0.5 leading-relaxed">Each PDF page is injected with invisible micro-identifiers tied to your Faculty NetID.</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-3 rounded-lg bg-surface-darkest border border-border-subtle">
                            <span class="material-symbols-outlined text-sky-400 text-[18px] mt-0.5">history_edu</span>
                            <div class="flex flex-col">
                                <span class="text-xs font-semibold text-white">Zero-Trust Ledger Commit</span>
                                <span class="text-[11px] text-slate-400 mt-0.5 leading-relaxed">SHA-256 hash is replicated to CvSU Main Campus Node and cannot be modified or deleted.</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-3 rounded-lg bg-surface-darkest border border-border-subtle">
                            <span class="material-symbols-outlined text-amber-400 text-[18px] mt-0.5">group_add</span>
                            <div class="flex flex-col">
                                <span class="text-xs font-semibold text-white">Dual-Signoff Requirement</span>
                                <span class="text-[11px] text-slate-400 mt-0.5 leading-relaxed">Tier 3 records trigger an automated notification to the CEIT College Dean for secondary signoff.</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-border-subtle flex items-center justify-between text-[11px]">
                        <span class="font-mono text-slate-400">CvSU IT Center: #2026-V4</span>

                        <a class="text-emerald-400 hover:text-emerald-300 font-semibold flex items-center gap-1 transition-colors" href="#">
                            <span>Read Guidelines</span>
                            <span class="material-symbols-outlined text-[13px]">open_in_new</span>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-surface-card border border-border-subtle rounded-xl p-5 shadow-md flex flex-col gap-4">

                    <div class="flex items-center justify-between border-b border-border-subtle pb-3">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-emerald-400 text-[20px]">history</span>
                            <h3 class="text-sm font-bold text-white tracking-tight">Recent CEIT Submissions</h3>
                        </div>
                        <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    </div>

                    <div class="flex flex-col gap-2.5">

                        <div class="p-3 rounded-lg bg-surface-darkest border border-border-subtle flex flex-col gap-1.5 hover:border-emerald-500/30 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-semibold text-white truncate max-w-[190px]">CEIT_Dean_Council_Minutes.pdf</span>
                                <span class="px-1.5 py-0.5 rounded text-[9px] bg-emerald-500/15 text-emerald-300 border border-emerald-500/30 font-mono font-bold">COMMITTED</span>
                            </div>

                            <div class="flex items-center justify-between text-[11px] text-slate-400">
                                <span>Engr. R. Salazar</span>
                                <span class="font-mono">12 mins ago</span>
                            </div>

                            <span class="font-mono text-[10px] text-slate-400 truncate bg-surface-card px-2 py-0.5 rounded border border-border-subtle">
                                HASH: 48f930e1...b0991
                            </span>
                        </div>

                        <div class="p-3 rounded-lg bg-surface-darkest border border-border-subtle flex flex-col gap-1.5 hover:border-emerald-500/30 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-semibold text-white truncate max-w-[190px]">EE_Lab_Safety_Inventory.xlsx</span>
                                <span class="px-1.5 py-0.5 rounded text-[9px] bg-emerald-500/15 text-emerald-300 border border-emerald-500/30 font-mono font-bold">COMMITTED</span>
                            </div>

                            <div class="flex items-center justify-between text-[11px] text-slate-400">
                                <span>Prof. M. Dimayuga</span>
                                <span class="font-mono">2 hours ago</span>
                            </div>

                            <span class="font-mono text-[10px] text-slate-400 truncate bg-surface-card px-2 py-0.5 rounded border border-border-subtle">
                                HASH: 12d87e41...982ac
                            </span>
                        </div>

                        <div class="p-3 rounded-lg bg-surface-darkest border border-border-subtle flex flex-col gap-1.5 hover:border-emerald-500/30 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-semibold text-white truncate max-w-[190px]">CPE_Thesis_Defense_Roster.pdf</span>
                                <span class="px-1.5 py-0.5 rounded text-[9px] bg-amber-500/15 text-amber-300 border border-amber-500/30 font-mono font-bold">PENDING DUAL-SIG</span>
                            </div>

                            <div class="flex items-center justify-between text-[11px] text-slate-400">
                                <span>Prof. Juan Dela Cruz</span>
                                <span class="font-mono">Yesterday</span>
                            </div>

                            <span class="font-mono text-[10px] text-slate-400 truncate bg-surface-card px-2 py-0.5 rounded border border-border-subtle">
                                HASH: 994fe801...cc214
                            </span>
                        </div>
                    </div>

                    <button class="w-full py-2.5 rounded-lg bg-surface-darkest hover:bg-surface-elevated text-slate-300 hover:text-white font-mono text-[11px] transition-colors border border-border-subtle text-center font-medium" type="button">
                        View Complete CEIT Custodial Ledger →
                    </button>
                </div>

                <!-- Card 3 -->
                <div class="bg-surface-darkest rounded-xl p-4 border border-border-subtle flex items-center gap-3.5 shadow-sm">
                    <div class="w-10 h-10 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 flex-shrink-0">
                        <span class="material-symbols-outlined text-[22px]">verified</span>
                    </div>

                    <div class="flex flex-col min-w-0">
                        <span class="text-xs font-bold text-white">Cavite State University Digital Trust</span>
                        <span class="text-[11px] text-slate-400 font-mono truncate">Cert-Chain Root CA: CvSU-SEC-2026-ENCLAVE</span>
                        <span class="text-[10px] text-emerald-400 font-mono mt-0.5">FIPS 140-3 Hardware Security Module Active</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="w-full bg-surface-darkest py-6 px-8 border-t border-border-subtle mt-auto">
        <div class="max-w-[1600px] mx-auto flex flex-col md:flex-row items-center justify-between gap-4">

            <div class="flex flex-col gap-1">
                <span class="text-xs font-mono font-bold text-slate-300">Cavite State University Data Privacy Act of 2012 (RA 10173) Directive Notice</span>
                <span class="text-xs text-slate-500">All document transactions, SHA-256 cryptographic handshakes, and clearance authorizations are logged in real-time under zero-trust audit protocols.</span>
            </div>

            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-emerald-400 text-[18px]">fingerprint</span>
                <span class="text-xs font-mono text-slate-400 uppercase tracking-wider">Steganographic Watermark Protected • TLS 1.3 Strict</span>
            </div>
        </div>
    </footer>
</form>

<!-- ==================== CONFIRMATION MODAL ==================== -->
<div class="hidden fixed inset-0 z-[60] flex items-center justify-center p-4 bg-black/80 backdrop-blur-md" id="confirmationModal">

    <div class="bg-surface-card border border-border-medium w-full max-w-xl rounded-2xl p-6 shadow-2xl flex flex-col gap-5">

        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 flex items-center justify-center">
                    <span class="material-symbols-outlined text-[24px]">lock_clock</span>
                </div>

                <div class="flex flex-col">
                    <h3 class="text-base font-bold text-white tracking-tight">Confirm Enclave Seal &amp; Commit</h3>
                    <span class="text-[11px] font-mono text-emerald-400">Cryptographic Handshake Ready</span>
                </div>
            </div>

            <button class="p-1.5 rounded-lg text-slate-400 hover:text-white hover:bg-surface-elevated transition-colors" id="closeModalBtn" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>

        <div class="bg-surface-darkest rounded-xl p-4 flex flex-col gap-3 font-mono text-xs border border-border-subtle">

            <div class="flex justify-between items-center gap-3">
                <span class="text-slate-400">Document:</span>
                <span id="confirmDocumentName" class="text-white font-semibold truncate max-w-[280px]">No file selected</span>
            </div>

            <div class="flex justify-between items-center">
                <span class="text-slate-400">Custodian NetID:</span>
                <span class="text-emerald-400 font-semibold">CEIT-FAC-88219</span>
            </div>

            <div class="flex justify-between items-center">
                <span class="text-slate-400">Ledger Target:</span>
                <span class="text-white font-semibold">NODE-04 // CEIT ENCLAVE</span>
            </div>

            <div class="p-2.5 rounded bg-surface-card border border-border-subtle flex flex-col gap-1">
                <span class="text-slate-400 text-[10px]">CHECKSUM STATUS:</span>
                <span class="text-emerald-400 text-[11px] break-all">Prototype preview — no checksum generated</span>
            </div>
        </div>

        <p class="text-xs text-slate-400 leading-relaxed">
            Confirming will simulate the next stage of the department file submission workflow. This frontend preview does not upload or permanently store the selected file.
        </p>

        <div class="flex items-center justify-end gap-3 pt-2 border-t border-border-subtle">

            <button class="px-4 py-2 rounded-lg bg-surface-darkest text-slate-300 hover:text-white border border-border-subtle text-xs font-semibold transition-colors" id="cancelModalBtn" type="button">
                Abort
            </button>

            <button class="px-5 py-2.5 rounded-lg bg-emerald-500 text-slate-950 font-bold text-xs hover:bg-emerald-400 shadow-lg shadow-emerald-500/20 transition-all flex items-center gap-2" id="executeCommitBtn" type="button">
                <span class="material-symbols-outlined text-[18px]">done</span>
                <span>Continue Submission</span>
            </button>
        </div>
    </div>
</div>

<!-- ==================== WORKFLOW MESSAGE MODAL ==================== -->
<div class="hidden fixed inset-0 z-[70] flex items-center justify-center p-4 bg-black/80 backdrop-blur-md" id="workflowModal">

    <div class="bg-surface-card border border-border-medium w-full max-w-md rounded-2xl p-6 shadow-2xl flex flex-col gap-5">

        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 flex items-center justify-center">
                <span class="material-symbols-outlined text-[24px]">info</span>
            </div>

            <div class="flex flex-col">
                <h3 id="workflowModalTitle" class="text-base font-bold text-white tracking-tight">Submission Notice</h3>
                <span class="text-[11px] font-mono text-emerald-400">DOCUSECURE WORKFLOW</span>
            </div>
        </div>

        <p id="workflowModalMessage" class="text-xs text-slate-400 leading-relaxed"></p>

        <div id="workflowModalErrors" class="hidden p-3 rounded-lg bg-rose-500/10 border border-rose-500/30 text-rose-300 text-xs leading-relaxed"></div>

        <div class="flex items-center justify-end gap-3 pt-3 border-t border-border-subtle">

            <button
                id="workflowModalCancel"
                class="px-4 py-2 rounded-lg bg-surface-darkest text-slate-300 hover:text-white border border-border-subtle text-xs font-semibold transition-colors"
                type="button"
            >
                Close
            </button>

            <button
                id="workflowModalConfirm"
                class="hidden px-5 py-2.5 rounded-lg bg-emerald-500 text-slate-950 font-bold text-xs hover:bg-emerald-400 shadow-lg shadow-emerald-500/20 transition-all"
                type="button"
            >
                Continue
            </button>
        </div>
    </div>
</div>

<!-- ==================== PAGE SCRIPT ==================== -->
<script>
(function () {
    const commitBtn = document.getElementById('commitEnclaveBtn');
    const confirmModal = document.getElementById('confirmationModal');
    const closeBtn = document.getElementById('closeModalBtn');
    const cancelBtn = document.getElementById('cancelModalBtn');
    const executeBtn = document.getElementById('executeCommitBtn');

    const discardBtn = document.getElementById('discardPayloadBtn');
    const saveDraftBtn = document.getElementById('saveDraftBtn');

    const fileInput = document.getElementById('recordFileInput');
    const dropZone = document.getElementById('dropZone');
    const fileLabel = document.getElementById('fileSelectionLabel');
    const selectedFileCard = document.getElementById('selectedFileCard');
    const selectedFileName = document.getElementById('selectedFileName');
    const selectedFileSize = document.getElementById('selectedFileSize');
    const removeFileBtn = document.getElementById('removeSelectedFileBtn');

    const titleInput = document.getElementById('documentTitle');
    const tierSelect = document.getElementById('accessTier');
    const attestationCheckbox = document.getElementById('attestationCheckbox');
    const masterPin = document.getElementById('masterPin');

    const workflow = document.getElementById('workflowModal');
    const workflowTitle = document.getElementById('workflowModalTitle');
    const workflowMessage = document.getElementById('workflowModalMessage');
    const workflowErrors = document.getElementById('workflowModalErrors');
    const workflowConfirm = document.getElementById('workflowModalConfirm');
    const workflowCancel = document.getElementById('workflowModalCancel');

    const confirmDocumentName = document.getElementById('confirmDocumentName');

    let confirmAction = null;

    const departmentRecordsUrl = @json(route('faculty.preview.department-records'));

    function showWorkflow(title, message, actionLabel, action, errors = '') {
        workflowTitle.textContent = title;
        workflowMessage.textContent = message;

        workflowErrors.textContent = errors;
        workflowErrors.classList.toggle('hidden', !errors);

        workflowConfirm.textContent = actionLabel || 'Continue';
        workflowConfirm.classList.toggle('hidden', !action);

        confirmAction = action || null;

        workflow.classList.remove('hidden');
    }

    function closeWorkflow() {
        workflow.classList.add('hidden');
        confirmAction = null;
    }

    function closeConfirm() {
        confirmModal.classList.add('hidden');
    }

    function clearSelectedFile() {
        fileInput.value = '';

        fileLabel.textContent = 'Drop department payload here, or browse files';

        selectedFileCard.classList.add('hidden');
        selectedFileName.textContent = '';
        selectedFileSize.textContent = '';
    }

    function formatFileSize(bytes) {
        if (bytes < 1024 * 1024) {
            return (bytes / 1024).toFixed(1) + ' KB';
        }

        return (bytes / (1024 * 1024)).toFixed(2) + ' MB';
    }

    function displaySelectedFile(file) {
        if (!file) {
            clearSelectedFile();
            return;
        }

        const maxFileSize = 150 * 1024 * 1024;

        if (file.size > maxFileSize) {
            clearSelectedFile();

            showWorkflow(
                'File exceeds the size limit',
                'Please select a department file that does not exceed 150 MB.',
                'Close',
                null
            );

            return;
        }

        fileLabel.textContent = file.name + ' selected';
        selectedFileName.textContent = file.name;
        selectedFileSize.textContent = formatFileSize(file.size);

        selectedFileCard.classList.remove('hidden');
    }

    // File selection
    fileInput.addEventListener('change', function () {
        if (fileInput.files && fileInput.files.length > 0) {
            displaySelectedFile(fileInput.files[0]);
        }
    });

    // Drag and drop
    dropZone.addEventListener('dragover', function (event) {
        event.preventDefault();
        dropZone.classList.add('border-emerald-400', 'bg-surface-darkest');
    });

    dropZone.addEventListener('dragleave', function () {
        dropZone.classList.remove('border-emerald-400', 'bg-surface-darkest');
    });

    dropZone.addEventListener('drop', function (event) {
        event.preventDefault();

        dropZone.classList.remove('border-emerald-400', 'bg-surface-darkest');

        if (event.dataTransfer.files.length > 0) {
            const file = event.dataTransfer.files[0];
            const allowedExtensions = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'zip'];
            const extension = file.name.split('.').pop().toLowerCase();

            if (!allowedExtensions.includes(extension)) {
                showWorkflow(
                    'Unsupported file type',
                    'Please select a PDF, DOC, DOCX, XLS, XLSX, or ZIP file.',
                    'Close',
                    null
                );

                return;
            }

            const transfer = new DataTransfer();
            transfer.items.add(file);
            fileInput.files = transfer.files;

            displaySelectedFile(file);
        }
    });

    // Remove selected file
    removeFileBtn.addEventListener('click', clearSelectedFile);

    // Close confirmation modal
    closeBtn.addEventListener('click', closeConfirm);
    cancelBtn.addEventListener('click', closeConfirm);

    // Close workflow modal
    workflowCancel.addEventListener('click', closeWorkflow);

    workflowConfirm.addEventListener('click', function () {
        const action = confirmAction;

        closeWorkflow();

        if (action) {
            action();
        }
    });

    // Open confirmation modal
    commitBtn.addEventListener('click', function () {
        const errors = [];

        if (!fileInput.files || fileInput.files.length === 0) {
            errors.push('Select a department file before submitting.');
        }

        if (!titleInput.value.trim()) {
            errors.push('Enter the official document title.');
        }

        if (!tierSelect.value) {
            errors.push('Choose an access tier.');
        }

        if (!attestationCheckbox.checked) {
            errors.push('Confirm the legal attestation checkbox.');
        }

        if (!masterPin.value.trim() || !/^[0-9]{6}$/.test(masterPin.value)) {
            errors.push('Enter a valid 6-digit Master PIN.');
        }

        if (errors.length > 0) {
            showWorkflow(
                'Please complete the required fields',
                'The submission cannot continue until the following issues are corrected:',
                null,
                null,
                errors.join(' ')
            );

            return;
        }

        confirmDocumentName.textContent = fileInput.files[0].name;

        confirmModal.classList.remove('hidden');
    });

    // Save Draft
    saveDraftBtn.addEventListener('click', function () {
        showWorkflow(
            'Draft preview',
            'This frontend prototype does not yet save drafts to the database. Your current entries will remain on this page until you leave or refresh it.',
            'Return to Department Records',
            function () {
                window.location.href = departmentRecordsUrl;
            }
        );
    });

    // Cancel and clear payload
    discardBtn.addEventListener('click', function () {
        showWorkflow(
            'Discard staged file?',
            'This will clear the selected file and entered document details. This action cannot be undone.',
            'Discard file',
            function () {
                clearSelectedFile();

                titleInput.value = '';
                tierSelect.selectedIndex = 0;
                attestationCheckbox.checked = false;
                masterPin.value = '';

                closeConfirm();

                showWorkflow(
                    'Draft cleared',
                    'The staged file and form details have been cleared. You can return to Department Records.',
                    'Return to Department Records',
                    function () {
                        window.location.href = departmentRecordsUrl;
                    }
                );
            }
        );
    });

    // Simulated submission workflow
    executeBtn.addEventListener('click', function () {
        executeBtn.disabled = true;
        executeBtn.textContent = 'Processing submission…';

        const selectedTier = tierSelect.value;

        window.setTimeout(function () {
            closeConfirm();

            executeBtn.disabled = false;
            executeBtn.innerHTML = '<span class="material-symbols-outlined text-[18px]">done</span><span>Sign &amp; Commit to Enclave →</span>';

            if (selectedTier === '3' || selectedTier === '4') {
                showWorkflow(
                    'Sent to the Dean for sign-off',
                    'Your department file has been staged for review. The Dean must complete the required second sign-off before the file proceeds to MIS review. This is a frontend simulation only; the file has not been uploaded to the server.',
                    'Return to Department Records',
                    function () {
                        window.location.href = departmentRecordsUrl;
                    }
                );
            } else {
                showWorkflow(
                    'Submission prepared',
                    'Your Tier 2 department file is ready for the next MIS review step. This is a frontend simulation only; the file has not been uploaded to the server.',
                    'Return to Department Records',
                    function () {
                        window.location.href = departmentRecordsUrl;
                    }
                );
            }
        }, 500);
    });

})();
</script>

</body>
</html>