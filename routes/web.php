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
Route::resource('products','ProductsController');


// Rutas de Administacion 
Route::group(['middleware' => 'admin'], function () {
        Route::resource('admin','AdminController');
        Route::post('admin/products', 'AdminController@storeProducts')->name('admin.products');
        Route::post('admin/brands', 'AdminController@storeBrands')->name('admin.brands');
        Route::post('admin/categories', 'AdminController@storeCategories')->name('admin.categories');
        Route::post('admin/subcategories', 'AdminController@storeSubCategories')->name('admin.subcategories');
});
// Hasta aca!!