<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function featuredCompanies($slung)
    {
        $Portfolio = \App\Models\Portfolio::where('slung', $slung)->first();
        return view('featured', compact('Portfolio'));
    }
}
