@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            <i class="fas fa-boxes text-primary me-2"></i> Product List
        </h3>
        <a href="{{ route('admin.products.create') }}" class="btn btn-success shadow">
            <i class="fas fa-plus me-1"></i> Add Product
        </a>
    </div>

    @if($products->count())
        <div class="table-responsive shadow-sm rounded border">
            <table class="table table-hover align-middle mb-0 table-bordered">
                <thead class="table-light text-center">
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 12%;"><i class="fas fa-image me-1"></i> Image</th>
                        <th><i class="fas fa-box me-1"></i> Name</th>
                        <th><i class="fas fa-tag me-1"></i> Price</th>
                        <th style="width: 20%;"><i class="fas fa-cog me-1"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="text-center align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="60" height="60" class="rounded shadow-sm img-thumbnail" style="object-fit: cover;">
                            @else
                                <img src="https://via.placeholder.com/60?text=No+Image" alt="No Image" width="60" height="60" class="rounded shadow-sm img-thumbnail">
                            @endif
                        </td>
                        <td class="text-start">
                            <strong>{{ $product->name }}</strong>
                            <p class="text-muted small mb-0">{{ Str::limit($product->description, 50) }}</p>
                        </td>
                        <td><strong class="text-success">₹{{ number_format($product->price, 2) }}</strong></td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-sm btn-outline-primary" title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-outline-warning" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
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
            <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" alt="No products" width="140" class="mb-3">
            <h5 class="text-muted">
                <i class="fas fa-box-open me-2"></i>No products available
            </h5>
            <p class="text-secondary">Start by adding a new product to your store.</p>
            <a href="{{ route('admin.products.create') }}" class="btn btn-outline-primary mt-3">
                <i class="fas fa-plus me-1"></i> Add Product
            </a>
        </div>
    @endif
</div>
@endsection
