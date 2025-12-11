<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed admin user
        $this->call([
            UserSeeder::class,
        ]);

        // Seed default settings
        $this->call([
            SettingsSeeder::class,
        ]);

        // Seed clients (optional - uncomment if needed)
        // $this->call([
        //     ClientSeeder::class,
        // ]);
    }
}
