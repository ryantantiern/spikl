<?php

/**
 * Auth
 */

Auth::routes();

Route::get('/', [
	'uses' => 'HomeController@index',
	'as' => 'home']);

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
	'uses' => 'SearchController@getUniSugAssigned',
	'as' => 'search.suggest.uni'
]);

/**
 *	Profile
 */

Route::get('/profile/{uid}', [
	'uses' => 'ProfileController@getProfile',
	'as' => 'profile.index'
]);

Route::get('/settings', [
	'uses' => 'ProfileController@getSettings',
	'as' => 'profile.settings'
]);

Route::post('/settings/set', [
	'uses' => 'ProfileController@set',
	'as' => 'profile.settings.set'
]);

/**
 * Chat
 */

Route::get('/chat', [
	'uses' => 'ChatController@index',
	'as' => 'chat.index'
]);
