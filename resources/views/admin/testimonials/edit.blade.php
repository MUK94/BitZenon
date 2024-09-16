@extends('layouts.admin')

@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>
        <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}" enctype="multipart/form-data"
            class="w-full flex flex-col justify-between gap-2 bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
            @csrf
            @method('PATCH')
            <div class="my-4 flex justify-between flex-wrap gap-3">
                <!-- Name Input -->
                <div class="mb-1">
                    <label for="name" class="block mb-1">Name</label>
                    <input type="text" name="name" required id="name"
                        class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md"
                        value="{{ old('name', $testimonial->name) }}"> <!-- Pre-fill with existing name -->
                </div>

                <!-- Company Input -->
                <div class="mb-1">
                    <label for="company" class="block mb-1">Company</label>
                    <input type="text" name="company" required id="company"
                        class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md"
                        value="{{ old('company', $testimonial->company) }}"> <!-- Pre-fill with existing company -->
                </div>

					 <!-- LinkedIn Input -->
                <div class="mb-1">
						<label for="linkedin" class="block mb-1">LinkedIn Profile</label>
						<input type="url" name="linkedin" required id="linkedin"
							 class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md"
							 value="{{ old('linkedin', $testimonial->linkedin) }}"> <!-- Pre-fill with existing company -->
				  </div>

                <!-- Image Upload -->
                <div class="mb-1">
                    <label for="image" class="block mb-1">Profile Picture</label>
                    <input type="file" name="image" id="image"
                        class="h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">
                    @if ($testimonial->image)
                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}"
                            class="w-16 mt-2">
                    @endif
                </div>
            </div>

            <!-- Description Input -->
            <div class="mb-2">
                <label for="description" class="block mb-1">Description</label>
                <textarea name="description" id="description" class="w-full min-h-30 px-4 py-2 border border-gray-300 rounded-md">
					  {{ old('description', $testimonial->description) }}
				 </textarea>
            </div>

            <!-- Save Button -->
            <div>
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    Update
                </button>
            </div>
        </form>

    </div>
@endsection
