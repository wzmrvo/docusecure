@extends('layouts.app', [
    'role' => 'faculty',
    'pageTitle' => 'Upload Department File',
    'breadcrumbs' => ['CvSU CEIT Enclave', 'Documents', 'Upload'],
])

@section('title', 'Upload Department File — DocuSecure')

@section('content')
@php
    $clearanceLevel = (int) substr(auth()->user()->clearance_tier, -1);
@endphp

<div class="mx-auto flex w-full max-w-5xl flex-col gap-6">
    <header class="flex flex-col gap-2 border-b border-slate-200 pb-5 dark:border-white/10">
        <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Upload a department document</h1>
        <p class="max-w-3xl text-sm text-slate-600 dark:text-slate-400">
            Uploads are stored on the private disk. The server validates the file, records its metadata, and calculates its SHA-256 digest.
            Tier 1 files are public to Students and Viewers. Tier 2 is available to eligible Students, while Tier 3 remains department-restricted. Tier 4 files are Admin-uploaded.
        </p>
    </header>

    @if (session('success'))
        <div role="status" class="rounded-xl border border-emerald-500/30 bg-emerald-500/10 p-4 text-sm text-emerald-800 dark:text-emerald-200">
            <p class="font-semibold">{{ session('success') }}</p>
            @if (session('committed_document'))
                <p class="mt-2 break-all font-mono text-xs">
                    {{ session('committed_document.original_name') }} · {{ session('committed_document.tracking_number') }}
                </p>
                <p class="mt-1 break-all font-mono text-[10px]">SHA-256: {{ session('committed_document.sha256') }}</p>
            @endif
            <a class="mt-3 inline-flex font-semibold underline underline-offset-4" href="{{ route('faculty.preview.document-library') }}">Open document library</a>
        </div>
    @endif

    @if ($errors->any())
        <div role="alert" class="rounded-xl border border-rose-500/30 bg-rose-500/10 p-4 text-sm text-rose-800 dark:text-rose-200">
            <p class="font-semibold">The upload could not be completed.</p>
            <ul class="mt-2 list-inside list-disc">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($clearanceLevel >= 1)
        <form action="{{ route('faculty.submit-department-file') }}" method="POST" enctype="multipart/form-data" class="grid gap-6 lg:grid-cols-[minmax(0,1fr)_20rem]">
            @csrf
            <section class="flex flex-col gap-5 rounded-2xl border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#0f1724]">
                <h2 class="text-base font-semibold text-slate-900 dark:text-white">File and classification</h2>

                <div class="flex flex-col gap-1.5">
                    <label for="document_title" class="text-xs font-semibold text-slate-700 dark:text-slate-300">Document title</label>
                    <input id="document_title" name="document_title" type="text" value="{{ old('document_title') }}" maxlength="255" required placeholder="Enter the official document title" class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 placeholder:text-slate-500 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/30 dark:border-white/10 dark:bg-[#111e32] dark:text-white dark:placeholder:text-slate-400">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="document_category" class="text-xs font-semibold text-slate-700 dark:text-slate-300">Category</label>
                    <select id="document_category" name="document_category" class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/30 dark:border-white/10 dark:bg-[#111e32] dark:text-white">
                        <option value="">No category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}" @selected(old('document_category') === $category->slug)>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="access_tier" class="text-xs font-semibold text-slate-700 dark:text-slate-300">Access tier</label>
                    <select id="access_tier" name="access_tier" required class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/30 dark:border-white/10 dark:bg-[#111e32] dark:text-white">
                        <option value="1" @selected(old('access_tier', '1') === '1')>Tier 1 · Public</option>
                        @if ($clearanceLevel >= 2)
                            <option value="2" @selected(old('access_tier') === '2')>Tier 2 · Academic</option>
                        @endif
                        @if ($clearanceLevel >= 3)
                            <option value="3" @selected(old('access_tier') === '3')>Tier 3 · Confidential</option>
                        @endif
                    </select>
                    <p class="text-xs leading-5 text-slate-500 dark:text-slate-400">
                        Tier 4 is reserved for Admin uploads. To access an existing Tier 4 file, submit a request for Admin approval.
                    </p>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="department_file" class="text-xs font-semibold text-slate-700 dark:text-slate-300">Choose a file</label>
                    <input id="department_file" name="department_file" type="file" accept=".pdf,.doc,.docx,.xls,.xlsx,.zip" required class="block w-full rounded-lg border border-slate-300 bg-white p-3 text-sm text-slate-700 file:mr-3 file:rounded-md file:border-0 file:bg-emerald-700 file:px-3 file:py-2 file:text-xs file:font-semibold file:text-white hover:file:bg-emerald-600 dark:border-white/10 dark:bg-[#111e32] dark:text-slate-300">
                    <p class="text-xs text-slate-500 dark:text-slate-400">PDF, DOC, DOCX, XLS, XLSX, or ZIP · maximum 100 MB.</p>
                </div>

                <div class="flex flex-wrap justify-end gap-3 border-t border-slate-200 pt-4 dark:border-white/10">
                    <a href="{{ route('faculty.preview.document-library') }}" class="inline-flex min-h-11 items-center justify-center rounded-lg border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">Cancel</a>
                    <button type="submit" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg bg-emerald-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-[#0f1724]">
                        <span class="material-symbols-outlined text-[18px]">upload_file</span>
                        Store file
                    </button>
                </div>
            </section>

            <aside class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#0f1724]">
                <h2 class="text-base font-semibold text-slate-900 dark:text-white">Upload access</h2>
                <dl class="flex flex-col gap-3 text-sm">
                    <div class="flex items-start justify-between gap-3">
                        <dt class="text-slate-500 dark:text-slate-400">Account</dt>
                        <dd class="text-right font-medium text-slate-900 dark:text-white">{{ auth()->user()->name }}</dd>
                    </div>
                    <div class="flex items-start justify-between gap-3">
                        <dt class="text-slate-500 dark:text-slate-400">Department</dt>
                        <dd class="text-right font-medium text-slate-900 dark:text-white">{{ auth()->user()->department?->name ?? 'Not assigned' }}</dd>
                    </div>
                    <div class="flex items-start justify-between gap-3">
                        <dt class="text-slate-500 dark:text-slate-400">Clearance</dt>
                        <dd class="text-right font-medium text-slate-900 dark:text-white">{{ strtoupper(auth()->user()->clearance_tier) }}</dd>
                    </div>
                </dl>
                <p class="border-t border-slate-200 pt-3 text-xs leading-5 text-slate-600 dark:border-white/10 dark:text-slate-400">
                    Every download is checked against the current account status, clearance, department, and any active Admin approval.
                </p>
            </aside>
        </form>
    @else
        <div role="status" class="rounded-xl border border-amber-500/30 bg-amber-500/10 p-5 text-sm text-amber-800 dark:text-amber-200">
            Your account needs Tier 2 clearance or higher to upload department files. Contact an Admin to review your clearance.
        </div>
    @endif

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white dark:border-white/10 dark:bg-[#0f1724]">
        <div class="border-b border-slate-200 px-5 py-4 dark:border-white/10">
            <h2 class="text-base font-semibold text-slate-900 dark:text-white">Your recent stored files</h2>
            <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Records below are loaded from your account and private file storage.</p>
        </div>
        <div class="divide-y divide-slate-200 dark:divide-white/10">
            @forelse ($recentDocuments as $document)
                <div class="flex flex-col justify-between gap-3 px-5 py-4 sm:flex-row sm:items-center">
                    <div class="min-w-0">
                        <p class="truncate text-sm font-semibold text-slate-900 dark:text-white">{{ $document->title }}</p>
                        <p class="mt-1 truncate text-xs text-slate-600 dark:text-slate-400">{{ $document->original_name }} · {{ $document->tracking_number }}</p>
                        <p class="mt-1 break-all font-mono text-[10px] text-slate-500 dark:text-slate-500">SHA-256: {{ $document->sha256 ?: 'Not recorded' }}</p>
                    </div>
                    <div class="flex shrink-0 items-center gap-3">
                        <span class="rounded-full bg-emerald-500/10 px-2.5 py-1 text-xs font-semibold text-emerald-800 dark:text-emerald-300">{{ strtoupper($document->access_tier) }}</span>
                        <a href="{{ route('documents.download', $document) }}" class="rounded-lg border border-slate-300 px-3 py-2 text-xs font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">Download</a>
                    </div>
                </div>
            @empty
                <p class="px-5 py-8 text-center text-sm text-slate-500 dark:text-slate-400">Your uploaded files will appear here after they are stored.</p>
            @endforelse
        </div>
    </section>
</div>
@endsection
