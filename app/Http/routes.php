<?php


Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'Academic'], function () {

    Route::get('session', ['as' => 'sessions', 'uses' => 'AcademicsController@session']);
    Route::get('/sessionDelete/{del_id}', ['as' => 'sessionDelete', 'uses' => 'AcademicsController@sessionDelete']);

    Route::group(['prefix' => 'session'], function () {

        Route::get('/create', ['uses' => 'AcademicsController@getSession', 'as' => 'createSeassion']);
        Route::post('/store', ['uses' => 'AcademicsController@storeSession', 'as' => 'storeSeassion']);


        Route::group(['prefix' => '{id}/classes'], function () {

            Route::get('/', ['as' => 'classes', 'uses' => 'ClassesController@classes']);
            Route::get('/create', ['as' => 'createClass', 'uses' => 'ClassesController@getClass']);
            Route::get('/{class_id}/delete', ['as' => 'classDelete', 'uses' => 'ClassesController@classDelete']);


            Route::group(['prefix' => '{class_id}/subjects'], function () {


                Route::get('/', ['as' => 'subjects', 'uses' => 'SubjectsController@index']);
                Route::get('/create', ['as' => 'createSubject', 'uses' => 'SubjectsController@getSubject']);
                Route::get('{sub_id}/delete', ['as' => 'deleteSubject', 'uses' => 'SubjectsController@deleteSubject']);

                Route::group(['prefix' => '{sub_id}/terms'], function () {

                    Route::get('/', ['as' => 'terms', 'uses' => 'TermController@index']);
                    Route::get('/create', ['as' => 'createTerms', 'uses' => 'TermController@getTerm']);
                    Route::get('{term_id}/delete', ['as' => 'deleteTerm', 'uses' => 'TermController@deleteTerm']);
                });


            });


        });


    }); #end seassions


});#end Academic


Route::post('/store', ['as' => 'storeClass', 'uses' => 'ClassesController@storeClass']);
Route::post('/storeSubject', ['as' => 'storeSubject', 'uses' => 'SubjectsController@storeSubject']);
Route::post('/storeTerm', ['as' => 'storeTerm', 'uses' => 'TermController@storeTerm']);




Route::get('/teachers', ['as' => 'teachers', 'uses' => 'TeachersController@index']);
Route::get('/teachers/create', ['as' => 'createTeachers', 'uses' => 'TeachersController@create']);
Route::get('/teachers/{teacher_id}/delete', ['as' => 'deleteTeachers', 'uses' => 'TeachersController@delete']);
Route::post('/teachers/store', ['as' => 'storeTeachers', 'uses' => 'TeachersController@store']);


Route::get('/test', 'AcademicsController@test');
Route::get('api/session', 'AcademicsController@apic');




