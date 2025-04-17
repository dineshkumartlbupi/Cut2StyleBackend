@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0 text-dark fw-bold">
            <i class="fas fa-users text-primary me-2"></i> Vendors List
        </h3>
        <a href="{{ route('admin.vendors.create') }}" class="btn btn-success shadow-sm">
            <i class="fas fa-plus me-1"></i> Add Vendor
        </a>
    </div>

    @if($vendors->count())
        <div class="table-responsive shadow rounded overflow-hidden border">
            <table class="table table-hover align-middle mb-0 table-bordered table-striped">
                <thead class="table-primary text-center">
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th><i class="fas fa-user me-1"></i> Name</th>
                        <th><i class="fas fa-envelope me-1"></i> Email</th>
                        <th><i class="fas fa-venus-mars me-1"></i> Gender</th>
                        <th><i class="fas fa-map-marker-alt me-1"></i> Location</th>
                        <th style="width: 20%;"><i class="fas fa-cogs me-1"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vendors as $vendor)
                        <tr class="text-center align-middle">
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-start fw-semibold">{{ $vendor->name }}</td>
                            <td>{{ $vendor->email }}</td>
                            <td>{{ $vendor->gender ?? 'N/A' }}</td>
                            <td>{{ $vendor->address ?? 'N/A' }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('admin.vendors.show', $vendor->id) }}" class="btn btn-sm btn-outline-info" title="View" data-bs-toggle="tooltip" data-bs-placement="top">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.vendors.edit', $vendor->id) }}" class="btn btn-sm btn-outline-warning" title="Edit" data-bs-toggle="tooltip" data-bs-placement="top">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.vendors.destroy', $vendor->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this vendor?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center mt-5">
            <img src="https://cdn-icons-png.flaticon.com/512/3176/3176363.png" alt="No vendors" width="150" class="mb-3 animate__animated animate__fadeInDown">
            <h5 class="text-muted">
                <i class="fas fa-user-slash me-2"></i>No vendors available
            </h5>
            <p class="text-secondary">You can start by adding a new vendor.</p>
            <a href="{{ route('admin.vendors.create') }}" class="btn btn-outline-primary mt-3">
                <i class="fas fa-plus me-1"></i> Add Vendor
            </a>
        </div>
    @endif
</div>
@endsection
