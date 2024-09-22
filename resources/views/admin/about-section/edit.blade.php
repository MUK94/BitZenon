@extends('layouts.admin')
<title>{{ $title }} | Admin</title>

@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>

        {{-- Edit Form --}}
        <form method="POST" action="{{ route('about-section.update', $aboutSection->id) }}" enctype="multipart/form-data"
            class="w-full flex flex-col justify-between gap-2 bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
            @csrf
            @method('PATCH')

            <div class="my-4 flex justify-between gap-3 w-full">
                <div class="mb-1 w-1/2">
                    <label for="name" class="block mb-1">Name</label>
                    <input type="text" name="name" required id="title"
                        value="{{ old('title', $aboutSection->name) }}"
                        class="font-light mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                </div>
                <div class="mb-1 w-1/2">
                    <label for="title" class="block mb-1">Titre</label>
                    <input type="text" name="title" required id="title"
                        value="{{ old('title', $aboutSection->title) }}"
                        class="font-light mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                </div>
            </div>
            <div class="my-4 flex justify-between gap-3 w-full">

                <div class="mb-1 w-1/2">
                    <label for="intro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                        Up</label>
                    <textarea id="intro" name="intro" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700 text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">{{ old('intro', $aboutSection->intro) }}</textarea>
                </div>
                <div class="mb-1 w-1/2">
                    <label for="mission"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mission</label>
                    <textarea id="mission" name="mission" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700 text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">{{ old('mission', $aboutSection->mission) }}</textarea>
                </div>
            </div>

            <div class="my-4 flex justify-between gap-3 w-full">
                <div class="mb-1 w-1/2">
                    <label for="expertise"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expertise</label>
                    <textarea id="expertise" name="expertise" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700 text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">{{ old('expertise', $aboutSection->expertise) }}</textarea>
                </div>
                <div class="mb-1 w-1/2">
                    <label for="goal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Why Choose
                        Us?</label>
                    <textarea id="goal" name="goal" rows="4"
                        class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700 text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">{{ old('goal', $aboutSection->goal) }}</textarea>
                </div>
            </div>

            {{-- New Field: Description --}}
            <div class="my-4">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700 text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">{{ old('description', $aboutSection->description) }}</textarea>
            </div>

            {{-- New Field: Image --}}
            <div class="my-4">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                <input type="file" name="image" id="image"
                    class="h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">
                {{-- Display current image if available --}}
                @if ($aboutSection->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $aboutSection->image) }}" alt="Current Image" class="w-32 h-auto">
                    </div>
                @endif
            </div>

            <div>
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection
