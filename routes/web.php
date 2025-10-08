<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Exists routes :
Route::get('/orders-Map', function () {
    return view('ordersMap');
});

Route::get('/orders-Page', function () {
    return view('ordersPage');
});

Route::get('/login-Page', function () {
    return view('loginPage');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// User Management Routes
Route::resource('users', UserController::class);

// Profile Routes
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::put('/profile', [UserController::class, 'updateProfile'])->name('profile.update');