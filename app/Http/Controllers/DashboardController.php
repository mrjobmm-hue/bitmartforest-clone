<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Example data for demonstration
        $balance = 12345.67;
        $cryptoPrices = [
            ['symbol' => 'BTC', 'price' => 65432.10],
            ['symbol' => 'ETH', 'price' => 3897.45],
            ['symbol' => 'BNB', 'price' => 534.12],
        ];

        return view('dashboard', compact('balance', 'cryptoPrices'));
    }

    public function transactions()
    {
        return view('transactions');
    }

    public function wallet()
    {
        return view('wallet');
    }

    public function referral()
    {
        return view('referral');
    }

    public function support()
    {
        return view('support');
    }
}