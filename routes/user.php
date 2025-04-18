<?php

use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->middleware(['auth', 'role:user'])->name('user.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

    // Route::post('/order/place', [OrderController::class, 'place'])->name('order.place');

Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');

Route::match(['get', 'post'], '/order/place', [OrderController::class, 'placeOrder'])->name('user.order.place');

});
