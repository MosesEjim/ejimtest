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


        // Categories Route Group
        Route::group(['prefix' => 'category'], function() {
            Route::get('/', 'CategoryController@index')->name('dashboard.category.index');
            Route::get('/create', 'CategoryController@create')->name('dashboard.category.create');
            Route::post('/create', 'CategoryController@store')->name('dashboard.category.store');
        });

        //Product Route Group
        Route::group(['prefix'=>'product'], function(){
            Route::get('/', 'ProductController@index')->name('dashboard.product.index');
            Route::get('/create', 'ProductController@create')->name('dashboard.product.create');
            Route::post('/create', 'ProductController@store')->name('dashboard.product.store');
            Route::get('/edit/{id}', 'ProductController@edit')->name('dashboard.product.edit');
            Route::put('/edit/{id}', 'ProductController@update')->name('dashboard.product.update');
        });

        //Partner Route Group
        Route::group(['prefix'=>'partner'], function(){
            Route::get('/', 'PartnerController@index')->name('dashboard.partner.index');
            Route::get('/create', 'PartnerController@create')->name('dashboard.partner.create');
            Route::post('/create', 'PartnerController@store')->name('dashboard.partner.store');
            Route::get('/edit/{id}', 'PartnerController@edit')->name('dashboard.partner.edit');
            Route::put('/edit/{id}', 'PartnerController@update')->name('dashboard.partner.update');
        });

        //Transaction Route Group
        Route::group(['prefix'=>'transaction'], function(){
            Route::get('/', 'TransactionController@index')->name('dashboard.transaction.index');
            Route::get('/create', 'TransactionController@create')->name('dashboard.transaction.create');
            Route::post('/create', 'TransactionController@store')->name('dashboard.transaction.store');
            Route::get('/edit/{id}', 'TransactionController@edit')->name('dashboard.transaction.edit');
            Route::put('/edit/{id}', 'TransactionController@update')->name('dashboard.transaction.update');
        });
    });
});

