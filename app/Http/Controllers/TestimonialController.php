<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Testimonial; // Corrected model name

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = "Manage Testimonials";
        $articles = Article::all();
        $categories = Category::all();
        $testimonials = Testimonial::all(); // Corrected model name
        return view('admin.testimonials.index', compact('title', 'testimonials', 'articles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Implement the method if needed
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'company' => 'required|string|max:50',
            'description' => 'required',
            'linkedin' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $testimonial = Testimonial::create($validated); // Corrected model name

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_testimonial_' . time() . '.' . $file->getClientOriginalExtension();

            Storage::disk('public')->put(
                $imageName,
                file_get_contents($file->getRealPath())
            );

            $testimonial->image = $imageName;
            $testimonial->save();
        }

        return redirect()->route('testimonials.index')->with('success', 'Testimonial ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial) // Corrected type hint
    {
        // Implement the method if needed
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial): View // Corrected type hint
    {
        $title = "Update Testimonial";
        return view('admin.testimonials.edit', compact('title', 'testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial): RedirectResponse // Corrected type hint and return type
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'company' => 'required|string|max:50',
            'description' => 'required',
            'linkedin' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $testimonial->update($validated); // Corrected method

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_testimonial_' . time() . '.' . $file->getClientOriginalExtension();

            Storage::disk('public')->put(
                $imageName,
                file_get_contents($file->getRealPath())
            );

            $testimonial->image = $imageName;
            $testimonial->save();
        }

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial): RedirectResponse // Corrected type hint and return type
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial removed successfully'); // Consistent message key
    }
}
