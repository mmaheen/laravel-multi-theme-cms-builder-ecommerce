<aside class="fixed inset-y-0 left-0 w-64 bg-white border-r transform transition-transform duration-300 ease-in-out z-40"
    :class="leftOpen ? 'translate-x-0' : '-translate-x-full'">

    <!-- Header -->
    <div class="p-4 font-bold text-xl border-b">
        Add Component
    </div>

    <!-- Nav -->
    <nav class="p-4 space-y-2 text-sm">

        @foreach ($config['components'] as $key => $component)
            <a href="{{ route('component.create', [$product->slug, $key]) }}"
                class="block bg-gray-100 px-3 py-2 rounded font-semibold hover:bg-gray-200">
                {{ ucfirst($key) }}
            </a>
        @endforeach
    </nav>
</aside>
