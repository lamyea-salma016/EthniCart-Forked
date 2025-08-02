<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-50 to-emerald-50 min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-green-700 bg-white border border-green-200 rounded-lg hover:bg-green-50 hover:border-green-300 transition-all duration-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Dashboard
            </a>
        </div>

        <!-- Seller Information Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-green-100 p-8 mb-6">
            <div class="flex items-center space-x-4 mb-6">
                <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">{{ $seller->name }}</h2>
                    <div class="flex items-center text-gray-600">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>{{ $seller->email }}</span>
                    </div>
                </div>
            </div>
            
            <!-- Total Products Stats -->
            <div class="bg-gradient-to-r from-green-400 to-emerald-500 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm font-medium">Total Products Uploaded</p>
                        <p class="text-4xl font-bold">{{ $totalProducts }}</p>
                    </div>
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Uploads Section -->
        <div class="bg-white rounded-2xl shadow-sm border border-green-100 p-8">
            <div class="flex items-center mb-6">
                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h4 class="text-2xl font-bold text-gray-800">Recent Uploads</h4>
            </div>
            
            <!-- Products Table -->
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-green-400 to-emerald-500 text-white">
                            <th class="text-left py-4 px-6 font-semibold rounded-tl-lg">Name</th>
                            <th class="text-right py-4 px-6 font-semibold">Price (৳)</th>
                            <th class="text-center py-4 px-6 font-semibold">Quantity</th>
                            <th class="text-right py-4 px-6 font-semibold">Total Value (৳)</th>
                            <th class="text-center py-4 px-6 font-semibold rounded-tr-lg">Uploaded</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="border-b border-gray-100 hover:bg-green-50 transition-colors duration-200">
                                <td class="py-4 px-6 font-medium text-gray-800">{{ $product->name }}</td>
                                <td class="py-4 px-6 text-right text-gray-700 font-mono">৳{{ number_format($product->price, 2) }}</td>
                                <td class="py-4 px-6 text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-green-100 text-green-800 font-medium">
                                        {{ $product->stock }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-right text-gray-700 font-mono font-semibold">৳{{ number_format($product->price * $product->stock, 2) }}</td>
                                <td class="py-4 px-6 text-center text-sm text-gray-500">{{ $product->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Empty State (if no products) -->
            @if($products->count() == 0)
                <div class="text-center py-16 border border-gray-200 rounded-lg bg-gray-50">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <p class="text-gray-500 text-lg font-medium">No products uploaded yet</p>
                    <p class="text-gray-400 text-sm mt-1">Products will appear here once the seller uploads them</p>
                </div>
            @endif
        </div>
    </div>
</body>
</html>