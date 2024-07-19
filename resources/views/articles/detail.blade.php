@extends('layouts.app')
	<title>{{ $title }} | Bonnafaire </title>
@section('content')
{{-- {{dd($similar_services)}} --}}
	<div class="listings-container content-layout">
		<div class="detail-container">
			<div class="categories">
				@foreach ($categories as $category)
					<div class="cat-box">
						<a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
					</div>
				@endforeach
			</div>
			<div class="raw">
				<div class="detail-col">
					<h2>{{ $article->title }}</h2>
					<div class="info">
						<div class="price btn">
							<a href="#" class="">A partir de {{ $article->price }} FG</a>
						</div>
						{{-- <div class="review">
							<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
						</div> --}}
					</div>
					<div class="image-box">
						<img src="{{ asset('storage/'.$article->cover_image)  }}" alt="{{ $article->title }}">
					</div>

					<article>
						{!! $article->description  !!}
					</article>

					{{-- Reviews --}}

					<div class="review-container mt-24">
						<div class="mx-auto mt-24">
							<h3 class="text-xl font-semibold mb-4 mt-8">Reviews</h3>
							@foreach ($article->reviews as $review)
							<div class="bg-white rounded-lg shadow-md p-2 mb-12">
								<div class="relative flex items-center">
									 <div class="text-lg review">
										  <div class="user">
												<img src="{{ asset('img/user.png') }}" alt="">
												<span class="text-sm">Diallo Th.</span>
										  </div>
									 </div>
									 <div class="ml-auto">
										  <button onclick="toggleDropdown()" class="dropdown-button text-gray-700 px-3 py-2 rounded-full hover:bg-gray-300 focus:outline-none">
												<i class="fas fa-ellipsis-v"></i>
										  </button>
										  <ul id="dropdownMenu" class="dropdown-menu absolute bg-white border border-gray-200 py-1 rounded-md shadow-lg right-10 top-8" style="display: none;">
												<li><a href="{{ route('reviews.edit', $review) }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Edit</a></li>
												<li>
													<form action="{{ route('reviews.destroy', $review) }}" method="POST">
														@csrf
														@method('DELETE')
														<button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200">Delete</button>
													</form>
												</li>
										  </ul>
									 </div>
								</div>
								<blockquote class="text-sm mb-4 border-l-4 border-gray-400 pl-4 italic relative">
									 <p class="relative z-10">{{ $review->body }}</p>
								</blockquote>
						  </div>

							@endforeach

						<script>
							function toggleDropdown() {
									var dropdownMenu = document.getElementById("dropdownMenu");
									dropdownMenu.style.display === "none" ? dropdownMenu.style.display = "block" : dropdownMenu.style.display = "none";
							}
						</script>

							{{-- <p class="text-gray-700">No reviews posted yet.</p> --}}
					  </div>

					  <div class="mx-auto mt-16">
						<h3 class="text-xl font-semibold mb-4 mt-4">Soumettre une Review</h3>
						{{-- @if (request()->isMethod('post')) --}}

						<form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="mb-4">
								<label for="review" class="block text-gray-700">Votre Review:</label>
								<textarea id="review" name="body" rows="4" class="form-textarea mt-1 px-2 pt-2 block w-full border-gray-300 rounded-md border focus:border-blue-500"></textarea>
							</div>
							<input type="hidden" name="article_id" value="{{ $article->id }}">
							<button type="submit" class="btn bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800">Envoyez</button>
						</form>

{{--
						<form action="{{ route('reviews.update', $article->review) }}" method="POST" enctype="multipart/form-data">
							@csrf
							@method('PATCH')
							<div class="mb-4">
								<label for="review" class="block text-gray-700">Votre Review:</label>
								<textarea id="review" name="body" rows="4" class="form-textarea mt-1 px-2 pt-2 block w-full border-gray-300 rounded-md border focus:border-blue-500"></textarea>
							</div>
							<input type="hidden" name="article_id" value="{{ $article->id }}">
							<button type="submit" class="btn bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800">Envoyez</button>
						</form> --}}

				  </div>

					</div>
					<div class="similar-articles recommended-container">
						<h3 class="text-xl font-semibold mb-4 mt-4">articles Similaires</h3>
						<div class="container">
							@if ($similar_articles->isEmpty())
								 <p>No article</p>
							@else
								 @foreach ($similar_articles as $article)
									  <div class="card">
											<div>
												 <div class="image">
													  <img src="{{ asset('storage/'.$article->cover_image) }}" alt="" srcset="">
												 </div>
												 <div class="detail">
													  <a href="/categories/{{ $article->category->slug }}"><span class="cat"> {{ $article->category->name }}</span></a>
													  <h3 class="mt-4 mb-4"><a href="{{ route('articleListings.detail', ['slug'=>$article->slug]) }}">{{ $article->title }}</a></h3>
													  <div class="raw">
															<div class="owner">
																 <img src="{{ asset('img/user.png') }}" alt="">
																 <span>{{ explode(" ", $article->user->name)[0] }}</span>
															</div>
															<div class="review">
																 <i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
															</div>
													  </div>
													  <div class="price">
															<button href="#">A partir de <span>{{ $article->price }} FG</span></button>
													  </div>
												 </div>
											</div>
									  </div>
								 @endforeach
							@endif
					  </div>
					</div>
				</div>
				<div class="detail-sidebar">
					<div class="owner">
						<img src="{{ asset('img/user.png') }}" alt="">
						<div>
							<h2>{{ $article->user->name }}</h2>
							<a href="#"><i class="fa-solid fa-location"></i>{{ $article->address }}</a>
						</div>
					</div>
					<p>{{ $service->author_bio }}</p>
					<div class="contact">
						<a href="{{ 'tel:'.$service->phone_number }}"><i class="fa-solid fa-phone"></i>Appelez</a>
						<a href="#" class="btn"><i class="fa-solid fa-comment-dots"></i>Contactez</a>
					</div>
				</div>
			</div>

			</div>
		</div>
	</div>



@endsection
