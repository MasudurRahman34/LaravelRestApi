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
Route::get('/TestPage', 'TestPageController@index')->name('TestPage');
Route::post('/TestPage/store/data', 'TestPageController@store')->name('store.data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
