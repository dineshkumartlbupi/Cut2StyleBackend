<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all products
        $products = Product::all();

        return view('user.dashboard', compact('products'));
    }
}
