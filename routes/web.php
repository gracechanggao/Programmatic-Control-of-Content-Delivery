<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    //return $view = View::make('welcome')->nest('child', 'child.view');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/article', 'ArticleController@index');
  Route::get('article/{id}', 'ArticleController@show');

Route::get('/question', 'QuestionController@index');
Route::get('/trainpage', 'TrainNetworkController@index');
Route::get('/usefirsttime', 'UseNetworkController@index');
Route::get('/read1', 'Read1Controller@index');
Route::get('/read1question1', 'Read1Question1Controller@index');



//Route::get('/question', 'QuestionController@useNetwork');


//Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
//{
//  Route::get('/', 'AdminHomeController@index');
//});
//


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
  Route::get('/', 'AdminHomeController@index');
  Route::resource('pages', 'PagesController');

//  Route::get('pages/{id}', 'PagesController@show');
});
  Route::get('homeb', 'HomebController@index');

  
  Route::get('pages/{id}', 'PageController@show');

//
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
//{
//  Route::get('/', 'AdminHomeController@index');
//  Route::resource('pages', 'PagesController');
//});


