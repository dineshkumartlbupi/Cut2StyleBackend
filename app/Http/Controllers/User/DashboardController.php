<?php


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve all products from the database
        $products = Product::all(); // Assuming you're using Eloquent to retrieve products

        // Pass products to the view
        return view('user.dashboard', compact('products'));
    }
}

