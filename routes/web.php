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


Route::get('/about','AboutController@index');
Route::get('/articles/{id}', 'ArticlesController@getID');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tampil', 'ArticlesController@index')->name('tampil');

Route::get('/tambah/add','ArticlesController@add');
Route::post('/tambah/create','ArticlesController@create');

Route::get('/tampil/edit/{id}','ArticlesController@edit');
Route::post('/edit/update/{id}','ArticlesController@update');

Route::get('/tampil/delete/{id}','ArticleController@delete');


