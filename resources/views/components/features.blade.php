<section class="mb-5" id="features">
    <h1 class="mx-auto text-center text-3xl max-w-2/4 text-slate-700">
        {{ $features->data['title'] ?? 'Default Feature Title' }}
    </h1>
    <p class="mx-auto text-center mb-4 text-slate-500 max-w-2/4">
        {{ $features->data['description'] ?? 'Default feature description.' }}
    </p>
    <div class="flex flex-wrap justify-center gap-6">
        <div class="w-full sm:w-1/2 lg:w-1/4 text-center">
            <div
                class="h-[67px] w-[67px] mx-auto rounded-full flex items-center justify-center text-2xl text-blue-400 shadow-2xl">
                <i class="fa-regular fa-camera"></i>
            </div>
            <h3 class="text-xl text-slate-700">Lorem ipsum dolor sit.</h3>
            <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
        </div>
    </div>
</section>
