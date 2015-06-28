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

Route::get('/', function () {
    return view('home');
});

Route::get('course', [
	'as' => 'course', 'uses' => 'CourseController@index'
]);

Route::get('detail', [
    'as' => 'detail', 'uses' => 'CourseController@detail'
]);

Route::get('profile', [
	'as' => 'profile/detail', 'uses' => 'ProfileController@detail'
]);

Route::get('group', [
	'as' => 'group/detail', 'uses' => 'GroupController@detail'
]);