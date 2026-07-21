<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;

Route::get('/', function () {
    return view('home');
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
