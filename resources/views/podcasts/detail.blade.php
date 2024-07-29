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
                        <a href="/articles/">Articles </a>
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
                            <a href="/articles/{{ $article->slug }}">Share Article <i class="fa-solid fa-link"></i></a>
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
							<h3 class="text-xl font-semibold mb-4 mt-4">Leave Comment</h3>
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
						<h3 class="text-xl font-semibold mb-4 mt-4">Continue Reading the Same Topic</h3>
						<div class="container">
							 @if ($similar_articles->isEmpty())
								  <p>No article</p>
							 @else
								  @foreach ($similar_articles as $article)
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
