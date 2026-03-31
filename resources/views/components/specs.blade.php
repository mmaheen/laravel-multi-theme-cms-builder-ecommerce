<section class="mb-5" id="specs">
    <h1 class="text-3xl mx-auto max-w-2/4 text-center text-slate-700">
        {{ $specs->data['title'] ?? 'Specs Title' }}
    </h1>
    <p class="max-w-2/4 mx-auto text-center text-slate-500">
        {{ $specs->data['description'] ?? 'Specs Description' }}
    </p>
    <img src="{{ isset($specs->data['image']) ? asset('storage/uploads/' . $specs->data['image']) : asset('assets/images/placeholder.png') }}"
        alt="">
</section>
