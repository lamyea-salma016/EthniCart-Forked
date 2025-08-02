<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $sellers = Seller::all();
        $products = Product::all(); // assuming product model tracks sales etc. later

        return view('admin.dashboard', compact('users', 'sellers', 'products'));
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect()->route('admin.dashboard')->with('success', 'User deleted successfully.');
    }

    public function deleteSeller($id)
    {
        Seller::destroy($id);
        return redirect()->route('admin.dashboard')->with('success', 'Seller deleted successfully.');
    }
}
