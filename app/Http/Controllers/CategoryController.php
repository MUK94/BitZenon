<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = "Créez des Catégories";
        $services = Article::with('user')->latest()->get();
        $categories = Category::all();

        return view('admin.category.index', compact('title', 'services', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $title = "Créer Catégorie";
        $categories = Category::all();

        return view('admin.category.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:20|unique:categories',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): View
    {
        $title = "View Category";
        return view('admin.category.show', compact('title', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        $title = "Modifiez Catégorie";
        $articles = Article::with('user')->latest()->get();
        $categories = Category::all();

        return view('admin.category.edit', compact('title', 'articles', 'categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:20|unique:categories,name,' . $category->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
