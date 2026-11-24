<!DOCTYPE html><html class="dark" lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script id="tailwind-config">tailwind.config={darkMode:"class",theme:{extend:{colors:{"tertiary-container":"#1d324d","surface-container-low":"#0f1724","on-background":"#e2e8f0","on-secondary-container":"#d1fae5","on-tertiary-fixed-variant":"#3b456b","error-container":"#4c1014","tertiary":"#94a3b8","tertiary-fixed":"#dce1ff","primary-fixed":"#bbf7d0","on-tertiary-fixed":"#0e193d","on-primary-fixed-variant":"#14532d","inverse-surface":"#f1f5f9","surface-container-highest":"#1e293b","inverse-primary":"#15803d","secondary-container":"#14452f","on-secondary-fixed-variant":"#166534","primary":"#22c55e","outline":"#475569","background":"#0a0f18","on-tertiary-container":"#cbd5e1","surface-container":"#131c2e","primary-fixed-dim":"#86efac","on-surface-variant":"#94a3b8","error":"#f87171","primary-container":"#166534","secondary-fixed-dim":"#a7f3d0","secondary":"#10b981","surface-tint":"#22c55e","surface":"#0d1422","inverse-on-surface":"#1e293b","surface-container-lowest":"#080c14","on-secondary":"#ffffff","on-primary":"#052e16","on-surface":"#f8fafc","surface-variant":"#1e293b","surface-bright":"#1e2d44","surface-container-high":"#172338","outline-variant":"#334155","on-primary-container":"#dcfce7","on-tertiary":"#0f172a","on-secondary-fixed":"#052e16","surface-dim":"#0d1422","secondary-fixed":"#d1fae5","on-error-container":"#fee2e2","on-primary-fixed":"#052e16","tertiary-fixed-dim":"#cbd5e1","on-error":"#ffffff"},borderRadius:{DEFAULT:"0.25rem",lg:"0.5rem",xl:"0.75rem",full:"9999px"},fontFamily:{sans:["Inter","sans-serif"],mono:["JetBrains Mono","monospace"]}}}}</script></head><body class="bg-background font-sans text-on-surface antialiased flex min-h-screen">
<!-- Sidebar Navigation -->
@include('components.sidebar', ['currentRole' => 'admin'])
<!-- Main Wrapper -->
<div class="pl-64 flex flex-col flex-1 min-h-screen">
<!-- Clean Header -->
<header class="fixed top-0 left-64 right-0 h-16 bg-[#0b121e]/95 backdrop-blur-md z-40 border-b border-[#1c2a3f] flex items-center justify-between px-6">
<!-- Search Bar -->
<div class="flex items-center max-w-lg w-full"><div class="relative w-full flex items-center"><span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-[19px]">search</span><input class="w-full bg-[#131d2e] border border-[#22334d] text-white placeholder:text-slate-400 pl-10 pr-14 py-2 rounded-lg text-xs font-normal focus:outline-none focus:border-emerald-500/60 transition-colors" placeholder="Search categories, classification policies, documents..." type="text"><div class="absolute right-2.5 top-1/2 -translate-y-1/2 flex items-center gap-0.5 px-1.5 py-0.5 rounded bg-[#1e2e46]/60 border border-[#22334d] text-[10px] font-mono text-slate-400 font-semibold pointer-events-none"><span>⌘</span><span>K</span></div></div></div>
<!-- Header Actions & Profile -->
<div class="flex items-center gap-4">
<!-- Status Pill -->
<div class="hidden sm:flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-950/60 border border-emerald-500/30 text-emerald-400 text-xs font-medium">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span>System Operational</span>
</div>
<!-- Notification Bell -->
<button class="relative p-2 text-slate-300 hover:text-white hover:bg-[#152033] rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500"></span>
</button>
<div class="h-6 w-px bg-[#1e2e46]"></div>
<!-- Admin Profile Info -->
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-emerald-700/40 border border-emerald-500/40 flex items-center justify-center text-emerald-300 font-semibold text-sm">
          {{ \Illuminate\Support\Str::of(auth()->user()->name)->explode(' ')->filter()->take(2)->map(fn (string $part) => mb_strtoupper(mb_substr($part, 0, 1)))->implode('') }}
        </div>
<div class="flex flex-col text-left">
<span class="text-xs font-semibold text-white leading-tight">{{ auth()->user()->name }}</span>
<span class="text-[11px] text-slate-400 leading-tight">{{ auth()->user()->email }}</span>
</div>
</div>
</div>
</header>
<!-- Dashboard Body -->
<div class="min-w-0">
<main class="w-full pt-16 bg-[#0a0f18] min-h-screen text-slate-200">
@include('admin.request-queue-overview')
</main>
</div>








<section class="w-full px-6 lg:px-10 pb-8" id="account-applications">
  <div class="rounded-xl border border-[#1c2a3f] bg-[#101827] p-5">
    @if (session('success'))
      <p class="mb-4 rounded border border-emerald-500/30 bg-emerald-950/30 p-3 text-sm text-emerald-300">{{ session('success') }}</p>
    @endif
    @if ($errors->any())
      <div class="mb-4 rounded border border-rose-500/30 bg-rose-950/30 p-3 text-sm text-rose-300">
        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif
    <div class="mb-4 flex items-center justify-between">
      <h2 class="text-sm font-bold text-white">Institutional Account Applications</h2>
      <span class="font-mono text-xs text-slate-400">{{ $applications->total() }} records</span>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full text-left text-xs">
        <thead class="border-b border-white/10 text-slate-400">
          <tr><th class="py-3 pr-4">Applicant</th><th class="pr-4">Email</th><th class="pr-4">Clearance</th><th class="pr-4">Status</th><th class="text-right">Actions</th></tr>
        </thead>
        <tbody>
          @forelse ($applications as $application)
            <tr class="border-b border-white/5">
              <td class="py-3 pr-4 font-semibold text-white">{{ $application->full_name }}</td>
              <td class="pr-4 text-slate-300">{{ $application->institutional_email }}</td>
              <td class="pr-4 text-slate-300">{{ strtoupper($application->clearance_tier) }}</td>
              <td class="pr-4"><span class="rounded px-2 py-1 font-mono text-[10px]">{{ strtoupper($application->status) }}</span></td>
              <td class="py-3 text-right">
                @if ($application->status === 'pending')
                  <div class="inline-flex items-center gap-2">
                    <form method="POST" action="{{ route('admin.preview.access-requests.identification-number.update', $application) }}" class="inline-flex items-center gap-2">
                      @csrf
                      @method('PATCH')
                      <input name="identification_number" required maxlength="100" value="{{ $application->identification_number }}" aria-label="Correct applicant ID number" class="w-36 rounded border border-white/10 bg-white/5 px-2 py-1.5 text-white">
                      <button type="submit" class="rounded border border-amber-500/30 px-3 py-1.5 text-amber-300">Save ID</button>
                    </form>
                    <form method="POST" action="{{ route('admin.preview.access-requests.approve', $application) }}">
                      @csrf
                      <button type="submit" class="rounded bg-emerald-600 px-3 py-1.5 font-semibold text-white">Approve</button>
                    </form>
                    <form method="POST" action="{{ route('admin.preview.access-requests.reject', $application) }}" class="inline-flex items-center gap-2">
                      @csrf
                      <input name="rejection_reason" required placeholder="Reason" class="rounded border border-white/10 bg-white/5 px-2 py-1.5 text-white">
                      <button type="submit" class="rounded border border-rose-500/30 px-3 py-1.5 text-rose-300">Reject</button>
                    </form>
                  </div>
                @elseif ($application->status === 'approved' && !$application->userAccount)
                  <form method="POST" action="{{ route('admin.preview.access-requests.reprovision', $application) }}" class="inline-flex items-center gap-2">
                    @csrf
                    <input type="password" name="password" minlength="8" autocomplete="new-password" required placeholder="Set new password" aria-label="Set new password for {{ $application->institutional_email }}" class="w-36 rounded border border-white/10 bg-white/5 px-2 py-1.5 text-white">
                    <input type="password" name="password_confirmation" minlength="8" autocomplete="new-password" required placeholder="Confirm password" aria-label="Confirm new password" class="w-36 rounded border border-white/10 bg-white/5 px-2 py-1.5 text-white">
                    <button type="submit" class="rounded bg-amber-600 px-3 py-1.5 font-semibold text-white">Restore account</button>
                  </form>
                @endif
              </td>
            </tr>
          @empty
            <tr><td colspan="5" class="py-6 text-center text-slate-400">No account applications yet.</td></tr>
          @endforelse
        </tbody>
      </table>
      <div class="mt-4">{{ $applications->links() }}</div>
    </div>
  </div>
</section>
<section class="w-full px-6 lg:px-10 pb-8" id="document-access-requests">
  <div class="rounded-xl border border-[#1c2a3f] bg-[#101827] p-5">
    <div class="mb-4 flex items-center justify-between">
      <h2 class="text-sm font-bold text-white">Document Access Requests</h2>
      <span class="font-mono text-xs text-slate-400">{{ $documentAccessRequests->total() }} records</span>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full text-left text-xs">
        <thead class="border-b border-white/10 text-slate-400">
          <tr><th class="py-3 pr-4">Requester</th><th class="pr-4">Document</th><th class="pr-4">Status</th><th class="pr-4">Justification</th><th class="text-right">Actions</th></tr>
        </thead>
        <tbody>
          @forelse ($documentAccessRequests as $accessRequest)
            <tr class="border-b border-white/5">
              <td class="py-3 pr-4 font-semibold text-white">{{ $accessRequest->requester?->name }}</td>
              <td class="pr-4 text-slate-300">{{ $accessRequest->document?->title }}</td>
              <td class="pr-4"><span class="rounded px-2 py-1 font-mono text-[10px]">{{ strtoupper($accessRequest->status) }}</span></td>
              <td class="max-w-md pr-4 text-slate-400">{{ $accessRequest->justification }}</td>
              <td class="py-3 text-right">
                @if ($accessRequest->status === 'pending')
                  <div class="inline-flex items-center gap-2">
                    <form method="POST" action="{{ route('admin.preview.document-access-requests.approve', $accessRequest) }}">
                      @csrf
                      <input type="hidden" name="lease_hours" value="24">
                      <button type="submit" class="rounded bg-emerald-600 px-3 py-1.5 font-semibold text-white">Approve</button>
                    </form>
                    <form method="POST" action="{{ route('admin.preview.document-access-requests.reject', $accessRequest) }}" class="inline-flex items-center gap-2">
                      @csrf
                      <input name="decision_reason" required placeholder="Reason" class="rounded border border-white/10 bg-white/5 px-2 py-1.5 text-white">
                      <button type="submit" class="rounded border border-rose-500/30 px-3 py-1.5 text-rose-300">Reject</button>
                    </form>
                  </div>
                @endif
              </td>
            </tr>
          @empty
            <tr><td colspan="5" class="py-6 text-center text-slate-400">No document access requests yet.</td></tr>
          @endforelse
        </tbody>
      </table>
      <div class="mt-4">{{ $documentAccessRequests->links() }}</div>
    </div>
  </div>
</section>
<section class="w-full px-6 lg:px-10 pb-8" id="helpdesk-tickets">
  <div class="rounded-xl border border-[#1c2a3f] bg-[#101827] p-5">
    <div class="mb-4 flex items-center justify-between gap-4">
      <div>
        <h2 class="text-sm font-bold text-white">Helpdesk Support Tickets</h2>
        <p class="mt-1 text-xs text-slate-400">Review, assign, and track submitted support requests.</p>
      </div>
      <span class="shrink-0 font-mono text-xs text-slate-400">{{ $helpdeskTickets->total() }} records</span>
    </div>

    <form method="GET" action="{{ route('admin.preview.access-requests') }}" class="mb-5 grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-5">
      <input name="ticket_search" value="{{ request('ticket_search') }}" placeholder="Filter reference, requester or NetID..." class="rounded border border-white/10 bg-white/5 px-3 py-2 text-sm text-white placeholder:text-slate-400">
      <select name="ticket_status" class="rounded border border-white/10 bg-[#0f1724] px-3 py-2 text-sm text-white">
        <option value="">All statuses</option>
        @foreach ($ticketStatuses as $status)
          <option value="{{ $status }}" @selected(request('ticket_status') === $status)>{{ ucwords(str_replace('_', ' ', $status)) }}</option>
        @endforeach
      </select>
      <select name="ticket_category" class="rounded border border-white/10 bg-[#0f1724] px-3 py-2 text-sm text-white">
        <option value="">All categories</option>
        @foreach ($ticketCategories as $category)
          <option value="{{ $category }}" @selected(request('ticket_category') === $category)>{{ $ticketCategoryLabels[$category] ?? $category }}</option>
        @endforeach
      </select>
      <select name="ticket_priority" class="rounded border border-white/10 bg-[#0f1724] px-3 py-2 text-sm text-white">
        <option value="">All priorities</option>
        @foreach ($ticketPriorities as $priority)
          <option value="{{ $priority }}" @selected(request('ticket_priority') === $priority)>{{ ucfirst($priority) }}</option>
        @endforeach
      </select>
      <button type="submit" class="rounded bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-500">Filter tickets</button>
    </form>

    <div class="space-y-4">
      @forelse ($helpdeskTickets as $ticket)
        <article class="rounded-lg border border-white/10 bg-[#0c1421] p-4" id="ticket-{{ $ticket->id }}">
          <div class="flex flex-col gap-3 lg:flex-row lg:items-start lg:justify-between">
            <div class="min-w-0 flex-1">
              <div class="flex flex-wrap items-center gap-2">
                <span class="font-mono text-sm font-bold text-white">{{ $ticket->reference }}</span>
                <span class="rounded bg-white/10 px-2 py-1 text-[10px] font-semibold uppercase text-slate-200">{{ str_replace('_', ' ', $ticket->status) }}</span>
                <span class="rounded bg-amber-500/10 px-2 py-1 text-[10px] font-semibold uppercase text-amber-300">{{ $ticket->priority }}</span>
                <span class="rounded bg-violet-500/10 px-2 py-1 text-[10px] font-semibold text-violet-200">{{ $ticketCategoryLabels[$ticket->category] ?? $ticket->category }}</span>
              </div>
              <p class="mt-2 text-sm font-semibold text-white">{{ $ticket->requester_name }} <span class="font-normal text-slate-400">· {{ $ticket->requester_contact }}</span></p>
              <p class="mt-2 whitespace-pre-line text-sm leading-6 text-slate-300">{{ $ticket->details }}</p>
              <p class="mt-2 text-xs text-slate-400">Submitted {{ $ticket->created_at->format('M j, Y g:i A') }} · Assigned to {{ $ticket->assignedAdmin?->name ?? 'Unassigned' }}</p>
            </div>

            <form method="POST" action="{{ route('admin.preview.helpdesk-tickets.update', $ticket) }}" class="grid w-full grid-cols-1 gap-2 sm:grid-cols-2 lg:max-w-md">
              @csrf
              @method('PATCH')
              <select name="status" required class="rounded border border-white/10 bg-[#101827] px-2 py-2 text-xs text-white" aria-label="Ticket status">
                @foreach ($ticketStatuses as $status)
                  <option value="{{ $status }}" @selected($ticket->status === $status)>{{ ucwords(str_replace('_', ' ', $status)) }}</option>
                @endforeach
              </select>
              <select name="priority" required class="rounded border border-white/10 bg-[#101827] px-2 py-2 text-xs text-white" aria-label="Ticket priority">
                @foreach ($ticketPriorities as $priority)
                  <option value="{{ $priority }}" @selected($ticket->priority === $priority)>{{ ucfirst($priority) }}</option>
                @endforeach
              </select>
              <select name="assigned_to" class="rounded border border-white/10 bg-[#101827] px-2 py-2 text-xs text-white sm:col-span-2" aria-label="Assign ticket to an administrator">
                <option value="">Unassigned</option>
                @foreach ($administrators as $administrator)
                  <option value="{{ $administrator->id }}" @selected((int) $ticket->assigned_to === $administrator->id)>{{ $administrator->name }}</option>
                @endforeach
              </select>
              <label for="public-reply-{{ $ticket->id }}" class="text-xs font-semibold text-slate-200 sm:col-span-2">Reply to requester <span class="font-normal text-slate-400">(visible in tracking)</span></label>
              <textarea id="public-reply-{{ $ticket->id }}" name="public_reply" rows="2" maxlength="2000" placeholder="Write a reply the requester can read..." class="rounded border border-white/10 bg-white/5 px-2 py-2 text-xs text-white placeholder:text-slate-400 sm:col-span-2"></textarea>
              <label for="internal-note-{{ $ticket->id }}" class="text-xs font-semibold text-slate-200 sm:col-span-2">Internal note (admins only)</label>
              <textarea id="internal-note-{{ $ticket->id }}" name="internal_note" rows="2" maxlength="2000" placeholder="Add an internal note..." class="rounded border border-white/10 bg-white/5 px-2 py-2 text-xs text-white placeholder:text-slate-400 sm:col-span-2"></textarea>
              <button type="submit" class="rounded bg-emerald-700 px-3 py-2 text-xs font-semibold text-white hover:bg-emerald-600 sm:col-span-2">Save ticket update</button>
            </form>
          </div>

          @if ($ticket->activities->isNotEmpty())
            <details class="mt-4 border-t border-white/10 pt-3">
              <summary class="cursor-pointer text-xs font-semibold text-slate-300">Activity history ({{ $ticket->activities->count() }})</summary>
              <ol class="mt-3 space-y-2">
                @foreach ($ticket->activities as $activity)
                  <li class="text-xs text-slate-400">
                    <span class="font-semibold text-slate-200">{{ $activity->actor?->name ?? 'Requester' }}</span>
                    <span> · {{ ucwords(str_replace('_', ' ', $activity->type)) }} · {{ $activity->created_at->format('M j, Y g:i A') }}</span>
                    @if ($activity->from_value !== null || $activity->to_value !== null)
                      <span> · {{ $activity->from_value ?? '—' }} &rarr; {{ $activity->to_value ?? '—' }}</span>
                    @endif
                    @if ($activity->note)
                      <p class="mt-1 whitespace-pre-line text-slate-300">{{ $activity->note }}</p>
                    @endif
                  </li>
                @endforeach
              </ol>
            </details>
          @endif
        </article>
      @empty
        <p class="rounded-lg border border-white/10 px-4 py-6 text-center text-sm text-slate-400">No support tickets match these filters.</p>
      @endforelse
    </div>
    <div class="mt-4">{{ $helpdeskTickets->links() }}</div>
  </div>
</section>
</div>
</body></html>