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
Route::get('/', function () {return view('welcome'); });
Route::get('/home', 'HomeController@index')->name('home');

Route::get('berita/table', 'beritaCtrl@table')->name('berita.table');
Route::get('berita/populer', 'beritaCtrl@populer')->name('berita.populer');
Route::resource('berita', 'beritaCtrl');

Route::resource('peraturan', 'peraturanCtrl');
