<div>
    <x-jet-dialog-modal wire:model="deleteModal">
        <x-slot name="title">
            <!--header-->
            <div class="flex items-start justify-between p-5 rounded-t">
                <h3 class="text-3xl font-semibold">
                    <h1 class="text-gray-700 font-bold uppercase">Are you sure you want to proceed !
                    </h1>
                </h3>
                <hr class="py-2 text-blue-500 border-b-2">
            </div>
        </x-slot>
        <x-slot name="content">
            <h1 class="text-red-500 font-bold text-center">Once Announcement deleted it will be deleted permanently
            </h1>
        </x-slot>
        <x-slot name="footer">
            <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
                <x-jet-button class="bg-gray-500 hover:text-white hover:shadow-lg hover:bg-gray-300 font-bold uppercase px-6 py-3 text-sm outline-none 
                    focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
                    wire:click="closeDeleteModal()">
                    Nevermind
                </x-jet-button>
                <x-jet-button class="bg-red-500 hover:text-red-800 hover:bg-red-50 hover:shadow-lg font-bold uppercase px-6 py-3 text-sm outline-none 
                    focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
                    wire:click="delete()">
                    Delete
                </x-jet-button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
