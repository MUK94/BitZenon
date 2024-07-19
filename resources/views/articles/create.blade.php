@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>

@section('content')

<div class="flex justify-center items-center flex-col mt-8 mb-12">
	<h1 class="text-2xl text-center font-bold mb-4">{{ $title }}</h1>
	<form method="POST" action="/articles" enctype="multipart/form-data" class=" w-2/4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
		@csrf

		<div class="mb-4">
				<label for="title" class="block mb-1">Titre</label>
				<input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
		</div>

		<div class="mb-4">
			<label for="category_id" class="block mb-1">Categorie</label>
			<select name="category_id" id="category_id" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
				<option value="" class="text-gray-500"></option>
				@foreach($categories as $category)
					<option value="{{ $category->id }}" class="text-gray-900">{{ $category->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="mb-4">
			<label for="description" class="block mb-1">Description</label>
			<textarea name="description" id="description" class=" w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
		</div>

		<div class="mb-4">
			<label for="cover_image" class="block mb-1">Image </label>
			<input type="file" name="cover_image" id="cover_image" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
		</div>

		<button type="submit" class="btn bg-blue-500 px-3 py-3 text-white">Save</button>
	</form>
</div>

<script>
	ClassicEditor
		.create( document.querySelector( '#description' ) )
		.catch( error => {
			console.error( error );
		} );
</script>


@endsection
