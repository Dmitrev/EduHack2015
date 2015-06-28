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


Route::get('/', 'TestController@index');

Route::get('/issue/add', 'IssuesController@add');

Route::post('issue/add', 'IssuesController@postAdd');


Route::get('course', 'CourseController@index');

Route::get('detail', [
    'as' => 'detail', 'uses' => 'CourseController@detail'
]);

Route::get('detail/{id}', 'CourseController@getId')->where('id', '[0-9]+');
