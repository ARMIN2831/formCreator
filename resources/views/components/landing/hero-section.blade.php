<section class="container flex justify-center items-center flex-col max-w-[1320px] mx-auto px-20 pt-52 text-center">
    <h1 class="text-8xl font-black">
        Let’s <span class="text-blue-700">hop</span> on a call
    </h1>
    <p class="mb-8 mt-10 mx-auto text-gray-600 lg:w-[800px]">
        Put a short description with a maximum length of 150
        characters here, this description should be considered as something your users would see first.
    </p>
    <button class="bg-blue-600 border-none rounded-xl hover:bg-blue-700 text-white text-center h-12 px-10 text-sm font-bold min-w-[116px]">
        BROWSE ALL
    </button>

    @include('components.landing.slider-section')


    <div class="bg-gray-100 p-2 lg:p-12 rounded-xl my-6 lg:my-24">
        <div class="relative rounded-xl overflow-hidden">
            <video loading="lazy" class="w-full bg-[#5868fa13]" poster="" controls="">
                <source src="{{ asset('storage/videos/video.mp4') }}" type="video/mp4">Your browser does not support the video tag.</video>
        </div>
    </div>
</section>
