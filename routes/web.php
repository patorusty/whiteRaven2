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

Route::get('home', 'HomeController@index')->name('home');
Route::get('somos', 'SomosController@index')->name('somos');
Route::get('faq', 'FaqController@index')->name('faq');
Route::get('profile', 'ProfileController@index')->name('profile');
Route::get('contacto', 'ContactoController@index')->name('contacto');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('categories', 'CategoriesController@listado')->name('categories');
Route::get('categories', 'CategoriesController@create');
Route::post('categories', 'CategoriesController@store')->name('categories.add');
Route::resource('products','ProductsController');
Route::post('products', 'ProductsController@store')->name('products.add');

Route::resource('brands','BrandsController');
Route::resource('admin','AdminController');
