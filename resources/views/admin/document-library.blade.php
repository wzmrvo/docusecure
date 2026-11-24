@extends('layouts.app', [
    'role' => 'admin',
    'pageTitle' => 'Document Library',
    'breadcrumbs' => ['Vault Administration', 'Documents'],
])

@section('title', 'Document Library — DocuSecure')

@section('content')
<div class="flex flex-col gap-6">
    <header class="flex flex-col gap-3 border-b border-slate-200 pb-5 dark:border-white/10 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">All documents</h1>
            <p class="mt-1 max-w-3xl text-sm text-slate-600 dark:text-slate-400">
                Search every document record across all access tiers. Missing files and unsealed records remain visible but cannot be downloaded.
            </p>
        </div>
        <a href="{{ route('admin.preview.deposit-file') }}" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-lg bg-emerald-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-[#0f1724]">
            <span class="material-symbols-outlined text-[18px]">upload_file</span>
            Deposit a file
        </a>
        <a href="{{ route('admin.preview.document-categories') }}" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-lg border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
            <span class="material-symbols-outlined text-[18px]">category</span>
            Manage categories
        </a>
    </header>

    @if (session('success'))
        <div role="status" class="rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-800 dark:text-emerald-200">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" action="{{ route('admin.preview.document-library') }}" class="flex flex-col gap-3 rounded-xl border border-slate-200 bg-white p-4 dark:border-white/10 dark:bg-[#0f1724] sm:flex-row">
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
            <button type="submit" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg bg-slate-900 px-4 text-sm font-semibold text-white transition hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:bg-white dark:text-slate-900 dark:hover:bg-slate-200">
                <span class="material-symbols-outlined text-[18px]">search</span>
                Search
            </button>
            @if ($search !== '' || $selectedCategoryId)
                <a href="{{ route('admin.preview.document-library') }}" class="inline-flex min-h-11 items-center justify-center rounded-lg border border-slate-300 px-4 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
                    Clear
                </a>
            @endif
        </div>
    </form>

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white dark:border-white/10 dark:bg-[#0f1724]">
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 px-5 py-4 dark:border-white/10">
            <div>
                <h2 class="text-base font-semibold text-slate-900 dark:text-white">Document records</h2>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">
                    Showing {{ $documents->firstItem() ?? 0 }}–{{ $documents->lastItem() ?? 0 }} of {{ $documents->total() }}
                </p>
            </div>
            <a href="{{ route('admin.preview.deposit-file') }}#recent-uploads" class="text-sm font-semibold text-emerald-700 underline underline-offset-4 hover:text-emerald-600 dark:text-emerald-300">
                View recent uploads
            </a>
        </div>

        <div class="divide-y divide-slate-200 dark:divide-white/10">
            @forelse ($documents as $document)
                <article class="flex flex-col gap-4 px-5 py-4 transition hover:bg-slate-50 dark:hover:bg-white/[0.02] lg:flex-row lg:items-start lg:justify-between">
                    <div class="min-w-0 flex-1">
                        <div class="flex flex-wrap items-center gap-2">
                            <h3 class="max-w-full truncate text-sm font-semibold text-slate-900 dark:text-white">{{ $document->title }}</h3>
                            <span class="rounded-full bg-emerald-500/10 px-2.5 py-1 text-[11px] font-semibold text-emerald-800 dark:text-emerald-300">{{ strtoupper($document->access_tier) }}</span>
                            <span class="rounded-full px-2.5 py-1 text-[11px] font-semibold {{ $document->status === 'sealed' ? 'bg-slate-100 text-slate-700 dark:bg-white/5 dark:text-slate-300' : 'bg-amber-500/10 text-amber-800 dark:text-amber-300' }}">
                                {{ ucfirst($document->status) }}
                            </span>
                        </div>
                        <p class="mt-1 truncate text-xs text-slate-600 dark:text-slate-400">{{ $document->original_name }}</p>
                        <p class="mt-1 break-all font-mono text-[11px] text-slate-500 dark:text-slate-500">
                            {{ $document->tracking_number }} · {{ number_format($document->size_bytes / 1048576, 1) }} MB · {{ $document->created_at->format('M j, Y') }}
                        </p>
                        <p class="mt-1 text-xs text-slate-600 dark:text-slate-400">
                            {{ $document->department?->name ? $document->department->name.' · Unit '.$document->department_id : (in_array($document->access_tier, ['tier2', 'tier3'], true) ? 'Department not assigned' : 'Institutional') }}
                            · Uploaded by {{ $document->uploader?->name ?? 'Unknown' }}
                        </p>

                        @if (in_array($document->access_tier, ['tier2', 'tier3'], true))
                            <form method="POST" action="{{ route('admin.preview.documents.update', $document) }}" class="mt-3 flex flex-wrap items-center gap-2">
                                @csrf
                                @method('PATCH')
                                <label class="sr-only" for="department-{{ $document->id }}">Department access for {{ $document->title }}</label>
                                <select id="department-{{ $document->id }}" name="department_id" required class="min-h-9 rounded-lg border border-slate-300 bg-white px-3 py-1.5 text-xs text-slate-900 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#111e32] dark:text-white">
                                    <option value="" disabled @selected($document->department_id === null)>Assign department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}" @selected((int) $document->department_id === $department->id)>{{ $department->name }} · Unit {{ $department->id }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="min-h-9 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-700 transition hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
                                    Save department
                                </button>
                            </form>
                        @endif
                    </div>

                    <div class="flex shrink-0 items-center gap-3 lg:pt-1">
                        @if ($document->file_available && $document->status === 'sealed')
                            <a href="{{ route('documents.download', $document) }}" class="inline-flex min-h-10 items-center gap-2 rounded-lg border border-slate-300 px-3 py-2 text-xs font-semibold text-slate-700 transition hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5" aria-label="Download {{ $document->title }}">
                                <span class="material-symbols-outlined text-[17px]">download</span>
                                Download
                            </a>
                        @else
                            <span class="text-xs font-medium text-slate-500 dark:text-slate-400">
                                {{ $document->file_available ? 'Not sealed' : 'File unavailable' }}
                            </span>
                        @endif
                    </div>
                </article>
            @empty
                <div class="px-5 py-14 text-center">
                    <span class="material-symbols-outlined text-4xl text-slate-400">folder_open</span>
                    <h3 class="mt-3 text-sm font-semibold text-slate-900 dark:text-white">No documents found</h3>
                    <p class="mx-auto mt-1 max-w-lg text-xs leading-5 text-slate-500 dark:text-slate-400">
                        {{ $search !== '' ? 'Try another title, filename, or tracking number.' : 'Documents appear here after they are uploaded.' }}
                    </p>
                </div>
            @endforelse
        </div>

        @if ($documents->hasPages())
            <div class="border-t border-slate-200 px-5 py-4 dark:border-white/10">
                {{ $documents->links() }}
            </div>
        @endif
    </section>
</div>
@endsection
