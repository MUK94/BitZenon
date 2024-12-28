@foreach ($aboutSection as $about)
    <div class="pt-8 pb-16 w-full flex justify-between items-center gap-8 relative">
        <img class="w-1/2 h-96 object-cover" src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->name }}">
        <div class="w-1/2 flex flex-col">
            <div class="flex flex-col">
                <span>{{ $about->name }}</span>
                <div class="about-social-links mb-6">
                    <p class="custom-blue-color-1 text-3xl font-bold mb-1">{{ $about->title }}</p>
                    @include('inc.social-media')
                </div>
                <p class="mb-2 mr-6">
                    {{ $about->description }}
                </p>
                <div class="btns flex gap-2">
                    <button
                        class="quoteBtn btn btn-primary  about-btn my-4
						 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">Get
                        your Free Quote<i
                            class="ml-2 text-gray-200 fa-solid fa-arrow-up-right-from-square"></i></button>
                    <button
                        class="btn btn-secondary  about-btn my-4
						 text-white rounded-md shadow-sm hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400"><a
                            class="px-2" target="_blank"
                            href="https://drive.google.com/file/d/1ldM2TtzMGCvjBn91vlrXjJtvgtF9hITk/view?usp=sharing">Download
                            CV <i class="ml-2 text-gray-200 fa-solid fa-cloud-arrow-down"></i></a></button>
                </div>
            </div>
        </div>
    </div>
@endforeach
