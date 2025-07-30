<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-semibold mb-4">Upload Product</h2>

    <form action="{{ route('seller.product.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium">Product Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Price</label>
            <input type="number" name="price" step="0.01" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Quantity</label>
            <input type="number" name="stock" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Product Image</label>
            <input type="file" name="image" class="w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Upload</button>
    </form>
</div>