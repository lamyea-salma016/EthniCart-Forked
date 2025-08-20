@extends('layouts.app')
@section('title', 'EthniCart | Fish & Meat')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
@section('content')

<!-- Hero Section -->
<div class="min-h-screen" style="background: linear-gradient(135deg, #f0f9e8 0%, #e8f5c8 50%, #ffffff 100%);">
    <!-- Header Banner -->
    <div class="relative overflow-hidden py-8" style="background: linear-gradient(90deg, #8bc34a 0%, #cddc39 50%, #8bc34a 100%);">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 tracking-tight">
                Fish & Meat <span class="text-green-200"></span>
            </h1>
            <p class="text-xl md:text-2xl text-green-100 mb-8 max-w-3xl mx-auto">
                From fresh catch to premium cuts, discover the finest selection of authentic fish and meat
            </p>
            <div class="flex justify-center">
                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-full px-6 py-2">
                    <span class="text-white font-medium">🐟 Fresh Daily • 🥩 Premium Quality • ❄️ Chilled</span>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-10 left-10 opacity-30" style="color: #f0f9e8;">
            <svg class="w-20 h-20" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="absolute bottom-5 right-5 opacity-20" style="color: #8bc34a;">
            <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
            </svg>
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Explore Our Categories</h2>
        </div>

        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 w-full max-w-7xl px-6">
                
                <!-- Fish Category -->
                <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
                    <a href="{{ url('/C1_Fish&Meat_fish') }}" class="block">
                        <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-green-300 h-[600px] w-full flex flex-col">
                            
                            <!-- Image Section -->
                            <div class="relative h-64 sm:h-[410px] overflow-hidden">
                                <img src="{{ asset('images/Fish.jpeg') }}" alt="Fish" class="w-full h-full object-cover" />
                            </div>

                            <!-- Text Section -->
                            <div class="p-6 sm:p-8 flex-grow">
                                <h3 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-3 group-hover:text-green-600 transition-colors">
                                    Fish
                                </h3>
                                <p class="text-gray-700 text-base">
                                    Fresh catch from rivers and seas, rich in omega-3 and nutrients
                                </p>
                            </div>

                        </div>
                    </a>
                </div>

                <!-- Meat Category -->
                <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
                    <a href="{{ url('/C2_Fish&Meat_Meat') }}" class="block">
                        <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-yellow-300 h-[600px] w-full flex flex-col">
                            
                            <!-- Image Section -->
                            <div class="relative h-64 sm:h-[410px] overflow-hidden">
                                <img src="{{ asset('images/Meat.jpg') }}" alt="Meat" class="w-full h-full object-cover" />
                            </div>

                            <!-- Text Section -->
                            <div class="p-6 sm:p-8 flex-grow">
                                <h3 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-3 group-hover:text-yellow-600 transition-colors">
                                    Meat
                                </h3>
                                <p class="text-gray-700 text-base">
                                    Premium quality cuts of beef, mutton, and chicken from trusted sources
                                </p>
                            </div>

                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <section class="min-h-screen py-8" style="background: linear-gradient(135deg, #f9fff7 0%, #f0f9e8 50%, #e8f5c8 100%);">
        <div class="container mx-auto px-4">
            <!-- Filters and Controls -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6 bg-white rounded-2xl shadow-lg p-4 backdrop-blur-sm">
                <div class="flex items-center space-x-4 mb-4 sm:mb-0">
                    <h2 class="text-2xl font-bold text-gray-800">{{ count($products) }} Items</h2>
                    <div class="h-6 w-px bg-gray-300"></div>
                    <span class="text-sm text-gray-500">Premium Quality</span>
                </div>
                
                <div class="flex flex-wrap gap-3">
                    <button class="group relative px-4 sm:px-6 py-2 sm:py-3 bg-white border-2 border-gray-200 rounded-xl text-sm font-medium hover:border-[#6A9793] transition-all duration-300 hover:shadow-md">
                        Sort by: Featured
                    </button>
                    <button class="group relative px-4 sm:px-6 py-2 sm:py-3 bg-white border-2 border-gray-200 rounded-xl text-sm font-medium hover:border-[#6A9793] transition-all duration-300 hover:shadow-md">
                        Filters
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($products as $product)
                <div class="group bg-white/90 backdrop-blur-sm rounded-2xl shadow-sm border border-white/30 overflow-hidden hover:shadow-lg hover:border-orange-200/50 hover:bg-white/95 transition-all duration-300 w-full">
                    <!-- Product Image -->
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        @if (!empty($product->image))
                        <a href="{{ url('/product/' . $product->id) }}">
                            <img src="{{ asset('storage/' . $product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-16 h-16 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-sm text-gray-500">No Image</span>
                            </div>
                        </div>
                        @endif
                    </div>

                    <!-- Product Info -->
                    <div class="p-4 sm:p-5">
                        <h3 class="font-semibold text-gray-900 mb-1 line-clamp-1 hover:text-orange-600 transition-colors">{{ $product->name }}</h3>
                        <p class="text-sm text-gray-600 line-clamp-2">{{ $product->description }}</p>
                        <div class="flex items-center gap-1 mb-4">
                            @for($i = 1; $i <= 5; $i++)
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            @endfor
                            <span class="text-xs text-gray-500 ml-1">(4.8)</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-gray-900">
                                ৳{{ number_format($product->price, 2) }} 
                                @if (!empty($product->unit)) / {{ $product->unit }} @endif
                            </span>
                            <form class="add-to-cart-form" data-product-id="{{ $product->id }}">
                                @csrf
                                <button 
                                    type="submit"
                                    class="bg-gradient-to-r from-green-600 to-lime-600 hover:from-green-700 hover:to-lime-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 flex items-center gap-2 text-sm group/btn shadow-md hover:shadow-lg disabled:opacity-50 disabled:cursor-not-allowed"
                                    {{ (isset($product->stock) && $product->stock == 0) ? 'disabled' : '' }}
                                >
                                    Add to cart
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

</div>

@endsection
