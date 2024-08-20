@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
			  <h2>Listen to our <span>Experts</span></h2>
            <div class="headings mb-8">
					<h3>Listen to our <span>Experts</span></h3>
                <select name="topic" id="topic" class="filter-per-cat" onchange="location = this.value;">
                    <option value="/podcasts/" {{ request()->is('podcasts') ? 'selected' : '' }}>All</option>
                    @foreach ($topics as $topic)
                        <option value="/podcasts/{{ $topic->slug }}"
                            {{ request()->is('podcasts/' . $topic->slug) ? 'selected' : '' }}>
                            {{ $topic->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="podcast-container">
            </div>
        </div>
    </div>
@endsection
