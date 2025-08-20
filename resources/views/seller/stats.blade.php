<h2>Seller Statistics</h2>

<p><strong>Total Products Sold:</strong> {{ $totalProducts }}</p>
<p><strong>Total Earnings:</strong> ${{ number_format($totalMoney, 2) }}</p>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Total Quantity Sold</th>
            <th>Total Sales</th>
        </tr>
    </thead>
    <tbody>
        @foreach($soldProducts as $product)
            <tr>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->total_quantity }}</td>
                <td>${{ number_format($product->total_sales, 2) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
