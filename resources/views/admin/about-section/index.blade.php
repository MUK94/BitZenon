@extends('layouts.admin')
<title>{{ $title }} | Admin</title>
@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>
        <form method="POST" action="{{ route('about-section.store') }}" enctype="multipart/form-data"
            class="w-full flex flex-col justify-betwen gap-2 bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
            @csrf

            <div class="my-4 flex justify-between gap-3 w-full">
                <div class="mb-1 w-1/2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Start Up</label>
                    <textarea id="message" name="intro" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700  text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">
							</textarea>
                </div>
                <div class="mb-1 w-1/2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Mission</label>
                    <textarea id="message" name="mission" rows="4"
                        class="font-light  block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700  text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">
							</textarea>
                </div>
            </div>
            <div class="my-4 flex justify-between gap-3 w-full">
                <div class="mb-1 w-1/2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Expertise</label>
                    <textarea id="message" name="expertise" rows="4"
                        class=" font-light  block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700  text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">
							</textarea>
                </div>
                <div class="mb-1 w-1/2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Why Choose Us?</label>
                    <textarea id="message" name="goal" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700  text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">
							</textarea>
                </div>

            </div>
            <div>
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color  rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    Save
                </button>
            </div>
        </form>

        {{-- table  --}}
        <div class="py-6 my-6 w-full">
            <h2 class="font-bold text-center text-xl">Current About Section</h2>
            <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full bg-white overflow-hidden align-middle border-b border-gray-200 shadow-sm rounded">
                        <table class="min-w-full font-light text-sm">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200">
                                        Start-Up
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200">
                                        Mission
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200">
                                        Expertise
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200">
                                        Why Choose Us
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200">

                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($aboutSection as $about)
                                    <tr>
                                        <td class="px-2 pt-2 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $about->intro }}
                                            </div>
                                        </td>
                                        <td class="px-2 pt-2 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $about->mission }}
                                            </div>
                                        </td>
                                        <td class="px-2 pt-2 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $about->expertise }}
                                            </div>
                                        </td>
                                        <td class="px-2 pt-2 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $about->goal }}
                                            </div>
                                        </td>
                                        <td
                                            class="px-2 pt-2 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                            <form action="{{ route('about-section.destroy', $about->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900">Delete</button>
                                            </form>
                                        </td>
                                        <td
                                            class="pr-4 pt-2 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                            <a href="{{ route('about-section.edit', $about->id) }}"
                                                class="text-green-600 hover:text-green-900">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
