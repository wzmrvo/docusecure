<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InstitutionalAccountRequestTest extends TestCase
{
    use RefreshDatabase;

    public function test_application_form_keeps_identity_fields_blank_until_entered(): void
    {
        $this->get(route('institutional-account-request'))
            ->assertOk()
            ->assertSee('name="fullName" placeholder="Your full name as registered" required type="text" value=""', false)
            ->assertSee('name="idNumber" placeholder="Your official ID number" required type="text" value=""', false)
            ->assertSee('name="cvsuEmail" placeholder="name.surname@cvsu.edu.ph" required type="email" value=""', false)
            ->assertSee('name="phoneNumber" placeholder="+63 917 000 0000" required type="tel" value=""', false);
    }

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
