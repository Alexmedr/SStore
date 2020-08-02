@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Movie</h1>
                <form action="/admin/movies/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <input type="hidden" name="movieid" id="movieid" value="{{ $movie->_id}}">
                    <div class="form-group">
                        <label for="title_name">Movie Name</label>
                        <input class="form-control" type="text" name="title_name" id="title_name" value="{{ $movie->title_name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="genres">Genre:</label>
                        <input class="form-control" type="Text" name="genres" id="genres" value="{{ $movie->genres }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="audio">Audio</label>
                        <input class="form-control" type="text" name="audio" id="audio" value="{{ $movie->audio }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="quality">Quality</label>
                        <input class="form-control" type="text" name="quality" id="quality" value="{{ $movie->quality }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="release_year">Year</label>
                        <input class="form-control" type="text" name="release_year" id="release_year" value="{{ $movie->release_year }}" disabled>
                    <a href="/admin/movies/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>

                </form>
            </div>
        </div>
    </div>
@endsection
                    
