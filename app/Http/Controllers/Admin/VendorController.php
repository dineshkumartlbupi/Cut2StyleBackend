<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    /**
     * Display a listing of the vendors.
     */
    public function index()
    {
        $vendors = User::where('role', 'Vendor')->get();
        return view('admin.vendors.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new vendor.
     */
    public function create()
    {
        return view('admin.vendors.create');
    }

    /**
     * Store a newly created vendor in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'gender'   => 'required|in:Male,Female,Other',
            'dob'      => 'required|date',
            'address'  => 'nullable|string|max:500',
        ]);

        User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role'     => 'Vendor',
            'gender'   => $validated['gender'],
            'dob'      => $validated['dob'],
            'address'  => $validated['address'],
        ]);

        return redirect()->route('admin.vendors.index')->with('success', 'Vendor created successfully.');
    }

    /**
     * Display the specified vendor.
     */
    public function show($id)
    {
        $vendor = User::where('role', 'Vendor')->findOrFail($id);
        return view('admin.vendors.show', compact('vendor'));
    }

    /**
     * Show the form for editing the specified vendor.
     */
    public function edit($id)
    {
        $vendor = User::where('role', 'Vendor')->findOrFail($id);
        return view('admin.vendors.edit', compact('vendor'));
    }

    /**
     * Update the specified vendor in storage.
     */
    public function update(Request $request, $id)
    {
        $vendor = User::where('role', 'Vendor')->findOrFail($id);

        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $vendor->id,
            'password' => 'nullable|string|min:6|confirmed',
            'gender'   => 'required|in:Male,Female,Other',
            'dob'      => 'required|date',
            'address'  => 'nullable|string|max:500',
        ]);

        $vendor->name = $validated['name'];
        $vendor->email = $validated['email'];
        $vendor->gender = $validated['gender'];
        $vendor->dob = $validated['dob'];
        $vendor->address = $validated['address'];

        if (!empty($validated['password'])) {
            $vendor->password = Hash::make($validated['password']);
        }

        $vendor->save();

        return redirect()->route('admin.vendors.index')->with('success', 'Vendor updated successfully.');
    }

    /**
     * Remove the specified vendor from storage.
     */
    public function destroy($id)
    {
        $vendor = User::where('role', 'Vendor')->findOrFail($id);
        $vendor->delete();

        return redirect()->route('admin.vendors.index')->with('success', 'Vendor deleted successfully.');
    }
}
