@extends('layouts.app')
<title>{{ $title }} | {{ config('app.name') }} </title>
@section('content')
    <div class="content-layout">
        <div class="container">
            <div class="headings">
                <h2>Contact <span>Us</span></h2>
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
                                    Mannheim, Germany
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
                                    service@badroufy.dev
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
                            <h3 class="text-left text-3xl custom-blue-color-1">Send me a Message</h3>
                            <p class="mt-2 text-sm">
                                I am here to help! For questions, support, or just a hello, use the form below. I
                                will respond promptly. Contact details and location are also provided for direct
                                communication.
                            </p>
                            <div class="working-hours border-t pt-4 mt-8">
                                <h3 class="custom-blue-color-1 text-lg">Office Hours</h3>
                                <p class="text-sm">Monday - Saturday: 9:00 AM - 6:00 PM</p>
                                <p class="text-sm">Sunday: Closed</p>
                            </div>
                        </div>
                        <form class="mb-6 w-1/2 flex flex-col justify-center">
                            <div class="mb-3">
                                <label for="name" class="block mb-1 text-sm">Name  <span>*</span></label>
                                <input type="text" name="name" required id="title" placeholder="Ex. Ali"
                                    class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-full">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="block mb-1 text-sm">Email  <span>*</span></label>
                                <input type="email" name="email" required id="email" placeholder="Your Email"
                                    class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-full">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="block mb-1 text-sm">Phone  <span>*</span></label>
                                <input type="tel" name="phone" required id="phone" placeholder="Ex. +224 ..xxx.."
                                    class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-full">
                            </div>
                            <div class="mb-3">
                                <label for="subject_id" class="block mb-1 text-sm">Subject  <span>*</span></label>
                                <select name="subject_id" id="subject_id"
                                    class="w-full h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700"
                                    required>
                                    <option value="" class="text-gray-500"></option>
                                    <option value="1" class="text-gray-900">Web Development Project</option>
                                    <option value="9" class="text-gray-900">Consultation</option>
                                    <option value="5" class="text-gray-900">Power BI Project</option>
                                    <option value="7" class="text-gray-900">Other</option>
                                    <option value="8" class="text-gray-900">Collaboration</option>
                                    <option value="6" class="text-gray-900">Microsoft Power Platform Project</option>
                                    <option value="2" class="text-gray-900">PowerApps Project</option>
                                    <option value="3" class="text-gray-900">Power Automate Project</option>
                                    <option value="7" class="text-gray-900">Other Project</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="block mb-1 text-sm">Message <span>*</span></label>
                                <textarea id="message" name="message" rows="4" placeholder="Your Detailed Message"
                                    class="font-light block p-2.5 w-full focus:outline-none focus:ring-2 focus:ring-blue-700 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50"
                                    required>
										</textarea>
                            </div>
                            <div>
                                <button type="submit"
                                    class="px-4 py-2 text-white custom-blue-color  rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                                    Save
                                </button>
                            </div>

                        </form>


                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
