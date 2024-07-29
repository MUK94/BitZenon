<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class ArticleListingsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request): View
	{
		$title = "Articles";
		$articles = Article::with('user')->latest()->paginate(10);
		$categories = Category::all();

		// Searching
		// $searching_articles = Service::search(trim($request->get('search')) ?? '')->query(function ($query) {
		// 	$query->join('categories', 'articles.category_id', 'categories.id')
		// 	->select(['articles.id', 'articles.title', 'articles.description', 'categories.name as category'])
		// 	->orderBy('articles.id', 'DESC');
		// })->get();

		return view('articles.index')->with(['articles' => $articles,'title' => $title, 'categories' => $categories]);

	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create(): View
	{
		$title = 'Postez un article';
		$categories = Category::all();
		return view('articles.create')->with(['title' => $title, 'categories' => $categories]);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request): RedirectResponse
	{
		// Validate the incoming request data
		$validatedData = $request->validate([
			'title' => 'required|string|max:100',
			'description' => 'required',
			'category_id' => 'required',
			'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
		]);


		$article = new Article;
		$article->user_id = auth()->user()->id;
		$article->title = $validatedData['title'];
		$article->slug = Str::slug($validatedData['title'], '-');
		$article->description = $validatedData['description'];
		$article->category_id = $validatedData['category_id'];

		$article->save();

		if ($request->hasFile('cover_image')) {
			$file = $request->file('cover_image');
			$imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . 'article' . time() . '.' . $file->getClientOriginalExtension();

			Storage::disk('public')->put(
				$imageName,
				file_get_contents($request->file('cover_image')->getRealPath())
			);
			$article->cover_image = $imageName;
			$article->save();
		}

		return redirect('/articles')->with('success', 'article ajouté avec succès');
	}

	/**
	 * Display the specified resource.
	 */
	// public function show(Service $service)
	public function show($slug)
	{

		$article = Article::where('slug', $slug)->first();
		$mostPopular = Article::orderBy('view_count', 'desc')->take(3)->get();
		$similar_articles = Article::where('category_id', $article->category_id)->where('id', '!=', $article->id)->limit(3)->get();
		$title = $article->title;
		$categories = Category::all();

		// Use Session to avoid counting multiple time the same article for the same user session
		$sessionKey = 'article_viewed_' .$slug;
		if (!session()->has($sessionKey)) {
			$article->increment('view_count');
			session()->put($sessionKey, true);
		}

		return view('articles.detail')->with(['article' => $article, 'mostPopular'=>$mostPopular,'similar_articles' => $similar_articles, 'categories' => $categories, 'title' => $title]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($id): View
	{
		$title = 'Update Article';
		$article = Article::findOrFail($id);
		$categories = Category::all();
		return view('articles.edit')->with(['article' => $article, 'categories' => $categories, 'title' => $title]);
	}

	/**
	 * Update the specified resource in storage
	 */
	public function update(Request $request, $id): RedirectResponse
	{

		// Validate the incoming request data
		$validatedData = $request->validate([
			'title' => 'required|string|max:100',
			'description' => 'required',
			'category_id' => 'required',
			'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
		]);

		// $service->update($validatedData);

		$article = Article::findOrFail($id);
		$article->user_id = auth()->user()->id;
		$article->title = $validatedData['title'];
		$article->slug = Str::slug($validatedData['title'], '-');
		$article->description = $validatedData['description'];
		$article->category_id = $validatedData['category_id'];

		$article->save();

		if ($request->hasFile('cover_image')) {
			$file = $request->file('cover_image');
			$imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . 'article' . time() . '.' . $file->getClientOriginalExtension();

			Storage::disk('public')->put(
				$imageName,
				file_get_contents($request->file('cover_image')->getRealPath())
			);
			$article->cover_image = $imageName;
			$article->save();
		}

		return redirect('/articles')->with('success', 'Service ajouté avec succès');


	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Article $article)
	{
		$this->authorize('delete', $article);

		$article->delete();

		return redirect('/dashboard')->with('success', 'article deleted successfully');

	}
}
