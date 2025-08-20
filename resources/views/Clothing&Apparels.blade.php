@extends('layouts.app')
@section('title', 'EthniCart | Clothing & Apparels')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
@section('content')

<!-- Hero Section -->
<div class="min-h-screen bg-gradient-to-br from-white via-white/95 to-yellow-50">
    <!-- Header Banner -->
    <div class="relative overflow-hidden py-8 bg-gradient-to-r from-green-400 via-lime-400 to-green-400">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 tracking-tight">
                Clothing & Apparels
            </h1>
            <p class="text-lg md:text-2xl text-lime-100 mb-8 max-w-3xl mx-auto">
                Discover premium fashion and clothing for your perfect style statement
            </p>
            <div class="flex justify-center">
                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-full px-6 py-2">
                    <span class="text-white font-medium">✨ Trendy • 👗 Premium Quality • 👔 Professional</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Explore Our Categories</h2>
        </div>

        <div class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 w-full max-w-6xl">
                <!-- Women Wear -->
                <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
                    <a href="{{ url('I1_Clothings_WomenWear') }}" class="block">
                        <div class="bg-gradient-to-br from-white via-yellow-50 to-rose-50 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-rose-200 flex flex-col">
                            <div class="relative h-64 sm:h-80 md:h-96 overflow-hidden">
                                <img src="{{ asset('images/women_wear.jpg') }}" alt="Women Wear" class="w-full h-full object-cover" />
                            </div>
                            <div class="p-6 sm:p-8 flex-grow">
                                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3 group-hover:text-rose-600 transition-colors">
                                    Women Wear
                                </h3>
                                <p class="text-gray-700 text-base">
                                    Premium women's clothing collection for elegant and stylish looks
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Men Wear -->
                <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
                    <a href="{{ url('I2_Clothings_MenWear') }}" class="block">
                        <div class="bg-gradient-to-br from-white via-green-50 to-yellow-50 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-green-300 flex flex-col">
                            <div class="relative h-64 sm:h-80 md:h-96 overflow-hidden">
                                <img src="{{ asset('images/men_wear.png') }}" alt="Men Wear" class="w-full h-full object-cover" />
                            </div>
                            <div class="p-6 sm:p-8 flex-grow">
                                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3 group-hover:text-green-600 transition-colors">
                                    Men's Wear
                                </h3>
                                <p class="text-gray-700 text-base">
                                    Professional men's clothing solutions for formal and casual wear
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <section class="py-8 bg-gradient-to-br from-white via-yellow-50 to-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h1 class="text-2xl md:text-4xl font-bold text-gray-900">
                    Clothing <span class="text-green-600">& Apparels</span> Collection
                </h1>
            </div>

            <!-- Filters -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6 bg-gradient-to-r from-white via-yellow-50 to-white rounded-2xl shadow-lg p-4 border border-green-100 gap-3">
                <div class="flex items-center space-x-4">
                    <h2 class="text-lg sm:text-2xl font-bold text-gray-800">{{ count($products) }} Items</h2>
                    <div class="h-6 w-px bg-green-300"></div>
                    <span class="text-sm text-gray-500">Premium Quality</span>
                </div>
                <div class="flex flex-wrap gap-3">
                    <button class="group relative px-4 py-2 bg-gradient-to-r from-white to-yellow-50 border-2 border-green-200 rounded-xl text-sm font-medium hover:border-green-400 transition-all duration-300 hover:shadow-md">
                        Sort by: Featured
                    </button>
                    <button class="group relative px-4 py-2 bg-gradient-to-r from-white to-rose-50 border-2 border-rose-200 rounded-xl text-sm font-medium hover:border-rose-400 transition-all duration-300 hover:shadow-md">
                        Filters
                    </button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($products as $product)
                <div class="group bg-gradient-to-br from-white/95 via-yellow-50/80 to-rose-50/60 backdrop-blur-sm rounded-2xl shadow-sm border border-green-100 overflow-hidden hover:shadow-lg hover:border-green-200 transition-all duration-300">
                    <div class="relative aspect-square overflow-hidden bg-gradient-to-br from-yellow-50 to-white">
                        @if (!empty($product->image))
                        <a href="{{ url('/product/' . $product->id) }}">
                            <img src="{{ asset('storage/' . $product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-yellow-50 to-rose-50 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-16 h-16 text-green-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-sm text-gray-500">No Image</span>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="p-4 sm:p-5">
                        <h3 class="font-semibold text-gray-900 mb-1 line-clamp-1 hover:text-green-600 transition-colors">
                            {{ $product->name }}
                        </h3>
                        <p class="text-sm text-gray-600 line-clamp-2">{{ $product->description }}</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold text-gray-900">
                                ৳{{ number_format($product->price, 2) }}
                                @if (!empty($product->unit)) / {{ $product->unit }} @endif
                            </span>
                            <form class="add-to-cart-form" data-product-id="{{ $product->id }}">
                                @csrf
                                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-3 py-2 rounded-lg text-sm transition-all duration-300" {{ (isset($product->stock) && $product->stock == 0) ? 'disabled' : '' }}>
                                    {{ (isset($product->stock) && $product->stock == 0) ? 'Sold Out' : 'Add to cart' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @if($products->isEmpty())
            <div class="text-center py-20">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No products found</h3>
                <p class="text-gray-600">Check back later for authentic EthniCart products.</p>
            </div>
            @endif

        </div>
    </section>

@endsection
