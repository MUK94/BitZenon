@extends('layouts.admin')

@section('content')
{{-- {{ dd($category->name) }} --}}

	<div class="content-layout">
		<h2 class="text-center text-2xl mb-8 mt-8">{{ $title }}</h2>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('category.update', $category) }}">
            @csrf
				@method('PATCH')
            <div class="mb-4">
                <label for="name" class="block text-sm mb-2 mt-2 font-medium text-gray-700">Nom</label>
                <input type="text" name="name" placeholder="Ex. Informatique" id="name" value="{{  old('id', $category->name )  }}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"  required>
            </div>
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
               Enregistrer
            </button>
        </form>
    </div>
	</div>
@endsection