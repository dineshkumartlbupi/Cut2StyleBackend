@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">
        <i class="fas fa-edit text-primary me-2"></i> Edit Vendor
    </h3>

    <form action="{{ route('admin.vendors.update', $vendor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $vendor->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $vendor->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password (Leave blank to keep current)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
                <option value="Male" {{ old('gender', $vendor->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender', $vendor->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ old('gender', $vendor->gender) == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', \Carbon\Carbon::parse($vendor->dob)->format('Y-m-d')) }}" required>

        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address">{{ old('address', $vendor->address) }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">
            <i class="fas fa-save me-2"></i> Update Vendor
        </button>
    </form>
</div>
@endsection
