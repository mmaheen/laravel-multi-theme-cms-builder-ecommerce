<aside
    class="fixed inset-y-0 right-0 w-64 bg-white border-l transform transition-transform duration-300 ease-in-out z-40 flex flex-col"
    :class="rightOpen ? 'translate-x-0' : 'translate-x-full'">

    <!-- Header -->
    <div class="p-4 font-bold text-xl border-b flex justify-between items-center">
        Right Menu
    </div>

    <!-- Scrollable content -->
    <div class="flex-1 overflow-y-auto p-4 space-y-2">
        @csrf
        @foreach ($product->components as $productComponent)
            @php
                $fields = $config['components'][$productComponent->name] ?? [];
            @endphp

            <div class="mb-10 border-b pb-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4 capitalize">
                    {{ $productComponent->name }} Settings
                </h2>

                @foreach ($fields as $fieldName => $field)
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            {{ $field['label'] }}
                        </label>

                        @switch($field['type'])
                            @case('textarea')
                                <textarea
                                    class="block w-full rounded-md border-gray-300 shadow-sm
                                                 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2"
                                    name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}">{{ $field['value'] }}</textarea>
                            @break

                            @case('text')
                                <input
                                    class="block w-full rounded-md border-gray-300 shadow-sm
                                             focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2"
                                    type="text" name="{{ $field['name'] }}" value="{{ $field['value'] }}"
                                    placeholder="{{ $field['placeholder'] }}">
                            @break

                            @case('number')
                                <input
                                    class="block w-full rounded-md border-gray-300 shadow-sm
                                             focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2"
                                    type="number" name="{{ $field['name'] }}" value="{{ $field['value'] }}"
                                    placeholder="{{ $field['placeholder'] }}">
                            @break
                        @endswitch
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <!-- Fixed footer -->
    <div class="border-t p-4 bg-white">
        <button type="submit"
            class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md shadow
                   hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1">
            Change
        </button>
    </div>
</aside>
