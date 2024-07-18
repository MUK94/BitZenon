<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
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
        $services = Service::all();
        $categories = Category::all();
        return view('home')->with(['title' => $title, 'services' => $services, 'categories' => $categories]);
    }

    public function about(): View
    {
        $title = 'About';
        $services = Service::all();
        $categories = Category::all();
        return view('pages.about')->with(['title' => $title, 'services' => $services, 'categories' => $categories]);
    }

	 public function services(): View
    {
        $title = 'Podcasts';
        $services = Service::all();
        $categories = Category::all();
        return view('pages.services')->with(['title' => $title, 'services' => $services, 'categories' => $categories]);
    }
    public function podcasts(): View
    {
        $title = 'Podcasts';
        $services = Service::all();
        $categories = Category::all();
        return view('pages.podcasts')->with(['title' => $title, 'services' => $services, 'categories' => $categories]);
    }
    public function contact(): View
    {
        $title = 'Contact';
        $services = Service::all();
        $categories = Category::all();
        return view('pages.contact')->with(['title' => $title, 'services' => $services, 'categories' => $categories]);
    }

}
