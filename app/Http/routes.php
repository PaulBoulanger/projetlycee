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
Route::pattern('id', '[0-9]+');
Route::get('/', 'FrontController@index');
Route::get('actualites', 'FrontController@actualites');
Route::get('actualite/{id}', 'FrontController@actualite');
Route::get('lycee', 'FrontController@lycee');
Route::get('mentions', 'FrontController@mentions');
Route::get('contact', 'FrontController@contact');
Route::resource('commentaire', 'CommentController');
Route::auth();
Route::any('logout', 'UserController@logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth.teacher'], function() {
    Route::get('/', 'BackController@index');
    Route::resource('articles', 'PostController');
    Route::resource('eleves', 'UserController');
    Route::resource('questions', 'QuestionController');
    Route::get('question/{id}/choix', 'QuestionController@ChoiceEdit');
    Route::put('question/{id}/choix', 'QuestionController@ChoiceUpdate');
});

Route::group(['prefix' => 'eleve', 'middleware' => ['auth']], function() {
   Route::get('/', 'StudentController@index'); 
   Route::get('question/{id}', 'StudentController@question'); 
   Route::post('question/{id}', 'StudentController@validChoice'); 
});


