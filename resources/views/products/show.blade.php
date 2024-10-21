@extends('layout')

@section('content')
    <h1>Product Details</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Price:</strong> ${{ $product->price }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
@endsection
