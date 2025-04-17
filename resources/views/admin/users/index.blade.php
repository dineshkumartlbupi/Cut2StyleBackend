@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            <i class="fas fa-users me-2 text-primary"></i> Users Management
        </h3>
        <a href="{{ route('admin.users.create') }}" class="btn btn-success shadow-sm d-flex align-items-center">
            <i class="fas fa-user-plus me-2"></i> <span>Add New User</span>
        </a>
    </div>

    <div class="input-group mb-4 shadow-sm">
        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
        <input type="text" class="form-control border-start-0" id="searchInput" placeholder="Search by name or email...">
    </div>

    @if ($users->count())
    <div class="table-responsive shadow-sm rounded-3">
        <table class="table table-hover table-striped align-middle mb-0">

            <thead class="table-light text-center">
                <tr>
                    <th>#</th>
                    <th><i class="fas fa-user me-1 text-secondary"></i> Name</th>
                    <th><i class="fas fa-envelope me-1 text-secondary"></i> Email</th>
                    <th><i class="fas fa-venus-mars me-1 text-secondary"></i> Gender</th>
                    <th><i class="fas fa-map-marker-alt me-1 text-secondary"></i> Address</th>
                    <th><i class="fas fa-cogs text-secondary"></i> Actions</th>
                </tr>
            </thead>
            <tbody id="userTable">
                @foreach ($users as $user)
                <tr class="text-center">
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-start">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender ?? 'N/A' }}</td>
                    <td>{{ $user->address ?? 'N/A' }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-sm btn-outline-info" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" title="Delete">
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
        <img src="https://cdn-icons-png.flaticon.com/512/7486/7486359.png" alt="No users" width="150" class="mb-3">
        <h5 class="text-muted">
            <i class="fas fa-user-slash me-2"></i>No users found
        </h5>
    </div>
    @endif
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('searchInput').addEventListener('keyup', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#userTable tr');

        rows.forEach(row => {
            const name = row.children[1].textContent.toLowerCase();
            const email = row.children[2].textContent.toLowerCase();
            row.style.display = (name.includes(filter) || email.includes(filter)) ? '' : 'none';
        });
    });
</script>
@endpush
