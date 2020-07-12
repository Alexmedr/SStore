<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class SmartphoneController extends Controller
{
    public function SStore()
    {
        $collection = (new MongoDB\Client)->SStore->Smartphones;
        $smartphone = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $products = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);
        return view('Smartphone.index', ['smartphones' => $designer, "smartphoneCount" => $model]);
    }
}