<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Backend\ThemeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('products', ProductController::class);
