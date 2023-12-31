@extends('layouts.app')

@section('title', 'About me')

@section('content')
    <section class="w-full lg:w-5/6 lg:mx-auto md:flex md:justify-center items-center mt-20 sm:mt-0">
        <div class="text-center">
            <div class="flex justify-center lg:justify-start xs:ml-8">
                <h3 class="leading-8 font-extrabold text-transparent text-2xl sm:text-4xl lg:text-7xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    About me
                </h3>
            </div>

            <div class="sm:my-auto">
                <p class="text-lg xs:text-xl lg:text-3xl font-medium dark:font-light pt-4 lg:pt-10 leading-12 text-justify text-gray-500 dark:text-gray-400">
                    I am a
                    <span class="text-lg xs:text-xl lg:text-3xl text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                        Consultant, Software Architect, Software Engineer and Security Researcher
                    </span>
                    with over a decade of experience building high performance applications for a wide range of industries.
                    My dedication to writing high-quality code has led
                    me to implement architectural improvements on multiple projects, ensuring security,
                    stability, and scalability at every turn.
                </p>

                <p class="sm:hidden lg:block text-lg xs:text-xl lg:text-3xl font-light pt-4 lg:pt-10 leading-12 text-justify text-gray-400">
                    My primary goal is to assist companies in scaling their development teams and products.
                    I aim to achieve this by proposing and implementing architectural decisions tailored to
                    each company's specific needs, with a special emphasis on leveraging AI technologies.
                </p>
            </div>
        </div>
    </section>
@endsection

@section('meta')
    <meta name="robots" content="index, follow">

    <!-- Canonical Link Tag -->
    <link rel="canonical" href="https://alberto-rosas.dev/about">

    <!-- Open Graph/Facebook Meta Tags -->
    <meta property="og:title" content="About Alberto Rosas | Software Engineer">
    <meta property="og:description" content="Software Engineer and Consultant Alberto Rosas.">
    <meta property="og:url" content="https://alberto-rosas.dev/about">
    {{--<meta property="og:image" content="https://alberto-rosas.dev/images/og-image.jpg">--}}
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    {{--<meta name="twitter:card" content="summary_large_image">--}}
    <meta name="twitter:title" content="About Alberto Rosas | Software Engineer">
    <meta name="twitter:description" content="Software Engineer and Consultant Alberto Rosas.">
    <meta name="twitter:url" content="https://alberto-rosas.dev/about">
    {{--    <meta name="twitter:image" content="https://alberto-rosas.dev/images/twitter-image.jpg">--}}
    <meta name="twitter:site" content="@bcryp7">

    <!-- LinkedIn Meta Tags -->
    <meta property="og:title" content="About Alberto Rosas | Software Engineer">
    <meta property="og:description" content="Software Engineer and Consultant Alberto Rosas.">
    <meta property="og:url" content="https://alberto-rosas.dev/about">
    {{--    <meta property="og:image" content="https://alberto-rosas.dev/images/linkedin-image.jpg">--}}
    <meta property="og:type" content="website">
@endsection
