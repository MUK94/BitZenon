<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
		$services = Service::with('user')->latest()->get();
		$categories = Category::all();


		// Searching
		// $searching_services = Service::search(trim($request->get('search')) ?? '')->query(function ($query) {
		// 	$query->join('categories', 'services.category_id', 'categories.id')
		// 	->select(['services.id', 'services.title', 'services.description', 'categories.name as category'])
		// 	->orderBy('services.id', 'DESC');
		// })->get();

		return view('articles.index')->with(['services' => $services,'title' => $title, 'categories' => $categories]);

	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create(): View
	{
		$title = 'Postez un Service';
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
			'price' => 'required',
			'author_bio' => 'required',
			'address' => 'required',
			'phone_number' => 'required',
			'category_id' => 'required',
			'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
		]);


		$service = new Service;
		$service->user_id = auth()->user()->id;
		$service->title = $validatedData['title'];
		$service->slug = Str::slug($validatedData['title'], '-');
		$service->description = $validatedData['description'];
		$service->price = $validatedData['price'];
		$service->author_bio = $validatedData['author_bio'];
		$service->address = $validatedData['address'];
		$service->phone_number = $validatedData['phone_number'];
		$service->category_id = $validatedData['category_id'];

		$service->save();

		if ($request->hasFile('cover_image')) {
			$file = $request->file('cover_image');
			$imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . 'service' . time() . '.' . $file->getClientOriginalExtension();

			Storage::disk('public')->put(
				$imageName,
				file_get_contents($request->file('cover_image')->getRealPath())
			);
			$service->cover_image = $imageName;
			$service->save();
		}

		return redirect('/services')->with('success', 'Service ajouté avec succès');
	}

	/**
	 * Display the specified resource.
	 */
	// public function show(Service $service)
	public function show($slug)
	{

		$service = Service::where('slug', $slug)->first();
		$similar_services = Service::where('category_id', $service->category_id)->where('id', '!=', $service->id)->limit(5)->get();
		$title = $service->title;
		$categories = Category::all();
		return view('articles.detail')->with(['service' => $service, 'similar_services' => $similar_services, 'categories' => $categories, 'title' => $title]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($id): View
	{
		$title = 'Modifier Le Service';
		$service = Service::findOrFail($id);
		$categories = Category::all();
		return view('articles.edit')->with(['service' => $service, 'categories' => $categories, 'title' => $title]);
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
			'price' => 'required',
			'author_bio' => 'required',
			'address' => 'required',
			'phone_number' => 'required',
			'category_id' => 'required',
			'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
		]);

		// $service->update($validatedData);

		$service = Service::findOrFail($id);
		$service->user_id = auth()->user()->id;
		$service->title = $validatedData['title'];
		$service->slug = Str::slug($validatedData['title'], '-');
		$service->description = $validatedData['description'];
		$service->price = $validatedData['price'];
		$service->author_bio = $validatedData['author_bio'];
		$service->address = $validatedData['address'];
		$service->phone_number = $validatedData['phone_number'];
		$service->category_id = $validatedData['category_id'];

		$service->save();

		if ($request->hasFile('cover_image')) {
			$file = $request->file('cover_image');
			$imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . 'service' . time() . '.' . $file->getClientOriginalExtension();

			Storage::disk('public')->put(
				$imageName,
				file_get_contents($request->file('cover_image')->getRealPath())
			);
			$service->cover_image = $imageName;
			$service->save();
		}

		return redirect('/articles')->with('success', 'Service ajouté avec succès');


	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Service $service)
	{
		$this->authorize('delete', $service);

		$service->delete();

		return redirect('/dashboard')->with('success', 'Service supprimé avec succès');

	}
}
