@php
    $isViewer = request()->is('viewer/*');
    $libraryRoute = $isViewer ? 'viewer.preview.document-library' : 'student.preview.document-library';
    $dashboardRoute = $isViewer ? 'viewer.preview.dashboard' : 'student.preview.dashboard';
@endphp

@extends('layouts.app', [
    'role' => $isViewer ? 'viewer' : 'student',
    'pageTitle' => 'Categories',
    'breadcrumbs' => [$isViewer ? 'Viewer Portal' : 'Student Portal', 'Categories'],
])

@section('title', 'Document Categories — DocuSecure')

@section('content')
<div class="flex flex-col gap-6">
    <header class="flex flex-col gap-2">
        <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Document categories</h1>
        <p class="max-w-3xl text-sm text-slate-600 dark:text-slate-400">
            Browse categories that contain files available to your account.
        </p>
    </header>

    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <label for="category-search" class="sr-only">Search categories</label>
        <input id="category-search" type="search" placeholder="Search categories" class="min-h-11 w-full rounded-lg border border-slate-300 bg-white px-3 text-sm text-slate-900 placeholder:text-slate-500 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#0f1724] dark:text-white dark:placeholder:text-slate-400 sm:max-w-sm">
        <a href="{{ route($libraryRoute) }}" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg bg-emerald-700 px-4 text-sm font-semibold text-white transition hover:bg-emerald-600">
            <span class="material-symbols-outlined text-[18px]">search</span>
            Search documents
        </a>
    </div>

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white dark:border-white/10 dark:bg-[#0f1724]" aria-label="Available document categories">
        @forelse ($categories as $category)
            <a href="{{ route($libraryRoute, ['category' => $category->id]) }}" data-category-row="{{ \Illuminate\Support\Str::lower($category->name) }}" class="category-row flex flex-col gap-2 border-b border-slate-200 px-5 py-4 transition last:border-b-0 hover:bg-slate-50 focus:bg-slate-50 focus:outline-none dark:border-white/10 dark:hover:bg-white/[0.03] dark:focus:bg-white/[0.03] sm:flex-row sm:items-center sm:justify-between">
                <span class="font-semibold text-slate-900 dark:text-white">{{ $category->name }}</span>
                <span class="text-xs text-slate-600 dark:text-slate-400">{{ $category->documents_count }} accessible {{ \Illuminate\Support\Str::plural('document', $category->documents_count) }}</span>
            </a>
        @empty
            <div class="px-5 py-12 text-center">
                <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">No categories available</p>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Categories appear here when accessible sealed documents are assigned to them.</p>
            </div>
        @endforelse
        <p id="category-search-empty" class="hidden px-5 py-12 text-center text-sm text-slate-500 dark:text-slate-400">No categories match your search.</p>
    </section>

    <a href="{{ route($dashboardRoute) }}" class="self-start text-sm font-semibold text-emerald-700 underline underline-offset-4 hover:text-emerald-600 dark:text-emerald-300">Back to dashboard</a>
</div>

<script>
    document.getElementById('category-search')?.addEventListener('input', function (event) {
        const searchTerm = event.target.value.trim().toLowerCase();
        const rows = Array.from(document.querySelectorAll('.category-row'));
        let visibleCount = 0;

        rows.forEach((row) => {
            const matches = row.dataset.categoryRow.includes(searchTerm);
            row.classList.toggle('hidden', !matches);
            visibleCount += matches ? 1 : 0;
        });

        document.getElementById('category-search-empty')?.classList.toggle('hidden', visibleCount > 0 || searchTerm === '');
    });
</script>
@endsection
