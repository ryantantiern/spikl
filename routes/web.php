<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index');

/**
 * Search
 */
Route::get('/search/results', [
	'uses' => 'SearchController@getResults',
	'as' => 'search.results'
]);

Route::get('/search/unis/suggest/{term?}', [
	'uses' => 'SearchController@getUniSuggestion',
	'as' => 'search.register.uni'
]);

Route::get('/search/suggest/{term?}', [
	'uses' => 'SearchController@getUniSuggestion',
	'as' => 'search.suggest.uni'
]);