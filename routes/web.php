<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TestController@index')->name('main');
Route::get('/search', 'TestController@search')->name('search');
Route::match(['GET','POST'],'auth','TestController@auth');
Route::match(['GET','POST'],'/register','TestController@register');
Route::get('/catalog/fridges','TestController@getData');
Route::get('/table','TestController@getTable')->name('table');
