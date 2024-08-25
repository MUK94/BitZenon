<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

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
			'intro'=> 'required',
			'mission'=> 'required',
			'expertise'=> 'required',
			'goal'=> 'required',
		]);

		AboutSection::create($validated);

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
			'intro'=> 'required',
			'mission'=> 'required',
			'expertise'=> 'required',
			'goal'=> 'required',
		]);

		$aboutSection->update($validated);

		return redirect()->route('about-section.index')->with('success', 'About Section successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSection $aboutSection)
    {
        $aboutSection->delete();
		  return redirect()->route('about-section.index')->with('success', 'About Section successfully removed');
    }
}
