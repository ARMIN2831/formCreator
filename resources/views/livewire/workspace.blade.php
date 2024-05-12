<div class="p-4 w-full h-full">
    <div class="w-full h-full flex flex-col border border-gray-300 relative">

        <div class="text-sm font-semibold flex flex-row absolute w-full justify-center top-4 z-10 py-1.5">
            <p class="text-gray-500">{{ $project->workspace->title }}</p>
            <p>/ {{ $project->title }}</p>
        </div>

        <div class="flex flex-row w-full p-4 justify-between">

            <div onclick="window.location.href = '{{ route('dashboard') }}'" class="flex flex-row z-20 py-1.5 px-3">
                <div class="p-0.5 border border-gray-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1024 1024"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"/><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"/></svg>
                </div>
                <button class="pl-1.5 text-sm font-semibold">
                    Back
                </button>
            </div>

            <div class="flex flex-row gap-4 z-20 relative">
                <p class="text-sm font-semibold py-1.5 px-3 ">Save draft</p>
                <div wire:loading class="flex justify-center items-center absolute top-[7px] -left-2.5">
                    <div class="inline-block animate-spin rounded-full h-4 w-4 border-t-2 border-b-2 border-gray-900"></div>
                </div>
                <button onclick="window.location.href = '{{ route('form',['id' => $project->id]) }}'" class="text-sm font-semibold border border-gray-200 rounded-lg shadow py-1.5 px-3 hover:bg-slate-200 transition-all ease-in-out duration-200">Preview</button>
                <button class="text-sm font-semibold border border-gray-200 rounded-lg shadow py-1.5 px-3 bg-blue-600 text-white hover:bg-blue-800 transition-all ease-in-out duration-200">Share</button>
            </div>
        </div>

        <div x-data="{ menu : true , edit : true }" class="w-full bg-slate-100 h-full flex flex-row">

            {{-- user form --}}
            <div :class="{ 'w-full': !menu, 'w-3/4': menu }" class="w-3/4 h-full p-4 transition-all ease-in-out duration-200 overflow-hidden">
                <div class="bg-white border border-slate-300 shadow w-full h-full p-4 flex flex-col items-center overflow-y-auto">
                    <div class="w-1/2 bg-slate-200 p-4 rounded-xl border border-slate-300 shadow">
                        @foreach($project->fields as $field)
                            @include('components.workspace.'.$field->type,['field' => $field, 'edit' => true])
                        @endforeach
                            <button class="text-sm font-semibold border border-gray-200 rounded-lg shadow py-1.5 px-3 bg-blue-600 text-white hover:bg-blue-800 transition-all ease-in-out duration-200">Submit</button>
                    </div>

                    <div @click="menu = true , edit = true" class="text-sm font-bold rounded-md shadow cursor-pointer py-2 px-4 mt-4 bg-slate-200 hover:bg-slate-300 transition-all ease-in-out duration-100">add +</div>
                </div>
            </div>
            {{-- end user form --}}
            {{-- fields and options --}}
            <div :class="{ 'w-0 hidden': !menu, 'w-1/4': menu }" class="h-full p-4">
                <div class="bg-white border border-slate-300 shadow w-full h-full p-4">

                    <div class="flex flex-row justify-between mb-2">
                        <p x-text="edit ? 'FIELDS' : 'EDIT FIELD'" class="font-semibold text-lg text-slate-400"></p>
                        <div @click="menu = !menu" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/>
                                <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>

                    {{-- fields --}}
                    @include('components.workspace.fields')
                    {{-- end fields --}}

                    {{-- options --}}
                    @include('components.workspace.options',['f' => $f])
                    {{-- end options --}}

                </div>
            </div>
            {{-- end fields and options --}}

        </div>
    </div>
</div>
