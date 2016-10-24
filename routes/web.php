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
});
Route::get('/form', function () {
    return view('form.create');
});


Auth::routes();
Route::group(['middleware'=>'auth'],function(){
Route::get('/home', 'HomeController@index');
Route::resource('post', 'PostController');
Route::resource('user', 'UserController');

});

/*Route::get('/post', ['as'='post.index','uses'=>'PostController@index']);
Route::post('/post', 'PostController@store');
Route::get('/post/create', 'PostController@create');
Route::get('/post/{posts}', 'PostController@edit');
Route::put('/post/{posts}', 'PostController@update');
Route::delete('/post/{posts}', 'PostController@destroy');*/