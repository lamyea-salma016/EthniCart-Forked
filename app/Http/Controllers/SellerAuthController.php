<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerAuthController extends Controller
{
    public function showRegisterForm()
    {
        if (Auth::guard('seller')->check()) {
            return redirect()->route('seller.dashboard');
        }
        return view('seller.register');
    }

   public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:sellers',
        'password' => 'required|min:6|confirmed',
        'phone' => 'required|string',
        'seller_image' => 'nullable|image|max:2048',
        'nid' => 'required|string',
        'nid_file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
        'production_area' => 'required|string',
        'business_type' => 'required|string',
        'product_description' => 'required|string',
        'proof_file' => 'nullable|image|max:4096',
        'bank_account' => 'required|string',
        'bank_name' => 'required|string',
        'mobile_wallet' => 'nullable|string',
    ]);

    $data = $request->only([
        'name', 'email', 'phone', 'nid', 'production_area', 
        'business_type', 'product_description', 'bank_account', 
        'bank_name', 'mobile_wallet'
    ]);

    // handle file uploads
    if ($request->hasFile('seller_image')) {
        $data['seller_image'] = $request->file('seller_image')->store('sellers', 'public');
    }
    if ($request->hasFile('nid_file')) {
        $data['nid_file'] = $request->file('nid_file')->store('sellers', 'public');
    }
    if ($request->hasFile('proof_file')) {
        $data['proof_file'] = $request->file('proof_file')->store('sellers', 'public');
    }

    $data['password'] = Hash::make($request->password);
    $data['is_approved'] = false;

    Seller::create($data);

    return redirect()->route('seller.login')->with('success', 'Registration successful! Please login.');
}


    public function showLoginForm()
    {
        if (Auth::guard('seller')->check()) {
            return redirect()->route('seller.dashboard');
        }
        return view('seller.login');
    }




 public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('seller')->attempt($credentials)) {
        $seller = Auth::guard('seller')->user();

        if (!$seller->is_approved) {
            Auth::guard('seller')->logout();
            return back()->withErrors(['email' => 'Your account is pending approval by the admin.']);
        }

        return redirect()->route('seller.dashboard');
    }

    return back()->withErrors(['email' => 'Invalid login credentials.']);
}


    public function logout()
    {
        Auth::guard('seller')->logout();
        return redirect()->route('seller.login');
    }
}
