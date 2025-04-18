@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">
        <i class="fas fa-eye text-primary me-2"></i> Vendor Details
    </h3>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $vendor->name }}</h5>
            <p><strong>Email:</strong> {{ $vendor->email }}</p>
            <p><strong>Gender:</strong> {{ $vendor->gender }}</p>
            <p><strong>Date of Birth:</strong> {{ \Carbon\Carbon::parse($vendor->dob)->format('d-m-Y') }}</p>
            <p><strong>Address:</strong> {{ $vendor->address ?? 'No address provided' }}</p>
        </div>
    </div>

    <a href="{{ route('admin.vendors.index') }}" class="btn btn-primary mt-3">
        <i class="fas fa-arrow-left me-2"></i> Back to List
    </a>
</div>
@endsection
