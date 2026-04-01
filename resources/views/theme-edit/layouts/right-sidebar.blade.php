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

            <div x-data="{ open: false }" class="rounded-md mb-4 overflow-hidden">
                <!-- Accordion Header -->
                <button type="button" @click="open = !open"
                    class="w-full flex justify-between items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-left">
                    <span class="font-semibold capitalize">{{ $productComponent->name }} Settings</span>
                    <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Accordion Content -->
                <div x-show="open" x-collapse class="p-4">
                    <form action="{{ route('component.update', $productComponent->id) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        @foreach ($fields as $fieldName => $field)
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ $field['label'] }}
                                </label>

                                @switch($fieldName)
                                    @case('description')
                                        <textarea
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2"
                                            name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}">{{ $productComponent->data[$field['name']] ?? $field['value'] }}</textarea>
                                    @break

                                    @case('title')
                                        <input
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2"
                                            type="text" name="{{ $field['name'] }}"
                                            value="{{ $productComponent->data[$field['name']] ?? $field['value'] }}"
                                            placeholder="{{ $field['placeholder'] }}">
                                    @break

                                    @case('price')
                                        <input
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2"
                                            type="number" name="{{ $field['name'] }}"
                                            value="{{ $productComponent->data[$field['name']] ?? $field['value'] }}"
                                            placeholder="{{ $field['placeholder'] }}">
                                    @break

                                    @case('image')
                                        <input type="file" name="{{ $field['name'] }}"
                                            class="block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-indigo-700 cursor-pointer">
                                    @break

                                    @case('menus')
                                        <div class="space-y-2">
                                            @foreach ($field['options'] as $optionValue => $optionLabel)
                                                <label class="flex items-center space-x-2">
                                                    <input type="checkbox" name="{{ $field['name'] }}[]"
                                                        value="{{ $optionValue }}"
                                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                                        @if (in_array($optionValue, $productComponent->data[$field['name']] ?? ($field['value'] ?? []))) checked @endif>
                                                    <span class="text-sm text-gray-700">{{ $optionLabel }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    @break

                                    @case('attributes')
                                        <!-- Show list of attribute titles -->
                                        <ul class="mb-4 list-disc list-inside text-gray-700">
                                            @foreach ($productComponent->data['attributes'] ?? [] as $index => $attribute)
                                                <li class="flex justify-between items-center">
                                                    <span>{{ $attribute['title'] }}</span>
                                                    <form action="{{ route('component.update', $productComponent->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="delete_attribute_index"
                                                            value="{{ $index }}">
                                                        <button type="submit"
                                                            class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                                                    </form>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <div class="space-y-4 border-t pt-4 mt-4">
                                            <h4 class="font-semibold text-gray-800">{{ $field['label'] ?? 'Attributes' }}</h4>

                                            {{-- Attribute title --}}
                                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                                {{ $field['title']['label'] }}
                                            </label>
                                            <input type="text" name="attributes[title]"
                                                value="{{ $productComponent->data['attributes']['title'] ?? $field['title']['value'] }}"
                                                placeholder="{{ $field['title']['placeholder'] }}"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2">

                                            {{-- Attribute description --}}
                                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                                {{ $field['description']['label'] }}
                                            </label>
                                            <textarea name="attributes[description]" placeholder="{{ $field['description']['placeholder'] }}"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2">{{ $productComponent->data['attributes']['description'] ?? $field['description']['value'] }}</textarea>

                                            {{-- Attribute icon select --}}
                                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                                {{ $field['icon']['label'] }}
                                            </label>
                                            <select name="attributes[icon]"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2">
                                                @foreach ($field['icon']['options'] as $option)
                                                    <option value="{{ $option }}"
                                                        @if (($productComponent->data['attributes']['icon'] ?? '') == $option) selected @endif>
                                                        {{ $option }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @break
                                @endswitch
                            </div>
                        @endforeach

                        <button type="submit"
                            class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1">
                            <i class="fas fa-save"></i> Save {{ ucfirst($productComponent->name) }}
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</aside>
