@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h3 class="mb-4"><i class="fas fa-edit text-primary me-2"></i>Edit User</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="shadow p-4 rounded bg-white">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label"><strong>Name</strong></label>
            <input type="text" class="form-control" id="name" name="name"
                   value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label"><strong>Email</strong></label>
            <input type="email" class="form-control" id="email" name="email"
                   value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label"><strong>Role</strong></label>
            <select class="form-select" name="role" id="role" required>
                @foreach($roles as $role)
                    <option value="{{ $role }}" {{ $user->role === $role ? 'selected' : '' }}>{{ $role }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label"><strong>Gender</strong></label>
            <select class="form-select" name="gender" id="gender">
                <option value="">Select Gender</option>
                <option value="Male" {{ old('gender', $user->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender', $user->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ old('gender', $user->gender) == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label"><strong>Date of Birth</strong></label>
            <input type="date" class="form-control" id="dob" name="dob"
                   value="{{ old('dob', $user->dob ? $user->dob->format('Y-m-d') : '') }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label"><strong>Address</strong></label>
            <textarea class="form-control" id="address" name="address" rows="3">{{ old('address', $user->address) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label"><strong>New Password</strong> (optional)</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank to keep current password">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label"><strong>Confirm Password</strong></label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Back
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Update User
            </button>
        </div>
    </form>
</div>
@endsection
