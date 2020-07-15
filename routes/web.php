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

    Route::post('/logout', 'LoginController@logout')->name('auth.logout.post');

    Route::group(['prefix'=>'dashboard'], function(){
        Route::get('/', 'UserController@adminDashboard')->name('dashboard.admin.index');
        Route::get('/roles', 'RoleController@index')->name('roles');
        Route::get('/createrole', 'RoleController@create')->name('createroles');


        // User Route Group
        Route::group(['prefix' => 'user'], function() {
            Route::get('/', 'UserController@index')->name('dashboard.user.index');
            Route::get('/create', 'UserController@create')->name('dashboard.user.create');
            Route::post('/create', 'UserController@store')->name('dashboard.user.store');
            Route::get('/edit', 'UserController@edit')->name('dashboard.user.edit');
            Route::put('/edit/{slug}', 'UserController@update')->name('dashboard.user.update');
            Route::put('/delete/{slug}', 'UserController@delete')->name('dashboard.user.delete');

            Route::get('/data-collectors', 'UserController@dataCollectors')->name('dashboard.user.getAllDataCollectors');
        });
        
        
        // Categories Route Group
        Route::group(['prefix' => 'category'], function() {
            Route::get('/', 'CategoryController@index')->name('dashboard.category.index');
            Route::get('/create', 'CategoryController@create')->name('dashboard.category.create');
            Route::post('/create', 'CategoryController@store')->name('dashboard.category.store');
            Route::get('/edit/{id}', 'CategoryController@edit')->name('dashboard.category.edit');
            Route::put('/edit/{id}', 'CategoryController@update')->name('dashboard.category.update');
            Route::get('/{id}/enable-status', 'CategoryController@enableStatus')->name('dashboard.category.enabledStatus');
            Route::get('/{id}/disable-status', 'CategoryController@disableStatus')->name('dashboard.category.disabledStatus');
            Route::get('/disabled-categories', 'CategoryController@disabled')->name('dashboard.category.disabled');
        });

        //Product Route Group
        Route::group(['prefix'=>'product'], function(){
            Route::get('/', 'ProductController@index')->name('dashboard.product.index');
            Route::get('/create', 'ProductController@create')->name('dashboard.product.create');
            Route::get('/dispatch', 'ProductController@dispatchProduct')->name('dashboard.product.dispatch');
            Route::post('/dispatch', 'ProductController@dispatchProductPost')->name('dashboard.product.dispatch.store');
            Route::post('/create', 'ProductController@store')->name('dashboard.product.store');
            Route::get('/edit/{id}', 'ProductController@edit')->name('dashboard.product.edit');
            Route::put('/edit/{id}', 'ProductController@update')->name('dashboard.product.update');
        });
        
        //Stock Route Group
        Route::group(['prefix'=>'stock'], function(){
            Route::get('/', 'StockController@index')->name('dashboard.stock.index');
            Route::get('/create', 'StockController@create')->name('dashboard.stock.create');
            Route::post('/create', 'StockController@store')->name('dashboard.stock.store');
            Route::get('/createfromfile', 'StockController@createFromFile')->name('dashboard.stock.createfromfile');
            Route::post('/createfromfile', 'StockController@storefile')->name('dashboard.stock.storefile');
            Route::get('/edit/{id}', 'StockController@edit')->name('dashboard.stock.edit');
            Route::put('/edit/{id}', 'StockController@update')->name('dashboard.stock.update');
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
            Route::put('/show/{id}', 'TransactionController@show')->name('dashboard.transaction.show');
        });

        //State Route Group
        Route::group(['prefix'=>'state'], function(){
            Route::get('/', 'StateController@index')->name('dashboard.state.index');
            Route::get('/create', 'StateController@create')->name('dashboard.state.create');
            Route::post('/create', 'StateController@store')->name('dashboard.state.store');
            Route::get('/edit/{id}', 'StateController@edit')->name('dashboard.state.edit');
            Route::put('/edit/{id}', 'StateController@update')->name('dashboard.state.update');
        });

        //LGA Route Group
        Route::group(['prefix'=>'lga'], function(){
            Route::get('/', 'LGAController@index')->name('dashboard.lga.index');
            Route::get('/create', 'LGAController@create')->name('dashboard.lga.create');
            Route::post('/create', 'LGAController@store')->name('dashboard.lga.store');
            Route::get('/edit/{id}', 'LGAController@edit')->name('dashboard.lga.edit');
            Route::put('/edit/{id}', 'LGAController@update')->name('dashboard.lga.update');
        });

        //Stock Route Group
        Route::group(['prefix'=>'stock'], function(){
            Route::get('/', 'StockController@index')->name('dashboard.stock.index');
            Route::get('/create', 'StockController@create')->name('dashboard.stock.create');
            Route::post('/create', 'StockController@store')->name('dashboard.stock.store');
            Route::get('/edit/{id}', 'StockController@edit')->name('dashboard.stock.edit');
            Route::put('/edit/{id}', 'StockController@update')->name('dashboard.stock.update');
        });
        //Stock user Group
        Route::group(['prefix'=>'user'], function(){
            Route::get('/', 'UserController@index')->name('dashboard.user.index');
            Route::get('/create', 'UserController@create')->name('dashboard.user.create');
            Route::post('/create', 'UserController@store')->name('dashboard.user.store');
            Route::get('/edit/{id}', 'UserController@edit')->name('dashboard.user.edit');
            Route::put('/edit/{id}', 'UserController@update')->name('dashboard.user.update');
            Route::delete('/{slug}', 'UserController@delete')->name('dashboard.user.delete');
        });
        //Stock role Group
        Route::group(['prefix'=>'role'], function(){
            Route::get('/', 'RoleController@index')->name('dashboard.role.index');
            Route::get('/create', 'RoleController@create')->name('dashboard.role.create');
            Route::post('/create', 'RoleController@store')->name('dashboard.role.store');
            Route::get('/edit/{id}', 'RoleController@edit')->name('dashboard.role.edit');
            Route::put('/edit/{id}', 'RoleController@update')->name('dashboard.role.update');
        });
        //Stock vendor Group
        Route::group(['prefix'=>'vendor'], function(){
            Route::get('/', 'VendorController@index')->name('dashboard.vendor.index');
            Route::get('/create', 'VendorController@create')->name('dashboard.vendor.create');
            Route::post('/create', 'VendorController@store')->name('dashboard.vendor.store');
            Route::get('/edit/{id}', 'VendorController@edit')->name('dashboard.vendor.edit');
            Route::put('/edit/{id}', 'VendorController@update')->name('dashboard.vendor.update');
            Route::get('/{slug}', 'VendorController@delete')->name('dashboard.vendor.delete');
        });
        // EUM Group
        Route::group(['prefix'=>'eum'], function(){

            Route::group(['prefix'=>'program'], function(){
                Route::get('/', 'ProgramController@index')->name('dashboard.eum.program.index');
                Route::get('/create', 'ProgramController@create')->name('dashboard.eum.program.create');
                Route::post('/create', 'ProgramController@store')->name('dashboard.eum.program.store');
                Route::get('/edit/{id}', 'ProgramController@edit')->name('dashboard.eum.program.edit');
                Route::put('/edit/{id}', 'ProgramController@update')->name('dashboard.eum.program.update');
                Route::get('/{slug}', 'ProgramController@delete')->name('dashboard.eum.program.delete');
            });

            Route::group(['prefix'=>'sub-program'], function(){
                Route::get('/', 'SubcategoryController@index')->name('dashboard.eum.subprogram.index');
                Route::get('/create', 'SubcategoryController@create')->name('dashboard.eum.subprogram.create');
                Route::post('/create', 'SubcategoryController@store')->name('dashboard.eum.subprogram.store');
                Route::get('/edit/{id}', 'SubcategoryController@edit')->name('dashboard.eum.subprogram.edit');
                Route::put('/edit/{id}', 'SubcategoryController@update')->name('dashboard.eum.subprogram.update');
                Route::post('/{slug}', 'SubcategoryController@delete')->name('dashboard.eum.subprogram.delete');
            });

            Route::group(['prefix'=>'survey-type'], function(){
                Route::get('/', 'SurveyTypeController@index')->name('dashboard.eum.surveytype.index');
                Route::get('/create', 'SurveyTypeController@create')->name('dashboard.eum.surveytype.create');
                Route::post('/create', 'SurveyTypeController@store')->name('dashboard.eum.surveytype.store');
                Route::get('/edit/{id}', 'SurveyTypeController@edit')->name('dashboard.eum.surveytype.edit');
                Route::put('/edit/{id}', 'SurveyTypeController@update')->name('dashboard.eum.surveytype.update');
                Route::get('/{slug}', 'SurveyTypeController@delete')->name('dashboard.eum.surveytype.delete');

                Route::group(['prefix'=>'questions'], function(){
                    Route::get('/{id}', 'QuestionController@index')->name('dashboard.uem.surveytype.question.index');
                    Route::get('/{q_id}/edit/', 'QuestionController@edit')->name('dashboard.uem.surveytype.question.edit');
                    Route::get('/show/{id}', 'QuestionController@show')->name('dashboard.uem.surveytype.question.show');
                    Route::get('/{id}/delete', 'QuestionController@delete')->name('dashboard.uem.surveytype.question.delete');
                });
            });
            //form group
            Route::group(['prefix'=>'form'], function(){
                Route::get('/', 'FormController@index')->name('dashboard.eum.form.index');
                Route::get('/{id}/create', 'FormController@create')->name('dashboard.eum.form.create');
                Route::post('/{id}/create', 'api/FormApiController@store')->name('dashboard.eum.form.store');
                Route::get('/edit/{id}', 'FormController@edit')->name('dashboard.eum.form.edit');
                Route::put('/edit/{id}', 'FormController@update')->name('dashboard.eum.form.update');
                Route::get('/{slug}', 'FormController@delete')->name('dashboard.eum.form.delete');
            });
           
            Route::group(['prefix'=>'question-type'], function(){
                Route::get('/', 'QuestionTypeController@index')->name('dashboard.question.type.index');
                Route::get('/create', 'QuestionTypeController@create')->name('dashboard.question.type.create');
                Route::post('/create', 'QuestionTypeController@store')->name('dashboard.question.type.store');
                Route::get('/edit/{id}', 'QuestionTypeController@edit')->name('dashboard.question.type.edit');
                Route::put('/edit/{id}', 'QuestionTypeController@update')->name('dashboard.question.type.update');
                Route::get('/{slug}', 'QuestionTypeController@delete')->name('dashboard.question.type.delete');
            });
            
            
            Route::group(['prefix'=>'questions'], function(){
                Route::get('/', 'QuestionController@all')->name('dashboard.uem.question.index');
                Route::get('/create', 'QuestionController@create')->name('dashboard.uem.question.create');
                Route::post('/create', 'QuestionController@store')->name('dashboard.uem.question.store');
                Route::get('/edit/{id}', 'QuestionController@edit')->name('dashboard.uem.question.edit');
                
                Route::put('/edit/{id}', 'QuestionController@update')->name('dashboard.uem.question.update');
                Route::get('/{slug}', 'QuestionController@delete')->name('dashboard.uem.question.delete');
                Route::post('/search', 'QuestionController@search')->name('dashboard.uem.question.search');
                Route::get('/search/results', 'QuestionController@searchResult')->name('dashboard.uem.question.search.result');
            });
            
            //form group
            Route::group(['prefix'=>'questionnaire'], function(){
                Route::get('/', 'QuestionController@index')->name('dashboard.eum.questionnaire.index');
                Route::get('/{id}/create', 'QuestionController@create')->name('dashboard.eum.questionnaire.create');
                Route::post('/{id}/create', 'QuestionController@store')->name('dashboard.eum.questionnaire.store');
                Route::get('/edit/{id}', 'QuestionController@edit')->name('dashboard.eum.questionnaire.edit');
                Route::put('/edit/{id}', 'QuestionController@update')->name('dashboard.eum.questionnaire.update');
                Route::get('/{slug}', 'QuestionController@delete')->name('dashboard.eum.questionnaire.delete');

                Route::group(['prefix' => 'options'], function() {
                    Route::get('/', 'OptionController@index')->name('dashboard.eum.option.index');
                    Route::get('/{slug}/create', 'OptionController@create')->name('dashboard.eum.option.create');
                    Route::post('/{slug}/create', 'OptionController@store')->name('dashboard.eum.option.store');
                    Route::get('/{slug}/edit', 'OptionController@edit')->name('dashboard.eum.option.edit');
                    Route::put('/{slug}/edit', 'OptionController@update')->name('dashboard.eum.option.update');
                    Route::delete('/{id}/delete', 'OptionController@delete')->name('dashboard.eum.option.delete');
                });
            });

            Route::group(['prefix'=>'answer'], function(){
                Route::get('/', 'AnswerController@index')->name('dashboard.eum.answer.index');
                Route::get('/{id}', 'AnswerController@show')->name('dashboard.eum.answer.show');
                Route::get('/{id}/{created_at}', 'AnswerController@delete')->name('dashboard.eum.answer.delete');
            });

            Route::group(['prefix'=>'chart'], function(){
                Route::get('/', 'ChartController@index')->name('dashboard.eum.chart.index');
                Route::get('/{id}', 'ChartController@show')->name('dashboard.eum.chart.show');
                
            });
        });
    });
});

Route::get('/backup', function () {

    \Illuminate\Support\Facades\Artisan::call('backup:run');

    return 'Successful backup!';

});