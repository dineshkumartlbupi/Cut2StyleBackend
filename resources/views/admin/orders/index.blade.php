@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Orders</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th><th>Order #</th><th>User</th><th>Total</th><th>Status</th><th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->order_number }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>${{ $order->total_amount }}</td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>{{ $order->created_at->format('d M Y') }}</td>
                </tr>
            @empty
                <tr><td colspan="6">No orders found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
