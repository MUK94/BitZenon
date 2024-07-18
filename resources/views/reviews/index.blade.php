@extends('layouts.app')

@section('content')
<div class="content-layout">
	<div class="mx-auto mt-16">
		<h3 class="text-xl font-semibold mb-4 mt-4">Soumettre une Review</h3>
		<form action="{{route('reviews.store')}}" method="POST" enctype="multipart/form-data ">
			@csrf
			{{-- <input type="hidden" name="service_id" value="{{ $service->id }}"> --}}
			 <div class="mb-4">
				  <label for="body" class="block text-gray-700">Votre Review:</label>
				  <textarea id="review" name="body" rows="4" class="form-textarea mt-1 px-2 pt-2 block w-full border-gray-300 rounded-md border focus:border-blue-500">
				  </textarea>
			 </div>
			 <input type="hidden" name="service_id" value="{{ $service->id }}">
			 <button type="submit" class="btn bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800">Envoyez</button>
		</form>
	</div>
</div>
@endsection