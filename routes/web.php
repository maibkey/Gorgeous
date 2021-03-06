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

Route::get('/', 'QuestionsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::name('email.verify')->get('email/verify/{token}','EmailController@verify');

Route::resource('questions', 'QuestionsController');

Route::post('/questions/{question}/answer', 'AnswersController@store');

Route::get('question/{question}/follow','QuestionFollowController@follow');

Route::get('notifications','NotificationsController@index');
Route::get('notifications/{notification}','NotificationsController@show');
// Route::get('/emailTest', function()
// {
//     // $email = new App\Mail\EmailTest();
//     // Mail::to('hao.frank@outlook.com')->send($email);
//
// });
