<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/dashboard');
    }
    return redirect('/login-Page');
});

// Authentication Routes
Route::get('/login-Page', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

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

// Customers
Route::get('/customers-Page', function () {
    return view('customersPage');
});

Route::get('/customers-Form', function () {
    return view('customersForm');
});

Route::get('/customers-Information', function () {
    return view('customersInformation');
});

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile', [UserController::class, 'updateProfile'])->name('profile.update');
});