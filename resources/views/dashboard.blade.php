@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Dashboard</h2>
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card p-4 mb-3">
                <h5 class="mb-2">Wallet Balance</h5>
                <div class="display-6 fw-bold">${{ number_format($balance, 2) }}</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4 mb-3">
                <h5 class="mb-2">Crypto Market Prices</h5>
                <ul class="list-group">
                    @foreach($cryptoPrices as $crypto)
                        <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                            <span>{{ $crypto['symbol'] }}</span>
                            <span>${{ number_format($crypto['price'], 2) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('transactions') }}" class="btn btn-outline-light btn-lg mx-1">Transactions</a>
            <a href="{{ route('wallet') }}" class="btn btn-success btn-lg mx-1">Wallet</a>
            <a href="{{ route('referral') }}" class="btn btn-warning btn-lg mx-1">Referral</a>
            <a href="{{ route('support') }}" class="btn btn-outline-info btn-lg mx-1">Support</a>
        </div>
    </div>
</div>
@endsection
