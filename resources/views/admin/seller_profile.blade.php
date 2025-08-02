<h2>Seller: {{ $seller->name }}</h2>
<p>Email: {{ $seller->email }}</p>
<p>Total Products Uploaded: {{ $totalProducts }}</p>

<h4>Recent Uploads</h4>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }} - {{ $product->created_at->diffForHumans() }}</li>
    @endforeach
</ul>

<a href="{{ route('admin.dashboard') }}">← Back to Dashboard</a>
