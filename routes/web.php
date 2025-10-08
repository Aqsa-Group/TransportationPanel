<?php

use Illuminate\Support\Facades\Route;

Route::get('/login-Page', function () {
    return view( 'loginPage'); 
});

Route::get('/welcome', function () {
    return view('welcome');
});
