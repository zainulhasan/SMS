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
    return view('index');
});


Route::get('/test', function () {
    return view('test');
});

Route::get('/create','AcademicsController@getSession');


Route::group(['prefix' => 'Academic'], function()
{
    Route::get('session','AcademicsController@session');

});


Route::get('/session','AcademicsController@session');
