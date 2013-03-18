<?php namespace JonPhipps\IdeHelper;

use Illuminate\Support\ServiceProvider;

class IdeHelperServiceProvider extends ServiceProvider {

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
		$this->package('jonphipps/idehelper');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['idehelper.generate'] = $this->app->share(function($app)
			{
				return new Commands\GenerateHelperCommand($app);
			});

		$this->commands(
			'idehelper.generate'
		);
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