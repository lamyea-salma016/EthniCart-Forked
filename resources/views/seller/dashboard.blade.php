<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EthniCart - Seller Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-900 text-white w-64 flex-shrink-0">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-700">
                <h1 class="text-2xl font-bold text-orange-400">EthniCart</h1>
                <p class="text-sm text-gray-400">Seller Panel</p>
            </div>
            
            <!-- Navigation -->
            <nav class="mt-6">
                <div class="px-6 py-3 bg-gray-800 border-r-4 border-orange-400">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span class="font-medium">Dashboard</span>
                </div>
                <a href="{{ route('seller.product.create') }}" class="block px-6 py-3 hover:bg-gray-800 transition-colors">
                    <i class="fas fa-plus mr-3"></i>
                    <span>Add Product</span>
                </a>
                <div class="px-6 py-3 hover:bg-gray-800 transition-colors cursor-pointer">
                    <i class="fas fa-box mr-3"></i>
                    <span>Products</span>
                </div>
                <div class="px-6 py-3 hover:bg-gray-800 transition-colors cursor-pointer">
                    <i class="fas fa-shopping-cart mr-3"></i>
                    <span>Orders</span>
                </div>
                <div class="px-6 py-3 hover:bg-gray-800 transition-colors cursor-pointer">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>Analytics</span>
                </div>
                <div class="px-6 py-3 hover:bg-gray-800 transition-colors cursor-pointer">
                    <i class="fas fa-cog mr-3"></i>
                    <span>Settings</span>
                </div>
            </nav>
            
            <!-- User Info & Logout -->
            <div class="absolute bottom-0 w-64 p-6 border-t border-gray-700">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-orange-400 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div class="ml-3">
                        <p class="font-medium">{{ Auth::guard('seller')->user()->name }}</p>
                        <p class="text-sm text-gray-400">Seller</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('seller.logout') }}">
                    @csrf
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 px-4 py-2 rounded transition-colors">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
                        <p class="text-gray-600">Welcome back, {{ Auth::guard('seller')->user()->name }}!</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-500">{{ date('l, F j, Y') }}</p>
                        <p class="text-sm text-gray-500">{{ date('g:i A') }}</p>
                    </div>
                </div>
            </header>
            
            <!-- Dashboard Content -->
            <div class="p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Products</p>
                                <p class="text-3xl font-bold text-gray-900">{{ $products->count() }}</p>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <i class="fas fa-box text-blue-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-green-600">
                                <i class="fas fa-arrow-up mr-1"></i>
                                12% from last month
                            </span>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Sales</p>
                                <p class="text-3xl font-bold text-gray-900">৳45,320</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-dollar-sign text-green-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-green-600">
                                <i class="fas fa-arrow-up mr-1"></i>
                                8% from last month
                            </span>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Orders</p>
                                <p class="text-3xl font-bold text-gray-900">156</p>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-full">
                                <i class="fas fa-shopping-cart text-purple-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-red-600">
                                <i class="fas fa-arrow-down mr-1"></i>
                                3% from last month
                            </span>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Low Stock</p>
                                <p class="text-3xl font-bold text-gray-900">8</p>
                            </div>
                            <div class="bg-red-100 p-3 rounded-full">
                                <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-gray-600">Items need restocking</span>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="bg-white rounded-lg shadow mb-8">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">Quick Actions</h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <a href="{{ route('seller.product.create') }}" class="bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white p-4 rounded-lg transition-all transform hover:scale-105">
                                <div class="flex items-center">
                                    <i class="fas fa-plus-circle text-2xl mr-3"></i>
                                    <div>
                                        <h4 class="font-semibold">Add Product</h4>
                                        <p class="text-sm opacity-90">Upload new product</p>
                                    </div>
                                </div>
                            </a>
                            
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white p-4 rounded-lg transition-all transform hover:scale-105 cursor-pointer">
                                <div class="flex items-center">
                                    <i class="fas fa-chart-bar text-2xl mr-3"></i>
                                    <div>
                                        <h4 class="font-semibold">View Analytics</h4>
                                        <p class="text-sm opacity-90">Check performance</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white p-4 rounded-lg transition-all transform hover:scale-105 cursor-pointer">
                                <div class="flex items-center">
                                    <i class="fas fa-eye text-2xl mr-3"></i>
                                    <div>
                                        <h4 class="font-semibold">Manage Orders</h4>
                                        <p class="text-sm opacity-90">Process orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Products -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-800">Your Products</h3>
                        <span class="text-sm text-gray-500">{{ $products->count() }} total products</span>
                    </div>
                    
                    @forelse($products as $product)
                        @if($loop->first)
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                        @endif
                        
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img class="h-16 w-16 rounded-lg object-cover mr-4" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                                        <div class="text-sm text-gray-500">{{ Str::limit($product->description, 50) }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-gray-900">৳{{ number_format($product->price, 2) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $product->stock }}</div>
                                @if($product->stock < 10)
                                    <div class="text-xs text-red-600">Low Stock</div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($product->stock > 0)
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                @else
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        Out of Stock
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        
                        @if($loop->last)
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    @empty
                        <div class="p-12 text-center">
                            <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-box-open text-gray-400 text-3xl"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">No products yet</h3>
                            <p class="text-gray-600 mb-6">Get started by uploading your first product to EthniCart.</p>
                            <a href="{{ route('seller.product.create') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                                <i class="fas fa-plus mr-2"></i>
                                Upload Your First Product
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</body>
</html>