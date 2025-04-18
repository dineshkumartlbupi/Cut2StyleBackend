@extends('layouts.user')

@section('content')

    <h2>Your Cart</h2>

    @if(session('cart'))
        <div class="row">
            @foreach(session('cart') as $product_id => $details)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/'.$details['image']) }}" class="card-img-top" alt="{{ $details['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $details['name'] }}</h5>
                            <p class="card-text">Price: ${{ $details['price'] }}</p>
                            <p class="card-text">Quantity: {{ $details['quantity'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif

@endsection
