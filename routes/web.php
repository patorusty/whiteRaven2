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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/somos', function () {
    return view('somos');
});


Route::get('/login2', function () {
    return view('login2');
});

Route::get('/profile', function () {
    return view('profile');
});