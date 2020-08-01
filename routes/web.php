<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\UrlsController;
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

Route::get('/mongodb', function () {
    return view('mongodb');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/movies', 'MoviesController@Index')->name('Movies Information');

Route::get('/movies/{id}', 'MoviesController@MoviesDetails')->name('MoviesDetails');
//Movies
Route::get('/genres', 'GenresController@Index')->name(' Movies Genres information');
//Genres
Route::get('/urls', 'UrlsController@index')->name('Watch Movies');
//Urls
Route::get('/platforms', 'PlatformsController@index')->name('Platform of Movies');
//Platforms

//Admin Routes


Route::get('/admin/movies', 'MoviesController@indexAdmin');
Route::get('/admin/movies/create','MoviesController@Create');
Route::post('/admin/movies/create','MoviesController@Movie');
Route::get('/admin/movies/{id}','MoviesController@Show');
//AdminMovies

Route::get('/admin/genres', 'GenresController@IndexAdmin');
//AdminGenres

Route::get('/admin/urls', 'UrlsController@IndexAdmin');
//AdminURLs

Route::get('/admin/platforms', 'PlatformsController@IndexAdmin');
//AdminPlatforms