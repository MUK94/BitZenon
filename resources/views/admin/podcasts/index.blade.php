@extends('layouts.admin')
<title>{{ $title }} | Admin</title>

@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>
        <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data"
            class="w-full flex flex-col justify-betwen gap-2 bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
            @csrf

            <div class="my-4 flex justify-between gap-3">
                <div class="mb-4">
                    <label for="title" class="block mb-1">Titre</label>
                    <input type="text" name="title" required id="title"
                        class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                </div>
                <div class="mb-4">
                    <label for="category_id" class="block mb-1">Categorie</label>
                    <select name="category_id" id="category_id"
                        class="w-full h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">
                        <option value="" class="text-gray-500"></option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" class="text-gray-900">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="cover_image" class="block mb-1">Image </label>
                    <input type="file" name="cover_image" id="cover_image"
                        class="h-12 px-2 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700"
                        required>
                </div>
            </div>
            <div class="mb-4">
                <label for="description" class="block mb-1">Description</label>
                <textarea name="description" id="description" class="w-full min-h-30 px-4 py-2  rounded-md"></textarea>
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
            <h2 class="font-bold text-center text-xl">List of Podcasts</h2>
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
                                        Views
                                    </th>
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($articles as $article)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                                        {{ $article->id }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
													 <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
														<div class="text-sm leading-5 text-gray-900">
															 {{ $article->title }}
														</div>
												  </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $article->view_count }}
                                            </div>
                                        </td>


                                        <td
                                            class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                            <a href="{{ route('articles.edit', $article->id) }}"
                                                class="text-green-600 hover:text-green-900">Edit</a>
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
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
                    <div class="pagination">
                        {{ $articles->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>



    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
