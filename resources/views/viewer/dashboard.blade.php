@extends('layouts.app', [
    'role' => 'viewer',
    'pageTitle' => ($guestAccess ?? false) ? 'Public Document Repository' : 'Viewer Dashboard',
    'breadcrumbs' => ['Public Repository', 'Tier 1 Documents'],
])

@section('title', 'Public Documents — DocuSecure')

@section('content')
@php($isGuest = $guestAccess ?? false)

<header class="flex flex-col gap-2">
    <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Public document repository</h1>
    <p class="max-w-3xl text-sm text-slate-600 dark:text-slate-400">
        Only sealed Tier 1 files are shown to Viewers. Tier 2 is restricted to eligible Students, Tier 3 to authorized Faculty, and Tier 4 requires Admin approval.
    </p>
</header>

<div class="grid grid-cols-1 items-start gap-6 lg:grid-cols-12">
    <section class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#0f1724] lg:col-span-8">
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 pb-4 dark:border-white/10">
            <div>
                <h2 class="text-base font-semibold text-slate-900 dark:text-white">Tier 1 public files</h2>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Files available to Viewers and institutional users</p>
            </div>
            <span class="text-xs font-semibold text-emerald-700 dark:text-emerald-300">{{ $publicDocuments->count() }} available</span>
        </div>

        <div class="divide-y divide-slate-200 dark:divide-white/10">
            @forelse ($publicDocuments as $document)
                <article class="flex flex-col justify-between gap-3 py-4 sm:flex-row sm:items-center">
                    <div class="min-w-0">
                        <h3 class="truncate text-sm font-semibold text-slate-900 dark:text-white">{{ $document->title }}</h3>
                        <p class="mt-1 font-mono text-[11px] text-slate-500 dark:text-slate-400">
                            {{ $document->tracking_number }} · {{ number_format($document->size_bytes / 1048576, 1) }} MB
                        </p>
                    </div>
                    <a href="{{ $isGuest ? route('viewer.guest.documents.download', $document) : route('documents.download', $document) }}" class="inline-flex min-h-10 shrink-0 items-center justify-center gap-2 rounded-lg bg-emerald-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-[#0f1724]">
                        <span class="material-symbols-outlined text-[18px]">download</span>
                        Download
                    </a>
                </article>
            @empty
                <div class="py-12 text-center">
                    <span class="material-symbols-outlined text-3xl text-slate-400">folder_open</span>
                    <p class="mt-2 text-sm font-semibold text-slate-700 dark:text-slate-300">No public files available</p>
                    <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Tier 1 files will appear here when an Admin or Faculty member publishes them.</p>
                </div>
            @endforelse
        </div>
    </section>

    <aside class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#0f1724] lg:col-span-4">
        <h2 class="text-base font-semibold text-slate-900 dark:text-white">Access boundaries</h2>
        <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">
            Tier 1 files are public. Higher-tier file names and contents are not listed in the Viewer portal.
        </p>
        @if ($isGuest)
            <a href="{{ route('institutional-account-request') }}" class="inline-flex min-h-10 items-center justify-center rounded-lg border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-800 transition hover:bg-slate-100 dark:border-white/10 dark:text-white dark:hover:bg-white/5">
                Request institutional access
            </a>
        @endif
    </aside>
</div>
@endsection
