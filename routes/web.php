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

/*Route::get('/welcome', function () {
    return view('welcome');
});*/

Route::get('/contacts', 'Controller1@index');
Route::get('/contacts', 'Controller2@index');
Route::get('/contacts', 'Controller3@index');
Route::get('/contacts', 'Controller4@index');
Route::get('/contacts', 'Controller5@index');

Route::get('/contact', 'Controller1@list');
Route::get('/contact', 'Controller2@list');
Route::get('/contact', 'Controller3@list');
Route::get('/contact', 'Controller4@list');
Route::get('/contact', 'Controller5@list');

Route::get('/about', 'Controller1@list1');
Route::get('/about', 'Controller2@list1');
Route::get('/about', 'Controller3@list1');
Route::get('/about', 'Controller4@list1');
Route::get('/about', 'Controller5@list1');


Route::get('/shipping', 'Controller1@list2');
Route::get('/shipping', 'Controller2@list2');
Route::get('/shipping', 'Controller3@list2');
Route::get('/shipping', 'Controller4@list2');
Route::get('/shipping', 'Controller5@list2');

Route::get('/welcome', 'Controller1@index');
Route::get('/welcome', 'Controller2@index');
Route::get('/welcome', 'Controller3@index');
Route::get('/welcome', 'Controller4@index');

Route::get('/welcome', 'Controller1@list');
Route::get('/welcome', 'Controller2@list');
Route::get('/welcome', 'Controller3@list');
Route::get('/welcome', 'Controller4@list');

Route::get('/welcome', 'Controller1@list1');
Route::get('/welcome', 'Controller2@list1');
Route::get('/welcome', 'Controller3@list1');
Route::get('/welcome', 'Controller4@list1');

Route::get('/welcome', 'Controller1@list2');
Route::get('/welcome', 'Controller2@list2');
Route::get('/welcome', 'Controller3@list2');
Route::get('/welcome', 'Controller4@list2');





