@extends('layouts.app', [
    'role' => $role,
    'pageTitle' => 'Document Categories',
    'breadcrumbs' => [$role === 'admin' ? 'Vault Administration' : 'Faculty Workspace', 'Categories'],
])

@section('title', 'Document Categories — DocuSecure')

@section('content')
@php
    $categoryRoute = $role === 'admin'
        ? 'admin.preview.document-categories'
        : 'faculty.preview.document-categories';
    $libraryRoute = $role === 'admin'
        ? 'admin.preview.document-library'
        : 'faculty.preview.document-library';
    $clearanceLevel = (int) substr(auth()->user()->clearance_tier, -1);
@endphp

<div class="flex flex-col gap-6">
    <header class="flex flex-col gap-3 border-b border-slate-200 pb-5 dark:border-white/10 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Document categories</h1>
            <p class="mt-1 max-w-3xl text-sm text-slate-600 dark:text-slate-400">
                Choose an access tier when creating a category. Uploads inherit the category's tier and department; existing files keep their current access settings.
            </p>
        </div>
        <div>
            <a href="{{ route($libraryRoute) }}" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-lg border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">
                <span class="material-symbols-outlined text-[18px]">folder_open</span>
                Open document library
            </a>
        </div>
    </header>

    <div class="flex justify-center">
        <button type="button" data-open-category-modal="create-category-modal" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg bg-emerald-700 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500">
            <span class="material-symbols-outlined text-[18px]">create_new_folder</span>
            Create category
        </button>
    </div>

    @if (session('success'))
        <div role="status" class="rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-800 dark:text-emerald-200">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div role="alert" class="rounded-lg border border-rose-500/30 bg-rose-500/10 px-4 py-3 text-sm text-rose-800 dark:text-rose-200">
            <p class="font-semibold">Category was not saved.</p>
            <ul class="mt-2 list-inside list-disc">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white dark:border-white/10 dark:bg-[#0f1724]">
        <div class="flex items-center justify-between gap-3 border-b border-slate-200 px-5 py-4 dark:border-white/10">
            <div>
                <h2 class="text-base font-semibold text-slate-900 dark:text-white">Shared categories</h2>
                <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Select a category name to open its accessible documents.</p>
            </div>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 dark:bg-white/5 dark:text-slate-300">{{ $categories->total() }} total</span>
        </div>

        <div class="divide-y divide-slate-200 dark:divide-white/10">
            @forelse ($categories as $category)
                @php($canEditCategory = $role === 'admin' || ($category->department_id !== null && (int) $category->department_id === (int) auth()->user()->department_id))
                <div class="flex flex-col justify-between gap-3 px-5 py-4 transition hover:bg-slate-50 dark:hover:bg-white/[0.03] sm:flex-row sm:items-center">
                    <a href="{{ route($libraryRoute, ['category' => $category->id]) }}" class="flex min-w-0 flex-1 items-center gap-3 rounded-md focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600 dark:focus-visible:ring-emerald-400">
                        <span class="material-symbols-outlined text-emerald-700 dark:text-emerald-300">folder</span>
                        <span class="min-w-0">
                            <span class="block truncate text-sm font-semibold text-slate-900 dark:text-white">{{ $category->name }}</span>
                            <span class="mt-1 block truncate font-mono text-[11px] text-slate-500 dark:text-slate-400">
                                {{ strtoupper($category->access_tier ?? 'unassigned') }}
                                @if ($category->department)
                                    · {{ $category->department->name }}
                                @endif
                                · {{ $category->slug }}
                            </span>
                        </span>
                    </a>
                    <div class="flex shrink-0 items-center gap-2 self-end sm:self-auto">
                        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 dark:bg-white/5 dark:text-slate-300">
                            {{ $category->documents_count }} {{ \Illuminate\Support\Str::plural('document', $category->documents_count) }}
                        </span>
                        @if ($canEditCategory)
                            <button
                                type="button"
                                data-edit-category
                                data-category-id="{{ $category->id }}"
                                data-category-name="{{ $category->name }}"
                                data-category-tier="{{ $category->access_tier }}"
                                data-category-department="{{ $category->department_id }}"
                                data-update-url="{{ route($categoryRoute.'.update', $category) }}"
                                class="inline-flex min-h-9 items-center justify-center rounded-lg border border-slate-300 px-3 text-xs font-semibold text-slate-700 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5"
                            >
                                Edit
                            </button>
                        @endif
                    </div>
                </div>
            @empty
                <div class="px-5 py-12 text-center">
                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">No categories yet</p>
                    <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Create a category to organize uploads and make accessible files easier to find.</p>
                </div>
            @endforelse
        </div>

        @if ($categories->hasPages())
            <div class="border-t border-slate-200 px-5 py-4 dark:border-white/10">
                {{ $categories->links() }}
            </div>
        @endif
    </section>
</div>

<dialog id="create-category-modal" aria-labelledby="create-category-title" class="fixed inset-0 m-auto max-h-[calc(100vh-2rem)] w-[min(100%-2rem,34rem)] overflow-y-auto rounded-2xl border border-slate-200 bg-white p-0 text-slate-900 shadow-2xl backdrop:bg-slate-950/60 dark:border-white/10 dark:bg-[#0f1724] dark:text-white">
    <form method="POST" action="{{ route($categoryRoute.'.store') }}" class="flex flex-col gap-5 p-6">
        @csrf
        <div>
            <h2 id="create-category-title" class="text-lg font-semibold">Create a category</h2>
            <p class="mt-1 text-sm text-slate-600 dark:text-slate-400">Uploads in this category inherit its access tier.</p>
        </div>
        <div class="flex flex-col gap-1.5">
            <label for="create-category-name" class="text-sm font-medium">Category name</label>
            <input id="create-category-name" name="name" value="{{ old('name') }}" maxlength="100" required class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#111e32]" placeholder="e.g. Academic Calendars">
        </div>
        <div class="flex flex-col gap-1.5">
            <label for="create-category-tier" class="text-sm font-medium">Access tier</label>
            <select id="create-category-tier" name="access_tier" required data-tier-select class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#111e32]">
                @foreach (range(1, $role === 'admin' ? 4 : min(3, $clearanceLevel)) as $tierNumber)
                    <option value="tier{{ $tierNumber }}" @selected(old('access_tier', 'tier1') === 'tier'.$tierNumber)>Tier {{ $tierNumber }}</option>
                @endforeach
            </select>
        </div>
        @if ($role === 'admin')
            <div data-department-field class="flex flex-col gap-1.5">
                <label for="create-category-department" class="text-sm font-medium">Department <span class="text-slate-500">(required for Tier 2 and 3)</span></label>
                <select id="create-category-department" name="department_id" data-department-select class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#111e32]">
                    <option value="">All departments / not department-restricted</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" @selected((string) old('department_id') === (string) $department->id)>{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
        @else
            <p class="rounded-lg bg-slate-100 px-3 py-2 text-sm text-slate-600 dark:bg-white/5 dark:text-slate-300">
                Department: {{ auth()->user()->department?->name ?? 'Not assigned' }}. Tier 2 and Tier 3 categories are restricted to this department.
            </p>
        @endif
        <div class="flex justify-end gap-2 border-t border-slate-200 pt-4 dark:border-white/10">
            <button type="button" data-close-category-modal class="min-h-10 rounded-lg border border-slate-300 px-4 text-sm font-semibold text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">Cancel</button>
            <button type="submit" class="min-h-10 rounded-lg bg-emerald-700 px-4 text-sm font-semibold text-white hover:bg-emerald-600">Create category</button>
        </div>
    </form>
</dialog>

<dialog id="edit-category-modal" aria-labelledby="edit-category-title" class="fixed inset-0 m-auto max-h-[calc(100vh-2rem)] w-[min(100%-2rem,34rem)] overflow-y-auto rounded-2xl border border-slate-200 bg-white p-0 text-slate-900 shadow-2xl backdrop:bg-slate-950/60 dark:border-white/10 dark:bg-[#0f1724] dark:text-white">
    <form id="edit-category-form" method="POST" class="flex flex-col gap-5 p-6">
        @csrf
        @method('PATCH')
        <input type="hidden" name="edit_category_id" id="edit-category-id" value="{{ old('edit_category_id') }}">
        <div>
            <h2 id="edit-category-title" class="text-lg font-semibold">Edit category</h2>
            <p class="mt-1 text-sm text-slate-600 dark:text-slate-400">Changing this profile affects new uploads only.</p>
        </div>
        <div class="flex flex-col gap-1.5">
            <label for="edit-category-name" class="text-sm font-medium">Category name</label>
            <input id="edit-category-name" name="name" value="{{ old('name') }}" maxlength="100" required class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#111e32]">
        </div>
        <div class="flex flex-col gap-1.5">
            <label for="edit-category-tier" class="text-sm font-medium">Access tier</label>
            <select id="edit-category-tier" name="access_tier" required data-tier-select class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#111e32]">
                @foreach (range(1, $role === 'admin' ? 4 : min(3, $clearanceLevel)) as $tierNumber)
                    <option value="tier{{ $tierNumber }}">Tier {{ $tierNumber }}</option>
                @endforeach
            </select>
        </div>
        @if ($role === 'admin')
            <div data-department-field class="flex flex-col gap-1.5">
                <label for="edit-category-department" class="text-sm font-medium">Department <span class="text-slate-500">(required for Tier 2 and 3)</span></label>
                <select id="edit-category-department" name="department_id" data-department-select class="min-h-11 rounded-lg border border-slate-300 bg-white px-3 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600/30 dark:border-white/10 dark:bg-[#111e32]">
                    <option value="">All departments / not department-restricted</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
        @else
            <p class="rounded-lg bg-slate-100 px-3 py-2 text-sm text-slate-600 dark:bg-white/5 dark:text-slate-300">
                Department: {{ auth()->user()->department?->name ?? 'Not assigned' }}.
            </p>
        @endif
        <div class="flex justify-end gap-2 border-t border-slate-200 pt-4 dark:border-white/10">
            <button type="button" data-close-category-modal class="min-h-10 rounded-lg border border-slate-300 px-4 text-sm font-semibold text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-slate-200 dark:hover:bg-white/5">Cancel</button>
            <button type="submit" class="min-h-10 rounded-lg bg-emerald-700 px-4 text-sm font-semibold text-white hover:bg-emerald-600">Save changes</button>
        </div>
    </form>
</dialog>

<script>
    (() => {
        const createDialog = document.getElementById('create-category-modal');
        const editDialog = document.getElementById('edit-category-modal');
        const editForm = document.getElementById('edit-category-form');
        const tierSelects = document.querySelectorAll('[data-tier-select]');

        function syncDepartmentRequirement(select) {
            const form = select.closest('form');
            const departmentSelect = form.querySelector('[data-department-select]');
            const departmentField = form.querySelector('[data-department-field]');
            if (!departmentSelect || !departmentField) {
                return;
            }

            const requiresDepartment = ['tier2', 'tier3'].includes(select.value);
            departmentSelect.required = requiresDepartment;
            departmentField.classList.toggle('hidden', !requiresDepartment);
        }

        tierSelects.forEach((select) => {
            select.addEventListener('change', () => syncDepartmentRequirement(select));
            syncDepartmentRequirement(select);
        });

        document.querySelectorAll('[data-open-category-modal]').forEach((button) => {
            button.addEventListener('click', () => document.getElementById(button.dataset.openCategoryModal).showModal());
        });

        document.querySelectorAll('[data-close-category-modal]').forEach((button) => {
            button.addEventListener('click', () => button.closest('dialog').close());
        });

        document.querySelectorAll('[data-edit-category]').forEach((button) => {
            button.addEventListener('click', () => {
                editForm.action = button.dataset.updateUrl;
                document.getElementById('edit-category-id').value = button.dataset.categoryId;
                document.getElementById('edit-category-name').value = button.dataset.categoryName;
                document.getElementById('edit-category-tier').value = button.dataset.categoryTier || 'tier1';
                const departmentSelect = editForm.querySelector('[data-department-select]');
                if (departmentSelect) {
                    departmentSelect.value = button.dataset.categoryDepartment || '';
                }
                syncDepartmentRequirement(document.getElementById('edit-category-tier'));
                editDialog.showModal();
            });
        });

        @if (old('edit_category_id'))
            editForm.action = @json(route($categoryRoute.'.update', old('edit_category_id')));
            editDialog.showModal();
        @elseif ($errors->any())
            createDialog.showModal();
        @endif
    })();
</script>
@endsection
