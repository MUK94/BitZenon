<div class="latest-container">
    <div class="row flex justify-between gap-2 mobile">
        @foreach ($latestArticles->take(2) as $article)
            <div class="w-1/2 sm:w-full shadow-sm rounded-lg">
                <a href="/blog/{{ $article->slug }}">
                    <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}"
                        class="w-full img-box">
                </a>
                <div class="description mt-2">
                    <div class="flex mobile justify-between">
                        <div class="old-tag px-3">
                            <a
                                href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                        </div>
                        <div class="meta-data flex px-2 mb-2">
                            <span class="mr-2 text-gray-400"> {{ $article->created_at->diffForHumans() }}</span>
                            <span class="mr-2 text-gray-400"><i class="text-gray-400 fa-regular fa-clock"></i>
                                {{ $article->read_time }} min read</span>
                            <span class="mr-2 text-gray-400"> <i class="text-gray-400 fa-regular fa-eye"></i>
                                {{ $article->view_count }}</span>
                        </div>
                    </div>
                    <div class="text px-2 pb-2">
                        <a href="/blog/{{ $article->slug }}">
                            <h3 class="text-xl">{{ $article->title }}</h3>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row grid grid-flow-row grid-cols-3 gap-6 mobile">
        @foreach ($latestArticles->slice(2, 6) as $article)
            <div class="old-post shadow-sm rounded-lg sm:w-full">
                <a href="/blog/{{ $article->slug }}">
                    <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}"
                        class="w-full img-box">
                </a>
                <div class="description mt-3">
                    <div class="old-tag px-1 mb-1">
                        <a
                            href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                    </div>
                    <div class="meta-data flex px-1  mb-2">
                        <span class="mr-2 text-gray-400"> {{ $article->created_at->diffForHumans() }}</span>
                        <span class="mr-2 text-gray-400"><i class="text-gray-400 fa-regular fa-clock"></i>
                            {{ $article->read_time }} min read</span>
                        <span class="mr-2 text-gray-400"><i class="text-gray-400 fa-regular fa-eye"></i>
                            {{ $article->view_count }}</span>
                    </div>
                    <div class="text px-1 pb-2">
                        <a href="/blog/{{ $article->slug }}">
                            <h3 class="text-xl">{{ $article->title }}</h3>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
