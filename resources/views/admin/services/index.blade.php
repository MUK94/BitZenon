@extends('layouts.admin')
<title>{{ $title }} | Admin</title>

@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>
        <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data"
            class="w-full  bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
            @csrf

            <div class="flex flex-wrap justify-betwen gap-2">
                <div class="my-4 flex justify-between ml-2">
                    <div class="mb-1">
                        <label for="name" class="block mb-1">Name</label>
                        <input type="text" name="name" required id="name"
                            class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                    </div>
                </div>
                <div class="my-4 flex justify-between ml-2">
                    <div class="mb-1">
                        <label for="pricing-method" class="block mb-1">Pricing Method</label>
                        <input type="text" name="pricing_method" required id="pricing-method"
                            class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-90">
                    </div>
                </div>
                <div class="my-4 flex justify-between ml-2">
                    <div class="mb-1">
                        <label for="pricing-method" class="block mb-1">Price</label>
                        <input type="number" name="price" required id="price"
                            class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                    </div>
                </div>
                <div class="my-4 flex justify-between ml-2">
                    <div class="mb-2">
                        <label for="details" class="block mb-1">Service Details</label>
                        <textarea name="details" id="details"
                            class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80"></textarea>
                    </div>
                </div>
                <div class="my-4 flex justify-between ml-2">
                    <div class="mb-2">
                        <label for="title" class="block mb-1">Description</label>
                        <input type="text" name="description" required id="description"
                            class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                    </div>
                </div>
            </div>
            <div class="ml-2">
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color  rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    Save
                </button>
            </div>
        </form>

        {{-- table  --}}
        <div class="py-6 my-6 w-full">
            <h2 class="font-bold text-center text-xl">List of Services</h2>
            <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full bg-white overflow-hidden align-middle border-b border-gray-200 shadow-sm rounded">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        ID
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Title
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Description
                                    </th>

												<th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Pricing Method
                                    </th>

                                    <th class="px-2 py-3 border-b border-gray-200 bg-gray-50"></th>
                                    <th
                                        class="px-2 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">

                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($services as $service)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                                        {{ $service->id }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $service->name }}
                                            </div>
                                        </td>
                                        <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $service->description }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $service->pricing_method }}
                                            </div>
                                        </td>

                                        <td
                                            class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                            <a href="{{ route('services.edit', $service->id) }}"
                                                class="text-green-600 hover:text-green-900">Edit</a>
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
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
