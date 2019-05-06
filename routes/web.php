
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
/*
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

Route::get('/accounts', 'AccountsController@index'); //
Route::get('/challenges', 'ChallengesController@index'); //METODO INDEX NO ENCONTRADO

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');  //CAMPO EMAIL EN LA BASE DE DATOS NO TIENE VALOR POR DEFECTO, FORMULARIO DE REGISTRO NECESITA UN EMAIL
*/



Route::view("/","inicio");

Route::get('/texttext/{questionId}', 'ChallengesController@textTextIndex')->middleware('auth');
Route::get('/textimage/{questionId}', 'ChallengesController@textImageIndex')->middleware('auth');
Route::get('/imageimage/{questionId}', 'ChallengesController@imageImageIndex')->middleware('auth');
Route::post('/texttext', 'ChallengesController@storeTextText')->middleware('auth');
Route::post('/textimage', 'ChallengesController@storeTextImage')->middleware('auth');
Route::post('/imageimage', 'ChallengesController@storeImageImage')->middleware('auth');
Route::get('/questions/create', 'QuestionsController@create')->middleware('auth');
Route::post('/questions', 'QuestionsController@store')->middleware('auth');
Route::get('/questions', 'QuestionsController@index')->middleware('auth');
Route::get('/questions/edit/{question}', 'QuestionsController@edit')->middleware('auth');
Route::patch('/questions/edit/{question}', 'QuestionsController@update')->middleware('auth');
Route::get('/questions/delete/{question}', 'QuestionsController@delete')->middleware('auth');
/*
Route::get('/options/create', 'OptionsController@create')->middleware('auth');
Route::post('/options', 'OptionsController@store')->middleware('auth');
Route::get('/options', 'OptionsController@index')->middleware('auth');
Route::get('/options/edit/{option}', 'OptionsController@edit')->middleware('auth');
Route::post('/options/edit/{option}', 'OptionsController@update')->middleware('auth');
Route::get('/options/delete/{option}', 'OptionsController@delete')->middleware('auth');*/
/*
Route::get('/signIn', function() {
    return view('signIn');
});*/
/*
Route::get('/adminPanel', function() {
    return view('adminPanel');
})->middleware('auth');
*/
Route::view("/adminPanel", "adminPanel");

Route::get('/stats', 'StatsController@index')->middleware('auth');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');