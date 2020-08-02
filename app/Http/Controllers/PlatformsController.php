<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class PlatformsController extends Controller
{
    public function Index() {
        $collection = (new MongoDB\Client)->MStore->Platforms;
        $platformCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $platforms = $collection->find([], ["limit" => 6, "skip" => ($page-1) * 3]);  
        return view('Platforms.Index', ['platforms' => $platforms, 'platformCount' => $platformCount]);
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->MStore->Platforms;
        $platforms = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Platforms.Details", ["platforms" => $platforms]);
    }

    //AdminPlatforms

    public function IndexAdmin (){
        $collection= (new MongoDB\Client)->MStore->Platforms;
        $platform = $collection->find();
        return view('Admin.Platforms.index', ['platform' => $platform]);

    }

    
    public function Create() {
        $collection = (new MongoDB\Client)->MStore->Platforms;
        $platform = $collection->find();
        return view('Admin.Platforms.create', [ "platform" => $platform ]);
    }

    public function Platform()
    {
        $platform = [
            "platform_name" => request("platform_name"),
            "available" => request("available")
        ];
        $collection = (new MongoDB\Client)->MStore->Platforms;
        $insertOneResult = $collection->insertOne($platform);
        return redirect("/admin/platforms");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->MStore->Platforms;
        $platform = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.platforms.Edit', [ "platform" => $platform ]);
    }   

    public function Update(){
        $collection = (new MongoDB\Client)->MStore->Platforms;
        $platform = [
            "platform_name" => request("platform_name"),
            "available" => request("available")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("platformid"))
        ], [
            '$set' => $platform
        ]);
        return redirect('/admin/platforms/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->MStore->Platforms;
        $platform = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Platforms.Delete', [ "platform" => $platform ]);
    }

    public function Remove(){
        $collection = (new MongoDB\Client)->MStore->Platforms;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("platformid"))
        ]);
        return redirect('/admin/platforms/');
    }

    public function Show($id)
    {
        $collection = (new MongoDB\Client)->MStore->Platforms;
        $platform = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Admin.Platforms.details', ["platform" => $platform]);
    }
}