@props(['componentData'])
<section class="mb-5" id="specs">
    <h1 class="text-3xl mb-4 mx-auto max-w-2/4 text-center text-slate-700">
        {{ $componentData['title'] ?? 'Specs Title' }}
    </h1>
    <p class="max-w-2/4 mb-4 mx-auto text-center text-slate-500">
        {{ $componentData['description'] ?? 'Specs Description' }}
    </p>
    <img class="mx-auto mb-4"
        src="{{ isset($componentData['image']) ? asset('storage/uploads/' . $componentData['image']) : asset('assets/images/placeholder.png') }}"
        alt="">
</section>
