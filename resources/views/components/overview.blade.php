<section class="mb-5" id="overview">
    <div class="bg-no-repeat bg-contain h-[600] lg:h-[700px] w-full grid grid-cols-1 md:grid-cols-10"
        style="background-image: url('/assets/images/about_shape.svg');">
        <img class="md:col-span-6 mt-7"
            src="{{ isset($overview->data['image']) ? asset('storage/uploads/' . $overview->data['image']) : asset('assets/images/placeholder.png') }}"
            alt="Overview Image" />
        <div class="md:col-span-4 flex flex-col justify-center">
            <h1 class="text-4xl text-justify mb-4 text-slate-700">
                {{ $overview->data['title'] ?? 'Default Overview Title' }}
            </h1>
            <p class="text-slate-500 text-justify mb-4">
                {{ $overview->data['description'] ?? 'Default overview description goes here. Please update the content to reflect your product details.' }}
            </p>
            <button
                class="bg-blue-500 rounded-full self-start text-white px-4 py-2 hover:bg-blue-600 hover:shadow-xl">Read
                more</button>
        </div>

    </div>
</section>
