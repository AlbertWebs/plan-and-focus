<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Contact Settings
            ['key' => 'contact_email', 'value' => 'info@example.com', 'type' => 'email', 'group' => 'contact', 'description' => 'Main contact email address'],
            ['key' => 'contact_phone', 'value' => '+1234567890', 'type' => 'phone', 'group' => 'contact', 'description' => 'Main contact phone number'],
            ['key' => 'contact_mobile', 'value' => '+1234567890', 'type' => 'phone', 'group' => 'contact', 'description' => 'Mobile phone number'],
            ['key' => 'contact_address', 'value' => '123 Main Street, City, Country', 'type' => 'text', 'group' => 'contact', 'description' => 'Physical address'],
            
            // Social Media
            ['key' => 'social_facebook', 'value' => '', 'type' => 'url', 'group' => 'social', 'description' => 'Facebook page URL'],
            ['key' => 'social_twitter', 'value' => '', 'type' => 'url', 'group' => 'social', 'description' => 'Twitter profile URL'],
            ['key' => 'social_linkedin', 'value' => '', 'type' => 'url', 'group' => 'social', 'description' => 'LinkedIn profile URL'],
            ['key' => 'social_instagram', 'value' => '', 'type' => 'url', 'group' => 'social', 'description' => 'Instagram profile URL'],
            
            // General Settings
            ['key' => 'site_name', 'value' => 'Plan and Focus', 'type' => 'text', 'group' => 'general', 'description' => 'Website name'],
            ['key' => 'site_tagline', 'value' => '', 'type' => 'text', 'group' => 'general', 'description' => 'Website tagline'],
            ['key' => 'site_description', 'value' => '', 'type' => 'textarea', 'group' => 'general', 'description' => 'Website description'],
        ];

        foreach ($settings as $setting) {
            Setting::set(
                $setting['key'],
                $setting['value'],
                $setting['type'],
                $setting['group'],
                $setting['description']
            );
        }
    }
}
