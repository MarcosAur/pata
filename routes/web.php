<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('pacientes')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('index.customers');
        Route::get('/cadastrar', [CustomerController::class, 'create'])->name('create.customers');
        Route::post('/', [CustomerController::class, 'store'])->name('store.customers');
    });

    Route::prefix('appointment')->group(function () {
        Route::get('/', [AppointmentController::class, 'index'])->name('index.appointments');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
