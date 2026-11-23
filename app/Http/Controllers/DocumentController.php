<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DocumentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'file' => ['required', 'file', 'max:102400', 'mimes:pdf,doc,docx,xls,xlsx,zip'],
            'title' => ['required', 'string', 'max:255'],
            'tracking_number' => ['required', 'string', 'max:100', 'unique:documents,tracking_number'],
            'access_tier' => ['required', 'in:tier1,tier2,tier3,tier4'],
            'category_id' => ['nullable', 'exists:document_categories,id'],
        ]);

        $uploaded = $request->file('file');
        $path = null;
        $document = null;

        try {
            $path = $uploaded->store('documents', 'local');

            DB::transaction(function () use (&$document, $validated, $uploaded, $path) {
                $document = Document::create([
                    'title' => $validated['title'],
                    'tracking_number' => $validated['tracking_number'],
                    'category_id' => $validated['category_id'] ?? null,
                    'department_id' => Auth::user()?->department_id,
                    'uploader_id' => Auth::id(),
                    'file_path' => $path,
                    'original_name' => $uploaded->getClientOriginalName(),
                    'mime_type' => $uploaded->getClientMimeType(),
                    'size_bytes' => $uploaded->getSize(),
                    'sha256' => hash_file('sha256', $uploaded->getRealPath()),
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

        return back()->with('document_committed', true)->with('committed_document', $document->only([
            'title',
            'tracking_number',
            'original_name',
            'sha256',
        ]));
    }

    public function download(Document $document): StreamedResponse
    {
        $user = Auth::user();
        $tier = $document->access_tier;
        $allowed = $user && (
            $user->role === 'admin'
            || ($tier === 'tier1')
            || ($user->role === 'faculty'
                && in_array($tier, ['tier2', 'tier3'], true)
                && ($document->department_id === null || $document->department_id === $user->department_id))
            || ($user->role === 'student' && in_array($tier, ['tier1', 'tier2'], true))
            || (in_array($user->role, ['faculty', 'student'], true) && $tier === 'tier4' && $document->accessRequests()
                ->where('requester_id', $user->id)
                ->where('status', 'approved')
                ->where(function ($query) {
                    $query->whereNull('expires_at')->orWhere('expires_at', '>', now());
                })
                ->exists())
        );

        abort_unless($allowed, 403);

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

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'access_tier' => ['required', 'in:tier1,tier2,tier3,tier4'],
            'category_id' => ['nullable', 'exists:document_categories,id'],
        ]);

        $document->update($validated);

        AuditLog::create([
            'user_id' => $user->id,
            'action' => 'document.updated',
            'subject_type' => Document::class,
            'subject_id' => $document->id,
            'description' => 'Document metadata updated.',
            'ip_address' => $request->ip(),
            'metadata' => ['access_tier' => $document->access_tier],
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
}
