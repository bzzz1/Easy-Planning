<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->composeNavigation();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	private function composeNavigation() { 
		view()->composer('partials/nav', 'App\Http\Composers\NavigationComposer@compose');

		// view()->composer('partials/nav', function($view) { 
		// 	$view->with('latest', \App\Article::latest()->first());
		// });	

		// View::composers([
			// 'App\Http\ViewComposers\AdminComposer' => ['admin.index', 'admin.profile'],
			// 'App\Http\ViewComposers\UserComposer' => 'user',
			// 'App\Http\ViewComposers\ProductComposer' => 'product'
		// ]);
	}

}
