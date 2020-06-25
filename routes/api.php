<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'auth'], function() {
    Route::group(['prefix' => 'login'], function() {
        Route::post('/', 'Api\LoginApiController@authenticate');
    });
});

Route::group(['prefix' => 'user'], function() {
    Route::group(['prefix' => 'all'], function() {
        Route::get('/', 'Api\UserApiController@index');
    });
});

Route::group(['prefix' => 'transactions'], function() {
    Route::get('/', 'Api\TransactionApiController@index');
});



Route::group(['prefix' => 'questionnaire'], function() {
    Route::get('/', 'Api\FormApiController@index');
    Route::post('{id}/create', 'Api\FormApiController@store');

});