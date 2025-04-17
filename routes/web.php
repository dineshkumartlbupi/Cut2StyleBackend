<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


// Public Home Page
Route::get('/', function () {
    return view('welcome');
});

// ---------------------------
// Auth Routes - Login/Register
// ---------------------------

// Login Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ---------------------------
// Protected Routes After Login
// ---------------------------

Route::middleware(['auth'])->group(function () {

    Route::get('/redirect-after-login', function () {
        $user = auth()->user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'vendor') {
            return redirect()->route('vendor.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    });

});


require __DIR__.'/admin.php';
require __DIR__.'/vendor.php';
require __DIR__.'/user.php';
