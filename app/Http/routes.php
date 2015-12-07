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

Route::get('home', 'HomeController@index');

Route::get('datavoting', 'VotingController@datavoting');

Route::post('postdatavoting', 'VotingController@create');

Route::get('datakandidat', 'KandidatController@datakandidat');

Route::post('postdatakandidat', 'KandidatController@create');

Route::get('datapeserta', 'PesertaController@datapeserta');

Route::post('postdatapeserta', 'PesertaController@create');

<<<<<<< HEAD

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
Route::get('logout', 'Auth\AuthController@getLogout');

=======
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
Route::get('/images/{filename}',
	function ($filename)
{
	$path = storage_path() . '/' . $filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file, 200);
	$response->header("Content-Type", $type);

	return $response;
});
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
