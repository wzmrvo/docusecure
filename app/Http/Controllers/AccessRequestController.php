<?php

namespace App\Http\Controllers;

use App\Models\AccessRequest;
use App\Models\AuditLog;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'document_id' => ['required', 'exists:documents,id'],
            'justification' => ['required', 'string', 'max:3000'],
        ]);

        $document = Document::findOrFail($validated['document_id']);

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

        $accessRequest->update([
            'status' => 'approved',
            'reviewer_id' => Auth::id(),
            'reviewed_at' => now(),
            'expires_at' => now()->addHours((int) $request->input('lease_hours', 24)),
            'decision_reason' => $request->input('decision_reason'),
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
