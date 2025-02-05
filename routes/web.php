<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RentalController;
use App\Http\Middleware\CheckUserRole;
use Illuminate\Support\Facades\Session;

Route::get('/check-csrf', function () {
    return response()->json([
        'csrf_token' => csrf_token(),
        'session_token' => Session::token(),
    ]);
});

// Public routes
Route::middleware('guest')->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register', [AuthController::class, 'register'])->name('register-submit');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/', function () {
        return view('guest.index');
    })->name('guest.index');
});


//Protected routes
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('user.dashboard');
    Route::get('/dashboardadmin', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    Route::prefix('cars')->group(function () {
        Route::get('/', [CarController::class, 'index'])->name('cars.index');
        Route::get('/create', [CarController::class, 'create'])->name('cars.create')->middleware(CheckUserRole::class . ':admin');
        Route::post('/', [CarController::class, 'store'])->name('cars.store');
        Route::get('/{car}', [CarController::class, 'show'])->name('cars.show');
        Route::get('/{car}/edit', [CarController::class, 'edit'])->name('cars.edit')->middleware(CheckUserRole::class . ':admin');
        ;
        Route::put('/{car}', [CarController::class, 'update'])->name('cars.update');
        Route::delete('/{car}/delete', [CarController::class, 'destroy'])->name('cars.destroy')->middleware(CheckUserRole::class . ':admin');
        ;
    });

    Route::prefix('rentals')->group(function () {
        Route::get('/', [RentalController::class, 'index'])->name('rentals.index');
        Route::post('/', [RentalController::class, 'store'])->name('rentals.store');
        Route::put('/{rental}/return', [RentalController::class, 'return'])->name('rentals.return');
    });


    Route::get('/rentalsall', [AdminController::class, 'indexRent'])->name('admin.indexrent')->middleware(CheckUserRole::class . ':admin');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});