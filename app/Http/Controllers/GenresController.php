<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class GenresController extends Controller
{
    public function Index() {
        $collection = (new MongoDB\Client)->MStore->Genres;
        $genreCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $genres = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);
        return view('Genres.index', [ "genres" => $genres, "genreCount" => $genreCount ]);
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->MStore->Genres;
        $genres = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Genres.Details', [ "genres" => $genres]);
    }

    //Admin

    public function IndexAdmin (){
        $collection = (new MongoDB\Client)->MStore->Genres;
        $genre = $collection->find();
        return view('Admin.Genres.index', ['genre' => $genre]);

    }

    public function Create() {
        $collection = (new MongoDB\Client)->MStore->Genres;
        $genre = $collection->find();
        return view('Admin.Genres.create', [ "genre" => $genre ]);
    }

    public function Genre()
    {
        $genre = [
            "genre_name" => request("genre_name")
        ];
        $collection = (new MongoDB\Client)->MStore->Genres;
        $insertOneResult = $collection->insertOne($genre);
        return redirect("/admin/genres");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->MStore->Genres;
        $genre = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Genres.Edit', [ "genre" => $genre ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->MStore->Genres;
        $genre = [
            "genre_name" => request("genre_name")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("genreid"))
        ], [
            '$set' => $genre
        ]);
        return redirect('/admin/genres/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->MStore->Genres;
        $genre = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Genres.Delete', [ "genre" => $genre ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->MStore->Genres;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("genreid"))
        ]);
        return redirect('/admin/genres/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->MStore->Genres;
        $genre = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.Genres.details', ["genre" => $genre]);
    }
}