@extends('layouts.admin')

@section('content')
    <div class="flex items-center flex-col my-8 mx-4">
        <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>
        <form method="POST" action="{{ route('services.update', $service->id) }}" enctype="multipart/form-data" class="w-full bg-white shadow-sm rounded px-4 pt-6 pb-8 m-4">
			@csrf
			@method('PATCH')

			<div class="flex flex-wrap justify-betwen gap-2">
				 <div class="my-4 flex justify-between ml-2">
					  <div class="mb-2">
							<label for="name" class="block mb-1">Name</label>
							<input type="text" name="name" required id="name"
								 value="{{ old('name', $service->name) }}"
								 class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
					  </div>
				 </div>
				 <div class="my-4 flex justify-between ml-2">
					  <div class="mb-2">
							<label for="pricing-method" class="block mb-1">Pricing Method</label>
							<input type="text" name="pricing_method" required id="pricing-method"
								 value="{{ old('pricing_method', $service->pricing_method) }}"
								 class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-90">
					  </div>
				 </div>
				 <div class="my-4 flex justify-between ml-2">
					  <div class="mb-2">
							<label for="price" class="block mb-1">Price</label>
							<input type="number" name="price" required id="price"
								 value="{{ old('price', $service->price) }}"
								 class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
					  </div>
				 </div>
				 <div class="my-4 flex justify-between ml-2">
					  <div class="mb-2">
							<label for="details" class="block mb-1">Service Details</label>
							<textarea name="details" id="details"
								 class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">{{ old('details', $service->details) }}</textarea>
					  </div>
				 </div>
				 <div class="my-4 flex justify-between ml-2">
					  <div class="mb-2">
							<label for="description" class="block mb-1">Description</label>
							<input type="text" name="description" required id="description"
								 value="{{ old('description', $service->description) }}"
								 class="mt-1 p-2 block focus:outline-none focus:ring-2 focus:ring-blue-700 border border-gray-300 rounded-md w-80">
					  </div>
				 </div>
			</div>
			<div class="ml-2">
				 <button type="submit"
					  class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
					  Update
				 </button>
			</div>
	  </form>

    </div>
@endsection
