<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class MoviesController extends Controller
{
    public function Index() {
        $collection = (new MongoDB\Client)->MStore->Movies;
        $movieCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $movies = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);
        return view('Movies.Index', [ "movies" => $movies, "movieCount" => $movieCount ]);
    }


    public function IndexAdmin()
    {
        $collections = (new MongoDB\Client)->MStore->Movies;
        $movie = $collections->find();
        return view('Admin.movies.index', ['movie' => $movie]);
    }

    public function MoviesDetails($id) {
        $collection = (new MongoDB\Client)->MStore->Movies;
        $movies = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Movies.Details", ["movies" => $movies]);
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->MStore->Movies;
        $movie = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.movies.details', ["movie" => $movie]);
    }
    

    public function Create() {
        $collection = (new MongoDB\Client)->MStore->Movies;
        $movie = $collection->find();
        return view('Admin.Movies.create', [ "movie" => $movie ]);
    }

    public function Movie()
    {
        $movie = [
            "title_name" => request("title_name"),

            "genres" => request("genres"),

            "audio" => request("audio"),

            "quality" => request("quality"),

            "release_year" => request("release_year")
        ];
        $collection = (new MongoDB\Client)->MStore->Movies;
        $insertOneResult = $collection->insertOne($movie);
        return redirect("/admin/movies");
    }
}