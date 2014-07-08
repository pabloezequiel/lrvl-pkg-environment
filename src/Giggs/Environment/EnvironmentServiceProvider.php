<?php namespace Giggs\Environment;

use Illuminate\Support\ServiceProvider;

class EnvironmentServiceProvider extends ServiceProvider {

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
		$this->package('giggs/environment');

		// EnvironmentServiceProvider auto-load
		$this->app['environment'];
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerEnvironment();
	}

	/**
	 * Register environment class
	 *
	 * @return void
	 */
	public function registerEnvironment()
	{
		$this->app['environment'] = $this->app->share(function($app)
		{
			// Get the environments in which will be shown the flag
			$environments = $app['config']['environment::config.environments'];

			$env = new Environment($environments);

			// Render the flag
			$env->renderFlag();
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
