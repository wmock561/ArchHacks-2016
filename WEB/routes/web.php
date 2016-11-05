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

Route::get('/index', function () {
    $surveys = Auth::user()->authorizedSurveys;
    $mySurveys = Auth::user()->surveys;
    return view('index', compact('surveys','mySurveys'));
});


Route::get('/feed', function () {
    $surveys = Auth::user()->authorizedSurveys;
    return view('feed', compact('surveys'));
});

Route::get('/care', function () {
    return view('care');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
