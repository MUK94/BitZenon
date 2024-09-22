@extends('layouts.admin')
<title>{{ $title }} | Admin</title>

@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>
        <form method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data"
            class="w-full flex flex-col justify-betwen gap-2 bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
            @csrf

            <div class="my-4 flex justify-between flex-wrap gap-3">
                <div class="mb-1">
                    <label for="title" class="block mb-1">Name</label>
                    <input type="text" name="name" required id="title"
                        class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-72">
                </div>
                <div class="mb-1">
                    <label for="title" class="block mb-1">Company</label>
                    <input type="text" name="company" required id="company"
                        class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-72">
                </div>
                <div class="mb-1">
                    <label for="title" class="block mb-1">LinkedIn Profile</label>
                    <input type="url" name="linkedin" required id="linkedin"
                        class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md">
                </div>
                <div class="mb-1">
                    <label for="image" class="block mb-1">Profile Picture</label>
                    <input type="file" name="image" id="image"
                        class="h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700"
                        required>
                </div>
            </div>
            <div class="mb-2">
                <label for="description" class="block mb-1">Description</label>
                <textarea name="description" id="description" class="w-full min-h-30 px-4 py-2 border border-gray-300 rounded-md"></textarea>
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
            <h2 class="font-bold text-center text-xl">List of Testimonials</h2>
            <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full bg-white overflow-hidden align-middle border-b border-gray-200 shadow-sm rounded">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        ID
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Name
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Company
                                    </th>
												<th
                                        class="px-6 py-3 text-xs leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        LinkedIn
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Description
                                    </th>
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                    <th
                                        class="px-6 py-3 text-xs leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($testimonials as $testimony)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $testimony->id }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $testimony->name }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $testimony->company }}
                                            </div>
                                        </td>

													 <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
														<div class="text-sm leading-5 text-gray-900">
															 @excerpt($testimony->linkedin)
														</div>
												  </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                @excerpt($testimony->description)
                                            </div>
                                        </td>


                                        <td
                                            class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                            <a href="{{ route('testimonials.edit', $testimony->id) }}"
                                                class="text-green-600 hover:text-green-900">Edit</a>
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                            <form action="{{ route('testimonials.destroy', $testimony->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900">Delete</button>
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
