<?php

namespace Tests\Feature;

use Tests\TestCase;

class SidebarThemeTest extends TestCase
{
    public function test_role_screens_render_a_consistent_accessible_sidebar(): void
    {
        $roleRoutes = [
            'admin' => route('admin.preview.deposit-file'),
            'faculty' => route('faculty.preview.submit-department-file'),
            'student' => route('student.preview.categories'),
            'viewer' => route('viewer.preview.categories'),
            'helpdesk' => route('helpdesk'),
        ];

        foreach ($roleRoutes as $role => $url) {
            $response = $this->get($url);

            $response->assertOk()
                ->assertSee("data-sidebar=\"{$role}\"", false)
                ->assertSee('aria-current="page"', false);
        }
    }

    public function test_helpdesk_route_is_a_public_request_dashboard(): void
    {
        $this->get(route('helpdesk'))
            ->assertOk()
            ->assertSee('data-sidebar="helpdesk"', false)
            ->assertSee('Create a Support Request')
            ->assertDontSee('Mark Villareal')
            ->assertDontSee('HD-MIS-TOKEN-44')
            ->assertDontSee('Sign Out Session')
            ->assertDontSee('Unlock Account')
            ->assertDontSee('Institutional NetID Lookup');
    }

    public function test_helpdesk_mobile_shell_has_responsive_sidebar_controls(): void
    {
        $this->get(route('helpdesk'))
            ->assertOk()
            ->assertSee('max-sm:hidden', false)
            ->assertSee('id="mobile-menu-button"', false)
            ->assertSee('max-sm:pl-0', false);
    }

    public function test_student_screens_use_the_shared_sidebar_active_state(): void
    {
        $studentRoutes = [
            'student.preview.account-settings',
            'student.preview.categories',
            'student.preview.document-library',
            'student.preview.library-research',
            'student.preview.logout-confirmation',
            'student.preview.system-settings',
        ];

        foreach ($studentRoutes as $route) {
            $this->get(route($route))
                ->assertOk()
                ->assertDontSee('docusecure-nav-current', false);
        }
    }
}
