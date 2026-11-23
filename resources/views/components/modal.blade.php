@props([
    'id' => 'modal-dialog',
    'title' => 'Modal Title',
    'subtitle' => null,
    'icon' => null,
    'maxWidth' => 'max-w-lg',
])

<div 
    id="{{ $id }}" 
    data-modal-open="false" 
    class="hidden fixed inset-0 z-50 overflow-y-auto" 
    aria-labelledby="{{ $id }}-title" 
    role="dialog" 
    aria-modal="true"
>
    <!-- Backdrop Blur Overlay -->
    <div 
        class="fixed inset-0 bg-slate-950/70 backdrop-blur-sm transition-opacity" 
        onclick="closeModal('{{ $id }}')"
        aria-hidden="true"
    ></div>

    <!-- Centered Dialog Container -->
    <div class="min-h-full flex items-center justify-center p-4 text-center sm:p-0">
        <div 
            class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-[#0f1724] border border-slate-200 dark:border-white/10 text-left shadow-2xl transition-all sm:my-8 w-full {{ $maxWidth }}"
            onclick="event.stopPropagation()"
        >
            <!-- Modal Header -->
            <div class="px-6 py-5 border-b border-slate-200 dark:border-white/10 flex items-start justify-between bg-slate-50/50 dark:bg-white/[0.02]">
                <div class="flex items-center gap-3">
                    @if($icon)
                        <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 flex items-center justify-center text-slate-800 dark:text-white flex-shrink-0">
                            <span class="material-symbols-outlined text-[20px]">{{ $icon }}</span>
                        </div>
                    @endif
                    <div class="flex flex-col">
                        <h3 id="{{ $id }}-title" class="text-base font-bold text-slate-900 dark:text-white tracking-tight">
                            {{ $title }}
                        </h3>
                        @if($subtitle)
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">
                                {{ $subtitle }}
                            </p>
                        @endif
                    </div>
                </div>

                <button 
                    type="button" 
                    onclick="closeModal('{{ $id }}')" 
                    class="rounded-lg p-1.5 text-slate-400 hover:text-slate-600 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-white/5 transition"
                    aria-label="Close dialog"
                >
                    <span class="material-symbols-outlined text-[18px]">close</span>
                </button>
            </div>

            <!-- Modal Body Content -->
            <div class="px-6 py-5 text-sm text-slate-700 dark:text-slate-300">
                {{ $slot }}
            </div>

            <!-- Modal Footer (Optional Actions Slot) -->
            @isset($footer)
                <div class="px-6 py-4 border-t border-slate-200 dark:border-white/10 bg-slate-50/70 dark:bg-[#0c1320] flex items-center justify-end gap-3">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>

<script>
    if (typeof openModal === 'undefined') {
        window.openModal = function(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('hidden');
                modal.setAttribute('data-modal-open', 'true');
                document.body.classList.add('overflow-hidden');
            }
        };

        window.closeModal = function(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
                modal.setAttribute('data-modal-open', 'false');
                document.body.classList.remove('overflow-hidden');
            }
        };
    }
</script>
