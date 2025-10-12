<?php

use Illuminate\Support\Facades\Route;

Route::get('/login-Page', function () {
    return view( 'loginPage'); 
});

Route::get('/welcome', function () {
    return view('welcome');
});

// orderPage
Route::get('/orders-Page', function () {

  
    return view( 'ordersPage'); 
});

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


