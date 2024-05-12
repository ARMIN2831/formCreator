<div x-show="!edit" class="">
    @if($f)
        {{ $f->value }}
        <div class="px-2 pb-6 cursor-pointer bg-slate-100">
            <label class="flex flex-col text-sm font-semibold text-slate-500">
                Title:
                <input wire:change="updateField('value',$event.target.value)" class="shadow h-8 rounded-md px-2 mt-2" value="{{ $f->value }}">
            </label>
        </div>

        @if($f->type == 'text' || $f->type == 'paragraph')
            <div class="px-2 pb-6 cursor-pointer bg-slate-100">
                <label class="flex flex-col text-sm font-semibold text-slate-500">
                    Placeholder:
                    <input wire:change="updateField('placeholder',$event.target.value)" class="shadow h-8 rounded-md px-2 mt-2" value="{{ $f->placeholder }}">
                </label>
            </div>
        @endif

        @if($f->type == 'radio')
            <div class="px-2 pb-6 cursor-pointer bg-slate-100">
                <label class="flex flex-col text-sm font-semibold text-slate-500">
                    Name:
                    <input wire:change="updateField('placeholder',$event.target.value)" class="shadow h-8 rounded-md px-2 mt-2" value="{{ $f->placeholder }}">
                </label>
            </div>
        @endif

        @if($f->type == 'dropdown')
            <div class="px-2 pb-6 cursor-pointer bg-slate-100">
                <label class="flex flex-col text-sm font-semibold text-slate-500">
                    options:
                    @foreach(unserialize($f->placeholder) as $key => $option)
                        <div class="group relative w-full pt-3">
                            <input wire:change="updateFieldDropdown({{ $key }},$event.target.value)" class="w-full shadow h-8 rounded-md px-2 mt-2" value="{{ $option }}">
                            <div wire:click="updateFieldDropdown('delete',{{ $key }})" class="hidden group-hover:block absolute top-px right-px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/>
                                    <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                    @endforeach
                    <div wire:click="updateFieldDropdown()" class="text-sm font-bold rounded-md shadow cursor-pointer py-2 px-4 mt-4 bg-slate-200 hover:bg-slate-300 transition-all ease-in-out duration-100">add +</div>
                </label>
            </div>
        @endif

        @if($f->min != 0 and $f->max != 0)
            <div class="px-2 pb-6 cursor-pointer bg-slate-100">
                <label class="flex flex-col text-sm font-semibold text-slate-500">
                    Min:
                    <input wire:change="updateField('min',$event.target.value)" type="number" class="shadow h-8 rounded-md px-2 mt-2" value="{{ $f->min }}">
                </label>
            </div>

            <div class="px-2 pb-6 cursor-pointer bg-slate-100">
                <label class="flex flex-col text-sm font-semibold text-slate-500">
                    Max:
                    <input wire:change="updateField('max',$event.target.value)" type="number" class="shadow h-8 rounded-md px-2 mt-2" value="{{ $f->max }}">
                </label>
            </div>
        @endif

        <div class="px-2 pb-6 cursor-pointer bg-slate-100 flex flex-row items-center">
            <label class="flex flex-row text-sm font-semibold text-slate-500">
                Required:
                <input wire:change="updateField('required',$event.target.checked)" {{ $f->required == true ? 'checked="checked"' : '' }} type="checkbox" class="shadow rounded-md px-2 ml-2" value="{{ $f->required }}">
            </label>
        </div>

        @if($f->type == 'text')
            <div class="px-2 pb-6 cursor-pointer bg-slate-100 flex flex-row items-center">
                <label class="flex flex-row text-sm font-semibold text-slate-500">
                    Unique:
                    <input wire:change="updateField('unique',$event.target.checked)" {{ $f->unique == true ? 'checked="checked"' : '' }} type="checkbox" class="shadow rounded-md px-2 ml-2" value="{{ $f->unique }}">
                </label>
            </div>
        @endif

    @endif
</div>
