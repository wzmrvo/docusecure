@extends('layouts.app', [
    'role' => 'faculty',
    'pageTitle' => 'Clearance Command & Faculty Custody',
    'breadcrumbs' => ['CvSU CEIT Enclave', 'Faculty Node', 'Clearance Command Portal']
])

@section('title', 'Faculty Clearance Command — CEIT Enclave')

@section('content')
<!-- Hero / Header Section -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 pb-6 border-b border-slate-200 dark:border-white/10">
    <div class="flex flex-col gap-1.5">
        <div class="flex items-center gap-2 flex-wrap">
            <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 dark:text-white font-sans">
                Clearance Command & Faculty Custody
            </h1>
            <x-badge tier="3" label="CEIT JURISDICTION" />
            <span class="px-2 py-0.5 rounded text-[10px] font-mono font-semibold bg-amber-500/10 text-amber-600 dark:text-amber-300 border border-amber-500/20">
                AUTH: DEPT-FAC-THESIS-CHAIR
            </span>
        </div>
        <p class="text-xs text-slate-500 dark:text-slate-400">
            Welcome back, <strong class="text-slate-800 dark:text-slate-200">Prof. Juan Dela Cruz</strong>. You possess delegated Tier 3 clearance to endorse research manuscripts, approve student slips, and sign institutional transcripts.
        </p>
    </div>

    <!-- Semi-Admin Actions Group -->
    <div class="flex items-center gap-2.5 flex-wrap">
        <button 
            type="button" 
            onclick="openModal('review-dept-slips-modal')"
            class="flex items-center gap-1.5 px-3.5 py-2 rounded-lg text-amber-600 dark:text-amber-300 bg-amber-50 dark:bg-amber-500/10 hover:bg-amber-100 dark:hover:bg-amber-500/20 border border-amber-300 dark:border-amber-400/30 text-xs font-semibold transition shadow-sm"
        >
            <span class="material-symbols-outlined text-[18px]">fact_check</span>
            <span>Review Dept Slips (5)</span>
        </button>

        <button 
            type="button" 
            onclick="openModal('upload-sealed-record-modal')"
            class="flex items-center gap-1.5 px-4 py-2 rounded-lg text-white bg-emerald-600 hover:bg-emerald-500 shadow-md text-xs font-semibold transition active:scale-95"
        >
            <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
            <span>+ Deposit Sealed Record</span>
        </button>
    </div>
</div>

<!-- Clearance & Security Matrix Pod (Visualizing All 4 Tiers with Faculty's Tier 3 Highlighted) -->
<div class="p-5 rounded-2xl bg-slate-50 dark:bg-[#111e32] border border-emerald-500/30 shadow-md">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-3 border-b border-slate-200 dark:border-white/10 mb-4">
        <div class="flex items-center gap-2.5">
            <div class="w-8 h-8 rounded-lg bg-emerald-500/20 border border-emerald-500/40 flex items-center justify-center text-emerald-500">
                <span class="material-symbols-outlined text-[20px]">verified_user</span>
            </div>
            <div>
                <h2 class="text-sm font-bold text-slate-900 dark:text-white">Faculty Clearance Matrix & Delegation Authority</h2>
                <p class="text-[11px] text-slate-500 dark:text-slate-400">Cavite State University Cryptographic Access Node • RA 10173 Zero-Trust Registry</p>
            </div>
        </div>
        <x-badge tier="3" label="TIER 3 SUB-CUSTODIAN ACTIVE" />
    </div>

    <!-- 4 Tier Pillars -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
        <!-- Tier 1 -->
        <div class="p-3.5 rounded-xl bg-white dark:bg-black/20 border border-slate-200 dark:border-white/10 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[10px] font-mono font-bold text-slate-500 dark:text-slate-400 uppercase">Tier 1 • Public</span>
                    <span class="material-symbols-outlined text-[15px] text-emerald-500">check_circle</span>
                </div>
                <span class="text-xs font-semibold text-slate-800 dark:text-white">Syllabi, Circulars & Bulletins</span>
            </div>
            <div class="mt-3 pt-2 border-t border-slate-100 dark:border-white/5 flex items-center justify-between text-[10px] font-mono">
                <span class="text-emerald-600 dark:text-emerald-400">Universal Read</span>
                <span class="text-slate-400">SHA-256</span>
            </div>
        </div>

        <!-- Tier 2 -->
        <div class="p-3.5 rounded-xl bg-white dark:bg-black/20 border border-slate-200 dark:border-white/10 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[10px] font-mono font-bold text-slate-500 dark:text-slate-400 uppercase">Tier 2 • Academic</span>
                    <span class="material-symbols-outlined text-[15px] text-emerald-500">check_circle</span>
                </div>
                <span class="text-xs font-semibold text-slate-800 dark:text-white">Curricula, Grade Rosters & QA</span>
            </div>
            <div class="mt-3 pt-2 border-t border-slate-100 dark:border-white/5 flex items-center justify-between text-[10px] font-mono">
                <span class="text-emerald-600 dark:text-emerald-400">Upload & Endorse</span>
                <span class="text-slate-400">Full R/W</span>
            </div>
        </div>

        <!-- Tier 3 (Faculty Clearance Highlighted) -->
        <div class="p-3.5 rounded-xl bg-emerald-500/10 dark:bg-emerald-950/40 border-2 border-emerald-500/60 flex flex-col justify-between shadow-sm">
            <div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[10px] font-mono font-bold text-emerald-600 dark:text-emerald-300 uppercase">Tier 3 • Confidential</span>
                    <span class="text-[9px] font-mono font-bold px-1.5 py-0.2 rounded bg-emerald-500 text-slate-950">YOUR CLEARANCE</span>
                </div>
                <span class="text-xs font-semibold text-slate-900 dark:text-white">Thesis Repositories & Evals</span>
            </div>
            <div class="mt-3 pt-2 border-t border-emerald-500/20 flex items-center justify-between text-[10px] font-mono">
                <span class="text-emerald-700 dark:text-emerald-300 font-semibold">Signatory Authority</span>
                <span class="material-symbols-outlined text-[14px] text-emerald-500">verified</span>
            </div>
        </div>

        <!-- Tier 4 -->
        <div class="p-3.5 rounded-xl bg-white dark:bg-black/20 border border-amber-400/30 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[10px] font-mono font-bold text-amber-600 dark:text-amber-400 uppercase">Tier 4 • Vault</span>
                    <span class="material-symbols-outlined text-[15px] text-amber-500">lock</span>
                </div>
                <span class="text-xs font-semibold text-slate-800 dark:text-white">Board Resolutions & Legal Seal</span>
            </div>
            <div class="mt-3 pt-2 border-t border-slate-100 dark:border-white/5 flex items-center justify-between text-[10px] font-mono">
                <span class="text-amber-600 dark:text-amber-300">Dual Slip Req.</span>
                <a href="{{ route('faculty.preview.tier-4-access-request') }}" class="underline hover:text-amber-400">Elevate Slip</a>
            </div>
        </div>
    </div>
</div>

<!-- 4 Key Metrics Row -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <x-stat-card 
        icon="folder_special"
        label="Total Sealed Records"
        value="{{ number_format($documentCount) }}"
        badge="{{ $documents->count() }} Recent"
        badgeType="success"
        subtitle="CEIT Enclave Document Storage"
    />

    <x-stat-card 
        icon="task_alt"
        label="Active Sealed Archive"
        value="{{ number_format($sealedDocumentCount) }}"
        badge="{{ $documentCount > 0 ? number_format(($sealedDocumentCount / $documentCount) * 100, 1) : '0.0' }}% Sealed"
        badgeType="success"
        subtitle="RA 10173 Cryptographic Lock"
    />

    <x-stat-card 
        icon="pending_actions"
        label="Pending Clearance Slips"
        value="{{ number_format($pendingAccessRequests) }}"
        badge="ACTION REQ"
        badgeType="warning"
        subtitle="3 Thesis Clearances • 2 Tier 4 Slips"
        :borderHighlight="true"
    />

    <x-stat-card 
        icon="badge"
        label="Dept Personnel"
        value="{{ number_format($personnelCount) }}"
        subtitle="{{ number_format($personnelCount) }} institutional accounts"
    />
</div>

<!-- Middle Grid: Telemetry & Security Health -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
    <!-- Chart Telemetry (8 Cols) -->
    <div class="lg:col-span-8 flex flex-col justify-between p-5 rounded-2xl bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 shadow-sm">
        <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-white/10 mb-4">
            <div>
                <div class="flex items-center gap-2">
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">Clearance & Retrieval Telemetry</h3>
                    <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20">NODE: CEIT-01</span>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Daily cryptographic verification handshake volume</p>
            </div>
            <span class="text-xs font-mono text-slate-400">7-Day Rolling</span>
        </div>

        <!-- CSS Bar Graph -->
        <div class="w-full h-44 flex items-end justify-between gap-3 px-4 pt-4">
            @foreach(['Mon' => 70, 'Tue' => 50, 'Wed' => 85, 'Thu' => 60, 'Fri' => 95, 'Sat' => 35, 'Sun' => 45] as $day => $pct)
                <div class="flex-1 flex flex-col items-center gap-2 group cursor-pointer">
                    <div class="w-full flex items-end justify-center h-32">
                        <div class="w-5 rounded-t bg-emerald-600 dark:bg-emerald-500 group-hover:brightness-125 transition-all" style="height: {{ $pct }}%"></div>
                    </div>
                    <span class="text-[11px] font-mono text-slate-500 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white">{{ $day }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Security & Integrity Overview (4 Cols) -->
    <div class="lg:col-span-4 flex flex-col justify-between p-5 rounded-2xl bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 shadow-sm">
        <div>
            <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-white/10 mb-3">
                <h3 class="text-sm font-bold text-slate-900 dark:text-white">Security & Integrity</h3>
                <span class="text-[10px] font-mono text-emerald-600 dark:text-emerald-400 font-semibold">CEIT HSM</span>
            </div>

            <div class="p-3.5 rounded-xl bg-slate-50 dark:bg-[#111e32] border border-slate-200 dark:border-white/10 mb-3">
                <div class="flex items-center justify-between text-xs mb-1.5">
                    <span class="font-bold text-slate-900 dark:text-white">98% Classified & Sealed</span>
                    <span class="text-amber-600 dark:text-amber-400 font-mono text-[11px]">62 PENDING</span>
                </div>
                <div class="w-full h-2 rounded bg-slate-200 dark:bg-white/10 overflow-hidden">
                    <div class="h-full bg-emerald-500 rounded" style="width: 98%"></div>
                </div>
                <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-2 leading-relaxed">
                    {{ number_format($sealedDocumentCount) }} of {{ number_format($documentCount) }} stored files marked as sealed.
                </p>
            </div>

            <div class="flex flex-col gap-1.5 text-xs font-mono text-slate-500 dark:text-slate-400">
                <div class="flex items-center justify-between">
                    <span>Audit Integrity:</span>
                    <span class="text-emerald-600 dark:text-emerald-400 font-semibold">SHA-256 Validated</span>
                </div>
                <div class="flex items-center justify-between">
                    <span>Hardware Enclave:</span>
                    <span class="text-amber-600 dark:text-amber-400 font-semibold">FIPS 140-3 Active</span>
                </div>
                <div class="flex items-center justify-between">
                    <span>Sub-Custodian Stamp:</span>
                    <span class="text-slate-700 dark:text-slate-300">SEC-CEIT-0994-OK</span>
                </div>
            </div>
        </div>

        <div class="pt-3 border-t border-slate-200 dark:border-white/10 mt-4">
            <a href="{{ route('faculty.preview.document-library') }}" class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 hover:underline flex items-center gap-1 font-mono">
                <span>View Full Document Library</span>
                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
            </a>
        </div>
    </div>
</div>

<!-- Bottom Section: Recent Documents & Live Audit Feed -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
    <!-- Recent Documents (8 Cols) -->
    <div class="lg:col-span-8 bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm">
        <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-white/10 mb-4">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-emerald-500 text-[20px]">source</span>
                <h3 class="text-sm font-bold text-slate-900 dark:text-white">CEIT Clearance & Repository Documents</h3>
            </div>
            <a href="{{ route('faculty.preview.department-records') }}" class="text-xs font-mono text-emerald-600 dark:text-emerald-400 hover:underline flex items-center gap-1">
                <span>All Records</span>
                <span class="material-symbols-outlined text-[13px]">arrow_forward</span>
            </a>
        </div>

        <!-- Document Item Rows -->
        <div class="flex flex-col gap-2.5">
            <div class="p-3 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3 hover:border-emerald-500/30 transition">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-9 h-9 rounded-lg bg-emerald-500/10 text-emerald-500 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[18px]">description</span>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="text-xs font-bold text-slate-900 dark:text-white truncate">CEIT Computer Studies Faculty Merit & Tenure Guidelines 2026.pdf</span>
                        <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400">Academic • CEIT Dean • 2.4 MB • HASH: 8bf3...a12c</span>
                    </div>
                </div>
                <div class="flex items-center gap-2 shrink-0">
                    <x-badge tier="3" label="Tier 3 Authorized" />
                    <button type="button" class="p-1 rounded hover:bg-slate-200 dark:hover:bg-white/10 text-slate-500 hover:text-slate-900 dark:hover:text-white" title="Download Record">
                        <span class="material-symbols-outlined text-[16px]">download</span>
                    </button>
                </div>
            </div>

            <div class="p-3 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3 hover:border-amber-400/30 transition">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-9 h-9 rounded-lg bg-amber-500/10 text-amber-500 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[18px]">gavel</span>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="text-xs font-bold text-slate-900 dark:text-white truncate">Board of Regents Resolution No. 2026-094.pdf</span>
                        <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400">Administrative • Sealed Yesterday • 840 KB • Vault Tier 4</span>
                    </div>
                </div>
                <div class="flex items-center gap-2 shrink-0">
                    <x-badge tier="4" label="Dual Slip Req" />
                    <a href="{{ route('faculty.preview.tier-4-access-request') }}" class="px-2.5 py-1 rounded bg-amber-500/15 border border-amber-400/30 text-amber-600 dark:text-amber-300 text-[11px] font-mono font-medium hover:bg-amber-500/25 transition">
                        Request Slip
                    </a>
                </div>
            </div>

            <div class="p-3 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3 hover:border-emerald-500/30 transition">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-9 h-9 rounded-lg bg-emerald-500/10 text-emerald-500 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[18px]">verified</span>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="text-xs font-bold text-slate-900 dark:text-white truncate">BS Computer Science CHED Level IV Re-Accreditation.pdf</span>
                        <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400">Accreditation & QA • 14.8 MB • Endorsed by Juan Dela Cruz</span>
                    </div>
                </div>
                <div class="flex items-center gap-2 shrink-0">
                    <x-badge tier="3" label="Tier 3 Endorsed" />
                    <button type="button" class="p-1 rounded hover:bg-slate-200 dark:hover:bg-white/10 text-slate-500 hover:text-slate-900 dark:hover:text-white" title="Download Record">
                        <span class="material-symbols-outlined text-[16px]">download</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Live Audit Telemetry (4 Cols) -->
    <div class="lg:col-span-4 bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 rounded-2xl p-5 shadow-sm">
        <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-white/10 mb-3">
            <h3 class="text-sm font-bold text-slate-900 dark:text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-emerald-500 text-[18px]">history</span>
                <span>Audit Telemetry</span>
            </h3>
            <span class="text-[10px] font-mono text-emerald-600 dark:text-emerald-400 font-semibold">LIVE STREAM</span>
        </div>

        <div class="flex flex-col gap-3">
            <div class="flex items-start gap-2.5 text-xs">
                <div class="w-7 h-7 rounded-full bg-emerald-500/10 text-emerald-500 flex items-center justify-center shrink-0 mt-0.5">
                    <span class="material-symbols-outlined text-[15px]">check_circle</span>
                </div>
                <div class="flex flex-col min-w-0">
                    <span class="text-slate-800 dark:text-white font-medium">Dr. Davis approved Tier 3 slip</span>
                    <span class="text-[10px] font-mono text-slate-400">18 min ago • Token #883-CEIT</span>
                </div>
            </div>

            <div class="flex items-start gap-2.5 text-xs">
                <div class="w-7 h-7 rounded-full bg-amber-500/10 text-amber-500 flex items-center justify-center shrink-0 mt-0.5">
                    <span class="material-symbols-outlined text-[15px]">pending_actions</span>
                </div>
                <div class="flex flex-col min-w-0">
                    <span class="text-slate-800 dark:text-white font-medium">3 student clearances submitted to you</span>
                    <span class="text-[10px] font-mono text-amber-600 dark:text-amber-400">42 min ago • Awaiting Endorsement</span>
                </div>
            </div>

            <div class="flex items-start gap-2.5 text-xs">
                <div class="w-7 h-7 rounded-full bg-sky-500/10 text-sky-500 flex items-center justify-center shrink-0 mt-0.5">
                    <span class="material-symbols-outlined text-[15px]">upload_file</span>
                </div>
                <div class="flex flex-col min-w-0">
                    <span class="text-slate-800 dark:text-white font-medium">Faculty Handbook 2026 deposited</span>
                    <span class="text-[10px] font-mono text-slate-400">2 hrs ago • Academic Affairs</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('modals')
<!-- Deposit Sealed Record Modal -->
<x-modal 
    id="upload-sealed-record-modal" 
    title="Deposit Sealed Institutional Record" 
    subtitle="CEIT Enclave Cryptographic Document Ingestion"
    icon="cloud_upload"
>
    <form action="{{ route('faculty.submit-department-file') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
        @csrf
        <div>
            <label class="block text-xs font-mono font-semibold uppercase text-slate-700 dark:text-slate-300 mb-1">
                Document Title
            </label>
            <input type="text" name="title" required placeholder="e.g. BSCS Thesis Defense Clearance Docket 2026" class="w-full text-xs rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2.5 text-slate-900 dark:text-white">
        </div>

        <div class="grid grid-cols-2 gap-3">
            <div>
                <label class="block text-xs font-mono font-semibold uppercase text-slate-700 dark:text-slate-300 mb-1">
                    Clearance Tier
                </label>
                <select name="tier" class="w-full text-xs rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-300 dark:border-white/10 p-2.5 text-slate-900 dark:text-white">
                    <option value="tier-2">Tier 2 • Academic Internal</option>
                    <option value="tier-3" selected>Tier 3 • Dept Confidential</option>
                </select>
            </div>
            <div>
                <label class="block text-xs font-mono font-semibold uppercase text-slate-700 dark:text-slate-300 mb-1">
                    Department Unit
                </label>
                <input type="text" value="CEIT - Dept of Computer Studies" readonly class="w-full text-xs rounded-xl bg-slate-100 dark:bg-white/10 border border-slate-300 dark:border-white/10 p-2.5 text-slate-500 dark:text-slate-400 font-mono">
            </div>
        </div>

        <div>
            <label class="block text-xs font-mono font-semibold uppercase text-slate-700 dark:text-slate-300 mb-1">
                Attach File (PDF, DOCX up to 25MB)
            </label>
            <div class="border-2 border-dashed border-slate-300 dark:border-white/15 rounded-xl p-6 text-center hover:border-emerald-500 transition cursor-pointer">
                <span class="material-symbols-outlined text-[32px] text-emerald-500">upload_file</span>
                <p class="text-xs text-slate-700 dark:text-slate-300 font-semibold mt-1">Click to upload or drag and drop</p>
                <p class="text-[10px] text-slate-400 font-mono">SHA-256 fingerprint will be automatically embedded</p>
            </div>
        </div>

        <div class="flex items-center justify-end gap-3 pt-3 border-t border-slate-200 dark:border-white/10">
            <button type="button" onclick="closeModal('upload-sealed-record-modal')" class="px-4 py-2 rounded-xl border border-slate-300 dark:border-white/10 text-xs font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition">
                Cancel
            </button>
            <button type="button" onclick="closeModal('upload-sealed-record-modal'); alert('Document queued for steganographic hash calculation and sealed.');" class="px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold shadow-sm transition">
                Sign & Deposit Record
            </button>
        </div>
    </form>
</x-modal>

<!-- Review Department Slips Modal -->
<x-modal 
    id="review-dept-slips-modal" 
    title="Department Clearance Requests" 
    subtitle="5 Student Slips Pending Dela Cruz Faculty Endorsement"
    icon="fact_check"
    maxWidth="max-w-2xl"
>
    <div class="flex flex-col gap-3">
        <div class="p-3 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs font-bold text-slate-900 dark:text-white">Maria Santos (2023-10492-CS)</span>
                <span class="text-[10px] font-mono text-slate-500">BSCS Thesis Manuscript Final Defense Endorsement</span>
            </div>
            <div class="flex items-center gap-2">
                <button type="button" onclick="alert('Clearance docket endorsed under Tier 3 key signature.'); closeModal('review-dept-slips-modal');" class="px-3 py-1 rounded bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-medium transition">
                    Endorse
                </button>
                <button type="button" class="px-2.5 py-1 rounded border border-slate-300 dark:border-white/10 text-xs text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition">
                    Details
                </button>
            </div>
        </div>

        <div class="p-3 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/10 flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-xs font-bold text-slate-900 dark:text-white">Alexander Reyes (2022-01923-IT)</span>
                <span class="text-[10px] font-mono text-slate-500">Capstone Project Source Code Verification Clearance</span>
            </div>
            <div class="flex items-center gap-2">
                <button type="button" onclick="alert('Clearance docket endorsed under Tier 3 key signature.'); closeModal('review-dept-slips-modal');" class="px-3 py-1 rounded bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-medium transition">
                    Endorse
                </button>
                <button type="button" class="px-2.5 py-1 rounded border border-slate-300 dark:border-white/10 text-xs text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition">
                    Details
                </button>
            </div>
        </div>
    </div>

    <x-slot name="footer">
        <button type="button" onclick="closeModal('review-dept-slips-modal')" class="px-4 py-2 rounded-xl border border-slate-300 dark:border-white/10 text-xs font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 transition">
            Close Queue
        </button>
    </x-slot>
</x-modal>
@endpush
