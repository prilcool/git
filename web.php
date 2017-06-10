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

Route::get('/', function () {
    return view('welcome');
});
Route::get('students', function()
{
    return View::make('students.index')
        ->with('students', Order::all());
});

Route::get('come', 'TodoController@index');
Route::post('come','TodoController@store');
Route::get('sleep', 'Hello@sleep');
Route::get('tweets', 'TweetController@show');
Route::get('easy', 'EasyController@show');
Route::get('example', 'EasyController@show');
Route::resource('my','MyController');
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function()
{
Route::get('apple','StudViewController@index');

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
  
});

Route::get('logout', function()
{
    Auth::logout();
     
    return Redirect::home();
});
Route::resource('admin/posts', 'Admin\\PostsController');