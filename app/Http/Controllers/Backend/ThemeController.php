<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //
    public function edit()
    {
        return view('theme-edit.index');
    }
}
