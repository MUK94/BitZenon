<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Service;
use App\Models\Category;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
			$title = 'Profile';
			$services = Service::with('user')->latest()->get();
			$categories = Category::all();
      	return view('layouts.app')->with(['title'=>$title, 'services'=>$services, 'categories'=>$categories]);
    }
}
