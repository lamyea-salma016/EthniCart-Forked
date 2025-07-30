<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers\Frontend;


use App\Models\Product;

class ProductDisplayController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('home', compact('products'));
    }
}
