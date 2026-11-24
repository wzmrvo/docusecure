@extends('layouts.app', [
    'role' => 'faculty',
    'pageTitle' => 'Document Library',
    'breadcrumbs' => ['CvSU CEIT Enclave', 'Documents'],
])

@section('title', 'Document Library — DocuSecure')

@section('content')
<div class="flex flex-col gap-6">
    <header class="flex flex-col gap-3 border-b border-slate-200 pb-5 dark:border-white/10 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Document library</h1>
            <p class="mt-1 max-w-3xl text-sm text-slate-600 dark:text-slate-400">
                Stored files you can access under your department, clearance, or current Admin approval.
            </p>
        </div>
        <div class="flex flex-wrap gap-2">
            <a href="{{ route('faculty.preview.submit-department-file') }}" class="inline-flex items-center gap-2 rounded-lg bg-emerald-700 px-3.5 py-2 text-sm font-semibold text-white transition hover:bg-emerald-600">
                <span class="material-symbols-outlined text-[18px]">upload_file</span>
                Upload Tier 2/3 file
            </a>
            <a href="{{ route('faculty.preview.tier-4-access-request') }}" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 px-3.5 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
                <span class="material-symbols-outlined text-[18px]">lock</span>
                Request Tier 4 access
            </a>
            <a href="{{ route('faculty.preview.document-categories') }}" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 px-3.5 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
                <span class="material-symbols-outlined text-[18px]">category</span>
                Manage categories
            </a>
        </div>
    </header>

    @if (session('success'))
        <div role="status" class="rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-800 dark:text-emerald-200">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" action="{{ route('faculty.preview.document-library') }}" class="flex flex-col gap-3 rounded-xl border border-slate-200 bg-white p-4 dark:border-white/10 dark:bg-[#0f1724] sm:flex-row">
        <label for="document-search" class="sr-only">Search documents</label>
        <input id="document-search" name="search" type="search" value="{{ $search }}" maxlength="120" placeholder="Search title, filename, or tracking number" class="min-h-11 min-w-0 flex-1 rounded-lg border border-slate-300 bg-white px-3 text-sm text-slate-900 placeholder:text-slate-500 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#111e32] dark:text-white dark:placeholder:text-slate-400">
        <label for="document-category" class="sr-only">Filter by category</label>
        <select id="document-category" name="category" class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 text-sm text-slate-900 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#111e32] dark:text-white">
            <option value="">All categories</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected((string) $selectedCategoryId === (string) $category->id)>{{ $category->name }}</option>
            @endforeach
        </select>
        <div class="flex gap-2">
            <button type="submit" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg bg-emerald-700 px-4 text-sm font-semibold text-white transition hover:bg-emerald-600">
                <span class="material-symbols-outlined text-[18px]">search</span>
                Search
            </button>
            @if ($search !== '' || $selectedCategoryId)
                <a href="{{ route('faculty.preview.document-library') }}" class="inline-flex min-h-11 items-center justify-center rounded-lg border border-slate-300 px-4 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">Clear</a>
            @endif
        </div>
    </form>

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white dark:border-white/10 dark:bg-[#0f1724]">
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 px-5 py-4 dark:border-white/10">
            <div>
                <h2 class="text-base font-semibold text-slate-900 dark:text-white">Available stored documents</h2>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Only sealed files present in private storage are listed.</p>
            </div>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 dark:bg-white/5 dark:text-slate-300">
                {{ $documents->count() }} {{ \Illuminate\Support\Str::plural('file', $documents->count()) }}
            </span>
        </div>

        <div class="divide-y divide-slate-200 dark:divide-white/10">
            @forelse ($documents as $document)
                <article class="flex flex-col gap-4 px-5 py-4 transition hover:bg-slate-50 dark:hover:bg-white/[0.02] sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex min-w-0 items-start gap-3">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-500/10 text-emerald-700 dark:text-emerald-300">
                            <span class="material-symbols-outlined">description</span>
                        </div>
                        <div class="min-w-0">
                            <h3 class="truncate text-sm font-semibold text-slate-900 dark:text-white">{{ $document->title }}</h3>
                            <p class="mt-1 truncate text-xs text-slate-600 dark:text-slate-400">{{ $document->original_name }}</p>
                            <p class="mt-1 break-all font-mono text-[10px] text-slate-500 dark:text-slate-500">
                                {{ $document->tracking_number }} · {{ $document->department?->name ?? 'Institutional' }} ·
                                {{ $document->created_at->format('M j, Y') }}
                            </p>
                            <p class="mt-1 break-all font-mono text-[10px] text-slate-500 dark:text-slate-500">
                                SHA-256: {{ $document->sha256 ?: 'Not recorded' }}
                            </p>
                        </div>
                    </div>

                    <div class="flex shrink-0 items-center gap-3 sm:justify-end">
                        <div class="text-right">
                            <span class="inline-flex rounded-full bg-emerald-500/10 px-2.5 py-1 text-[11px] font-semibold text-emerald-800 dark:text-emerald-300">
                                {{ strtoupper($document->access_tier) }}
                            </span>
                            <p class="mt-1 text-[10px] text-slate-500 dark:text-slate-400">{{ number_format($document->size_bytes / 1048576, 1) }} MB</p>
                        </div>
                        <a href="{{ route('documents.download', $document) }}" class="inline-flex min-h-10 items-center gap-1.5 rounded-lg border border-slate-300 px-3 py-2 text-xs font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5" aria-label="Download {{ $document->title }}">
                            <span class="material-symbols-outlined text-[17px]">download</span>
                            Download
                        </a>
                    </div>
                </article>
            @empty
                <div class="px-5 py-14 text-center">
                    <span class="material-symbols-outlined text-4xl text-slate-400">folder_off</span>
                    <h3 class="mt-3 text-sm font-semibold text-slate-900 dark:text-white">No accessible stored files</h3>
                    <p class="mx-auto mt-1 max-w-lg text-xs leading-5 text-slate-500 dark:text-slate-400">
                        Files appear here after upload when your clearance and department permit direct access, or after an Admin approves your Tier 4 request.
                    </p>
                </div>
            @endforelse
        </div>
    </section>
</div>
@endsection
