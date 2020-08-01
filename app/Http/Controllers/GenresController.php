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

    public function IndexAdmin (){
        $collection = (new MongoDB\Client)->MStore->Genres;
        $genre = $collection->find();
        return view('Admin.genres.index', ['genre' => $genre]);

    }
}
