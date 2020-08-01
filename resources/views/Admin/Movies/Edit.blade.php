@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Movie</h1>
                <form action="/admin/movies/edit" method="POST">
                @csrf
                <input type="hidden" name="movieid" id="movieid" value="{{ $movie->_id}}">
                    <div class="form-group">
                        <label for="title_song">Movie Name</label>
                        <input class="form-control" type="text" name="title_name" id="title_name" value="{{ $movie->title_name }}">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <select name="genre" id="genre" class="form-control">
                            <option value="0">Select a Genre... </option>
                            @foreach($genre as $genre)
                            <option value="{{ $genre->_id }}" {{ $genre->_id == $movie->id_genre ? 'selected' : '' }}>{{ $genre->genre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="audio">Audio</label>
                        <input class="form-control" type="text" name="audio" id="audio" value="{{ $movie->audio }}">
                    </div>
                    <div class="form-group">
                        <label for="quality">Quality</label>
                        <input class="form-control" type="text" name="quality" id="quality" value="{{ $movie->quality }}">
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="text" name="year" id="year" value="{{ $movie->release_year }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
