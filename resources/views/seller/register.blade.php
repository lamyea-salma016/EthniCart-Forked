@extends('layouts.app')

@section('title', 'EthniCart | Seller Registration')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-10 px-4">
    <div class="w-full max-w-3xl bg-white shadow-lg rounded-2xl p-8 md:p-12">

        <h2 class="text-3xl font-bold text-green-700 text-center mb-2">Become an EthniCart Seller</h2>
        <p class="text-center text-gray-500 mb-8">Register to sell authentic products directly from your region.</p>

        <form method="POST" action="{{ route('seller.register') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Profile & Personal Info --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" name="phone" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Profile Image</label>
                    <input type="file" name="seller_image" accept="image/*"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2" />
                </div>
            </div>

            {{-- Account Password --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
                </div>
            </div>

            {{-- Identity Verification --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">NID / Birth Reg. Number</label>
                    <input type="text" name="nid" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Upload NID / Birth Cert</label>
                    <input type="file" name="nid_file" accept="image/*,application/pdf" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2" />
                </div>
            </div>

            {{-- Production Info --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Production Area / Region</label>
                <input type="text" name="production_area" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Type of Business / Product</label>
                <input type="text" name="business_type" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Specialty Product Description</label>
                <textarea name="product_description" rows="3" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none"></textarea>
            </div>

            {{-- Proof & Payment --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Proof of Authenticity (Optional)</label>
                <input type="file" name="proof_file" accept="image/*"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <input type="text" name="bank_account" placeholder="Bank Account Number" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
                <input type="text" name="bank_name" placeholder="Bank Name" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
                <input type="text" name="mobile_wallet" placeholder="Mobile Banking / eWallet ID"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" />
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="w-full bg-green-700 hover:bg-green-800 text-white font-semibold py-3 rounded-lg mt-4 transition duration-300">
                Register as Seller
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Already a seller? <a href="{{ route('seller.login') }}" class="text-green-700 font-semibold hover:underline">Log in here</a>
        </p>
    </div>
</div>
@endsection
