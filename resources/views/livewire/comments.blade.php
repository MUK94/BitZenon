<div>
    {{-- Display validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Display flash message --}}
    @if (session()->has('message'))
        <div class=" ml-4 text-green-600 alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    {{-- Comment --}}
    <section class="bg-white dark:bg-gray-900 py-4 lg:py-8 antialiased">
        <div class="mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion ({{ $commentCount }})
                </h2>
            </div>

            <form wire:submit.prevent="{{ $commentId ? 'update' : 'submit' }}" class="mb-6">
                <div
                    class="py-2 px-4 mb-4 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <label for="comment" class="sr-only">Your comment</label>
                    <textarea wire:model="body" id="comment" rows="3"
                        class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:bg-gray-800"
                        placeholder="Write a comment..." required></textarea>
                </div>
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    {{ $commentId ? 'Update' : 'Comment' }}
                </button>
            </form>

            @foreach ($comments as $comment)
                <article class="py-4 px-2 text-base bg-white rounded-lg dark:bg-gray-900">
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p
                                class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                <i class="fa-solid fa-user-astronaut mr-2 border rounded-full p-2"></i>
                                <strong>{{ $comment->user->name }}</strong>
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                {{ $comment->created_at->diffForHumans() }}
                            </p>
                        </div>

                        {{-- Dropdown Menu --}}
                        @if ($comment->user_id === auth()->id())
                            <div class="nav-user-auth nav-cat-dropdown">
                                <button class="dropdown-link" onclick="event.preventDefault();">
                                    <menu class="flex items-center justify-center font-normal">
													<i class="fa-solid fa-ellipsis"></i>
                                    </menu>
                                </button>
                                <div class="dropdown-content">
                                    <ul class="drop-user bg-white rounded py-2">
                                        <li class="text-sm p-1">
                                            <a href="#" wire:click.prevent="edit({{ $comment->id }})">Edit</a>
                                        </li>
                                        <li class="text-sm p-1">
                                            <a href="#"
                                                wire:click.prevent="delete({{ $comment->id }})">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <p class="text-gray-500 ml-10 text-sm dark:text-gray-400">
                        {{ $comment->body }}
                    </p>
                </article>
            @endforeach
        </div>
    </section>
</div>


<script>
    // JavaScript to toggle dropdown
    const dropdownButton = document.getElementById('dropdownComment1Button');
    const dropdownMenu = document.getElementById('dropdownComment1');

    dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('hidden');
    });

    // Close dropdown if clicked outside
    window.addEventListener('click', function(e) {
        if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>
