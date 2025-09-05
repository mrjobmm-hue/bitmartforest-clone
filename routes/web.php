<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/transactions', [DashboardController::class, 'transactions'])->name('transactions');
Route::get('/wallet', [DashboardController::class, 'wallet'])->name('wallet');
Route::get('/referral', [DashboardController::class, 'referral'])->name('referral');
Route::get('/support', [DashboardController::class, 'support'])->name('support');
