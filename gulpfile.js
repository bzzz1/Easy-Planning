var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('style.scss');
    // mix.less('app.less');
    // mix.sass('style.scss').styles().scripts();
    
    mix.styles([
		'vendor/normalize.css',
		'app.css'
    ], 'public/output/final.css', 'public/css');

	// mix.phpUnit();
	// mix.phpSpec();
});


// run gulp --production to compile minified version
// run gulp watch
// run gulp tdd