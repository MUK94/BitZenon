<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPanelController extends Controller
{
   public function index(): View
	{
		$title = "Category";
		$articles = Article::with('user')->latest()->get();
		$categories = Category::all();
		return view('layouts.admin', compact('title', 'articles', 'categories'));
	}
}
