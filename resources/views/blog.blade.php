@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <section class="w-full lg:w-5/6 mx-auto flex justify-center items-center">
        <div class="text-center">
            <div class="flex justify-center lg:justify-start">
                <h3 class="leading-8 font-extrabold text-transparent text-5xl lg:text-7xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    Blog
                </h3>
            </div>

            <div class="my-auto space-y-4">
                <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-2">
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
