    <aside
        class="fixed inset-y-0 right-0 w-64 bg-white border-l transform transition-transform duration-300 ease-in-out z-40"
        :class="rightOpen ? 'translate-x-0' : 'translate-x-full'">
        <div class="p-4 font-bold text-xl border-b flex justify-between items-center">
            Edit Component
            {{-- <button @click="rightOpen = !rightOpen" class="text-gray-500 hover:text-black">✖</button> --}}
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <!-- Accordion Item -->
            <details class="group">
                <summary
                    class="flex justify-between items-center px-3 py-2 rounded cursor-pointer hover:bg-gray-100 [&::-webkit-details-marker]:hidden">
                    <span>Header</span>
                    <span class="transition-transform duration-300 group-open:rotate-180 text-xs">
                        ▼
                    </span>
                </summary>

                <div class="ml-3 mt-1 space-y-1">
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-100">
                        Create Page
                    </a>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-100">
                        All Pages
                    </a>
                </div>
            </details>
        </nav>
    </aside>
