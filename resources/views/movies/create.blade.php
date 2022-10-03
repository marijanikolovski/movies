@extends('layout.master')

@section('title', 'Add movie')

@section('content')
    <form method="POST" action="/movies">
        @csrf
        
        <div class="mb-3">
            <label class="form-label" >Title</label>
            <input class="form-control" type="text" name="title" />
        </div>
        @error('title')
            @include('partials.error')
         @enderror


        <div class="mb-3">
            <label class="form-label" >Genre</label>
            <input class="form-control" type="text" name="genre" />
        </div>
        @error('genre')
            @include('partials.error')
        @enderror


        <div class="mb-3">
            <label class="form-label" >Director</label>
            <input class="form-control" type="text" name="director" />
        </div>
        @error('director')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label" >Year</label>
            <input class="form-control" type="number" name="year" />
        </div>
        @error('year')
            @include('partials.error')
        @enderror       

        <div class="mb-3">
            <label class="form-label" >Storyline</label>
            <textarea class="form-control" name="storyline" rows="10" ></textarea>
        </div>
        @error('storylin')
            @include('partials.error')
        @enderror  

        <button type="submit" class="btn brn-primary">Submit</button>
    </form>
@endsection