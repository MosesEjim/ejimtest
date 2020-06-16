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

Route::get('/', function () {
    return redirect()->route('auth.login.get');
});


Route::get('/signup', 'PageController@signUp');
Route::get('/dashboard','PageController@index');


Route::group(['prefix' => 'account'], function() {
    Route::group(['prefix' => 'login'], function() {
        Route::get('/', 'PageController@login')->name('auth.login.get');
        Route::post('/', 'LoginController@login')->name('auth.login.post');
    });

    Route::group(['prefix' => 'sign-up'], function() {
        Route::get('/', 'PageController@signUp')->name('auth.signup.get');
        Route::post('/', 'PageController@store')->name('auth.signup.post');
    });


    Route::group(['prefix'=>'dashboard'], function(){
        Route::get('/', 'UserController@adminDashboard')->name('dashboard.admin.index');
        Route::get('/roles', 'RoleController@index')->name('roles');
        Route::get('/createrole', 'RoleController@create')->name('createroles');
    });
});

