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

Route::get('/','FrontController@home');
Route::get('/ownerinfo','FrontController@signup');
Route::get('/carinfo','FrontController@signup1');

Route::any('/appfrom1','FrontController@appfrom1');
Route::any('/area_search/','FrontController@district');
Route::any('/key_search/','FrontController@keyword');