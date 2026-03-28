<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //
    public function edit()
    {
        $theme = 'default';
        $config = include resource_path('views/themes/' . $theme . '/config.php');
        // return $config['components'];
        return view('theme-edit.index', compact('config'));
    }
}
