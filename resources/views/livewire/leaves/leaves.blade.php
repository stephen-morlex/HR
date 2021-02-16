<div>
    <div class="relative md:ml-64 bg-gray-100">
        {{-- Nav --}}
        <x-navbar>
            <x-slot name="page">
                Leave Type
            </x-slot>
        </x-navbar>
        {{-- Cards --}}
        <x-cards>
            <x-slot name="model">
                Leave Type
            </x-slot>
            <x-slot name="total">
                {{ $totalLeaveTypes->count() }}
            </x-slot>

        </x-cards>
        {{-- Tables Section --}}
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
            <div class="flex flex-wrap mt-4">
                <div class="w-full mb-12 px-4">
                    {{-- Table headers --}}
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                        <div class="rounded-t mb-0 px-4 py-3 border-0">
                            <div class="flex flex-wrap items-center">
                                <div
                                    class="relative w-full px-4 max-w-full flex-grow flex justify-between items-center">
                                    <h3 class="font-bold uppercase text-lg text-gray-800">
                                        Leave Types Table
                                    </h3>
                                    @include('includes.message')
                                </div>
                            </div>
                            <div class="mt-4 flex justify-between items-center">
                                <div class="flex items-center justify-between">
                                    <button wire:click="create()"
                                        class="transition ease-in-out duration-700 flex items-center bg-blue-50 p-2 text-blue-800 hover:bg-blue-200 shadow rounded-md cursor-pointer">
                                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-blue-700">
                                            <path fill="none" d="M0 0h24v24H0V0Z" />
                                            <path
                                                d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4 -4 1.79-4 4 1.79 4 4 4Zm-9-2V8c0-.55-.45-1-1-1s-1 .45-1 1v2H2c-.55 0-1 .45-1 1s.45 1 1 1h2v2c0 .55.45 1 1 1s1-.45 1-1v-2h2c.55 0 1-.45 1-1s-.45-1-1-1H6Zm9 4c-2.67 0-8 1.34-8 4v1c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-1c0-2.66-5.33-4-8-4Z" />
                                        </svg>
                                        Create
                                    </button>
                                    <button wire:click="export()"
                                        class="transition ease-in-out duration-700 ml-4 flex items-center bg-green-50 p-2 text-green-800 shadow hover:bg-green-200 rounded-md cursor-pointer">
                                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current text-green-800 mr-2 ">
                                            <path fill="none" d="M0 0h24v24H0V0Z" />
                                            <path
                                                d="M16.59 9H15V4c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v5H7.41c-.89 0-1.34 1.08-.71 1.71l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.63-.63.19-1.71-.7-1.71ZM5 19c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1Z" />
                                        </svg>
                                        Export
                                    </button>
                                    @if ($isOpen)
                                        @include('livewire.leaves.leave-create')
                                    @endif
                                    @if ($deleteModal)
                                        @include('livewire.leaves.leave-delete')
                                    @endif

                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="">
                                        Per Page:
                                        <select wire:model="perPage" class="p-2 px-4 rounded-md mr-2">
                                            <option>5</option>
                                            <option>10</option>
                                            <option>50</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                    <div class="relative text-gray-600">
                                        <input type="search" wire:model="search" placeholder="Search for branches..."
                                            class="bg-white h-10 px-5 pr-10 rounded-md text-sm focus:outline-none">
                                        <button type="submit"
                                            class="absolute right-0 top-0 mt-3 mr-4 focus:outline-none">
                                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" y="0px"
                                                viewBox="0 0 56.966 56.966"
                                                style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                                width="512px" height="512px">
                                                <path
                                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- Table container --}}
                        <div class="block w-full overflow-x-auto">
                            <div class="flex flex-wrap mt-4">
                                <div class="w-full mb-12 px-4">
                                    <div class="block w-full overflow-x-auto">

                                        <table class="items-center w-full bg-transparent border-collapse">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                                                        <a wire:click.prevent="sortBy('name')" role="button" href="#"
                                                            class="flex items-center">
                                                            Name
                                                            @include('includes._sort-icon', ['field' => 'name'])
                                                        </a>
                                                    </th>
                                                    <th
                                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                                                        <a wire:click.prevent="sortBy('days')" role="button" href="#"
                                                            class="flex items-center">
                                                            Days
                                                            @include('includes._sort-icon', ['field' => 'name'])
                                                        </a>
                                                    </th>

                                                    <th
                                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                                                        <a wire:click.prevent="sortBy('created_at')" role="button"
                                                            href="#" class="flex items-center">
                                                            Created At
                                                            @include('includes._sort-icon', ['field' => 'created_at'])
                                                        </a>
                                                    </th>
                                                    <th
                                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                                                        Actions
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($leaveTypes as $leaveType)
                                                    <tr>
                                                        <th
                                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left flex items-center">
                                                            <p class="text-gray-900 capitalize tracking-wide">
                                                                {{ $leaveType->name }} </p>
                                                        </th>

                                                        <td
                                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                            @if ($leaveType->days < 2)
                                                                {{ $leaveType->days }} {{ 'day' }}
                                                            @else
                                                                {{ $leaveType->days }} {{ 'days' }}
                                                            @endif
                                                        </td>
                                                        <td
                                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                            {{ $leaveType->created_at->diffForHumans() }}
                                                        </td>
                                                        <td
                                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                            <button wire:click="edit({{ $leaveType->id }})"
                                                                class="p-1 transition ease-in-out duration-700 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
                                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <button wire:click="confrimDeleteModal({{ $leaveType->id }})"
                                                                class="transition ease-in-out duration-700 p-1 text-red-600 hover:bg-red-600 hover:text-white rounded">
                                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <h1>No records in the found !</h1>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-4">
                                        {{ $leaveTypes->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
