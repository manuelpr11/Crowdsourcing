<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view("/","inicio");

Route::get('/texttext/{questionId}', 'ChallengesController@textTextIndex');
Route::get('/textimage/{questionId}', 'ChallengesController@textImageIndex');
Route::get('/imageimage/{questionId}', 'ChallengesController@imageImageIndex');
Route::post('/texttext', 'ChallengesController@storeTextText');
Route::post('/textimage/{questionId}', 'ChallengesController@storeTextImage');
Route::post('/imageimage/{questionId}', 'ChallengesController@storeImageImage');

Route::get('/questions/create', 'QuestionsController@create');
Route::post('/questions', 'QuestionsController@store');
Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/edit/{question}', 'QuestionsController@edit');
Route::post('/questions/edit/{question}', 'QuestionsController@update');
Route::get('/questions/delete/{question}', 'QuestionsController@delete');

Route::get('/options/create', 'OptionsController@create');
Route::post('/options', 'OptionsController@store');
Route::get('/options', 'OptionsController@index');
Route::get('/options/edit/{option}', 'OptionsController@edit');
Route::post('/options/edit/{option}', 'OptionsController@update');
Route::get('/options/delete/{option}', 'OptionsController@delete');




Route::get('/signIn', function() {
    return view('signIn');
});

Route::get('/adminPanel', function() {
    return view('adminPanel');
});

Route::get('/accounts', 'AccountsController@index');
Route::get('/challenges', 'ChallengesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
