<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RentalController;


// Public routes
Route::middleware('guest')->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login']);
});

//Protected routes

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('cars')->group(function () {
        Route::get('/', [CarController::class, 'index'])->name('cars.index');
        Route::get('/create', [CarController::class, 'create'])->name('cars.create');
        Route::post('/', [CarController::class, 'store'])->name('cars.store');
        Route::get('/{car}', [CarController::class, 'show'])->name('cars.show');
        Route::get('/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
        Route::put('/{car}', [CarController::class, 'update'])->name('cars.update');
        Route::delete('/{car}/delete', [CarController::class, 'destroy'])->name('cars.destroy');
    });

    Route::prefix('rentals')->group(function () {
        Route::get('/', [RentalController::class, 'index'])->name('rentals.index');
        Route::post('/', [RentalController::class, 'store'])->name('rentals.store');
        Route::put('/{rental}/return', [RentalController::class, 'return'])->name('rentals.return');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


});