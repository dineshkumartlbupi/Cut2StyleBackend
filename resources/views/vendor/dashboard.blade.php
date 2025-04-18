{{-- @extends('layouts.app')

@section('content')
<h2>Welcome, Vender {{ auth()->user()->name }}</h2>
<!-- Show products, cart, orders etc. -->
@endsection --}}
@extends('layouts.vendor')

<h2>Welcome Vendor!</h2>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
