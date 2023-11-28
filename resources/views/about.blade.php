@extends('layouts.app')

@section('title', 'About me')

@section('content')
    <section class="w-full lg:w-5/6 mx-auto flex justify-center items-center">
        <div class="text-center">
            <div class="flex justify-center lg:justify-start xs:ml-8">
                <h3 class="leading-8 font-extrabold text-transparent text-5xl lg:text-7xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    About me
                </h3>
            </div>

            <div class="my-auto">
                <p class="text-2xl lg:text-3xl font-medium dark:font-light pt-4 lg:pt-10 leading-12 text-justify text-gray-500 dark:text-gray-400">
                    I am a
                    <span class="text-2xl lg:text-3xl text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                        Consultant, Software Architect, Software Engineer and Security Researcher
                    </span>
                    with over a decade of experience building high performance applications for a wide range of industries.
                    My dedication to writing high-quality code has led
                    me to implement architectural improvements on multiple projects, ensuring security,
                    stability, and scalability at every turn.
                </p>

                <p class="hidden lg:block lg:text-3xl font-medium dark:font-light lg:pt-10 lg:leading-1 text-justify text-gray-500 dark:text-gray-400">
                    My primary goal is to assist companies in scaling their development teams and products.
                    I aim to achieve this by proposing and implementing architectural decisions tailored to
                    each company's specific needs, with a special emphasis on leveraging AI technologies.
                </p>
            </div>
        </div>
    </section>
@endsection
