<?php

use Illuminate\Support\Facades\Route;

Route::get('/login-Page', function () {
    return view( 'loginPage');
});

Route::get('/home', function () {
    return view('welcome'); // یا هر view دلخواهت
})->name('home');
Route::get('/admins', function () {
    return view('admins.index'); // مسیر view مربوطه
})->name('admins.index');
Route::get('/profile', function () {
    return view('profile'); // اگر view وجود دارد، مثلا resources/views/profile.blade.php
})->name('profile');
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

// customersPage
Route::get('/customers-Page', function () {


    return view( 'customersPage');
});

// customersForm
Route::get('/customers-Form', function () {


    return view( 'customersForm');
});

Route::get('/customer-Info', function () {


    return view( 'customerInfo');
});

// driversInformation
Route::get('/customers-Information', function () {


    return view( 'customersInformation');
});


Route::get('/', function () {
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
Route::get('/map', function () {
    return view( 'map');
});
Route::get('/report', function () {
    return view( 'report');
});

Route::get('/settings-Page', function () {
    return view( 'settingsPage');
});

Route::view('/profile', 'profile')->name('profile');
Route::view('/comprofile', 'completprofile')->name('profile.complete');
Route::get('/admins', fn () => view('admins.index'))->name('admins.index');
Route::get('/admins/infoadmin', fn () => view('admins.infoadmin'))->name('admins.infoadmin');
Route::get('/admins/infostep2', fn () => view('admins.infostep2'))->name('admins.infostep2');
Route::get('/admins/adminsuccess', fn () => view('admins.adminsuccess'))->name('admins.adminsuccess');
