<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('repository', 'HomeController@repository');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('app_test', function() { 
	return redirect('app')->with([
		'flash_message' 			=> 'text',
		'flash_message_important'  => true
	]);
});


Route::get('app', function() { 
	return view('app');
});


/*------------------------------------------------
| IoC
------------------------------------------------*/
interface BarInterface {}

class Bar implements BarInterface {}

App::bind('BarInterface', 'Bar');

class Foo {
	public function __construct(BarInterface $bar) {
		dd($bar);
	}
}

Route::get('bar', function(BarInterface $bar) {
	dd($bar);
});

// App::make('BarInterface');
// app()['BarInterface']
// app('BarInterface')

/*----------------------------------------------*/

