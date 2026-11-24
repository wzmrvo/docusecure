@extends('layouts.app', [
    'role' => request()->is('viewer/*') ? 'viewer' : 'student',
    'pageTitle' => request()->is('viewer/*') ? 'Public Document Library' : 'Student Document Library',
    'breadcrumbs' => request()->is('viewer/*') ? ['Public Repository', 'Documents'] : ['Student Portal', 'Documents'],
])

@section('title', request()->is('viewer/*') ? 'Public Documents — DocuSecure' : 'Student Documents — DocuSecure')

@section('content')
@php($isViewer = request()->is('viewer/*'))

<header class="flex flex-col gap-2">
    <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
        {{ $isViewer ? 'Public documents' : 'Your accessible documents' }}
    </h1>
    <p class="max-w-3xl text-sm text-slate-600 dark:text-slate-400">
        {{ $isViewer ? 'Viewer access is limited to sealed Tier 1 public files.' : 'Only sealed files within your account clearance are listed. Students can access Tier 1 and, when authorized, Tier 2 files.' }}
    </p>
</header>

<section class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#0f1724]">
    <div class="mb-4 flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 pb-4 dark:border-white/10">
        <div>
            <h2 class="text-base font-semibold text-slate-900 dark:text-white">Available files</h2>
            <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">{{ $documents->count() }} {{ \Illuminate\Support\Str::plural('file', $documents->count()) }}</p>
        </div>
        <a href="{{ $isViewer ? route('viewer.preview.dashboard') : route('student.preview.dashboard') }}" class="text-sm font-semibold text-emerald-700 underline underline-offset-4 hover:text-emerald-600 dark:text-emerald-300">
            Back to dashboard
        </a>
    </div>

    <div class="divide-y divide-slate-200 dark:divide-white/10">
        @forelse ($documents as $document)
            <article class="flex flex-col justify-between gap-3 py-4 sm:flex-row sm:items-center">
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
                    <p class="mt-1 font-mono text-[11px] text-slate-500 dark:text-slate-500">
                        {{ $document->tracking_number }} · {{ number_format($document->size_bytes / 1048576, 1) }} MB
                    </p>
                </div>
                <a href="{{ route('documents.download', $document) }}" class="inline-flex min-h-10 shrink-0 items-center justify-center gap-2 rounded-lg bg-emerald-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-[#0f1724]">
                    <span class="material-symbols-outlined text-[18px]">download</span>
                    Download
                </a>
            </article>
        @empty
            <div class="py-12 text-center">
                <span class="material-symbols-outlined text-3xl text-slate-400">folder_open</span>
                <p class="mt-2 text-sm font-semibold text-slate-700 dark:text-slate-300">No accessible files yet</p>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Files appear here after they are sealed, stored, and authorized for your tier.</p>
            </div>
        @endforelse
    </div>
</section>
@endsection
