<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alberto Rosas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
    <div class="relative sm:p-8 p-4 bg-[#13131a] min-h-screen flex flex-row">
        <div class="sm:flex hidden mr-10 relative ml-6">
            {{--Sidebar--}}
            @include('components.sidebar')
        </div>

        <div class="flex-1 max-sm:w-full max-w-[1280px] mx-auto sm:pr-5">
            @include('components.hero')
        </div>
    </div>
    </body>
</html>
