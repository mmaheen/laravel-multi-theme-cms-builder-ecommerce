<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view("table", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            // 'slug' => 'required|string|max:255|unique:products,slug',
            // 'user_id' => 'required|exists:users,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'theme' => 'required|in:default,dark,modern,nova',
        ]);

        $name = $request->input('name');
        Product::create([
            'name' => $name,
            'slug' => Str::slug($name, '-', uniqid()),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'user_id' => auth()->user()->id,
            'theme' => $request->input('theme'),
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //
        $product = Product::where("slug", $slug)->first();
        $theme = $product->theme;
        $components = $product->components()->orderBy('position')->get();
        return view("themes." . $theme . ".index", compact("product", "components", "theme"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        //
        $product = Product::where("slug", $slug)->first();

        return view("form", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        //
        $product = Product::where("slug", $slug)->first();
        $product->update($request->only(['name', 'price', 'stock']));
        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
