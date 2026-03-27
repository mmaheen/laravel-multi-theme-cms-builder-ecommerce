@extends('backend.theme-edit.layouts.app')
@section('content')
    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-4 rounded shadow">Main Content Block 1</div>
        <div class="bg-white p-4 rounded shadow">Main Content Block 2</div>
    </div> --}}

    {{-- <nav x-data="{ open: false }" class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">

                <!-- Brand -->
                <a href="#"
                    class="text-xl font-bold text-blue-400 transform transition-transform duration-300 ease-in-out hover:scale-110">
                    MySite
                </a>

                <!-- Desktop Links -->
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="hover:text-blue-300">Home</a>
                    <a href="#" class="hover:text-blue-300">Features</a>
                    <a href="#" class="hover:text-blue-300">Pricing</a>
                    <a href="#" class="hover:text-blue-300">About</a>
                </div>

                <!-- Mobile Hamburger -->
                <div class="md:hidden">
                    <button @click="open = !open" class="p-2 rounded-md hover:bg-gray-800 focus:outline-none">
                        <!-- Hamburger / Close Icon -->
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <!-- Hamburger -->
                            <path :class="{ 'hidden': open, 'block': !open }" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <!-- Close -->
                            <path :class="{ 'block': open, 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden" x-show="open" x-transition>
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-800">Home</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-800">Features</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-800">Pricing</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-800">About</a>
            </div>
        </div>
    </nav> --}}
    <nav class="bg-gray-200">
        <div class="flex justify-between p-4">
            <a href="">Logo</a>
            <div class="flex justify-between gap-5">
                <a href="">Home</a>
                <a href="">Features</a>
                <a href="">Pricing</a>
                <a href="">About</a>
            </div>
            <button class="md:hidden bg-gray-800 text-white px-2 py-1 rounded hover:bg-gray-600">☰</button>
        </div>
    </nav>
@endsection
