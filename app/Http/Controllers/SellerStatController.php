<?php

namespace App\Http\Controllers;

use App\Models\SellerOrderStat; // your model
use Illuminate\Support\Facades\DB;

class SellerStatController extends Controller
{
    public function index()
    {
        $sellerId = auth()->user()->id; // currently logged-in seller

        // Fetch products sold by this seller
        $soldProducts = SellerOrderStat::select(
            'product_id',
            'product_name',
            DB::raw('SUM(quantity) as total_quantity'),
            DB::raw('SUM(subtotal) as total_sales')
        )
        ->where('seller_id', $sellerId)
        ->groupBy('product_id', 'product_name')
        ->get();

        $totalMoney = $soldProducts->sum('total_sales');
        $totalProducts = $soldProducts->sum('total_quantity');

        return view('seller.stats', compact('soldProducts', 'totalMoney', 'totalProducts'));
    }
}
