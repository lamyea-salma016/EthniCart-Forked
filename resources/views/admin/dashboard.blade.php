<h1>Welcome, Admin</h1>

<h2>Summary</h2>
<ul>
    <li>Total Users: {{ count($users) }}</li>
    <li>Total Sellers: {{ count($sellers) }}</li>
    <li>Total Products: {{ count($products) }}</li>
</ul>

<h2>Users</h2>
<table>
    <tr><th>Name</th><th>Email</th><th>Action</th></tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form method="POST" action="{{ route('admin.deleteUser', $user->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<h2>Sellers</h2>
<table>
    <tr><th>Name</th><th>Email</th><th>Action</th></tr>
    @foreach ($sellers as $seller)
        <tr>
            <td>{{ $seller->name }}</td>
            <td>{{ $seller->email }}</td>
            <td>
                <form method="POST" action="{{ route('admin.deleteSeller', $seller->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
