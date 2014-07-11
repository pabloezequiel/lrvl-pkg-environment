<?php namespace Pabloleone\Flag;

use Illuminate\Support\ServiceProvider;

use Config;

class FlagServiceProvider extends ServiceProvider {

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
        $this->package('pabloleone/flag');

        // FlagServiceProvider auto-load
        $this->app['flag']->render();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFlag();
    }

    /**
     * Register flag class
     *
     * @return void
     */
    public function registerFlag()
    {
        $this->app['flag'] = $this->app->share(function($app)
        {
            // Get the environments in which will be shown the flag
            $environments = Config::get('flag::environments');

            return new Flag($environments);
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
