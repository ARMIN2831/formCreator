<header x-data="{ scrolled: false , menuHeader : false }" @scroll.window="scrolled = (window.scrollY > 0)" :class="{ 'bg-[#e7e7e786] backdrop-blur': scrolled, 'bg-transparent': !scrolled }" class="z-50 fixed top-0 left-0 right-0 w-full transition ease-in-out duration-300">
    <nav class="py-3">
        <div class="container flex justify-between items-center max-w-[1320px] mx-auto lg:px-20 md:px-10 p-2">
            <a class="lg:block md:block hidden" href="/">
                <img class="w-[130px]" loading="lazy" src="{{ asset('storage/photos/logo.svg') }}">
            </a>
            <div class="w-full flex justify-start lg:block md:block hidden">
                <ul class="py-4 flex gap-3 text-center">
                    <li><a href="/home" class="{{ request()->is('home') ? 'font-semibold' : 'font-normal' }} py-2 px-3 text-base cursor-pointer font-extrabold">Home</a></li>
                    <li><a href="/pricing" class="{{ request()->is('pricing') ? 'font-semibold' : 'font-normal' }} py-2 px-3 text-base cursor-pointer">Pricings</a></li>
                    <li><a href="/about" class="{{ request()->is('about') ? 'font-semibold' : 'font-normal' }} py-2 px-3 text-base cursor-pointer">About us</a></li>
                    <li><a href="/blog" class="{{ request()->is('blog') ? 'font-semibold' : 'font-normal' }} py-2 px-3 text-base cursor-pointer">Blog</a></li>
                </ul>
            </div>
            <div :class="{ 'top-0': menuHeader, 'top-[-100vh]': !menuHeader }" class="w-full h-screen flex justify-start absolute left-0 bg-purple-300 transition-all ease-in-out duration-300">
                <ul class="pt-8 grid grid-cols-1 gap-3 text-center w-full">
                    <li><a href="/home" class="py-2 px-3 text-3xl cursor-pointer font-bold w-full">Home</a></li>
                    <li><a href="/pricing" class="py-2 px-3 text-3xl cursor-pointer font-bold">Pricings</a></li>
                    <li><a href="/about" class="py-2 px-3 text-3xl cursor-pointer font-bold">About us</a></li>
                    <li><a href="/blog" class="py-2 px-3 text-3xl cursor-pointer font-bold">Blog</a></li>
                </ul>
            </div>

            <div class="lg:hidden md:hidden">
                <button @click="menuHeader = !menuHeader" class="text-black text-3xl p-2 bg-white shadow shadow-gray-300 relative z-[80] rounded-xl" data-label="Hamburger menu">
                    <svg x-show="!menuHeader" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z"></path></svg>
                    <svg x-show="menuHeader" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 352 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                </button>
            </div>

            <button class="z-50 bg-blue-600 border-none rounded-xl hover:bg-blue-700 text-white text-center h-12 px-4 text-sm font-semibold min-w-[116px]">
                CONTACT US
            </button>
        </div>
    </nav>
</header>
