<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Setting;
use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $portfoliosCount = Portfolio::count();
        $settingsCount = Setting::count();
        $clientsCount = Client::count();
        
        return view('admin.dashboard', compact('portfoliosCount', 'settingsCount', 'clientsCount'));
    }
}
