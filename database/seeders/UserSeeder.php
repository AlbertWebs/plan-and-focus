<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::updateOrCreate(
            ['email' => 'admin@planandfocus.com'],
            [
                'name' => 'Admin User',
                'email' => 'admin@planandfocus.com',
                'password' => Hash::make('Admin@PlanAndFocus2024!'),
                'email_verified_at' => now(),
            ]
        );
    }
}
