<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body
        class="font-inter antialiased bg-slate-100 text-slate-600"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ page: 'dashboard-main', sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
    >

        <script>
            if (localStorage.getItem('sidebar-expanded') == 'true') {
                document.querySelector('body').classList.add('sidebar-expanded');
            } else {
                document.querySelector('body').classList.remove('sidebar-expanded');
            }
        </script>

        <x-jet-banner />

        <div class="flex h-screen overflow-hidden">
            @livewire('sidebar')
            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
                @livewire('navigation-menu')
                <!-- Page Content -->
                <main>
                    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                        @if (isset($header))
                        <header class="relative">
                            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-1">
                                {{ $header }}
                            </h1>
                        </header>
                        @endif
                        <main>
                            {{ $slot }}
                        </main>
                    </div>
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
