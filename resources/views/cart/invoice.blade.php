<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EthniCart Invoice</title>

    <!-- Google Fonts: Noto Sans Bengali + Roboto for fallback -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&family=Roboto&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans Bengali', 'Roboto', Arial, sans-serif;
            font-size: 14px;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            height: 60px;
            margin-right: 15px;
        }

        h2 {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background: #f2f2f2;
        }

        .summary {
            margin-top: 20px;
        }

        .summary p, .summary h3 {
            margin: 4px 0;
        }
    </style>
</head>
<body>

    <!-- Header with logo -->
    <div class="header">
        <img src="{{ public_path('images/site_logo.png') }}" alt="EthniCart Logo">
        <h2>EthniCart Invoice</h2>
    </div>

    <!-- Customer Info -->
    <p><strong>Name:</strong> {{ $user->name ?? 'Guest' }}</p>
    <p><strong>Email:</strong> {{ $user->email ?? 'guest@example.com' }}</p>

    <!-- Cart Table -->
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>Tk {{ number_format($item['price'], 2) }}</td>
                <td>Tk {{ number_format($item['price'] * $item['quantity'], 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Summary -->
    <div class="summary">
        <p><strong>Subtotal:</strong> Tk {{ number_format($subtotal, 2) }}</p>
        <p><strong>Shipping:</strong> Tk {{ $shipping }}</p>
        <p><strong>Tax (5%):</strong> Tk {{ number_format($tax, 2) }}</p>
        <h3>Total: Tk {{ number_format($total, 2) }}</h3>
    </div>

    <p>Thank you for shopping with EthniCart!</p>

</body>
</html>
