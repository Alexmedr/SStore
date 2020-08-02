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

Route::post('/movies/comment', 'MoviesController@AddComment')->name('MoviesComments');

//Movies
Route::get('/genres', 'GenresController@Index')->name(' Movies Genres information');

Route::get('/genres/{id}', 'GenresController@Details')->name('Genres Details');
//Genres

Route::get('/platforms', 'PlatformsController@index')->name('Platform of Movies');

Route::get('/platforms/{id}', 'PlatformsController@Details')->name('Platforms Details');
//Platforms

Route::get('/urls', 'UrlsController@index')->name('Watch Movies');

Route::get('/urls/{id}', 'UrlsController@Details')->name('UrlDetails');
//Urls

//Admin Routes


Route::get('/admin/movies', 'MoviesController@indexAdmin');

Route::get('/admin/movies/create','MoviesController@Create');

Route::post('/admin/movies/create','MoviesController@Movie');

Route::get('/admin/movies/edit/{id}', "MoviesController@Edit");

Route::post('/admin/movies/edit', "MoviesController@Update");

Route::get('/admin/movies/delete/{id}', "MoviesController@Delete");

Route::delete('/admin/movies/delete', "MoviesController@Remove");

Route::get('/admin/movies/{id}','MoviesController@Show');
//AdminMovies

Route::get('/admin/genres', 'GenresController@IndexAdmin');

Route::get('/admin/genres/create','GenresController@Create');

Route::post('/admin/genres/create','GenresController@Genre');

Route::get('/admin/genres/edit/{id}', "GenresController@Edit");

Route::post('/admin/genres/edit', "GenresController@Update");

Route::get('/admin/genres/delete/{id}', "GenresController@Delete");

Route::delete('/admin/genres/delete', "GenresController@Remove");

Route::get('/admin/genres/{id}', 'GenresController@Show');
//AdminGenres

Route::get('/admin/platforms', 'PlatformsController@IndexAdmin');

Route::get('/admin/platforms/create','PlatformsController@Create');

Route::post('/admin/platforms/create','PlatformsController@Platform');

Route::get('/admin/platforms/edit/{id}', "PlatformsController@Edit");

Route::post('/admin/platforms/edit', "PlatformsController@Update");

Route::get('/admin/platforms/delete/{id}', "PlatformsController@Delete");

Route::delete('/admin/platforms/delete', "PlatformsController@Remove");

Route::get('/admin/platforms/{id}', 'PlatformsController@Show');
//AdminPlatforms

Route::get('/admin/urls', 'UrlsController@IndexAdmin');

Route::get('/admin/urls/create','UrlsController@Create');

Route::get('/admin/urls/create','UrlsController@Url');

Route::get('/admin/urls/edit/{id}', "UrlsController@Edit");

Route::post('/admin/urls/edit', "UrlsController@Update");

Route::get('/admin/urls/delete/{id}', "UrlsController@Delete");

Route::delete('/admin/urls/delete', "UrlsController@Remove");

Route::get('/admin/urls/{id}', 'UrlsController@Show');
//AdminURLs