<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\DashboardController as VendorDashboardController;
use App\Http\Controllers\Vendor\OrderController as VendorOrderController;
use App\Http\Controllers\Vendor\ProductController as VendorProductController;

// Vendor routes
Route::prefix('vendor')->middleware(['auth', 'role:vendor'])->name('vendor.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [VendorDashboardController::class, 'index'])->name('dashboard');

    // Orders Management
    // Route::get('/orders', [VendorOrderController::class, 'index'])->name('orders.index');

    // Products Management
    // Route::get('/products', [VendorProductController::class, 'index'])->name('products.index');
});
