<aside
    class="fixed inset-y-0 right-0 w-64 bg-white border-l transform transition-transform duration-300 ease-in-out z-40 flex flex-col"
    :class="rightOpen ? 'translate-x-0' : 'translate-x-full'">

    <!-- Header -->
    <div class="p-4 font-bold text-xl border-b flex justify-between items-center">
        Edit Component
    </div>

    <!-- Scrollable content -->
    <div class="flex-1 overflow-y-auto p-4 space-y-2">
        @foreach ($product->components as $productComponent)
            @php
                $fields = $config['components'][$productComponent->name] ?? [];
            @endphp

            <form action="{{ route('component.update', $productComponent->id) }}" method="POST"
                enctype="multipart/form-data" class="mb-10 border-b pb-6">
                @csrf
                @method('PUT')

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
                                    name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}">{{ $productComponent->data[$field['name']] ?? $field['value'] }}</textarea>
                            @break

                            @case('text')
                                <input
                                    class="block w-full rounded-md border-gray-300 shadow-sm
                   focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2"
                                    type="text" name="{{ $field['name'] }}"
                                    value="{{ $productComponent->data[$field['name']] ?? $field['value'] }}"
                                    placeholder="{{ $field['placeholder'] }}">
                            @break

                            @case('number')
                                <input
                                    class="block w-full rounded-md border-gray-300 shadow-sm
                   focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2"
                                    type="number" name="{{ $field['name'] }}"
                                    value="{{ $productComponent->data[$field['name']] ?? $field['value'] }}"
                                    placeholder="{{ $field['placeholder'] }}">
                            @break

                            @case('file')
                                <input type="file" name="{{ $field['name'] }}"
                                    class="block w-full text-sm text-gray-700
                   file:mr-4 file:py-2 file:px-4
                   file:rounded-md file:border-0
                   file:text-sm file:font-semibold
                   file:bg-blue-600 file:text-white
                   hover:file:bg-indigo-700 cursor-pointer">
                            @break

                            @case('checkbox')
                                <div class="space-y-2">
                                    @foreach ($field['options'] as $optionValue => $optionLabel)
                                        <label class="flex items-center space-x-2">
                                            <input type="checkbox" name="{{ $field['name'] }}[]" value="{{ $optionValue }}"
                                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                                @if (in_array($optionValue, $productComponent->data[$field['name']] ?? ($field['value'] ?? []))) checked @endif>
                                            <span class="text-sm text-gray-700">{{ $optionLabel }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            @break
                        @endswitch
                    </div>
                @endforeach

                <button type="submit"
                    class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1">
                    <i class="fas fa-save"></i> {{ ucfirst($productComponent->name) }}
                </button>
            </form>
        @endforeach
    </div>
</aside>
