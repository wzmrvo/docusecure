@extends('layouts.app', [
    'role' => 'helpdesk',
    'pageTitle' => 'MIS Technical Support',
    'breadcrumbs' => ['CvSU', 'Support', 'Request Assistance']
])

@section('title', 'MIS Technical Support — Helpdesk')

@section('content')
<div class="flex flex-col gap-6">
    <section class="rounded-2xl border border-violet-200 bg-white p-5 shadow-sm dark:border-violet-500/20 dark:bg-[#101827] sm:p-6">
        <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="text-xs font-mono font-semibold uppercase tracking-[0.16em] text-violet-600 dark:text-violet-300">CvSU MIS Helpdesk</p>
                <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-950 dark:text-white sm:text-3xl">How can we help?</h1>
                <p class="mt-3 max-w-xl text-sm leading-6 text-slate-600 dark:text-slate-400">Submit an institutional support request for account access, password or 2FA assistance, document access, and technical incidents.</p>
            </div>
            <div class="flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-2 text-xs font-semibold text-emerald-700 dark:border-emerald-500/20 dark:bg-emerald-500/10 dark:text-emerald-300">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                Support desk open
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">
        <section id="request-form" class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-white/10 dark:bg-[#101827] sm:p-6 lg:col-span-8">
            <div class="border-b border-slate-200 pb-4 dark:border-white/10">
                <h2 class="text-lg font-bold text-slate-950 dark:text-white">Create a Support Request</h2>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Use your institutional details so the support team can route the request.</p>
            </div>

            <form id="public-support-form" class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-2" onsubmit="event.preventDefault(); document.getElementById('support-confirmation').classList.remove('hidden'); this.reset();">
                @csrf
                <div>
                    <label for="requester-name" class="mb-1.5 block text-xs font-semibold text-slate-700 dark:text-slate-300">Full name</label>
                    <input id="requester-name" name="name" type="text" required autocomplete="name" placeholder="Juan Dela Cruz" class="min-h-11 w-full rounded-lg border border-slate-300 bg-white px-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-violet-500 focus:outline-none focus:ring-2 focus:ring-violet-500/20 dark:border-white/10 dark:bg-white/5 dark:text-white">
                </div>
                <div>
                    <label for="requester-contact" class="mb-1.5 block text-xs font-semibold text-slate-700 dark:text-slate-300">NetID or institutional email</label>
                    <input id="requester-contact" name="contact" type="text" required autocomplete="email" placeholder="CEIT-FAC-00000 or name@cvsu.edu.ph" class="min-h-11 w-full rounded-lg border border-slate-300 bg-white px-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-violet-500 focus:outline-none focus:ring-2 focus:ring-violet-500/20 dark:border-white/10 dark:bg-white/5 dark:text-white">
                </div>
                <div>
                    <label for="issue-category" class="mb-1.5 block text-xs font-semibold text-slate-700 dark:text-slate-300">Issue category</label>
                    <select id="issue-category" name="category" required class="min-h-11 w-full rounded-lg border border-slate-300 bg-white px-3 text-sm text-slate-900 focus:border-violet-500 focus:outline-none focus:ring-2 focus:ring-violet-500/20 dark:border-white/10 dark:bg-white/5 dark:text-white">
                        <option value="">Select a category</option>
                        <option>Account lockout or password reset</option>
                        <option>2FA token or authenticator issue</option>
                        <option>Document access or clearance</option>
                        <option>Technical incident</option>
                        <option>Other support question</option>
                    </select>
                </div>
                <div>
                    <label for="issue-priority" class="mb-1.5 block text-xs font-semibold text-slate-700 dark:text-slate-300">Priority</label>
                    <select id="issue-priority" name="priority" required class="min-h-11 w-full rounded-lg border border-slate-300 bg-white px-3 text-sm text-slate-900 focus:border-violet-500 focus:outline-none focus:ring-2 focus:ring-violet-500/20 dark:border-white/10 dark:bg-white/5 dark:text-white">
                        <option value="">Select priority</option>
                        <option>Low — General question</option>
                        <option>Normal — Work is affected</option>
                        <option>Urgent — Account or work blocked</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label for="issue-details" class="mb-1.5 block text-xs font-semibold text-slate-700 dark:text-slate-300">Describe the issue</label>
                    <textarea id="issue-details" name="details" required rows="5" placeholder="Include what happened, when it started, and any error shown." class="w-full resize-y rounded-lg border border-slate-300 bg-white px-3 py-2.5 text-sm leading-6 text-slate-900 placeholder:text-slate-400 focus:border-violet-500 focus:outline-none focus:ring-2 focus:ring-violet-500/20 dark:border-white/10 dark:bg-white/5 dark:text-white"></textarea>
                </div>
                <div class="flex flex-col gap-3 sm:col-span-2 sm:flex-row sm:items-center sm:justify-between">
                    <p class="text-[11px] leading-5 text-slate-500 dark:text-slate-400">Do not include passwords, OTP codes, or sensitive document content.</p>
                    <button type="submit" class="min-h-11 rounded-lg bg-violet-600 px-4 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-violet-700 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-violet-500 focus-visible:ring-offset-2 dark:focus-visible:ring-offset-[#101827]">
                        Submit Support Request
                    </button>
                </div>
                <div id="support-confirmation" class="hidden rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800 dark:border-emerald-500/20 dark:bg-emerald-500/10 dark:text-emerald-200 sm:col-span-2" role="status">
                    Request prepared. In the live system, this would generate a tracking reference and route the issue to MIS Support.
                </div>
            </form>
        </section>

        <aside class="flex flex-col gap-6 lg:col-span-4">
            <section id="track-request" class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-white/10 dark:bg-[#101827]">
                <h2 class="text-sm font-bold text-slate-950 dark:text-white">Track a Request</h2>
                <p class="mt-1 text-xs leading-5 text-slate-500 dark:text-slate-400">Enter the tracking reference provided when a request was submitted.</p>
                <form class="mt-4 flex gap-2" onsubmit="event.preventDefault();">
                    <label for="tracking-reference" class="sr-only">Support tracking reference</label>
                    <input id="tracking-reference" type="text" placeholder="SUP-2026-00000" class="min-h-11 min-w-0 flex-1 rounded-lg border border-slate-300 bg-white px-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-violet-500 focus:outline-none focus:ring-2 focus:ring-violet-500/20 dark:border-white/10 dark:bg-white/5 dark:text-white">
                    <button type="submit" class="min-h-11 rounded-lg border border-slate-300 px-3 text-xs font-semibold text-slate-700 hover:bg-slate-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-violet-500 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">Track</button>
                </form>
            </section>

            <section id="support-status" class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-white/10 dark:bg-[#101827]">
                <div class="flex items-center justify-between gap-3">
                    <h2 class="text-sm font-bold text-slate-950 dark:text-white">Support Status</h2>
                    <span class="rounded-full border border-emerald-200 bg-emerald-50 px-2 py-1 text-[10px] font-mono font-semibold text-emerald-700 dark:border-emerald-500/20 dark:bg-emerald-500/10 dark:text-emerald-300">OPEN</span>
                </div>
                <dl class="mt-4 grid grid-cols-2 gap-3 text-xs">
                    <div class="rounded-lg border border-slate-200 p-3 dark:border-white/10">
                        <dt class="text-slate-500 dark:text-slate-400">Office hours</dt>
                        <dd class="mt-1 font-semibold text-slate-900 dark:text-white">8:00 AM–5:00 PM</dd>
                    </div>
                    <div class="rounded-lg border border-slate-200 p-3 dark:border-white/10">
                        <dt class="text-slate-500 dark:text-slate-400">Campus node</dt>
                        <dd class="mt-1 font-semibold text-slate-900 dark:text-white">Indang Main</dd>
                    </div>
                </dl>
            </section>

            <section id="faqs" class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-white/10 dark:bg-[#101827]">
                <h2 class="text-sm font-bold text-slate-950 dark:text-white">Help & FAQs</h2>
                <div class="mt-3 divide-y divide-slate-200 text-xs dark:divide-white/10">
                    <details class="py-3">
                        <summary class="cursor-pointer font-semibold text-slate-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-violet-500 dark:text-slate-200">What should I include in a request?</summary>
                        <p class="mt-2 leading-5 text-slate-500 dark:text-slate-400">Include your name, institutional NetID or email, issue category, and a short description. Never include passwords or OTP codes.</p>
                    </details>
                    <details class="py-3">
                        <summary class="cursor-pointer font-semibold text-slate-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-violet-500 dark:text-slate-200">How do I request an institutional account?</summary>
                        <p class="mt-2 leading-5 text-slate-500 dark:text-slate-400">Use the institutional account request form in the sidebar. It is separate from the general support request form.</p>
                    </details>
                </div>
            </section>
        </aside>
    </div>
</div>
@endsection
