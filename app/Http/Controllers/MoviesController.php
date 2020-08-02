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

    public function AddComment() {
        $collection = (new MongoDB\Client)->MStore->Movies;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $movies = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('moviesid')) ]);
        $Comments = $movies->Comments;
        if (count($Comments) == 0 || $Comments == null || empty($Comments)) {
            $Comments = [$comment];
        } else {
            $Comments = [$comment, ...$Comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('moviesid'))
        ],[
            '$set' => [ 'Comments' => $Comments ]
        ]);

        return redirect("/movies/".request('moviesid'));
    }

    public function MoviesDetails($id) {
        $collection = (new MongoDB\Client)->MStore->Movies;
        $movies = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Movies.Details", ["movies" => $movies]);
    }

// AdminMovies

    public function IndexAdmin()
    {
        $collections = (new MongoDB\Client)->MStore->Movies;
        $movie = $collections->find();
        return view('Admin.movies.index', ['movie' => $movie]);
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

            "release_year" => request("release_year"),

            "comments" => []
        ];
        $collection = (new MongoDB\Client)->MStore->Movies;
        $insertOneResult = $collection->insertOne($movie);
        return redirect("/admin/movies");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->MStore->Movies;
        $movie = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Movies.Edit', [ "movie" => $movie ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->MStore->Movies;
        $movie = [
            "title_name" => request("title_name"),

            "genres" => request("genres"),

            "audio" => request("audio"),

            "quality" => request("quality"),

            "release_year" => request("release_year"),

            "comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("movieid"))
        ], [
            '$set' => $movie
        ]);
        return redirect('/admin/movies/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->MStore->Movies;
        $movie = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Movies.Delete', [ "movie" => $movie ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->MStore->Movies;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("movieid"))
        ]);
        return redirect('/admin/movies/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->MStore->Movies;
        $movie = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.movies.details', ["movie" => $movie]);
    }
}