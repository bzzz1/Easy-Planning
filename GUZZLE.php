/*------------------------------------------------
| GET IMAGE
------------------------------------------------*/
$url = "http://lorempixel.com/400/200/";
$client = new GuzzleHttp\Client();
$response = $client->get($url);
$body = $response->getBody();
File::put('lorempixel.jpg', $body);


/*------------------------------------------------
| RUTRACKER POST only
------------------------------------------------*/
$url_post = "http://login.rutracker.org/forum/login.php"
$url_index = "http://rutracker.org/forum/index.php"
$jar = new GuzzleHttp\Cookie\CookieJar;
$client = new GuzzleHttp\Client();
$form_data = [
	'login_username' => 'beststrelok',
	'login_password' => 'aspirine',
	'login'			 => 'Вход',
	'redirect'		 => 'index.php',
];
$resonse = $client->post($url_post, ['body'=>$form_data, 'cookies'=>$jar]);
$body = $response->getBody();
File::put('rutracker.html', $body);


/*------------------------------------------------
| RUTRACKER LOGIN POST the GET
------------------------------------------------*/
$url_post = "http://login.rutracker.org/forum/login.php"
$url_index = "http://rutracker.org/forum/index.php"
$jar = new GuzzleHttp\Cookie\CookieJar;
$client = new GuzzleHttp\Client();
$form_data = [
	'login_username' => 'beststrelok',
	'login_password' => 'aspirine',
	'login'			 => 'Вход',
	'redirect'		 => 'index.php',
];

// get cookie and store it in $jar
$client->post($url_post, ['body'=>$form_data, 'cookies'=>$jar]);

// open site after logging in
$response = $client->get($url_index, ['cookies'=>$jar]);
$body = $response->getBody();
File::put('rutracker.html', $body);