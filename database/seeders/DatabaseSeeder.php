<?php

namespace Database\Seeders;

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
                ],
            );
        }
    }
}
