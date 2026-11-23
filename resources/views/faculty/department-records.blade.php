
<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_dashboard" name="shell-type">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=JetBrains+Mono:wght@100..900&amp;display=swap" rel="stylesheet">

    <style>
        @layer base {
            html, body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary-container": "#3a4d42",
                        "primary-fixed-dim": "#9fd2b4",
                        "surface-dim": "#111412",
                        "surface-container-low": "#191c1a",
                        "background": "#111412",
                        "on-tertiary": "#242e54",
                        "on-secondary": "#22342a",
                        "surface-tint": "#9fd2b4",
                        "surface-container-lowest": "#0c0f0d",
                        "surface-variant": "#323633",
                        "outline": "#8a938c",
                        "tertiary": "#bbc5f3",
                        "outline-variant": "#414943",
                        "tertiary-fixed-dim": "#bbc5f3",
                        "on-tertiary-container": "#00031a",
                        "on-secondary-fixed": "#0d1f16",
                        "surface": "#111412",
                        "on-primary-fixed": "#002113",
                        "error-container": "#93000a",
                        "on-error": "#690005",
                        "primary": "#9fd2b4",
                        "on-primary": "#023823",
                        "on-secondary-container": "#a8beaf",
                        "error": "#ffb4ab",
                        "inverse-on-surface": "#2e312f",
                        "secondary": "#b6ccbd",
                        "on-primary-container": "#00311e",
                        "surface-container": "#1d201e",
                        "on-background": "#e1e3df",
                        "on-surface-variant": "#c0c9c1",
                        "tertiary-container": "#6b759f",
                        "on-surface": "#e1e3df",
                        "primary-fixed": "#baeecf",
                        "surface-container-highest": "#323633",
                        "secondary-fixed-dim": "#b6ccbd",
                        "surface-bright": "#373a37",
                        "inverse-primary": "#38684f",
                        "on-primary-fixed-variant": "#1f4f39",
                        "surface-container-high": "#272b28",
                        "on-error-container": "#ffdad6",
                        "tertiary-fixed": "#dce1ff",
                        "primary-container": "#6a9b80",
                        "on-tertiary-fixed": "#0e193d",
                        "secondary-fixed": "#d2e8d8",
                        "inverse-surface": "#e1e3df",
                        "on-tertiary-fixed-variant": "#3b456b"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
                        "margin": "3rem",
                        "space-xs": "0.25rem",
                        "space-lg": "1.5rem",
                        "margin-mobile": "1.25rem",
                        "gutter": "1.5rem",
                        "gutter-mobile": "1rem",
                        "space-md": "1rem",
                        "space-xl": "2.5rem",
                        "space-sm": "0.5rem"
                    },
                    fontFamily: {
                        "display": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "label-lg": ["JetBrains Mono"],
                        "body-sm": ["Inter"],
                        "label-md": ["JetBrains Mono"],
                        "display-mobile": ["Inter"],
                        "headline-md": ["Inter"],
                        "code-snippet": ["JetBrains Mono"],
                        "body-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "label-sm": ["JetBrains Mono"]
                    },
                    fontSize: {
                        "display": ["3rem", {
                            lineHeight: "3.5rem",
                            letterSpacing: "-0.03em",
                            fontWeight: "700"
                        }],
                        "headline-lg": ["2rem", {
                            lineHeight: "2.5rem",
                            letterSpacing: "-0.02em",
                            fontWeight: "600"
                        }],
                        "headline-sm": ["1.125rem", {
                            lineHeight: "1.625rem",
                            fontWeight: "600"
                        }],
                        "label-lg": ["0.875rem", {
                            lineHeight: "1.25rem",
                            letterSpacing: "0.04em",
                            fontWeight: "600"
                        }],
                        "body-sm": ["0.75rem", {
                            lineHeight: "1.125rem",
                            fontWeight: "400"
                        }],
                        "label-md": ["0.75rem", {
                            lineHeight: "1rem",
                            letterSpacing: "0.06em",
                            fontWeight: "500"
                        }],
                        "display-mobile": ["2.25rem", {
                            lineHeight: "2.75rem",
                            letterSpacing: "-0.02em",
                            fontWeight: "700"
                        }],
                        "headline-md": ["1.375rem", {
                            lineHeight: "1.875rem",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],
                        "code-snippet": ["0.8125rem", {
                            lineHeight: "1.25rem",
                            fontWeight: "400"
                        }],
                        "body-lg": ["1rem", {
                            lineHeight: "1.5rem",
                            fontWeight: "400"
                        }],
                        "headline-lg-mobile": ["1.5rem", {
                            lineHeight: "2rem",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],
                        "body-md": ["0.875rem", {
                            lineHeight: "1.375rem",
                            fontWeight: "400"
                        }],
                        "label-sm": ["0.6875rem", {
                            lineHeight: "0.875rem",
                            letterSpacing: "0.08em",
                            fontWeight: "500"
                        }]
                    }
                }
            }
        };
    </script>

    <title>DocuSecure Faculty — Department Records</title>
</head>

<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">

<!-- SIDEBAR -->
@include('components.sidebar', ['currentRole' => 'faculty'])

<div class="pl-64">

<!-- HEADER -->
<header class="fixed top-0 left-64 right-0 h-16 bg-surface/80 backdrop-blur-xl z-40 flex items-center justify-between px-space-lg">

    <div class="flex items-center gap-space-lg">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-[20px]">shield</span>

            <div class="flex items-center gap-2 font-mono text-xs">
                <span class="text-slate-400">CEIT Enclave</span>
                <span class="text-slate-600">/</span>
                <span class="text-primary font-semibold">Department Records</span>
            </div>

            <span class="ml-2 text-[10px] font-mono px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">NODE-04 ONLINE</span>
        </div>

        <div class="relative hidden xl:flex items-center">
            <span class="material-symbols-outlined absolute left-space-sm text-on-surface-variant text-[18px]">search</span>
            <input class="w-96 pl-10 pr-space-md py-1.5 rounded-lg bg-surface-container-low text-on-surface placeholder:text-on-surface-variant font-body-sm text-body-sm focus:outline-none"
                   placeholder="Encrypted Omni-Search (Doc ID, SHA-256, Faculty ID)..."
                   type="text">
        </div>
    </div>

    <div class="flex items-center gap-space-md">

        <div class="hidden md:flex items-center gap-space-xs px-space-sm py-1 rounded bg-surface-container-low">
            <span class="h-2 w-2 rounded-full bg-primary animate-pulse"></span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">CvSU Cloud Node: Active • 256-bit Encrypted</span>
        </div>

        <div class="relative flex items-center">
            <button aria-label="Notifications"
                    class="p-1.5 text-on-surface-variant hover:text-on-surface transition-colors rounded-lg bg-surface-container-low flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px]">notifications</span>
            </button>
            <span class="absolute top-1 right-1 h-2 w-2 bg-error rounded-full"></span>
        </div>

        <div class="flex items-center gap-space-sm pl-space-sm">
            <div class="flex flex-col items-end">
                <span class="font-label-md text-label-md text-on-surface">Prof. Juan Dela Cruz</span>
                <span class="font-label-sm text-label-sm text-primary">CEIT Faculty • Tier 3 Clearance</span>
            </div>

            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
            </div>
        </div>
    </div>
</header>

<!-- MAIN CONTENT -->
<main class="relative pt-16 bg-surface w-full px-space-lg">

<div class="flex flex-col w-full">
<div class="flex flex-col w-full space-y-space-lg pb-space-xl">

<!-- SECTION 1: SECURITY STATUS -->
<div class="p-space-md rounded-xl border border-emerald-500/30 shadow-md flex flex-col md:flex-row items-start md:items-center justify-between gap-3"
     style="background: linear-gradient(90deg, #10223d 0%, #152744 60%, #0d1a2d 100%);">

    <div class="flex items-start gap-3 min-w-0">
        <div class="p-2.5 rounded-lg bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 flex items-center justify-center flex-shrink-0 mt-0.5">
            <span class="material-symbols-outlined text-[24px]">verified_user</span>
        </div>

        <div class="flex flex-col gap-0.5 min-w-0">
            <div class="flex items-center gap-2 flex-wrap">
                <span class="font-mono font-bold text-xs uppercase tracking-wider text-emerald-400">CEIT Cryptographic Vault Node 04</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 font-semibold font-mono">SEMI-ADMIN PRIVILEGES ACTIVE</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-amber-400/20 text-amber-400 border border-amber-400/30 font-semibold">Tier 2 &amp; 3 Clearances Authorized</span>
            </div>

            <p class="text-xs text-slate-300 leading-relaxed mt-1">
                Authenticated as <strong class="text-white">Prof. Juan Dela Cruz</strong> (CEIT Faculty Sub-Signatory &amp; Curriculum Custodian). Full write/decryption rights active for OBE syllabi, accreditation self-surveys, and faculty minutes. Tier 4 archives require Board of Regents cryptographic authorization slips.
            </p>
        </div>
    </div>

    <div class="flex items-center gap-2 flex-shrink-0 pt-2 md:pt-0">
        <div class="px-3 py-1.5 rounded-lg bg-surface-container border border-white/10 text-[11px] font-mono text-emerald-400 flex items-center gap-1.5 shadow-sm">
            <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="font-bold">KEYS LOADED • MERKLE LIVE</span>
        </div>
    </div>
</div>

<!-- TITLE BAR -->
<div class="flex flex-col xl:flex-row xl:items-end justify-between gap-space-md pt-space-xs">

    <div class="flex flex-col space-y-space-xs">
        <div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant">
            <span>Workspace</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-slate-300">Academic Enclaves</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-primary font-bold">Department Records (CEIT)</span>
        </div>

        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-bold">
            Department Records — College of Engineering and Information Technology (CEIT)
        </h1>

        <p class="font-body-md text-body-md text-on-surface-variant max-w-4xl">
            Official collegiate repository for OBE curricula, course syllabi, faculty council minutes, and accreditation archives under Cavite State University cryptographic governance.
        </p>
    </div>

    <div class="flex items-center flex-wrap gap-2 flex-shrink-0">

        <button class="flex items-center gap-1.5 px-3 py-2 rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface transition-colors shadow-sm text-xs font-medium border border-white/5"
                id="btn-reaccred-check"
                title="Review CHED OBE Criteria checklist">
            <span class="material-symbols-outlined text-[18px] text-amber-400">fact_check</span>
            <span class="font-label-md text-label-md">Re-Accreditation Checklist</span>
        </button>

        <button class="flex items-center gap-1.5 px-3 py-2 rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface transition-colors shadow-sm text-xs font-medium border border-white/5"
                id="btn-export-manifest">
            <span class="material-symbols-outlined text-[18px] text-primary">download_for_offline</span>
            <span class="font-label-md text-label-md">Export Manifest CSV</span>
        </button>

        <!-- FIXED: NAVIGATE TO THE SUBMIT PAGE USING GET -->
        <a href="{{ route('faculty.preview.submit-department-file') }}"
           class="flex items-center gap-1.5 px-3 py-2 rounded-lg bg-primary text-on-primary hover:bg-primary-fixed transition-colors shadow-md text-xs font-bold">
            <span class="material-symbols-outlined text-[18px]">add_circle</span>
            <span class="font-label-md text-label-md">+ Submit Department File</span>
        </a>

    </div>
</div>

<!-- SECTION 2: DEPARTMENT TELEMETRY -->
<div class="relative overflow-hidden rounded-xl p-space-md shadow-md border border-white/5" style="background: #152238;">

    <div class="absolute -right-8 -top-8 w-44 h-44 bg-primary/5 rounded-full pointer-events-none blur-2xl"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">

        <div class="flex items-start gap-space-sm">
            <div class="p-space-xs rounded bg-surface-container-high text-primary flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-[20px]">hub</span>
            </div>
            <div class="flex flex-col min-w-0">
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Node Designation</span>
                <span class="font-body-sm text-body-sm text-on-surface font-semibold truncate">CEIT Academic Node 04</span>
                <span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
                    <span class="inline-block h-1.5 w-1.5 rounded-full bg-primary animate-pulse"></span>
                    Indang Datacenter Link Active
                </span>
            </div>
        </div>

        <div class="flex items-start gap-space-sm">
            <div class="p-space-xs rounded bg-surface-container-high text-secondary flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-[20px]">domain</span>
            </div>
            <div class="flex flex-col min-w-0">
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Academic Unit</span>
                <span class="font-body-sm text-body-sm text-on-surface font-semibold truncate">Dept. of Computer Eng. &amp; IT</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">CvSU Main Campus • Indang</span>
            </div>
        </div>

        <div class="flex items-start gap-space-sm">
            <div class="p-space-xs rounded bg-surface-container-high text-tertiary flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-[20px]">admin_panel_settings</span>
            </div>
            <div class="flex flex-col min-w-0">
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Node Custodians</span>
                <span class="font-body-sm text-body-sm text-on-surface font-semibold truncate">Dr. E. Davis (Dept. Chair)</span>
                <span class="font-label-sm text-label-sm text-slate-300 truncate">Engr. R. Bautista • Prof. J. Dela Cruz</span>
            </div>
        </div>

        <div class="flex items-start gap-space-sm">
            <div class="p-space-xs rounded bg-surface-container-high text-primary-fixed-dim flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-[20px]">shield_lock</span>
            </div>
            <div class="flex flex-col min-w-0">
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Security Architecture</span>
                <span class="font-body-sm text-body-sm text-on-surface font-semibold">Tier 2 &amp; Tier 3 Local Enclave</span>
                <span class="font-label-sm text-label-sm text-primary">SHA-256 Checksumming Active</span>
            </div>
        </div>

    </div>
</div>

<!-- SECTION 3: ANNOUNCEMENT -->
<div class="flex items-center justify-between gap-space-md p-space-md rounded-xl bg-secondary-container/60 shadow-sm text-on-secondary-container border border-emerald-500/20">

    <div class="flex items-center gap-space-sm min-w-0">
        <div class="p-1 rounded bg-secondary-container text-primary flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-[20px]">campaign</span>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-2 min-w-0">
            <span class="font-label-sm text-label-sm font-bold uppercase tracking-wider px-1.5 py-0.5 rounded bg-surface-container-lowest text-primary flex-shrink-0">Action Mandatory</span>

            <p class="font-body-sm text-body-sm text-on-secondary-container truncate">
                Notice: 2026 CHED Level IV Re-accreditation file freeze begins in
                <span class="font-bold underline text-on-surface">5 days</span>.
                Ensure all syllabus updates are sealed by Friday 5:00 PM.
            </p>
        </div>
    </div>

    <div class="flex items-center gap-space-xs flex-shrink-0">
        <span class="font-code-snippet text-code-snippet text-primary hidden md:inline font-bold">FREEZE_ID#ACC-2026-IV</span>

        <button aria-label="Dismiss Alert"
                class="p-1 hover:bg-surface-container text-on-secondary-container hover:text-on-surface rounded transition-colors">
            <span class="material-symbols-outlined text-[18px]">close</span>
        </button>
    </div>
</div>

<!-- SECTION 4: CATEGORY GRID -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-md">

    <!-- CURRICULUM -->
    <div class="group relative flex flex-col justify-between p-space-md rounded-xl hover:bg-surface-container transition-all shadow-md border border-emerald-500/20" style="background: #152238;">
        <div class="flex flex-col space-y-space-sm">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-primary group-hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-[22px]">menu_book</span>
                </div>
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-emerald-500/15 text-emerald-400 border border-emerald-500/30 font-medium flex items-center gap-1">
                    <span class="material-symbols-outlined text-[13px]">lock_open</span> Tier 3 Authorized
                </span>
            </div>

            <div>
                <h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors font-semibold">Curriculum &amp; Syllabi (OBE)</h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">48 Active Course Syllabi • Fully Decrypted</p>
            </div>

            <div class="flex flex-wrap gap-1 pt-space-xs">
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-on-surface">Computer Eng. (CPE)</span>
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-on-surface">IT (BSIT)</span>
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-on-surface">CompSci (BSCS)</span>
            </div>
        </div>

        <div class="mt-space-md pt-space-sm flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant border-t border-white/5">
            <span class="font-mono text-[11px]">Root: /ceit/curricula</span>
            <span class="material-symbols-outlined text-[16px] text-primary">arrow_forward</span>
        </div>
    </div>

    <!-- ACCREDITATION -->
    <div class="group relative flex flex-col justify-between p-space-md rounded-xl hover:bg-surface-container transition-all shadow-md border border-emerald-500/20" style="background: #152238;">
        <div class="flex flex-col space-y-space-sm">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-secondary group-hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-[22px]">workspace_premium</span>
                </div>
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-emerald-500/15 text-emerald-400 border border-emerald-500/30 font-medium flex items-center gap-1">
                    <span class="material-symbols-outlined text-[13px]">lock_open</span> Tier 3 Authorized
                </span>
            </div>

            <div>
                <h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors font-semibold">Accreditation &amp; CHED Level IV</h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">112 Document Portfolios • 4 Ongoing Cycles</p>
            </div>

            <div class="flex flex-wrap gap-1 pt-space-xs">
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-on-surface">CHED Level IV</span>
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-on-surface">AACCUP Standing</span>
            </div>
        </div>

        <div class="mt-space-md pt-space-sm flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant border-t border-white/5">
            <span class="font-mono text-[11px]">Root: /ceit/accreditation</span>
            <span class="material-symbols-outlined text-[16px] text-secondary">arrow_forward</span>
        </div>
    </div>

    <!-- FACULTY GOVERNANCE -->
    <div class="group relative flex flex-col justify-between p-space-md rounded-xl hover:bg-surface-container transition-all shadow-md border border-emerald-500/20" style="background: #152238;">
        <div class="flex flex-col space-y-space-sm">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-error group-hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-[22px]">gavel</span>
                </div>
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-emerald-500/15 text-emerald-400 border border-emerald-500/30 font-medium flex items-center gap-1">
                    <span class="material-symbols-outlined text-[13px]">lock_open</span> Tier 3 Authorized
                </span>
            </div>

            <div>
                <h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-error transition-colors font-semibold">Faculty Governance &amp; Minutes</h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">36 Formal Proceedings • FY 2025–2026</p>
            </div>

            <div class="flex flex-wrap gap-1 pt-space-xs">
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-error">Council Confidential</span>
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-on-surface">Decrypted View</span>
            </div>
        </div>

        <div class="mt-space-md pt-space-sm flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant border-t border-white/5">
            <span class="font-mono text-[11px]">Root: /ceit/council</span>
            <span class="material-symbols-outlined text-[16px] text-error">arrow_forward</span>
        </div>
    </div>

    <!-- TIER 4 ARCHIVE -->
    <div class="group relative flex flex-col justify-between p-space-md rounded-xl hover:bg-surface-container transition-all shadow-md border border-amber-400/30"
         style="background: linear-gradient(180deg, #182333 0%, #121a27 100%);">

        <div class="flex flex-col space-y-space-sm">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-amber-400 group-hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-[22px]">encrypted</span>
                </div>

                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-amber-400/15 text-amber-400 border border-amber-400/40 font-bold flex items-center gap-1">
                    <span class="material-symbols-outlined text-[13px]">lock</span> Tier 4 Sealed Archive
                </span>
            </div>

            <div>
                <h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-amber-400 transition-colors font-semibold">Institutional Patents &amp; Board Decrees</h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">BOR Executive Enclave • Cryptographic Lock Active</p>
            </div>

            <div class="flex flex-wrap gap-1 pt-space-xs">
                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-amber-400/10 text-amber-300 border border-amber-400/20">BOR Authorization Required</span>
            </div>
        </div>

        <div class="mt-space-md pt-space-sm flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant border-t border-white/5">
            <span class="font-mono text-[11px] text-amber-400/80">Root: /ceit/bor-patents</span>

            <a href="{{ route('faculty.preview.clearance-requests') }}"
               class="text-xs font-bold text-amber-400 hover:text-amber-300 underline flex items-center gap-0.5">
                File Clearance Slip
                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
            </a>
        </div>
    </div>

</div>

<!-- SECTION 5: DEPARTMENT REPOSITORY LEDGER -->
<div class="flex flex-col space-y-space-md rounded-xl p-space-md shadow-lg border border-white/5" style="background: #152238;">

    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">

        <div class="flex items-center gap-space-sm">
            <span class="material-symbols-outlined text-primary text-[24px]">folder_managed</span>

            <div class="flex flex-col">
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Department Repository Ledger</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Real-time synchronized cryptographic archive view • Merkle Root Verified</span>
            </div>
        </div>

        <div class="flex flex-wrap items-center gap-space-xs">

            <div class="relative">
                <span class="material-symbols-outlined absolute left-2.5 top-2 text-on-surface-variant text-[18px]">search</span>

                <input class="pl-9 pr-3 py-1.5 rounded bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-sm text-body-sm w-72 focus:outline-none"
                       id="ledger-search"
                       placeholder="Search CEIT records by subject code, syllabus term..."
                       type="text">
            </div>

            <select class="px-2.5 py-1.5 rounded bg-surface-container text-on-surface font-body-sm text-body-sm focus:outline-none cursor-pointer">
                <option>Academic Term: 1st Sem 2025-2026</option>
                <option>Academic Term: 2nd Sem 2024-2025</option>
                <option>Midyear 2025</option>
            </select>

            <select class="px-2.5 py-1.5 rounded bg-surface-container text-on-surface font-body-sm text-body-sm focus:outline-none cursor-pointer">
                <option>Course Code: All</option>
                <option>COEN (Computer Eng.)</option>
                <option>ITEC (Information Tech.)</option>
                <option>COSC (Computer Science)</option>
                <option>ADMIN (Faculty Governance)</option>
            </select>

            <select class="px-2.5 py-1.5 rounded bg-surface-container text-on-surface font-body-sm text-body-sm focus:outline-none cursor-pointer">
                <option>Clearance Tier: All</option>
                <option>Tier 2 Academic Internal</option>
                <option>Tier 3 Confidential</option>
            </select>
        </div>
    </div>

    <div class="overflow-x-auto w-full">
        <table class="w-full text-left font-body-sm text-body-sm">

            <thead>
                <tr class="bg-surface-container font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                    <th class="py-3 px-4 rounded-l">Document Identifier &amp; Title</th>
                    <th class="py-3 px-4">Classification</th>
                    <th class="py-3 px-4">Clearance Level</th>
                    <th class="py-3 px-4 font-mono">SHA-256 Digest</th>
                    <th class="py-3 px-4">Signer / Timestamp</th>
                    <th class="py-3 px-4 text-right rounded-r">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-surface-container">

                <!-- ROW 1 -->
                <tr class="hover:bg-surface-container/60 transition-colors">
                    <td class="py-3.5 px-4">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-8 h-8 rounded bg-surface-container-high flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined text-[18px]">description</span>
                            </div>

                            <div class="flex flex-col min-w-0">
                                <span class="font-body-md text-body-md text-on-surface font-semibold truncate">COEN 30133 - Computer Systems Architecture Syllabus 2026</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">CvSU-CEIT-SYL-2026-0891</span>
                            </div>
                        </div>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm">Academic Syllabus</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2.5 py-1 rounded bg-emerald-500/15 text-emerald-400 border border-emerald-500/30 font-label-sm text-label-sm flex items-center gap-1 w-max font-medium">
                            <span class="material-symbols-outlined text-[14px]">lock_open</span>
                            Tier 3 Faculty Authorized
                        </span>
                    </td>

                    <td class="py-3.5 px-4 font-code-snippet text-code-snippet text-primary font-mono">
                        <span title="f8e3c1a93b4a2d8e7c6b5a4f3e2d1c0b9a8f7e6d5c4b3a2f1e0d9c8b7a6f5e4d">sha256:f8e3c...6f5e4d</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <div class="flex flex-col">
                            <span class="text-on-surface font-medium">Engr. M. Mendoza</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Today, 09:42 UTC</span>
                        </div>
                    </td>

                    <td class="py-3.5 px-4 text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-primary hover:text-on-surface transition-colors" title="View / Decrypt File">
                                <span class="material-symbols-outlined text-[18px]">download</span>
                            </button>
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Inspect Metadata">
                                <span class="material-symbols-outlined text-[18px]">policy</span>
                            </button>
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Share with Department Faculty">
                                <span class="material-symbols-outlined text-[18px]">share</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- ROW 2 -->
                <tr class="hover:bg-surface-container/60 transition-colors">
                    <td class="py-3.5 px-4">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-8 h-8 rounded bg-surface-container-high flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined text-[18px]">inventory_2</span>
                            </div>

                            <div class="flex flex-col min-w-0">
                                <span class="font-body-md text-body-md text-on-surface font-semibold truncate">ITEC 20043 - Advanced Database Systems OBE Module</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">CvSU-CEIT-MOD-2026-0412</span>
                            </div>
                        </div>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm">Curriculum Portfolio</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2.5 py-1 rounded bg-emerald-500/15 text-emerald-400 border border-emerald-500/30 font-label-sm text-label-sm flex items-center gap-1 w-max font-medium">
                            <span class="material-symbols-outlined text-[14px]">lock_open</span>
                            Tier 3 Faculty Authorized
                        </span>
                    </td>

                    <td class="py-3.5 px-4 font-code-snippet text-code-snippet text-primary font-mono">
                        <span title="a4497e2f928c049b819f71c42fbd1b09b8d2813ec6370438cfebdf92957b8a1c">sha256:a4497...57b8a1c</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <div class="flex flex-col">
                            <span class="text-on-surface font-medium">Prof. Juan Dela Cruz</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Yesterday, 16:15 UTC</span>
                        </div>
                    </td>

                    <td class="py-3.5 px-4 text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-primary hover:text-on-surface transition-colors" title="View / Decrypt File">
                                <span class="material-symbols-outlined text-[18px]">download</span>
                            </button>
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Inspect Metadata">
                                <span class="material-symbols-outlined text-[18px]">policy</span>
                            </button>
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Share with Department Faculty">
                                <span class="material-symbols-outlined text-[18px]">share</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- ROW 3: TIER 4 -->
                <tr class="hover:bg-surface-container/60 transition-colors bg-amber-400/[0.02]">
                    <td class="py-3.5 px-4">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-8 h-8 rounded bg-surface-container-high flex items-center justify-center text-amber-400 flex-shrink-0">
                                <span class="material-symbols-outlined text-[18px]">lock</span>
                            </div>

                            <div class="flex flex-col min-w-0">
                                <div class="flex items-center gap-2">
                                    <span class="font-body-md text-body-md text-on-surface font-semibold truncate">CvSU BOR Resolution No. 018-2026: Academic Patent Vault</span>
                                    <span class="px-1.5 py-0.5 rounded bg-amber-400/20 text-amber-400 border border-amber-400/30 text-[10px] font-mono font-bold uppercase">SEALED</span>
                                </div>

                                <span class="font-label-sm text-label-sm text-on-surface-variant">CvSU-BOR-SEC-2026-0018-T4</span>
                            </div>
                        </div>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2 py-0.5 rounded bg-surface-container-high text-amber-400 font-label-sm text-label-sm font-medium">BOR Governance / IP</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2.5 py-1 rounded bg-amber-400/15 text-amber-400 border border-amber-400/40 font-label-sm text-label-sm flex items-center gap-1 w-max font-bold">
                            <span class="material-symbols-outlined text-[14px]">lock</span>
                            Tier 4 Sealed Archive
                        </span>
                    </td>

                    <td class="py-3.5 px-4 font-code-snippet text-code-snippet text-amber-400/80 font-mono">
                        <span title="Encrypted payload requires BOR Tier 4 Clearance Token">sha256:7f83b...[ENCRYPTED]</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <div class="flex flex-col">
                            <span class="text-on-surface font-medium">University Registrar / BOR</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Mar 22, 2026 11:20</span>
                        </div>
                    </td>

                    <td class="py-3.5 px-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('faculty.preview.clearance-requests') }}"
                               class="px-2.5 py-1 rounded bg-amber-400 text-slate-900 hover:bg-amber-300 font-label-sm text-label-sm font-bold transition-colors inline-flex items-center gap-1 shadow-sm">
                                <span class="material-symbols-outlined text-[14px]">badge</span>
                                <span>File Clearance Slip</span>
                            </a>

                            <button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Inspect Metadata Digest">
                                <span class="material-symbols-outlined text-[18px]">policy</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- ROW 4 -->
                <tr class="hover:bg-surface-container/60 transition-colors">
                    <td class="py-3.5 px-4">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-8 h-8 rounded bg-surface-container-high flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined text-[18px]">data_object</span>
                            </div>

                            <div class="flex flex-col min-w-0">
                                <span class="font-body-md text-body-md text-on-surface font-semibold truncate">BSCS Capstone Portfolio: AI-Powered Agricultural Soil Analysis</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">CvSU-CEIT-CPS-2026-0019</span>
                            </div>
                        </div>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm">Research / IP</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2.5 py-1 rounded bg-emerald-500/15 text-emerald-400 border border-emerald-500/30 font-label-sm text-label-sm flex items-center gap-1 w-max font-medium">
                            <span class="material-symbols-outlined text-[14px]">lock_open</span>
                            Tier 3 Faculty Authorized
                        </span>
                    </td>

                    <td class="py-3.5 px-4 font-code-snippet text-code-snippet text-primary font-mono">
                        <span title="6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b">sha256:6b86b...7875b4b</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <div class="flex flex-col">
                            <span class="text-on-surface font-medium">CEIT Research Council</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Mar 20, 2026 14:05</span>
                        </div>
                    </td>

                    <td class="py-3.5 px-4 text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-primary hover:text-on-surface transition-colors" title="View / Decrypt File">
                                <span class="material-symbols-outlined text-[18px]">download</span>
                            </button>
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Inspect Metadata">
                                <span class="material-symbols-outlined text-[18px]">policy</span>
                            </button>
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Share with Department Faculty">
                                <span class="material-symbols-outlined text-[18px]">share</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- ROW 5 -->
                <tr class="hover:bg-surface-container/60 transition-colors">
                    <td class="py-3.5 px-4">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-8 h-8 rounded bg-surface-container-high flex items-center justify-center text-secondary flex-shrink-0">
                                <span class="material-symbols-outlined text-[18px]">verified_user</span>
                            </div>

                            <div class="flex flex-col min-w-0">
                                <span class="font-body-md text-body-md text-on-surface font-semibold truncate">CHED Level IV Criterion 3: Curriculum Integrity Self-Survey Audit</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">CvSU-CEIT-ACC-2026-L4-03</span>
                            </div>
                        </div>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm">Accreditation</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <span class="px-2.5 py-1 rounded bg-emerald-500/15 text-emerald-400 border border-emerald-500/30 font-label-sm text-label-sm flex items-center gap-1 w-max font-medium">
                            <span class="material-symbols-outlined text-[14px]">lock_open</span>
                            Tier 3 Faculty Authorized
                        </span>
                    </td>

                    <td class="py-3.5 px-4 font-code-snippet text-code-snippet text-primary font-mono">
                        <span title="d4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35">sha256:d4735...c13ab35</span>
                    </td>

                    <td class="py-3.5 px-4">
                        <div class="flex flex-col">
                            <span class="text-on-surface font-medium">QA / Accreditation Unit</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Mar 18, 2026 08:30</span>
                        </div>
                    </td>

                    <td class="py-3.5 px-4 text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-primary hover:text-on-surface transition-colors" title="View / Decrypt File">
                                <span class="material-symbols-outlined text-[18px]">download</span>
                            </button>
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Inspect Metadata">
                                <span class="material-symbols-outlined text-[18px]">policy</span>
                            </button>
                            <button class="p-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Share with Department Faculty">
                                <span class="material-symbols-outlined text-[18px]">share</span>
                            </button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <!-- LEDGER FOOTER -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm pt-space-xs text-on-surface-variant font-label-sm text-label-sm border-t border-white/5">

        <div class="flex items-center gap-space-sm">
            <span>Displaying 5 of 430 total CEIT archived artifacts</span>
            <span class="text-primary font-semibold">• Zero-Knowledge Merkle Root Verified</span>
        </div>

        <div class="flex items-center gap-space-xs">
            <button class="px-2.5 py-1 rounded bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors disabled:opacity-50" disabled>Previous</button>
            <span class="px-2 py-1 text-on-surface font-bold">1 / 86</span>
            <button class="px-2.5 py-1 rounded bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors">Next</button>
        </div>
    </div>
</div>

<!-- SECTION 6: SECURITY DOSSIER -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-space-md">

    <div class="p-space-md rounded-xl shadow-sm flex flex-col justify-between border border-white/5" style="background: #152238;">
        <div class="flex flex-col space-y-space-xs">
            <div class="flex items-center gap-space-xs text-primary">
                <span class="material-symbols-outlined text-[20px]">fingerprint</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Digital Signature Chain</span>
            </div>

            <p class="font-body-sm text-body-sm text-on-surface-variant">
                All submitted files are signed by authorized CEIT Faculty key pair and timestamped with CvSU hardware tokens.
            </p>
        </div>

        <div class="pt-space-md">
            <div class="p-space-xs rounded bg-surface-container font-code-snippet text-code-snippet text-primary break-all font-mono">
                PGP KEY: CEIT-PUBKEY-4F8A-99B2-C024-CVSU
            </div>
        </div>
    </div>

    <div class="p-space-md rounded-xl shadow-sm flex flex-col justify-between border border-white/5" style="background: #152238;">
        <div class="flex flex-col space-y-space-xs">
            <div class="flex items-center gap-space-xs text-secondary">
                <span class="material-symbols-outlined text-[20px]">verified</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">CHED Level IV Standing</span>
            </div>

            <p class="font-body-sm text-body-sm text-on-surface-variant">
                Repository conforms strictly with Commission on Higher Education (CHED) Memorandum Order OBE curriculum compliance.
            </p>
        </div>

        <div class="pt-space-md flex items-center justify-between font-label-sm text-label-sm text-on-surface">
            <span>Status: <strong class="text-emerald-400">Verified Active</strong></span>
            <span class="text-secondary font-bold">Valid through 2028</span>
        </div>
    </div>

    <div class="p-space-md rounded-xl shadow-sm flex flex-col justify-between border border-white/5" style="background: #152238;">
        <div class="flex flex-col space-y-space-xs">
            <div class="flex items-center gap-space-xs text-tertiary">
                <span class="material-symbols-outlined text-[20px]">security_update_good</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Tamper Protection</span>
            </div>

            <p class="font-body-sm text-body-sm text-on-surface-variant">
                Real-time hash comparison prevents unauthorized revisions or historical substitution of board-approved syllabi.
            </p>
        </div>

        <div class="pt-space-md flex items-center justify-between font-label-sm text-label-sm">
            <span class="text-on-surface-variant">Last Full-Vault Audit:</span>
            <span class="text-primary font-bold font-mono">03:00 UTC (100% Match)</span>
        </div>
    </div>

</div>

</div>
</div>

<!-- PAGE SCRIPTS -->
<script>
    // Search Department Repository Ledger
    document.getElementById('ledger-search')?.addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();

        document.querySelectorAll('tbody tr').forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(term) ? '' : 'none';
        });
    });

    // Export Department Manifest
    document.getElementById('btn-export-manifest')?.addEventListener('click', function() {
        alert('Exporting Department Ledger Manifest (CSV format) sealed with institutional SHA-256 seal.');
    });
</script>

</main>

<!-- FOOTER -->
<footer class="w-full bg-surface-container-lowest mt-space-xl py-space-lg px-space-lg">

    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-space-md">

        <div class="flex flex-col gap-space-xs">
            <span class="font-label-sm text-label-sm text-on-surface-variant font-bold">
                Cavite State University Data Privacy Act of 2012 (RA 10173) Directive Notice
            </span>

            <span class="font-body-sm text-body-sm text-on-surface-variant">
                All document transactions, SHA-256 cryptographic handshakes, and clearance authorizations are logged in real-time under zero-trust audit protocols.
            </span>
        </div>

        <div class="flex items-center gap-space-sm">
            <span class="material-symbols-outlined text-primary text-[18px]">fingerprint</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                Steganographic Watermark Protected • TLS 1.3 Strict
            </span>
        </div>

    </div>
</footer>

</div>
</body>
</html>
