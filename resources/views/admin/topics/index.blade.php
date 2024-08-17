@extends('layouts.admin')

@section('content')
    <div class="flex justify-between gap-4 px-3">
        <div class="form-create">
            <h1 class=" text-xl font-bold my-8 px-3">{{ $title }}</h1>
            <div class="max-w-xl mx-auto p-4">
                <form method="POST" action="{{ route('topics.store') }}">
                    @csrf
                    <div class="mb-4  w-full">
                        <label for="name" class="block text-sm mb-2 mt-2 font-medium text-gray-700">Category Name</label>
                        <input type="text" name="name" placeholder="Ex. Powerapps" id="name"
                            class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
                    </div>
                    <button type="submit"
                        class="px-4 py-2 text-white custom-blue-color  rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                        Save
                    </button>
                </form>
            </div>
        </div>
        <div class="list">
            <h1 class="text-center font-bold text-xl mb-8 mt-8">List of Topics</h1>
            <div class="category-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2 mt-2">
                @foreach ($topics as $topic)
                    <div class="relative flex items-center bg-white rounded-lg shadow-sm p-2 mb-6">
                        <div class="text-md pr-4">
                            <a href="{{ route('topics.edit', $topic) }}">{{ $topic->name }}</a>
                        </div>
                        <div class="ml-auto">
                            <button
                                class="dropdown-button text-gray-700 px-3 py-2 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-300">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul
                                class="dropdown-menu z-20 absolute hidden bg-white border border-gray-200 py-1 rounded-md shadow-lg right-10 top-8">
                                <li><a href="{{ route('topics.edit', $topic) }}"
                                        class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Edit</a></li>
                                <li>
                                    <form action="{{ route('topics.destroy', $topic) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>




        <script>
            // Add event listener to dropdown buttons
            const dropdownButtons = document.querySelectorAll('.dropdown-button');
            dropdownButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const dropdownMenu = button.nextElementSibling;
                    dropdownMenu.classList.toggle('hidden');
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', (event) => {
                dropdownButtons.forEach(button => {
                    if (!button.contains(event.target)) {
                        const dropdownMenu = button.nextElementSibling;
                        dropdownMenu.classList.add('hidden');
                    }
                });
            });
        </script>
    </div>
@endsection
