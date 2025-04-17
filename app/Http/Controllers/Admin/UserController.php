<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'User')->get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $this->authorizeRole('Admin');

        $roles = ['Admin', 'Vendor', 'User'];
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->authorizeRole('Admin');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'role' => 'required|in:Admin,Vendor,User',
            'gender' => 'nullable|in:Male,Female,Other',
            'dob' => 'nullable|date',
            'address' => 'nullable|string|max:255',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        $this->authorizeRole('Admin');

        $roles = ['Admin', 'Vendor', 'User'];
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorizeRole('Admin');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,{$user->id}",
            'role' => 'required|in:Admin,Vendor,User',
            'gender' => 'nullable|in:Male,Female,Other',
            'dob' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'password' => 'nullable|confirmed|min:6',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = bcrypt($request->password);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $this->authorizeRole('Admin');

        try {
            $user->delete();
            return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.users.index')->with('error', 'Error deleting user.');
        }
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Reusable role check method
     */
    protected function authorizeRole($role)
    {
        if (!auth()->check() || strtolower(auth()->user()->role) !== strtolower($role)) {
            abort(403, 'Unauthorized access.');
        }
    }
}
