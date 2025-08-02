<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EthniCart Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#22C55E',
                        secondary: '#16A34A', 
                        accent: '#84CC16',
                        success: '#10B981',
                        danger: '#EF4444',
                        dark: '#0F172A',
                        'green-dark': '#14532D',
                        'lime-light': '#D9F99D'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-green-900 via-green-800 to-emerald-900 min-h-screen">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 z-50 w-64 bg-gradient-to-b from-green-800 to-green-900 shadow-2xl transform transition-transform duration-300 ease-in-out border-r border-green-700">
        <div class="flex items-center justify-center h-16 px-4 bg-gradient-to-r from-lime-500 to-green-500">
            <h1 class="text-xl font-bold text-white">🛍️ EthniCart Admin</h1>
        </div>
        
        <nav class="mt-8 px-4">
            <ul class="space-y-2">
                <li>
                    <a href="#dashboard" class="flex items-center px-4 py-3 text-green-100 rounded-lg hover:bg-green-700 hover:text-lime-200 transition-all duration-200 hover:shadow-lg">
                        <span class="mr-3">📊</span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#users" class="flex items-center px-4 py-3 text-green-100 rounded-lg hover:bg-green-700 hover:text-lime-200 transition-all duration-200 hover:shadow-lg">
                        <span class="mr-3">👤</span>
                        Users
                    </a>
                </li>
                <li>
                    <a href="#sellers" class="flex items-center px-4 py-3 text-green-100 rounded-lg hover:bg-green-700 hover:text-lime-200 transition-all duration-200 hover:shadow-lg">
                        <span class="mr-3">🧑‍💼</span>
                        Sellers
                    </a>
                </li>
                <li>
                    <a href="#products" class="flex items-center px-4 py-3 text-green-100 rounded-lg hover:bg-green-700 hover:text-lime-200 transition-all duration-200 hover:shadow-lg">
                        <span class="mr-3">📦</span>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#analytics" class="flex items-center px-4 py-3 text-green-100 rounded-lg hover:bg-green-700 hover:text-lime-200 transition-all duration-200 hover:shadow-lg">
                        <span class="mr-3">📈</span>
                        Analytics
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="absolute bottom-4 left-4 right-4">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center px-4 py-3 text-white bg-red-600 rounded-lg hover:bg-red-700 transition-all duration-200 hover:shadow-lg transform hover:scale-105">
                    <span class="mr-2">🚪</span>
                    Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-4xl font-bold text-white mb-2">👮 Welcome, Admin</h1>
                <p class="text-green-200 text-lg">Manage your EthniCart platform with ease</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="bg-green-800/50 backdrop-blur-sm px-6 py-3 rounded-xl shadow-lg border border-green-700">
                    <span class="text-sm text-green-200">Today</span>
                    <p class="font-semibold text-white" id="current-date"></p>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8" id="dashboard">
            <h2 class="col-span-full text-2xl font-bold text-white mb-4">📊 Summary</h2>
            
            <div class="bg-gradient-to-br from-lime-400 to-green-500 p-6 rounded-2xl shadow-xl border border-green-400/30 backdrop-blur-sm transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-900 text-sm font-medium">Total Users</p>
                        <p class="text-3xl font-bold text-white">{{ count($users) }}</p>
                        <p class="text-green-100 text-sm mt-2">↗ Active Platform Users</p>
                    </div>
                    <div class="text-4xl opacity-80 text-white">👤</div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-green-400 to-emerald-600 p-6 rounded-2xl shadow-xl border border-green-400/30 backdrop-blur-sm transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-900 text-sm font-medium">Total Sellers</p>
                        <p class="text-3xl font-bold text-white">{{ count($sellers) }}</p>
                        <p class="text-green-100 text-sm mt-2">↗ Registered Vendors</p>
                    </div>
                    <div class="text-4xl opacity-80 text-white">🧑‍💼</div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-emerald-400 to-green-600 p-6 rounded-2xl shadow-xl border border-green-400/30 backdrop-blur-sm transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-900 text-sm font-medium">Total Products</p>
                        <p class="text-3xl font-bold text-white">{{ count($products) }}</p>
                        <p class="text-green-100 text-sm mt-2">↗ Listed Items</p>
                    </div>
                    <div class="text-4xl opacity-80 text-white">📦</div>
                </div>
            </div>
        </div>

        <!-- Users Section -->
        <div class="bg-green-800/40 backdrop-blur-sm rounded-2xl shadow-2xl mb-8 border border-green-700/50" id="users">
            <div class="p-6 border-b border-green-700/50">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-white">👤 Users</h2>
                    <div class="flex items-center space-x-2">
                        <input type="text" placeholder="Search users..." class="px-4 py-2 bg-green-900/50 border border-green-600 rounded-lg focus:ring-2 focus:ring-lime-400 focus:border-transparent text-white placeholder-green-300">
                        <button class="px-4 py-2 bg-lime-500 hover:bg-lime-400 text-white rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg">
                            Search
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-green-900/50">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-lime-200 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-lime-200 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-lime-200 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-lime-200 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-green-700/50">
                        @foreach ($users as $user)
                        <tr class="hover:bg-green-700/30 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 bg-gradient-to-br from-lime-400 to-green-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                        {{ substr($user->name, 0, 1) }}
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-semibold text-white">{{ $user->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-200">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-xs font-bold rounded-full {{ $user->is_blocked ? 'bg-red-500/20 text-red-300 border border-red-500/30' : 'bg-lime-500/20 text-lime-300 border border-lime-500/30' }}">
                                    {{ $user->is_blocked ? 'Blocked' : 'Active' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                <form method="POST" action="{{ route($user->is_blocked ? 'admin.unblock.user' : 'admin.block.user', $user->id) }}" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="{{ $user->is_blocked ? 'text-lime-400 hover:text-lime-300 bg-lime-500/20 hover:bg-lime-500/30' : 'text-yellow-400 hover:text-yellow-300 bg-yellow-500/20 hover:bg-yellow-500/30' }} px-3 py-2 rounded-lg transition-all duration-200 border {{ $user->is_blocked ? 'border-lime-500/30' : 'border-yellow-500/30' }} transform hover:scale-105">
                                        {{ $user->is_blocked ? 'Unblock' : 'Block' }}
                                    </button>
                                </form>
                                <form method="POST" action="{{ route('admin.deleteUser', $user->id) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-300 bg-red-500/20 hover:bg-red-500/30 px-3 py-2 rounded-lg transition-all duration-200 border border-red-500/30 transform hover:scale-105">
                                        Remove
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sellers Section -->
        <div class="bg-green-800/40 backdrop-blur-sm rounded-2xl shadow-2xl mb-8 border border-green-700/50" id="sellers">
            <div class="p-6 border-b border-green-700/50">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-white">🧑‍💼 Sellers</h2>
                    <div class="flex items-center space-x-2">
                        <input type="text" placeholder="Search sellers..." class="px-4 py-2 bg-green-900/50 border border-green-600 rounded-lg focus:ring-2 focus:ring-lime-400 focus:border-transparent text-white placeholder-green-300">
                        <button class="px-4 py-2 bg-lime-500 hover:bg-lime-400 text-white rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg">
                            Search
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-green-900/50">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-lime-200 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-lime-200 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-lime-200 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-lime-200 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-green-700/50">
                        @foreach ($sellers as $seller)
                        <tr class="hover:bg-green-700/30 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 bg-gradient-to-br from-emerald-400 to-green-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                        {{ substr($seller->name, 0, 1) }}
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-semibold text-white">{{ $seller->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-200">{{ $seller->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-xs font-bold rounded-full {{ $seller->is_blocked ? 'bg-red-500/20 text-red-300 border border-red-500/30' : 'bg-lime-500/20 text-lime-300 border border-lime-500/30' }}">
                                    {{ $seller->is_blocked ? 'Blocked' : 'Active' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                <form action="{{ route('admin.toggleSellerBlock', $seller->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="{{ $seller->is_blocked ? 'text-lime-400 hover:text-lime-300 bg-lime-500/20 hover:bg-lime-500/30' : 'text-yellow-400 hover:text-yellow-300 bg-yellow-500/20 hover:bg-yellow-500/30' }} px-3 py-2 rounded-lg transition-all duration-200 border {{ $seller->is_blocked ? 'border-lime-500/30' : 'border-yellow-500/30' }} transform hover:scale-105">
                                        {{ $seller->is_blocked ? 'Unblock' : 'Block' }}
                                    </button>
                                </form>
                                <a href="{{ route('admin.sellerProfile', $seller->id) }}" class="text-blue-400 hover:text-blue-300 bg-blue-500/20 hover:bg-blue-500/30 px-3 py-2 rounded-lg transition-all duration-200 border border-blue-500/30 transform hover:scale-105 inline-block">
                                    🔍 View Profile
                                </a>
                                <form action="{{ route('admin.deleteSeller', $seller->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-300 bg-red-500/20 hover:bg-red-500/30 px-3 py-2 rounded-lg transition-all duration-200 border border-red-500/30 transform hover:scale-105">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Analytics Section -->
        <div class="bg-green-800/40 backdrop-blur-sm rounded-2xl shadow-2xl mb-8 border border-green-700/50" id="analytics">
            <div class="p-6 border-b border-green-700/50">
                <h2 class="text-2xl font-bold text-white">📈 Products Per Seller Chart</h2>
            </div>
            <div class="p-6">
                <div id="chart-container" style="height:300px;">
                    <canvas id="productChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Coming Soon Section -->
        <div class="bg-gradient-to-r from-green-800/60 to-emerald-800/60 backdrop-blur-sm rounded-2xl p-8 text-center border border-green-700/50 shadow-2xl">
            <div class="text-6xl mb-6">💬</div>
            <h2 class="text-3xl font-bold text-white mb-4">Chat with Sellers (Coming Soon)</h2>
            <p class="text-green-200 mb-6 text-lg"><em>Chat placeholder – messaging system to be implemented later.</em></p>
            <div class="inline-flex items-center px-6 py-3 bg-lime-500/20 text-lime-300 rounded-full text-sm font-medium border border-lime-500/30 backdrop-blur-sm">
                🚧 Under Development
            </div>
        </div>
    </div>

    <script>
        // Set current date
        document.getElementById('current-date').textContent = new Date().toLocaleDateString('en-US', {
            weekday: 'long',
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        });

        // Your original chart logic with green theme
        const sellerNames = @json($sellers->pluck('name'));
        const productCounts = @json($sellers->map(fn($s) => $s->products->count()));
        
        new Chart(document.getElementById('productChart'), {
            type: 'bar',
            data: {
                labels: sellerNames,
                datasets: [{
                    label: 'Products Uploaded',
                    data: productCounts,
                    backgroundColor: [
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(132, 204, 22, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(74, 222, 128, 0.8)',
                        'rgba(34, 197, 94, 0.6)'
                    ],
                    borderColor: [
                        'rgba(34, 197, 94, 1)',
                        'rgba(132, 204, 22, 1)',
                        'rgba(16, 185, 129, 1)',
                        'rgba(74, 222, 128, 1)',
                        'rgba(34, 197, 94, 0.8)'
                    ],
                    borderWidth: 2,
                    borderRadius: 8,
                    borderSkipped: false,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(34, 197, 94, 0.2)'
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.8)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.8)'
                        }
                    }
                }
            }
        });

        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Enhanced hover effects
        document.querySelectorAll('button, .transform').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.02)';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>
</html>