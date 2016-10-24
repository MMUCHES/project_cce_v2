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

    Route::resource('questionCRUD','QuestionCRUDController');

    Route::get('/dasboard', 'QuestionCRUDController@show');
    Route::get('/report_02', 'QuestionCRUDController@show');

    Route::get('/question_01', function () {
    return view('main.questionnaire.question_01');
    });
    
});