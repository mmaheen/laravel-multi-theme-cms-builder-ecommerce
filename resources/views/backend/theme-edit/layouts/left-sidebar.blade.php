 <aside
     class="fixed inset-y-0 left-0 w-64 bg-white border-r transform transition-transform duration-300 ease-in-out z-40"
     :class="leftOpen ? 'translate-x-0' : '-translate-x-full'">
     <div class="p-4 font-bold text-xl border-b flex justify-between items-center">
         Left Menu
         {{-- <button @click="leftOpen = !leftOpen" class="text-gray-500 hover:text-black">✖</button> --}}
     </div>
     <nav class="flex-1 p-4 space-y-2">
         <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Dashboard</a>
         <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Users</a>
         <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Settings</a>
     </nav>
 </aside>
