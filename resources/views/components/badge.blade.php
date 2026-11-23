@props([
    'tier' => null,
    'status' => null,
    'label' => null,
])

@php
    $class = 'inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded text-[11px] font-mono font-semibold border ';

    if ($tier == 4) {
        $class .= 'bg-amber-400/15 border-amber-400/40 text-amber-600 dark:text-amber-300';
        $defaultText = 'Tier 4 • Restricted Vault';
        $icon = 'lock';
    } elseif ($tier == 3) {
        $class .= 'bg-emerald-500/15 border-emerald-400/40 text-emerald-700 dark:text-emerald-300';
        $defaultText = 'Tier 3 • Dept Confidential';
        $icon = 'verified_user';
    } elseif ($tier == 2) {
        $class .= 'bg-sky-500/15 border-sky-400/40 text-sky-700 dark:text-sky-300';
        $defaultText = 'Tier 2 • Academic Internal';
        $icon = 'school';
    } elseif ($tier == 1) {
        $class .= 'bg-slate-500/10 border-slate-400/30 text-slate-700 dark:text-slate-300';
        $defaultText = 'Tier 1 • Public Institutional';
        $icon = 'public';
    } elseif ($status === 'verified') {
        $class .= 'bg-emerald-500/15 border-emerald-400/30 text-emerald-600 dark:text-emerald-400';
        $defaultText = 'Verified';
        $icon = 'check_circle';
    } elseif ($status === 'pending') {
        $class .= 'bg-amber-500/15 border-amber-400/30 text-amber-600 dark:text-amber-300';
        $defaultText = 'Pending Approval';
        $icon = 'schedule';
    } elseif ($status === 'locked' || $status === 'restricted') {
        $class .= 'bg-rose-500/15 border-rose-400/30 text-rose-600 dark:text-rose-400';
        $defaultText = 'Access Restricted';
        $icon = 'lock';
    } else {
        $class .= 'bg-slate-200 dark:bg-white/10 border-slate-300 dark:border-white/10 text-slate-700 dark:text-slate-300';
        $defaultText = $label ?? 'Standard';
        $icon = null;
    }
@endphp

<span class="{{ $class }}">
    @if($icon)
        <span class="material-symbols-outlined text-[13px]">{{ $icon }}</span>
    @endif
    <span>{{ $label ?? $defaultText }}</span>
</span>
