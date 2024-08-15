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

}
