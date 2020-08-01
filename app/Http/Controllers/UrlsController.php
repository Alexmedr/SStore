<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class UrlsController extends Controller
{
    public function IndexAdmin (){
        $collection= (new MongoDB\Client)->MStore->Urls;
        $url = $collection->find();
        return view('Admin.Urls.index', ['url' => $url]);

    }

    public function Index() {
        $collection = (new MongoDB\Client)->MStore->Urls;
        $urlCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $urls = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);
        return view('Urls.index', [ "urls" => $urls, "urlCount" => $urlCount ]);
    }
}
