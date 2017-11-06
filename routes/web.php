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


Route::post('/Login','LoginController@authenticate');
Route::resource('register','UserController');
Route::resource('/view','PostedBooksController');
Route::post('/viewSpecificDetails','PostedBooksController@show');
Route::resource('post','PostedBooksController');

Route::post('/search','SearchBookController@get_search');
Route::get('/getallpost','GetAllBooksController');
Route::get('/users','LoginController@getUsers');

//JWT AUTH 
Route::get('auth/user','UserController@show');
Route::get('auth/refresh', 'RefreshTokenController');

//messaging routes

Route::post('/sendMessage','MessageController@send');
Route::get('/retrieveMessages','MessageController@tempRetrieveMessages');

//category
Route::get('/getCategory', 'getCategoryController');

Route::group(['prefix'=> 'api'],function(){

	Route::post('/trial','TrialController@trial');
});