@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">👋 Welcome, Admin {{ auth()->user()->name }}</h2>

    </div>

    <!-- Flash Message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Quick Action Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <a href="{{ route('admin.users.index') }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm h-100 bg-primary text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-2x mb-2"></i>
                        <h5 class="card-title">Manage Users</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.products.index') }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm h-100 bg-success text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-box-open fa-2x mb-2"></i>
                        <h5 class="card-title">Manage Products</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.vendors.index') }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm h-100 bg-info text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-store fa-2x mb-2"></i>
                        <h5 class="card-title">Manage Vendors</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.orders.index') }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm h-100 bg-warning text-dark">
                    <div class="card-body text-center">
                        <i class="fas fa-shopping-cart fa-2x mb-2"></i>
                        <h5 class="card-title">View Orders</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Stats Summary -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card text-center shadow-sm border-start border-4 border-primary">
                <div class="card-body">
                    <h6>Total Users</h6>
                    <h3 class="fw-bold text-primary">{{ $userCount ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow-sm border-start border-4 border-success">
                <div class="card-body">
                    <h6>Total Products</h6>
                    <h3 class="fw-bold text-success">{{ $productCount ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow-sm border-start border-4 border-info">
                <div class="card-body">
                    <h6>Total Vendors</h6>
                    <h3 class="fw-bold text-info">{{ $vendorCount ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow-sm border-start border-4 border-warning">
                <div class="card-body">
                    <h6>Total Orders</h6>
                    <h3 class="fw-bold text-warning">{{ $orderCount ?? 0 }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
