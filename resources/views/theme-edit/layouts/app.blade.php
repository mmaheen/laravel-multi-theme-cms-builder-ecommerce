<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en" x-data="{ leftOpen: true, rightOpen: true }">

<head>
    <meta charset="UTF-8">
    <title>Edit Theme</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100 h-screen flex">

    <!-- Left Sidebar -->
    @include('theme-edit.layouts.left-sidebar')

    <!-- Right Sidebar -->
    @include('theme-edit.layouts.right-sidebar')

    <!-- Main Content -->
    <main class="flex-1 flex flex-col transition-all duration-300 ease-in-out"
        :class="{
            'ml-64': leftOpen,
            'mr-64': rightOpen,
            'ml-0': !leftOpen,
            'mr-0': !rightOpen
        }">

        <!-- Top Navbar -->
        @include('theme-edit.layouts.navbar')

        <!-- Content Area -->
        <section class="flex-1 p-6 overflow-y-auto">
            @yield('content')
        </section>
    </main>

</body>

</html>
