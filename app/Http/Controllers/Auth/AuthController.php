<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validator = Validator::make($credentials, [
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Get the authenticated user
            $user = Auth::user();

            // Redirect based on user role
            if ($user->role === 'Admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'Vendor') {
                return redirect()->route('vendor.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid email or password',
        ])->withInput();
    }


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role'      => 'required|in:Admin,User,Vendor',
            'name'      => 'required|string|max:255',
            'gender'    => 'required|in:Male,Female,Other',
            'dob'       => 'nullable|date',
            'address'   => 'nullable|string|max:255',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'role'     => $request->role,
            'name'     => $request->name,
            'gender'   => $request->gender,
            'dob'      => $request->dob,
            'address'  => $request->address,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Create token
        $token = $user->createToken('auth_token')->plainTextToken;
        // Save token inside remember_token field
        $user->remember_token = $token;
        $user->save();
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
