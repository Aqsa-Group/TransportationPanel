<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/login-Page', function () {
    return view('loginPage');
});

// Orders
Route::get('/orders-Map', function () {
    return view('ordersMap');
});

Route::get('/orders-Page', function () {
    return view('ordersPage');
});

Route::get('/orders-Form', function () {
    return view('ordersForm');
});

Route::get('/orders-Information', function () {
    return view('ordersInformation');
});

// Drivers
Route::get('/drivers-Page', function () {
    return view('driversPage');
});

Route::get('/drivers-Form', function () {
    return view('driversForm');
});

Route::get('/drivers-Information', function () {
    return view('driversInformation');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// User Management Routes
Route::resource('users', UserController::class);

// Profile Routes
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::put('/profile', [UserController::class, 'updateProfile'])->name('profile.update');