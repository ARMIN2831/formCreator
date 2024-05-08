<div @if($edit) wire:click="showEdit({{ $field->id }})" @click="edit = false , menu = true" @endif class="relative group px-1 pb-6 cursor-pointer @if($edit) hover:bg-slate-100 transition-all ease-in-out duration-100 @endif">
    <label class="flex flex-col text-sm font-semibold text-slate-500 cursor-pointer">
        {{ $field->value }}:
        <textarea wire:model="arr.{{ $field->id }}" name="{{ $field->id }}" class="shadow min-h-20 rounded-md px-2 mt-2" placeholder="{{ $field->placeholder }}"></textarea>
        @if(isset($error) and isset($error[$field->id])) <small class="text-red-800 absolute text-[0.65rem] bottom-0.5">{{ $error[$field->id] }}</small> @endif
    </label>
    @if($edit)
        <div wire:click="deleteField({{ $field->id }})" class="hidden group-hover:block absolute top-px right-px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/>
                <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </div>
    @endif
</div>
