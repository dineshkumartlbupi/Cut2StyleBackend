<?php

use App\Http\Controllers\Admin\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {

   // Admin Profile
   Route::get('/account', [AccountController::class, 'show'])->name('account.show');
   Route::put('/account', [AccountController::class, 'update'])->name('account.update');


    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Users Management
    Route::resource('users', UserController::class);

    // Vendors Management
    Route::resource('vendors', VendorController::class);



    // ✅ Products Management
    Route::resource('product-categories', ProductCategoryController::class);
    Route::resource('products', ProductController::class);

  // ✅ Services Management
    Route::resource('service-categories', ServiceCategoryController::class);
    Route::resource('services', ServiceController::class);
    // Orders Management
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

});
