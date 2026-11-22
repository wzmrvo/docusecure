<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DocuSecure - Institutional Account Request Modal | Cavite State University</title>

<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@500;600&amp;display=swap" rel="stylesheet"/>

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                mono: ['"JetBrains Mono"', 'monospace'],
            },
            colors: {
                cvsuNavy: {
                    DEFAULT: '#173153',
                    hover: '#1f3f69',
                    dark: '#0f223a',
                },
                cvsuGold: {
                    DEFAULT: '#eabf55',
                    dark: '#c89d32',
                    light: '#fbf4df',
                }
            }
        }
    }
}
</script>

<style data-purpose="custom-scrollbars">
.custom-scroll::-webkit-scrollbar {
    width: 6px;
}
.custom-scroll::-webkit-scrollbar-track {
    background: #f1f5f9;
}
.custom-scroll::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 9999px;
}
.custom-scroll::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}
</style>

<style data-purpose="background-mesh-pattern">
.cyber-grid {
    background-size: 32px 32px;
    background-image:
        linear-gradient(to right, rgba(255, 255, 255, 0.04) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
}
</style>
</head>

<body class="font-sans antialiased text-slate-800 bg-slate-900 min-h-screen relative overflow-x-hidden select-none">

<!-- Base Layout Layer -->
<div aria-hidden="true" class="fixed inset-0 w-full min-h-screen flex flex-col lg:flex-row pointer-events-none select-none z-0">

    <!-- Institutional Navy Left Section -->
    <div class="w-full lg:w-1/2 bg-[#173153] text-white p-8 lg:p-14 flex flex-col justify-between relative cyber-grid">

        <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <!-- Top Branding -->
        <div class="relative z-10">
            <div class="flex items-center gap-3">
                <img alt="Cavite State University Seal" class="w-10 h-10 object-contain drop-shadow" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBatywbcQGfpsHMxAQijnoqwhBdKwwRjb8wbU5Mqp22VPriuz6U2kD9IjZ-lr3Fnn5Adr-wc_s6bX7rOtRTBa3yJy_IQ1ynBSm2HULMcnbZYaqkmqWWnHNsOmN5aDOOBnhUctaanL8ls4D1kfqVzCEh-M8whuGo37DbVA64Msv835pStyuDAt_8-LVP0ldpTjI-ff6xnxchcsdEePPLM-gwj_rI1XCEavE9oCdWt30Q9h7AzB2dw56D"/>

                <div class="flex items-center gap-2">
                    <span class="font-bold text-xl tracking-tight text-white flex items-center gap-1.5">
                        <svg class="w-5 h-5 text-[#eabf55]" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        DocuSecure
                    </span>
                    <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded bg-amber-400/20 text-[#eabf55] border border-amber-400/30">Official</span>
                </div>
            </div>

            <p class="text-xs text-slate-300 ml-13 mt-0.5 tracking-wide">Cavite State University System</p>
        </div>

        <!-- Hero Statement -->
        <div class="my-auto py-12 relative z-10 max-w-lg">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-[#eabf55]/15 text-[#eabf55] border border-[#eabf55]/30 mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-[#eabf55]"></span>
                SECURITY-FIRST DESIGN
            </div>

            <h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight text-white mb-4">
                Your documents.<br/>
                <span class="text-slate-200">Protected at every step.</span>
            </h1>

            <p class="text-slate-300 text-sm lg:text-base leading-relaxed">
                One trusted cryptographic enclave to organize Cavite State University's institutional knowledge, research archives, and verified academic credentials.
            </p>

            <!-- Graphic Key Card -->
            <div class="mt-8 p-4 rounded-xl bg-white/5 border border-white/10 backdrop-blur flex items-center gap-4 max-w-sm">
                <div class="w-12 h-12 rounded-lg bg-amber-500/20 border border-amber-500/30 flex items-center justify-center text-[#eabf55]">
                    <svg class="w-6 h-6" fill="currentColor" viewbox="0 0 20 20">
                        <path clip-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" fill-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-xs font-semibold text-white">Public Key Infrastructure (PKI)</div>
                    <div class="text-[11px] text-slate-300">Automated end-to-end ledger validation</div>
                </div>
            </div>
        </div>

        <!-- Bottom Trust Badges -->
        <div class="pt-6 border-t border-white/10 flex items-center justify-between text-xs text-slate-400 relative z-10">
            <span>Security goals: encrypted storage • role-based access • full audit trail</span>
            <span class="font-mono text-[11px]">ISO/IEC 27001 ALIGNED</span>
        </div>
    </div>

    <!-- Right Side: Simulated Login Background -->
    <div class="w-full lg:w-1/2 bg-white p-8 lg:p-16 flex flex-col justify-center items-center">
        <div class="w-full max-w-md space-y-6 opacity-60">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Welcome back</h2>
                <p class="text-sm text-slate-500 mt-1">Sign in to your secure institutional workspace.</p>
            </div>

            <div class="p-3 bg-emerald-50 border border-emerald-200 rounded-lg text-xs text-emerald-800 flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                CvSU Identity Gateway online and ready
            </div>

            <div class="space-y-4">
                <div class="h-10 bg-slate-100 rounded border border-slate-200"></div>
                <div class="h-10 bg-slate-100 rounded border border-slate-200"></div>
                <div class="h-10 bg-emerald-800 rounded"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Dialog Overlay -->
<main class="relative z-50 min-h-screen w-full flex items-center justify-center p-4 sm:p-6 md:p-8" data-purpose="modal-overlay" style="background: rgba(15, 23, 42, 0.72); backdrop-filter: blur(10px);">

    <!-- Institutional Account Request Modal -->
    <div aria-labelledby="modal-title" aria-modal="true" class="w-full max-w-[780px] bg-white rounded-2xl shadow-2xl ring-1 ring-black/10 overflow-hidden flex flex-col max-h-[92vh] animate-in fade-in zoom-in-95 duration-200" data-purpose="request-clearance-modal" role="dialog">

        <div aria-hidden="true" class="h-1.5 w-full bg-[#eabf55]"></div>

        <!-- Modal Header -->
        <header class="bg-[#173153] px-6 py-5 border-b border-white/10 relative text-white flex-shrink-0" data-purpose="modal-header">
            <div class="flex items-start justify-between gap-4">
                <div class="flex items-start gap-3.5">

                    <div class="w-[44px] h-[44px] rounded-lg bg-white/10 p-1 flex-shrink-0 flex items-center justify-center border border-white/15 shadow-inner">
                        <img alt="CvSU Seal" class="w-full h-full object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBatywbcQGfpsHMxAQijnoqwhBdKwwRjb8wbU5Mqp22VPriuz6U2kD9IjZ-lr3Fnn5Adr-wc_s6bX7rOtRTBa3yJy_IQ1ynBSm2HULMcnbZYaqkmqWWnHNsOmN5aDOOBnhUctaanL8ls4D1kfqVzCEh-M8whuGo37DbVA64Msv835pStyuDAt_8-LVP0ldpTjI-ff6xnxchcsdEePPLM-gwj_rI1XCEavE9oCdWt30Q9h7AzB2dw56D"/>
                    </div>

                    <div>
                        <div class="flex flex-wrap items-center gap-2">
                            <h2 class="text-lg font-bold tracking-tight text-white leading-tight" id="modal-title">
                                Request Institutional Account &amp; Clearance
                            </h2>

                            <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold tracking-wider bg-[#eabf55]/15 text-[#eabf55] border border-[#eabf55]/30">
                                CVSU MIS INTAKE
                            </span>
                        </div>

                        <p class="text-xs text-slate-300 mt-1 max-w-xl leading-relaxed">
                            Submit your institutional credentials for identity verification. Once verified by the MIS Administrator, your clearance tier (Tier 1–4) and cryptographic access key will be issued.
                        </p>

                        <div class="mt-2 font-mono text-[11px] text-[#eabf55] tracking-wide flex items-center gap-1.5">
                            <span class="inline-block w-1.5 h-1.5 rounded-full bg-[#eabf55]"></span>
                            REF: DOCUSEC-REQ-2026-v4 • Zero-Trust Enclave Intake
                        </div>
                    </div>
                </div>

                <!-- Close Action -->
                <button aria-label="Close modal dialog" class="text-slate-400 hover:text-white transition-colors p-1.5 -mr-1.5 rounded-lg hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-[#eabf55]" type="button">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
                        <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </header>

        <!-- Modal Scrollable Body -->
        <section class="overflow-y-auto px-6 py-6 space-y-7 custom-scroll flex-1 bg-white text-slate-800" data-purpose="modal-form-content">

            <!-- IMPORTANT: Updated form submission behavior -->
            <form class="space-y-7" id="clearance-request-form" onsubmit="window.location.href='{{ route('login') }}'; return false;">

                <!-- Section 1: Personal & Institutional Identity -->
                <div class="space-y-3.5" data-purpose="form-section-personal">
                    <div class="flex items-center justify-between pb-1.5 border-b border-slate-200">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 flex items-center gap-2">
                            <span class="flex items-center justify-center w-5 h-5 rounded-full bg-slate-100 text-slate-700 text-[11px] font-bold">1</span>
                            Personal &amp; Institutional Identity
                        </h3>

                        <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold tracking-wide bg-emerald-50 text-emerald-800 border border-emerald-200">
                            MANDATORY VALIDATION
                        </span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <!-- Full Legal Name -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1" for="fullName">
                                Full Legal Name <span class="text-rose-600 font-bold">*</span>
                            </label>
                            <input class="w-full text-xs rounded-lg border-slate-300 focus:border-[#173153] focus:ring-[#173153] shadow-sm py-2 px-3 placeholder:text-slate-400" id="fullName" name="fullName" placeholder="e.g. Engr. Maria Santos, M.Sc." required="" type="text" value="Engr. Maria Santos, M.Sc."/>
                            <p class="text-[11px] text-slate-500 mt-1">Include academic credentials, title, or post-nominal suffix.</p>
                        </div>

                        <!-- Employee / Student ID Number -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1" for="idNumber">
                                Employee / Student ID Number <span class="text-rose-600 font-bold">*</span>
                            </label>
                            <input class="w-full text-xs font-mono uppercase rounded-lg border-slate-300 focus:border-[#173153] focus:ring-[#173153] shadow-sm py-2 px-3 placeholder:text-slate-400" id="idNumber" name="idNumber" placeholder="E.G. 2026-CEIT-4491" required="" type="text" value="2026-CEIT-4491"/>
                            <p class="text-[11px] text-slate-500 mt-1">Official registrar-assigned badge code or faculty serial.</p>
                        </div>

                        <!-- CvSU Email -->
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <label class="block text-xs font-bold text-slate-700" for="cvsuEmail">
                                    Cavite State University Email <span class="text-rose-600 font-bold">*</span>
                                </label>
                                <span class="text-[10px] font-mono font-medium text-slate-400 flex items-center gap-1">
                                    <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewbox="0 0 20 20">
                                        <path clip-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" fill-rule="evenodd"></path>
                                    </svg>
                                    256-BIT ENCRYPTED
                                </span>
                            </div>

                            <div class="relative rounded-lg shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                        <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                </div>
                                <input class="w-full pl-9 text-xs rounded-lg border-slate-300 focus:border-[#173153] focus:ring-[#173153] shadow-sm py-2 px-3 placeholder:text-slate-400" id="cvsuEmail" name="cvsuEmail" placeholder="name.surname@cvsu.edu.ph" required="" type="email" value="m.santos@cvsu.edu.ph"/>
                            </div>
                            <p class="text-[11px] text-slate-500 mt-1">Must be an active institutional domain account ending in @cvsu.edu.ph.</p>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1" for="phoneNumber">
                                Contact Phone / Mobile Number <span class="text-rose-600 font-bold">*</span>
                            </label>
                            <input class="w-full text-xs rounded-lg border-slate-300 focus:border-[#173153] focus:ring-[#173153] shadow-sm py-2 px-3 placeholder:text-slate-400" id="phoneNumber" name="phoneNumber" placeholder="+63 917 000 0000" required="" type="tel" value="+63 917 849 2039"/>
                            <p class="text-[11px] text-slate-500 mt-1">Used strictly for out-of-band clearance authorization PINs.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Academic Affiliation & Role Clearance -->
                <div class="space-y-3.5" data-purpose="form-section-affiliation">
                    <div class="flex items-center justify-between pb-1.5 border-b border-slate-200">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 flex items-center gap-2">
                            <span class="flex items-center justify-center w-5 h-5 rounded-full bg-slate-100 text-slate-700 text-[11px] font-bold">2</span>
                            Academic Affiliation &amp; Role Requested
                        </h3>

                        <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold tracking-wide bg-blue-50 text-blue-800 border border-blue-200">
                            TIER DESIGNATION
                        </span>
                    </div>

                    <!-- College & Department Selection -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1" for="collegeUnit">
                                College / Administrative Unit <span class="text-rose-600 font-bold">*</span>
                            </label>
                            <select class="w-full text-xs rounded-lg border-slate-300 focus:border-[#173153] focus:ring-[#173153] shadow-sm py-2 px-3" id="collegeUnit" name="collegeUnit" required="">
                                <option selected="">College of Engineering and Information Technology (CEIT)</option>
                                <option>College of Arts and Sciences (CAS)</option>
                                <option>College of Agriculture, Food, Environment and Natural Resources (CAFENR)</option>
                                <option>College of Education (CED)</option>
                                <option>College of Economics, Management and Development Studies (CEMDS)</option>
                                <option>College of Nursing (CON)</option>
                                <option>College of Criminal Justice (CCJ)</option>
                                <option>College of Veterinary Medicine and Biomedical Sciences (CVMBS)</option>
                                <option>Graduate School and Open Learning College</option>
                                <option>University Administration Office (Main Campus)</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1" for="deptUnit">
                                Department / Program Unit <span class="text-rose-600 font-bold">*</span>
                            </label>
                            <input class="w-full text-xs rounded-lg border-slate-300 focus:border-[#173153] focus:ring-[#173153] shadow-sm py-2 px-3 placeholder:text-slate-400" id="deptUnit" name="deptUnit" placeholder="e.g. Department of Information Technology" required="" type="text" value="Department of Information Technology"/>
                        </div>
                    </div>

                    <!-- Clearance Level Cards -->
                    <div class="pt-2">
                        <label class="block text-[11px] font-bold text-slate-600 tracking-wider uppercase mb-2.5">
                            REQUESTED CLEARANCE LEVEL &amp; ACCESS AUTHORITY <span class="text-rose-600">*</span>
                        </label>

                        <div aria-label="Requested clearance level" class="grid grid-cols-1 md:grid-cols-2 gap-3" role="radiogroup">

                            <!-- Tier 1 -->
                            <label class="relative flex flex-col p-3.5 bg-slate-50/80 rounded-xl border-2 border-[#173153] cursor-pointer shadow-sm hover:border-[#173153] transition-all">
                                <div class="flex items-center justify-between mb-1.5">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold tracking-wide bg-sky-100 text-[#0369a1]">TIER 1 ACCESS</span>
                                    <input checked="" class="h-4 w-4 text-[#173153] border-slate-300 focus:ring-[#173153]" name="clearanceTier" type="radio" value="tier1"/>
                                </div>
                                <span class="text-xs font-bold text-slate-900 mb-1">Student / Researcher</span>
                                <span class="text-[11px] text-slate-600 leading-snug">Read-only clearance for personal academic transcripts, evaluation records, and thesis submissions.</span>
                            </label>

                            <!-- Tier 2 -->
                            <label class="relative flex flex-col p-3.5 bg-white rounded-xl border border-slate-200 cursor-pointer hover:border-slate-300 transition-all">
                                <div class="flex items-center justify-between mb-1.5">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold tracking-wide bg-blue-50 text-blue-700">TIER 2 ACCESS</span>
                                    <input class="h-4 w-4 text-[#173153] border-slate-300 focus:ring-[#173153]" name="clearanceTier" type="radio" value="tier2"/>
                                </div>
                                <span class="text-xs font-bold text-slate-900 mb-1">Academic Personnel / Staff</span>
                                <span class="text-[11px] text-slate-600 leading-snug">Department-level document routing, collegiate circular reviews, and internal memorandum filing.</span>
                            </label>

                            <!-- Tier 3 -->
                            <label class="relative flex flex-col p-3.5 bg-white rounded-xl border border-slate-200 cursor-pointer hover:border-slate-300 transition-all">
                                <div class="flex items-center justify-between mb-1.5">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold tracking-wide bg-emerald-50 text-emerald-700">TIER 3 ACCESS</span>
                                    <input class="h-4 w-4 text-[#173153] border-slate-300 focus:ring-[#173153]" name="clearanceTier" type="radio" value="tier3"/>
                                </div>
                                <span class="text-xs font-bold text-slate-900 mb-1">Faculty / Sub-Custodian</span>
                                <span class="text-[11px] text-slate-600 leading-snug">Confidential grade attestation, student recommendation generation, and signed collegiate seals.</span>
                            </label>

                            <!-- Tier 4 -->
                            <label class="relative flex flex-col p-3.5 bg-white rounded-xl border border-slate-200 cursor-pointer hover:border-slate-300 transition-all">
                                <div class="flex items-center justify-between mb-1.5">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold tracking-wide bg-amber-50 text-amber-800">TIER 4 ACCESS</span>
                                    <input class="h-4 w-4 text-[#173153] border-slate-300 focus:ring-[#173153]" name="clearanceTier" type="radio" value="tier4"/>
                                </div>
                                <span class="text-xs font-bold text-slate-900 mb-1">Administrative / Executive</span>
                                <span class="text-[11px] text-slate-600 leading-snug">Registrar-level master archives, institutional policy seals, and confidential personnel dossiers.</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Purpose & Operational Justification -->
                <div class="space-y-3.5" data-purpose="form-section-justification">
                    <div class="flex items-center justify-between pb-1.5 border-b border-slate-200">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 flex items-center gap-2">
                            <span class="flex items-center justify-center w-5 h-5 rounded-full bg-slate-100 text-slate-700 text-[11px] font-bold">3</span>
                            Purpose &amp; Operational Justification
                        </h3>

                        <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold tracking-wide bg-slate-100 text-slate-700">
                            AUDIT LOGGED
                        </span>
                    </div>

                    <div>
                        <textarea class="w-full text-xs rounded-lg border-slate-300 focus:border-[#173153] focus:ring-[#173153] shadow-sm p-3 placeholder:text-slate-400" id="justification" name="justification" placeholder="State purpose of request, course/department assignment, or specific clearance requirements (e.g. End-of-semester transcript audit and digital validation for graduating batch 2026)..." required="" rows="3">End-of-semester transcript audit and digital validation for graduating batch 2026 computer science capstone projects.</textarea>

                        <div class="flex items-center justify-between mt-1 text-[11px] text-slate-500">
                            <span>Minimum 20 characters detailing operational necessity.</span>
                            <span class="font-mono text-slate-400">114 / 400</span>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <!-- Modal Footer -->
        <footer class="bg-slate-50 border-t border-slate-200 px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-3 flex-shrink-0" data-purpose="modal-footer">

            <div class="flex items-center gap-2 text-xs text-slate-600">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                </span>
                <span>CvSU MIS average review time: <strong class="text-slate-800 font-semibold">~1–2 working days</strong></span>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-3 w-full sm:w-auto justify-end">

                <button class="px-4 py-2 text-xs font-semibold text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-300 transition-colors shadow-sm" type="button">
                    Cancel
                </button>

                <!-- Connected to the form above -->
                <button class="px-5 py-2 text-xs font-semibold text-white bg-[#173153] hover:bg-[#1f3f69] active:bg-[#0f223a] rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#173153] focus:ring-offset-1 transition-all inline-flex items-center gap-2" type="submit" form="clearance-request-form">
                    <svg class="w-3.5 h-3.5 text-[#eabf55]" fill="currentColor" viewbox="0 0 20 20">
                        <path clip-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" fill-rule="evenodd"></path>
                    </svg>
                    <span>Submit Account Application to MIS</span>
                    <span aria-hidden="true">→</span>
                </button>
            </div>
        </footer>
    </div>
</main>
</body>
</html>