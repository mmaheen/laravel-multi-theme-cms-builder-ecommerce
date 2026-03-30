<section class="mt-5">
    <div class="grid grid-cols-1 md:grid-cols-10 gap-2">
        <div class="md:col-span-4 flex flex-col justify-center">
            <h1 class="text-4xl font-bold mb-4 text-slate-700">
                {{ $hero->data['title'] }}
            </h1>
            <p class="text-justify mb-4 text-slate-500">
                {{ $hero->data['description'] }}
            </p>
            <p class="mb-4 text-slate-500 text-xl font-bold">
                Price: <span class="bg-gray-200 px-4 py-2 text-blue-500 rounded self-start">1000$</span>
            </p>
            <button class="bg-blue-500 px-4 py-2 text-white rounded-full self-start">Buy now</button>
        </div>
        <div class="md:col-span-6 my-7">
            <img src="{{ asset('assets/images/header_image.png') }}" alt="">
        </div>
    </div>
</section>
