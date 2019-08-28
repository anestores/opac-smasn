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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search-results', 'HomeController@search')->name('search');


Route::group(['middleware'=>'checkuser'], function() {

    Route::resource('/subjects', 'SubjectsController');

    Route::resource('/books', 'BooksController');

    Route::get('/search', 'BooksController@search');

    Route::get('/testpage', function () {
        return view('testpage');
    });
});

