<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GenresController extends Controller
{
    public function show($genre) 
    {
        $movies = Movie::where('genre', $genre)->get();

        return view('movies.genres', compact('movies'));
    
    }

}
