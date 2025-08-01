<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductController extends Controller
{
    // Show the upload form
    public function create()
    {
        return view('seller.upload');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // ✅ Validate ALL inputs including display_page
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'display_page' => 'required|string|max:255', 
            'unit' => 'required|string|max:10', 
        ]);


        // ✅ Store image
        $imagePath = $request->file('image')->store('products', 'public');

        // ✅ Create product
        Product::create([
            'seller_id' => Auth::guard('seller')->id(),
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $imagePath,
            'display_page' => $request->display_page,
            'unit' => $request->unit, 
        ]);

        return redirect()->route('seller.product.create')->with('success', 'Product uploaded successfully!');
    }
}
