<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
