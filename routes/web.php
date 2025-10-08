<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// مسیر  ordersMap
Route::get('/orders-Map', function () {

  
    return view( 'ordersMap'); 
});

// orderPage
Route::get('/orders-Page', function () {

  
    return view( 'ordersPage'); 
});

Route::get('/login-Page', function () {
    return view( 'loginPage'); 
});