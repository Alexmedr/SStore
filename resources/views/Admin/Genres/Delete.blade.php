@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Genre</h1>
                <form action="/admin/genres/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="genreid" id="genreid" value="{{ $genre->_id }}">
                <div class="form-group">
                        <label for="genre_name">Genre:</label>
                        <input class="form-control" type="text" name="genre_name" id="genre_name" value="{{ $genre->genre_name }}" disabled>
                </div>
                <a href="/admin/genres/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection