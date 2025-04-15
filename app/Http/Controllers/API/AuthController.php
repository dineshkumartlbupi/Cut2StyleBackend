<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function userRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role'      => 'required|in:Admin,User,Vendor',
            'name'      => 'required|string|max:255',
            'gender'    => 'required|in:Male,Female,Other',
            'dob'       => 'nullable|date',
            'address'   => 'nullable|string|max:255', // address is optional
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()], 422);
        }

        // Create user
        $user = User::create([
            'role'     => $request->role,
            'name'     => $request->name,
            'gender'   => $request->gender,
            'dob'      => $request->dob,
            'address'  => $request->address, // can be null
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Create token
        $token = $user->createToken('API Token')->plainTextToken;
        // Save token inside remember_token field
        $user->remember_token = $token;
        $user->save();
        return response()->json([
            'status'  => true,
            'message' => 'User registered successfully',
            'token'   => $token,
            'user'    => $user
        ], 201);
    }

    public function userLogin(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Check user credentials
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'The provided credentials are incorrect.'
            ], 401);
        }
        // Create token
        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Login successful',
            'token' => $token,
            'user' => $user
        ]);
    }


    public function userProfile(Request $request)
    {
        return response()->json([
            'status' => true,
            'message' => 'User profile fetched successfully',
            'user' => $request->user()
        ]);
    }

    public function resetPassword(Request $request)
{
    $validator = Validator::make($request->all(), [
        'current_password' => 'required|string',
        'new_password' => 'required|string|min:6|confirmed',
    ]);

    if ($validator->fails()) {
        return response()->json(['status' => false, 'errors' => $validator->errors()], 422);
    }

    $user = $request->user();

    // Check if current password matches
    if (!Hash::check($request->current_password, $user->password)) {
        return response()->json([
            'status' => false,
            'message' => 'Current password is incorrect'
        ], 401);
    }

    // Update to new password
    $user->password = Hash::make($request->new_password);
    $user->save();

    return response()->json([
        'status' => true,
        'message' => 'Password updated successfully'
    ]);
}

public function updateProfile(Request $request)
{
    $user = $request->user();

    $validator = Validator::make($request->all(), [
        'name'      => 'nullable|string|max:255',
        'gender'    => 'nullable|in:Male,Female,Other',
        'dob'       => 'nullable|date',
        'address'   => 'nullable|string|max:255',
        'email'     => 'nullable|email|unique:users,email,' . $user->id, // Allow same email if unchanged
    ]);

    if ($validator->fails()) {
        return response()->json(['status' => false, 'errors' => $validator->errors()], 422);
    }

    // Update fields only if provided
    if ($request->filled('name'))    $user->name    = $request->name;
    if ($request->filled('gender'))  $user->gender  = $request->gender;
    if ($request->filled('dob'))     $user->dob     = $request->dob;
    if ($request->filled('address')) $user->address = $request->address;
    if ($request->filled('email'))   $user->email   = $request->email;

    $user->save();

    return response()->json([
        'status' => true,
        'message' => 'Profile updated successfully',
        'user' => $user
    ]);
}

public function logout(Request $request)
{
    $user = $request->user();

    // Delete the current access token (logs out from current device)
    $user->currentAccessToken()->delete();
    // $user->tokens()->delete(); // Logs out from all devices

    return response()->json([
        'status' => true,
        'message' => 'Logged out successfully'
    ]);
}
// for forgot password
public function sendResetLink(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()], 422);
        }

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['status' => true, 'message' => 'Reset link sent to your email.'])
            : response()->json(['status' => false, 'message' => __($status)], 500);
    }
    // for reset password
    public function reset(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token'    => 'required',
            'email'    => 'required|email|exists:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()], 422);
        }

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? response()->json(['status' => true, 'message' => 'Password reset successfully.'])
            : response()->json(['status' => false, 'message' => __($status)], 500);
    }

}
