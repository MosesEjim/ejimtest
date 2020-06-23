<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class FormServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\Form\FormContract',
            'App\Repositories\Form\EloquentFormRepository');
    }
}
