<?php

namespace App\Http\Controllers;

use App\Models\HelpdeskTicket;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class PublicHelpdeskTicketController extends Controller
{
    public function index(): View
    {
        return view('helpdesk.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
            'category' => ['required', Rule::in(HelpdeskTicket::CATEGORIES)],
            'priority' => ['required', Rule::in(HelpdeskTicket::PRIORITIES)],
            'details' => ['required', 'string', 'max:3000'],
        ]);

        $ticket = DB::transaction(function () use ($validated): HelpdeskTicket {
            $ticket = HelpdeskTicket::create([
                'reference' => 'SUP-'.now()->format('Y').'-'.Str::upper(Str::random(32)),
                'requester_name' => $validated['name'],
                'requester_contact' => $validated['contact'],
                'category' => $validated['category'],
                'priority' => $validated['priority'],
                'details' => $validated['details'],
                'status' => 'new',
            ]);

            $ticket->activities()->create([
                'type' => 'submitted',
                'to_value' => $ticket->reference,
            ]);

            return $ticket;
        });

        return back()->with('ticket_submitted', $ticket->reference);
    }

    public function track(Request $request): View|RedirectResponse
    {
        $validated = $request->validate([
            'reference' => ['required', 'string', 'max:48'],
        ]);

        $ticket = HelpdeskTicket::query()
            ->where('reference', Str::upper($validated['reference']))
            ->first();

        if ($ticket === null) {
            return redirect()
                ->route('helpdesk')
                ->withErrors(['reference' => 'No support request matches that tracking reference.'])
                ->withInput(['reference' => $validated['reference']]);
        }

        return view('helpdesk.index', [
            'trackedTicket' => [
                'status' => $ticket->status,
                'updated_at' => $ticket->updated_at,
                'replies' => $ticket->activities()
                    ->where('type', 'public_reply')
                    ->orderBy('created_at')
                    ->get(['note', 'created_at']),
            ],
        ]);
    }
}
