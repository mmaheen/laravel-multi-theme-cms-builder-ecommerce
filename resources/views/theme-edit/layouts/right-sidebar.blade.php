    <aside
        class="fixed inset-y-0 right-0 w-64 bg-white border-l transform transition-transform duration-300 ease-in-out z-40"
        :class="rightOpen ? 'translate-x-0' : 'translate-x-full'">
        <div class="p-4 font-bold text-xl border-b flex justify-between items-center">
            Right Menu
            {{-- <button @click="rightOpen = !rightOpen" class="text-gray-500 hover:text-black">✖</button> --}}
        </div>
        <nav class="flex-1 p-4 space-y-2">
            {{-- <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Notifications</a>
            <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Messages</a>
            <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Profile</a> --}}
            <form action="">
                @csrf
                @foreach ($config['components'] as $componentKey => $component)
                    <details class="group">
                        <summary
                            class="flex justify-between items-center px-3 py-2 rounded cursor-pointer hover:bg-gray-100 [&::-webkit-details-marker]:hidden">
                            <span>{{ ucfirst($componentKey) }}</span>
                            <span class="transition-transform duration-300 group-open:rotate-180 text-xs">
                                ▼
                            </span>
                        </summary>

                        <div class="ml-3 mt-1 space-y-1">
                            @foreach ($component['fields'] as $fieldKey => $field)
                                @if ($field['type'] == 'text')
                                    <label class="block text-sm font-medium text-gray-700 mb-1"
                                        for="">{{ $field['label'] }}</label>
                                    <input
                                        class="block w-full rounded-md border-gray-300 shadow-sm
                                               focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm
                                               px-3 py-2"
                                        type="text" value="{{ $field['value'] }}">
                                @endif
                            @endforeach

                        </div>
                    </details>
                @endforeach
                <button type="submit"
                    class="mt-4 w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md shadow
                       hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1">
                    Change
                </button>

            </form>
        </nav>
    </aside>
