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

    Route::get('/questionHOME', function () {
        return view('main.questionnaire.home');
    });
    //Create questions
    Route::resource('questionCRUD', 'QuestionController');

    Route::get('questionaire','QuestionController@index');

    //Create Show report
    Route::get('/dasboard', 'QuestionController@show');

    Route::get('/report_02', 'QuestionController@report');

    
});