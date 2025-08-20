<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Statistics</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6 lg:p-12">

    <div class="min-h-screen bg-gray-50 p-6 lg:p-12">

    <!-- Back to Dashboard Button -->
    <div class="mb-6">
        <a href="{{ url('/admin/dashboard') }}" 
           class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-6 rounded-lg shadow transition">
            Back to Dashboard
        </a>
    </div>

    <!-- Page Heading -->
    <h2 class="text-3xl font-bold text-gray-800 mb-8">Seller Statistics</h2>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
        <div class="bg-white rounded-lg shadow p-6 border-l-4 border-teal-500 hover:shadow-lg transition">
            <p class="text-gray-500 font-medium mb-2">Total Products Sold</p>
            <p class="text-3xl font-bold text-gray-800">{{ $totalProducts }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 border-l-4 border-yellow-500 hover:shadow-lg transition">
            <p class="text-gray-500 font-medium mb-2">Total Earnings</p>
            <p class="text-3xl font-bold text-gray-800">{{ number_format($totalMoney, 2) }} tk</p>
        </div>
    </div>

    <!-- Sold Products Table -->
    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Product Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Total Quantity Sold</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Total Sales</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($soldProducts as $product)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 font-medium">{{ $product->product_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ $product->total_quantity }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 font-semibold text-teal-600">{{ number_format($product->total_sales, 2) }} tk </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($soldProducts->isEmpty())
            <p class="text-center text-gray-500 p-6">No products sold yet.</p>
        @endif
    </div>
</div>


</body>
</html>
