<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::grouped();
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update settings
     */
    public function update(Request $request)
    {
        // Handle quick add new setting
        if ($request->has('new_key') && $request->has('new_value')) {
            $request->validate([
                'new_key' => 'required|string|max:255',
                'new_value' => 'required|string',
                'new_type' => 'nullable|string|in:text,email,url,phone,textarea',
                'new_group' => 'nullable|string',
                'new_description' => 'nullable|string',
            ]);

            Setting::set(
                $request->new_key,
                $request->new_value,
                $request->new_type ?? 'text',
                $request->new_group ?? 'general',
                $request->new_description
            );

            return redirect()->route('admin.settings.index')
                ->with('success', 'Setting added successfully!');
        }

        // Handle updating existing settings
        $validated = $request->validate([
            'settings' => 'required|array',
            'settings.*' => 'nullable|string',
        ]);

        foreach ($validated['settings'] as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting) {
                $setting->update(['value' => $value]);
            }
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Settings updated successfully!');
    }
}
