{{-- @extends('layouts.app')

@section('content')
<h2>Welcome, Customer {{ auth()->user()->name }}</h2>
<!-- Show products, cart, orders etc. -->
@endsection --}}

<h2>Welcome Customer!</h2>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

