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
Route::get('/libraryclearance','PagesController@library');
Route::get('/alumniclearance','PagesController@alumni');
Route::get('/bursaryclearance','PagesController@bursary');
Route::get('/studentaffairsclearance','PagesController@studentAffairs');
Route::get('/facultyclearance','PagesController@faculty');
Route::get('/securityclearance','PagesController@security');
