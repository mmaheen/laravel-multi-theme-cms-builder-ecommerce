@props(['componentData'])
<section class="mb-5" id="features">
    <h1 class="mx-auto text-center text-3xl max-w-2/4 text-slate-700">
        {{ $componentData['title'] ?? 'Default Feature Title' }}
    </h1>
    <p class="mx-auto text-center mb-4 text-slate-500 max-w-2/4">
        {{ $componentData['description'] ?? 'Default feature description.' }}
    </p>
    <div class="flex flex-wrap justify-center gap-6">
        @foreach ($componentData['attributes'] ?? [] as $attribute)
            <div class="w-full sm:w-1/2 lg:w-1/4 text-center">
                <div
                    class="h-16.75 w-16.75 mx-auto rounded-full flex items-center justify-center text-2xl text-blue-400 shadow-2xl">
                    <i class="{{ $attribute['icon'] }}"></i>
                </div>
                <h3 class="text-xl text-slate-700">{{ $attribute['title'] ?? 'test' }}</h3>
                <p class="text-slate-500">{{ $attribute['description'] }}</p>
            </div>
        @endforeach

    </div>
</section>
