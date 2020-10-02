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

Route::get('/', 'RestController@index')->name('index');
Route::get('/create', 'RestController@create')->name('create');
Route::get('/edit/{id}', 'RestController@editData')->name('data.edit');
Route::get('/show/{id}', 'RestController@showData')->name('data.show');

Route::post('/store', 'RestController@store')->name('store');
Route::delete('/deleteData/{id}', 'RestController@deleteData')->name('data.delete');
Route::put('/updateData/{id}', 'RestController@updateData')->name('data.update');
