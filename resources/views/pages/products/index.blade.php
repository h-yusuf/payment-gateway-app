@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="mb-4">Product List</h2>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <h6 class="text-primary">Rp {{ number_format($product->price, 0, ',', '.') }}</h6>
                    <a href="{{ route('checkout', ['id' => $product->id]) }}" class="btn btn-success">Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection