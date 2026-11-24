<?php

namespace Tests\Feature;

use App\Models\HelpdeskTicket;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminHelpdeskTicketTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_filter_database_tickets_by_reference(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $matchingTicket = $this->createTicket('SUP-2026-AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
        $otherTicket = $this->createTicket('SUP-2026-BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB');

        $this->actingAs($admin)
            ->get(route('admin.preview.access-requests', ['ticket_search' => $matchingTicket->reference]))
            ->assertOk()
            ->assertSeeText($matchingTicket->reference)
            ->assertDontSeeText($otherTicket->reference);
    }

    public function test_admin_ticket_form_separates_public_replies_from_internal_notes(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $this->createTicket('SUP-2026-FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF');

        $this->actingAs($admin)
            ->get(route('admin.preview.access-requests'))
            ->assertOk()
            ->assertSee('name="public_reply"', false)
            ->assertSeeText('Reply to requester')
            ->assertSeeText('Internal note (admins only)');
    }

    public function test_admin_updates_ticket_and_records_each_change(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $ticket = $this->createTicket('SUP-2026-CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC');

        $this->actingAs($admin)
            ->from(route('admin.preview.access-requests'))
            ->patch(route('admin.preview.helpdesk-tickets.update', $ticket), [
                'status' => 'in_progress',
                'priority' => 'urgent',
                'assigned_to' => $admin->id,
                'public_reply' => 'Your access reset is complete. Please try again.',
                'internal_note' => 'Review started.',
            ])
            ->assertRedirect(route('admin.preview.access-requests'))
            ->assertSessionHas('success');

        $this->assertDatabaseHas('helpdesk_tickets', [
            'id' => $ticket->id,
            'status' => 'in_progress',
            'priority' => 'urgent',
            'assigned_to' => $admin->id,
        ]);
        $this->assertDatabaseHas('helpdesk_ticket_activities', [
            'helpdesk_ticket_id' => $ticket->id,
            'actor_id' => $admin->id,
            'type' => 'status_changed',
            'from_value' => 'new',
            'to_value' => 'in_progress',
        ]);
        $this->assertDatabaseHas('helpdesk_ticket_activities', [
            'helpdesk_ticket_id' => $ticket->id,
            'actor_id' => $admin->id,
            'type' => 'priority_changed',
            'from_value' => 'normal',
            'to_value' => 'urgent',
        ]);
        $this->assertDatabaseHas('helpdesk_ticket_activities', [
            'helpdesk_ticket_id' => $ticket->id,
            'actor_id' => $admin->id,
            'type' => 'assignment_changed',
            'to_value' => (string) $admin->id,
        ]);
        $this->assertDatabaseHas('helpdesk_ticket_activities', [
            'helpdesk_ticket_id' => $ticket->id,
            'actor_id' => $admin->id,
            'type' => 'internal_note',
            'note' => 'Review started.',
        ]);
        $this->assertDatabaseHas('helpdesk_ticket_activities', [
            'helpdesk_ticket_id' => $ticket->id,
            'actor_id' => $admin->id,
            'type' => 'public_reply',
            'note' => 'Your access reset is complete. Please try again.',
        ]);
    }

    public function test_non_admin_cannot_update_ticket(): void
    {
        $student = User::factory()->create(['role' => 'student', 'account_status' => 'active']);
        $ticket = $this->createTicket('SUP-2026-DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD');

        $this->actingAs($student)
            ->patch(route('admin.preview.helpdesk-tickets.update', $ticket), [
                'status' => 'resolved',
            ])
            ->assertForbidden();

        $this->assertDatabaseHas('helpdesk_tickets', [
            'id' => $ticket->id,
            'status' => 'new',
        ]);
    }

    public function test_dashboard_shows_database_tickets_instead_of_sample_tickets(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $ticket = $this->createTicket('SUP-2026-EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE');

        $this->actingAs($admin)
            ->get(route('admin.preview.dashboard'))
            ->assertOk()
            ->assertSeeText($ticket->reference)
            ->assertDontSeeText('TKT-2026-88219')
            ->assertDontSeeText('Prof. Juan Dela Cruz');
    }

    private function createTicket(string $reference): HelpdeskTicket
    {
        return HelpdeskTicket::create([
            'reference' => $reference,
            'requester_name' => 'Jamie Rivera',
            'requester_contact' => 'jamie.rivera@cvsu.edu.ph',
            'category' => 'account_access',
            'priority' => 'normal',
            'details' => 'Unable to access the institutional account.',
            'status' => 'new',
        ]);
    }
}
