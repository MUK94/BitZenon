<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * Return all static pages:
     *  about,contact page
     */
    public function home(): View
    {
        $title = 'Home';
		  $latestArticles = Article::orderBy('created_at', 'desc')->take(4)->get();
		  $mostPopular = Article::orderBy('view_count', 'desc')->take(3)->get();
        $categories = Category::all();
        return view('home', compact('title', 'latestArticles', 'mostPopular', 'categories'));
    }

    public function about(): View
    {
        $title = 'About';
        $articles = Article::all();
        $categories = Category::all();
        return view('pages.about')->with(['title' => $title, 'articles' => $articles, 'categories' => $categories]);
    }

	 public function services(): View
    {
        $title = 'Services';
        $articles = Article::all();
        $categories = Category::all();
        return view('pages.services')->with(['title' => $title, 'articles' => $articles, 'categories' => $categories]);
    }
    public function podcasts(): View
    {
        $title = 'Podcasts';
        $articles = Article::all();
        $categories = Category::all();
        return view('pages.podcasts')->with(['title' => $title, 'articles' => $articles, 'categories' => $categories]);
    }
    public function contact(): View
    {
        $title = 'Contact';
        $articles = Article::all();
        $categories = Category::all();
        return view('pages.contact')->with(['title' => $title, 'articles' => $articles, 'categories' => $categories]);
    }

}
