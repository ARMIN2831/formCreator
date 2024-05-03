<section class="container flex justify-center items-center flex-col max-w-[1320px] mx-auto px-20 pt-24">

    <h2 class="font-bold text-6xl text-center mb-8">Choose a plan</h2>
    <p class="w-full lg:w-[700px] mx-auto text-center">Your payments, billing, tax compliance, and more at an all-inclusive price. No added costs, no hidden fees.</p>
    <div x-data="{ change: true }" class="relative text-center mt-10 bg-slate-300 px-4 py-2 rounded-full flex flex-row gap-8">
        <span :class="{ 'left-0': !change, 'left-[118px]': !change }" class="absolute w-[70px] h-[32px] rounded-full bg-slate-100 z-10 transition duration-200 ease-in-out"></span>
        <span @click="change = !change" class="z-20 text-md font-semibold rounded-full p-1 cursor-pointer">Monthly</span>
        <span @click="change = !change" class="z-20 text-md font-semibold rounded-full p-1 cursor-pointer">Annually</span>
    </div>

    <ul class="lg:grid lg:grid-cols-3 my-28 w-full">
        <li>
            <div class="p-6 rounded-2xl relative z-10 bg-[#dde2f8] border border-gray-200 shadow-2xl shadow-[#00000037]  overflow-hidden">
                <div class="relative z-10">
                    <div class="relative text-[#292929] z-10">
                        <h5 class="mb-2 font-bold text-2xl">Teams</h5>
                        <p class="mb-10 opacity-70">A single license for one device.</p>
                    </div>
                    <strong class="font-bold">Includes:</strong>
                    <ul class="mt-5">
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Lifetime usage
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Access to update
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Lifetime usage
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Access to update
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Lifetime usage
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Access to update
                        </li>
                    </ul>
                    <h3 class="text-center my-7 text-4xl font-semibold">$ 192</h3>
                    <button type="button" class="p-3 block text-black bg-[#fff] hover:bg-[#f6f6f6] border border-white w-full  mt-5 rounded-xl transition-all ease-in-out duration-300">
                        Get Started Now
                    </button>
                </div>
            </div>
        </li>
        <li>
            <div class="p-6 rounded-2xl relative z-10 bg-[#fff] sm:scale-[1.04] my-5 lg:my-0 z-20 border border-gray-200 shadow-2xl shadow-[#00000037]  overflow-hidden">
                <div class="relative z-10">
                    <div class="relative text-[#292929] z-10">
                        <h5 class="mb-2 font-bold text-2xl">Teams Pro</h5>
                        <p class="mb-10 opacity-70">A single license for one device.</p>
                    </div>
                    <strong class="font-bold">Includes:</strong>
                    <ul class="mt-5">
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Lifetime usage
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Access to update
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Lifetime usage
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Access to update
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Lifetime usage
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Access to update
                        </li>
                    </ul>
                    <h3 class="text-center my-7 text-4xl font-semibold">$ 480</h3>
                    <button type="button" class="p-3 block text-white bg-[#4557f6] hover:bg-[#4856d5] border border-white w-full  mt-5 rounded-xl transition-all ease-in-out duration-300">
                        Get Started Now
                    </button>
                </div>
            </div>
        </li>
        <li>
            <div class="p-6 rounded-2xl relative z-10 bg-[#dde2f8] border border-gray-200 shadow-2xl shadow-[#00000037]  overflow-hidden">
                <div class="relative z-10">
                    <div class="relative text-[#292929] z-10">
                        <h5 class="mb-2 font-bold text-2xl">Enterprise</h5>
                        <p class="mb-10 opacity-70">A single license for one device.</p>
                    </div>
                    <strong class="font-bold">Includes:</strong>
                    <ul class="mt-5"><li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Lifetime usage
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Access to update
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Lifetime usage
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Access to update
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Lifetime usage
                        </li>
                        <li class="pb-1 mt-1 text-[14px]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#4557f6] inline-block align-middle mr-2 text-[10px] relative -top-[2px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 23.05C127.5 23.05 23.05 127.5 23.05 256S127.5 488.9 256 488.9 488.9 384.5 488.9 256 384.5 23.05 256 23.05z"></path></svg>Access to update
                        </li>
                    </ul>
                    <h3 class="text-center my-7 text-4xl font-semibold">$ 2,640</h3>
                    <button type="button" class="p-3 block text-black bg-[#fff] hover:bg-[#f6f6f6] border border-white& w-full  mt-5 rounded-xl transition-all ease-in-out duration-300">
                        Get Started Now
                    </button>
                </div>
            </div>
        </li>
    </ul>

    @include('components.landing.slider-section')

    <div class="flex flex-row gap-72 w-full mt-24">
        <div>
            <h2 class="text-center text-6xl font-semibold lg:text-left">FAQ</h2>
        </div>
        <div class="flex flex-col gap-8">
            <div x-data="{ menu : false }">
                <div @click="menu = !menu" class="bg-gray-100 border border-gray-200 p-6 rounded-md relative cursor-pointer">
                    <h6 class="pr-5 select-none text-lg font-semibold">What do I get exactly?</h6>
                    <svg :class="{ '': !menu, 'rotate-180': menu }" @click="menu = !menu" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="absolute text-lg right-6 top-7 transition duration-200 " height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </div>
                <div :class="{ 'h-0': !menu, 'h-[142px]': menu }" class="overflow-hidden transition-all ease-in-out duration-300">
                    <p class="bg-gray-100 border mt-5 border-gray-200 p-6 rounded-md">You get access to a professionally designed and customizable template. These templates are ready to use, allowing customers to quickly establish an impressive online presence without the need for extensive web design or development skills</p>
                </div>
            </div>
            <div x-data="{ menu : false }">
                <div @click="menu = !menu" class="bg-gray-100 border border-gray-200 p-6 rounded-md relative cursor-pointer">
                    <h6 class="pr-5 select-none text-lg font-semibold">What makes the premium templates different from the regular ones?</h6>
                    <svg :class="{ '': !menu, 'rotate-180': menu }" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="absolute text-lg right-6 top-7 transition duration-200 " height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </div>
                <div :class="{ 'h-0': !menu, 'h-[142px]': menu }" class="overflow-hidden transition-all ease-in-out duration-300">
                    <p class="bg-gray-100 border mt-5 border-gray-200 p-6 rounded-md">Landix's templates are specially designed for startups and businesses, offering professional design and a user-friendly interface. The premium templates stand out with weekly updates, introducing new components to ensure your web presence remains fresh and effective</p>
                </div>
            </div>
            <div x-data="{ menu : false }">
                <div @click="menu = !menu" class="bg-gray-100 border border-gray-200 p-6 rounded-md relative cursor-pointer">
                    <h6 class="pr-5 select-none text-lg font-semibold">I can build it myself, why should I buy it?</h6>
                    <svg :class="{ '': !menu, 'rotate-180': menu }" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="absolute text-lg right-6 top-7 transition duration-200 " height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </div>
                <div :class="{ 'h-0': !menu, 'h-[142px]': menu }" class="overflow-hidden transition-all ease-in-out duration-300">
                    <p class="bg-gray-100 border mt-5 border-gray-200 p-6 rounded-md">True. While you're building it, others are launching theirs.</p>
                </div>
            </div>
            <div x-data="{ menu : false }">
                <div @click="menu = !menu" class="bg-gray-100 border border-gray-200 p-6 rounded-md relative cursor-pointer">
                    <h6 class="pr-5 select-none text-lg font-semibold">What makes Landix's templates unique compared to others?</h6>
                    <svg :class="{ '': !menu, 'rotate-180': menu }" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="absolute text-lg right-6 top-7 transition duration-200 " height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </div>
                <div :class="{ 'h-0': !menu, 'h-[142px]': menu }" class="overflow-hidden transition-all ease-in-out duration-300">
                    <p class="bg-gray-100 border mt-5 border-gray-200 p-6 rounded-md">Landix's templates are specially designed for startups and businesses, offering professional design and a user-friendly interface.</p>
                </div>
            </div>
            <div x-data="{ menu : false }">
                <div @click="menu = !menu" class="bg-gray-100 border border-gray-200 p-6 rounded-md relative cursor-pointer">
                    <h6 class="pr-5 select-none text-lg font-semibold">How long does it really take to set up?</h6>
                    <svg :class="{ '': !menu, 'rotate-180': menu }" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="absolute text-lg right-6 top-7 transition duration-200 " height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </div>
                <div :class="{ 'h-0': !menu, 'h-[142px]': menu }" class="overflow-hidden transition-all ease-in-out duration-300">
                    <p class="bg-gray-100 border mt-5 border-gray-200 p-6 rounded-md">If I want to be honest with you, it'll take less than a few hours.</p>
                </div>
            </div>
            <div x-data="{ menu : false }">
                <div @click="menu = !menu" class="bg-gray-100 border border-gray-200 p-6 rounded-md relative cursor-pointer">
                    <h6 class="pr-5 select-none text-lg font-semibold">Javascript or Typescript?</h6>
                    <svg :class="{ '': !menu, 'rotate-180': menu }" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="absolute text-lg right-6 top-7 transition duration-200 " height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </div>
                <div :class="{ 'h-0': !menu, 'h-[142px]': menu }" class="overflow-hidden transition-all ease-in-out duration-300">
                    <p class="bg-gray-100 border mt-5 border-gray-200 p-6 rounded-md">Both! You can choose once you get access</p>
                </div>
            </div>
            <div x-data="{ menu : false }">
                <div @click="menu = !menu" class="bg-gray-100 border border-gray-200 p-6 rounded-md relative cursor-pointer">
                    <h6 class="pr-5 select-none text-lg font-semibold">I have another question</h6>
                    <svg :class="{ '': !menu, 'rotate-180': menu }" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="absolute text-lg right-6 top-7 transition duration-200 " height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </div>
                <div :class="{ 'h-0': !menu, 'h-[142px]': menu }" class="overflow-hidden transition-all ease-in-out duration-300">
                    <p class="bg-gray-100 border mt-5 border-gray-200 p-6 rounded-md">contact me by email at salarrismantab@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
