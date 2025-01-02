@extends('layouts.app')
<title>{{ $title }} | {{ config('app.name') }} </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
            <div class="headings">
                <h2>Browse my <span>Services</span></h2>
            </div>
            <div class="service-desc">
                <p class="italic text-xl text-gray-700">
                    "Tailored to fit your digital needs, contact us and get your" <a href="#"
                        class="underline quoteBtn">free
                        quote today</a>
                </p>
            </div>
        </div>
        <div class="service-card-container mb-16 ">
            <div class="flex justify-between gap-1 mobile">
                <div class="service-box cursor-pointer rounded-lg shadow-sm p-3 border border-gray-200">
                    <div class="service-header flex items-center space-x-1">
                        <div class="custom-blue-color p-2 rounded-full">
                            <i class="text-white fa-solid fa-pen-ruler"></i>
                        </div>
                        <h3 class="text-lg font-bold">Custom Solutions</h3>
                    </div>
                    <p class="mt-4 text-gray-800">Tailored to fit your unique business needs with precision.</p>
                </div>

                <div class="service-box cursor-pointer rounded-lg shadow-sm p-3 border border-gray-200">
                    <div class="service-header flex items-center space-x-1">
                        <div class="bg-pink-500 p-2 rounded-full">
                            <i class="text-white fa-solid fa-people-roof"></i>
                        </div>
                        <h3 class="text-lg font-bold">Partnerships</h3>
                    </div>
                    <p class="mt-4 text-gray-800">
                        Supporting your growth with reliable, ongoing collaboration.
                    </p>
                </div>

                <div class="service-box cursor-pointer rounded-lg shadow-sm p-3 border border-gray-200">
                    <div class="service-header flex items-center space-x-1">
                        <div class="bg-gray-500 p-2 rounded-full">
                            <i class="text-white fa-solid fa-user-tie"></i>
                        </div>
                        <h3 class="text-lg font-bold">UI/UX Oriented</h3>
                    </div>
                    <p class="mt-4 text-gray-800">
                        Advanced technology paired with a personal, client-focused approach.
                    </p>
                </div>

                <div class="service-box cursor-pointer rounded-lg shadow-sm p-3 border border-gray-200">
                    <div class="service-header flex items-center space-x-1">
                        <div class="bg-green-600 p-2 rounded-full">
                            <i class="text-white fa-solid fa-headset"></i>
                        </div>
                        <h3 class="text-lg font-bold">24/7 Support</h3>
                    </div>
                    <p class="mt-4 text-gray-800">Always available, ensuring your business runs smoothly at all
                        times.</p>
                </div>

            </div>

        </div>
        @include('inc.services-section')
        @include('inc.testimonials')
    </div>
@endsection
