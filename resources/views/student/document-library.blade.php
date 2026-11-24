@php
    $isViewer = request()->is('viewer/*');
    $libraryRoute = $isViewer ? 'viewer.preview.document-library' : 'student.preview.document-library';
    $dashboardRoute = $isViewer ? 'viewer.preview.dashboard' : 'student.preview.dashboard';
@endphp

@extends('layouts.app', [
    'role' => $isViewer ? 'viewer' : 'student',
    'pageTitle' => 'Document Library',
    'breadcrumbs' => [$isViewer ? 'Viewer Portal' : 'Student Portal', 'Documents'],
])

@section('title', 'Document Library — DocuSecure')

@section('content')
<div class="flex flex-col gap-6">
    <header class="flex flex-col gap-2">
        <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">{{ $isViewer ? 'Public documents' : 'Accessible documents' }}</h1>
        <p class="max-w-3xl text-sm text-slate-600 dark:text-slate-400">
            {{ $isViewer ? 'Browse sealed Tier 1 files available to Viewers.' : 'Browse sealed files available within your Student clearance.' }}
        </p>
    </header>

    <form method="GET" action="{{ route($libraryRoute) }}" class="flex flex-col gap-3 rounded-xl border border-slate-200 bg-white p-4 dark:border-white/10 dark:bg-[#0f1724] sm:flex-row">
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
            <button type="submit" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg bg-emerald-700 px-4 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-[#0f1724]">
                <span class="material-symbols-outlined text-[18px]">search</span>
                Search
            </button>
            @if ($search !== '' || $selectedCategoryId)
                <a href="{{ route($libraryRoute) }}" class="inline-flex min-h-11 items-center justify-center rounded-lg border border-slate-300 px-4 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
                    Clear
                </a>
            @endif
        </div>
    </form>

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white dark:border-white/10 dark:bg-[#0f1724]">
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 px-5 py-4 dark:border-white/10">
            <div>
                <h2 class="text-base font-semibold text-slate-900 dark:text-white">Available files</h2>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">{{ $documentCount }} {{ \Illuminate\Support\Str::plural('file', $documentCount) }}</p>
            </div>
            <a href="{{ route($dashboardRoute) }}" class="text-sm font-semibold text-emerald-700 underline underline-offset-4 hover:text-emerald-600 dark:text-emerald-300">Back to dashboard</a>
        </div>

        <div class="divide-y divide-slate-200 dark:divide-white/10">
            @forelse ($documents as $document)
                <article class="flex flex-col justify-between gap-3 px-5 py-4 sm:flex-row sm:items-center">
                    <div class="min-w-0">
                        <h3 class="truncate text-sm font-semibold text-slate-900 dark:text-white">{{ $document->title }}</h3>
                        <p class="mt-1 text-xs text-slate-600 dark:text-slate-400">
                            {{ strtoupper(str_replace('tier', 'Tier ', $document->access_tier)) }}
                            @if ($document->category)
                                · {{ $document->category->name }}
                            @endif
                            @if ($document->department)
                                · {{ $document->department->name }}
                            @endif
                        </p>
                        <p class="mt-1 font-mono text-[11px] text-slate-500 dark:text-slate-400">{{ $document->tracking_number }} · {{ number_format($document->size_bytes / 1048576, 1) }} MB</p>
                    </div>
                    <a href="{{ route('documents.download', $document) }}" class="inline-flex min-h-10 shrink-0 items-center justify-center gap-2 rounded-lg border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
                        <span class="material-symbols-outlined text-[18px]">download</span>
                        Download
                    </a>
                </article>
            @empty
                <div class="px-5 py-12 text-center">
                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">No accessible files found</p>
                    <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Try another search or category. Files appear after they are sealed and stored.</p>
                </div>
            @endforelse
        </div>
    </section>
</div>
@endsection
