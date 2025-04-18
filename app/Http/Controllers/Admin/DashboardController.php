<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if (strtolower(auth()->user()->role) !== 'admin') {
            abort(403, 'Unauthorized. as');
        }

        return view('admin.dashboard', [
            'userCount' => User::where('role', 'User')->count(),
            'productCount' => Product::count(),
            'vendorCount' => User::where('role', 'Vendor')->count(),
            'orderCount' => Order::count(),
        ]);
    }
}
