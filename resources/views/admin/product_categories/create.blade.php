@extends('layouts.admin')

@section('content')
<div class="container">
  <h1>Create Product Category</h1>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('admin.product-categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input name="name" id="name" value="{{ old('name') }}" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="file" name="image" id="image" class="form-control">
    </div>

    <button class="btn btn-success">Create</button>
    <a href="{{ route('admin.product-categories.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection
