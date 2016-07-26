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





Route::group(['prefix' => 'Academic'], function()
{
    Route::get('session','AcademicsController@session');

    Route::group(['prefix' => 'session'], function() {

        Route::get('/create',['uses'=>'AcademicsController@getSession','as'=>'createSeassion']);

    }); #end seassions

    });#end Academic


Route::get('/session','AcademicsController@session');
