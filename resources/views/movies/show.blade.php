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
            <p>Genre: <a href="{{ route('movies-genre', ['genre' => $movie->genre]) }}">{{ $movie->genre }}</a></p>
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

    <form method="POST" action="/movies/{{ $movie->id }}/comments">
        @csrf

        <div class="mb-3">
            <label class="form-label" >Leave a comment</label>
            <textarea class="form-control" name="content" rows="2" ></textarea>
        </div>

        @error('content')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label" >Creation date</label>
            <input type="date" class="form-control" name="created_at"></textarea>
        </div>

        <button type="submit" class="btn brn-primary">Submit</button>

    </form>

@endsection

