<?php namespace App\Http\Controllers;

use Carbon\Carbon;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$time = Carbon::now();
		// dd($time);
		// dd(__NAMESPACE__);
		// $q = new \App\Article;
		// dd(get_declared_classes());
		
		return view('welcome')->with([
			'var'	=> 'some value',
			'var1'	=> '<span style="color:red">another value</span>'
		]);
	}

}
