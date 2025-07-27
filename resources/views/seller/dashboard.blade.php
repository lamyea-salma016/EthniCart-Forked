<h2>Welcome, {{ Auth::guard('seller')->user()->name }}!</h2>

<p><a href="{{ route('seller.products.index') }}">View My Products</a></p>
<p><a href="{{ route('seller.products.create') }}">Upload New Product</a></p>

<form method="POST" action="{{ route('seller.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
