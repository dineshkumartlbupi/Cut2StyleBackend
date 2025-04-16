<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'price'       => 'required|numeric',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        $product = Product::create($validated);
        $product->user_id = auth()->id(); // ✅ Save user ID
        $product->save();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products');
            $product->image = $imagePath;
            $product->save();
        }

        return response()->json(['message' => 'Product created', 'product' => $product], 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'price'       => 'sometimes|required|numeric',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle image upload first, before updating
        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        // Apply validated data to product
        $product->update($validated);

        // Return fresh product data
        return response()->json([
            'message' => 'Product updated',
            'product' => $product->fresh() // <-- force reload from DB
        ]);
    }



    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return response()->json(['message' => 'Product deleted']);
    }


    // Get all products
public function index()
{
    $products = Product::all();

    return response()->json([
        'message' => 'Product list fetched successfully',
        'products' => $products
    ]);
}

// Get a single product by ID
public function show($id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    return response()->json([
        'message' => 'Product fetched successfully',
        'product' => $product
    ]);
}

public function myProducts()
{
    $products = Product::where('user_id', auth()->id())->get();

    return response()->json([
        'message' => 'Your products fetched successfully',
        'products' => $products
    ]);
}


}

