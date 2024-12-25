 {{-- Testimonials --}}
 <div class="testimonials mt-4 mb-12">
     <div class="flex items-center justify-center">
         <div class="w-full py-8 text-gray-800">
             <div class="w-full">
                 <div class="text-center max-w-xl mx-auto">
                     <h2 class="text-4xl md:text-5xl font-bold mb-5">What People <br><span>are Saying</span></h2>
                     <div class="text-center mb-10">
                         <span class="inline-block w-1 h-1 rounded-full bg-gray-500 ml-1"></span>
                         <span class="inline-block w-3 h-1 rounded-full bg-gray-500 ml-1"></span>
                         <span class="inline-block w-40 h-1 rounded-full bg-gray-500"></span>
                         <span class="inline-block w-3 h-1 rounded-full bg-gray-500 ml-1"></span>
                         <span class="inline-block w-1 h-1 rounded-full bg-gray-500 ml-1"></span>
                     </div>
                 </div>
                 <div class="-mx-3 flex items-start">
                     <div class="px-3 testimonial-layout gap-2">
                         @foreach ($testimonials as $testimony)
                             <div
                                 class="testimony-box w-full mx-auto h-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 mb-6">
                                 <div class="w-full">
                                     <p class="leading-tight">
                                         <i class="secondary-color mr-1 fa-solid fa-quote-left"></i>
                                         {{ $testimony->description }}
                                         <i class="secondary-color mr-1 fa-solid fa-quote-right"></i>
                                     </p>
                                 </div>
                                 <div class="mt-6 w-full flex mb-4 items-center">
                                     <div class="overflow-hidden rounded-full w-10 h-10 border border-gray-200">
                                         <img src="{{ asset('storage/' . $testimony->image) }}"
                                             alt="{{ $testimony->name }}" class="w-10 h-10 object-cover">
                                     </div>
                                     <div class="flex-grow pl-3">
                                         <h6 class="font-bold uppercase text-gray-600">
                                             {{ $testimony->name }}</h6>
                                         <p><a href="{{ $testimony->linkedin }}" target="_blank"
                                                 class="custom-blue-color-1 font-semibold">{{ $testimony->company }}</a>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </div>
