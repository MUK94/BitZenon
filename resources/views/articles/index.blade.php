@extends('layouts.app')
<title>{{ $title }} | {{ config('app.name') }} </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
            <h2>Choose Your <span>Favorite</span> Topic</h2>
            <div class="headings mb-8">
                <h3 class="text-xl custom-blue-color-1">Latest Posts</h3>
                <select name="category" id="category" class="filter-per-cat" onchange="location = this.value;">
                    <option value="/blog" {{ request()->is('blog') ? 'selected' : '' }}>All</option>
                    @foreach ($categories as $category)
                        <option value="/categories/{{ $category->slug }}"
                            {{ request()->is('categories/' . $category->slug) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>

                <div class="blog-old-post grid grid-flow-row grid-cols-3 gap-5 mobile">
                    @if ($latestArticles->isEmpty())
                        <div class="alert alert-info">
                            <p class="text-red-600">No posts found for this category.</p>
                        </div>
                    @else
                        @foreach ($latestArticles->take(3) as $article)
                            <div class="old-post shadow-sm rounded-lg">
                                <a href="/blog/{{ $article->slug }}">
                                    <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}"
                                        class="max-w-full img-box">
                                </a>
                                <div class="description">
                                    <div class="old-tag px-3 mb-1">
                                        <a
                                            href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                                    </div>
                                    <div class="meta-data flex px-2  mb-2">
                                        <span class="mr-2 text-gray-400">{{ $article->created_at->diffForHumans() }}</span>
                                        <span class="mr-2 text-gray-400"><i class="text-gray-400 fa-regular fa-clock"></i>
                                            {{ $article->read_time }} min read</span>
                                        <span class="mr-2 text-gray-400"> <i class="text-gray-400 fa-regular fa-eye"></i>
                                            {{ $article->view_count }}</span>
                                    </div>
                                    <div class="text px-2 pb-2">
                                        <a href="/blog/{{ $article->slug }}">
                                            <h3 class="text-xl">{{ $article->title }}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="my-12 py-12">
                <h3 class="text-2xl py-6 custom-blue-color-1">Other Posts you May Like</h3>
                <div class="blog-old-post grid grid-flow-row grid-cols-3 gap-5 mobile">
                    @if ($popularArticles->isEmpty())
                        <div class="alert alert-info">
                            <p class="text-red-600">No posts found for this category.</p>
                        </div>
                    @else
                        @foreach ($popularArticles as $article)
                            <div class="old-post shadow-sm rounded-lg">
                                <a href="/blog/{{ $article->slug }}">
                                    <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}"
                                        class="max-w-full img-box">
                                </a>
                                <div class="description">
                                    <div class="old-tag px-3 mb-1">
                                        <a
                                            href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                                    </div>
                                    <div class="meta-data flex px-2  mb-2">
                                        <span class="mr-2 text-gray-400">{{ $article->created_at->diffForHumans() }}</span>
                                        <span class="mr-2 text-gray-400"><i class="text-gray-400 fa-regular fa-clock"></i>
                                            {{ $article->read_time }} min read</span>
                                        <span class="mr-2 text-gray-400"> <i class="text-gray-400 fa-regular fa-eye"></i>
                                            {{ $article->view_count }}</span>
                                    </div>
                                    <div class="text px-2 pb-2">
                                        <a href="/blog/{{ $article->slug }}">
                                            <h3 class="text-xl">{{ $article->title }}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="pagination">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
