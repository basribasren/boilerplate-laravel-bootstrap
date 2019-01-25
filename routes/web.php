<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/charts', function () {
    return view('mcharts');
});

Route::get('/tables', function () {
    return view('table');
});

Route::get('/forms', function () {
    return view('form');
});

Route::get('/panels', function () {
    return view('panel');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/typography', function () {
    return view('typography');
});

Route::get('/icons', function () {
    return view('icons');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/documentation', function () {
    return view('documentation');
});

Route::get('/login', function () {
    return view('login');
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
});

Route::get('/auth/login', function () {
    return view('auth/login');
});

Route::get('/auth/register', function () {
    return view('auth/register');
});

Route::get('/password/email', function () {
    return view('auth/password');
});

Route::get('/auth/logout', function () {
    return view('logout');
});
