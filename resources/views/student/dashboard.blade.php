@extends('layouts.app', [
    'role' => 'student',
    'pageTitle' => 'Student Academic Portal — Enrollee Workspace',
    'breadcrumbs' => ['CvSU Student Portal', 'Academic Year 2026–2027', 'Dashboard Overview']
])

@section('title', 'Student Portal — Enrolled Scholar')

@section('content')
<!-- Student Welcome Banner -->
<div class="relative overflow-hidden rounded-2xl bg-white border border-slate-200 p-6 sm:p-8 text-slate-900 shadow-sm">
    <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="flex flex-col gap-2">
            <div class="flex items-center gap-2 flex-wrap">
                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono font-bold uppercase tracking-wider bg-sky-50 text-sky-700 border border-sky-200">
                    CEIT • Main Campus
                </span>
                <span class="text-xs text-emerald-700 flex items-center gap-1 font-medium bg-emerald-50 px-2.5 py-0.5 rounded-full border border-emerald-200">
                    <span class="material-symbols-outlined text-[14px]">verified</span> Official Student Enrollee
                </span>
                <span class="text-[11px] font-mono text-slate-600 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">
                    Bio-Auth: 0xFA71..OK
                </span>
            </div>

            <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-sans">
                Welcome back, {{ Auth::user()->name }}
            </h1>
            <p class="text-xs sm:text-sm text-slate-600 max-w-2xl leading-relaxed">
                Institutional Student • Student ID:
                <span class="font-mono font-bold text-sky-300 bg-sky-950/70 px-2 py-0.5 rounded border border-sky-400/40">{{ Auth::user()->identification_number ?: 'Pending ID' }}</span>
            </p>
        </div>

        <div class="flex items-center gap-3 shrink-0 flex-wrap sm:flex-nowrap">
            <button type="button" onclick="openModal('clearance-status-modal')" class="px-4 py-2.5 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold rounded-xl flex items-center gap-2 transition-all shadow-md active:scale-95">
                <span class="material-symbols-outlined text-[18px]">verified</span>
                <span>View Clearance Docket</span>
            </button>
            <button type="button" onclick="openModal('request-doc-modal')" class="px-4 py-2.5 bg-white/10 hover:bg-white/15 text-white text-xs font-semibold rounded-xl border border-white/20 flex items-center gap-2 transition backdrop-blur-sm">
                <span class="material-symbols-outlined text-[18px]">post_add</span>
                <span>Request Document</span>
            </button>
        </div>
    </div>
</div>

<!-- 4 Student KPI Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <x-stat-card 
        icon="assignment_turned_in"
        label="Midterm Clearance"
        value="3 of 4 Signed"
        badge="75% Complete"
        badgeType="warning"
        subtitle="Pending Cashier Subsidy Validation"
        :borderHighlight="true"
    />

    <x-stat-card 
        icon="library_books"
        label="Verified Documents"
        value="{{ number_format($documentCount) }} Files"
        badge="Tier 1-2 Accessible"
        badgeType="info"
        subtitle="Curricula, syllabi, circulars"
    />

    <x-stat-card 
        icon="verified"
        label="Academic Standing"
        value="Good Standing"
        badge="UniFAST Eligible"
        badgeType="success"
        subtitle="No scholastic deficiencies or flags"
    />

    <x-stat-card 
        icon="event_available"
        label="Term Validity"
        value="294 Days"
        subtitle="Valid until: Jul 31, 2027 PST"
    />
</div>

<!-- Main Content Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

    <!-- Left Column (8 Cols): Academic Clearance Checklist & Repository -->
    <div class="lg:col-span-8 flex flex-col gap-6">

        <!-- Academic Clearance Docket Card -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-3 border-b border-slate-200 dark:border-white/10 mb-4">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-sky-500/10 text-sky-500 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[20px]">fact_check</span>
                    </div>
                    <div>
                        <h2 class="text-sm font-bold text-slate-900 dark:text-white">Midterm Academic Clearance Checklist</h2>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400">Official clearance registry for AY 2026–2027 (1st Semester)</p>
                    </div>
                </div>
                <span class="px-2.5 py-1 rounded-md bg-amber-500/10 font-mono text-xs text-amber-600 dark:text-amber-300 font-bold border border-amber-500/20">
                    DOCKET: CLR-2026-REG-A
                </span>
            </div>

            <!-- Checklist Rows -->
            <div class="divide-y divide-slate-100 dark:divide-white/5">
                <!-- Dept Clearance -->
                <div class="py-3 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                    <div class="flex items-start gap-3">
                        <div class="p-2 rounded-lg bg-emerald-500/10 text-emerald-500 mt-0.5">
                            <span class="material-symbols-outlined text-[18px]">domain_verification</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold text-slate-900 dark:text-white">CEIT Department Clearance</span>
                                <x-badge status="verified" label="Signed & Approved" />
                            </div>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Validated by Engr. M. Ramos (Dept Chair) • Sep 12, 2026</span>
                            <span class="text-[10px] font-mono text-slate-400 mt-0.5">Hash: 0x8a92bb03c4f9cf1a7741e • Sig: ED25519-OK</span>
                        </div>
                    </div>
                    <span class="text-xs font-mono font-semibold text-emerald-600 dark:text-emerald-400 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">lock</span> LOCKED
                    </span>
                </div>

                <!-- Main Library -->
                <div class="py-3 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                    <div class="flex items-start gap-3">
                        <div class="p-2 rounded-lg bg-emerald-500/10 text-emerald-500 mt-0.5">
                            <span class="material-symbols-outlined text-[18px]">local_library</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold text-slate-900 dark:text-white">University Main Library</span>
                                <x-badge status="verified" label="Signed & Approved" />
                            </div>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Zero outstanding book accountability • Validated by C. Alcaraz</span>
                        </div>
                    </div>
                    <span class="text-xs font-mono font-semibold text-emerald-600 dark:text-emerald-400 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">lock</span> LOCKED
                    </span>
                </div>

                <!-- Registrar Evaluation -->
                <div class="py-3 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                    <div class="flex items-start gap-3">
                        <div class="p-2 rounded-lg bg-emerald-500/10 text-emerald-500 mt-0.5">
                            <span class="material-symbols-outlined text-[18px]">school</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold text-slate-900 dark:text-white">University Registrar</span>
                                <x-badge status="verified" label="Signed & Approved" />
                            </div>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Curriculum checklist 100% matched for 3rd Year Standing</span>
                        </div>
                    </div>
                    <span class="text-xs font-mono font-semibold text-emerald-600 dark:text-emerald-400 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">lock</span> LOCKED
                    </span>
                </div>

                <!-- Cashier Office (Pending) -->
                <div class="py-3 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                    <div class="flex items-start gap-3">
                        <div class="p-2 rounded-lg bg-amber-500/10 text-amber-500 mt-0.5">
                            <span class="material-symbols-outlined text-[18px]">hourglass_top</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold text-slate-900 dark:text-white">University Cashier & Assessment</span>
                                <x-badge status="pending" label="Pending Verification" />
                            </div>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">CHED UniFAST billing reconciliation in progress</span>
                        </div>
                    </div>
                    <button type="button" onclick="alert('Verification nudge sent to Cashier Assessment Officer.');" class="px-2.5 py-1 text-xs font-mono font-medium rounded bg-amber-500/15 text-amber-600 dark:text-amber-300 hover:bg-amber-500/25 transition">
                        Nudge Signatory
                    </button>
                </div>
            </div>
        </div>

        <!-- Tier 1 & Tier 2 Accessible Documents -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm">
            <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-white/10 mb-4">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sky-500 text-[20px]">folder_shared</span>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">Accessible Documents (Tier 1{{ (int) substr(Auth::user()->clearance_tier, -1) >= 2 ? ' & Tier 2' : '' }})</h3>
                </div>
                <a href="{{ route('student.preview.document-library') }}" class="text-xs font-mono text-sky-600 dark:text-sky-400 hover:underline flex items-center gap-1">
                    <span>Browse All</span>
                    <span class="material-symbols-outlined text-[13px]">arrow_forward</span>
                </a>
            </div>

            <div class="flex flex-col gap-2.5">
                @forelse ($documents as $document)
                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-200 bg-slate-50 p-3 transition hover:border-sky-500/40 dark:border-white/10 dark:bg-white/[0.02]">
                        <div class="flex min-w-0 items-center gap-3">
                            <span class="material-symbols-outlined text-sky-500 text-[20px]">description</span>
                            <div class="flex min-w-0 flex-col">
                                <span class="truncate text-xs font-bold text-slate-900 dark:text-white">{{ $document->title }}</span>
                                <span class="text-[10px] text-slate-500 dark:text-slate-400">{{ strtoupper(str_replace('tier', 'Tier ', $document->access_tier)) }} · {{ number_format($document->size_bytes / 1048576, 1) }} MB · {{ $document->tracking_number }}</span>
                            </div>
                        </div>
                        <a href="{{ route('documents.download', $document) }}" class="shrink-0 rounded-lg p-2 text-slate-500 hover:bg-slate-200 hover:text-slate-900 dark:hover:bg-white/10 dark:hover:text-white" aria-label="Download {{ $document->title }}">
                            <span class="material-symbols-outlined text-[16px]">download</span>
                        </a>
                    </div>
                @empty
                    <p class="py-4 text-xs text-slate-500 dark:text-slate-400">No accessible documents are available yet.</p>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Right Column (4 Cols): Clearance QR Token & Activity -->
    <div class="lg:col-span-4 flex flex-col gap-6">

        <!-- Steganographic Security Token Badge Card -->
        <div class="bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm text-center flex flex-col items-center">
            <span class="text-xs font-mono font-semibold uppercase text-slate-500 dark:text-slate-400">Digital Clearance Token</span>
            <div class="w-36 h-36 my-4 p-2 rounded-xl bg-white border border-slate-300 dark:border-white/20 shadow-md flex items-center justify-center">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=140x140&data=CVSU-DOCUSECURE-STU-2024-10892-FA71" alt="Clearance QR Code" class="w-full h-full object-contain">
            </div>
            <span class="font-mono text-xs font-bold text-slate-800 dark:text-white">TOKEN: CVSU-STU-2024-10892</span>
            <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-1">Present this QR code at campus gates or library verification desks.</p>
        </div>

        <!-- Student Security Notice -->
        <div class="p-4 rounded-2xl bg-sky-50 dark:bg-sky-950/20 border border-sky-300 dark:border-sky-500/30 text-xs flex flex-col gap-2">
            <div class="flex items-center gap-2 text-sky-800 dark:text-sky-300 font-bold">
                <span class="material-symbols-outlined text-[18px]">verified_user</span>
                <span>RA 10173 Privacy Compliance</span>
            </div>
            <p class="text-slate-600 dark:text-slate-400 text-[11px] leading-relaxed">
                Your student documents and grade clearance sheets are encrypted at rest with AES-256 and SHA-256 digital seals. Access is monitored and logged in the institutional ledger.
            </p>
        </div>

    </div>
</div>
@endsection

@push('modals')
<!-- Request Document Modal -->
<x-modal 
    id="request-doc-modal" 
    title="Request Academic Record" 
    subtitle="Submit Access Justification to Department Dean"
    icon="post_add"
>
    <form id="request-doc-form" method="POST" action="{{ route('student.access-requests.store') }}" class="flex flex-col gap-3.5 text-xs">
        @csrf
        <div>
            <label class="block font-mono font-semibold uppercase text-slate-700 dark:text-slate-300 mb-1">
                Document Target
            </label>
            <select name="document_id" required class="w-full text-xs rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2.5 text-slate-800 dark:text-white">
                @forelse ($accessibleDocuments as $document)
                    <option value="{{ $document->id }}">{{ $document->title }}</option>
                @empty
                    <option value="">No accessible documents available</option>
                @endforelse
            </select>
        </div>

        <div>
            <label class="block font-mono font-semibold uppercase text-slate-700 dark:text-slate-300 mb-1">
                Academic Justification / Purpose
            </label>
            <textarea name="justification" required rows="3" class="w-full text-xs rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2.5 text-slate-800 dark:text-white" placeholder="State your academic reason for requesting this document..."></textarea>
        </div>
    </form>

    <x-slot name="footer">
        <button type="button" onclick="closeModal('request-doc-modal')" class="px-3.5 py-1.5 rounded-lg border border-slate-300 dark:border-white/10 text-xs font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition">
            Cancel
        </button>
        <button type="submit" form="request-doc-form" class="px-4 py-1.5 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-semibold shadow-sm transition">
            Submit Request
        </button>
    </x-slot>
</x-modal>

<!-- Clearance Status Modal -->
<x-modal 
    id="clearance-status-modal" 
    title="Academic Clearance Slip" 
    subtitle="1st Semester AY 2026-2027 • Docket CLR-2026-REG-A"
    icon="verified"
>
    <div class="flex flex-col gap-3 text-xs">
        <div class="p-3 rounded-xl bg-amber-50 dark:bg-amber-950/20 border border-amber-300 dark:border-amber-500/30 text-amber-800 dark:text-amber-200 flex items-center justify-between font-mono">
            <span>Overall Status:</span>
            <span class="font-bold">3 of 4 Clearances Signed (75%)</span>
        </div>
        <p class="text-slate-500 dark:text-slate-400">
            Once the University Cashier reconciles your UniFAST billing, your certificate will be cryptographically released as an official PDF.
        </p>
    </div>

    <x-slot name="footer">
        <button type="button" onclick="closeModal('clearance-status-modal')" class="px-4 py-1.5 rounded-lg bg-slate-800 text-white dark:bg-white dark:text-slate-900 text-xs font-semibold shadow-sm transition">
            Close
        </button>
    </x-slot>
</x-modal>
@endpush
