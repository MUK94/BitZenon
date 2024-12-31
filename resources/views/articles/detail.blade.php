@extends('layouts.app')
<title>{{ $title }} | {{ config('app.name') }} </title>
@section('content')
    <div class="listings-container content-layout">
        <div class="detail-container">
            <div class="row flex gap-12">
                <div class="detail-col pb-12">
                    <div class="breadcumb px-2 py-1">
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
                    <div class="headlines flex items-center pb-6 mx-1">
                        <span class="text-gray-600 "> {{ $article->created_at->format('F j, Y') }} </span>
                        <div class="mx-4 text-gray-600">
                            @livewire('copy-url-button', ['url' => url()->current()])
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}">
                    </div>
                    <article>
                        {!! $article->description !!}
                    </article>
                    {{-- Livewire Comment Component --}}
                    <div class="claps rounded">
                        <livewire:clap-button :articleId="$article->id" />
                    </div>
                </div>
                {{-- Sidebar --}}
                <div class="detail-sidebar">
                    <h3 class="text-xl font-semibold mx-4 text-center">Similar Articles</h3>
                    <div class="popular">
                        @foreach ($similarArticles as $article)
                            <div class="detail mb-2 border-b-2 shadow-sm rounded p-1">
                                <p class=" border-gray-300 text-gray-900">
                                    <a href="{{ route('articles.detail', ['slug' => $article->slug]) }}"
                                        class="">{{ $article->title }}</a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                    {{-- Ads --}}
                    <div class="ads"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
