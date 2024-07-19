<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Article;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
		$title = 'Dashboard';
		$articles = Article::all();
      return view('layouts.guest')->with(['articles'=>$articles, 'title'=>$title]);
    }
}
