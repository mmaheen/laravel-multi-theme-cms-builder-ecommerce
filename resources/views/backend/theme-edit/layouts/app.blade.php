<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en" x-data="{ leftOpen: true, rightOpen: true }">

<head>
    <meta charset="UTF-8">
    <title>Edit Theme</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100 h-screen flex">

    <!-- Left Sidebar -->
    @include('backend.theme-edit.layouts.left-sidebar')

    <!-- Right Sidebar -->
    @include('backend.theme-edit.layouts.right-sidebar')

    <!-- Main Content -->
    <main class="flex-1 flex flex-col transition-all duration-300 ease-in-out"
        :class="{
            'ml-64': leftOpen,
            'mr-64': rightOpen,
            'ml-0': !leftOpen,
            'mr-0': !rightOpen
        }">

        <!-- Top Navbar -->
        @include('backend.theme-edit.layouts.navbar')

        <!-- Content Area -->
        <section class="flex-1 p-6 overflow-y-auto">
            @yield('content')
        </section>
    </main>

</body>

</html>
