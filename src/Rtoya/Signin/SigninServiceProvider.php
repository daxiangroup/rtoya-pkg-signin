<?php namespace Rtoya\Signin;

use Illuminate\Support\ServiceProvider;
use Rtoya\Signin\Service\SigninService;

class SigninServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('rtoya/signin');
        include(__DIR__.'/../../routes.php');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('SigninService', function()
        {
            return new SigninService;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
