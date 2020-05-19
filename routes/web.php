<?php

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

//Get index route
Route::get('/', 'AppController@index');

//Get route for dogs
Route::get('/dogs', function () {
    return view('dogs');
});

//Get route for cats
Route::get('/cats', function () {
    return view('cats');
});
