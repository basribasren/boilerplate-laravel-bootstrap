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
    return view('container/content-dashboard');
});

Route::get('/email', function () {
    return view('container/content-email');
});

Route::get('/compose', function () {
    return view('container/content-compose');
});

Route::get('/calendar', function () {
    return view('container/content-calendar');
});

Route::get('/chat', function () {
    return view('container/content-chat');
});

Route::get('/charts', function () {
    return view('container/content-charts');
});

Route::get('/forms', function () {
    return view('container/content-form');
});

Route::get('/ui', function () {
    return view('container/content-ui');
});

Route::get('/table/basic', function () {
    return view('container/content-tablebasic');
});

Route::get('/table/advanced', function () {
    return view('container/content-tableadvanced');
});

Route::get('/map/google', function () {
    return view('container/content-mapgoogle');
});

Route::get('/map/vektor', function () {
    return view('container/content-mapvektor');
});

Route::get('/blank', function () {
    return view('container/content-blank');
});

Route::get('/404', function () {
    return view('container/content-error404');
});

Route::get('/500', function () {
    return view('container/content-error500');
});

Route::get('/signin', function () {
    return view('container/content-signin');
});

Route::get('/signup', function () {
    return view('container/content-signup');
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
