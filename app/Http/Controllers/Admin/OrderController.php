<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get(); // assuming you have an Order model
        return view('admin.orders.index', compact('orders'));
    }
}
