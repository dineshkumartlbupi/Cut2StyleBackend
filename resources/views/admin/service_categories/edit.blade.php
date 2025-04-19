@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Service Category</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.service-categories.update', $serviceCategory) }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                value="{{ old('name', $serviceCategory->name) }}"
                required
            >
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea
                id="description"
                name="description"
                class="form-control"
                rows="4"
            >{{ old('description', $serviceCategory->description) }}</textarea>
        </div>

        <!-- Current Image Preview -->
        @if($serviceCategory->image)
            <div class="mb-3">
                <label class="form-label">Current Image</label><br>
                <img
                    src="{{ asset('storage/' . $serviceCategory->image) }}"
                    alt="{{ $serviceCategory->name }}"
                    style="max-width: 150px; height: auto;"
                >
            </div>
        @endif

        <!-- Upload New Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Change Image</label>
            <input
                type="file"
                id="image"
                name="image"
                class="form-control"
            >
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
        <a href="{{ route('admin.service-categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
