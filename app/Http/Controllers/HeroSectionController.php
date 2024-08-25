<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = 'Hero Section';
        $heroSection = HeroSection::all();
        return view('admin.hero-section.index', compact('title', 'heroSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $title = 'Create Hero Section';
        return view('admin.hero-section.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
        ]);

        $heroSection = HeroSection::create($validated);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_hero-section_' . time() . '.' . $file->getClientOriginalExtension();

            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $heroSection->image = $imageName;
            $heroSection->save();
        }

        return redirect()->route('hero-section.index')->with('success', 'Hero Section ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(HeroSection $heroSection): View
    {
        $title = 'View Hero Section';
        return view('admin.hero-section.show', compact('title', 'heroSection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroSection $heroSection): View
    {
        $title = 'Edit Hero Section';
        return view('admin.hero-section.edit', compact('title', 'heroSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HeroSection $heroSection): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $heroSection->update($validated);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_hero-section_' . time() . '.' . $file->getClientOriginalExtension();

            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $heroSection->image = $imageName;
            $heroSection->save();
        }

        return redirect()->route('hero-section.index')->with('success', 'Hero Section updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $heroSection): RedirectResponse
    {
        // Delete the associated image if it exists
        if ($heroSection->image) {
            Storage::disk('public')->delete($heroSection->image);
        }

        $heroSection->delete();
        return redirect()->route('hero-section.index')->with('success', 'Hero Section deleted successfully.');
    }
}
