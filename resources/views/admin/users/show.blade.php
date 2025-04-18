@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Details</h1>

        <div class="card">
            <div class="card-header">
                <h3>{{ $user->name }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
                <p><strong>Created At:</strong> {{ $user->created_at->format('d M Y') }}</p>
                <p><strong>Last Updated:</strong> {{ $user->updated_at->format('d M Y') }}</p>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Back to User List</a>
        </div>
    </div>
@endsection
