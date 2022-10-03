@extends('layout.master')

@section('title', 'Add movie')

@section('content')
    <form method="POST" action="/movies">
        @csrf
        
        <div class="mb-3">
            <label class="form-label" >Title</label>
            <input class="form-control" type="text" name="title" />
        </div>

        <div class="mb-3">
            <label class="form-label" >Genre</label>
            <input class="form-control" type="text" name="tgenre" />
        </div>

        <div class="mb-3">
            <label class="form-label" >Director</label>
            <input class="form-control" type="text" name="director" />
        </div>

        <div class="mb-3">
            <label class="form-label" >Year</label>
            <input class="form-control" type="number" name="year" />
        </div>

        <div class="mb-3">
            <label class="form-label" >Storyline</label>
            <textarea class="form-control" name="body" rows="10" ></textarea>
        </div>

        <button type="submit" class="btn brn-primary">Submit</button>
    </form>
@endsection