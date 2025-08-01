<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $sellerId = Auth::guard('seller')->id(); // get current logged-in seller
        $products = Product::where('seller_id', $sellerId)->latest()->get();

        return view('seller.dashboard', compact('products'));
    }
}
