<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->post('/user', 'Api\ProfileAddress@store');
Route::get('/profile-address/{userProfileId}', 'Api\ProfileAddressController@getAllById');
Route::delete('/profile-address/{userProfileId}', 'Api\ProfileAddressController@destroy');
Route::post('/profile-address', 'Api\ProfileAddressController@store');
