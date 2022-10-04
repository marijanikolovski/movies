<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GenresController extends Controller
{
    public function show($genre) 
    {
        $movies = Movie::where('genre', $genre)->get();
        $last_five_movies = Movie::orderBy('created_at', 'DESC')->get();

        return view('movies.genres', compact('movies', 'last_five_movies'));
    }
}
