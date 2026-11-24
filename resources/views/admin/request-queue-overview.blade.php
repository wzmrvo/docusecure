<div class="flex flex-col gap-6 p-6 lg:p-10">
  <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
    <div class="flex flex-col gap-2">
      <p class="font-mono text-[10px] uppercase tracking-[0.16em] text-emerald-400">Admin Console / Access &amp; Support Queue</p>
      <h1 class="text-xl font-bold text-white">Institutional Access, Clearance &amp; Helpdesk Queue</h1>
      <p class="max-w-2xl text-sm leading-6 text-slate-400">Review live helpdesk tickets, document access requests, and institutional account applications.</p>
    </div>
    <span class="rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-xs text-slate-400">Showing records from the application database</span>
  </div>

  <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4" aria-label="Live request totals">
    <div class="flex items-center justify-between rounded-lg border border-[#1c2a3f] bg-[#131c2e] p-4">
      <div>
        <p class="text-[10px] font-semibold uppercase tracking-wider text-slate-400">Total Active Queue</p>
        <p class="mt-1 text-xl font-bold text-white">{{ number_format($queueCounts['total_active']) }}</p>
        <p class="text-[11px] text-emerald-400">Open or pending</p>
      </div>
      <span class="material-symbols-outlined text-emerald-400" aria-hidden="true">inbox</span>
    </div>
    <div class="flex items-center justify-between rounded-lg border border-[#1c2a3f] bg-[#131c2e] p-4">
      <div>
        <p class="text-[10px] font-semibold uppercase tracking-wider text-slate-400">Helpdesk Tickets</p>
        <p class="mt-1 text-xl font-bold text-white">{{ number_format($queueCounts['helpdesk']) }}</p>
        <p class="text-[11px] text-amber-300">{{ number_format($queueCounts['escalations']) }} urgent</p>
      </div>
      <span class="material-symbols-outlined text-amber-300" aria-hidden="true">support_agent</span>
    </div>
    <div class="flex items-center justify-between rounded-lg border border-[#1c2a3f] bg-[#131c2e] p-4">
      <div>
        <p class="text-[10px] font-semibold uppercase tracking-wider text-slate-400">Pending Clearance Requests</p>
        <p class="mt-1 text-xl font-bold text-white">{{ number_format($queueCounts['clearance']) }}</p>
        <p class="text-[11px] text-slate-400">Document access</p>
      </div>
      <span class="material-symbols-outlined text-sky-300" aria-hidden="true">lock_open</span>
    </div>
    <div class="flex items-center justify-between rounded-lg border border-[#1c2a3f] bg-[#131c2e] p-4">
      <div>
        <p class="text-[10px] font-semibold uppercase tracking-wider text-slate-400">Pending Provisioning</p>
        <p class="mt-1 text-xl font-bold text-white">{{ number_format($queueCounts['onboarding']) }}</p>
        <p class="text-[11px] text-emerald-400">Account applications</p>
      </div>
      <span class="material-symbols-outlined text-emerald-400" aria-hidden="true">person_add</span>
    </div>
  </section>

  <section class="overflow-hidden rounded-xl border border-[#1c2a3f] bg-[#0f1724]" aria-labelledby="queue-heading">
    <div class="flex flex-col gap-4 border-b border-white/10 p-4">
      <div class="flex flex-wrap items-center justify-between gap-3">
        <h2 id="queue-heading" class="text-sm font-bold text-white">Request Queue</h2>
        <a href="{{ route('admin.preview.access-requests', ['queue_type' => 'archive']) }}#account-applications" class="text-xs font-medium text-emerald-400 hover:underline focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">
          View completed records
        </a>
      </div>

      <nav class="flex flex-wrap gap-2" aria-label="Request queue categories">
        @foreach ([
          'all' => ['All', $queueCounts['total_active']],
          'helpdesk' => ['Helpdesk', $queueCounts['helpdesk']],
          'clearance' => ['Clearance', $queueCounts['clearance']],
          'onboarding' => ['Onboarding', $queueCounts['onboarding']],
          'escalations' => ['Escalations', $queueCounts['escalations']],
          'archive' => ['Archive', $queueCounts['archive']],
        ] as $type => [$label, $count])
          <a href="{{ route('admin.preview.access-requests', array_merge(request()->only(['queue_search', 'queue_tier', 'queue_unit']), ['queue_type' => $type])) }}"
             @class([
               'rounded-md border px-3 py-1.5 text-xs font-medium transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500',
               'border-emerald-500/40 bg-emerald-500/15 text-emerald-300' => $queueType === $type,
               'border-white/10 bg-white/5 text-slate-400 hover:text-white' => $queueType !== $type,
             ])
             @if ($queueType === $type) aria-current="page" @endif>
            {{ $label }} <span class="ml-1 font-mono text-[10px]">{{ number_format($count) }}</span>
          </a>
        @endforeach
      </nav>

      <form method="GET" action="{{ route('admin.preview.access-requests') }}" class="grid grid-cols-1 gap-2 sm:grid-cols-2 xl:grid-cols-[minmax(14rem,1fr)_10rem_14rem_auto_auto]">
        <input type="hidden" name="queue_type" value="{{ $queueType }}">
        <label class="sr-only" for="queue-search">Search active requests</label>
        <input id="queue-search" name="queue_search" value="{{ $queueSearch }}" maxlength="100" placeholder="Search requester, reference or details..." class="h-9 rounded-md border border-white/10 bg-[#0a0f18] px-3 text-xs text-white placeholder:text-slate-500 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
        <label class="sr-only" for="queue-tier">Filter by clearance tier</label>
        <select id="queue-tier" name="queue_tier" class="h-9 rounded-md border border-white/10 bg-[#0a0f18] px-3 text-xs text-slate-200 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
          <option value="">All tiers</option>
          @foreach (['tier1', 'tier2', 'tier3', 'tier4'] as $tier)
            <option value="{{ $tier }}" @selected($queueTier === $tier)>{{ ucfirst(str_replace('tier', 'Tier ', $tier)) }}</option>
          @endforeach
        </select>
        <label class="sr-only" for="queue-unit">Filter by college or department</label>
        <select id="queue-unit" name="queue_unit" class="h-9 rounded-md border border-white/10 bg-[#0a0f18] px-3 text-xs text-slate-200 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
          <option value="">All colleges and departments</option>
          @foreach ($queueUnits as $unit)
            <option value="{{ $unit }}" @selected($queueUnit === $unit)>{{ $unit }}</option>
          @endforeach
        </select>
        <button type="submit" class="h-9 rounded-md bg-emerald-600 px-4 text-xs font-semibold text-white transition-colors hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Apply filters</button>
        <a href="{{ route('admin.preview.access-requests', ['queue_type' => $queueType]) }}" class="flex h-9 items-center justify-center rounded-md border border-white/10 px-4 text-xs font-medium text-slate-300 transition-colors hover:bg-white/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Reset</a>
      </form>
    </div>

    <div class="flex flex-col gap-3 p-4" id="requestsList">
      @forelse ($queueItems as $item)
        @php
          $typeLabels = [
              'helpdesk' => 'Helpdesk ticket',
              'clearance' => 'Document access request',
              'onboarding' => 'Account application',
          ];
          $typeTone = [
              'helpdesk' => 'border-amber-500/30',
              'clearance' => 'border-sky-500/30',
              'onboarding' => 'border-emerald-500/30',
          ];
        @endphp
        <article class="flex flex-col gap-3 rounded-lg border {{ $typeTone[$item['type']] }} bg-[#131c2e] p-4 transition-colors hover:bg-[#172338] lg:flex-row lg:items-center lg:justify-between">
          <div class="flex min-w-0 flex-1 flex-col gap-1.5">
            <div class="flex flex-wrap items-center gap-2">
              <h3 class="truncate text-sm font-semibold text-white">{{ $item['requester'] }}</h3>
              <span class="rounded bg-white/5 px-2 py-0.5 text-[10px] text-slate-300">{{ $typeLabels[$item['type']] }}</span>
              @if ($item['tier'])
                <span class="rounded bg-slate-800 px-2 py-0.5 font-mono text-[10px] text-slate-300">{{ ucfirst(str_replace('tier', 'Tier ', $item['tier'])) }}</span>
              @endif
              <span class="rounded bg-white/5 px-2 py-0.5 text-[10px] uppercase text-slate-300">{{ ucwords(str_replace('_', ' ', $item['status'])) }}</span>
              @if ($item['priority'] === 'urgent')
                <span class="rounded bg-rose-500/15 px-2 py-0.5 text-[10px] font-semibold uppercase text-rose-300">Urgent</span>
              @endif
            </div>
            <p class="text-xs text-slate-300">{{ $item['label'] }} <span class="font-mono text-slate-500">· {{ $item['reference'] }}</span></p>
            <p class="line-clamp-2 text-xs leading-5 text-slate-400">{{ \Illuminate\Support\Str::limit($item['details'], 180) }}</p>
            <p class="text-[10px] text-slate-500">
              {{ $item['contact'] }}
              @if ($item['unit'])
                · {{ $item['unit'] }}
              @endif
              · {{ $item['created_at']->diffForHumans() }}
            </p>
          </div>

          @if ($item['type'] === 'helpdesk')
            <a href="{{ route('admin.preview.access-requests', ['ticket_search' => $item['reference']]) }}#ticket-{{ $item['id'] }}" class="inline-flex min-h-9 shrink-0 items-center justify-center rounded-md border border-white/10 px-3 text-xs font-medium text-slate-200 transition-colors hover:bg-white/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Manage ticket</a>
          @elseif ($item['type'] === 'clearance')
            <a href="{{ route('admin.preview.access-requests') }}#document-access-requests" class="inline-flex min-h-9 shrink-0 items-center justify-center rounded-md border border-white/10 px-3 text-xs font-medium text-slate-200 transition-colors hover:bg-white/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Review request</a>
          @else
            <a href="{{ route('admin.preview.access-requests') }}#account-applications" class="inline-flex min-h-9 shrink-0 items-center justify-center rounded-md border border-white/10 px-3 text-xs font-medium text-slate-200 transition-colors hover:bg-white/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Review application</a>
          @endif
        </article>
      @empty
        <p class="rounded-lg border border-dashed border-white/10 px-4 py-8 text-center text-sm text-slate-400">No database records match these filters.</p>
      @endforelse
    </div>

    <div class="flex flex-col gap-2 border-t border-white/10 px-4 py-3 text-xs text-slate-400 sm:flex-row sm:items-center sm:justify-between">
      <p>Showing {{ $queueItems->count() }} of {{ number_format($matchedQueueCount) }} matching records</p>
      <p>Ticket updates, access decisions, and provisioning are available in the records below.</p>
    </div>
  </section>
</div>
