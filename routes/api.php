<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'RestController@APIindex');
Route::get('/show/{id}', 'RestController@APIshowData')->name('data.show');
Route::post('/store', 'RestController@APIstore')->name('store');
Route::put('/updateData/{id}', 'RestController@APIupdateData')->name('data.update');
Route::delete('/deleteData/{id}', 'RestController@APIdeleteData')->name('data.delete');