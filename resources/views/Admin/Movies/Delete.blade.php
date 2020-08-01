@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Song</h1>
                <form action="/admin/movies/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <input type="hidden" name="movieid" id="movieid" value="{{ $movie->_id}}">
                    <div class="form-group">
                        <label for="title_name">Movie Name</label>
                        <input class="form-control" type="text" name="title_name" id="title_name" value="{{ $movie->title_name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <select name="genre" id="genre" class="form-control" disabled>
                            <option value="0">Select a Genre... </option>
                            @foreach($genre as $genre)
                            <option value="{{ $genre->_id }}" {{ $genre->_id == $movie->genre ? 'selected' : '' }}>{{ $genre->genre }}</option>
                            @endforeach
                        </select>
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
                        <label for="year">Year</label>
                        <input class="form-control" type="text" name="year" id="year" value="{{ $movie->release_year }}" disabled>
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
                    
