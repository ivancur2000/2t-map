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

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-inter antialiased bg-slate-100 text-slate-600">
        <main class="bg-white">
            <div class="relative flex">
                <div class="w-full md:w-1/2">
                    {{ $slot }}
                </div>
                <div class="hidden md:block  top-0 bottom-0 right-0 md:w-1/2 auth-bg fixed"></div>
            </div>
        </main>
    </body>
</html>
