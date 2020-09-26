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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//admin
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/comment', 'CommentController@index');
 //Category
Route::get('/category', 'CategoryController@index');
Route::post('/add-category', 'CategoryController@store');
Route::get('/category/{id}', 'CategoryController@delete');
Route::get('/editcategory/{id}', 'CategoryController@edit');
Route::post('/update-category/{id}', 'CategoryController@update');

//Post
Route::get('/post', 'PostController@index');
Route::post('/savepost', 'PostController@store');
Route::get('/postdelete/{id}', 'PostController@delete');
Route::get('/post/{id}', 'PostController@edit');
Route::post('/update/{id}', 'PostController@update');

//PUBLIC

Route::get('/blog/{id}', 'HomeController@blog');
Route::get('/relate/{id}', 'HomeController@relatePost');
