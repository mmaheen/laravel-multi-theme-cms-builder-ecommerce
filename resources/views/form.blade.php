@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen w-full">
        <div class="w-full max-w-lg bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">{{ isset($product) ? 'Edit Product' : 'Create Product' }}</h1>

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-md">
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ isset($product) ? route('products.update', $product->slug) : route('products.store') }}"
                method="POST" class="space-y-4">
                @csrf
                @method(isset($product) ? 'PUT' : 'POST')

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name"
                        value="{{ isset($product) ? $product->name : old('name') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('name') @enderror"
                        required>
                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Price -->
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" name="price" id="price" step="0.01"
                        value="{{ isset($product) ? $product->price : old('price', '0.00') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('price') @enderror"
                        required>
                    @error('price')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Stock -->
                <div>
                    <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                    <input type="number" name="stock" id="stock"
                        value="{{ isset($product) ? $product->stock : old('stock', '0') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('stock') @enderror"
                        required>
                    @error('stock')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="theme" class="block text-sm font-medium text-gray-700">Theme</label>
                    <select name="theme" id="theme"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('theme') @enderror"
                        required>
                        <option value="default" {{ isset($product) && $product->theme === 'default' ? 'selected' : '' }}>
                            Default</option>
                        <option value="dark" {{ isset($product) && $product->theme === 'dark' ? 'selected' : '' }}>Dark
                        </option>
                        <option value="modern" {{ isset($product) && $product->theme === 'modern' ? 'selected' : '' }}>
                            Modern</option>
                        <option value="nova" {{ isset($product) && $product->theme === 'nova' ? 'selected' : '' }}>Nova
                        </option>
                    </select>
                    @error('theme')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 transition">
                        <i class="fas fa-save mr-2"></i> {{ isset($product) ? 'Update Product' : 'Create Product' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
