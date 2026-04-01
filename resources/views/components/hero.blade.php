@props(['componentData'])
<section class="mb-5" id="hero">
    <div class="grid grid-cols-1 md:grid-cols-10 gap-2">
        <div class="md:col-span-4 flex flex-col justify-center">
            <h1 class="text-4xl font-bold mb-4 text-slate-700">
                {{ $componentData['title'] ?? 'Default Hero Title' }}
            </h1>
            <p class="text-justify mb-4 text-slate-500">
                {{ $componentData['description'] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' }}
            </p>
            <p class="mb-4 text-slate-500 text-xl font-bold">
                Price: <span
                    class="bg-gray-200 px-4 py-2 text-blue-500 rounded self-start">{{ $componentData['price'] ?? '0' }}$</span>
            </p>
            <button class="bg-blue-500 px-4 py-2 text-white rounded-full self-start">Buy now</button>
        </div>
        <div class="md:col-span-6 my-7">
            <img src="{{ isset($componentData['image']) ? asset('storage/uploads/' . $componentData['image']) : asset('assets/images/placeholder.png') }}"
                alt="Hero Image" class="w-full h-auto rounded-lg">
        </div>
    </div>
</section>
