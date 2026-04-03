<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);


Route::middleware('guest')->group(function () {
    Route::get('/{token}/register', [AuthController::class, 'showRegistrationForm'])->name('registration.form');
    Route::post('/{token}/register', [AuthController::class, 'register'])->name('register');

    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/create/registration/token', [AuthController::class, 'createToken'])->name('create.registration.token');
});


// Component routes
Route::get('/product/component/create/{product}/{component}', [ComponentController::class, 'create'])->name('component.create');
Route::get('/product/components/edit/{product}', [ComponentController::class, 'edit'])->name('components.edit');
Route::put('/product/component/edit/{component}', [ComponentController::class, 'update'])->name('component.update');
Route::delete('/product/component/delete/{component}', [ComponentController::class, 'destroy'])->name('component.destroy');
// Component routes