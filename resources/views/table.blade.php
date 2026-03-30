@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen w-full">
        <div class="w-full max-w-5xl px-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Products</h1>
                <a href="{{ route('products.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 transition">
                    <i class="fas fa-plus mr-2"></i> Create Product
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 divide-y divide-gray-200 rounded-lg shadow-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Owner</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $product->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $product->name }}</td>
                                <td class="px-6 py-4 text-sm">
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $product->user->name }}</td>
                                <td class="px-6 py-4 text-sm flex space-x-4">
                                    <a href="{{ route('products.show', $product->slug) }}"
                                        class="text-gray-600 hover:text-gray-800" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('products.edit', $product->slug) }}"
                                        class="text-blue-600 hover:text-blue-800" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('components.edit', $product->slug) }}"
                                        class="text-gray-600 hover:text-gray-800" title="Edit Page">
                                        <i class="fas fa-file-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
