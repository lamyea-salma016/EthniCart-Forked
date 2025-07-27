@extends('layouts.app')

@section('title', 'EthniCart | Seller Registration')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-green-200 to-green-300 px-4">
    <div class="w-full max-w-lg bg-white shadow-2xl rounded-3xl p-10 md:p-12 relative">

        {{-- Seller Brand Mark --}}
        <div class="absolute top-0 left-0 right-0 mx-auto -translate-y-1/2 w-16 h-16 bg-green-700 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-md">
            <span class="font-serif">S</span>
        </div>

        <h2 class="text-3xl md:text-4xl font-bold text-center text-green-800 mt-6">Join as a Seller</h2>
        <p class="text-center text-gray-600 text-sm mt-2 mb-6">
            Become part of <strong>EthniCart</strong> — From Earth to You. Share your creations with the world.
        </p>

        <form method="POST" action="{{ route('seller.register') }}" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-green-700 mb-1">Full Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 focus:ring-2 focus:ring-green-500 focus:outline-none placeholder:text-green-400"
                    placeholder="e.g. Anika Hasan" />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-green-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 focus:ring-2 focus:ring-green-500 focus:outline-none placeholder:text-green-400"
                    placeholder="e.g. shop@example.com" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-green-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 focus:ring-2 focus:ring-green-500 focus:outline-none placeholder:text-green-400"
                    placeholder="Create a strong password" />
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-green-700 mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 focus:ring-2 focus:ring-green-500 focus:outline-none placeholder:text-green-400"
                    placeholder="Repeat your password" />
            </div>

            <button type="submit"
                class="w-full bg-green-700 hover:bg-green-800 text-white font-semibold py-3 rounded-xl transition duration-300">
                Register as Seller
            </button>
        </form>

        <p class="text-center text-sm text-green-700 mt-6">
            Already a seller?
            <a href="{{ route('seller.login') }}" class="font-semibold text-green-900 hover:underline">Log in here</a>
        </p>
    </div>
</div>
@endsection
