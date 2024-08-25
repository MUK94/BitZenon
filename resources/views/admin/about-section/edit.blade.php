@extends('layouts.admin')
<title>{{ $title }} | Admin</title>

@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>

        {{-- Edit Form --}}
        <form method="POST" action="{{ route('about-section.update', $aboutSection->id) }}" enctype="multipart/form-data"
            class=" w-full flex flex-col justify-between gap-2 bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
            @csrf
            @method('PATCH')

            <div class="my-4 flex justify-between  gap-3 w-full">
                <div class="mb-1 w-1/2">
                    <label for="intro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                        Up</label>
                    <textarea id="intro" name="intro" rows="4"
                        class=" font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700 text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">{{ old('intro', $aboutSection->intro) }}</textarea>
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
                        class=" font-light block p-2.5 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-700 text-gray-900 rounded-lg border border-gray-300 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 bg-gray-50">{{ old('goal', $aboutSection->goal) }}</textarea>
                </div>
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
