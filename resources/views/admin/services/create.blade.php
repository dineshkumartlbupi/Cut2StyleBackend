@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create Service</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.services.form')
        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
