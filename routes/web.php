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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','PageController@index');
Route::post('/add','PageController@add_post');
Route::get('/edit/{id}','PageController@edit_post');
Route::post('/post_edit/{id}','PageController@post_edit');
Route::get('/viewpost/{id}','PageController@viewpost');
Route::get('/addlike/{id}','PageController@addlike');
Route::post('/add_comment/{id}','PageController@add_comment');
Route::get('/delete/{id}','PageController@delete');
