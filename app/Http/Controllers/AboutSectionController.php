<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'About Section';
        $aboutSection = AboutSection::all();
        return view('admin.about-section.index', compact('title', 'aboutSection'));
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'intro' => 'required',
            'mission' => 'required',
            'expertise' => 'required',
            'goal' => 'required',
            'description' => 'required',
				'title' => 'required|string',
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        ]);

        $aboutSection = AboutSection::create($validated);
        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_about_' . time() . '.' . $file->getClientOriginalExtension();

            Storage::disk('public')->put(
                $imageName,
                file_get_contents($file->getRealPath())
            );

            $aboutSection->image = $imageName;
            $aboutSection->save();
        }

        return redirect()->route('about-section.index')->with('success', 'About Section successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutSection $aboutSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutSection $aboutSection)
    {
        $title = 'Update About Section';
        return view('admin.about-section.edit', compact('title', 'aboutSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutSection $aboutSection)
    {
        $validated = $request->validate([
            'intro' => 'required',
            'mission' => 'required',
            'expertise' => 'required',
            'goal' => 'required',
				'description' => 'required',
				'title' => 'required|string',
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        ]);

        $aboutSection->update($validated);
        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_about_' . time() . '.' . $file->getClientOriginalExtension();

            Storage::disk('public')->put(
                $imageName,
                file_get_contents($file->getRealPath())
            );

            $aboutSection->image = $imageName;
            $aboutSection->save();
        }
        return redirect()->route('about-section.index')->with('success', 'About Section successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSection $aboutSection)
    {
        if ($aboutSection->image) {
            Storage::disk('public')->delete($aboutSection->image); // Delete the image from storage
        }

        $aboutSection->delete();
        return redirect()->route('about-section.index')->with('success', 'About Section successfully removed');
    }
}
