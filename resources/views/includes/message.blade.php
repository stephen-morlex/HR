@if (session()->has('message'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
        class="my-2 rounded-r-md px-6 border-l-4 -ml-4 border-green-800 shadow-md bg-green-200 ransition ease-in-out duration-700 z-50 absolute">
        <div class="flex items-center py-4">
            <svg viewBox="0 0 24 24" class="h-6 w-6 mr-2 fill-current text-green-900">
                <path fill="none" d="M0 0h24v24H0V0Z" />
                <path
                    d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2Zm-3 12H7c-.55 0-1-.45-1-1s.45-1 1-1h10c.55 0 1 .45 1 1s-.45 1-1 1Zm0-3H7c-.55 0-1-.45-1-1s.45-1 1-1h10c.55 0 1 .45 1 1s-.45 1-1 1Zm0-3H7c-.55 0-1-.45-1-1s.45-1 1-1h10c.55 0 1 .45 1 1s-.45 1-1 1Z" />
            </svg>
            <div class="ml-5">
                <h1 class="text-lg font-bold text-green-900">Well done!</h1>
                <p class="text-green-800 my-0"> {{ session('message') }}</p>
            </div>
            <div>
                <button type="button" @click="show = false" class=" text-green-800">
                    <span class="text-2xl">&times;</span>
                </button>
            </div>
        </div>
    </div>

@endif
