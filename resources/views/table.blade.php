@extends('layouts.app')
@section('content')
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 divide-y divide-gray-200 rounded-lg shadow-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Owner</th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
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
                            <!-- View -->
                            <a href="{{ route('products.show', $product->slug) }}" class="text-gray-600 hover:text-gray-800"
                                title="View">
                                <i class="fas fa-eye"></i>
                            </a>

                            <!-- Edit -->
                            <a href="{{ route('products.edit', $product->slug) }}" class="text-blue-600 hover:text-blue-800"
                                title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>

                            <!-- Delete -->
                            <a href="#" class="text-red-600 hover:text-red-800" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
