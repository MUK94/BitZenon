<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Service;
use App\Models\HeroSection;
use App\Models\AboutSection;
use App\Models\Testimonial;
use App\Models\Topic;
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
		  $heroSection = HeroSection::all();
		  $aboutSection = AboutSection::all();
        $latestArticles = Article::orderBy('created_at', 'desc')->take(5)->get();
        $mostPopular = Article::orderBy('view_count', 'desc')->take(3)->get();
        $categories = Category::all();
        $topics = Topic::all();
		  $testimonials = Testimonial::all();
        return view('home', compact('title', 'heroSection', 'aboutSection', 'latestArticles', 'mostPopular', 'categories', 'testimonials'));
    }

     public function about(): View
     {
         $title = 'About';
			$aboutSection = AboutSection::all();
         $articles = Article::all();
         $categories = Category::all();
         $topics = Topic::all();
			$services = Service::all();
         return view('pages.about', compact('title','articles', 'aboutSection', 'categories', 'topics', 'services'))->with(['title' => $title, 'articles' => $articles, 'categories' => $categories]);
     }

    public function services(): View
    {
        $title = 'Services';
        $articles = Article::all();
        $categories = Category::all();
        $topics = Topic::all();
		  $testimonials =Testimonial::all();
        return view('pages.services', compact('title', 'testimonials', 'articles', 'categories', 'topics'));
    }

    public function contact(): View
    {
        $title = 'Contact';
        $articles = Article::all();
        $categories = Category::all();
        $topics = Topic::all();
        return view('pages.contact', compact('title', 'articles', 'categories', 'topics'));
    }

}
