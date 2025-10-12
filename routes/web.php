<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/login-Page', function () {
    return view( 'loginPage'); 
});

<<<<<<< HEAD
// Exists routes :
Route::get('/orders-Map', function () {
    return view('ordersMap');
=======
Route::get('/welcome', function () {
    return view('welcome');
>>>>>>> 3c2586917f60c70d206fb5bac5b179bf521ab908
});

Route::get('/orders-Page', function () {
    return view('ordersPage');
});

<<<<<<< HEAD
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
=======
// orderForm
Route::get('/orders-Form', function () {

  
    return view( 'ordersForm'); 
});

// ordersInformation
Route::get('/orders-Information', function () {

  
    return view( 'ordersInformation'); 
});
// driversPage
Route::get('/drivers-Page', function () {

  
    return view( 'driversPage'); 
});

// driversForm
Route::get('/drivers-Form', function () {

  
    return view( 'driversForm'); 
});

// driversInformation
Route::get('/drivers-Information', function () {

  
    return view( 'driversInformation'); 
});


>>>>>>> 3c2586917f60c70d206fb5bac5b179bf521ab908
