<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

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

// ROUTE POUR CONNEXION ET DECONNECTION

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate')->name('authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LogoutController@logout')->name('logout');


// ROUTE POUR USER (moniteur et administrateur)
Route::resource('candidats', 'App\Http\Controllers\CandidateController');
Route::post('/candidats/store/{redirectTo}', 'App\Http\Controllers\CandidateController@store')->name('candidats.store');
Route::post('/candidats/show/{candidate}', 'App\Http\Controllers\CandidateController@show')->name('candidats.show');
Route::put('/candidats/update/{user}', 'App\Http\Controllers\CandidateController@update')->name('candidats.update');

Route::resource('users', 'App\Http\Controllers\UserController');
Route::post('/users/store/{redirectTo}', 'App\Http\Controllers\UserController@store')->name('users.store');
Route::get('/users/delete/{user}', 'App\Http\Controllers\UserController@destroy')->name('users.delete');
Route::put('/users/update/{user}', 'App\Http\Controllers\CandidateController@update')->name('users.update');

Route::resource('tests', 'App\Http\Controllers\TestController');
Route::get('/test/questions/create/{test}', 'App\Http\Controllers\QuestionController@testQuestionCreate')->name('test_questions.create');
Route::post('/test/questions/store/{test}', 'App\Http\Controllers\QuestionController@store')->name('test_questions.store');

Route::resource('questions', 'App\Http\Controllers\QuestionController');
Route::get('/questions/create', 'App\Http\Controllers\QuestionController@create')->name('questions.create');
Route::post('/questions/store', 'App\Http\Controllers\QuestionController@store2')->name('questions.store');

Route::resource('answers', 'App\Http\Controllers\AnswerController');
Route::get('/question/responses/create/{question}', 'App\Http\Controllers\AnswerController@testQuestionCreate')->name('questionAnswers.create');
Route::get('/question/responses/getAnswers/{question}', 'App\Http\Controllers\AnswerController@getAnswers')->name('questionAnswers.store');
Route::get('/question/responses/show/{question}', 'App\Http\Controllers\AnswerController@show')->name('answers.show');
Route::post('/question/responses/store/{question}', 'App\Http\Controllers\AnswerController@store')->name('answers.store');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

Route::get('/exam/choose', 'App\Http\Controllers\ExamenController@choose')->name('exam.choose');
Route::get('/exam/compose/{cpt}/{test}', 'App\Http\Controllers\ExamenController@compose')->name('tests.compose');
Route::post('/exam/store/{cpt}/{test}/{question}', 'App\Http\Controllers\ExamenController@composeStore')->name('tests.compose_store');
Route::get('/exam/result/{test}', 'App\Http\Controllers\ExamenController@resultExam')->name('tests.result');

Route::resource('calendar', 'App\Http\Controllers\CalendarController');
// Route::resource('emails','App\Http\Controllers\MailController');
// Route::get('/calendar', 'App\Http\Controllers\CalendarController@index')->name('calendar');


