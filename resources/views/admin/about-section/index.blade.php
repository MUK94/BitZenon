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
                    <label for="name" class="block mb-1">Name</label>
                    <input type="text" name="name" required id="name"
                        class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                </div>
                <div class="mb-1 w-1/2">
                    <label for="title" class="block mb-1">Titre</label>
                    <input type="text" name="title" required id="title"
                        class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                </div>
            </div>

            <div class="my-4 flex justify-between gap-3 w-full">

                <div class="mb-1 w-1/2">
                    <label for="intro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                        Up</label>
                    <textarea id="intro" name="intro" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700  text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">
                    </textarea>
                </div>
                <div class="mb-1 w-1/2">
                    <label for="mission"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mission</label>
                    <textarea id="mission" name="mission" rows="4"
                        class="font-light  block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700  text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">
                    </textarea>
                </div>
            </div>

            <div class="my-4 flex justify-between gap-3 w-full">
                <div class="mb-1 w-1/2">
                    <label for="expertise"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expertise</label>
                    <textarea id="expertise" name="expertise" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700  text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">
                    </textarea>
                </div>
                <div class="mb-1 w-1/2">
                    <label for="goal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Why Choose
                        Us?</label>
                    <textarea id="goal" name="goal" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700  text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">
                    </textarea>
                </div>
            </div>

            <!-- New fields for Image and Description -->
            <div class="my-4 flex justify-between gap-3 w-full">
                <div class="mb-1 w-1/2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" name="description" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700  text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">
                    </textarea>
                </div>
                <div class="mb-1 w-1/2">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                    <input type="file" name="image" id="image"
                        class="h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700"
                        required>
                </div>
            </div>

            <div>
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color  rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    Save
                </button>
            </div>
        </form>

        {{-- Table --}}
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
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase border-b border-gray-200">
                                        Name
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase border-b border-gray-200">
                                        Title
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase border-b border-gray-200">
                                        Start-Up
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase border-b border-gray-200">
                                        Mission
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase border-b border-gray-200">
                                        Expertise
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase border-b border-gray-200">
                                        Why Choose Us
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase border-b border-gray-200">
                                        Description
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase border-b border-gray-200">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($aboutSection as $about)
                                    <tr>
                                        <td class="px-2 pt-2 border-b border-gray-200">
                                            <div class="text-sm text-gray-900">
                                                @excerpt($about->name)
                                            </div>
                                        </td>
                                        <td class="px-2 pt-2 border-b border-gray-200">
                                            <div class="text-sm text-gray-900">
                                                @excerpt($about->title)
                                            </div>
                                        </td>
                                        <td class="px-2 pt-2 border-b border-gray-200">
                                            <div class="text-sm text-gray-900">
                                                @excerpt($about->intro)
                                            </div>
                                        </td>
                                        <td class="px-2 pt-2 border-b border-gray-200">
                                            <div class="text-sm text-gray-900">
                                                @excerpt($about->mission)
                                            </div>
                                        </td>
                                        <td class="px-2 pt-2 border-b border-gray-200">
                                            <div class="text-sm text-gray-900">
                                                @excerpt($about->expertise)
                                            </div>
                                        </td>
                                        <td class="px-2 pt-2 border-b border-gray-200">
                                            <div class="text-sm text-gray-900">
                                                @excerpt($about->goal)
                                            </div>
                                        </td>
                                        <td class="px-2 pt-2 border-b border-gray-200">
                                            <div class="text-sm text-gray-900">
                                                @excerpt($about->description)
                                            </div>
                                        </td>
                                        <td class="pr-4 pt-2 text-sm font-medium text-right border-b border-gray-200">
                                            <a href="{{ route('about-section.edit', $about->id) }}"
                                                class="text-green-600 hover:text-green-900">Edit</a>
                                            <form action="{{ route('about-section.destroy', $about->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                            </form>
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
