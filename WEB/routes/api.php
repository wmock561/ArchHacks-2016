<?php

use App\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/register', function (Request $request){
	$user = User::create([
		'email' => $request->input('email'),
		'password' => bcrypt($request->input('password')),
		'token' => bcrypt($request->input('email') . $request->input('password'))
		]);
	return $user;
});

Route::post('/login', function (Request $request){
	$email = $request->input('email');
	$password = $request->input('password');
	if(Auth::attempt(['email' => $email, 'password' => $password])){
		return Auth::user();
	}
});
Route::group(['middleware' => 'api-auth'], function(){

	Route::post('/test', function (Request $request){
		return $request->user;
	});

});

