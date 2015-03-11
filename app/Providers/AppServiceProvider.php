<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// all that happens after all service providers got registered
		view()->composer('partials/nav', function($view) { 
			$view->with('latest', \App\Article::latest()->first());
		});	

		// or if its a lot use another Provider such as ViewComposerServiceProvider
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Illuminate\Contracts\Auth\Registrar', 'App\Services\Registrar');
	}

}
