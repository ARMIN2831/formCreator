<div class="w-screen h-screen p-4">
    <div class="w-full h-full flex flex-col border border-gray-300 relative">

        <div class="text-sm font-semibold flex flex-row absolute w-full justify-center top-4 z-10 py-1.5">
            <p class="text-gray-500">test workspace</p>
            <p>/ untitled</p>
        </div>

        <div class="flex flex-row w-full p-4 justify-between">

            <div class="flex flex-row z-20 py-1.5 px-3">
                <div class="p-0.5 border border-gray-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1024 1024"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"/><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"/></svg>
                </div>
                <button class="pl-1.5 text-sm font-semibold">
                    Back
                </button>
            </div>

            <div class="flex flex-row gap-4 z-20">
                <p class="text-sm font-semibold py-1.5 px-3">Save draft</p>
                <button class="text-sm font-semibold border border-gray-200 rounded-lg shadow py-1.5 px-3 hover:bg-slate-200 transition-all ease-in-out duration-200">Preview</button>
                <button class="text-sm font-semibold border border-gray-200 rounded-lg shadow py-1.5 px-3 bg-blue-600 text-white hover:bg-blue-800 transition-all ease-in-out duration-200">Share</button>
            </div>
        </div>

        <div x-data="{ menu : true , edit : true }" class="w-full bg-slate-100 h-full flex flex-row">

            {{-- user form --}}
            <div :class="{ 'w-full': !menu, 'w-3/4': menu }" class="w-3/4 h-full p-4 transition-all ease-in-out duration-200">
                <div class="bg-white border border-slate-300 shadow w-full h-full p-4">

                </div>
            </div>
            {{-- end user form --}}
            {{-- fields and options --}}
            <div :class="{ 'w-0 hidden': !menu, 'w-1/4': menu }" class="h-full p-4">
                <div class="bg-white border border-slate-300 shadow w-full h-full p-4">

                    <div class="flex flex-row justify-between mb-2">
                        <p class="font-semibold text-lg text-slate-400">FIELDS</p>
                        <div @click="menu = !menu" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/>
                                <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>

                    {{-- fields --}}
                    <div x-show="edit" class=" grid grid-cols-2 gap-4">
                        <div class="col-span-2 font-semibold text-sm text-slate-500">TEXT ELEMENTS</div>
                        <div class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
                            <p>Text Box</p>
                        </div>
                        <div class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
                            <p>Paragraph</p>
                        </div>
                        <div class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
                            <p>Heading</p>
                        </div>
                        <div class="col-span-2 font-semibold text-sm text-slate-500">CHOICE ELEMENTS</div>
                        <div class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
                            <p>Dropdown</p>
                        </div>
                        <div class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
                            <p>Radio</p>
                        </div>
                        <div class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
                            <p>Check Box</p>
                        </div>
                    </div>
                    {{-- end fields --}}

                    {{-- options --}}
                    <div x-show="!edit" class="">
                        
                    </div>
                    {{-- end options --}}

                </div>
            </div>
            {{-- end fields and options --}}

        </div>
    </div>
</div>
