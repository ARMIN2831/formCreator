<header x-data="{ scrolled: false }" @scroll.window="scrolled = (window.scrollY > 0)" :class="{ 'bg-[#e7e7e786] backdrop-blur': scrolled, 'bg-transparent': !scrolled }" class="z-50 fixed top-0 left-0 right-0 w-full transition ease-in-out duration-300">
    <nav class="py-3">
        <div class="container flex justify-between items-center max-w-[1320px] mx-auto px-20">
            <a href="/">
                <img class="w-[130px]" loading="lazy" src="{{ asset('storage/photos/logo.svg') }}">
            </a>
            <div class="w-full flex justify-start">
                <ul class="py-4 flex gap-3 text-center">
                    <li><a href="/home" class="{{ request()->is('home') ? 'font-semibold' : 'font-normal' }} py-2 px-3 text-base cursor-pointer font-extrabold">Home</a></li>
                    <li><a href="/pricing" class="{{ request()->is('pricing') ? 'font-semibold' : 'font-normal' }} py-2 px-3 text-base cursor-pointer">Pricings</a></li>
                    <li><a href="/about" class="{{ request()->is('about') ? 'font-semibold' : 'font-normal' }} py-2 px-3 text-base cursor-pointer">About us</a></li>
                    <li><a href="/blog" class="{{ request()->is('blog') ? 'font-semibold' : 'font-normal' }} py-2 px-3 text-base cursor-pointer">Blog</a></li>
                </ul>
            </div>

            <button class="bg-blue-600 border-none rounded-xl hover:bg-blue-700 text-white text-center h-12 px-4 text-sm font-semibold min-w-[116px]">
                CONTACT US
            </button>
        </div>
    </nav>
</header>
