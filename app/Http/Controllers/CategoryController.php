<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use Illuminate\Http\cc;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
		$title = "Créez des Catégories";
		$services = Article::with('user')->latest()->get();
		$categories = Category::all();

		return view('admin.category.index', compact('title', 'services', 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
   //  public function create(): RedirectResponse
   //  {

   //  }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
			'name' => 'required|string|max:20|unique:categories',
	  ]);

		$category = Category::create([
			'name' => $request->name,
			'slug' => Str::slug($request->name), // Generating slug automatically
	  ]);

		return redirect()->route('category.index')->with('success', 'Category created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
		$title = "Modifiez Catégorie";
		$articles = Article::with('user')->latest()->get();
		$categories = Category::all();

		return view('admin.category.edit', ['category' => $category], compact('title', 'articles', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category):View
    {
        // Validate the incoming request data
		$validator = Validator::make($request->all(), [
		'name' => 'required|string|max:20|unique:categories,name,' . $category->id,
		]);

		if ($validator->fails()) {
			return Redirect::back()
					->withErrors($validator)
					->withInput();
		}

		// Update the category attributes
		$category->update([
		'name' => $request->name,
		'slug' => Str::slug($request->name),
		]);

		return redirect()->route('category.index')->with('success', 'Category updated successfully.');
		}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category):RedirectResponse
    {
		$category->delete();
		redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }
}
