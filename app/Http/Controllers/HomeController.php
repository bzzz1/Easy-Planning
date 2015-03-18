<?php namespace App\Http\Controllers;

use App\Repositories\FooRepository;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(FooRepository $repository)
	{
		$this->repository = $repository;
		// or just use method injection

		// $this->middleware('auth');
		// $this->middleware('auth', ['only' => 'index']);
		$this->middleware('auth', ['except' => 'repository']);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');

		// \Session::flash('flash_message', 'text');
		
		// or use redirect()->with()

		// return redirect('articles')-with([
		// 	'flash_message' 			=> 'text'
		// 	'flash_message_importnant'  => true
		// ]);

		// install package composer require laracasts/flash

		/*------------------------------------------------
		| PIVOT Tables
		------------------------------------------------*/
		Schema::create('article_tag', function(Blueprint $table){
			$table->integer('article_id')->unsigned()->index();
			$table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');

			$table->integer('tag_id')->unsigned()->index();
			$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
		});

		// class Tag extends Model {
		// 	public function articles() {
		// 		return $this->belongsToMany('App\Article', 'article_tag', 'article_identifier');
		// 			// ->withTimestamps();
		// 	}
		// }

		$article->tags()->attach(1);

		\App\Tag::lists('name', 'name'); 
		// returns ['work'=>'work']
		/*----------------------------------------------*/
	}

	/*------------------------------------------------
	| LARACASTS #26
	------------------------------------------------*/
	public function repository(FooRepository $repository) {
		// bad practice
		// $repository = new \App\Repositories\FooRepository();

		return $repository->get();		
	}
}
