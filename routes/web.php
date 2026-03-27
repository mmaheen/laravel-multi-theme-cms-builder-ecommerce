<?php

use App\Http\Controllers\Backend\ThemeController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/edit/theme', [ThemeController::class, 'edit'])->name('theme.edit');






Route::get('/test', [HomeController::class, 'test'])->name('test');