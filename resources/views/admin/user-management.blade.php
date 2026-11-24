<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_dashboard" name="shell-type">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        @layer base {
            html, body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main > :first-child {
                margin-top: 0 !important;
            }

            main > :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .user-control {
            min-width: 110px;
            width: 100%;
            border: 1px solid #334155;
            border-radius: 8px;
            background: #1e293b;
            color: #f8fafc;
            padding: 9px 30px 9px 11px;
            font-size: 12px;
            outline: none;
            transition: border-color .2s, box-shadow .2s;
        }

        .user-control:hover {
            border-color: #64748b;
        }

        .user-control:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 2px rgba(34, 197, 94, .15);
        }

        .user-control option {
            background: #172338;
            color: #f8fafc;
        }

        .save-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            white-space: nowrap;
            border: 1px solid rgba(34, 197, 94, .35);
            border-radius: 8px;
            background: rgba(34, 197, 94, .10);
            color: #22c55e;
            padding: 9px 13px;
            font-size: 12px;
            font-weight: 600;
            transition: all .2s ease;
        }

        .save-button:hover {
            background: #22c55e;
            border-color: #22c55e;
            color: #052e16;
        }

        .save-button:focus-visible {
            outline: 2px solid #22c55e;
            outline-offset: 3px;
        }

        .role-filter-card.active {
            background: #1e293b;
            box-shadow: 0 0 0 1px rgba(34, 197, 94, .35);
        }

        .table-row-divider {
            border-bottom: 1px solid rgba(51, 65, 85, .45);
        }
    </style>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-container": "#1d324d",
                        "surface-container-low": "#0f1724",
                        "on-background": "#e2e8f0",
                        "on-secondary-container": "#d1fae5",
                        "on-tertiary-fixed-variant": "#3b456b",
                        "error-container": "#4c1014",
                        "tertiary": "#94a3b8",
                        "tertiary-fixed": "#dce1ff",
                        "primary-fixed": "#bbf7d0",
                        "on-tertiary-fixed": "#0e193d",
                        "on-primary-fixed-variant": "#14532d",
                        "inverse-surface": "#f1f5f9",
                        "surface-container-highest": "#1e293b",
                        "inverse-primary": "#15803d",
                        "secondary-container": "#14452f",
                        "on-secondary-fixed-variant": "#166534",
                        "primary": "#22c55e",
                        "outline": "#475569",
                        "background": "#0a0f18",
                        "on-tertiary-container": "#cbd5e1",
                        "surface-container": "#131c2e",
                        "primary-fixed-dim": "#86efac",
                        "on-surface-variant": "#94a3b8",
                        "error": "#f87171",
                        "primary-container": "#166534",
                        "secondary-fixed-dim": "#a7f3d0",
                        "secondary": "#10b981",
                        "surface-tint": "#22c55e",
                        "surface": "#0d1422",
                        "inverse-on-surface": "#1e293b",
                        "surface-container-lowest": "#080c14",
                        "on-secondary": "#ffffff",
                        "on-primary": "#052e16",
                        "on-surface": "#f8fafc",
                        "surface-variant": "#1e293b",
                        "surface-bright": "#1e2d44",
                        "surface-container-high": "#172338",
                        "outline-variant": "#334155",
                        "on-primary-container": "#dcfce7",
                        "on-tertiary": "#0f172a",
                        "on-secondary-fixed": "#052e16",
                        "surface-dim": "#0d1422",
                        "secondary-fixed": "#d1fae5",
                        "on-error-container": "#fee2e2",
                        "on-primary-fixed": "#052e16",
                        "tertiary-fixed-dim": "#cbd5e1",
                        "on-error": "#ffffff"
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        mono: ["JetBrains Mono", "monospace"]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-background font-sans text-on-surface antialiased flex min-h-screen">

    {{-- Sidebar --}}
    @include('components.sidebar', ['currentRole' => 'admin'])

    <div class="pl-64 flex flex-col flex-1 min-h-screen">

        {{-- Header --}}
        <header class="fixed top-0 left-64 right-0 h-16 bg-[#0b121e]/95 backdrop-blur-md z-40 border-b border-[#1c2a3f] flex items-center justify-between px-6">

            <div class="flex items-center max-w-lg w-full">
                <div class="relative w-full flex items-center">
                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-[19px]">
                        search
                    </span>

                    <input
                        class="w-full bg-[#131d2e] border border-[#22334d] text-white placeholder:text-slate-400 pl-10 pr-14 py-2 rounded-lg text-xs focus:outline-none focus:border-emerald-500/60 transition-colors"
                        placeholder="Search categories, classification policies, documents..."
                        type="text"
                    >

                    <div class="absolute right-2.5 top-1/2 -translate-y-1/2 flex items-center gap-0.5 px-1.5 py-0.5 rounded bg-[#1e2e46]/60 border border-[#22334d] text-[10px] font-mono text-slate-400 font-semibold pointer-events-none">
                        <span>⌘</span>
                        <span>K</span>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4">

                <div class="hidden sm:flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-950/60 border border-emerald-500/30 text-emerald-400 text-xs font-medium">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>System Operational</span>
                </div>

                <button class="relative p-2 text-slate-300 hover:text-white hover:bg-[#152033] rounded-lg transition-colors" type="button">
                    <span class="material-symbols-outlined text-[20px]">notifications</span>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500"></span>
                </button>

                <div class="h-6 w-px bg-[#1e2e46]"></div>

                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-emerald-700/40 border border-emerald-500/40 flex items-center justify-center text-emerald-300 font-semibold text-sm">
                        RB
                    </div>

                    <div class="flex flex-col text-left">
                        <span class="text-xs font-semibold text-white leading-tight">Engr. R. Bautista</span>
                        <span class="text-[11px] text-slate-400 leading-tight">MIS Administrator • Cavite State University</span>
                    </div>
                </div>
            </div>
        </header>

        {{-- Main Content --}}
        <main class="w-full pt-16 bg-[#0a0f18] min-h-screen text-slate-200">

            <div class="flex flex-col w-full">
                <div class="px-8 py-8 flex flex-col gap-8 max-w-[1440px] w-full mx-auto">

                    {{-- Page Header --}}
                    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">

                        <div class="flex flex-col gap-2 min-w-0">

                            <div class="flex items-center gap-2 text-xs text-primary uppercase">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>

                                <a href="{{ route('admin.preview.dashboard') }}" class="hover:underline text-on-surface-variant transition-colors">
                                    ADMIN CONSOLE
                                </a>

                                <span class="text-slate-500">/</span>

                                <a href="{{ route('admin.preview.dashboard') }}" class="hover:underline text-on-surface-variant transition-colors">
                                    DASHBOARD
                                </a>

                                <span class="text-slate-500">/</span>

                                <span class="text-primary font-semibold">USER MANAGEMENT</span>
                            </div>

                            <h1 class="text-3xl font-semibold text-on-surface tracking-tight">
                                User Management &amp; Provisioning
                            </h1>

                            <p class="text-sm text-on-surface-variant max-w-2xl">
                                Manage Cavite State University faculty, staff, student, and administrator accounts and access clearances.
                            </p>
                        </div>

                        <div class="flex items-center gap-3 shrink-0">
                            <button
                                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary text-on-primary text-sm font-semibold shadow-md hover:bg-primary-fixed-dim transition-colors cursor-pointer"
                                id="openProvisionModalBtn"
                                type="button"
                            >
                                <span class="material-symbols-outlined text-[18px]">person_add</span>
                                <span>Provision New User</span>
                            </button>
                        </div>
                    </div>

                    @if (session('success'))
                        <div role="status" class="rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-200">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div role="alert" class="rounded-lg border border-rose-500/30 bg-rose-500/10 px-4 py-3 text-sm text-rose-200">
                            <p class="font-semibold">User settings were not saved:</p>
                            <ul class="mt-2 list-inside list-disc">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Role Summary Cards --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">

                        <button
                            class="role-filter-card active text-left w-full p-5 rounded-xl bg-surface-container-high shadow-md flex flex-col justify-between gap-4 transition-all hover:bg-surface-bright"
                            data-role-filter="all"
                            type="button"
                        >
                            <div class="flex items-start justify-between w-full">
                                <div class="flex flex-col gap-1">
                                    <span class="text-xs text-primary uppercase">All Users</span>
                                    <span class="text-3xl font-semibold text-on-surface">{{ number_format($users->total()) }}</span>
                                </div>

                                <div class="w-10 h-10 rounded-lg bg-primary/15 text-primary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">groups</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between w-full pt-2">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-primary/15 text-primary text-xs uppercase">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    Institutional Accounts
                                </span>

                                <svg class="w-16 h-5 text-primary" fill="none" viewBox="0 0 64 20">
                                    <path d="M2 16 L14 12 L26 14 L38 7 L50 9 L62 3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </div>
                        </button>

                        <button
                            class="role-filter-card text-left w-full p-5 rounded-xl bg-surface-container shadow-sm flex flex-col justify-between gap-4 transition-all hover:bg-surface-container-high"
                            data-role-filter="Faculty"
                            type="button"
                        >
                            <div class="flex items-start justify-between w-full">
                                <div class="flex flex-col gap-1">
                                    <span class="text-xs text-on-surface-variant uppercase">Faculty</span>
                                    <span class="text-3xl font-semibold text-on-surface">{{ number_format($roleCounts['faculty'] ?? 0) }}</span>
                                </div>

                                <div class="w-10 h-10 rounded-lg bg-tertiary/15 text-tertiary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">school</span>
                                </div>
                            </div>

                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-tertiary/15 text-tertiary text-xs uppercase">
                                Faculty Accounts
                            </span>
                        </button>

                        <button
                            class="role-filter-card text-left w-full p-5 rounded-xl bg-surface-container shadow-sm flex flex-col justify-between gap-4 transition-all hover:bg-surface-container-high"
                            data-role-filter="Admin"
                            type="button"
                        >
                            <div class="flex items-start justify-between w-full">
                                <div class="flex flex-col gap-1">
                                    <span class="text-xs text-secondary uppercase">Administrators</span>
                                    <span class="text-3xl font-semibold text-on-surface">{{ number_format($roleCounts['admin'] ?? 0) }}</span>
                                </div>

                                <div class="w-10 h-10 rounded-lg bg-secondary/15 text-secondary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">admin_panel_settings</span>
                                </div>
                            </div>

                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-secondary/15 text-secondary text-xs uppercase">
                                Administrative Accounts
                            </span>
                        </button>

                        <button
                            class="role-filter-card text-left w-full p-5 rounded-xl bg-surface-container shadow-sm flex flex-col justify-between gap-4 transition-all hover:bg-surface-container-high"
                            data-role-filter="Student"
                            type="button"
                        >
                            <div class="flex items-start justify-between w-full">
                                <div class="flex flex-col gap-1">
                                    <span class="text-xs text-on-surface-variant uppercase">Students</span>
                                    <span class="text-3xl font-semibold text-on-surface">{{ number_format($roleCounts['student'] ?? 0) }}</span>
                                </div>

                                <div class="w-10 h-10 rounded-lg bg-surface-container-highest text-on-surface-variant flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">badge</span>
                                </div>
                            </div>

                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-surface-container-highest text-on-surface-variant text-xs uppercase">
                                Student Accounts
                            </span>
                        </button>
                    </div>

                    {{-- Users Directory --}}
                    <div class="flex flex-col rounded-xl bg-surface-container shadow-lg overflow-hidden">

                        {{-- Toolbar --}}
                        <div class="p-5 bg-surface-container-low flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">

                            <div class="relative flex-1 max-w-xl">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">
                                    search
                                </span>

                                <input
                                    class="w-full bg-surface-container-highest text-on-surface placeholder:text-on-surface-variant pl-10 pr-4 py-2.5 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-primary/40 focus:border-primary transition-colors"
                                    id="userSearchInput"
                                    placeholder="Search by name, institutional email, or department..."
                                    type="text"
                                >
                            </div>

                            <div class="flex flex-wrap items-center gap-3">

                                <select
                                    class="bg-surface-container-highest text-on-surface px-3.5 py-2.5 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-primary/40"
                                    id="roleFilterSelect"
                                >
                                    <option value="all">All Roles</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Faculty">Faculty</option>
                                    <option value="Student">Student</option>
                                    <option value="Viewer">Viewer</option>
                                </select>

                                <select
                                    class="bg-surface-container-highest text-on-surface px-3.5 py-2.5 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-primary/40"
                                    id="statusFilterSelect"
                                >
                                    <option value="all">All Statuses</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="Suspended">Suspended</option>
                                </select>
                            </div>
                        </div>

                        {{-- Users Table --}}
                        <div class="w-full overflow-x-auto">

                            <table class="w-full text-left border-collapse">

                                <thead>
                                    <tr class="bg-surface-container-lowest text-on-surface-variant text-xs uppercase">
                                        <th class="py-4 px-6 font-semibold">User / Account</th>
                                        <th class="py-4 px-5 font-semibold">Department / Unit</th>
                                        <th class="py-4 px-5 font-semibold">Role</th>
                                        <th class="py-4 px-5 font-semibold">Clearance Tier</th>
                                        <th class="py-4 px-5 font-semibold">Account Status</th>
                                        <th class="py-4 px-6 text-right font-semibold">Actions</th>
                                    </tr>
                                </thead>

                                <tbody class="text-sm" id="usersTableBody">

                                    @forelse ($users as $managedUser)

                                        <tr
                                            class="user-row bg-surface-container-low hover:bg-surface-container-high transition-colors table-row-divider"
                                            data-role="{{ ucfirst($managedUser->role) }}"
                                            data-search="{{ $managedUser->name }} {{ $managedUser->email }} {{ $managedUser->department?->name }}"
                                            data-status="{{ ucfirst($managedUser->account_status) }}"
                                        >

                                            {{-- User --}}
                                            <td class="py-4 px-6">
                                                <div class="flex items-center gap-3 min-w-0">

                                                    <div class="w-10 h-10 rounded-lg bg-primary/15 border border-primary/20 text-primary flex items-center justify-center font-semibold text-sm shrink-0">
                                                        {{ strtoupper(substr($managedUser->name, 0, 2)) }}
                                                    </div>

                                                    <div class="flex flex-col min-w-0">
                                                        <span class="font-semibold text-on-surface truncate">
                                                            {{ $managedUser->name }}
                                                        </span>

                                                        <span class="text-xs text-on-surface-variant truncate">
                                                            {{ $managedUser->email }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>

                                            {{-- Department --}}
                                            <td class="py-4 px-5 text-on-surface-variant text-sm">
                                                {{ $managedUser->department?->name ?: 'Not Assigned' }}
                                            </td>

                                            {{-- Single update form --}}
                                            <td colspan="4" class="py-4 px-5">
                                                <form
                                                    id="user-update-{{ $managedUser->id }}"
                                                    method="POST"
                                                    action="{{ route('admin.preview.user-management.update', $managedUser) }}"
                                                    class="grid grid-cols-3 gap-3"
                                                >
                                                    @csrf
                                                    @method('PATCH')

                                                    <div>
                                                        <label
                                                            class="block mb-1.5 text-[10px] uppercase tracking-wider text-on-surface-variant"
                                                            for="role-{{ $managedUser->id }}"
                                                        >
                                                            Role
                                                        </label>

                                                        <select
                                                            id="role-{{ $managedUser->id }}"
                                                            name="role"
                                                            class="user-control"
                                                        >
                                                            <option value="admin" @selected($managedUser->role === 'admin')>Admin</option>
                                                            <option value="faculty" @selected($managedUser->role === 'faculty')>Faculty</option>
                                                            <option value="student" @selected($managedUser->role === 'student')>Student</option>
                                                            <option value="viewer" @selected($managedUser->role === 'viewer')>Viewer</option>
                                                        </select>
                                                    </div>

                                                    <div>
                                                        <label
                                                            class="block mb-1.5 text-[10px] uppercase tracking-wider text-on-surface-variant"
                                                            for="clearance-{{ $managedUser->id }}"
                                                        >
                                                            Clearance
                                                        </label>

                                                        <select
                                                            id="clearance-{{ $managedUser->id }}"
                                                            name="clearance_tier"
                                                            class="user-control"
                                                        >
                                                            <option value="tier1" @selected($managedUser->clearance_tier === 'tier1')>Tier 1</option>
                                                            <option value="tier2" @selected($managedUser->clearance_tier === 'tier2')>Tier 2</option>
                                                            <option value="tier3" @selected($managedUser->clearance_tier === 'tier3')>Tier 3</option>
                                                            <option value="tier4" @selected($managedUser->clearance_tier === 'tier4')>Tier 4</option>
                                                        </select>
                                                    </div>

                                                    <div>
                                                        <label
                                                            class="block mb-1.5 text-[10px] uppercase tracking-wider text-on-surface-variant"
                                                            for="status-{{ $managedUser->id }}"
                                                        >
                                                            Account Status
                                                        </label>

                                                        <select
                                                            id="status-{{ $managedUser->id }}"
                                                            name="account_status"
                                                            class="user-control"
                                                        >
                                                            <option value="active" @selected($managedUser->account_status === 'active')>Active</option>
                                                            <option value="inactive" @selected($managedUser->account_status === 'inactive')>Inactive</option>
                                                            <option value="suspended" @selected($managedUser->account_status === 'suspended')>Suspended</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-span-3 flex justify-end">
                                                        <button type="submit" class="save-button">
                                                            <span class="material-symbols-outlined text-[16px]">save</span>
                                                            Save Changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>

                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="6" class="py-14 text-center">
                                                <div class="flex flex-col items-center gap-3">
                                                    <span class="material-symbols-outlined text-4xl text-on-surface-variant">
                                                        person_search
                                                    </span>

                                                    <span class="font-semibold text-on-surface">
                                                        No institutional accounts found
                                                    </span>

                                                    <span class="text-sm text-on-surface-variant">
                                                        Accounts will appear here when available.
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforelse

                                </tbody>
                            </table>
                        </div>

                        {{-- Filter Empty State --}}
                        <div
                            class="hidden py-12 px-6 text-center flex-col items-center gap-2 bg-surface-container"
                            id="emptyFilterState"
                        >
                            <span class="material-symbols-outlined text-[32px] text-on-surface-variant">
                                person_search
                            </span>

                            <p class="text-lg font-semibold text-on-surface">
                                No matching institutional accounts
                            </p>

                            <p class="text-sm text-on-surface-variant">
                                Adjust your search query, role, or account status filter.
                            </p>
                        </div>

                        {{-- Pagination --}}
                        <div class="px-6 py-4 bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-4">

                            <span class="text-xs text-on-surface-variant" id="paginationSummary">
                                Showing {{ $users->count() }} of {{ $users->total() }} institutional accounts
                            </span>

                            <div class="flex items-center gap-3">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Provision New User Modal --}}
            <div
                class="fixed inset-0 z-50 hidden items-center justify-center bg-surface-container-lowest/80 backdrop-blur-sm p-4"
                id="provisionModal"
            >
                <div class="w-full max-w-lg rounded-xl bg-surface-container-high border border-outline-variant/50 shadow-2xl p-6 flex flex-col gap-5">

                    <div class="flex items-center justify-between">

                        <div class="flex flex-col gap-1">
                            <span class="text-xs text-primary uppercase tracking-wider">
                                Institutional Account Management
                            </span>

                            <h2 class="text-xl font-semibold text-on-surface">
                                Provision New Institutional User
                            </h2>
                        </div>

                        <button
                            class="p-2 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-bright transition"
                            id="closeProvisionModalBtn"
                            type="button"
                        >
                            <span class="material-symbols-outlined text-[20px]">close</span>
                        </button>
                    </div>

                    <div class="rounded-lg border border-outline-variant/40 bg-surface-container-low p-4">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary">info</span>

                            <p class="text-xs leading-relaxed text-on-surface-variant">
                                Account provisioning must use the existing institutional account workflow. This interface does not create accounts or send invitations unless connected to the corresponding backend process.
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button
                            class="px-4 py-2 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface font-semibold text-sm transition"
                            id="cancelProvisionBtn"
                            type="button"
                        >
                            Close
                        </button>
                    </div>

                </div>
            </div>

        </main>
    </div>

    <script>
        (function () {
            const searchInput = document.getElementById('userSearchInput');
            const roleSelect = document.getElementById('roleFilterSelect');
            const statusSelect = document.getElementById('statusFilterSelect');

            const rows = Array.from(document.querySelectorAll('.user-row'));
            const emptyState = document.getElementById('emptyFilterState');
            const summaryEl = document.getElementById('paginationSummary');
            const roleCards = Array.from(document.querySelectorAll('.role-filter-card'));

            const totalUsers = {{ (int) $users->total() }};

            function applyFilters() {
                const query = (searchInput.value || '').toLowerCase().trim();
                const roleValue = roleSelect.value;
                const statusValue = statusSelect.value;

                let visibleCount = 0;

                rows.forEach((row) => {
                    const rowRole = row.dataset.role;
                    const rowStatus = row.dataset.status;
                    const rowSearch = (row.dataset.search || '').toLowerCase();

                    const matchesSearch = !query || rowSearch.includes(query);
                    const matchesRole = roleValue === 'all' || rowRole === roleValue;
                    const matchesStatus = statusValue === 'all' || rowStatus === statusValue;

                    const visible = matchesSearch && matchesRole && matchesStatus;

                    row.classList.toggle('hidden', !visible);

                    if (visible) {
                        visibleCount++;
                    }
                });

                const shouldShowEmpty = rows.length > 0 && visibleCount === 0;

                emptyState.classList.toggle('hidden', !shouldShowEmpty);
                emptyState.classList.toggle('flex', shouldShowEmpty);

                summaryEl.textContent =
                    `Showing ${visibleCount} of ${totalUsers} institutional accounts`;
            }

            searchInput.addEventListener('input', applyFilters);
            roleSelect.addEventListener('change', applyFilters);
            statusSelect.addEventListener('change', applyFilters);

            roleCards.forEach((card) => {
                card.addEventListener('click', () => {
                    const selectedRole = card.dataset.roleFilter;

                    roleSelect.value = selectedRole;

                    roleCards.forEach((item) => {
                        item.classList.remove('active');
                        item.classList.remove('bg-surface-container-high', 'shadow-md');
                        item.classList.add('bg-surface-container', 'shadow-sm');
                    });

                    card.classList.add('active');
                    card.classList.remove('bg-surface-container', 'shadow-sm');
                    card.classList.add('bg-surface-container-high', 'shadow-md');

                    applyFilters();
                });
            });

            const modal = document.getElementById('provisionModal');
            const openButton = document.getElementById('openProvisionModalBtn');
            const closeButton = document.getElementById('closeProvisionModalBtn');
            const cancelButton = document.getElementById('cancelProvisionBtn');

            function closeModal() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            function openModal() {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            openButton?.addEventListener('click', openModal);
            closeButton?.addEventListener('click', closeModal);
            cancelButton?.addEventListener('click', closeModal);

            modal?.addEventListener('click', (event) => {
                if (event.target === modal) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });

            applyFilters();
        })();
    </script>

</body>
</html>