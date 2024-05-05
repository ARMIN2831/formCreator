<div class="flex flex-row w-screen h-screen">
     <div class="w-1/6 h-full border-r border-gray-200">
         <div class="px-3 flex flex-col w-full h-full">
             <a class="w-full py-2 border-b border-gray-200" href="/">
                 <img class="w-[130px] mx-auto" loading="lazy" src="{{ asset('storage/photos/logo.svg') }}">
             </a>
             <div class="flex flex-row justify-between w-full py-3 cursor-pointer border-b border-gray-200 hover:bg-slate-100 transition-all ease-in-out duration-100">
                 <h3 class="font-bold text-base">WORKSPACE</h3>
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus "><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
             </div>

             <div class="grow flex flex-col gap-4 w-full py-3">
                 <div class="cursor-pointer w-full px-3 py-2 flex items-center justify-start gap-2 bg-blue-200 rounded-xl shadow-sm text-slate-700 hover:bg-blue-300 transition duration-300 ease-in-out transform hover:scale-105">
                     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder-closed "><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"></path><path d="M2 10h20"></path></svg>
                     <h3 class="font-semibold text-base">Test Workspace</h3>
                 </div>

                 <div class="cursor-pointer w-full px-3 flex flex-row justify-start gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder-closed "><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"></path><path d="M2 10h20"></path></svg>
                     <h3 class="font-normal text-base">Test Workspace</h3>
                 </div>
             </div>

             <div x-data="{ profile : false }" class="cursor-pointer relative py-4">
                 <div @click="profile = !profile" class="items-center justify-center whitespace-nowrap rounded-md text-sm font-medium p-4 w-full flex gap-2 h-12">
                     <span class="relative flex overflow-hidden rounded-full w-8 h-8">
                         <span class="flex h-full w-full items-center justify-center rounded-full bg-zinc-900 text-white">A</span>
                     </span>
                     <div class="flex items-start flex-col grow">
                         <span>Armin Eslami</span>
                         <span class="text-xs">Armin Eslami</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu "><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                     </div>
                 </div>
                 <div x-show="profile" class="absolute left-0 -top-16 w-56 shadow-sm shadow-slate-300 p-1 rounded-md flex flex-col justify-start border border-gray-300">
                     <h3 class="text-sm py-1 px-2 cursor-pointer font-semibold text-gray-700">Profile</h3>
                     <h3 class="text-sm py-1 px-2 cursor-pointer font-semibold text-gray-700">Log out</h3>
                 </div>
             </div>

         </div>
     </div>
    <div class="py-6 px-8 flex flex-col w-5/6">
        <div class="flex flex-row justify-between">
            <div class="w-full px-3 flex flex-row justify-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder-closed "><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"></path><path d="M2 10h20"></path></svg>
                <h3 class="font-medium leading-8 text-xl">Test Workspace</h3>
            </div>
            <button class="bg-blue-600 border-none rounded-xl hover:bg-blue-700 text-white text-center h-12 px-4 text-sm font-semibold min-w-[116px]">
                Create form
            </button>
        </div>

        <div class="rounded-md border mt-16">
            <div class="relative w-full">
                <table class="w-full caption-bottom text-sm">
                    <thead class="border-b">
                    <tr class="border-b transition-colors hover:bg-slate-100">
                        <th class="h-12 px-4 text-left align-middle font-medium">Title</th>
                        <th class="h-12 px-4 text-left align-middle font-medium">Submission</th>
                        <th class="h-12 px-4 text-left align-middle font-medium">Update At</th>
                        <th class="h-12 px-4 text-left align-middle font-medium"></th>
                    </tr>
                    </thead>
                    <tbody class="border-0">
                    <tr class="relative border-b cursor-pointer transition-colors hover:bg-slate-100">
                        <td class="p-4 align-middle">Untitled</td>
                        <td class="p-4 align-middle">0</td>
                        <td class="p-4 align-middle">2024-05-03 11:54:37</td>
                        <td x-data="{ actions : false }" class="p-4 align-middle">
                            <button @click="actions = !actions" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium h-8 w-8 p-0 transition-colors hover:bg-slate-200" type="button" id="radix-:r9n:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"><path d="M3.625 7.5C3.625 8.12132 3.12132 8.625 2.5 8.625C1.87868 8.625 1.375 8.12132 1.375 7.5C1.375 6.87868 1.87868 6.375 2.5 6.375C3.12132 6.375 3.625 6.87868 3.625 7.5ZM8.625 7.5C8.625 8.12132 8.12132 8.625 7.5 8.625C6.87868 8.625 6.375 8.12132 6.375 7.5C6.375 6.87868 6.87868 6.375 7.5 6.375C8.12132 6.375 8.625 6.87868 8.625 7.5ZM12.5 8.625C13.1213 8.625 13.625 8.12132 13.625 7.5C13.625 6.87868 13.1213 6.375 12.5 6.375C11.8787 6.375 11.375 6.87868 11.375 7.5C11.375 8.12132 11.8787 8.625 12.5 8.625Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="actions" class="bg-white absolute right-36 -top-20 w-36 shadow-sm shadow-slate-300 p-1 rounded-md flex flex-col justify-start border border-gray-300">
                                <h3 class="text-sm py-1 px-2 font-bold text-gray-700">Actions</h3>
                                <h3 class="text-sm py-1 px-2 cursor-pointer font-semibold text-gray-700">Rename</h3>
                                <h3 class="text-sm py-1 px-2 cursor-pointer font-semibold text-red-700">Delete</h3>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
