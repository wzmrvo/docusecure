<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Document;
use App\Models\DocumentCategory;
use App\Models\SystemSetting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $accounts = [
            ['name' => 'Tier 4 Administrator', 'email' => 'admin@cvsu.edu.ph', 'role' => 'admin'],
            ['name' => 'Tier 3 Faculty', 'email' => 'faculty@cvsu.edu.ph', 'role' => 'faculty'],
            ['name' => 'Student Scholar', 'email' => 'student@cvsu.edu.ph', 'role' => 'student'],
            ['name' => 'Guest Viewer', 'email' => 'viewer@cvsu.edu.ph', 'role' => 'viewer'],
        ];

        foreach ($accounts as $account) {
            User::updateOrCreate(
                ['email' => $account['email']],
                [
                    'name' => $account['name'],
                    'role' => $account['role'],
                    'password' => Hash::make('Demo@123'),
                    'clearance_tier' => match ($account['role']) {
                        'admin' => 'tier4',
                        'faculty' => 'tier3',
                        'student' => 'tier1',
                        default => 'tier1',
                    },
                    'account_status' => 'active',
                ],
            );
        }

        Department::updateOrCreate(
            ['code' => 'CEIT-IT'],
            ['name' => 'Department of Information Technology', 'college' => 'College of Engineering and Information Technology', 'active' => true],
        );

        foreach ([
            ['name' => 'Board Resolutions', 'slug' => 'board-resolutions'],
            ['name' => 'Academic Records', 'slug' => 'academic-records'],
            ['name' => 'Accreditation', 'slug' => 'accreditation'],
            ['name' => 'Department Records', 'slug' => 'department-records'],
        ] as $category) {
            DocumentCategory::updateOrCreate(['slug' => $category['slug']], $category + ['active' => true]);
        }

        foreach ([
            ['key' => 'session_timeout_minutes', 'value' => '30', 'type' => 'integer'],
            ['key' => 'mandatory_2fa', 'value' => '1', 'type' => 'boolean'],
            ['key' => 'document_retention_days', 'value' => '3650', 'type' => 'integer'],
        ] as $setting) {
            SystemSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }

        $admin = User::where('email', 'admin@cvsu.edu.ph')->first();
        $department = Department::where('code', 'CEIT-IT')->first();
        $category = DocumentCategory::where('slug', 'board-resolutions')->first();

        foreach ([
            [
                'title' => 'Board of Regents Resolution No. 2026-094: University Cybersecurity Mandate',
                'tracking_number' => 'CVSU-BOR-2026-0094',
                'original_name' => 'BOR_Resolution_2026_094_FacultyTenure_Clearance.pdf.enc',
                'sha256' => '9e4f21bb774020a1c3d18e9065ab4011',
                'size_bytes' => 14800000,
            ],
            [
                'title' => 'University Annual Financial Ledger & Procurement Matrix FY2025',
                'tracking_number' => 'CVSU-FIN-2025-1102',
                'original_name' => 'University_Annual_Financial_Ledger_FY2025.pdf.enc',
                'sha256' => '8a1b2c3d4e5f60718293a4b5c6d7e8f9',
                'size_bytes' => 6200000,
            ],
        ] as $document) {
            Document::updateOrCreate(
                ['tracking_number' => $document['tracking_number']],
                $document + [
                    'category_id' => $category?->id,
                    'department_id' => $department?->id,
                    'uploader_id' => $admin?->id,
                    'file_path' => 'documents/demo/'.$document['tracking_number'].'.enc',
                    'mime_type' => 'application/octet-stream',
                    'access_tier' => 'tier4',
                    'status' => 'sealed',
                    'sealed_at' => now(),
                ],
            );
        }
    }
}
