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
        Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/role', [RoleController::class, 'index'])->name('role.index');
        Route::patch('/role/{user}', [RoleController::class, 'update'])->name('role.update');
        
        // Resource Routes
        Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
        Route::resource('certificates', \App\Http\Controllers\Admin\CertificateController::class);
        Route::resource('payments', \App\Http\Controllers\Admin\PaymentController::class);
        Route::get('/laporan', fn() => view('admin.laporan'))->name('laporan');
    });

// User routes
Route::middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    });

use App\Http\Controllers\EventController;

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('/about', fn() => view('about'))->name('about');

Route::fallback(fn() => response()->view('errors.404', [], 404));

require __DIR__.'/auth.php';
