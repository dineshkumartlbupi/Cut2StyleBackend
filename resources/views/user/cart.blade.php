@extends('layouts.user')

@section('content')
    <h2>Your Cart</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item['product_id'] }}</td> <!-- You can show product name here -->
                        <td>{{ $item['quantity'] }}</td>
                        <td>
                            <form action="{{ route('user.cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item['product_id'] }}">
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('user.order.place') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
        {{-- <form action="{{ route('user.order.place') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form> --}}
    @else
        <p>Your cart is empty!</p>
    @endif
@endsection
