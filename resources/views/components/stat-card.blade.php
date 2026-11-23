@props([
    'icon' => 'folder',
    'label' => 'Metric Label',
    'value' => '0',
    'badge' => null,
    'badgeType' => 'neutral',
    'subtitle' => null,
    'borderHighlight' => false,
])

@php
    $badgeClasses = match($badgeType) {
        'success' => 'bg-emerald-500/10 border-emerald-500/30 text-emerald-600 dark:text-emerald-400',
        'warning' => 'bg-amber-500/15 border-amber-500/30 text-amber-600 dark:text-amber-300 font-bold',
        'danger'  => 'bg-rose-500/15 border-rose-500/30 text-rose-600 dark:text-rose-400',
        'info'    => 'bg-sky-500/15 border-sky-500/30 text-sky-600 dark:text-sky-300',
        'violet'  => 'bg-violet-500/15 border-violet-500/30 text-violet-600 dark:text-violet-300',
        default   => 'bg-slate-500/10 border-slate-500/20 text-slate-600 dark:text-slate-400',
    };
@endphp

<div class="interactive-card flex flex-col justify-between p-5 rounded-xl bg-white dark:bg-[#0f1724] border {{ $borderHighlight ? 'border-amber-400/40 dark:border-amber-400/30' : 'border-slate-200 dark:border-white/10' }} shadow-sm transition-all duration-200">
    <div class="flex items-center justify-between mb-3">
        <span class="text-xs font-mono font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">{{ $label }}</span>
        <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 flex items-center justify-center text-slate-700 dark:text-slate-300">
            <span class="material-symbols-outlined text-[18px]">{{ $icon }}</span>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="flex items-baseline gap-2.5">
            <span class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white font-sans">{{ $value }}</span>
            @if($badge)
                <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded border {{ $badgeClasses }}">
                    {{ $badge }}
                </span>
            @endif
        </div>

        @if($subtitle)
            <span class="mt-1.5 text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-sans">
                {{ $subtitle }}
            </span>
        @endif
    </div>
</div>
