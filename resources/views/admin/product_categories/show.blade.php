@extends('layouts.admin')

@section('content')
<div class="container">
  <h1>Category: {{ $productCategory->name }}</h1>

  @if($productCategory->description)
    <p><strong>Description:</strong> {{ $productCategory->description }}</p>
  @endif

  @if($productCategory->image)
    <p><strong>Image:</strong><br>
      <img src="{{ asset('storage/' . $productCategory->image) }}" style="max-width:200px;">
    </p>
  @endif

  <a href="{{ route('admin.product-categories.index') }}" class="btn btn-secondary">Back to List</a>
  <a href="{{ route('admin.product-categories.edit', $productCategory) }}" class="btn btn-warning">Edit</a>
</div>
@endsection
