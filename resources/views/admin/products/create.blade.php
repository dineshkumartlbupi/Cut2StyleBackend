@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h3>Add Product</h3>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" class="form-control mt-10" placeholder="Product Name" required>

        <textarea name="description" class="form-control mt-10" placeholder="Description (optional)"></textarea>

        <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" required>

        <input type="file" name="image" class="form-control">

        <button type="submit" class="btn btn-primary mt-3">Create Product</button>
    </form>

</div>
@endsection
