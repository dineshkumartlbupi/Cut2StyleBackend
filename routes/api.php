<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Authenticated routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [AuthController::class, 'userProfile']);
    Route::post('/change-password', [AuthController::class, 'resetPassword']);
    Route::post('/update-profile', [AuthController::class, 'updateProfile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/my-products', [ProductController::class, 'myProducts']); // ✅ Your products
});

// Guest routes
Route::post('register', [AuthController::class, 'userRegister']);
Route::post('login', [AuthController::class, 'userLogin']);
// Route::post('forgot-password', [AuthController::class, 'sendResetLink']);
Route::post('reset-password', [AuthController::class, 'reset']);

// for products
// Route::post('/products', [ProductController::class, 'store']); // Add
Route::put('/products/{id}', [ProductController::class, 'update']); // Edit
Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete
Route::get('/products', [ProductController::class, 'index']);       // Get all products
Route::get('/products/{id}', [ProductController::class, 'show']);


