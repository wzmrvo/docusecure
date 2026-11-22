
@php
    $user = auth()->user();
    $tier = $tier ?? 'Authorized User';
    $portalName = $portalName ?? 'DocuSecure Portal';
    $dashboardRoute = $dashboardRoute ?? null;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Confirm Logout | {{ $portalName }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: Inter, sans-serif;
            background: #f8fafc;
        }

        .mono {
            font-family: "JetBrains Mono", monospace;
        }

        .modal-card {
            animation: appear .2s ease-out;
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: scale(.96);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-5">

    <!-- Background -->
    <div class="fixed inset-0 bg-slate-950/70 backdrop-blur-md"></div>

    <!-- Confirmation Modal -->
    <main class="relative z-10 w-full max-w-2xl">

        <div class="modal-card bg-white rounded-xl shadow-2xl overflow-hidden border border-slate-200">

            <!-- Top Accent -->
            <div class="h-1.5 bg-gradient-to-r from-red-600 via-rose-500 to-blue-600"></div>

            <!-- Header -->
            <div class="px-6 py-6 bg-slate-50 border-b border-slate-200 flex items-start justify-between gap-4">

                <div class="flex items-start gap-4">

                    <div class="w-12 h-12 rounded-xl bg-rose-50 border border-rose-200 flex items-center justify-center text-rose-600 shrink-0">
                        <span class="material-symbols-outlined text-3xl">lock_reset</span>
                    </div>

                    <div>
                        <div class="flex flex-wrap items-center gap-2">
                            <h1 class="text-xl font-bold text-slate-900">
                                Sign Out & Invalidate Session
                            </h1>

                            <span class="text-[10px] font-bold uppercase tracking-wider bg-rose-100 text-rose-800 border border-rose-200 px-2 py-1 rounded">
                                Security Confirmation
                            </span>
                        </div>

                        <p class="mono text-xs text-slate-500 mt-2">
                            {{ $portalName }} · {{ $tier }}
                        </p>
                    </div>

                </div>

                <a
                    href="{{ $dashboardRoute ?? url()->previous() }}"
                    aria-label="Close confirmation"
                    class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-400 hover:text-slate-700 hover:bg-slate-200"
                >
                    <span class="material-symbols-outlined">close</span>
                </a>

            </div>

            <!-- Content -->
            <div class="p-6 space-y-5">

                <!-- User Information -->
                <div class="p-4 rounded-xl border border-slate-200 bg-slate-50 flex items-center gap-4">

                    <div class="w-12 h-12 rounded-full bg-[#173153] text-white flex items-center justify-center font-bold text-lg shrink-0">
                        {{ strtoupper(substr($user?->name ?? 'U', 0, 1)) }}
                    </div>

                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-bold text-slate-900">
                            {{ $user?->name ?? 'Authenticated User' }}
                        </p>

                        <p class="text-xs text-slate-500 mt-1">
                            {{ $user?->email ?? 'No email available' }}
                        </p>
                    </div>

                    <span class="text-[10px] font-bold uppercase bg-blue-100 text-blue-800 border border-blue-200 px-2 py-1 rounded">
                        {{ $tier }}
                    </span>

                </div>

                <!-- Security Warning -->
                <div class="rounded-xl border border-blue-100 bg-blue-50 p-5">

                    <div class="flex items-start gap-3">

                        <span class="material-symbols-outlined text-rose-600 text-2xl">
                            policy
                        </span>

                        <div>
                            <h2 class="text-sm font-bold text-slate-900">
                                Session Termination Notice
                            </h2>

                            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                                You are about to sign out of your
                                {{ $portalName }} account. Your authenticated
                                session will be terminated. You will need to
                                sign in again to access protected portal pages.
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-5">

                        <div class="flex items-center gap-2 bg-white border border-slate-200 rounded-lg p-3">
                            <span class="material-symbols-outlined text-emerald-600">check_circle</span>
                            <span class="text-xs text-slate-700">End authenticated session</span>
                        </div>

                        <div class="flex items-center gap-2 bg-white border border-slate-200 rounded-lg p-3">
                            <span class="material-symbols-outlined text-emerald-600">check_circle</span>
                            <span class="text-xs text-slate-700">Return to login screen</span>
                        </div>

                        <div class="flex items-center gap-2 bg-white border border-slate-200 rounded-lg p-3">
                            <span class="material-symbols-outlined text-emerald-600">check_circle</span>
                            <span class="text-xs text-slate-700">Protect restricted portal access</span>
                        </div>

                        <div class="flex items-center gap-2 bg-white border border-slate-200 rounded-lg p-3">
                            <span class="material-symbols-outlined text-emerald-600">check_circle</span>
                            <span class="text-xs text-slate-700">Require authentication again</span>
                        </div>

                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-col-reverse sm:flex-row justify-between items-center gap-3 pt-2">

                    <a
                        href="{{ $dashboardRoute ?? url()->previous() }}"
                        class="w-full sm:w-auto px-5 py-3 rounded-lg border border-slate-300 bg-white text-slate-700 text-xs font-semibold text-center hover:bg-slate-50"
                    >
                        Stay Signed In
                    </a>

                    <form
                        id="logoutForm"
                        method="POST"
                        action="{{ route('logout') }}"
                        class="w-full sm:w-auto"
                    >
                        @csrf

                        <button
                            id="confirmLogout"
                            type="submit"
                            class="w-full px-5 py-3 rounded-lg bg-red-600 hover:bg-red-700 text-white text-xs font-bold flex items-center justify-center gap-2 transition-colors"
                        >
                            <span class="material-symbols-outlined text-lg">logout</span>
                            Confirm Sign Out
                        </button>

                    </form>

                </div>

                <!-- Processing Indicator -->
                <div id="logoutProgress" class="hidden rounded-lg bg-slate-900 p-4 text-white">

                    <div class="flex items-center gap-2 text-xs font-semibold">
                        <span class="w-2 h-2 bg-rose-500 rounded-full animate-pulse"></span>
                        Ending authenticated session...
                    </div>

                    <p class="text-[10px] text-slate-400 mt-2">
                        Please wait while the server processes your request.
                    </p>

                </div>

            </div>

            <!-- Footer -->
            <div class="px-6 py-4 bg-slate-50 border-t border-slate-200 flex justify-between items-center gap-3 flex-wrap">

                <span class="text-[10px] text-slate-500">
                    Cavite State University · DocuSecure
                </span>

                <span class="flex items-center gap-1 text-[10px] text-slate-500 mono">
                    <span class="material-symbols-outlined text-emerald-600 text-sm">verified_user</span>
                    SECURE SESSION
                </span>

            </div>

        </div>

    </main>

    <script>
        document.getElementById('logoutForm')?.addEventListener('submit', function () {
            const button = document.getElementById('confirmLogout');
            const progress = document.getElementById('logoutProgress');

            if (button) {
                button.disabled = true;
                button.classList.add('opacity-50', 'cursor-not-allowed');
            }

            if (progress) {
                progress.classList.remove('hidden');
            }

            sessionStorage.clear();
            localStorage.removeItem('cvsu_docusecure_token');
        });
    </script>

</body>
</html>
