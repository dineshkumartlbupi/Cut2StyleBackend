@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Product Categories</h1>
    <a href="{{ route('admin.product-categories.create') }}" class="btn btn-primary mb-3">
      Add New Category
    </a>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($productCategories as $category)
        <tr>
          <td>{{ $category->name }}</td>
          <td>{{ $category->description }}</td>
          <td>
            @if($category->image)
              <img src="{{ asset('storage/' . $category->image) }}" width="50">
            @else
              —
            @endif
          </td>
          <td>
            <a href="{{ route('admin.product-categories.show', $category) }}" class="btn btn-sm btn-info">View</a>
            <a href="{{ route('admin.product-categories.edit', $category) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('admin.product-categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    {{ $productCategories->links() }}
</div>
@endsection
