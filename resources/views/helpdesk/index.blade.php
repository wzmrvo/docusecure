@extends('layouts.app', [
    'role' => 'helpdesk',
    'pageTitle' => 'MIS Technical Support',
    'breadcrumbs' => ['CvSU', 'Support', 'Request Assistance']
])

@section('title', 'MIS Technical Support — Helpdesk')

@section('content')
<div class="flex flex-col gap-6">
    <section class="rounded-2xl border border-blue-200 bg-white p-5 shadow-sm dark:border-blue-300/15 dark:bg-[var(--tier-helpdesk-surface)] sm:p-6">
        <div class="flex flex-col gap-5">
            <div class="max-w-2xl">
                <h1 class="text-2xl font-bold tracking-tight text-slate-950 dark:text-white sm:text-3xl">CvSU MIS Helpdesk</h1>
                <p class="mt-3 max-w-xl text-sm leading-6 text-slate-600 dark:text-slate-400">Submit an institutional support request for account access, password or 2FA assistance, document access, and technical incidents.</p>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">
        <section id="request-form" class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-blue-300/15 dark:bg-[var(--tier-helpdesk-surface)] sm:p-6 lg:col-span-8">
            @if (session('ticket_submitted'))
                <div class="mb-5 rounded-lg border border-emerald-500/30 bg-emerald-50 px-4 py-3 text-sm text-emerald-800 dark:bg-emerald-500/10 dark:text-emerald-200" role="status">
                    <p class="font-semibold text-emerald-950 dark:text-white">Your request was submitted to MIS Support.</p>
                    <p class="mt-1">Tracking reference: <span class="font-mono font-bold">{{ session('ticket_submitted') }}</span></p>
                    <p class="mt-1 text-sm">Keep this reference to check your request status.</p>
                </div>
            @endif
            <div class="border-b border-slate-200 pb-4 dark:border-white/10">
                <h2 class="text-lg font-bold text-slate-950 dark:text-white">Create a support request</h2>
                <p class="mt-1 text-sm text-slate-600 dark:text-slate-300">Use your institutional details so the support team can route your request.</p>
            </div>

            <form id="public-support-form" action="{{ route('helpdesk.tickets.store') }}" method="POST" class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-2">
                @csrf
                <div>
                    <label for="requester-name" class="mb-1.5 block text-sm font-semibold text-slate-800 dark:text-slate-200">Full name</label>
                    <input id="requester-name" name="name" type="text" value="{{ old('name') }}" required maxlength="255" autocomplete="name" placeholder="Juan Dela Cruz" class="min-h-11 w-full rounded-lg border border-slate-300 bg-white px-3 text-base text-slate-900 placeholder:text-slate-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 dark:border-blue-200/20 dark:bg-[#0b1524] dark:text-white dark:placeholder:text-slate-400">
                    @error('name')<p class="mt-1 text-sm text-rose-700 dark:text-rose-300">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="requester-contact" class="mb-1.5 block text-sm font-semibold text-slate-800 dark:text-slate-200">University email or NetID</label>
                    <input id="requester-contact" name="contact" type="text" value="{{ old('contact') }}" required maxlength="255" autocomplete="email" placeholder="name@cvsu.edu.ph or CEIT-FAC-00000" class="min-h-11 w-full rounded-lg border border-slate-300 bg-white px-3 text-base text-slate-900 placeholder:text-slate-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 dark:border-blue-200/20 dark:bg-[#0b1524] dark:text-white dark:placeholder:text-slate-400">
                    @error('contact')<p class="mt-1 text-sm text-rose-700 dark:text-rose-300">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="issue-category" class="mb-1.5 block text-sm font-semibold text-slate-800 dark:text-slate-200">Issue category</label>
                    <select id="issue-category" name="category" required class="min-h-11 w-full rounded-lg border border-slate-300 bg-white px-3 text-base text-slate-900 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 dark:border-blue-200/20 dark:bg-[#0b1524] dark:text-white dark:[color-scheme:dark]">
                        <option value="" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white">Select a category</option>
                        <option value="account_access" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white" @selected(old('category') === 'account_access')>Account lockout or password reset</option>
                        <option value="two_factor" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white" @selected(old('category') === 'two_factor')>2FA token or authenticator issue</option>
                        <option value="document_access" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white" @selected(old('category') === 'document_access')>Document access or clearance</option>
                        <option value="technical_incident" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white" @selected(old('category') === 'technical_incident')>Technical incident</option>
                        <option value="other" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white" @selected(old('category') === 'other')>Other support question</option>
                    </select>
                    @error('category')<p class="mt-1 text-sm text-rose-700 dark:text-rose-300">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="issue-priority" class="mb-1.5 block text-sm font-semibold text-slate-800 dark:text-slate-200">Priority</label>
                    <select id="issue-priority" name="priority" required class="min-h-11 w-full rounded-lg border border-slate-300 bg-white px-3 text-base text-slate-900 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 dark:border-blue-200/20 dark:bg-[#0b1524] dark:text-white dark:[color-scheme:dark]">
                        <option value="" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white">Select priority</option>
                        <option value="low" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white" @selected(old('priority') === 'low')>Low — General question</option>
                        <option value="normal" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white" @selected(old('priority') === 'normal')>Normal — Work is affected</option>
                        <option value="urgent" class="bg-white text-slate-900 dark:bg-slate-800 dark:text-white" @selected(old('priority') === 'urgent')>Urgent — Account or work blocked</option>
                    </select>
                    @error('priority')<p class="mt-1 text-sm text-rose-700 dark:text-rose-300">{{ $message }}</p>@enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="issue-details" class="mb-1.5 block text-sm font-semibold text-slate-800 dark:text-slate-200">Describe the issue</label>
                    <textarea id="issue-details" name="details" required maxlength="3000" rows="5" placeholder="Include when it started and any error message." class="w-full resize-y rounded-lg border border-slate-300 bg-white px-3 py-2.5 text-base leading-6 text-slate-900 placeholder:text-slate-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 dark:border-blue-200/20 dark:bg-[#0b1524] dark:text-white dark:placeholder:text-slate-400">{{ old('details') }}</textarea>
                    @error('details')<p class="mt-1 text-sm text-rose-700 dark:text-rose-300">{{ $message }}</p>@enderror
                </div>
                <div class="flex flex-col gap-3 sm:col-span-2 sm:flex-row sm:items-center sm:justify-between">
                    <p class="text-sm leading-5 text-slate-600 dark:text-slate-300">Do not include passwords, OTP codes, or sensitive document content.</p>
                    <button type="submit" class="min-h-11 rounded-lg bg-blue-700 px-4 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-offset-2 dark:bg-blue-600 dark:hover:bg-blue-500 dark:focus-visible:ring-offset-[#142641]">
                        Submit support request
                    </button>
                </div>
            </form>
        </section>

        <aside class="flex flex-col gap-6 lg:col-span-4">
            <section id="track-request" class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-blue-300/15 dark:bg-[var(--tier-helpdesk-surface)]">
                <h2 class="text-base font-bold text-slate-950 dark:text-white">Track a request</h2>
                <p class="mt-1 text-sm leading-5 text-slate-600 dark:text-slate-300">Enter the tracking reference you received after submitting your request.</p>
                <form class="mt-4 flex gap-2" action="{{ route('helpdesk.track') }}" method="GET">
                    <label for="tracking-reference" class="sr-only">Support tracking reference</label>
                    <input id="tracking-reference" name="reference" type="text" value="{{ old('reference', request('reference')) }}" required maxlength="48" placeholder="SUP-2026-…" class="min-h-11 min-w-0 flex-1 rounded-lg border border-slate-300 bg-white px-3 text-base text-slate-900 placeholder:text-slate-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 dark:border-blue-200/20 dark:bg-[#0b1524] dark:text-white dark:placeholder:text-slate-400">
                    <button type="submit" class="min-h-11 rounded-lg border border-slate-300 px-3 text-sm font-semibold text-slate-700 hover:bg-slate-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 dark:border-blue-200/20 dark:text-slate-200 dark:hover:bg-blue-500/10">Track request</button>
                </form>
                @error('reference')<p class="mt-2 text-sm text-rose-700 dark:text-rose-300" role="alert">{{ $message }}</p>@enderror
                @isset($trackedTicket)
                    <div class="mt-4 rounded-lg border border-blue-200 bg-blue-50 p-3 dark:border-blue-300/20 dark:bg-blue-500/10" role="status">
                        <p class="text-sm text-slate-600 dark:text-slate-300">Current status</p>
                        <p class="mt-1 text-base font-semibold capitalize text-slate-950 dark:text-white">{{ str_replace('_', ' ', $trackedTicket['status']) }}</p>
                        <p class="mt-2 text-xs text-slate-600 dark:text-slate-300">Last updated {{ $trackedTicket['updated_at']->format('M j, Y g:i A') }}</p>
                    </div>
                    @if ($trackedTicket['replies']->isNotEmpty())
                        <section class="mt-4 border-t border-slate-200 pt-4 dark:border-white/10" aria-labelledby="tracked-ticket-replies-heading">
                            <h3 id="tracked-ticket-replies-heading" class="text-sm font-bold text-slate-950 dark:text-white">Replies from MIS Support</h3>
                            <ol class="mt-3 space-y-3">
                                @foreach ($trackedTicket['replies'] as $reply)
                                    <li class="rounded-lg border border-blue-200 bg-blue-50 p-3 dark:border-blue-300/20 dark:bg-[#0b1524]">
                                        <p class="whitespace-pre-line text-sm leading-6 text-slate-800 dark:text-slate-100">{{ $reply->note }}</p>
                                        <p class="mt-2 text-xs text-slate-600 dark:text-slate-300">{{ $reply->created_at->format('M j, Y g:i A') }}</p>
                                    </li>
                                @endforeach
                            </ol>
                        </section>
                    @endif
                @endisset
            </section>

            <section id="support-status" class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-blue-300/15 dark:bg-[var(--tier-helpdesk-surface)]">
                <div class="flex items-center justify-between gap-3">
                    <h2 class="text-base font-bold text-slate-950 dark:text-white">Hours and location</h2>
                </div>
                <dl class="mt-4 grid grid-cols-2 gap-3 text-sm">
                    <div class="rounded-lg border border-slate-200 p-3 dark:border-white/10">
                        <dt class="text-slate-600 dark:text-slate-300">Office hours</dt>
                        <dd class="mt-1 font-semibold text-slate-950 dark:text-white">8:00 AM–5:00 PM</dd>
                    </div>
                    <div class="rounded-lg border border-slate-200 p-3 dark:border-white/10">
                        <dt class="text-slate-600 dark:text-slate-300">Campus</dt>
                        <dd class="mt-1 font-semibold text-slate-950 dark:text-white">Indang Main</dd>
                    </div>
                </dl>
            </section>

            <section id="faqs" class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-blue-300/15 dark:bg-[var(--tier-helpdesk-surface)]">
                <h2 class="text-base font-bold text-slate-950 dark:text-white">Help and FAQs</h2>
                <div class="mt-3 divide-y divide-slate-200 text-sm dark:divide-white/10">
                    <details class="py-3">
                        <summary class="cursor-pointer font-semibold text-slate-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 dark:text-slate-200">What should I include in a request?</summary>
                        <p class="mt-2 leading-5 text-slate-600 dark:text-slate-300">Include your name, university email or NetID, issue category, and a short description. Never include passwords or OTP codes.</p>
                    </details>
                    <details class="py-3">
                        <summary class="cursor-pointer font-semibold text-slate-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 dark:text-slate-200">How do I request an institutional account?</summary>
                        <p class="mt-2 leading-5 text-slate-600 dark:text-slate-300">Use the institutional account request form in the sidebar. It is separate from the general support request.</p>
                    </details>
                </div>
            </section>
        </aside>
    </div>
</div>
@endsection
