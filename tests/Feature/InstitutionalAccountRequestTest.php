<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InstitutionalAccountRequestTest extends TestCase
{
    use RefreshDatabase;

    public function test_successful_application_shows_confirmation_modal_after_redirect(): void
    {
        $response = $this->from(route('institutional-account-request'))
            ->post(route('institutional-account-request.store'), [
                'fullName' => 'Test Applicant',
                'idNumber' => '2026-1234',
                'cvsuEmail' => 'test.applicant@cvsu.edu.ph',
                'phoneNumber' => '09170000000',
                'collegeUnit' => 'CEIT',
                'deptUnit' => 'Information Technology',
                'clearanceTier' => 'tier3',
                'justification' => 'Research support for the current academic year.',
                'password' => 'SecurePass123!',
                'password_confirmation' => 'SecurePass123!',
            ]);

        $response->assertRedirect(route('institutional-account-request'));
        $this->assertDatabaseHas('account_applications', [
            'institutional_email' => 'test.applicant@cvsu.edu.ph',
            'status' => 'pending',
        ]);

        $this->get(route('institutional-account-request'))
            ->assertOk()
            ->assertSeeText('Your account application was submitted and is now waiting for MIS admin review.')
            ->assertSee('id="account-request-success-modal" class="fixed inset-0 z-[60] flex items-center', false);
    }
}
