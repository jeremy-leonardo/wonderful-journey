<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/welcome', function() {return view('welcome');})->name('welcome')->middleware('auth');

Route::get('/', 'ArticleController@index')->name('home');
Route::get('/article', 'ArticleController@index')->name('article.index');
Route::get('/article/{id}', 'ArticleController@show')->name('article.show');
Route::get('/user/article/create', 'ArticleUserController@create')->name('article.create');
Route::post('/user/article/create', 'ArticleUserController@store')->name('article.store');
