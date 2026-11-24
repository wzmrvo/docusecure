<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\DocumentCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class DocumentCategoryController extends Controller
{
    public function index(): View
    {
        $user = request()->user();
        $categoryQuery = DocumentCategory::query();

        if ($user->role === 'faculty') {
            $clearanceLevel = (int) substr($user->clearance_tier, -1);
            $directTiers = collect(['tier2', 'tier3'])
                ->filter(fn (string $tier) => (int) substr($tier, -1) <= $clearanceLevel)
                ->all();

            $documentVisibility = function (Builder $query) use ($user, $directTiers): void {
                $query->where('status', 'sealed')
                    ->where(function (Builder $query) use ($user, $directTiers): void {
                        $query->where('access_tier', 'tier1')
                            ->orWhere(function (Builder $restrictedQuery) use ($user, $directTiers): void {
                                $restrictedQuery->whereIn('access_tier', $directTiers)
                                    ->where('department_id', $user->department_id);
                            })
                            ->orWhere(function (Builder $tier4Query) use ($user): void {
                                $tier4Query->where('access_tier', 'tier4')
                                    ->whereHas('accessRequests', function (Builder $accessQuery) use ($user): void {
                                        $accessQuery->where('requester_id', $user->id)
                                            ->where('status', 'approved')
                                            ->where(function (Builder $expiryQuery): void {
                                                $expiryQuery->whereNull('expires_at')
                                                    ->orWhere('expires_at', '>', now());
                                            });
                                    });
                            });
                    });
            };
            $categoryQuery->withCount(['documents' => $documentVisibility]);
        } else {
            $categoryQuery->withCount('documents');
        }

        $categories = $categoryQuery
            ->with('department')
            ->orderBy('name')
            ->paginate(25);

        return view('document-categories.index', [
            'categories' => $categories,
            'departments' => $user->role === 'admin'
                ? Department::query()->where('active', true)->orderBy('name')->get()
                : collect(),
            'role' => $user->role,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validatedCategory($request);

        DocumentCategory::create([
            ...$validated,
            'active' => true,
        ]);

        return redirect()
            ->route($this->managementRoute($request))
            ->with('success', 'Category created and available for new uploads. Existing documents keep their current tier and department access.');
    }

    public function update(Request $request, DocumentCategory $documentCategory): RedirectResponse
    {
        $user = $request->user();
        abort_unless(
            $user->role === 'admin'
                || ($documentCategory->department_id !== null
                    && (int) $documentCategory->department_id === (int) $user->department_id),
            403,
        );

        $validated = $this->validatedCategory($request, $documentCategory);
        $documentCategory->update($validated);

        return redirect()
            ->route($this->managementRoute($request))
            ->with('success', 'Category updated. Existing documents keep their current tier and department access; the category settings apply to new uploads.');
    }

    /**
     * @return array{name: string, slug: string, access_tier: string, department_id: int|null}
     */
    private function validatedCategory(Request $request, ?DocumentCategory $category = null): array
    {
        $user = $request->user();
        $allowedTiers = $user->role === 'admin'
            ? ['tier1', 'tier2', 'tier3', 'tier4']
            : collect(['tier1', 'tier2', 'tier3'])
                ->filter(fn (string $tier): bool => (int) substr($tier, -1) <= (int) substr($user->clearance_tier, -1))
                ->values()
                ->all();
        $input = [
            'name' => trim((string) $request->input('name')),
            'slug' => Str::slug((string) $request->input('name')),
            'access_tier' => $request->input('access_tier'),
        ];
        $slugRule = Rule::unique('document_categories', 'slug');
        if ($category !== null) {
            $slugRule->ignore($category->id);
        }
        $rules = [
            'name' => ['required', 'string', 'max:100'],
            'slug' => ['required', 'string', 'max:120', $slugRule],
            'access_tier' => ['required', Rule::in($allowedTiers)],
        ];

        if ($user->role === 'admin') {
            $input['department_id'] = $request->input('department_id');
            $rules['department_id'] = [
                Rule::requiredIf(in_array($input['access_tier'], ['tier2', 'tier3'], true)),
                'nullable',
                Rule::exists('departments', 'id')->where('active', true),
            ];
        }

        $validated = Validator::make($input, $rules)->validate();
        $restrictedTier = in_array($validated['access_tier'], ['tier2', 'tier3'], true);

        if ($user->role === 'faculty' && $restrictedTier && $user->department_id === null) {
            throw ValidationException::withMessages([
                'access_tier' => 'Assign your Faculty account to a department before creating restricted categories.',
            ]);
        }

        return [
            'name' => $validated['name'],
            'slug' => $validated['slug'],
            'access_tier' => $validated['access_tier'],
            'department_id' => $user->role === 'admin'
                ? ($restrictedTier ? ($validated['department_id'] ?? null) : null)
                : ($restrictedTier ? $user->department_id : null),
        ];
    }

    private function managementRoute(Request $request): string
    {
        $route = $request->user()->role === 'admin'
            ? 'admin.preview.document-categories'
            : 'faculty.preview.document-categories';

        return $route;
    }
}
