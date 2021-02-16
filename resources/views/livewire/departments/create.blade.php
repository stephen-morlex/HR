<div>
    <x-jet-dialog-modal wire:model="isOpen" wire:loading.remove>
        <x-slot name="title">
            <!--header-->
            <div class="flex items-start justify-between p-5 rounded-t">
                <h3 class="text-3xl font-semibold">
                    @if ($dep_id)
                        <h1 class="text-gray-700 font-bold">Edit {{ $name }} Department </h1>
                    @else
                        <h1 class="text-gray-700 font-bold">Create Department</h1>
                    @endif
                </h3>
                <hr class="py-2 text-blue-500 border-b-2">
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label class="font-light text-gray-600" for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" type="text"
                    class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg text-gray-700 focus:outline-none"
                    wire:model.defer="name" />
                @error('name') <span class="error text-red-800 bg-red-50 rounded-md p-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-2">
                <x-jet-label for="branch" class="font-light text-gray-600" value="{{ __('Branch') }}" />
                <select wire:model="branch_id" name="branch_id"
                    class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg text-gray-700 outline-none focus:outline-none">
                    <option value="#" class="py-1 text-light text-gray-600">Select a branch</option>
                    @foreach ($branches as $branch)
                        <option class="py-1 text-light text-gray-600" value="{{ $branch->id }}">{{ $branch->name }}
                        </option>
                    @endforeach
                </select>
                @error('branch_id') <span
                        class="error w-full bg-red-50 p-2 rounded-md text-red-800">{{ $message }}</span>
                @enderror
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
                <x-jet-button class="transition ease-in-out duration-700 bg-red-500 hover:text-red-800 hover:bg-red-50 font-bold uppercase px-6 py-3 text-sm outline-none hover:shadow-lg
                    focus:outline-none mr-1 mb-1" type="button" wire:click="closeModal()">
                    Cancel
                </x-jet-button>
                <button
                    class="bg-green-500 text-white hover:bg-green-50 hover:text-green-800 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 transition ease-in-out duration-700"
                    type="button" wire:click.prevent="store()">
                    Create
                </button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
