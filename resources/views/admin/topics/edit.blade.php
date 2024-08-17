@extends('layouts.admin')

@section('content')
    <div class="content-layout">
        <div>
            <h1 class="text-center font-bold text-xl mb-8 mt-8">{{ $title }}</h1>

            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <form method="POST" action="{{ route('topics.update', $topic) }}">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label for="name" class="block text-sm mb-2 mt-2 font-medium text-gray-700">Topic Name</label>
                        <input type="text" name="name" placeholder="Ex. IT" id="name"
                            value="{{ old('id', $topic->name) }}"
                            class="w-full mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md"
                            required>
                    </div>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-700 text-white rounded-md shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
