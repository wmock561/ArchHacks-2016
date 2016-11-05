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

Route::post('/register', 'ApiAuthController@register');

Route::post('/login', 'ApiAuthController@login');

Route::group(['middleware' => 'api-auth'], function(){

	Route::post('/storeSurveyAnswers', 'ApiSurveyAnswersController@store');
	Route::post('/getSurveyAnswers', 'ApiSurveyAnswersController@index');
	Route::post('/savePersonalInformation', 'PersonalInformationController@store');
	Route::post('/pin', 'ApiAuthController@storePin');

});

