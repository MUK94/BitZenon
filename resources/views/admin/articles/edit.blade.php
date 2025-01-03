@extends('layouts.admin')

@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>
        <form method="POST" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data"
            class="w-full flex flex-col justify-betwen gap-2 bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
            @csrf
            @method('PATCH')

            <div class="my-4 flex justify-between gap-3">
                <div class="mb-4">
                    <label for="title" class="block mb-1">Titre</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}" required
                        class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                    @error('title')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="category_id" class="block mb-1">Categorie</label>
                    <select name="category_id" id="category_id"
                        class="w-full h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">
                        <option value="" class="text-gray-500">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="cover_image" class="block mb-1">Image</label>
                    <input type="file" name="cover_image" id="cover_image"
                        class="h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">
                    @error('cover_image')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="description" class="block mb-1">Description</label>
                <textarea name="description" id="description" class="w-full min-h-30 px-4 py-2 border border-gray-300 rounded-md">{{ old('description', $article->description) }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    Update
                </button>
            </div>
        </form>
    </div>


    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
