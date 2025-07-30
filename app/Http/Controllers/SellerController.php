<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function showUploadForm()
    {
        return view('seller.upload');
    }

    public function uploadProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'seller_id' => Auth::id(),
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath,
        ]);

        return redirect('/seller/products')->with('success', 'Product uploaded!');
    }

    public function myProducts()
    {
        $products = Product::where('seller_id', Auth::id())->get();
        return view('seller.products', compact('products'));
    }
}
