<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('products', ProductController::class);

Route::get('/product/component/create/{product}/{component}', [ComponentController::class, 'create'])->name('component.create');
Route::get('/product/components/edit/{product}', [ComponentController::class, 'edit'])->name('components.edit');
Route::put('/product/component/edit/{component}', [ComponentController::class, 'update'])->name('component.update');