@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>
@section('content')
	<div class="flex justify-center items-center flex-col mt-8 mb-12">
			<h1 class="text-2xl text-center font-bold mb-4">{{ $title }}</h1>
			<form method="POST" action="{{ route('services.update', $service) }}" enctype="multipart/form-data" class="w-2/4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
				@csrf
				@method('PATCH')
				<div class="mb-4">
						<label for="title" class="block mb-1">Titre</label>
						<input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{ old('title', $service->title) }}" required>
				</div>

				<div class="mb-4">
					<label for="category_id" class="block mb-1">Catégorie</label>
					<select name="category_id" id="category_id" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
						<option value="{{ old('category', $service->category) }}" class="text-gray-500"></option>
						@foreach($categories as $category)
							<option value="{{ old('id', $category->id) }}" class="text-gray-900">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="mb-4">
					<label for="description" class="block mb-1">Description</label>
					<textarea name="description" id="description" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" >{{ old('description', $service->description) }} </textarea>
				</div>

				<div class="mb-4">
					<label for="author_bio" class="block mb-1">Votre Bref Resume</label>
					<textarea name="author_bio" id="author_bio" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>{{ old('author_bio', $service->author_bio) }} </textarea>
				</div>

				<div class="mb-4">
						<label for="price" class="block mb-1">Prix: A partir</label>
						<input type="number" name="price" id="price" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{ old('price', $service->price)   }} " required>
				</div>
				<div class="mb-4">
						<label for="address" class="block mb-1">Addresse</label>
						<input type="text" name="address" id="address" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{ old('address', $service->address) }}" required>
				</div>

				<div class="mb-4">
						<label for="phone_number" class="block mb-1">Numero de Telephone</label>
						<input type="tel" name="phone_number" id="phone_number" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" value="{{ old('phone_number', $service->phone_number) }}">
				</div>

				<div class="mb-4">
					<label for="cover_image" class="block mb-1">Image de Couverture</label>
					<input type="file" name="cover_image" id="cover_image" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
				</div>

				<button type="submit" class="btn bg-blue-500 px-3 py-3 text-white">Enregistrer</button>
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
