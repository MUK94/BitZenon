<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Article;
use App\Models\Podcast;
use App\Models\Topic;
use App\Models\Category;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
			$title = 'Profile';
			$articles = Article::all();
			$podcasts = Podcast::all();
			$topics = Topic::all();
			$categories = Category::all();
      	return view('layouts.app', compact('title', 'articles', 'podcasts', 'topics', 'categories'));
    }
}
