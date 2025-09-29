<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/featured-companies/{slung}', [App\Http\Controllers\HomeController::class, 'featuredCompanies'])->name('front.featured-companies');
