@extends('layouts.app', [
    'role' => 'faculty',
    'pageTitle' => 'Tier 4 File Access',
    'breadcrumbs' => ['CvSU CEIT Enclave', 'Restricted Documents', 'Request Access'],
])

@section('title', 'Tier 4 File Access — DocuSecure')

@section('content')
<div class="flex flex-col gap-6">
    <header class="flex flex-col gap-2 border-b border-slate-200 pb-5 dark:border-white/10">
        <div class="flex flex-wrap items-center justify-between gap-3">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Request Tier 4 file access</h1>
                <p class="mt-1 max-w-3xl text-sm text-slate-600 dark:text-slate-400">
                    Choose a stored restricted document and explain why you need it. An Admin must approve access before the file can be downloaded.
                </p>
            </div>
            <a href="{{ route('faculty.preview.document-library') }}" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
                <span class="material-symbols-outlined text-[18px]">folder_open</span>
                Document library
            </a>
        </div>
    </header>

    @if (session('success'))
        <div role="status" class="rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-800 dark:text-emerald-200">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div role="alert" class="rounded-lg border border-rose-500/30 bg-rose-500/10 px-4 py-3 text-sm text-rose-800 dark:text-rose-200">
            {{ $errors->first() }}
        </div>
    @endif

    <section class="grid gap-6 xl:grid-cols-[minmax(0,1.3fr)_minmax(20rem,0.7fr)]">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#0f1724]">
            <div class="mb-4 flex items-center justify-between gap-3">
                <div>
                    <h2 class="text-base font-semibold text-slate-900 dark:text-white">Available restricted files</h2>
                    <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Files listed here are present in private storage.</p>
                </div>
                <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-700 dark:text-amber-300">
                    {{ $documents->count() }} files
                </span>
            </div>

            <div class="divide-y divide-slate-200 dark:divide-white/10">
                @forelse ($documents as $document)
                    @php
                        $existingRequest = $pendingAccessRequests->firstWhere('document_id', $document->id);
                        $requestIsActive = $existingRequest
                            && ($existingRequest->status === 'pending'
                                || ! $existingRequest->expires_at
                                || $existingRequest->expires_at->isFuture());
                    @endphp
                    <article class="flex flex-col justify-between gap-3 py-4 sm:flex-row sm:items-center">
                        <div class="flex min-w-0 items-start gap-3">
                            <span class="material-symbols-outlined mt-0.5 text-amber-500">lock</span>
                            <div class="min-w-0">
                                <h3 class="truncate text-sm font-semibold text-slate-900 dark:text-white">{{ $document->title }}</h3>
                                <p class="mt-1 truncate text-xs text-slate-600 dark:text-slate-400">{{ $document->original_name }}</p>
                                <p class="mt-1 font-mono text-[10px] text-slate-500 dark:text-slate-500">
                                    {{ $document->tracking_number }} · {{ number_format($document->size_bytes / 1048576, 1) }} MB · SHA-256 {{ $document->sha256 ? substr($document->sha256, 0, 12).'…' : 'Not recorded' }}
                                </p>
                            </div>
                        </div>
                        @if ($requestIsActive)
                            <span class="shrink-0 rounded-full px-3 py-1 text-xs font-semibold {{ $existingRequest->status === 'pending' ? 'bg-amber-500/10 text-amber-700 dark:text-amber-300' : 'bg-emerald-500/10 text-emerald-700 dark:text-emerald-300' }}">
                                {{ $existingRequest->status === 'pending' ? 'Pending Admin review' : 'Approved' }}
                                @if ($existingRequest->status === 'approved' && $existingRequest->expires_at)
                                    · until {{ $existingRequest->expires_at->format('M j, g:i A') }}
                                @endif
                            </span>
                        @else
                            <span class="shrink-0 rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600 dark:bg-white/5 dark:text-slate-300">
                                Request required
                            </span>
                        @endif
                    </article>
                @empty
                    <div class="rounded-xl border border-dashed border-slate-300 px-5 py-10 text-center dark:border-white/10">
                        <span class="material-symbols-outlined text-3xl text-slate-400">folder_off</span>
                        <p class="mt-2 text-sm font-semibold text-slate-800 dark:text-slate-200">No Tier 4 files are available</p>
                        <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">An Admin-uploaded file will appear here once it is stored and sealed.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <aside class="flex flex-col gap-5">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#0f1724]">
                <h2 class="text-base font-semibold text-slate-900 dark:text-white">Your account</h2>
                <p class="mt-3 text-sm font-medium text-slate-900 dark:text-white">{{ auth()->user()->name }}</p>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">{{ auth()->user()->department?->name ?? 'Department not assigned' }} · {{ strtoupper(auth()->user()->clearance_tier) }}</p>
                <p class="mt-4 text-xs leading-5 text-slate-600 dark:text-slate-400">
                    Approved Tier 4 access is temporary. Admin sets the approval period, and the download route checks the approval and expiry every time.
                </p>
            </div>

            @if ($documents->isNotEmpty())
                <form id="tier4-access-request-form" action="{{ route('faculty.access-requests.store') }}" method="POST" class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#0f1724]">
                    @csrf
                    <div>
                        <h2 class="text-base font-semibold text-slate-900 dark:text-white">Submit an access request</h2>
                        <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">The request is sent to the Admin review queue.</p>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="document_id" class="text-xs font-semibold text-slate-700 dark:text-slate-300">Tier 4 document</label>
                        <select id="document_id" name="document_id" required class="rounded-lg border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/30 dark:border-white/10 dark:bg-[#111e32] dark:text-white">
                            <option value="" disabled @selected(! old('document_id') && ! request('document'))>Choose a stored file</option>
                            @foreach ($documents as $document)
                                @php
                                    $existingRequest = $pendingAccessRequests->firstWhere('document_id', $document->id);
                                    $requestIsActive = $existingRequest
                                        && ($existingRequest->status === 'pending'
                                            || ! $existingRequest->expires_at
                                            || $existingRequest->expires_at->isFuture());
                                @endphp
                                <option value="{{ $document->id }}" @selected((string) old('document_id', request('document')) === (string) $document->id) @disabled($requestIsActive)>
                                    {{ $document->title }}{{ $requestIsActive ? ' — request already active' : '' }}
                                </option>
                            @endforeach
                        </select>
                        @error('document_id')
                            <span class="text-xs text-rose-600 dark:text-rose-300">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="justification" class="text-xs font-semibold text-slate-700 dark:text-slate-300">Reason for access</label>
                        <textarea id="justification" name="justification" rows="5" maxlength="3000" required placeholder="Explain the work that requires this document." class="resize-y rounded-lg border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-500 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/30 dark:border-white/10 dark:bg-[#111e32] dark:text-white dark:placeholder:text-slate-400">{{ old('justification') }}</textarea>
                        @error('justification')
                            <span class="text-xs text-rose-600 dark:text-rose-300">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg bg-emerald-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-[#0f1724]">
                        <span class="material-symbols-outlined text-[18px]">send</span>
                        Send to Admin for approval
                    </button>
                </form>
            @endif
        </aside>
    </section>
</div>
@endsection
