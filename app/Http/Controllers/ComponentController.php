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
        $product = Product::where("slug", $slug)->first();
        $next_position = Component::where("product_id", $product->id)->max("position") + 1;

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
        $features = $product->components()->where('name', 'features')->first();
        $overview = $product->components()->where('name', 'overview')->first();
        $specs = $product->components()->where('name', 'specs')->first();
        $context = compact('product', 'config', 'navbar', 'hero', 'features', 'overview', 'specs');

        return view("theme-edit.index", $context);
    }

    public function update(Request $request, Component $component)
    {
        // return $request->all();
        $data = $request->except('_token', '_method');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $component->name . '_' . uniqid() . '_uploaded_at_' . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public');
            $data['image'] = $filename;
        }

        $component->data = array_merge($component->data ?? [], $data);
        $component->save();

        return back()->with('success', 'Component updated successfully!');
    }
}
