<h2>Welcome, Admin!</h2>

<ul>
    <li>Total Products: {{ 'Coming Soon' }}</li> 
    <li>Total Sellers: {{ 'Coming Soon' }}</li>
    <li>Total Sales: {{ 'Coming Soon' }}</li>
</ul>

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
