@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <section class="w-full lg:w-5/6 mx-auto flex justify-center items-center">
        <div class="text-center mt-20 sm:mt-2">
            <div class="flex justify-center lg:justify-start">
                <h3 class="leading-8 font-extrabold pb-6 md:pb-4 text-transparent text-4xl md:text-5xl lg:text-7xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    Blog
                </h3>
            </div>

            <div class="space-y-4 mt-6 md:mt-0">
                <div class="mx-auto mt-4 md:mt-8 max-w-lg gap-5 lg:max-w-none lg:grid lg:grid-cols-2">
                    @include('components.article-card', [
                        'tags' => ['Laravel', 'Testing'],
                        'title' => 'Building an API using TDD in Laravel',
                        'excerpt' => "The purpose of this article is to show that TDD doesn't have to be hard or be a pain to include it as part of your workflow or your team's...",
                        'date' => '14 Oct, 2021',
                        'readTime' => '21',
                        'link' => 'https://laravel.io/articles/building-an-api-using-tdd-in-laravel',
                        'display' => '1',
                    ])

                    @include('components.article-card', [
                        'tags' => ['Laravel', 'Vue3', 'TypeScript', 'Inertia.js'],
                        'title' => "Enhancing Laravel and Inertia.js with TypeScript and Vue 3's Composition API to build a Powerful SPA",
                        'excerpt' => "Laravel, when combined with Inertia.js, offers a powerful duo for creating modern single-page applications that rival the complexity of....",
                        'date' => '6 Nov, 2023',
                        'readTime' => '5',
                        'link' => 'https://laravel.io/articles/enhancing-laravel-and-inertiajs-with-typescript-and-vue-3s-composition-api-to-build-a-powerful-spa',
                        'display' => '2',
                    ])
                </div>
            </div>
        </div>
    </section>
@endsection


@section('meta')
    <meta name="robots" content="index, follow">

    <!-- Canonical Link Tag -->
    <link rel="canonical" href="https://alberto-rosas.dev/blog">

    <!-- Open Graph/Facebook Meta Tags -->
    <meta property="og:title" content="Alberto Rosas's Blog | Software Engineer">
    <meta property="og:description" content="Software Engineer and Consultant Alberto Rosas.">
    <meta property="og:url" content="https://alberto-rosas.dev/blog">
    {{--<meta property="og:image" content="https://alberto-rosas.dev/images/og-image.jpg">--}}
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    {{--<meta name="twitter:card" content="summary_large_image">--}}
    <meta name="twitter:title" content="Alberto Rosas's Blog | Software Engineer">
    <meta name="twitter:description" content="Software Engineer and Consultant Alberto Rosas.">
    <meta name="twitter:url" content="https://alberto-rosas.dev/blog">
    {{--    <meta name="twitter:image" content="https://alberto-rosas.dev/images/twitter-image.jpg">--}}
    <meta name="twitter:site" content="@bcryp7">

    <!-- LinkedIn Meta Tags -->
    <meta property="og:title" content="Alberto Rosas's Blog | Software Engineer">
    <meta property="og:description" content="Software Engineer and Consultant Alberto Rosas.">
    <meta property="og:url" content="https://alberto-rosas.dev/blog">
    {{--    <meta property="og:image" content="https://alberto-rosas.dev/images/linkedin-image.jpg">--}}
    <meta property="og:type" content="website">
@endsection
