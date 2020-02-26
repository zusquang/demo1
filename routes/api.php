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

Route::get('/packages', 'Api\\PackageController@index');
Route::get('/package/{package_id}', 'Api\\PackageController@detail');
Route::patch('/package/{packageDetail}', 'Api\\PackageController@update');
