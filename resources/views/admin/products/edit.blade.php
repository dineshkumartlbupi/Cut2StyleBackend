@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h3>Edit Product</h3>
    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Price (₹)</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control" required step="0.01">
        </div>
        <div class="mb-3">
            <label>Current Image</label><br>
            @if($product->image_url)
                <img src="{{ asset('storage/' . $product->image_url) }}" alt="" width="100" class="mb-2">
            @endif
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-success">Update Product</button>
    </form>
</div>
@endsection
