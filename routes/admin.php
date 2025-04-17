<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;



Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Users Management
    Route::resource('users', UserController::class);

    // Vendors Management
    Route::resource('vendors', VendorController::class);



    // ✅ Products Management
    Route::resource('products', ProductController::class);

    // Orders Management
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

});
