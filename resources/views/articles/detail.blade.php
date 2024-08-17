@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')

    <div class="listings-container content-layout">
        <div class="detail-container">
            <div class="row">
                <div class="detail-col">
                    <div class="breadcumb">
                        <a href="/">Home </a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="/blog/">Articles </a>
                        <i class="fa-solid fa-angle-right"></i>
                        <span>{{ $article->title }}</span>
                    </div>
                    <div class="tags mb-2">
                        <a href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                    </div>
                    <h2 class="my-2">{{ $article->title }}</h2>
                    <div class="headlines my-2 mx-1">
                        <span class="text-gray-600 pb-4">{{ $article->created_at->format('F j, Y') }} </span>
                        <div class="share-btns mx-4">
                            <a href="/blog/{{ $article->slug }}">Share Article <i class="fa-solid fa-link"></i></a>
                        </div>
                    </div>

                    <div class="image-box">
                        <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}">
                    </div>

                    <article>
                        {!! $article->description !!}
                    </article>

                    {{-- Comment Section Goes Here! --}}
                    <div class="comments">
                        <h3 class="text-xl font-semibold mb-4 mt-4">Leave a Comment</h3>
                        <div class=" bg-white rounded-lg shadow-sm py-6 px-2">
                            <div class="p-2 sm:p-2 lg:p-4">
                                {{-- {{ route('comments.store') }} --}}
                                <form method="POST" action="">
                                    @csrf
                                    <textarea name="message" placeholder="{{ __('Comment here!') }}"
                                        class="p-4 block w-full border-gray-700 focus:border-blue-600 focus:ring focus:ring-blue-600 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}</textarea>
                                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                    <x-primary-button class="mt-4">{{ __('Comment') }}</x-primary-button>
                                </form>

                                <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                                    {{-- @foreach ($chirps as $chirp)
                                            <div class="p-6 flex space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-6 w-6 text-gray-600 -scale-x-100" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                                <div class="flex-1">
                                                    <div class="flex justify-between items-center">
                                                        <div>
                                                            <span class="text-gray-800">{{ $chirp->user->name }}</span>
                                                            <small
                                                                class="ml-2 text-sm text-gray-600">{{ $chirp->created_at->format('j M Y, g:i a') }}</small>
                                                            @unless ($chirp->created_at->eq($chirp->updated_at))
                                                                <small class="text-sm text-gray-600"> &middot;
                                                                    {{ __('edited') }}</small>
                                                            @endunless
                                                        </div>
                                                        @if ($chirp->user->is(auth()->user()))
                                                            <x-dropdown>
                                                                <x-slot name="trigger">
                                                                    <button>
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-4 w-4 text-gray-400"
                                                                            viewBox="0 0 20 20" fill="currentColor">
                                                                            <path
                                                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                        </svg>
                                                                    </button>
                                                                </x-slot>
                                                                <x-slot name="content">
                                                                    <x-dropdown-link :href="route('chirps.edit', $chirp)">
                                                                        {{ __('Edit') }}
                                                                    </x-dropdown-link>
                                                                    <form method="POST"
                                                                        action="{{ route('chirps.destroy', $chirp) }}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <x-dropdown-link :href="route('chirps.destroy', $chirp)"
                                                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                                                            {{ __('Delete') }}
                                                                        </x-dropdown-link>
                                                                    </form>
                                                                </x-slot>
                                                            </x-dropdown>
                                                        @endif
                                                    </div>
                                                    <p class="mt-4 text-lg text-gray-900">{{ $chirp->message }}</p>
                                                </div>
                                            </div>
                                        @endforeach --}}
                                </div>
                                <!-- Comments List -->
                                <div class="mt-8 space-y-4">
                                    <!-- Single Comment -->
                                    <div class="flex items-start space-x-4">
                                        <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150"
                                            alt="User Avatar">
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between">
                                                <h4 class="text-gray-900 font-semibold">Sharon McBaron</h4>
                                                <span class="text-gray-500 text-sm">9 hours ago</span>
                                            </div>
                                            <p class="text-gray-700">It's amazing, and the watch is beautiful.</p>
                                            <div class="flex items-center space-x-2 text-gray-500 mt-2">
                                                <button class="focus:outline-none">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </button>
                                                <button class="focus:outline-none">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                {{-- Sidebar --}}
                <div class="detail-sidebar">
                    {{-- <h3 class="text-xl font-semibold mx-4 text-center">Popular Articles</h3>
                    <div class="popular">
                        @foreach ($mostPopular as $article)
                            <div class="card">
                                <div class="">
                                    <img src="{{ asset('storage/' . $article->cover_image) }}" alt=""
                                        srcset="">
                                </div>
                                <div class="detail">
                                    <h4 class="px-1 py-1">
													<a href="{{ route('articles.detail', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
            <div class="similar-articles">
                {{-- Similar Articles --}}
                <div class="similar-articles">
                    <h3 class="text-xl font-semibold mb-4 mt-4">Recommended Articles</h3>
                    <div class="container">
                        @if ($similarArticles->isEmpty())
                            <p>No article</p>
                        @else
                            @foreach ($similarArticles as $article)
                                <div class="card">
                                    <div class="">
                                        <img src="{{ asset('storage/' . $article->cover_image) }}" alt=""
                                            srcset="">
                                    </div>
                                    <div class="detail">
                                        <h4 class="mt-4 mb-4"><a
                                                href="{{ route('articles.detail', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                                        </h4>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
