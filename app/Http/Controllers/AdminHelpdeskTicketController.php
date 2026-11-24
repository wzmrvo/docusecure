<?php

namespace App\Http\Controllers;

use App\Models\HelpdeskTicket;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AdminHelpdeskTicketController extends Controller
{
    public function update(Request $request, HelpdeskTicket $ticket): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', Rule::in(HelpdeskTicket::STATUSES)],
            'priority' => ['required', Rule::in(HelpdeskTicket::PRIORITIES)],
            'assigned_to' => [
                'present',
                'nullable',
                Rule::exists('users', 'id')->where(
                    fn (QueryBuilder $query): QueryBuilder => $query
                        ->where('role', 'admin')
                        ->where('account_status', 'active'),
                ),
            ],
            'public_reply' => ['nullable', 'string', 'max:2000'],
            'internal_note' => ['nullable', 'string', 'max:2000'],
        ]);

        DB::transaction(function () use ($ticket, $validated): void {
            $lockedTicket = HelpdeskTicket::query()
                ->whereKey($ticket->id)
                ->lockForUpdate()
                ->firstOrFail();

            foreach ([
                'status' => 'status_changed',
                'priority' => 'priority_changed',
                'assigned_to' => 'assignment_changed',
            ] as $attribute => $activityType) {
                $fromValue = $lockedTicket->getAttribute($attribute);
                $toValue = $validated[$attribute] ?? null;

                if ((string) $fromValue === (string) $toValue) {
                    continue;
                }

                $lockedTicket->setAttribute($attribute, $toValue);
                $lockedTicket->activities()->create([
                    'actor_id' => Auth::id(),
                    'type' => $activityType,
                    'from_value' => $fromValue === null ? null : (string) $fromValue,
                    'to_value' => $toValue === null ? null : (string) $toValue,
                ]);
            }

            $lockedTicket->save();

            $reply = trim($validated['public_reply'] ?? '');
            if ($reply !== '') {
                $lockedTicket->activities()->create([
                    'actor_id' => Auth::id(),
                    'type' => 'public_reply',
                    'note' => $reply,
                ]);
            }

            $note = trim($validated['internal_note'] ?? '');
            if ($note !== '') {
                $lockedTicket->activities()->create([
                    'actor_id' => Auth::id(),
                    'type' => 'internal_note',
                    'note' => $note,
                ]);
            }
        });

        return back()->with('success', 'Helpdesk ticket updated.');
    }
}
