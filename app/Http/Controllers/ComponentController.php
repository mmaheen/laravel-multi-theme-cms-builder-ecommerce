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
        $product = Product::where("slug", $slug)->firstOrFail();

        $theme = $product->theme;
        $config = include resource_path('views/themes/' . $theme . '/config.php');

        // Get all components sorted by position
        $components = $product->components()->orderBy('position')->get();

        return view("theme-edit.index", compact("product", "components", "config", "theme"));
    }

    public function update(Request $request, Component $component)
    {
        $validated = $request->validate([
            'position' => 'nullable|integer|min:0',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'menus' => 'nullable|array',
            'attributes' => 'nullable|array',
            'delete_attribute_index' => 'nullable|integer',
        ]);

        $data = $request->except('_token', '_method');

        // Work with a local copy of data
        $componentData = $component->data ?? [];

        // Handle deletion
        if ($request->filled('delete_attribute_index')) {
            $index = $request->input('delete_attribute_index');
            $attributes = $componentData['attributes'] ?? [];

            if (isset($attributes[$index])) {
                unset($attributes[$index]);
                $componentData['attributes'] = array_values($attributes);
            }

            $component->data = $componentData;
            $component->save();

            return back()->with('success', 'Attribute deleted successfully!');
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $component->name . '_' . uniqid() . '_uploaded_at_' . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public');
            $data['image'] = $filename;
        }

        // Handle attributes append
        if ($request->has('attributes')) {
            $attributes = $componentData['attributes'] ?? [];
            if (!is_array($attributes)) {
                $attributes = [];
            }
            $attributes[] = $data['attributes'];
            $componentData['attributes'] = $attributes;
        }

        $component->position = $request->input('position');
        // Merge other fields
        $component->data = array_merge($componentData, $data);
        $component->save();

        return back()->with('success', 'Component updated successfully!');
    }

    public function destroy(Request $request, $id)
    {
        $component = Component::findOrFail($id);
        $component->delete();

        return back()->with('success', 'Component deleted successfully!');
    }
}
