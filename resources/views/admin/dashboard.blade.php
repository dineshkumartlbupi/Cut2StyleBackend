@extends('layouts.app')

@section('content')
<h2>Welcome, Admin {{ auth()->user()->name }}</h2>
<!-- Show products, cart, orders etc. -->
@endsection
