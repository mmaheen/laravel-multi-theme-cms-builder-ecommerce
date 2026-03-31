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

        $navbar = $product->components()->where('name', 'navbar')->first();
        $hero = $product->components()->where('name', 'hero')->first();
        $context = compact('product', 'config', 'navbar', 'hero');
        // return $hero;
        return view("theme-edit.index", $context);
    }

    public function update(Request $request, Component $component)
    {
        // Grab all submitted fields except tokens
        $data = $request->except('_token', '_method');

        // Handle file upload if present
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Generate a unique filename
            $filename = $component->name . '_' . uniqid() . '_uploaded_at_' . time() . '_' . $file->getClientOriginalName();

            // Store the file in storage/app/public/uploads
            $file->storeAs('uploads', $filename, 'public');

            // Add the filename to the data array
            $data['image'] = $filename;
        }

        // Merge with existing data so you don’t lose other keys
        $component->data = array_merge($component->data ?? [], $data);

        $component->save();

        return back()->with('success', 'Component updated successfully!');
    }
}
