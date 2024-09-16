<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use App\Models\Topic;
use App\Models\Podcast;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPanelController extends Controller
{
   public function index(): View
	{
		$title = "Category";
		$articles = Article::with('user')->latest()->get();
		$categories = Category::all();
		$topics = Topic::all();
		$podcasts = Podcast::all();
		return view('layouts.admin', compact('title', 'topics', 'podcasts', 'articles', 'categories'));
	}
	public function articles(): View
	{
		$title = "Manage Articles";
		$articles = Article::with('user')->latest()->paginate(10);
		$categories = Category::all();
		$topics = Topic::all();
		$podcasts = Podcast::all();
		return view('admin.articles.index', compact('title', 'topics', 'podcasts', 'articles', 'categories'));

	}

	public function podcasts(): View
	{
		$title = "Manage Podcasts";
		$articles = Article::latest()->paginate(10);
		$categories = Category::all();
		$topics = Topic::all();
		$podcasts = Podcast::latest()->paginate(10);
		return view('admin.podcasts.index', compact('title', 'topics', 'podcasts', 'articles', 'categories'));

	}

	public function topics(): View
	{
		$title = "Manage Topics";
		$articles = Article::all();
		$categories = Category::all();
		$topics = Topic::latest();
		$podcasts = Podcast::all();
		return view('admin.topics.index', compact('title', 'topics', 'podcasts', 'articles', 'categories'));

	}

	public function testimonials(): View
	{
		$title = "Manage Testimonials";
		$articles = Article::all();
		$categories = Category::all();
		$topics = Topic::latest();
		$podcasts = Podcast::all();
		$podcasts = Testimonials::all();
		return view('admin.testimonials.index', compact('title', 'testimonials', 'topics', 'podcasts', 'articles', 'categories'));

	}
}
