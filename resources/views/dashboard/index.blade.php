@extends('layouts.admin')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <div class="py-8 px-1">
        <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="mx-auto max-w-screen-2xl p-2 md:p-4 2xl:p-8">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
                    <div
                        class="rounded-sm border border-stroke bg-white px-4 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="flex h-11.5 w-11.5 items-center rounded-full bg-meta-2 dark:bg-meta-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-admin">
                                <path
                                    d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                            </svg>
                        </div>

                        <div class="mt-4 flex items-end justify-between">
                            <div>
                                <h3 class="text-title-md font-bold">
                                    3.456K
                                </h3>
                                <span class="text-sm font-medium">Total Visitors</span>
                            </div>

                            <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                12%
                                <svg class="fill-arrow" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                        fill="" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div
                        class="rounded-sm border border-stroke bg-white px-8 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="flex h-11.5 w-11.5 items-center rounded-full bg-meta-2 dark:bg-meta-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-admin" viewBox="0 0 512 512">
                                <path
                                    d="M96 96c0-35.3 28.7-64 64-64l288 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L80 480c-44.2 0-80-35.8-80-80L0 128c0-17.7 14.3-32 32-32s32 14.3 32 32l0 272c0 8.8 7.2 16 16 16s16-7.2 16-16L96 96zm64 24l0 80c0 13.3 10.7 24 24 24l112 0c13.3 0 24-10.7 24-24l0-80c0-13.3-10.7-24-24-24L184 96c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16l48 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-48 0c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16l48 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-48 0c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16l256 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-256 0c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16l256 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-256 0c-8.8 0-16 7.2-16 16z" />
                            </svg>
                        </div>

                        <div class="mt-4 flex items-end justify-between">
                            <div>
                                <h3 class="text-title-md font-bold text-black dark:text-white">
                                    105
                                </h3>
                                <span class="text-sm font-medium">Total Articles</span>
                            </div>

                            <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                10%
                                <svg class="fill-arrow" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                        fill="" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div
                        class="rounded-sm border border-stroke bg-white px-8 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="flex h-11.5 w-11.5 items-center rounded-full bg-meta-2 dark:bg-meta-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-admin" viewBox="0 0 384 512">
                                <path
                                    d="M192 0C139 0 96 43 96 96l0 160c0 53 43 96 96 96s96-43 96-96l0-160c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40c0 89.1 66.2 162.7 152 174.4l0 33.6-48 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l72 0 72 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-48 0 0-33.6c85.8-11.7 152-85.3 152-174.4l0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40z" />
                            </svg>
                        </div>

                        <div class="mt-4 flex items-end justify-between">
                            <div>
                                <h3 class="text-title-md font-bold text-black dark:text-white">
                                    447
                                </h3>
                                <span class="text-sm font-medium">Total Podcasts</span>
                            </div>

                            <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                18%
                                <svg class="fill-arrow" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                        fill="" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div
                        class="rounded-sm border border-stroke bg-white px-8 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="flex h-11.5 w-11.5 items-center rounded-full bg-meta-2 dark:bg-meta-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-admin" viewBox="0 0 640 512">
                                <path
                                    d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                            </svg>
                        </div>

                        <div class="mt-4 flex items-end justify-between">
                            <div>
                                <h3 class="text-title-md font-bold text-black dark:text-white">
                                    1203
                                </h3>
                                <span class="text-sm font-medium">Total Comments</span>
                            </div>

                            <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                30%
                                <svg class="fill-arrow" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                        fill="" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Start Chart --}}

                {{-- End Chart --}}

            </div>
        </div>
    </div>
@endsection
