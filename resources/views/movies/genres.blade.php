@extends('layout.master')

@section('title', 'Genres')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Movies</h1>
            </div>
        </div>          
        <ul>
            <div class="container">
                @foreach ($movies as $movie)
                    <p>Title: {{ $movie->title }}</p>
                    <p>Genre: {{ $movie->genre }}</p>
                    <p>Storyline: {{ $movie->storyline }}</p>
                    <br>
                @endforeach
            </div>
            </ul>

            @include('partials.sidebar')
    </main><!-- /.container -->
@endsection
