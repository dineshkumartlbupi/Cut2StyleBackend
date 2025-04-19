@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Service</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.services.form', ['service' => $service])
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
