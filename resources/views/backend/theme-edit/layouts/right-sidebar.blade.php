    <aside
        class="fixed inset-y-0 right-0 w-64 bg-white border-l transform transition-transform duration-300 ease-in-out z-40"
        :class="rightOpen ? 'translate-x-0' : 'translate-x-full'">
        <div class="p-4 font-bold text-xl border-b flex justify-between items-center">
            Right Menu
            {{-- <button @click="rightOpen = !rightOpen" class="text-gray-500 hover:text-black">✖</button> --}}
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Notifications</a>
            <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Messages</a>
            <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Profile</a>
        </nav>
    </aside>
