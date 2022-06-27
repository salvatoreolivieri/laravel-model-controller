<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index(){

        $films = Movie::where('vote', '>', 8)->orderBy('vote', 'desc')->limit(3)->get();

        $favourite = Movie::where('title', 'il padrino')->first();

        $fiveElement = Movie::find(5);

        $containY = Movie::where('title', 'like', '%y%')->get();

        dump($containY);

        return view('movie', compact('films', 'favourite', 'fiveElement', 'containY'));

    }
}
