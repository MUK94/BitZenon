<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Topic;
use App\Models\Podcast;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
      $title = "Podcasts";
		$articles = Article::all();
		$categories = Category::all();
		$topics = Topic::all();

		$podcasts = Podcast::all();
		return view('podcasts.index', compact('title', 'podcasts', 'articles', 'categories', 'topics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
