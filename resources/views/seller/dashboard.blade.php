<h2>Welcome, {{ Auth::guard('seller')->user()->name }}!</h2>


<form method="POST" action="{{ route('seller.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
