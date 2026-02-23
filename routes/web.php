<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/featured-companies/{slung}', [App\Http\Controllers\HomeController::class, 'featuredCompanies'])->name('front.featured-companies');

// Redirect 'login' route to admin.login for Laravel's auth middleware
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    
    // Protected Admin Routes
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        
        // Portfolios Management
        Route::resource('portfolios', App\Http\Controllers\PortfolioController::class);
        
        // Clients Management
        Route::resource('clients', App\Http\Controllers\Admin\ClientController::class);
        
        // Settings Management
        Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.index');
        Route::put('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('settings.update');
    });

    // Maintenance mode: GET with ?token=MAINTENANCE_SECRET
    Route::get('/maintenance/down', [App\Http\Controllers\Admin\MaintenanceController::class, 'down'])->name('maintenance.down');
    Route::get('/maintenance/up', [App\Http\Controllers\Admin\MaintenanceController::class, 'up'])->name('maintenance.up');
});
