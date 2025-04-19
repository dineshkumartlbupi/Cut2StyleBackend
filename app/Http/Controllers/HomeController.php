<?php
namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\ServiceCategory;

class HomeController extends Controller
{
    public function welcome()
    {
        $productCategories = ProductCategory::with('products')->get();
        $serviceCategories = ServiceCategory::with('services')->get();

        return view('welcome', compact('productCategories', 'serviceCategories'));
    }
}
