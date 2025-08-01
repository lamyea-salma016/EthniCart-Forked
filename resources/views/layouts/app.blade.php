<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'EthniCart')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    {{-- Include Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    @yield('content')

    {{-- Include Footer --}}
    @include('partials.footer')

    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>
<script>
document.querySelectorAll('.add-to-cart-form').forEach(form => {
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const productId = form.getAttribute('data-product-id');
        const formData = new FormData(form);

        fetch(`/cart/add/${productId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': formData.get('_token'),
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Added to cart!',
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                Swal.fire('Oops!', data.message || 'Something went wrong!', 'error');
            }
        })
        .catch(() => {
            Swal.fire('Error', 'Could not add to cart. Please try again.', 'error');
        });
    });
});
</script>