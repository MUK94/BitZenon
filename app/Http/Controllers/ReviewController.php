<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
		$articles = Article::with('user')->latest()->get();
		$categories = Category::all();

      return View('reviews.index', compact('articles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

		$input = $request->all();
		$request->validate([
			'body'=> 'required',
		]);

		$input['user_id'] = auth()->user()->id;

		Review::create($input);

		return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
	 public function edit(Review $review): View
    {
		$articles = Article::with('user')->latest()->get();
		$categories = Category::all();
		return View('reviews.edit', compact('articles', 'categories', 'review'));
    }

    // Update method to handle the update request
    public function update(Request $request, Review $review): RedirectResponse
    {
		$validated = $request->validate([
			'body'=> 'required',
		]);

		$review->update($validated);

		return redirect()->route('serviceListings.detail', ['slug' => $review->service->slug]);
    }

    // Delete method to handle the delete request
    public function destroy(Review $review): RedirectResponse
    {
        $review->delete();

        return back();
    }
}
