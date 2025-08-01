@extends('layouts.app')

@section('title', 'EthniCart | Farm Fresh Vegetables')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($products as $product)
        <div class="bg-white rounded-lg shadow-md p-4">
            @if (!empty($product->image))
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover mb-2">
            @else
                <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No Image</div>
            @endif

            <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
            <p class="text-gray-600">{{ $product->description }}</p>
            <p class="text-blue-600 font-bold">Tk {{ $product->price }}</p>
        </div>
    @endforeach
</div>

  
@endsection
