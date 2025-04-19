@extends('layouts.admin')

@section('content')
<div class="container">
  <h1>Edit Product Category</h1>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('admin.product-categories.update', $productCategory) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input name="name" id="name" value="{{ old('name', $productCategory->name) }}" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea name="description" id="description" class="form-control">{{ old('description', $productCategory->description) }}</textarea>
    </div>

    @if($productCategory->image)
    <div class="mb-3">
      <strong>Current Image:</strong><br>
      <img src="{{ asset('storage/' . $productCategory->image) }}" style="max-width:150px;">
    </div>
    @endif

    <div class="mb-3">
      <label for="image" class="form-label">Change Image</label>
      <input type="file" name="image" id="image" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('admin.product-categories.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection
