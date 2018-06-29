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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about');

//Route:resource pravi sve za Post Kontroler, da ne pisem rucno :)
Route::resource('posts', 'PostsController');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
