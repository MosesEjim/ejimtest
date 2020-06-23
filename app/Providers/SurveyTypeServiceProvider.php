<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class SurveyTypeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     
    public function boot()
    {
        //
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
     
    public function register()
    {
        $this->app->bind('App\Repositories\SurveyType\SurveyTypeContract',
            'App\Repositories\SurveyType\EloquentSurveyTypeRepository');
    }
}
