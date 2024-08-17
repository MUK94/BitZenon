<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = "Manage Services";
        $services = Service::latest()->get();
        return view('admin.services.index', compact('title', 'services'));
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
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'pricing_method' => 'string|max:50',
            'price' => 'required',
            'description' => 'required|string|max:255',
            'details' => 'required',
        ]);

        Service::create($data);
        return redirect()->route('admin/services')->with('Success', 'Service created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service): View
    {
        $title = "Update Service";
        $services = Service::latest()->get();
        return view('admin.services.edit', compact('title', 'service', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'pricing_method' => 'string|max:50',
            'price' => 'required',
            'description' => 'required|string|max:255',
            'details' => 'required',
        ]);

        $service->update($data);
        return redirect('admin/services')->with('Success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service): RedirectResponse
    {
       $service->delete();
		 return redirect('admin/services')->with('Succes', 'Service deleted successfully');
    }
}
