<div>
    <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <div id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen"
            aria-controls="sidebar" :aria-expanded="sidebarOpen">
            <span class="sr-only">Close sidebar</span>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
            </svg>
        </button>
        <a class="block" href="{{ route('home') }}">
            <img class="w-14" src="{{ asset('img/LogoSidebar.png') }}" alt="logo">
        </a>

        {{-- routes --}}
        <div class="space-y-8">
            <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6" aria-hidden="true">•••</span>
                <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span>
            </h3>
            <ul class="mt-3">
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="page === '/' && 'bg-slate-900'">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150" :class="page === 'home' && 'hover:text-slate-200'" href="{{ route('home', ['id'=>1]) }}">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-slate-600" :class="page === 'home' && 'text-indigo-500'" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                <path class="fill-current text-slate-400" :class="page === 'home' && 'text-indigo-300'" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Inbox</span>
                        </div>
                    </a>
                </li>
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="page === 'home' && 'bg-slate-900'">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150" :class="page === 'home' && 'hover:text-slate-200'" href="{{ route('home') }}">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-slate-600" :class="page === 'home' && 'text-indigo-500'" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                <path class="fill-current text-slate-400" :class="page === 'home' && 'text-indigo-300'" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Inbox</span>
                        </div>
                    </a>
                </li>
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="page === 'home' && 'bg-slate-900'">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150" :class="page === 'home' && 'hover:text-slate-200'" href="{{ route('home', ['id'=>1]) }}">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-slate-600" :class="page === 'home' && 'text-indigo-500'" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                <path class="fill-current text-slate-400" :class="page === 'home' && 'text-indigo-300'" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Inbox</span>
                        </div>
                    </a>
                </li>
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="page === 'home' && 'bg-slate-900'">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150" :class="page === 'home' && 'hover:text-slate-200'" href="{{ route('home', ['id'=>1]) }}">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-slate-600" :class="page === 'home' && 'text-indigo-500'" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                <path class="fill-current text-slate-400" :class="page === 'home' && 'text-indigo-300'" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Inbox</span>
                        </div>
                    </a>
                </li>
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="page === 'home' && 'bg-slate-900'">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150" :class="page === 'home' && 'hover:text-slate-200'" href="{{ route('home', ['id'=>1]) }}">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-slate-600" :class="page === 'home' && 'text-indigo-500'" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                <path class="fill-current text-slate-400" :class="page === 'home' && 'text-indigo-300'" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Inbox</span>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- Expand / collapse button -->
            <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
                <div class="px-3 py-2">
                    <button @click="sidebarExpanded = !sidebarExpanded">
                        <span class="sr-only">Expand / collapse sidebar</span>
                        <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                            <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                            <path class="text-slate-600" d="M3 23H1V1h2z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
