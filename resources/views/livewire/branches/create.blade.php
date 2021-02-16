<div>
    <x-jet-dialog-modal wire:model="isOpen" wire:loading.remove>
        <x-slot name="title">
            <!--header-->
            <div class="flex items-start justify-between p-5 rounded-t">
                <h3 class="text-3xl font-semibold">
                    @if ($branch_id)
                        <h1 class="text-gray-700 font-bold">Edit {{ $name }} Branch </h1>
                    @else
                        <h1 class="text-gray-700 font-bold">Create Branch</h1>
                    @endif
                </h3>
                <hr class="py-2 text-blue-500 border-b-2">
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" />
                @error('name') <span class="error text-red-700">{{ $message }}</span> @enderror
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
                <x-jet-button class="bg-red-500 hover:text-red-800 hover:bg-red-50 font-bold uppercase px-6 py-3 text-sm outline-none 
                    focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
                    wire:click="closeModal()">
                    Cancel
                </x-jet-button>
                <button
                    class="bg-green-500 text-white hover:bg-green-50 hover:text-green-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="button" wire:click.prevent="store()">
                    Create
                </button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
