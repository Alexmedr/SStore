<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class UrlsController extends Controller
{
    public function Index() {
        $collection = (new MongoDB\Client)->MStore->Urls;
        $urlCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $urls = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);
        return view('Urls.index', [ "urls" => $urls, "urlCount" => $urlCount ]);
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->MStore->Urls;
        $urls = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Urls.Details", ["urls" => $urls]);
    }

    //AdminUrls

    public function IndexAdmin (){
        $collection= (new MongoDB\Client)->MStore->Urls;
        $url = $collection->find();
        return view('Admin.Urls.index', ['url' => $url]);

    }

    public function Create() {
        $collection = (new MongoDB\Client)->MStore->Urls;
        $url = $collection->find();
        return view('Admin.Urls.create', [ "url" => $url ]);
    }

    public function Url()
    {
        $url = [
            "genre_name" =>request("genre_name"),
            "title_movie" => request("title_movie"),
            "url_movie" => request("url_movie")
        ];
        $collection = (new MongoDB\Client)->MStore->Urls;
        $insertOneResult = $collection->insertOne($url);
        return redirect("/admin/urls");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->MStore->Urls;
        $url = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.urls.Edit', [ "url" => $url ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->MStore->Urls;
        $url = [
            "genre_name" =>request("genre_name"),
            "title_movie" => request("title_movie"),
            "url_movie" => request("url_movie")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("urlid"))
        ], [
            '$set' => $url
        ]);
        return redirect('/admin/urls/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->MStore->Urls;
        $url = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Urls.Delete', [ "url" => $url ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->MStore->Urls;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("urlid"))
        ]);
        return redirect('/admin/urls/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->MStore->Urls;
        $url = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.Urls.details', ["url" => $url]);
    }
}