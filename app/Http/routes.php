<?php


Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'Academic'], function () {

    Route::get('session', ['as' => 'sessions', 'uses' => 'AcademicsController@session']);

    Route::group(['prefix' => 'session'], function () {

        Route::get('/create', ['uses' => 'AcademicsController@getSession', 'as' => 'createSession']);
        Route::post('/store', ['uses' => 'AcademicsController@storeSession', 'as' => 'storeSession']);
        Route::post('/delete', ['as' => 'sessionDelete', 'uses' => 'AcademicsController@sessionDelete']);
        Route::get('/{id}/edit', ['uses' => 'AcademicsController@sessionEdit', 'as' => 'getEditSession']);
        Route::post('{id}/edit/store', ['uses' => 'AcademicsController@storeEditSession', 'as' => 'editSession']);


        Route::group(['prefix' => '{id}/classes'], function () {

            Route::get('/', ['as' => 'classes', 'uses' => 'ClassesController@classes']);
            Route::get('/create', ['as' => 'createClass', 'uses' => 'ClassesController@getClass']);
            Route::post('/delete', ['as' => 'classDelete', 'uses' => 'ClassesController@classDelete']);
            Route::get('/{class_id}/edit', ['as' => 'classEdit', 'uses' => 'ClassesController@classEdit']);
            Route::post('{class_id}/edit/store', 'ClassesController@classEditPost');

            Route::post('/store', 'ClassesController@storeClass');


            Route::group(['prefix' => '{class_id}/subjects'], function () {

                Route::get('/', ['as' => 'subjects', 'uses' => 'SubjectsController@index']);
                Route::get('/create', ['as' => 'createSubject', 'uses' => 'SubjectsController@getSubject']);
                Route::post('/delete', ['as' => 'deleteSubject', 'uses' => 'SubjectsController@deleteSubject']);
                Route::post('/store', ['as' => 'storeSubject', 'uses' => 'SubjectsController@storeSubject']);
                Route::get('{sub_id}/edit', ['as' => 'editSubject', 'uses' => 'SubjectsController@editSubject']);

                Route::post('{sub_id}/edit/store',  'SubjectsController@store');



                Route::group(['prefix' => '{sub_id}/terms'], function () {

                    Route::get('/', ['as' => 'terms', 'uses' => 'TermController@index']);
                    Route::get('/create', ['as' => 'createTerms', 'uses' => 'TermController@getTerm']);
                    Route::get('/{term_id}/edit', ['as' => 'editTerms', 'uses' => 'TermController@editTerm']);
                    Route::post('/{term_id}/edit/store', ['as' => 'StoreEditTerms', 'uses' => 'TermController@EditStoreTerm']);



                    Route::post('/store', ['as' => 'storeTerm', 'uses' => 'TermController@storeTerm']);
                    Route::post('/delete', ['as' => 'deleteTerm', 'uses' => 'TermController@deleteTerm']);

                    Route::group(['prefix' => '{term_id}/chapters'], function () {

                        Route::get('/', ['as' => 'chapters', 'uses' => 'ChaptersController@index']);
                        Route::get('/create', ['as' => 'createChapter', 'uses' => 'ChaptersController@create']);
                        Route::get('/{chapter_id}/edit', ['as' => 'editChapter', 'uses' => 'ChaptersController@edit']);




                        // Route::get('{chapter_id}/delete', ['as' => 'deleteChapter', 'uses' => 'ChaptersController@deleteChapter']);
                        Route::post('insert/', ['as' => 'insertChapter', 'uses' => 'ChaptersController@inserChapters']);
                        Route::post('/delete', ['as' => 'deleteChapter', 'uses' => 'ChaptersController@deleteChapter']);
                        Route::post('/{chapter_id}/edit/store', ['as' => 'storeEditChapter', 'uses' => 'ChaptersController@editStore']);






                    });


                });


            });


        });


    }); #end seassions


});#end Academic








/********** Class Routes **********/
//
//
//Route::post('/storeSubject', ['as' => 'storeSubject', 'uses' => 'SubjectsController@storeSubject']);
//Route::post('/storeTerm', ['as' => 'storeTerm', 'uses' => 'TermController@storeTerm']);

/********** End Class Routes **********/





/********** Teacher Routes **********/
Route::get('/teachers', ['as' => 'teachers', 'uses' => 'TeachersController@index']);
Route::get('/teachers/create', ['as' => 'createTeachers', 'uses' => 'TeachersController@create']);
Route::get('/teachers/{teacher_id}/edit', ['as' => 'editTeachers', 'uses' => 'TeachersController@edit']);


Route::post('/teachers/delete', ['as' => 'deleteTeachers', 'uses' => 'TeachersController@delete']);


Route::post('/teachers/store', ['as' => 'storeTeachers', 'uses' => 'TeachersController@store']);
Route::post('teachers/{teacher_id}/edit/store', ['as' => 'storeEditTeachers', 'uses' => 'TeachersController@store']);

/********** End Teacher Routes **********/





/********** Book Routes **********/
Route::get('/books', ['as' => 'books', 'uses' => 'BooksController@index']);
Route::get('/books/create', ['as' => 'createBook', 'uses' => 'BooksController@create']);

Route::post('/books/delete', ['as' => 'deleteBook', 'uses' => 'BooksController@delete']);


Route::post('/books/store', ['as' => 'storeBook', 'uses' => 'BooksController@store']);



Route::get('/books/{book_id}/edit', ['as' => 'editBook', 'uses' => 'BooksController@edit']);

Route::post('/books/edit/store', ['as' => 'storeEditBook', 'uses' => 'BooksController@store']);


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