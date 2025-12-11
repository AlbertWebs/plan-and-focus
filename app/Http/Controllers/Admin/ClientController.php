<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::ordered()->paginate(20);
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'logo_path' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        // Handle file upload
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = time() . '_' . Str::slug($validated['name']) . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/clients'), $filename);
            $validated['logo'] = $filename;
        } elseif ($request->filled('logo_path')) {
            $validated['logo'] = $request->logo_path;
        } else {
            return back()->withErrors(['logo' => 'Please upload a logo or provide a logo path.'])->withInput();
        }

        unset($validated['logo_path']);

        Client::create($validated);

        return redirect()->route('admin.clients.index')
            ->with('success', 'Client created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'logo_path' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        // Handle file upload
        $logoType = $request->input('logo_type', 'keep');
        
        if ($logoType === 'upload' && $request->hasFile('logo')) {
            // Delete old logo if exists
            if ($client->logo && file_exists(public_path('uploads/clients/' . $client->logo))) {
                @unlink(public_path('uploads/clients/' . $client->logo));
            }
            
            $logo = $request->file('logo');
            $filename = time() . '_' . Str::slug($validated['name']) . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/clients'), $filename);
            $validated['logo'] = $filename;
        } elseif ($logoType === 'path' && $request->filled('logo_path')) {
            $validated['logo'] = $request->logo_path;
        } else {
            // Keep existing logo
            $validated['logo'] = $client->logo;
        }

        unset($validated['logo_path']);

        $client->update($validated);

        return redirect()->route('admin.clients.index')
            ->with('success', 'Client updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('admin.clients.index')
            ->with('success', 'Client deleted successfully!');
    }
}
