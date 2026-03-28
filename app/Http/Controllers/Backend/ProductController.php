<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        ]);

        $name = $request->input('name');
        Product::create([
            'name' => $name,
            'slug' => Str::slug($name, '-', uniqid()),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'user_id' => 1,
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
        return view("themes.default.index", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        //
        $product = Product::where("slug", $slug)->first();


        $theme = 'default';
        $config = include resource_path('views/themes/' . $theme . '/config.php');
        return view("theme-edit.index", compact("product", "config"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the product by ID (or slug if you’re using slugs)
        $product = Product::findOrFail($id);

        // Delete the product
        $product->delete();

        // Redirect back with a success message
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
