<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Article;
use App\Models\Category;
use App\Models\Topic;
use App\Models\Podcast;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
			$title = 'Dashboard';
			// $articles = Article::where('user_id', auth()->id())->get();
			$articles = Article::with('user')->get();
			$articles = Article::with('user')->latest()->get();
			$categories = Category::all();
			$topics = Topic::all();
			$podcasts = Podcast::all();
			return view('dashboard.index', compact('title', 'topics', 'podcasts', 'articles', 'categories'));
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
