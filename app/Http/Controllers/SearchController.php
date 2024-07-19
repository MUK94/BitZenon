<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\View\View;


class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {

		$search = $request->input('search');
		$title = $search;

		$search_articles = Article::search(trim($request->get('search')) ?? '')->query(function ($query) {
			$query->join('categories', 'articles.category_id', 'categories.id')
			->select([
				'articles.id',
				'articles.title',
				'articles.description',
				'articles.slug as title_slug',
				'articles.cover_image',
				'categories.name as category',
				'categories.slug as slug'
				])
			->orderBy('articles.id', 'DESC');
		})->get();

		$categories = Category::all();


		return view('search.index', compact('search_articles', 'categories', 'search', 'title'));
    }
}
