@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <section class="w-full lg:w-5/6 mx-auto flex justify-center items-center">
        <div class="text-center">
            <div class="flex justify-center lg:justify-start">
                <h3 class="leading-8 font-extrabold text-transparent text-5xl lg:text-7xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    Services
                </h3>
            </div>

            <div class="pt-8 my-auto space-y-4">
                <div class="items-center flex justify-between shadow-xl bg-gray-800 w-full pr-8 rounded-lg border-2 border-[#EE49FD]">
                    <h3 class="cursor-pointer py-6 pb-4 leading-6 font-extrabold text-transparent text-xl lg:text-3xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                        Custom app development
                    </h3>
                    <p class="w-full mx-auto text-justify text-xl py-3 lg:pt-4 leading-18 text-gray-400 font-light">
                        Crafting tailored applications to precisely meet your unique needs. My specialty lies in creating bespoke solutions aligned with your specific requirements and objectives. From concept to deployment, I'm committed to delivering customized app development services that elevate your business operations.
                    </p>
                </div>

                <div class="items-center flex justify-between shadow-xl bg-gray-800 w-full pr-8 rounded-lg border-2 border-[#EE49FD]">
                    <h3 class="cursor-pointer py-6 pb-4 pl-12 pr-12 leading-6 font-extrabold text-transparent text-xl lg:text-3xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                        Consultancy
                    </h3>
                    <p class="w-full mx-auto text-justify text-xl py-3 lg:pt-4 leading-18 text-gray-400 font-light">
                        Excel in designing cutting-edge web and mobile applications with superior functionality and business impact. Whether initiating a new project or enhancing an existing app, I bring the expertise needed for success. Dedicated to guiding you from concept to deployment, I collaborate to deliver streamlined digital solutions unlocking your business potential.
                    </p>
                </div>

                <div class="items-center flex justify-between shadow-xl bg-gray-800 w-full pr-8 rounded-lg border-2 border-[#EE49FD]">
                    <h3 class="cursor-pointer py-6 pb-4 pl-12 pr-3 text-start leading-6 font-extrabold text-transparent text-xl lg:text-3xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                        Security Assessment
                    </h3>
                    <p class="w-full mx-auto text-justify text-xl py-3 lg:pt-4 leading-18 text-gray-400 font-light">
                        Detecting and mitigating risks in web apps and diverse services. Specialized in vulnerability assessments, code inspections, and DevSecOps. I contribute to implementing resilient security practices across the development lifecycle, ensuring robust protection for your digital assets.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
