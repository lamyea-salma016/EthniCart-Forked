{{-- resources/views/admin/login.blade.php --}}
@extends('layouts.app')

@section('title', 'Admin Login - EthniCart')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-emerald-600 via-green-700 to-emerald-900">
    <div class="backdrop-blur-sm bg-white/10 border border-white/20 shadow-2xl rounded-2xl p-8 w-full max-w-md text-white">
        <h2 class="text-3xl font-bold mb-6 text-center">Admin Login</h2>

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-500/30 text-white rounded-lg">
                @foreach($errors->all() as $error)
                    <p class="text-sm">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}" class="space-y-5">
            @csrf

            <div>
                <label for="username" class="block mb-1 text-sm font-semibold">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter admin username"
                    class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-emerald-300 placeholder-white/70" required>
            </div>

            <div>
                <label for="password" class="block mb-1 text-sm font-semibold">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password"
                    class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-emerald-300 placeholder-white/70" required>
            </div>

            <button type="submit"
                class="w-full bg-emerald-500 hover:bg-emerald-600 transition duration-300 text-white font-semibold py-2 rounded-lg shadow-lg backdrop-blur-lg">
                Login
            </button>
        </form>
    </div>
</div>
@endsection
