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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::get('/contactus', function () {
    return view('contactus');
});


Route::get('/smartphones', function () {
    return view('smartphones');
});

Route::get('/mongodb', function () {
    return view('mongodb');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

