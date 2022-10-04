<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMovieRequest;

class MoviesController extends Controller
{
    public function index() {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id) {
        $movie = Movie::with('comments')->find($id);

        return view('movies.show', compact('movie'));
    }

    public function create() 
    {
        return view('movies.create');
    }

    public function store(CreateMovieRequest $request) 
    {
            $validated = $request->validated();

            Movie::create([
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'director' => $validated['director'],
            'year' => $validated['year'],
            'storyline' => $validated['storyline']
            ]);

            return redirect('/movies');
    }
}
