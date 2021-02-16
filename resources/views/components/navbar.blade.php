<nav
    class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4">
    <div class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
        <div>
            <ol class="list-reset flex text-white">
                <li><a href="/dashboard" class="text-blue">Dashboard</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="text-blue font-bold">{{ $page }}</a></li>
            </ol>
        </div>
        <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
            <div class="relative flex w-full flex-wrap items-stretch">
                <span
                    class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                        class="fas fa-search"></i></span>
                <input type="text" placeholder="Search here..."
                    class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10">
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
                    class="flex items-center text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">
                    <svg viewBox="0 0 24 24"
                        class="h-6 w-6 mr-2 fill-current text-blue-600 bg-blue-50 p-1 rounded-full">
                        <path fill="none" d="M0 0h24v24H0V0Z" />
                        <path
                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4C9.79 4 8 5.79 8 8c0 2.21 1.79 4 4 4Zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4Z" />
                    </svg>
                    Profile
                </a>
                <a href=""
                    class=" flex items-center text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">
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
                    class="flex items-center text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-red-600 bg-red-50 p-1 rounded-full">
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
