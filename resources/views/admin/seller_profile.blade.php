<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
        }
        
        .subtle-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
        
        .hover-lift {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #059669, #10b981);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-gray-50 to-blue-50 min-h-screen">
    <div class="container mx-auto px-6 py-10 max-w-7xl">
        
        <!-- Back Button -->
        <div class="mb-8">
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-gray-700 bg-white/80 backdrop-blur-sm border border-gray-200/60 rounded-xl hover:bg-white hover:border-gray-300/80 hover:shadow-md transition-all duration-300 group">
                <svg class="w-4 h-4 mr-2 transition-transform duration-200 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Dashboard
            </a>
        </div>

        <!-- Seller Information Card -->
        <div class="glass-effect rounded-3xl subtle-shadow border border-white/50 p-10 mb-8 hover-lift">
            <!-- Header Section -->
            <div class="flex flex-col lg:flex-row items-start lg:items-center space-y-6 lg:space-y-0 lg:space-x-6 mb-10 pb-8 border-b border-gray-100">
                <!-- Seller Image -->
                @if($seller->seller_image)
                    <div class="relative">
                        <img src="{{ asset('storage/' . $seller->seller_image) }}" 
                             alt="Seller Image" 
                             class="w-20 h-20 rounded-2xl object-cover border-2 border-white shadow-lg">
                        <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                @else
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-400 via-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                @endif

                <!-- Seller Info -->
                <div class="flex-1">
                    <h2 class="text-3xl lg:text-4xl font-bold gradient-text mb-3">{{ $seller->name }}</h2>
                    <div class="space-y-2">
                        <div class="flex items-center text-gray-600">
                            <div class="w-8 h-8 bg-blue-50 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="font-medium">{{ $seller->email }}</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <div class="w-8 h-8 bg-green-50 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <span class="font-medium">{{ $seller->phone ?? 'N/A' }}</span>
                        </div>
                    </div>
                </div>

                <!-- Stats Card -->
                <div class="bg-gradient-to-br from-emerald-500 via-teal-600 to-cyan-700 rounded-2xl p-6 text-white min-w-[200px] shadow-xl">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <p class="text-white/80 text-sm font-medium mb-1">Total Products</p>
                        <p class="text-3xl font-bold">{{ $totalProducts }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Seller Details Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100/50">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-blue-900/70">NID / Birth Reg.</p>
                    </div>
                    <p class="font-bold text-gray-800 text-lg">{{ $seller->nid }}</p>
                </div>

                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-6 border border-emerald-100/50">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-emerald-900/70">Production Area</p>
                    </div>
                    <p class="font-bold text-gray-800 text-lg">{{ $seller->production_area }}</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100/50">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-purple-900/70">Business Type</p>
                    </div>
                    <p class="font-bold text-gray-800 text-lg">{{ $seller->business_type }}</p>
                </div>

                <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 border border-amber-100/50 md:col-span-2">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-amber-900/70">Bank Account</p>
                    </div>
                    <p class="font-bold text-gray-800 text-lg">{{ $seller->bank_account }} <span class="text-gray-600 font-medium">({{ $seller->bank_name }})</span></p>
                </div>

                <div class="bg-gradient-to-br from-rose-50 to-pink-50 rounded-2xl p-6 border border-rose-100/50">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-rose-100 rounded-xl flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-rose-900/70">Mobile Wallet</p>
                    </div>
                    <p class="font-bold text-gray-800 text-lg">{{ $seller->mobile_wallet ?? 'Not Provided' }}</p>
                </div>
            </div>

            <!-- Product Description -->
            <div class="bg-gradient-to-r from-slate-50 to-gray-50 rounded-2xl p-6 border border-slate-200/50 mb-6">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <p class="text-lg font-bold text-gray-800">Specialty Product Description</p>
                </div>
                <p class="text-gray-700 leading-relaxed pl-13">{{ $seller->product_description }}</p>
            </div>

            <!-- File Attachments -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @if($seller->nid_file)
                    <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-6 border border-cyan-100/50 hover-lift">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 bg-cyan-100 rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-cyan-900/70">NID / Birth Certificate</p>
                        </div>
                        <a href="{{ asset('storage/' . $seller->nid_file) }}" target="_blank" 
                           class="inline-flex items-center text-cyan-600 font-semibold hover:text-cyan-700 transition-colors duration-200">
                            View Document
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                @endif

                @if($seller->proof_file)
                    <div class="bg-gradient-to-br from-teal-50 to-emerald-50 rounded-2xl p-6 border border-teal-100/50 hover-lift">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 bg-teal-100 rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-teal-900/70">Proof of Authenticity</p>
                        </div>
                        <a href="{{ asset('storage/' . $seller->proof_file) }}" target="_blank" 
                           class="inline-flex items-center text-teal-600 font-semibold hover:text-teal-700 transition-colors duration-200">
                            View Document
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Recent Uploads Section -->
        <div class="glass-effect rounded-3xl subtle-shadow border border-white/50 p-10 hover-lift">
            <div class="flex items-center mb-8">
                <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h4 class="text-3xl font-bold gradient-text">Recent Uploads</h4>
            </div>
            
            <!-- Products Table -->
            <div class="overflow-hidden rounded-2xl border border-gray-200/60">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-slate-800 via-gray-900 to-slate-800 text-white">
                                <th class="text-left py-5 px-6 font-semibold text-lg">Product Name</th>
                                <th class="text-right py-5 px-6 font-semibold text-lg">Price (৳)</th>
                                <th class="text-center py-5 px-6 font-semibold text-lg">Stock</th>
                                <th class="text-right py-5 px-6 font-semibold text-lg">Total Value (৳)</th>
                                <th class="text-center py-5 px-6 font-semibold text-lg">Upload Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white/60 backdrop-blur-sm">
                            @foreach ($products as $product)
                                <tr class="border-b border-gray-100/80 hover:bg-white/80 transition-all duration-300 group">
                                    <td class="py-5 px-6 font-semibold text-gray-800 group-hover:text-gray-900">
                                        {{ $product->name }}
                                    </td>
                                    <td class="py-5 px-6 text-right font-mono text-lg font-bold text-emerald-700">
                                        ৳{{ number_format($product->price, 2) }}
                                    </td>
                                    <td class="py-5 px-6 text-center">
                                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm bg-gradient-to-r from-blue-100 to-indigo-100 text-blue-800 font-semibold border border-blue-200/50">
                                            {{ $product->stock }}
                                        </span>
                                    </td>
                                    <td class="py-5 px-6 text-right font-mono text-lg font-bold text-gray-800">
                                        ৳{{ number_format($product->price * $product->stock, 2) }}
                                    </td>
                                    <td class="py-5 px-6 text-center">
                                        <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1.5 rounded-lg font-medium">
                                            {{ $product->created_at->diffForHumans() }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Empty State -->
            @if($products->count() == 0)
                <div class="text-center py-20 bg-gradient-to-br from-gray-50 to-slate-50 rounded-2xl border-2 border-dashed border-gray-200">
                    <div class="w-20 h-20 bg-gradient-to-br from-gray-100 to-slate-200 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">No products uploaded yet</h3>
                    <p class="text-gray-500 text-lg">Products will appear here once the seller uploads them</p>
                </div>
            @endif
        </div>
    </div>
</body>
</html>