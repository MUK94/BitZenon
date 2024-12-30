@extends('layouts.app')
<title>{{ $title }} | {{ config('app.name') }} </title>
@section('content')
    <div class="content-layout">
        <div class="container">
            <div class="headings">
                <h2>Contact <span>me</span></h2>
            </div>
            <div class="">
                <div class="flex gap-2 items-center">
                    <div class="my-8  w-full">
                        <div class="custom-blue-color rounded p-4 flex items-center flex-col ">
                            <i class="mb-2 text-3xl text-white fa-solid fa-phone"></i>
                            <div class="flex flex-col items-center">
                                <h3 class="mb-2 font-bold text-2xl text-gray-300">
                                    Call me
                                </h3>
                                <p class="text-gray-200">
                                    +49 1784608200
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="my-8 w-full ">
                        <div class="custom-blue-color rounded p-4 flex items-center flex-col">
                            <i class="mb-2 text-3xl text-white fa-solid fa-map-location"></i>
                            <div class="flex flex-col items-center">
                                <h3 class="mb-2 font-bold text-2xl text-gray-300 ">
                                    Address
                                </h3>
                                <p class="text-gray-200">
                                    Baden Württemberg, Germany
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="my-8 w-full ">
                        <div class="custom-blue-color rounded p-4 flex items-center flex-col">
                            <i class="mb-2 text-3xl text-white fa-solid fa-envelope-open-text"></i>
                            <div class="flex flex-col items-center ">
                                <h3 class="mb-2 font-bold text-2xl text-gray-300">Email</h3>
                                <p class="text-gray-200">
                                    {{ 'service@' . strtolower(config('app.name')) . '.com' }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container my-4 mx-auto">
                <section class="mb-4">
                    <div class="flex justify-between gap-16">
                        <div class="form-details w-1/2">
                            <h3 class="text-left text-3xl custom-blue-color-1">Message me</h3>
                            <p class="mt-2">
                                I am here to help! For questions, support, or just a hello, use the form below. I
                                will respond promptly. Contact details and location are also provided for direct
                                communication.
                            </p>
                            <div class="working-hours border-t pt-4 mt-8">
                                <h3 class="mb-2 custom-blue-color-1 text-3xl">Office Hours</h3>
                                <p>Monday - Saturday: 9:00 AM - 6:00 PM</p>
                                <p>Sunday: Closed</p>
                            </div>
                        </div>

                        {{-- Contact Form --}}

                        <div class="mb-6 w-1/2 flex flex-col justify-center">
                            @if (session('success'))
                                <div class="alert alert-success bg-green-200 text-green-800 p-2 rounded mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('pages.submit') }}" method="POST"
                                class="mb-6 w-full flex flex-col justify-center">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="block mb-1">Name <span
                                            class="field-required">*</span></label>
                                    <input type="text" name="name" required id="name" placeholder="Ex. Ali"
                                        class="mt-1 p-2 block focus:outline-none focus:ring-2 text-gray-600 focus:ring-blue-700 border border-gray-300 rounded-md w-full">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="block mb-1">Email <span
                                            class="field-required">*</span></label>
                                    <input type="email" name="email" required id="email" placeholder="Your Email"
                                        class="mt-1 p-2 block focus:outline-none focus:ring-2 text-gray-600 focus:ring-blue-700 border border-gray-300 rounded-md w-full">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="block mb-1">Phone <span
                                            class="field-required">*</span></label>
                                    <input type="tel" name="phone" id="phone" required
                                        placeholder="Ex. +224 ..xxx.."
                                        class="mt-1 p-2 block focus:outline-none focus:ring-2 text-gray-600 focus:ring-blue-700 border border-gray-300 rounded-md w-full">
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="block mb-1">Subject <span
                                            class="field-required">*</span></label>
                                    <select name="subject" id="subject"
                                        class="w-full h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 text-gray-600 focus:ring-blue-700"
                                        required>
                                        <option value="Web Development Project" class="text-gray-600">Web Development
                                            Project</option>
                                        <option value="PowerApps Project" class="text-gray-600">PowerApps Project</option>
                                        <option value="Power Automate Project" class="text-gray-600">Power Automate Project
                                        </option>
                                        <option value="Consultation" class="text-gray-600">Consultation</option>
                                        <option value="Power BI Project" class="text-gray-600">Power BI Project</option>
                                        <option value="Fabric Project" class="text-gray-600">Fabric Project</option>
                                        <option value="Collaboration" class="text-gray-600">Collaboration</option>
                                        <option value="Other" class="text-gray-600">Other</option>
                                    </select>
                                </div>
                                <div class="mb-4 flex flex-col">
                                    <label for="message" class="block text-gray-700">Message <span
                                            class="field-required">*</span></label>
                                    <textarea name="message" id="message" placeholder="Your Message" required rows="6"
                                        class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 text-gray-600 focus:ring-blue-700"></textarea>
                                </div>

                                <!-- Google Recaptcha Widget-->
                                <div class="g-recaptcha mt-4" data-sitekey={{ config('services.recaptcha.key') }}></div>

                                <div>

                                    <button type="submit"
                                        class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
