<div class="latest-container">
    <div class="first-row flex justify-between gap-4">
        @foreach ($latestArticles->take(2) as $article)
            <div class="post-blog shadow-sm rounded-lg">
                <a href="/blog/{{ $article->slug }}">
                    <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}" class="img-box">
                </a>
					 <div class="tags my-4 mx-2">
						  <a href="/categories/{{ $article->category->slug }}" class=""><span>{{ $article->category->name }}</span></a>
					 </div>
                <div class="description">
                    <div class="text">
                        <a href="/blog/{{ $article->slug }}">
                            <h3>{{ $article->title }}</h3>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="second-row grid grid-flow-row grid-cols-3 gap-6">
        @foreach ($latestArticles->slice(1, 6) as $article)
            <div class="post-blog shadow-sm rounded-lg">
                <a href="/blog/{{ $article->slug }}" class="img-box">
                    <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}"  class="img-box">
                </a>
					 <div class="tags my-4 mx-2">
						  <a href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
					 </div>
                <div class="description">
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
