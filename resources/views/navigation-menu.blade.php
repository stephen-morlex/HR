<nav
    class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current text-gray-400">
                <path fill="none" d="M0 0h24v24H0V0Z" />
                <path
                    d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1Zm0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1ZM3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1Z" />
            </svg>
        </button>
        <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
            href="{{ route('dashboard') }}">
            <img class="h-full w-full" src="/images/nilepetLogo.jpg">
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a class="text-gray-600 block py-1 px-3" href="#pablo"
                    onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="notification-dropdown">
                    <a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Action</a><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Another
                        action</a><a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Something
                        else here</a>
                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                    <a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Seprated
                        link</a>
                </div>
            </li>
            <li class="inline-block relative">
                <a class="text-gray-600 block" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
                    <div class="items-center flex">
                        <span
                            class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"><img
                                alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                src="../../assets/img/team-1-800x800.jpg" /></span>
                    </div>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="user-responsive-dropdown">
                    <a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Action</a><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Another
                        action</a><a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Something
                        else here</a>
                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                    <a href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Seprated
                        link</a>
                </div>
            </li>
        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                            href="{{ route('dashboard') }}">
                            Nile Petrolumn
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button"
                            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                            onclick="toggleNavbar('example-collapse-sidebar')">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current text-gray-400">
                                <path fill="none" d="M0 0h24v24H0V0Z" />
                                <path
                                    d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0 -.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41 .39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
                <div class="mb-3 pt-0">
                    <input type="text" placeholder="Search"
                        class="px-3 py-2 h-12 border border-solid border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
                </div>
            </form>

            <!-- Heading -->
            <h6
                class="md:min-w-full text-blue-900 text-sm uppercase font-bold block pt-1 pb-4 no-underline text-center">
                Nile Petrolumn HR System
            </h6>
            <hr class="my-1 md:min-w-full" />
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold  text-gray-700 hover:text-blue-600"
                        href="{{ route('dashboard') }}">
                        <svg class="h-6 w-6 mr-2 fill-current text-gray-400" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0Z" />
                            <path
                                d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1Zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1Zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1ZM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1Z" />
                        </svg>
                        Dashboard
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold  text-gray-800 hover:text-blue-600"
                        href="{{ route('employee') }}">
                        <svg class="h-6 w-6 mr-2 fill-current text-gray-400" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0Z" />
                            <path
                                d="M12 12.75c1.63 0 3.07.39 4.24.9 1.08.48 1.76 1.56 1.76 2.73l-.001.62c0 .55-.45 1-1 1h-10c-.55 0-1-.45-1-1v-.61c0-1.18.68-2.26 1.76-2.73 1.17-.52 2.61-.91 4.24-.91ZM4 13c1.1 0 2-.9 2-2s-.9-2-2-2 -2 .9-2 2 .9 2 2 2Zm1.13 1.1c-.37-.06-.74-.1-1.13-.1 -.99 0-1.93.21-2.78.58C.48 14.9 0 15.62 0 16.43V17c0 .55.45 1 1 1h3.5v-1.61c0-.83.23-1.61.63-2.29ZM20 13c1.1 0 2-.9 2-2s-.9-2-2-2 -2 .9-2 2 .9 2 2 2Zm4 3.43c0-.81-.48-1.53-1.22-1.85 -.85-.37-1.79-.58-2.78-.58 -.39 0-.76.04-1.13.1 .4.68.63 1.46.63 2.29V18H23c.55 0 1-.45 1-1v-.57ZM12 6c1.66 0 3 1.34 3 3s-1.34 3-3 3 -3-1.34-3-3 1.34-3 3-3Z" />
                        </svg>
                        Employees
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-600 hover:text-blue-600"
                        href="{{ route('home') }}">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <path fill="none" d="M0 0h24v24H0V0Z" />
                            <path
                                d="M15 16h3c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1h-3c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1Zm1-6h1v4h-1v-4Zm-7 6h3c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1H9c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1Zm1-6h1v4h-1v-4ZM6 8c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1s1-.45 1-1V9c0-.55-.45-1-1-1ZM2 6v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2Zm17 12H5c-.55 0-1-.45-1-1V7c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v10c0 .55-.45 1-1 1Z" />
                        </svg>
                        Payrolls
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-blue-600"
                        href="{{ route('home') }}">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <defs>
                                <path d="M0 0h24v24H0Z" id="a" />
                            </defs>
                            <g fill="none">
                                <use xlink:href="#a" />
                                <use xlink:href="#a" />
                            </g>
                            <g>
                                <path
                                    d="M17.5 4.5c-1.95 0-4.05.4-5.5 1.5 -1.45-1.1-3.55-1.5-5.5-1.5 -1.45 0-2.99.22-4.28.79C1.49 5.62 1 6.33 1 7.14v11.28c0 1.3 1.22 2.26 2.48 1.94C4.46 20.11 5.5 20 6.5 20c1.56 0 3.22.26 4.56.92 .6.3 1.28.3 1.87 0 1.34-.67 3-.92 4.56-.92 1 0 2.04.11 3.02.36 1.26.33 2.48-.63 2.48-1.94V7.14c0-.81-.49-1.52-1.22-1.85 -1.28-.57-2.82-.79-4.27-.79ZM21 17.23c0 .63-.58 1.09-1.2.98 -.75-.14-1.53-.2-2.3-.2 -1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 .92 0 1.83.09 2.7.28 .46.1.8.51.8.98v9.47Z" />
                                <path
                                    d="M13.98 11.01c-.32 0-.61-.2-.71-.52 -.13-.39.09-.82.48-.94 1.54-.5 3.53-.66 5.36-.45 .41.05.71.42.66.83 -.05.41-.42.71-.83.66 -1.62-.19-3.39-.04-4.73.39 -.08.01-.16.03-.23.03Z" />
                                <path
                                    d="M13.98 13.67c-.32 0-.61-.2-.71-.52 -.13-.39.09-.82.48-.94 1.53-.5 3.53-.66 5.36-.45 .41.05.71.42.66.83 -.05.41-.42.71-.83.66 -1.62-.19-3.39-.04-4.73.39 -.08.02-.16.03-.23.03Z" />
                                <path
                                    d="M13.98 16.33c-.32 0-.61-.2-.71-.52 -.13-.39.09-.82.48-.94 1.53-.5 3.53-.66 5.36-.45 .41.05.71.42.66.83 -.05.41-.42.7-.83.66 -1.62-.19-3.39-.04-4.73.39 -.08.02-.16.03-.23.03Z" />
                            </g>
                        </svg>
                        Timesheets
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-blue-600"
                        href="{{ route('home') }}">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <defs>
                                <path d="M0 0h24v24H0Z" id="a" />
                            </defs>
                            <g fill="none">
                                <use xlink:href="#a" />
                                <use xlink:href="#a" />
                            </g>
                            <g>
                                <path
                                    d="M13 8.57c-.79 0-1.43.64-1.43 1.43 0 .79.64 1.43 1.43 1.43 .79 0 1.43-.64 1.43-1.43 0-.79-.64-1.43-1.43-1.43Z" />
                                <path
                                    d="M13.21 3c-3.84-.11-7 2.87-7.19 6.64L4.1 12.2c-.25.33-.01.8.4.8H6v3c0 1.1.9 2 2 2h1v2c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-3.68c2.44-1.16 4.1-3.68 4-6.58 -.14-3.62-3.18-6.63-6.79-6.74ZM16 10c0 .13-.01.26-.02.39l.83.66c.08.06.1.16.05.25l-.8 1.39c-.05.09-.16.12-.24.09l-.99-.4c-.21.16-.43.29-.67.39L14 13.83c-.01.1-.1.17-.2.17h-1.6c-.1 0-.18-.07-.2-.17l-.15-1.06c-.25-.1-.47-.23-.68-.39l-.99.4c-.09.03-.2 0-.25-.09l-.8-1.39c-.05-.08-.03-.19.05-.25l.84-.66c-.01-.13-.02-.26-.02-.39s.02-.27.04-.39l-.85-.66c-.08-.06-.1-.16-.05-.26l.8-1.38c.05-.09.15-.12.24-.09l1 .4c.2-.15.43-.29.67-.39L12 6.17c.02-.1.1-.17.2-.17h1.6c.1 0 .18.07.2.17l.15 1.06c.24.1.46.23.67.39l1-.4c.09-.03.2 0 .24.09l.8 1.38c.05.09.03.2-.05.26l-.85.66c.03.12.04.25.04.39Z" />
                            </g>
                        </svg>
                        Trainings
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center" x-data="{selected:null}">
                    <x-jet-dropdown-link @click="selected !== 0 ? selected = 0 : selected = null"
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-blue-600"
                        href="#">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current text-gray-400 mr-2">
                            <path fill="none" d="M0 0h24v24H0V0Z" />
                            <g>
                                <path
                                    d="M12 8.5c-.91 0-2.75.46-2.75 1.38V14c0 .28.22.5.5.5h1v3.25c0 .69.56 1.25 1.25 1.25s1.25-.56 1.25-1.25V14.5h1c.28 0 .5-.22.5-.5V9.88c0-.91-1.84-1.38-2.75-1.38ZM12 2C6.47 2 2 6.47 2 12c0 5.53 4.47 10 10 10s10-4.48 10-10 -4.48-10-10-10Zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8 -3.58 8-8 8Z" />
                                <path d="M12 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 1 0 0-3Z" />
                            </g>
                        </svg>
                        HR
                        <svg viewBox="0 0 24 24" class="h-6 w-6 ml-5" x-show="selected ==null">
                            <path fill="none" d="M0 0h24v24H0Z" />
                            <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6Z" />
                        </svg>
                        <svg viewBox="0 0 24 24" class="h-6 w-6 ml-5" x-show="selected ==    0">
                            <path fill="none" d="M0 0h24v24H0Z" />
                            <path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14Z" />
                        </svg>
                    </x-jet-dropdown-link>
                    <ul class="md:flex-col md:min-w-full flex capitalize flex-col list-none" x-show="selected ==0">
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs flex items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('award') }}">
                                Transfer
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs flex items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('branch') }}">
                                Resignation
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs flex items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('award') }}">
                                Tips
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs flex items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('award') }}">
                                Complaints
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs flex items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('award') }}">
                                Warning
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs flex items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('award') }}">
                                Termination
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs  items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('announcement') }}">
                                Announcement
                            </x-jet-dropdown-link>
                        </li>
                    </ul>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-blue-600"
                        href="{{ route('home') }}">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <path fill="none" d="M0 0h24v24H0V0Z" />
                            <path
                                d="M20 3h-1V2c0-.55-.45-1-1-1s-1 .45-1 1v1H7V2c0-.55-.45-1-1-1s-1 .45-1 1v1H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2Zm-1 18H5c-.55 0-1-.45-1-1V8h16v12c0 .55-.45 1-1 1Z" />
                        </svg>
                        Events
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-blue-600"
                        href="{{ route('home') }}">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <path fill="none" d="M0 0h24v24H0Z" />
                            <path
                                d="M16 4c0-1.1.9-2 2-2s2 .9 2 2 -.9 2-2 2 -2-.9-2-2Zm4.78 3.58C19.93 7.21 18.99 7 18 7c-.67 0-1.31.1-1.92.28 .58.55.92 1.32.92 2.15V10h5v-.57c0-.81-.48-1.53-1.22-1.85ZM6 6c1.1 0 2-.9 2-2s-.9-2-2-2 -2 .9-2 2 .9 2 2 2Zm1.92 1.28C7.31 7.1 6.67 7 6 7c-.99 0-1.93.21-2.78.58C2.48 7.9 2 8.62 2 9.43V10h5v-.57c0-.83.34-1.6.92-2.15ZM10 4c0-1.1.9-2 2-2s2 .9 2 2 -.9 2-2 2 -2-.9-2-2Zm6 6H8v-.57c0-.81.48-1.53 1.22-1.85C10.07 7.21 11.01 7 12 7c.99 0 1.93.21 2.78.58C15.52 7.9 16 8.62 16 9.43V10Zm-1 6c0-1.1.9-2 2-2s2 .9 2 2 -.9 2-2 2 -2-.9-2-2Zm6 6h-8v-.57c0-.81.48-1.53 1.22-1.85 .85-.37 1.79-.58 2.78-.58 .99 0 1.93.21 2.78.58 .74.32 1.22 1.04 1.22 1.85V22ZM5 16c0-1.1.9-2 2-2s2 .9 2 2 -.9 2-2 2 -2-.9-2-2Zm6 6H3v-.57c0-.81.48-1.53 1.22-1.85C5.07 19.21 6.01 19 7 19c.99 0 1.93.21 2.78.58 .74.32 1.22 1.04 1.22 1.85V22Zm1.75-9v-2h-1.5v2H9l3 3 3-3h-2.25Z" />
                        </svg>
                        Meetings
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-blue-600"
                        href="{{ route('home') }}">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <path fill="none" d="M0 0h24v24H0V0Z" />
                            <path
                                d="M20 6h-8l-1.41-1.41C10.21 4.21 9.7 4 9.17 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2Zm-1 12H5c-.55 0-1-.45-1-1V9c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v8c0 .55-.45 1-1 1Z" />
                        </svg>
                        Documents
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-blue-600"
                        href="{{ route('company-policy') }}">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <path fill="none" d="M0 0h24v24H0V0Z" />
                            <path
                                d="M3 17.46v3.04c0 .28.22.5.5.5h3.04c.13 0 .26-.05.35-.15L17.81 9.94l-3.75-3.75L3.15 17.1c-.1.1-.15.22-.15.36ZM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83Z" />
                        </svg>
                        Company Policy
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center" x-data="{selected:null}">
                    <x-jet-dropdown-link @click="selected !== 0 ? selected = 0 : selected = null"
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-blue-600"
                        href="#">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <path fill="none" d="M0 0h24v24H0V0Z" />
                            <g>
                                <path
                                    d="M20.71 7.98L16.03 3.3c-.19-.19-.45-.3-.71-.3H8.68c-.26 0-.52.11-.7.29L3.29 7.98c-.18.18-.29.44-.29.7v6.63c0 .27.11.52.29.71l4.68 4.68c.19.19.45.3.71.3h6.63c.27 0 .52-.11.71-.29l4.68-4.68c.19-.19.29-.44.29-.71V8.68c.01-.26-.1-.52-.28-.7ZM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8Z" />
                                <path d="M12 15a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" />
                                <path d="M12 7c-.55 0-1 .45-1 1v5c0 .55.45 1 1 1s1-.45 1-1V8c0-.55-.45-1-1-1Z" />
                            </g>
                        </svg>
                        Constants
                        <svg viewBox="0 0 24 24" class="h-6 w-6 ml-5" x-show="selected ==null">
                            <path fill="none" d="M0 0h24v24H0Z" />
                            <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6Z" />
                        </svg>
                        <svg viewBox="0 0 24 24" class="h-6 w-6 ml-5" x-show="selected ==    0">
                            <path fill="none" d="M0 0h24v24H0Z" />
                            <path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14Z" />
                        </svg>
                    </x-jet-dropdown-link>
                    <ul class="md:flex-col md:min-w-full flex capitalize flex-col list-none" x-show="selected ==0">
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs flex items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('award') }}">
                                Award
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs flex items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('branch') }}">
                                Branch
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs  items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('department') }}">
                                Department
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs  items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('designation') }}">
                                Designation
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs  items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('training-type') }}">
                                Training Type
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs  items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('allowance-type') }}">
                                Allowance Type
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs  items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('leave-type') }}">
                                Leave Type
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs  items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('document-type') }}">
                                Document Type
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs  items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('meeting-type') }}">
                                Meeting Type
                            </x-jet-dropdown-link>
                        </li>
                        <li class="items-center ml-8">
                            <x-jet-dropdown-link
                                class="text-xs  items-center  py-3 font-bold block text-gray-700 hover:text-blue-600"
                                href="{{ route('paysheet-type') }}">
                                Paysheet Type
                            </x-jet-dropdown-link>
                        </li>
                    </ul>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-pink-600"
                        href="{{ route('home') }}">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <path fill="none" d="M0 0h24v24H0Z" />
                            <g>
                                <path
                                    d="M14.02 13.97l1.7-2.94s-.09-.08-.23-.18l-1.47-1.16 -.01.02c.03-.24.05-.47.05-.71s-.02-.47-.06-.69l.01.01 1.71-1.34 -1.7-2.95 -2.01.81v.01c-.37-.28-.77-.52-1.2-.7h.01L10.52 2H7.11L6.8 4.15h.01c-.43.18-.83.42-1.2.7v-.01L3.6 4.03 1.9 6.98l1.7 1.34 .01-.01c-.03.22-.05.45-.05.69 0 .24.02.47.05.71l-.01-.02 -1.47 1.16c-.13.1-.23.18-.23.18l1.7 2.94 2.02-.8 -.02-.03c.37.29.77.53 1.21.71H6.8L7.11 16h3.4s.02-.13.04-.3l.27-1.85h-.01c.44-.18.84-.42 1.21-.71l-.02.03 2.02.8ZM8.81 11c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2 -.9 2-2 2Z" />
                                <path
                                    d="M20.98 17.94l-.01.01c.02-.15.03-.3.03-.45 0-.15-.01-.3-.04-.44l.01.01 1.1-.86 -1.09-1.9 -1.29.52v.01c-.24-.18-.49-.33-.77-.45h.01l-.2-1.39h-2.19l-.2 1.38h.01c-.28.12-.53.27-.77.45v-.01l-1.29-.52 -1.09 1.9 1.09.86 .01-.01c-.02.14-.03.29-.03.44 0 .15.01.3.03.46l-.01-.01 -.94.75c-.08.06-.15.12-.15.12l1.09 1.89 1.3-.51 -.01-.02c.24.19.5.34.78.46h-.01l.2 1.38h2.19s.01-.08.03-.19l.17-1.19h-.01c.28-.12.54-.27.78-.46l-.01.02 1.3.51 1.09-1.89s-.06-.05-.15-.12l-.96-.75Zm-3.35.85c-.71 0-1.29-.58-1.29-1.29 0-.71.58-1.29 1.29-1.29 .71 0 1.29.58 1.29 1.29 0 .71-.58 1.29-1.29 1.29Z" />
                            </g>
                        </svg>
                        Setting
                    </x-jet-dropdown-link>
                </li>
                <li class="items-center">
                    <x-jet-dropdown-link
                        class="text-xs flex items-center uppercase py-3 font-bold block text-gray-800 hover:text-pink-600"
                        href="{{ route('home') }}">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-gray-400">
                            <path fill="none" d="M0 0h24v24H0V0Z" />
                            <path
                                d="M21 2h-6.18C14.4.84 13.3 0 12 0c-1.3 0-2.4.84-2.82 2H3v20h18V2Zm-9 0c.55 0 1 .45 1 1s-.45 1-1 1 -1-.45-1-1 .45-1 1-1Zm7 18H5V4h2v3h10V4h2v16Z" />
                        </svg>
                        Reports
                    </x-jet-dropdown-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
