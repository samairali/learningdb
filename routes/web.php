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
	$posts = DB::table('posts')->get();
    return view('welcome',compact('posts'));
});
Route::get('/post/create','PostController@create');
Route::post('/posts','PostController@save');
Route::get('/posts','PostController@allposts');
Route::get('/post/singlepost/{post}','PostController@singlepost');
