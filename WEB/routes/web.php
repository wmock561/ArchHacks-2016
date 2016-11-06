<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/location', 'GraphDataController@locationChart');
Route::get('/trigger', 'GraphDataController@triggerChart');
Route::get('/symptom', 'GraphDataController@symptomChart');
Route::get('/calming', 'GraphDataController@calmingChart');

Route::get('/index', function () {
    $surveys = Auth::user()->authorizedSurveys;
    $mySurveys = Auth::user()->surveys;
    return view('index', compact('surveys','mySurveys'));
});

Route::get('/feed', function () {
    $surveys = Auth::user()->authorizedSurveys;
    return view('feed', compact('surveys'));
});

Route::get('/vis1', function () {
    $mySurveys = Auth::user()->surveys;
    return view('vis1', compact('mySurveys'));
});

Route::get('/vis2', 'GraphDataController@locationChart');

Route::get('/vis3', 'GraphDataController@triggerChart');

Route::get('/vis4', 'GraphDataController@symptomChart');

Route::get('/vis5', 'GraphDataController@calmingChart');

Route::get('/settings', function(){
	return view('settings');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
