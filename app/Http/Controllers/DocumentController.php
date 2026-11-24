<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use App\Models\Document;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DocumentController extends Controller
{
    public function guestDashboard(): View
    {
        $publicDocuments = Document::query()
            ->where('access_tier', 'tier1')
            ->where('status', 'sealed')
            ->latest()
            ->get()
            ->filter(fn (Document $document) => Storage::disk('local')->exists($document->file_path))
            ->take(20)
            ->values();

        return view('viewer.dashboard', [
            'publicDocuments' => $publicDocuments,
            'guestAccess' => true,
        ]);
    }

    public function downloadPublic(Document $document): StreamedResponse
    {
        if (Auth::check()) {
            return $this->download($document);
        }

        abort_unless($document->access_tier === 'tier1' && $document->status === 'sealed', 404);

        if (! Storage::disk('local')->exists($document->file_path)) {
            abort(404, 'The public document file is unavailable.');
        }

        AuditLog::create([
            'user_id' => null,
            'action' => 'document.public_downloaded',
            'subject_type' => Document::class,
            'subject_id' => $document->id,
            'description' => 'Anonymous visitor downloaded a Tier 1 public document.',
            'ip_address' => request()->ip(),
            'metadata' => ['access_tier' => 'tier1'],
        ]);

        return Storage::disk('local')->download($document->file_path, $document->original_name);
    }

    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $user = $request->user();
        $allowedTiers = $this->allowedTiersFor($user instanceof User ? $user : null);

        abort_unless($allowedTiers !== [], 403);

        $validationRules = [
            'file' => ['required', 'file', 'max:102400', 'mimes:pdf,doc,docx,xls,xlsx,zip', 'extensions:pdf,doc,docx,xls,xlsx,zip'],
            'title' => ['required', 'string', 'max:255'],
            'tracking_number' => ['required', 'string', 'max:100', 'unique:documents,tracking_number'],
            'access_tier' => ['required', Rule::in($allowedTiers)],
            'category_id' => ['nullable', 'exists:document_categories,id'],
        ];

        if ($user instanceof User && $user->role === 'admin') {
            $validationRules['department_id'] = in_array($request->input('access_tier'), ['tier2', 'tier3'], true)
                ? ['required', 'exists:departments,id']
                : ['nullable', 'exists:departments,id'];
        }

        $validated = $request->validate($validationRules);

        $uploaded = $request->file('file');
        $departmentId = $user instanceof User && $user->role === 'admin'
            ? ($validated['department_id'] ?? $user->department_id)
            : $user->department_id;
        $path = null;
        $document = null;

        try {
            $path = $uploaded->store('documents', 'local');
            if ($path === false) {
                throw new \RuntimeException('The uploaded file could not be stored.');
            }

            $sha256 = hash_file('sha256', $uploaded->getRealPath());
            if ($sha256 === false) {
                throw new \RuntimeException('The uploaded file digest could not be generated.');
            }

            DB::transaction(function () use (&$document, $validated, $uploaded, $path, $sha256, $departmentId) {
                $document = Document::create([
                    'title' => $validated['title'],
                    'tracking_number' => $validated['tracking_number'],
                    'category_id' => $validated['category_id'] ?? null,
                    'department_id' => $departmentId,
                    'uploader_id' => Auth::id(),
                    'file_path' => $path,
                    'original_name' => $uploaded->getClientOriginalName(),
                    'mime_type' => $uploaded->getMimeType(),
                    'size_bytes' => $uploaded->getSize(),
                    'sha256' => $sha256,
                    'access_tier' => $validated['access_tier'],
                    'status' => 'sealed',
                    'sealed_at' => now(),
                ]);

                AuditLog::create([
                    'user_id' => Auth::id(),
                    'action' => 'document.sealed',
                    'subject_type' => Document::class,
                    'subject_id' => $document->id,
                    'description' => 'Document sealed and committed to the vault.',
                    'ip_address' => request()->ip(),
                    'metadata' => ['sha256' => $document->sha256],
                ]);
            });
        } catch (\Throwable $exception) {
            if ($path) {
                Storage::disk('local')->delete($path);
            }
            throw $exception;
        }

        $committedDocument = $document->only([
            'title',
            'tracking_number',
            'original_name',
            'sha256',
        ]);

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'The document was stored successfully.',
                'document' => $committedDocument,
            ], 201);
        }

        return back()->with('success', 'The document was stored successfully.')
            ->with('document_committed', true)
            ->with('committed_document', $committedDocument);
    }

    public function download(Document $document): StreamedResponse
    {
        $user = Auth::user();
        abort_unless($user && $user->account_status === 'active', 403);
        $tier = $document->access_tier;
        $allowed = $user && (
            $user->role === 'admin'
            || ($tier === 'tier1')
            || ($user->role === 'faculty'
                && in_array($tier, ['tier2', 'tier3'], true)
                && (int) substr($user->clearance_tier, -1) >= (int) substr($tier, -1)
                && $document->department_id === $user->department_id)
            || ($user->role === 'student'
                && in_array($tier, ['tier1', 'tier2'], true)
                && (int) substr($user->clearance_tier, -1) >= (int) substr($tier, -1))
            || (in_array($user->role, ['faculty', 'student'], true) && in_array($tier, ['tier2', 'tier3', 'tier4'], true) && $document->accessRequests()
                ->where('requester_id', $user->id)
                ->where('status', 'approved')
                ->where(function ($query) {
                    $query->whereNull('expires_at')->orWhere('expires_at', '>', now());
                })
                ->exists())
        );

        abort_unless($allowed, 403);
        abort_unless($document->status === 'sealed', 404, 'The document is not available.');

        if (! Storage::disk('local')->exists($document->file_path)) {
            abort(404, 'The document file is unavailable.');
        }

        AuditLog::create([
            'user_id' => $user->id,
            'action' => 'document.downloaded',
            'subject_type' => Document::class,
            'subject_id' => $document->id,
            'description' => 'Authorized document download.',
            'ip_address' => request()->ip(),
            'metadata' => ['access_tier' => $tier],
        ]);

        return Storage::disk('local')->download($document->file_path, $document->original_name);
    }

    public function update(Request $request, Document $document)
    {
        $user = Auth::user();
        abort_unless($user && ($user->role === 'admin' || $document->uploader_id === $user->id), 403);

        $allowedTiers = $this->allowedTiersFor($user);
        abort_unless($allowedTiers !== [], 403);

        $validationRules = [
            'title' => ['sometimes', 'required', 'string', 'max:255'],
            'access_tier' => ['sometimes', 'required', Rule::in($allowedTiers)],
            'category_id' => ['sometimes', 'nullable', 'exists:document_categories,id'],
        ];

        if ($user->role === 'admin') {
            $accessTier = $request->input('access_tier', $document->access_tier);
            $validationRules['department_id'] = in_array($accessTier, ['tier2', 'tier3'], true)
                ? ['required', 'exists:departments,id']
                : ['nullable', 'exists:departments,id'];
        }

        $validated = $request->validate($validationRules);

        $document->update($validated);

        AuditLog::create([
            'user_id' => $user->id,
            'action' => 'document.updated',
            'subject_type' => Document::class,
            'subject_id' => $document->id,
            'description' => 'Document metadata updated.',
            'ip_address' => $request->ip(),
            'metadata' => [
                'access_tier' => $document->access_tier,
                'department_id' => $document->department_id,
            ],
        ]);

        return back()->with('success', 'Document updated.');
    }

    public function destroy(Request $request, Document $document)
    {
        $user = Auth::user();
        abort_unless($user && ($user->role === 'admin' || $document->uploader_id === $user->id), 403);

        DB::transaction(function () use ($document, $request, $user) {
            Storage::disk('local')->delete($document->file_path);

            AuditLog::create([
                'user_id' => $user->id,
                'action' => 'document.deleted',
                'subject_type' => Document::class,
                'subject_id' => $document->id,
                'description' => 'Document deleted and private file removed.',
                'ip_address' => $request->ip(),
                'metadata' => ['original_name' => $document->original_name],
            ]);

            $document->delete();
        });

        return back()->with('success', 'Document deleted.');
    }

    /**
     * @return list<string>
     */
    private function allowedTiersFor(?User $user): array
    {
        if ($user?->role === 'admin') {
            return ['tier1', 'tier2', 'tier3', 'tier4'];
        }

        if ($user?->role !== 'faculty') {
            return [];
        }

        $clearanceLevel = (int) substr($user->clearance_tier, -1);

        return array_values(array_filter(
            ['tier1', 'tier2', 'tier3'],
            fn (string $tier) => (int) substr($tier, -1) <= $clearanceLevel,
        ));
    }
}
