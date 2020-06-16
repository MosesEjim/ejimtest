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


Route::group(['prefix' => 'auth'], function() {
    Route::group(['prefix' => 'login'], function() {
        Route::post('/', 'api\LoginController@authenticate');
    });
});

Route::group(['prefix' => 'user', 'middleware' => ['jwt.verify']], function() {
    Route::group(['prefix' => 'all'], function() {
        Route::get('/', 'api\ApiUserController@index');
    });
});