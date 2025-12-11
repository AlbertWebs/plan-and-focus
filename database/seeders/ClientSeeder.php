<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientsPath = public_path('uploads/clients');
        
        if (!File::exists($clientsPath)) {
            $this->command->warn("Clients directory does not exist: {$clientsPath}");
            return;
        }

        // Known client name mappings for better naming
        $knownNames = [
            'schneider-electric-logo' => 'Schneider Electric',
            'schneider-electric' => 'Schneider Electric',
            'pbc-logo' => 'PBC',
            'pbc' => 'PBC',
            'diamond-trust-bank-dtb-logo' => 'Diamond Trust Bank',
            'diamond-trust-bank' => 'Diamond Trust Bank',
            'dtb' => 'Diamond Trust Bank',
            'asahi-development-transparent' => 'Asahi Development',
            'asahi-development' => 'Asahi Development',
            'asahi-development-transparent' => 'Asahi Development',
            'logo' => 'Client',
        ];

        // Get all image files from the directory
        $files = File::files($clientsPath);
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
        
        $order = 1;
        foreach ($files as $file) {
            $filename = $file->getFilename();
            $extension = strtolower($file->getExtension());
            
            // Skip if not an image file
            if (!in_array($extension, $imageExtensions)) {
                continue;
            }

            // Generate client name from filename
            $nameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
            // Normalize the name key (remove spaces, convert to lowercase, replace underscores/hyphens)
            $nameKey = strtolower(preg_replace('/[^a-z0-9]+/', '-', trim($nameWithoutExt)));
            $nameKey = trim($nameKey, '-');
            
            // Check for exact match first, then try partial matches
            $clientName = null;
            if (isset($knownNames[$nameKey])) {
                $clientName = $knownNames[$nameKey];
            } else {
                // Try partial matches (e.g., "pbc-logo" should match "pbc")
                foreach ($knownNames as $key => $name) {
                    if (strpos($nameKey, $key) === 0 || strpos($nameKey, $key) !== false) {
                        $clientName = $name;
                        break;
                    }
                }
            }
            
            // If no known name found, generate from filename
            if (!$clientName) {
                // Convert filename to readable name
                $clientName = str_replace(['-', '_'], ' ', $nameWithoutExt);
                // Remove common suffixes
                $clientName = preg_replace('/\s+(logo|transparent|png|jpg|jpeg|svg)$/i', '', $clientName);
                $clientName = trim($clientName);
                
                // Clean up multiple spaces and trailing dashes/spaces
                $clientName = preg_replace('/\s+/', ' ', $clientName);
                $clientName = trim($clientName, '- ');
                
                // Capitalize properly
                $clientName = ucwords(strtolower($clientName));
                
                // If name is empty or just numbers, use generic name
                if (empty($clientName) || is_numeric($clientName)) {
                    $clientName = "Client {$nameWithoutExt}";
                }
            }

            // Check if client already exists
            $existingClient = Client::where('logo', $filename)->first();
            
            if (!$existingClient) {
                Client::create([
                    'name' => $clientName,
                    'logo' => $filename,
                    'url' => null,
                    'order' => $order++,
                    'is_active' => true,
                ]);
                
                $this->command->info("Created client: {$clientName} ({$filename})");
            } else {
                $this->command->line("Client already exists: {$clientName} ({$filename})");
            }
        }

        $this->command->info("Client seeding completed!");
    }
}
