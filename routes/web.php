<?php

use Illuminate\Support\Facades\Route;

// صفحه ورود
Route::get('/login-Page', fn() => view('loginPage'))->name('login.page');

// داشبورد (خانه)
Route::get('/home', fn() => view('welcome'))->name('home');

// ادمین‌ها
Route::get('/admins', fn() => view('admins.index'))->name('admins.index');
Route::get('/admins/infoadmin', fn() => view('admins.infoadmin'))->name('admins.infoadmin');
Route::get('/admins/infostep2', fn() => view('admins.infostep2'))->name('admins.infostep2');
Route::get('/admins/adminsuccess', fn() => view('admins.adminsuccess'))->name('admins.adminsuccess');

// پروفایل‌ها
Route::view('/profile', 'profile')->name('profile');
Route::view('/comprofile', 'completprofile')->name('profile.complete');

// سفارشات
Route::get('/orders-Page', fn() => view('ordersPage'))->name('orders.page');
Route::get('/orders-Form', fn() => view('ordersForm'))->name('orders.form');
Route::get('/orders-Information', fn() => view('ordersInformation'))->name('orders.info');

// رانندگان
Route::get('/drivers-Page', fn() => view('driversPage'))->name('drivers.page');
Route::get('/drivers-Form', fn() => view('driversForm'))->name('drivers.form');
Route::get('/drivers-Information', fn() => view('driversInformation'))->name('drivers.info');

// مشتریان
Route::get('/customers-Page', fn() => view('customersPage'))->name('customers.page');
Route::get('/customers-Form', fn() => view('customersForm'))->name('customers.form');
Route::get('/customer-Info', fn() => view('customerInfo'))->name('customers.info1');
Route::get('/customers-Information', fn() => view('customersInformation'))->name('customers.info2');

// سایر صفحات
Route::get('/map', fn() => view('map'))->name('map.page');
Route::get('/report', fn() => view('report'))->name('reports.page');
Route::get('/settings-Page', fn() => view('settingsPage'))->name('settings.page');
