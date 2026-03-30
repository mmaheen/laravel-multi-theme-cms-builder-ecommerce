<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Product;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    //
    public function create(string $slug, string $component)
    {
        // return $component;
        $product = Product::where("slug", $slug)->first();
        $next_position = Component::where("product_id", $product->id)->max("position") + 1;
        // return $next_position;
        $component = Component::create([
            "name" => $component,
            "position" => $next_position,
            "product_id" => $product->id,
            "data" => []
        ]);
        return back();
    }
    public function edit(string $slug)
    {
        $product = Product::where("slug", $slug)->first();

        $theme = 'default';
        $config = include resource_path('views/themes/' . $theme . '/config.php');
        // dd($product->components);
        return view("theme-edit.index", compact("product", "config"));
    }
}
