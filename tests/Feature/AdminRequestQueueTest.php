<?php

namespace Tests\Feature;

use App\Models\AccessRequest;
use App\Models\AccountApplication;
use App\Models\Department;
use App\Models\Document;
use App\Models\HelpdeskTicket;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class AdminRequestQueueTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_queue_shows_live_counts_for_existing_request_types(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $this->createHelpdeskTicket('SUP-QUEUE-001', 'Network access is unavailable.');
        $this->createAccessRequest();
        $this->createAccountApplication();

        $response = $this->actingAs($admin)->get(route('admin.preview.access-requests'));

        $response->assertOk()
            ->assertViewHas('queueCounts', fn ($counts): bool => is_array($counts)
                && $counts['total_active'] === 3
                && $counts['helpdesk'] === 1
                && $counts['clearance'] === 1
                && $counts['onboarding'] === 1)
            ->assertViewHas('queueItems', function ($items): bool {
                if (! $items instanceof Collection) {
                    return false;
                }

                $types = $items->pluck('type')->sort()->values()->all();

                return $types === ['clearance', 'helpdesk', 'onboarding'];
            })
            ->assertDontSeeText('TKT-2026-88219')
            ->assertDontSeeText('Prof. Juan Dela Cruz')
            ->assertDontSeeText('Dr. Maricel Reyes')
            ->assertDontSeeText('Engr. Maria Santos');
    }

    public function test_admin_queue_search_and_type_filter_return_matching_database_records(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $matchingTicket = $this->createHelpdeskTicket('SUP-QUEUE-002', 'Network access is unavailable.');
        $this->createHelpdeskTicket('SUP-QUEUE-003', 'Printer is unavailable.');
        $this->createAccountApplication();

        $response = $this->actingAs($admin)->get(route('admin.preview.access-requests', [
            'queue_type' => 'helpdesk',
            'queue_search' => 'Network',
        ]));

        $response->assertOk()
            ->assertViewHas('queueItems', function ($items) use ($matchingTicket): bool {
                if (! $items instanceof Collection) {
                    return false;
                }

                return $items->count() === 1
                    && $items->first()['reference'] === $matchingTicket->reference;
            });
    }

    private function createHelpdeskTicket(string $reference, string $details): HelpdeskTicket
    {
        return HelpdeskTicket::create([
            'reference' => $reference,
            'requester_name' => 'Taylor Morgan',
            'requester_contact' => 'taylor@example.test',
            'category' => 'technical_incident',
            'priority' => 'normal',
            'details' => $details,
            'status' => 'new',
        ]);
    }

    private function createAccessRequest(): AccessRequest
    {
        $department = Department::create([
            'name' => 'Computer Studies',
            'code' => 'CS',
            'college' => 'CEIT',
        ]);
        $requester = User::factory()->create([
            'role' => 'faculty',
            'account_status' => 'active',
            'clearance_tier' => 'tier2',
            'department_id' => $department->id,
            'college' => 'CEIT',
        ]);
        $uploader = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $document = Document::create([
            'title' => 'Research Archive',
            'tracking_number' => 'DOC-QUEUE-001',
            'uploader_id' => $uploader->id,
            'file_path' => 'documents/research.pdf',
            'original_name' => 'research.pdf',
            'mime_type' => 'application/pdf',
            'size_bytes' => 100,
            'access_tier' => 'tier3',
            'status' => 'sealed',
        ]);

        return AccessRequest::create([
            'requester_id' => $requester->id,
            'document_id' => $document->id,
            'requested_tier' => 'tier3',
            'justification' => 'Research work requires access.',
            'status' => 'pending',
        ]);
    }

    private function createAccountApplication(): AccountApplication
    {
        return AccountApplication::create([
            'full_name' => 'Riley Chen',
            'identification_number' => 'ID-QUEUE-001',
            'institutional_email' => 'riley@example.test',
            'phone' => '555-0101',
            'college_unit' => 'CEIT',
            'department_unit' => 'Computer Studies',
            'clearance_tier' => 'tier3',
            'justification' => 'Institutional access is needed for assigned duties.',
            'status' => 'pending',
        ]);
    }
}
