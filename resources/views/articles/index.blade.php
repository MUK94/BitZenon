@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
            <div class="headings mb-8">
                <h2>Choose Your <span>Favorite</span> Topic</h2>
                <select name="category" id="category" class="filter-per-cat" onchange="location = this.value;">
                    <option value="/articles/" {{ request()->is('articles') ? 'selected' : '' }}>All</option>
                    @foreach ($categories as $category)
                        <option value="/categories/{{ $category->slug }}"
                            {{ request()->is('categories/' . $category->slug) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="post-container">
                @foreach ($articles as $article)
                    <div class="post shadow-sm">
                        <a href="/blog/{{ $article->slug }}">
                            <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}">
                        </a>
                        <div class="description">
                            <div class="tags">
                                <a
                                    href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                            </div>
                            <div class="meta-data mb-2">
                                <span class="">{{ $article->created_at->diffForHumans() }}</span>
                                <span><i class="fa-regular fa-clock"></i> {{ $article->read_time }} min read</span>
                                <span> <i class="fa-regular fa-eye"></i> {{ $article->view_count }}</span>
                                <span> <i class="fa-regular fa-comment"></i> 45</span>
                            </div>
                            <div class="text">
                                <a href="/blog/{{ $article->slug }}">
                                    <h3>{{ $article->title }}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pagination">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
