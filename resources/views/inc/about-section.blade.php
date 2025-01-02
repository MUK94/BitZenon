<div class="desktop-hidden">
    @foreach ($aboutSection as $about)
        <div class="container mx-auto px-4 py-8">
            <div class="relative"> <!-- Vertical Line -->
                <div class="border-r-4 border-custom-blue absolute h-full left-1/2 transform -translate-x-1/2"></div>
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 center">
                        <h3 class="font-semibold text-2xl mb-4 custom-blue-color-1"><i
                                class="text-2xl mr-1 custom-blue-color-1 fa-solid fa-code"></i>
                            Expertise</h3>
                        <div
                            class="text-white bg-gray-800 custom-hover cursor-pointer p-4 rounded shadow-xl inline-block">
                            <p class="leading-snug p-2 text-white">{{ $about->expertise }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-8 flex justify-between items-center w-full left-timeline">
                    <div class="order-1 w-5/12 px-1 py-4 text-left">
                        <h3 class="font-semibold text-2xl mb-4 custom-blue-color-1 text-right"><i
                                class="text-2xl mr-1 custom-blue-color-1 fa-solid fa-star-of-life"></i>Mission</h3>
                        <div
                            class="text-white bg-gray-800 custom-hover cursor-pointer p-4 rounded shadow-xl inline-block">
                            <p class="leading-snug p-2 text-white"> {{ $about->mission }}</p>
                        </div>
                    </div>
                    <div class="order-1 w-5/12"></div>
                </div>
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 center">
                        <h3 class="font-semibold text-2xl mb-4 custom-blue-color-1"><i
                                class="text-2xl mr-1 custom-blue-color-1 fa-solid fa-check-to-slot"></i>Why mouctar.com?
                        </h3>
                        <div
                            class="text-white bg-gray-800 custom-hover cursor-pointer p-4 rounded shadow-xl inline-block">
                            <p class="leading-snug p-2 text-white">{{ $about->goal }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="large-screen-hidden">
    @foreach ($aboutSection as $about)
        <div class="flex mobile">
            <div class="px-1 py-4 w-1/3 center">
                <h3 class="font-semibold text-2xl mb-4 custom-blue-color-1"><i
                        class="text-2xl mr-1 custom-blue-color-1 fa-solid fa-code"></i>
                    Expertise</h3>
                <div class="text-white bg-gray-800 custom-hover cursor-pointer p-2 rounded shadow-xl">
                    <p class="leading-snug p-2 text-white">{{ $about->expertise }}</p>
                </div>
            </div>
            <div class="px-1 py-4 w-1/3 center">
                <h3 class="font-semibold text-2xl mb-4 custom-blue-color-1"><i
                        class="text-2xl mr-1 custom-blue-color-1 fa-solid fa-star-of-life"></i>Mission</h3>
                <div class="text-white bg-gray-800 custom-hover cursor-pointer p-2 rounded shadow-xl">
                    <p class="leading-snug p-2 text-white"> {{ $about->mission }}</p>
                </div>
            </div>
            <div class="px-1 py-4 w-1/3 center">
                <h3 class="font-semibold text-2xl mb-4 custom-blue-color-1"><i
                        class="text-2xl mr-1 custom-blue-color-1 fa-solid fa-check-to-slot"></i>Why mouctar.com?
                </h3>
                <div class="text-white bg-gray-800 custom-hover cursor-pointer p-2 rounded shadow-xl">
                    <p class="leading-snug p-2 text-white">{{ $about->goal }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
