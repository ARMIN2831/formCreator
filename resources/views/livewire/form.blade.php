<div class="bg-white w-screen p-4 flex flex-col items-center overflow-y-auto">
    <div class="w-1/2 bg-slate-200 p-4 rounded-xl border border-slate-300 shadow">
        @foreach($project->fields as $field)
            @include('components.workspace.'.$field->type,['field' => $field, 'edit' => false, 'error' => $error])
        @endforeach
        <button wire:click="submitForm" class="text-sm font-semibold border border-gray-200 rounded-lg shadow py-1.5 px-3 bg-blue-600 text-white hover:bg-blue-800 transition-all ease-in-out duration-200">Submit</button>
    </div>
</div>
