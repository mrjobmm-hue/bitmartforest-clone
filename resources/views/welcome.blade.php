@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4 mb-4">Welcome to BitMartForest</h1>
    <p class="lead mb-4">The trusted platform for managing your crypto assets, referrals, and transactions.</p>
    @guest
        <a href="{{ route('register') }}" class="btn btn-warning btn-lg mx-2">Get Started</a>
        <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg mx-2">Login</a>
    @else
        <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg">Go to Dashboard</a>
    @endguest
</div>
@endsection