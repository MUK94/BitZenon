@extends('layouts.app')
<title>{{ $title }} | Mouctechy </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
            <div class="podcast">
                <h2>Explore more <span>Podcast</span></h2>
                <div class="filter-per-cat">
                    @foreach ($categories as $category)
                        <div class="tags">
                            <a href="/categories/{{ $category->slug }}">
                                <span>{{ $category->name }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="podcast-container">
            </div>
        </div>
    </div>
@endsection
