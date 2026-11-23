<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Logout Confirmation | CvSU DocuSecure</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        background: "#0a0f18",
                        surface: "#0d1422",
                        primary: "#22c55e",
                        secondary: "#10b981",
                        outline: "#334155"
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        mono: ["JetBrains Mono", "monospace"]
                    }
                }
            }
        }
    </script>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #0a0f18;
            color: #f8fafc;
            font-family: Inter, sans-serif;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .modal-animation {
            animation: modalAppear .2s ease-out;
        }

        @keyframes modalAppear {
            from {
                opacity: 0;
                transform: scale(.96);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .modal-backdrop {
            background: rgba(8, 12, 20, .88);
            backdrop-filter: blur(9px);
        }
    </style>
</head>

<body class="bg-background text-slate-100 antialiased">

    <!-- Sidebar -->
    @include('components.sidebar', ['currentRole' => 'admin'])


    <!-- Main Wrapper -->
    <div class="pl-64 min-h-screen">

        <!-- Header -->
        <header class="fixed top-0 left-64 right-0 h-16 bg-[#0b121e]/95 backdrop-blur-md z-30 border-b border-[#1c2a3f] flex items-center justify-between px-6">

            <div class="flex items-center max-w-lg w-full">
                <div class="relative w-full">
                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-lg">
                        search
                    </span>

                    <input
                        class="w-full bg-[#131d2e] border border-[#22334d] text-white placeholder:text-slate-400 pl-10 pr-4 py-2 rounded-lg text-xs focus:outline-none focus:border-emerald-500/60"
                        placeholder="Search users, access requests, documents..."
                        type="text">
                </div>
            </div>

            <div class="flex items-center gap-4">

                <div class="hidden sm:flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-950/60 border border-emerald-500/30 text-emerald-400 text-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    System Operational
                </div>

                <button type="button" class="p-2 text-slate-300 hover:text-white rounded-lg">
                    <span class="material-symbols-outlined">notifications</span>
                </button>

                <div class="h-6 w-px bg-[#1e2e46]"></div>

                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-emerald-700/40 border border-emerald-500/40 flex items-center justify-center text-emerald-300 font-semibold text-sm">
                        AD
                    </div>

                    <div class="flex flex-col">
                        <span class="text-xs font-semibold text-white">
                            Administrator
                        </span>
                        <span class="text-[11px] text-slate-400">
                            CvSU MIS Administrator
                        </span>
                    </div>
                </div>

            </div>
        </header>


        <!-- Background Dashboard -->
        <main class="pt-16 min-h-screen">

            <div class="pointer-events-none select-none filter blur-sm opacity-40 p-6 flex flex-col gap-6">

                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-white">
                            Administrator Dashboard
                        </h1>
                        <p class="text-sm text-slate-400 mt-1">
                            Manage users, documents, and access requests.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                    <div class="bg-[#131c2e] rounded-lg p-6 border border-[#26364b]">
                        <p class="text-xs text-slate-400">Registered Users</p>
                        <h2 class="text-3xl font-bold mt-3">---</h2>
                    </div>

                    <div class="bg-[#131c2e] rounded-lg p-6 border border-[#26364b]">
                        <p class="text-xs text-slate-400">Pending Requests</p>
                        <h2 class="text-3xl font-bold mt-3">---</h2>
                    </div>

                    <div class="bg-[#131c2e] rounded-lg p-6 border border-[#26364b]">
                        <p class="text-xs text-slate-400">Stored Documents</p>
                        <h2 class="text-3xl font-bold mt-3">---</h2>
                    </div>

                </div>

                <div class="bg-[#131c2e] rounded-lg p-6 border border-[#26364b]">
                    <h2 class="font-semibold">Recent Activity</h2>
                    <div class="h-40 flex items-center justify-center text-slate-500 text-sm">
                        Dashboard content
                    </div>
                </div>

            </div>


            <!-- Logout Confirmation Overlay -->
            <div class="fixed inset-0 top-16 left-64 modal-backdrop z-50 flex items-center justify-center p-4 sm:p-6 overflow-y-auto">

                <div class="relative w-full max-w-2xl bg-[#111412] border border-[#38684f]/40 rounded-xl shadow-2xl flex flex-col overflow-hidden my-auto modal-animation">

                    <!-- Top Accent -->
                    <div class="w-full h-1 bg-gradient-to-r from-rose-500 via-rose-500/80 to-emerald-400"></div>


                    <!-- Modal Header -->
                    <div class="px-6 pt-5 pb-4 bg-[#191c1a] border-b border-[#272b28] flex flex-col gap-3">

                        <div class="flex flex-wrap items-center justify-between gap-3">

                            <span class="font-mono text-[11px] text-rose-300 bg-rose-500/20 border border-rose-500/30 px-2.5 py-1 rounded font-semibold tracking-wider flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                                TIER 4 ADMINISTRATOR
                            </span>

                            <span class="font-mono text-[11px] text-slate-400 bg-[#272b28] px-2 py-1 rounded">
                                SESSION TERMINATION
                            </span>

                        </div>

                        <div>
                            <h2 class="text-lg font-semibold text-white tracking-tight flex items-center gap-2">
                                <span class="material-symbols-outlined text-rose-400">power_settings_new</span>
                                Terminate Administrative Session
                            </h2>

                            <p class="font-mono text-[11px] text-slate-400 mt-2 flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-sm text-emerald-400">domain</span>
                                CvSU Management Information System
                            </p>
                        </div>

                    </div>


                    <!-- Modal Body -->
                    <div class="p-6 flex flex-col gap-5 bg-[#111412]">

                        <!-- Administrator Identity -->
                        <div class="bg-[#161a17] border border-[#272b28] rounded-lg p-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">

                            <div class="flex items-center gap-3.5">

                                <div class="relative w-12 h-12 rounded-lg bg-[#272b28] border border-emerald-500/40 flex items-center justify-center text-emerald-400 font-bold text-base">
                                    AD

                                    <span class="absolute -bottom-1 -right-1 w-4 h-4 rounded-full bg-emerald-500 flex items-center justify-center border border-[#111412]">
                                        <span class="material-symbols-outlined text-[10px] text-black font-bold">
                                            check
                                        </span>
                                    </span>
                                </div>

                                <div class="flex flex-col">
                                    <span class="text-sm font-semibold text-white">
                                        Administrator
                                    </span>

                                    <span class="text-xs text-slate-400">
                                        Cavite State University · Management Information System
                                    </span>

                                    <div class="flex items-center gap-2 mt-2">
                                        <span class="font-mono text-[10px] text-emerald-400 bg-emerald-500/15 border border-emerald-500/30 px-2 py-1 rounded font-medium">
                                            TIER 4 ADMINISTRATOR
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="bg-[#1e2320] border border-[#2e3630] px-3.5 py-2.5 rounded-lg flex items-center gap-3 self-stretch sm:self-auto">

                                <span class="material-symbols-outlined text-emerald-400 text-xl">
                                    verified_user
                                </span>

                                <div class="flex flex-col">
                                    <span class="font-mono text-[11px] font-semibold text-white">
                                        Administrator Session
                                    </span>
                                    <span class="font-mono text-[10px] text-emerald-400 font-medium">
                                        ACTIVE
                                    </span>
                                </div>

                                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>

                            </div>

                        </div>


                        <!-- Session End Information -->
                        <div class="flex flex-col gap-2.5">

                            <div class="flex items-center justify-between gap-3">
                                <span class="font-mono text-[11px] text-slate-300 uppercase tracking-wider flex items-center gap-1.5 font-semibold">
                                    <span class="material-symbols-outlined text-rose-400 text-base">
                                        security
                                    </span>
                                    Session Termination Summary
                                </span>

                                <span class="font-mono text-[10px] text-emerald-400 bg-emerald-500/15 px-2 py-1 rounded border border-emerald-500/30 font-semibold">
                                    READY
                                </span>
                            </div>

                            <div class="bg-[#0c0f0d] border border-[#222824] rounded-lg p-3.5 flex flex-col gap-3">

                                <div class="flex items-start justify-between gap-3">

                                    <div class="flex items-start gap-2.5">
                                        <span class="material-symbols-outlined text-rose-400 text-lg mt-0.5">
                                            lock_reset
                                        </span>

                                        <div class="flex flex-col">
                                            <span class="text-xs font-medium text-white">
                                                End the current administrator session
                                            </span>

                                            <span class="text-[11px] text-slate-400 mt-1">
                                                You will be signed out of the current portal session.
                                            </span>
                                        </div>
                                    </div>

                                    <span class="font-mono text-[10px] text-rose-300 bg-rose-500/20 border border-rose-500/30 px-2 py-1 rounded font-semibold whitespace-nowrap">
                                        ON CONFIRM
                                    </span>

                                </div>

                                <div class="w-full h-px bg-[#1d221f]"></div>

                                <div class="flex items-start justify-between gap-3">

                                    <div class="flex items-start gap-2.5">
                                        <span class="material-symbols-outlined text-rose-400 text-lg mt-0.5">
                                            logout
                                        </span>

                                        <div class="flex flex-col">
                                            <span class="text-xs font-medium text-white">
                                                Invalidate the current session
                                            </span>

                                            <span class="text-[11px] text-slate-400 mt-1">
                                                Laravel will invalidate your session and regenerate its security token.
                                            </span>
                                        </div>
                                    </div>

                                    <span class="font-mono text-[10px] text-rose-300 bg-rose-500/20 border border-rose-500/30 px-2 py-1 rounded font-semibold whitespace-nowrap">
                                        AUTOMATIC
                                    </span>

                                </div>

                                <div class="w-full h-px bg-[#1d221f]"></div>

                                <div class="flex items-start gap-2.5">
                                    <span class="material-symbols-outlined text-emerald-400 text-lg mt-0.5">
                                        fact_check
                                    </span>

                                    <div class="flex flex-col">
                                        <span class="text-xs font-medium text-white">
                                            Return to the login page
                                        </span>

                                        <span class="text-[11px] text-slate-400 mt-1">
                                            You can sign in again using your administrator account.
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- Sign Out Notice -->
                        <div class="flex items-start gap-3 bg-[#161a17] border border-[#272b28] p-3 rounded-lg">

                            <span class="material-symbols-outlined text-amber-400 text-lg">
                                info
                            </span>

                            <div class="flex flex-col">
                                <span class="text-xs font-medium text-white">
                                    Before you continue
                                </span>

                                <span class="text-[11px] text-slate-400 mt-1">
                                    Make sure your work is saved. Signing out will end your current administrator session.
                                </span>
                            </div>

                        </div>

                    </div>


                    <!-- Action Panel -->
                    <div class="p-5 bg-[#161a17] border-t border-[#272b28] flex flex-col sm:flex-row items-center justify-between gap-3">

                        <a href="{{ route('admin.preview.dashboard') }}"
                           class="w-full sm:w-auto px-4 py-2.5 rounded-lg bg-transparent hover:bg-[#272b28] text-slate-300 hover:text-white border border-[#2e3630] text-xs font-semibold transition-colors flex items-center justify-center gap-1.5">

                            <span class="material-symbols-outlined text-base">
                                undo
                            </span>

                            Stay Signed In
                        </a>


                        <form action="{{ route('logout') }}" method="POST" class="w-full sm:w-auto">

                            @csrf

                            <button type="submit"
                                class="w-full px-5 py-2.5 rounded-lg bg-rose-600 hover:bg-rose-500 text-white text-xs font-bold transition-all shadow-lg shadow-rose-950/40 flex items-center justify-center gap-2 border border-rose-500/40">

                                <span class="material-symbols-outlined text-lg">
                                    power_settings_new
                                </span>

                                Confirm Admin Sign Out
                            </button>

                        </form>

                    </div>


                    <!-- Footer -->
                    <div class="px-6 py-3 bg-[#0c0f0d] border-t border-[#1d221f] flex flex-wrap items-center justify-between gap-2">

                        <span class="font-mono text-[10px] text-slate-400 flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-sm text-emerald-400">
                                verified
                            </span>

                            CvSU DocuSecure · Administrator Session Management
                        </span>

                        <span class="font-mono text-[10px] text-emerald-400 font-semibold">
                            TIER 4
                        </span>

                    </div>

                </div>
            </div>

        </main>
    </div>

</body>
</html>