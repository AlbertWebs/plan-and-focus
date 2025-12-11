<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_path' => 'nullable|string|max:255',
        ]);

        $validated['slung'] = Str::slug($validated['title']);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . Str::slug($validated['title']) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $filename);
            $validated['image'] = $filename;
        } elseif ($request->filled('image_path')) {
            $validated['image'] = $request->image_path;
        } else {
            $validated['image'] = null;
        }
        
        // Remove image_path from validated data
        unset($validated['image_path']);

        unset($validated['image_path']);
        
        Portfolio::create($validated);

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_path' => 'nullable|string|max:255',
        ]);

        $validated['slung'] = Str::slug($validated['title']);

        // Handle file upload
        $imageType = $request->input('image_type', 'keep');
        
        if ($imageType === 'upload' && $request->hasFile('image')) {
            // Delete old image if exists
            if ($portfolio->image && file_exists(public_path('uploads/' . $portfolio->image))) {
                @unlink(public_path('uploads/' . $portfolio->image));
            }
            
            $image = $request->file('image');
            $filename = time() . '_' . Str::slug($validated['title']) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $filename);
            $validated['image'] = $filename;
        } elseif ($imageType === 'path' && $request->filled('image_path')) {
            $validated['image'] = $request->image_path;
        } else {
            // Keep existing image
            $validated['image'] = $portfolio->image;
        }

        unset($validated['image_path']);
        
        $portfolio->update($validated);

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio deleted successfully!');
    }
}
