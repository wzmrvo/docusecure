<?php

namespace Tests\Feature;

use App\Models\HelpdeskTicket;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HelpdeskTicketTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_submission_persists_a_pending_ticket(): void
    {
        $response = $this->from(route('helpdesk'))
            ->post(route('helpdesk.tickets.store'), [
                'name' => 'Jamie Rivera',
                'contact' => 'jamie.rivera@cvsu.edu.ph',
                'category' => 'account_access',
                'priority' => 'urgent',
                'details' => 'I cannot sign in to my institutional account.',
            ]);

        $response->assertRedirect(route('helpdesk'))
            ->assertSessionHas('ticket_submitted');
        $this->assertDatabaseHas('helpdesk_tickets', [
            'requester_name' => 'Jamie Rivera',
            'requester_contact' => 'jamie.rivera@cvsu.edu.ph',
            'category' => 'account_access',
            'priority' => 'urgent',
            'status' => 'new',
            'details' => 'I cannot sign in to my institutional account.',
        ]);
        $this->assertDatabaseHas('helpdesk_ticket_activities', [
            'type' => 'submitted',
            'actor_id' => null,
        ]);
    }

    public function test_public_submission_rejects_an_invalid_category(): void
    {
        $this->from(route('helpdesk'))
            ->post(route('helpdesk.tickets.store'), [
                'name' => 'Jamie Rivera',
                'contact' => 'jamie.rivera@cvsu.edu.ph',
                'category' => 'unrecognized',
                'priority' => 'urgent',
                'details' => 'I cannot sign in to my institutional account.',
            ])
            ->assertRedirect(route('helpdesk'))
            ->assertSessionHasErrors('category');

        $this->assertDatabaseCount('helpdesk_tickets', 0);
    }

    public function test_helpdesk_form_uses_live_submission_and_tracking_routes(): void
    {
        $this->get(route('helpdesk'))
            ->assertOk()
            ->assertSee('action="'.route('helpdesk.tickets.store').'"', false)
            ->assertSee('action="'.route('helpdesk.track').'"', false)
            ->assertDontSeeText('Request prepared.');
    }

    public function test_public_tracking_only_discloses_ticket_status_and_updated_time(): void
    {
        $ticket = HelpdeskTicket::create([
            'reference' => 'SUP-2026-AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
            'requester_name' => 'Jamie Rivera',
            'requester_contact' => 'jamie.rivera@cvsu.edu.ph',
            'category' => 'account_access',
            'priority' => 'urgent',
            'details' => 'I cannot sign in to my institutional account.',
            'status' => 'in_progress',
        ]);

        $this->get(route('helpdesk.track', ['reference' => $ticket->reference]))
            ->assertOk()
            ->assertSeeText('Current status')
            ->assertSeeText('in progress')
            ->assertSeeText('Last updated')
            ->assertDontSeeText('Jamie Rivera')
            ->assertDontSeeText('jamie.rivera@cvsu.edu.ph')
            ->assertDontSeeText('I cannot sign in to my institutional account.');
    }

    public function test_public_tracking_shows_public_replies_without_internal_notes(): void
    {
        $ticket = HelpdeskTicket::create([
            'reference' => 'SUP-2026-EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE',
            'requester_name' => 'Jamie Rivera',
            'requester_contact' => 'jamie.rivera@cvsu.edu.ph',
            'category' => 'account_access',
            'priority' => 'normal',
            'details' => 'Unable to access the institutional account.',
            'status' => 'in_progress',
        ]);
        $ticket->activities()->create([
            'type' => 'public_reply',
            'note' => 'Your access reset is complete. Please try again.',
        ]);
        $ticket->activities()->create([
            'type' => 'internal_note',
            'note' => 'Staff-only account investigation.',
        ]);

        $this->get(route('helpdesk.track', ['reference' => $ticket->reference]))
            ->assertOk()
            ->assertSeeText('Replies from MIS Support')
            ->assertSeeText('Your access reset is complete. Please try again.')
            ->assertDontSeeText('Staff-only account investigation.');
    }
}
