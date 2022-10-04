@extends('layout.master')

@section('title', 'Movie')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">{{ $movie->title }}</h1>
            </div>
        </div>
        <div class="container">
            @if ($movie)
            <p>Year: {{ $movie->year }}</p>
            <p>Genre: {{ $movie->genre }}</p>
            <p>Director: {{ $movie->director }}</p>
            <p>Storyline: {{ $movie->storyline }}</p>
            <br>
            @endif
        </div>
    </main><!-- /.container -->

    <div>
        <h4>Comments:</h4>
        
        <ul>
            @foreach ($movie->comments as $comment)
                <li>
                    {{ $comment->content }}
                </li>
                <li>
                    {{ $comment->created_at }}
                </li>

            @endforeach
        </ul>
    </div>
@endsection

