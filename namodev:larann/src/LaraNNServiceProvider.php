<?php namespace NamoDev\LaraNN;

use Illuminate\Support\ServiceProvider;

class LaraNNServiceProvider extends ServiceProvider
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
        $this->app->bind('LaraNN', function(){
            return new LaraNN();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['NamoDev\LaraNN\LaraNN'];
    }

}
