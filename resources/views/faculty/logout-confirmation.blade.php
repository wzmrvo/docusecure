<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Sign Out | DocuSecure Faculty</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        navy: '#0f1c30',
                        panel: '#172b47',
                        green: '#34d399'
                    },
                    fontFamily: {
                        display: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace']
                    }
                }
            }
        };
    </script>
</head>
<body class="min-h-screen bg-[#0b1120] text-slate-100 font-display flex items-center justify-center p-5">
    <main class="w-full max-w-xl">
        <div class="flex items-center justify-center gap-3 mb-8">
            <div class="w-11 h-11 rounded-xl bg-emerald-500/10 border border-emerald-400/30 flex items-center justify-center">
                <span class="material-symbols-outlined text-emerald-400 text-2xl">shield_lock</span>
            </div>
            <div>
                <div class="text-xl font-extrabold tracking-tight text-white">DocuSecure</div>
                <div class="text-[10px] tracking-[0.2em] text-slate-400 font-mono uppercase">CvSU Faculty Enclave</div>
            </div>
        </div>

        <section class="rounded-2xl border border-white/10 bg-[#111c2e] shadow-2xl overflow-hidden">
            <div class="h-1 bg-gradient-to-r from-emerald-500 via-emerald-300 to-amber-400"></div>
            <div class="p-7 sm:p-10 text-center">
                <div class="mx-auto mb-6 w-16 h-16 rounded-full bg-amber-400/10 border border-amber-400/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-300 text-4xl">logout</span>
                </div>

                <p class="font-mono text-[11px] tracking-[0.2em] uppercase text-emerald-400 mb-3">Session termination request</p>
                <h1 class="text-2xl sm:text-3xl font-bold text-white mb-3">Are you sure you want to sign out?</h1>
                <p class="text-sm sm:text-base leading-relaxed text-slate-400 max-w-md mx-auto">
                    You are about to end your current DocuSecure faculty session. You will need to sign in again to access the faculty workspace.
                </p>

                <div class="mt-7 mb-8 rounded-xl border border-white/10 bg-black/20 p-4 text-left">
                    <div class="flex items-center gap-2 text-sm font-semibold text-slate-200">
                        <span class="material-symbols-outlined text-emerald-400">verified_user</span>
                        Secure session notice
                    </div>
                    <p class="mt-2 text-xs leading-relaxed text-slate-400">
                        Confirming will securely sign you out and invalidate the current session token. If you selected this page by mistake, return to your dashboard.
                    </p>
                </div>

                <form method="POST" action="{{ route('logout') }}" class="flex flex-col-reverse sm:flex-row gap-3">
                    @csrf
                    <a href="{{ route('faculty.preview.dashboard') }}"
                       class="inline-flex flex-1 items-center justify-center gap-2 rounded-lg border border-white/15 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-200 transition hover:bg-white/10 hover:text-white">
                        <span class="material-symbols-outlined text-lg">arrow_back</span>
                        Cancel, Return to Dashboard
                    </a>
                    <button type="submit"
                            class="inline-flex flex-1 items-center justify-center gap-2 rounded-lg border border-red-400/30 bg-red-500/15 px-5 py-3 text-sm font-bold text-red-200 transition hover:bg-red-500/25 hover:text-white">
                        <span class="material-symbols-outlined text-lg">logout</span>
                        Confirm Sign Out
                    </button>
                </form>
            </div>
        </section>

        <p class="mt-6 text-center text-[10px] font-mono tracking-wider text-slate-500 uppercase">
            CvSU • DocuSecure • Secure Faculty Access
        </p>
    </main>
</body>
</html>
