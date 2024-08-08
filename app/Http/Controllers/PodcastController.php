<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Podcast;
use App\Models\Topic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
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
    public function create(): RedirectResponse
    {
      return redirect('admin.podcasts.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'audio' => 'required|file|mimes:mp3',
        ]);

        $request->user()->podcasts()->create($validated);

        return redirect(route('admin.podcasts.index'));
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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
