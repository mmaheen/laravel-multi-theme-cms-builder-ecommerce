<?php

use App\Http\Controllers\Backend\ThemeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/edit/theme', [ThemeController::class, 'edit'])->name('theme.edit');