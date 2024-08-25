@extends('layouts.admin')

@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>
		  <form method="POST" action="{{ route('hero-section.update', $heroSection->id) }}" enctype="multipart/form-data"
			class="w-full flex flex-col justify-between gap-2 bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
			@csrf
			@method('PATCH')
			<div class="my-4 flex justify-between gap-3">
				 <div class="mb-1">
					  <label for="title" class="block mb-1">Titre</label>
					  <input type="text" name="title" required id="title"
							value="{{ old('title', $heroSection->title) }}"
							class="font-light mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
				 </div>

				 <div class="mb-1">
					  <label for="image" class="block mb-1">Image</label>
					  <input type="file" name="image" id="image"
							class="h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">
				 </div>
			</div>

			<!-- Preview the current image if it exists -->
			@if($heroSection->image)
				 <div class="mb-4">
					  <label class="block mb-1">Current Image</label>
					  <img src="{{ asset('storage/' . $heroSection->image) }}" alt="Current Image" class="h-40 w-40 object-cover">
				 </div>
			@endif

			<div>
				 <button type="submit"
					  class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
					  Save
				 </button>
			</div>
	  </form>

    </div>
@endsection
