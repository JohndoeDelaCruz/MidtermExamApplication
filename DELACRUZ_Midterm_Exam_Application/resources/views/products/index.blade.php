@extends('layouts.app')

@section('title', 'Anime Collection - Home')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Featured Anime Series</h1>
    
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top" alt="{{ $product['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">By {{ $product['author'] }}</h6>
                        <p class="card-text">{{ $product['description'] }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Genre:</strong> {{ $product['genre'] }}</li>
                        <li class="list-group-item"><strong>Release Year:</strong> {{ $product['release_year'] }}</li>
                        <li class="list-group-item"><strong>Price:</strong> ${{ number_format($product['price'], 2) }}</li>
                    </ul>
                    <div class="card-body">
                        <button class="btn btn-primary w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection