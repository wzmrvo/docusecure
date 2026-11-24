<?php

namespace Tests\Feature;

use App\Models\Department;
use App\Models\Document;
use App\Models\DocumentCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DocumentCategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_and_faculty_created_categories_are_shared(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $department = Department::create(['name' => 'Engineering', 'code' => 'ENG', 'active' => true]);
        $faculty = User::factory()->create([
            'role' => 'faculty',
            'account_status' => 'active',
            'clearance_tier' => 'tier3',
            'department_id' => $department->id,
        ]);

        $response = $this->actingAs($admin)->post(route('admin.preview.document-categories.store'), [
            'name' => 'Faculty Research',
            'access_tier' => 'tier3',
            'department_id' => $department->id,
        ]);

        $response->assertRedirect(route('admin.preview.document-categories'));
        $this->assertDatabaseHas('document_categories', [
            'name' => 'Faculty Research',
            'slug' => 'faculty-research',
            'access_tier' => 'tier3',
            'department_id' => $department->id,
            'active' => true,
        ]);

        $this->actingAs($faculty)->post(route('faculty.preview.document-categories.store'), [
            'name' => 'Course Materials',
            'access_tier' => 'tier2',
        ])->assertRedirect(route('faculty.preview.document-categories'));

        $this->assertDatabaseHas('document_categories', [
            'name' => 'Course Materials',
            'slug' => 'course-materials',
            'access_tier' => 'tier2',
            'department_id' => $department->id,
            'active' => true,
        ]);

        $this->actingAs($admin)
            ->get(route('admin.preview.document-categories'))
            ->assertOk()
            ->assertSeeText('Faculty Research')
            ->assertSeeText('Course Materials');
    }

    public function test_upload_access_is_derived_from_selected_category_profile(): void
    {
        Storage::fake('local');
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $department = Department::create(['name' => 'Engineering', 'code' => 'ENG', 'active' => true]);
        $category = DocumentCategory::create([
            'name' => 'Confidential Research',
            'slug' => 'confidential-research',
            'access_tier' => 'tier3',
            'department_id' => $department->id,
            'active' => true,
        ]);

        $this->actingAs($admin)
            ->postJson(route('admin.preview.deposit-file.store'), [
                'file' => UploadedFile::fake()->createWithContent('research.pdf', 'private research'),
                'title' => 'Research report',
                'tracking_number' => 'RESEARCH-001',
                'category_id' => $category->id,
                'access_tier' => 'tier3',
            ])
            ->assertCreated();

        $this->assertDatabaseHas('documents', [
            'tracking_number' => 'RESEARCH-001',
            'category_id' => $category->id,
            'access_tier' => 'tier3',
            'department_id' => $department->id,
        ]);
    }

    public function test_admin_upload_rejects_a_tier_that_does_not_match_the_selected_category(): void
    {
        Storage::fake('local');
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $department = Department::create(['name' => 'Engineering', 'code' => 'ENG', 'active' => true]);
        $category = DocumentCategory::create([
            'name' => 'Confidential Research',
            'slug' => 'confidential-research',
            'access_tier' => 'tier3',
            'department_id' => $department->id,
            'active' => true,
        ]);

        $this->actingAs($admin)
            ->postJson(route('admin.preview.deposit-file.store'), [
                'file' => UploadedFile::fake()->createWithContent('research.pdf', 'private research'),
                'title' => 'Mismatched report',
                'tracking_number' => 'RESEARCH-002',
                'category_id' => $category->id,
                'access_tier' => 'tier2',
            ])
            ->assertUnprocessable()
            ->assertJsonValidationErrors('category_id');

        $this->assertDatabaseMissing('documents', ['tracking_number' => 'RESEARCH-002']);
    }

    public function test_faculty_cannot_upload_to_a_restricted_category_from_another_department(): void
    {
        Storage::fake('local');
        $engineering = Department::create(['name' => 'Engineering', 'code' => 'ENG', 'active' => true]);
        $agriculture = Department::create(['name' => 'Agriculture', 'code' => 'AGR', 'active' => true]);
        $faculty = User::factory()->create([
            'role' => 'faculty',
            'clearance_tier' => 'tier3',
            'department_id' => $engineering->id,
            'account_status' => 'active',
        ]);
        $category = DocumentCategory::create([
            'name' => 'Agriculture Records',
            'slug' => 'agriculture-records',
            'access_tier' => 'tier3',
            'department_id' => $agriculture->id,
            'active' => true,
        ]);

        $this->actingAs($faculty)
            ->postJson(route('faculty.submit-department-file'), [
                'department_file' => UploadedFile::fake()->createWithContent('records.pdf', 'restricted data'),
                'document_title' => 'Restricted records',
                'tracking_number' => 'AGR-001',
                'category_id' => $category->id,
            ])
            ->assertUnprocessable()
            ->assertJsonValidationErrors('category_id');

        $this->assertDatabaseMissing('documents', ['tracking_number' => 'AGR-001']);
    }

    public function test_admin_can_assign_recent_files_to_a_category_profile(): void
    {
        Storage::fake('local');
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $engineering = Department::create(['name' => 'Engineering', 'code' => 'ENG', 'active' => true]);
        $agriculture = Department::create(['name' => 'Agriculture', 'code' => 'AGR', 'active' => true]);
        $oldCategory = DocumentCategory::create([
            'name' => 'Old Research',
            'slug' => 'old-research',
            'access_tier' => 'tier2',
            'department_id' => $engineering->id,
            'active' => true,
        ]);
        $newCategory = DocumentCategory::create([
            'name' => 'Agriculture Records',
            'slug' => 'agriculture-records',
            'access_tier' => 'tier3',
            'department_id' => $agriculture->id,
            'active' => true,
        ]);
        DocumentCategory::create([
            'name' => 'Public Notices',
            'slug' => 'public-notices',
            'access_tier' => 'tier1',
            'active' => true,
        ]);
        DocumentCategory::create([
            'name' => 'Legacy Category',
            'slug' => 'legacy-category',
            'active' => true,
        ]);
        $document = $this->createDocument($admin, $oldCategory, 'Research report', 'tier2', 'documents/research.pdf');
        Storage::disk('local')->put($document->file_path, 'research');

        $response = $this->actingAs($admin)
            ->get(route('admin.preview.deposit-file'));

        $response->assertOk()
            ->assertSee('name="category_id"', false)
            ->assertSee('name="clearance_tier"', false)
            ->assertSeeText('Access Clearance Tier Allocation')
            ->assertSeeText('Old Research')
            ->assertSeeText('Agriculture Records')
            ->assertSeeText('Legacy Category · Set tier in category manager')
            ->assertSee('data-current-tier="tier2"', false)
            ->assertSee('data-tier="tier1"', false)
            ->assertSeeText('Confirm access downgrade')
            ->assertSeeText('Save category')
            ->assertDontSeeText('Save department');

        $html = $response->getContent();
        $tierPosition = strpos($html, '2. Access Clearance Tier Allocation');
        $categoryPosition = strpos($html, 'Document Category &amp; Access');

        $this->assertNotFalse($tierPosition);
        $this->assertNotFalse($categoryPosition);
        $this->assertLessThan($categoryPosition, $tierPosition);

        $this->from(route('admin.preview.deposit-file'))
            ->patch(route('admin.preview.documents.update', $document), [
                'category_id' => $newCategory->id,
            ])
            ->assertRedirect(route('admin.preview.deposit-file'));

        $this->assertDatabaseHas('documents', [
            'id' => $document->id,
            'category_id' => $newCategory->id,
            'access_tier' => 'tier3',
            'department_id' => $agriculture->id,
        ]);
    }

    public function test_students_cannot_create_document_categories(): void
    {
        $student = User::factory()->create([
            'role' => 'student',
            'account_status' => 'active',
        ]);

        $this->actingAs($student)
            ->post(route('admin.preview.document-categories.store'), ['name' => 'Unauthorized'])
            ->assertForbidden();

        $this->assertDatabaseMissing('document_categories', ['name' => 'Unauthorized']);
    }

    public function test_admin_and_faculty_category_links_open_their_permitted_documents(): void
    {
        Storage::fake('local');
        $admin = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);
        $faculty = User::factory()->create(['role' => 'faculty', 'account_status' => 'active']);
        $category = DocumentCategory::create([
            'name' => 'Shared Records',
            'slug' => 'shared-records',
            'active' => true,
        ]);
        Storage::disk('local')->put('documents/admin-tier-four.pdf', 'admin-only');
        Storage::disk('local')->put('documents/public-notice.pdf', 'public');
        $this->createDocument($admin, $category, 'Tier Four Record', 'tier4', 'documents/admin-tier-four.pdf');
        $this->createDocument($faculty, $category, 'Public Notice', 'tier1', 'documents/public-notice.pdf');

        $this->actingAs($admin)
            ->get(route('admin.preview.document-categories'))
            ->assertOk()
            ->assertSee(route('admin.preview.document-library', ['category' => $category->id]), false);

        $this->get(route('admin.preview.document-library', ['category' => $category->id]))
            ->assertOk()
            ->assertSeeText('Tier Four Record')
            ->assertSeeText('Public Notice');

        $this->actingAs($faculty)
            ->get(route('faculty.preview.document-categories'))
            ->assertOk()
            ->assertSee(route('faculty.preview.document-library', ['category' => $category->id]), false);

        $this->get(route('faculty.preview.document-library', ['category' => $category->id]))
            ->assertOk()
            ->assertSeeText('Public Notice')
            ->assertDontSeeText('Tier Four Record');
    }

    public function test_student_library_only_offers_categories_within_clearance(): void
    {
        Storage::fake('local');
        $student = User::factory()->create([
            'role' => 'student',
            'clearance_tier' => 'tier1',
            'account_status' => 'active',
        ]);
        $visibleCategory = DocumentCategory::create([
            'name' => 'Public Resources',
            'slug' => 'public-resources',
            'active' => true,
        ]);
        $restrictedCategory = DocumentCategory::create([
            'name' => 'Restricted Files',
            'slug' => 'restricted-files',
            'active' => true,
        ]);
        Storage::disk('local')->put('documents/student.pdf', 'accessible');
        Storage::disk('local')->put('documents/restricted.pdf', 'restricted');
        $this->createDocument($student, $visibleCategory, 'Student handbook', 'tier1', 'documents/student.pdf');
        $this->createDocument($student, $restrictedCategory, 'Restricted memo', 'tier3', 'documents/restricted.pdf');

        $this->actingAs($student)
            ->get(route('student.preview.document-library'))
            ->assertOk()
            ->assertSeeText('Student handbook')
            ->assertSeeText('Public Resources')
            ->assertDontSeeText('Restricted Files')
            ->assertDontSeeText('Restricted memo');

        $this->get(route('student.preview.categories'))
            ->assertOk()
            ->assertSee(route('student.preview.document-library', ['category' => $visibleCategory->id]), false);
    }

    public function test_viewer_categories_only_include_sealed_tier_one_documents(): void
    {
        Storage::fake('local');
        $viewer = User::factory()->create(['role' => 'viewer', 'account_status' => 'active']);
        $publicCategory = DocumentCategory::create([
            'name' => 'Public Notices',
            'slug' => 'public-notices',
            'active' => true,
        ]);
        $studentCategory = DocumentCategory::create([
            'name' => 'Student Records',
            'slug' => 'student-records',
            'active' => true,
        ]);
        Storage::disk('local')->put('documents/public.pdf', 'public');
        Storage::disk('local')->put('documents/student.pdf', 'restricted');
        $this->createDocument($viewer, $publicCategory, 'Public announcement', 'tier1', 'documents/public.pdf');
        $this->createDocument($viewer, $studentCategory, 'Student transcript', 'tier2', 'documents/student.pdf');

        $this->actingAs($viewer)
            ->get(route('viewer.preview.categories'))
            ->assertOk()
            ->assertSeeText('Public Notices')
            ->assertSee(route('viewer.preview.document-library', ['category' => $publicCategory->id]), false)
            ->assertDontSeeText('Student Records');

        $this->get(route('viewer.preview.document-library', ['category' => $publicCategory->id]))
            ->assertOk()
            ->assertSeeText('Public announcement')
            ->assertDontSeeText('Student transcript');
    }

    public function test_two_factor_screens_show_direct_actions_without_demo_or_bypass_copy(): void
    {
        $user = User::factory()->create(['role' => 'admin', 'account_status' => 'active']);

        $this->actingAs($user)
            ->get('/preview/two-factor')
            ->assertOk()
            ->assertSeeText('Resend 2FA OTP')
            ->assertSeeText('Back to sign in')
            ->assertSee('action="'.route('logout').'"', false)
            ->assertDontSeeText('Confirm Workspace Sign-In')
            ->assertDontSeeText('482901')
            ->assertDontSeeText('backup security key')
            ->assertDontSeeText('emergency clearance bypass');
    }

    public function test_login_displays_the_direct_sign_in_form_without_confirmation_interstitial(): void
    {
        $this->get(route('login'))
            ->assertOk()
            ->assertDontSeeText('Confirm Workspace Sign-In')
            ->assertDontSeeText('482901');
    }

    private function createDocument(User $uploader, DocumentCategory $category, string $title, string $tier, string $path): Document
    {
        return Document::create([
            'title' => $title,
            'tracking_number' => str_replace(' ', '-', strtolower($title)),
            'category_id' => $category->id,
            'uploader_id' => $uploader->id,
            'file_path' => $path,
            'original_name' => basename($path),
            'mime_type' => 'application/pdf',
            'size_bytes' => 10,
            'access_tier' => $tier,
            'status' => 'sealed',
        ]);
    }
}
