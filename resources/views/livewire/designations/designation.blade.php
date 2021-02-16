<div>
    <div class="relative md:ml-64 bg-gray-100">
        <nav
            class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4">
            <div class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
                <div>
                    <ol class="list-reset flex text-white">
                        <li><a href="/dashboard" class="text-blue">Dashboard</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li><a href="#" class="text-blue font-bold">Designation</a></li>
                    </ol>
                </div>
                <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                    <div class="relative flex w-full flex-wrap items-stretch">
                        <span
                            class="z-10 h-full leading-snug font-normal  text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                                class="fas fa-search"></i></span>
                        <input type="text" placeholder="Search here..."
                            class="px-3 py-3 placeholder-gray-400 text-gray-700 relative  bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10">
                    </div>
                </form>
                <ul class="flex-col md:flex-row list-none items-center hidden md:flex" x-data="{ open: false }">
                    <a class="text-gray-600 block" @click="open = true">
                        <div class="items-center flex">
                            <span
                                class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"><img
                                    alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                    src="/images/nilepetLogo.jpg">
                            </span>
                        </div>
                    </a>
                    <div class="bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg w-48"
                        x-show="open" @click.away="open = false" id="user-dropdown" data-popper-placement="bottom-start"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(814px, 64px, 0px);">
                        <a href=""
                            class="flex items-center text-sm py-2 px-4 font-normal  w-full whitespace-no-wrap bg-transparent text-gray-800">
                            <svg viewBox="0 0 24 24"
                                class="h-6 w-6 mr-2 fill-current text-blue-600 bg-blue-50 p-1 rounded-full">
                                <path fill="none" d="M0 0h24v24H0V0Z" />
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4C9.79 4 8 5.79 8 8c0 2.21 1.79 4 4 4Zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4Z" />
                            </svg>
                            Profile
                        </a>
                        <a href=""
                            class=" flex items-center text-sm py-2 px-4 font-normal  w-full whitespace-no-wrap bg-transparent text-gray-800">
                            <svg viewBox="0 0 24 24"
                                class="h-6 w-6 mr-2 fill-current text-gray-600 bg-gray-50 p-1 rounded-full">
                                <path fill="none" d="M0 0h24v24H0V0Z" />
                                <path
                                    d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65ZM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5 -1.57 3.5-3.5 3.5Z" />
                            </svg>
                            Setting
                        </a>
                        <div class="h-0 my-2 border border-solid border-gray-200"></div>
                        <a href=""
                            class="flex items-center text-sm py-2 px-4 font-normal  w-full whitespace-no-wrap bg-transparent text-gray-800">
                            <svg viewBox="0 0 24 24"
                                class="h-6 w-6 mr-2 fill-current text-red-600 bg-red-50 p-1 rounded-full">
                                <path fill="none" d="M0 0h24v24H0Z" />
                                <path
                                    d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5ZM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5Z" />
                            </svg>
                            Logout
                        </a>
                    </div>
                </ul>
            </div>
        </nav>
        <div class="relative bg-blue-600 md:pt-32 pb-32 pt-12">
            <div class="px-4 md:px-10 mx-auto w-full">
                <div>
                    <!-- Card stats -->
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-gray-500 uppercase font-bold text-lg">
                                                Total Designation
                                            </h5>
                                            <span class="font-semibold text-5xl text-gray-800">
                                                {{ $totalDesignations->count() }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        Designations Table
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
                                        @include('livewire.designations.create')
                                    @endif
                                    @if ($deleteModal)
                                        @include('livewire.designations.delete')
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
                                                        <a wire:click.prevent="sortBy('department_id')" role="button"
                                                            href="#" class="flex items-center">
                                                            Department
                                                            @include('includes._sort-icon', ['field' =>
                                                            'department_id'])
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
                                                @forelse ($designations as $desig)
                                                    <tr cl>
                                                        <th
                                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left flex items-center">
                                                            <p class="text-gray-900 capitalize tracking-wide">
                                                                {{ $desig->name }} </p>
                                                        </th>
                                                        <td
                                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                            {{ $desig->department->name }}
                                                        </td>
                                                        <td
                                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                            {{ $desig->created_at->diffForHumans() }}
                                                        </td>
                                                        <td
                                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                            <button wire:click="edit({{ $desig->id }})"
                                                                class="p-1 transition ease-in-out duration-700 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
                                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <button wire:click="confrimDeleteModal({{ $desig->id }})"
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
                                        {{ $designations->links() }}
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
