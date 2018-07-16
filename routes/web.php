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
Route::get('/cardocument','FrontController@signup2');
Route::get('/login','FrontController@login');
Route::get('/driverSignup','FrontController@driverSignup');

//PDF
Route::get('/makePDF','PdfController@makePDF');


Route::any('/appfrom1/','FrontController@appfrom1');
Route::any('/appfrom2/','FrontController@appfrom2');
Route::post('/appfrom3/','FrontController@appfrom3');
Route::post('/checkLogin/','FrontController@checkLogin');
Route::post('/driSingup/','FrontController@driSingup');

Route::any('/area_search/','FrontController@district');
Route::any('/key_search/','FrontController@keyword');