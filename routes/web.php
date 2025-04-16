<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/register', function () {
    return view('auth/register');
});

Route::get('/auth/login', function () {
    return view('auth/login');
});

Route::post('registerUser',[AuthController::class,'register'])->name('registerUser');

// Route::get('/reset-password/{token}', function ($token) {
//     return response()->json(['message' => 'Redirect page for reset (not used in API)', 'token' => $token]);
// })->name('password.reset');
