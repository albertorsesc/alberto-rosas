<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Software Engineer Alberto Rosas's site.">
    <meta name="keywords" content="software engineer, consultant, software architect, web security">
    <meta name="author" content="Alberto Rosas">

    <title>@yield('title', 'Welcome') | Alberto Rosas</title>

    @yield('meta')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H1NBRRQX1S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-H1NBRRQX1S');
    </script>
</head>
<body class="antialiased">
<div class="relative sm:p-8 p-4 bg-[#13131a] min-h-screen sm:flex flex-row">
    <div class="sm:flex mr-10 lg:ml-6 my-auto">
        @include('components.sidebar')
    </div>

    <div class="flex-1 max-w-[1280px] mx-auto sm:my-auto sm:pr-5">
        @yield('content')
    </div>
</div>
</body>
</html>
