<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use App\Models\Topic;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminArticlesController extends Controller
{
   public function index(): View
	{
		$title = "Manage Articles";
		$articles = Article::with('user')->latest()->get();
		$categories = Category::all();
		$topics = Topic::all();
		$podcasts = Podcast::all();
		return view('admin.articles.index', compact('title', 'topics', 'podcasts', 'articles', 'categories'));
	}
}
