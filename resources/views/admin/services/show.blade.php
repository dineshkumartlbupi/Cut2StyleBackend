@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $service->name }}</h1>
    <p><strong>Category:</strong> {{ $service->category->name ?? 'N/A' }}</p>
    <p><strong>Description:</strong> {{ $service->description }}</p>
    <p><strong>Price:</strong> ${{ number_format($service->price, 2) }}</p>

    @if($service->image)
        <img src="{{ asset('storage/' . $service->image) }}" width="200">
    @endif

    <br><br>
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
