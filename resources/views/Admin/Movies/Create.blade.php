@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Song</h1>
                <form action="/admin/movies/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="title_name">Title</label>
                        <input class="form-control" type="text" name="title_name" id="title_name">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <select name="genre" id="genre" class="form-control">
                            <option value="0">Select a Genre... </option>
                            @foreach($genre as $genre)
                            <option value="{{ $genre->_id}}">{{ $genre->genres}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="audio">Audio</label>
                        <input class="form-control" type="text" name="audio" id="audio">
                    </div>
                    <div class="form-group">
                        <label for="quality">Quality</label>
                        <select name="quality" id="quality" class="form-control">
                            <option value="0">Select a Quality... </option>
                            @foreach($quality as $quality)
                            <option value="{{ $quality->_id}}">{{ $quality->quality}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="release_year">Release Year</label>
                        <input class="form-control" type="text" name="release_year" id="release_year">
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection