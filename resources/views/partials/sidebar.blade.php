<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4 class="fst-italic">Movies</h4>
        <ol class="list-unstyled mb-0">
            @foreach($last_five_movies as $latest_movie)
                <li><a href="{{ route('movies-index', ['id' => $movie->id]) }}">{{ $latest_movie->title }}</a></li>
            @endforeach
        </ol>
    </div>
</aside>
