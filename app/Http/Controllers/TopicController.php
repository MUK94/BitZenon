<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = "Create Topic";
        $services = Article::with('user')->latest()->get();
        $categories = Category::all();
        $topics = Topic::all();
        return view('admin.topics.index', compact('title', 'services', 'topics', 'categories'));
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
        $topics = Topic::all();
        $categories = Category::all();

        $request->validate([
            'name' => 'required|string|max:20|unique:categories',
        ]);

        $topic = Topic::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('topics.index', compact('topics', 'categories'))->with('success', 'Category created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
		$title = "Update Topic";
		$articles = Article::with('user')->latest()->get();
		$categories = Category::all();
		return view('admin.topics.edit', compact('title', 'articles', 'topic', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic): RedirectResponse
    {
		$validator = Validator::make($request->all(), [
			'name' => 'required|string|max:20|unique:categories,name,' . $topic->id,
	  ]);

	  if ($validator->fails()) {
			return redirect()->back()
				 ->withErrors($validator)
				 ->withInput();
	  }

	  $topic->update([
			'name' => $request->name,
			'slug' => Str::slug($request->name),
	  ]);

	  return redirect()->route('topics.index')->with('success', 'Topic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic): RedirectResponse
    {
		$topic->delete();
		return redirect()->route('topics.index')->with('success', 'Topic deleted successfully.');
    }
}
