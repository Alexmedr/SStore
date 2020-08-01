<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class PlatformsController extends Controller
{
    public function Index () {
        $collections = (new MongoDB\Client)->MStore->Platforms;
        $platforms = $collections->find();
        return view('Platforms.index', ['platforms' => $platforms]);

    }

    public function IndexAdmin (){
        $collections= (new MongoDB\Client)->MStore->Platforms;
        $platform = $collections->find();
        return view('Admin.Platforms.index', ['platform' => $platform]);

    }
}
