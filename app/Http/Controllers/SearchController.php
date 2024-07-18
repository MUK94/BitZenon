<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
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

		$search_services = Service::search(trim($request->get('search')) ?? '')->query(function ($query) {
			$query->join('categories', 'services.category_id', 'categories.id')
			->select([
				'services.id',
				'services.title',
				'services.description',
				'services.slug as title_slug',
				'services.price',
				'services.user_id',
				'services.author_bio',
				'services.cover_image',
				'services.address',
				'services.phone_number',
				'categories.name as category',
				'categories.slug as slug'
				])
			->orderBy('services.id', 'DESC');
		})->get();

		$categories = Category::all();


		return view('search.index', compact('search_services', 'categories', 'search', 'title'));
    }
}
