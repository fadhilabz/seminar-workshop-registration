<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;

// Public routes
Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/acara', fn() => view('events.index'))->name('events.index');
Route::get('/acara/{id}', fn() => view('events.show'))->name('events.show');
Route::get('/tentang', fn() => view('about'))->name('about');

// Auth routes
require __DIR__.'/auth.php';

// User routes (after login)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
});

// Admin routes (admin only)
Route::middleware(['auth', 'verified', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
        Route::get('/role', [RoleController::class, 'index'])->name('role.index');
        Route::patch('/role/{user}', [RoleController::class, 'update'])->name('role.update');
    });
