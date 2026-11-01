<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Halaman awal
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Halaman yang hanya bisa dibuka setelah login
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // CRUD Data Siswa
    Route::resource('siswa', SiswaController::class);

    // Profile bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
