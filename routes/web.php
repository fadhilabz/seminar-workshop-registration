<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Admin routes (admin only)
Route::middleware(['auth', 'verified', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
        Route::get('/role', [RoleController::class, 'index'])->name('role.index');
        Route::patch('/role/{user}', [RoleController::class, 'update'])->name('role.update');
    });

Route::get('/events', fn() => view('events.index'))->name('events.index');
Route::get('/events/{id}', fn($id) => view('events.show', ['id' => $id]))->name('events.show');
Route::get('/about', fn() => view('about'))->name('about');

Route::fallback(fn() => response()->view('errors.404', [], 404));

require __DIR__.'/auth.php';
