<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Paginate the categories, assuming 10 categories per page
        $serviceCategories = ServiceCategory::paginate(10);

        return view('admin.service_categories.index', compact('serviceCategories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service_categories.create'); // Create view for adding new category
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255|unique:service_categories,name',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Optional image validation
        ]);

        // Handle the image upload if it exists
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('service_categories', 'public');
        } else {
            $imagePath = null; // No image uploaded
        }

        // Create a new service category
        ServiceCategory::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('admin.service-categories.index')->with('success', 'Service category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the service category by its ID
        $serviceCategory = ServiceCategory::findOrFail($id);
        return view('admin.service_categories.show', compact('serviceCategory')); // Adjust this view accordingly
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the service category by its ID
        $serviceCategory = ServiceCategory::findOrFail($id);
        return view('admin.service_categories.edit', compact('serviceCategory')); // Adjust this view accordingly
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255|unique:service_categories,name,' . $id,
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Optional image validation
        ]);

        // Find the service category by its ID
        $serviceCategory = ServiceCategory::findOrFail($id);

        // Handle the image upload if it exists
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($serviceCategory->image && Storage::exists('public/' . $serviceCategory->image)) {
                Storage::delete('public/' . $serviceCategory->image);
            }
            // Store the new image
            $imagePath = $request->file('image')->store('service_categories', 'public');
        } else {
            // If no new image is uploaded, keep the old image
            $imagePath = $serviceCategory->image;
        }

        // Update the service category
        $serviceCategory->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('admin.service-categories.index')->with('success', 'Service category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the service category by its ID
        $serviceCategory = ServiceCategory::findOrFail($id);

        // Delete the image if it exists
        if ($serviceCategory->image && Storage::exists('public/' . $serviceCategory->image)) {
            Storage::delete('public/' . $serviceCategory->image);
        }

        // Delete the service category
        $serviceCategory->delete();

        // Redirect to the index page with a success message
        return redirect()->route('admin.service-categories.index')->with('success', 'Service category deleted successfully!');
    }
}
