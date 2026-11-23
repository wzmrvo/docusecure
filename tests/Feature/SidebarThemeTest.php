<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SidebarThemeTest extends TestCase
{
    use RefreshDatabase;

    public function test_database_seeder_creates_all_demo_role_accounts(): void
    {
        $this->seed();

        $this->assertDatabaseHas('users', ['email' => 'admin@cvsu.edu.ph', 'role' => 'admin']);
        $this->assertDatabaseHas('users', ['email' => 'faculty@cvsu.edu.ph', 'role' => 'faculty']);
        $this->assertDatabaseHas('users', ['email' => 'student@cvsu.edu.ph', 'role' => 'student']);
        $this->assertDatabaseHas('users', ['email' => 'viewer@cvsu.edu.ph', 'role' => 'viewer']);
    }

    public function test_preview_routes_require_authentication_and_the_matching_role(): void
    {
        foreach (['admin', 'faculty', 'student', 'viewer'] as $role) {
            $this->get("/{$role}/preview")->assertRedirect(route('login'));
        }

        $student = User::factory()->create(['role' => 'student']);
        $this->actingAs($student)->get('/admin/preview')->assertForbidden();

        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin)->get('/admin/preview')->assertOk();
    }

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
            $response = $role === 'helpdesk'
                ? $this->get($url)
                : $this->actingAs(User::factory()->create(['role' => $role]))->get($url);

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
            $student = User::factory()->create(['role' => 'student']);
            $this->actingAs($student)->get(route($route))
                ->assertOk()
                ->assertDontSee('docusecure-nav-current', false);
        }
    }
}
