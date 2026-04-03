@extends('layouts.app')
@section('content')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Welcome to Your Dashboard</h1>

            <nav class="space-y-4">
                <a href="{{ route('products.index') }}"
                    class="block w-full py-3 px-4 rounded-md bg-blue-600 text-white font-medium hover:bg-blue-700 transition">
                    Products
                </a>
                <a href="{{ route('create.registration.token') }}"
                    class="block w-full py-3 px-4 rounded-md bg-green-600 text-white font-medium hover:bg-green-700 transition">
                    Create Registration Token
                </a>
            </nav>
        </div>
    </div>
@endsection
