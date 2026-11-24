<?php

namespace App\Http\Controllers;

use App\Models\AccessRequest;
use App\Models\AuditLog;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccessRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'document_id' => ['required', 'exists:documents,id'],
            'justification' => ['required', 'string', 'max:3000'],
        ]);

        $document = Document::findOrFail($validated['document_id']);
        abort_unless(
            $document->access_tier !== 'tier1'
                && $document->status === 'sealed'
                && Storage::disk('local')->exists($document->file_path),
            422,
            'Only available restricted documents can be requested.',
        );
        $user = Auth::user();
        $requestedLevel = (int) substr($document->access_tier, -1);
        $userLevel = (int) substr($user->clearance_tier, -1);
        $roleAllowed = match ($document->access_tier) {
            'tier2' => in_array($user->role, ['student', 'faculty'], true),
            'tier3' => in_array($user->role, ['faculty', 'admin'], true),
            'tier4' => $user->role === 'faculty' && $userLevel === 3,
            default => false,
        };
        abort_unless($roleAllowed && $requestedLevel > $userLevel, 422, 'You do not qualify for this restricted document tier.');
        $existing = AccessRequest::where('requester_id', Auth::id())
            ->where('document_id', $document->id)
            ->where(function ($query) {
                $query->where('status', 'pending')
                    ->orWhere(function ($approvedQuery) {
                        $approvedQuery->where('status', 'approved')
                            ->where(function ($expiryQuery) {
                                $expiryQuery->whereNull('expires_at')
                                    ->orWhere('expires_at', '>', now());
                            });
                    });
            })
            ->first();

        if ($existing) {
            return back()->with('success', $existing->status === 'approved'
                ? 'This document access is already approved.'
                : 'This document access request is already pending.');
        }

        $accessRequest = AccessRequest::create([
            'requester_id' => Auth::id(),
            'document_id' => $document->id,
            'requested_tier' => $document->access_tier,
            'justification' => $validated['justification'],
            'status' => 'pending',
        ]);

        AuditLog::create([
            'user_id' => Auth::id(),
            'action' => 'access_request.submitted',
            'subject_type' => AccessRequest::class,
            'subject_id' => $accessRequest->id,
            'description' => 'Restricted document access request submitted.',
            'ip_address' => $request->ip(),
            'metadata' => ['document_id' => $document->id],
        ]);

        return back()->with('success', 'Access request submitted.');
    }

    public function approve(Request $request, AccessRequest $accessRequest)
    {
        abort_if($accessRequest->status !== 'pending', 409);

        $validated = $request->validate([
            'lease_hours' => ['nullable', 'integer', 'min:1', 'max:72'],
            'decision_reason' => ['nullable', 'string', 'max:2000'],
        ]);

        $requester = $accessRequest->requester;
        $document = $accessRequest->document;
        if (in_array($document->access_tier, ['tier2', 'tier3'], true)
            && $document->department_id
            && (int) $document->department_id !== (int) $requester->department_id) {
            abort(422, 'Requester department does not match the document department.');
        }
        $tierAllowed = match ($document->access_tier) {
            'tier2' => in_array($requester?->role, ['student', 'faculty'], true)
                && (int) substr($requester->clearance_tier, -1) >= 1,
            'tier3' => in_array($requester?->role, ['faculty', 'admin'], true)
                && (int) substr($requester->clearance_tier, -1) >= 2,
            'tier4' => in_array($requester?->role, ['faculty', 'admin'], true)
                && (int) substr($requester->clearance_tier, -1) >= 3,
            default => false,
        };
        abort_unless($tierAllowed, 422, 'Requester role cannot receive this document tier.');

        $accessRequest->update([
            'status' => 'approved',
            'reviewer_id' => Auth::id(),
            'reviewed_at' => now(),
            'expires_at' => now()->addHours((int) ($validated['lease_hours'] ?? 24)),
            'decision_reason' => $validated['decision_reason'] ?? null,
        ]);

        AuditLog::create([
            'user_id' => Auth::id(),
            'action' => 'access_request.approved',
            'subject_type' => AccessRequest::class,
            'subject_id' => $accessRequest->id,
            'description' => 'Restricted document access request approved.',
            'ip_address' => $request->ip(),
            'metadata' => ['expires_at' => $accessRequest->expires_at?->toIso8601String()],
        ]);

        return back()->with('success', 'Access request approved.');
    }

    public function reject(Request $request, AccessRequest $accessRequest)
    {
        abort_if($accessRequest->status !== 'pending', 409);

        $validated = $request->validate([
            'decision_reason' => ['required', 'string', 'max:2000'],
        ]);

        $accessRequest->update([
            'status' => 'rejected',
            'reviewer_id' => Auth::id(),
            'reviewed_at' => now(),
            'decision_reason' => $validated['decision_reason'],
        ]);

        AuditLog::create([
            'user_id' => Auth::id(),
            'action' => 'access_request.rejected',
            'subject_type' => AccessRequest::class,
            'subject_id' => $accessRequest->id,
            'description' => 'Restricted document access request rejected.',
            'ip_address' => $request->ip(),
            'metadata' => null,
        ]);

        return back()->with('success', 'Access request rejected.');
    }
}
