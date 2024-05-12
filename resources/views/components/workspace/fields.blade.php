<div x-show="edit" class=" grid grid-cols-2 gap-4">
    <div class="col-span-2 font-semibold text-sm text-slate-500">TEXT ELEMENTS</div>
    <div wire:click="addField('text')" class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
        <p>Text Box</p>
    </div>
    <div wire:click="addField('paragraph')" class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
        <p>Paragraph</p>
    </div>
    <div wire:click="addField('heading')" class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
        <p>Heading</p>
    </div>
    <div class="col-span-2 font-semibold text-sm text-slate-500">CHOICE ELEMENTS</div>
    <div wire:click="addField('dropdown')" class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
        <p>Dropdown</p>
    </div>
    <div wire:click="addField('radio')" class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
        <p>Radio</p>
    </div>
    <div wire:click="addField('check')" class="text-center flex flex-col justify-center bg-slate-100 border border-slate-300 hover:bg-slate-300 shadow-lg cursor-pointer h-[80px] transition-all ease-in-out duration-100 rounded-md">
        <p>Check Box</p>
    </div>
</div>
