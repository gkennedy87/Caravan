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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Task API routes
Route::post('tasks','TaskController@store');
Route::get('tasks','TaskController@get');
Route::put('tasks/{id}','TaskController@store');
Route::delete('tasks/{id}','TaskController@destroy');
