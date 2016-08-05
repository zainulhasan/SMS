<?php


Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'Academic'], function () {

    Route::get('session', ['as' => 'sessions', 'uses' => 'AcademicsController@session']);
    Route::get('/sessionDelete/{del_id}', ['as' => 'sessionDelete', 'uses' => 'AcademicsController@sessionDelete']);

    Route::group(['prefix' => 'session'], function () {

        Route::get('/create', ['uses' => 'AcademicsController@getSession', 'as' => 'createSession']);
        Route::post('/store', ['uses' => 'AcademicsController@storeSession', 'as' => 'storeSession']);


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


                    Route::group(['prefix' => '{term_id}/chapters'], function () {

                        Route::get('/', ['as' => 'chapters', 'uses' => 'ChaptersController@index']);
                        Route::get('/create', ['as' => 'createChapter', 'uses' => 'ChaptersController@create']);
                        Route::get('{chapter_id}/delete', ['as' => 'deleteChapter', 'uses' => 'ChaptersController@deleteChapter']);
                        Route::post('insert/', ['as' => 'insertChapter', 'uses' => 'ChaptersController@inserChapters']);







                    });


                });


            });


        });


    }); #end seassions


});#end Academic








/********** Class Routes **********/

Route::post('/store', ['as' => 'storeClass', 'uses' => 'ClassesController@storeClass']);
Route::post('/storeSubject', ['as' => 'storeSubject', 'uses' => 'SubjectsController@storeSubject']);
Route::post('/storeTerm', ['as' => 'storeTerm', 'uses' => 'TermController@storeTerm']);

/********** End Class Routes **********/





/********** Teacher Routes **********/
Route::get('/teachers', ['as' => 'teachers', 'uses' => 'TeachersController@index']);
Route::get('/teachers/create', ['as' => 'createTeachers', 'uses' => 'TeachersController@create']);
Route::get('/teachers/{teacher_id}/delete', ['as' => 'deleteTeachers', 'uses' => 'TeachersController@delete']);
Route::post('/teachers/store', ['as' => 'storeTeachers', 'uses' => 'TeachersController@store']);

/********** End Teacher Routes **********/





/********** Book Routes **********/
Route::get('/books', ['as' => 'books', 'uses' => 'BooksController@index']);
Route::get('/books/create', ['as' => 'createBook', 'uses' => 'BooksController@create']);
Route::get('/books/{book_id}/delete', ['as' => 'deleteBook', 'uses' => 'BooksController@delete']);
Route::post('/books/store', ['as' => 'storeBook', 'uses' => 'BooksController@store']);

/********** End Book Routes **********/





/********** Auth Routes **********/
Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);
Route::post('/login', 'AuthController@postLogin');
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);

/********** End Routes **********/






Route::post('/test',
    [
        'uses' => 'AcademicsController@posttest',
        'as' => 'test'
    ]);

//
//Route::get('/test',
//    [
//        'uses' => 'AcademicsController@test',
//        'as' => 'test'
//    ]);

Route::get('/tlogin', 'AcademicsController@testLogin');


Route::get('api/session', 'AcademicsController@apic');



Route::post('/chapter/update', ['as' => 'updateChapter', 'uses' => 'ChaptersController@update']);