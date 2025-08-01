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
        ]);

        Seller::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

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
