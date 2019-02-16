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
    return view('container/dashboard-dashboard');
});

Route::get('/email', function () {
    return view('container/dashboard-email');
});

Route::get('/compose', function () {
    return view('container/dashboard-compose');
});

Route::get('/calendar', function () {
    return view('container/dashboard-calendar');
});

Route::get('/chat', function () {
    return view('container/dashboard-chat');
});

Route::get('/charts', function () {
    return view('container/dashboard-charts');
});

Route::get('/forms', function () {
    return view('container/dashboard-form');
});

Route::get('/ui', function () {
    return view('container/dashboard-ui');
});

Route::get('/table/basic', function () {
    return view('container/dashboard-tablebasic');
});

Route::get('/table/advanced', function () {
    return view('container/dashboard-tableadvanced');
});

Route::get('/map/google', function () {
    return view('container/dashboard-mapgoogle');
});

Route::get('/map/vektor', function () {
    return view('container/dashboard-mapvektor');
});

Route::get('/blank', function () {
    return view('container/dashboard-blank');
});

Route::get('/404', function () {
    return view('container/dashboard-error404');
});

Route::get('/500', function () {
    return view('container/dashboard-error500');
});

Route::get('/signin', function () {
    return view('container/dashboard-signin');
});

Route::get('/signup', function () {
    return view('container/dashboard-signup');
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
    return view('container/landing-page');
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
Route::resource('sevima/materi', 'Web\MateriController');

