<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;

// Landing Page (Web 1)
Route::get('/', [LandingController::class, 'home'])->name('landing.home');
Route::get('/products', [LandingController::class, 'products'])->name('landing.products');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

// Admin Panel (Web 2)
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
