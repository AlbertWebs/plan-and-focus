<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            ['name' => 'Client 1', 'logo' => '1.jpg', 'order' => 1],
            ['name' => 'Client 2', 'logo' => '2.jpg', 'order' => 2],
            ['name' => 'Client 3', 'logo' => '3.jpg', 'order' => 3],
            ['name' => 'Client 4', 'logo' => '4.jpg', 'order' => 4],
            ['name' => 'Client 5', 'logo' => '5.jpg', 'order' => 5],
            ['name' => 'Client 6', 'logo' => '6.jpg', 'order' => 6],
            ['name' => 'Client 7', 'logo' => '7.jpg', 'order' => 7],
            ['name' => 'Client 8', 'logo' => '8.jpg', 'order' => 8],
            ['name' => 'Client 9', 'logo' => '9.jpg', 'order' => 9],
            ['name' => 'Schneider Electric', 'logo' => 'Schneider-Electric-Logo.png', 'order' => 10],
            ['name' => 'Client 11', 'logo' => '11.jpg', 'order' => 11],
            ['name' => 'PBC', 'logo' => 'PBC-logo.png', 'order' => 12],
            ['name' => 'Diamond Trust Bank', 'logo' => 'diamond-trust-bank-dtb-logo.png', 'order' => 13],
        ];

        foreach ($clients as $client) {
            Client::create([
                'name' => $client['name'],
                'logo' => $client['logo'],
                'url' => null,
                'order' => $client['order'],
                'is_active' => true,
            ]);
        }
    }
}
