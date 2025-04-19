@extends('layouts.admin')

@section('content')
<div class="container">
  <h1>{{ $product->name }}</h1>

  <p><strong>Category:</strong> {{ $product->category->name ?? '—' }}</p>
  <p><strong>Price:</strong> ${{ number_format($product->price,2) }}</p>
  <p><strong>Description:</strong> {{ $product->description }}</p>

  @if($product->image)
    <p><img src="{{ asset('storage/' . $product->image) }}" style="max-width:300px;"></p>
  @endif

  <p><strong>Created by:</strong> {{ $product->user->name ?? '—' }}</p>

  <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back to List</a>
  <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">Edit</a>
</div>
@endsection
