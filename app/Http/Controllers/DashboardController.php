<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        $balance = 1250.38;
        $cryptoPrices = [
            ['symbol' => 'BTC', 'price' => 42500.12],
            ['symbol' => 'ETH', 'price' => 2950.50],
            ['symbol' => 'USDT', 'price' => 1.00],
        ];
        return view('dashboard', compact('balance', 'cryptoPrices'));
    }
}