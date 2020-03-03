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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ad', 'AdController@index');
Route::get('/ad/create', 'AdController@create');
Route::post('/ad', 'AdController@store');

Route::get('/iklan', 'LandingController@index');

Route::get('/iklan/click/{id}', 'LandingController@click');