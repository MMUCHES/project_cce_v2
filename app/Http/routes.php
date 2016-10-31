<?php


Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::group(['prefix' => 'admin'], function () {
        Route::resource('/user', 'UserController');
        Route::resource('/post', 'PostController');
    });

    //Create questions
    Route::resource('questionCRUD', 'QuestionCRUDController');

    Route::get('questionaire','QuestionCRUDController@index');

    //Create Show report
    Route::get('/dasboard', 'QuestionCRUDController@show');

    Route::get('/report_02', 'QuestionCRUDController@report');

    
});