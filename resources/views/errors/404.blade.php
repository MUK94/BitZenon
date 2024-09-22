@extends('layouts.app') {{-- or your custom layout --}}

@section('content')
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-8xl font-bold text-gray-800">404</h1>
            <p class="text-xl text-gray-600">Oops! The page you are looking for does not exist.</p>
            <a href="{{ url('/') }}" class="mt-4 inline-block px-6 py-2 text-white bg-blue-700 rounded-lg">
                Go Home
            </a>
        </div>
    </div>
@endsection
