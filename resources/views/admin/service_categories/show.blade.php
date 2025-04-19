@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Service Category: {{ $serviceCategory->name }}</h1>

    <div class="card mt-4">
        <div class="card-body">
            <h4>Name: {{ $serviceCategory->name }}</h4>

            @if ($serviceCategory->description)
                <p><strong>Description:</strong> {{ $serviceCategory->description }}</p>
            @endif

            @if ($serviceCategory->image)
                <div>
                    <strong>Image:</strong><br>
                    <img src="{{ asset('storage/' . $serviceCategory->image) }}" alt="{{ $serviceCategory->name }}" style="max-width: 200px;">
                </div>
            @endif

            <hr>

            <a href="{{ route('admin.service-categories.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('admin.service-categories.edit', $serviceCategory) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
