<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        if (Session::get('is_admin')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === config('admin.username') && Hash::check($password, config('admin.password_hash'))) {
        Session::put('is_admin', true);
        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors(['message' => 'Invalid admin credentials.']);
}

    public function logout()
    {
        Session::forget('is_admin');
        return redirect()->route('admin.login');
    }
}
