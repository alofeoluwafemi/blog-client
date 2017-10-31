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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','BlogController@getAllArticles')->name('article.all');
Route::get('/article/{id}','BlogController@getArticleById')->where(['id' => '[0-9]'])->name('article.show');