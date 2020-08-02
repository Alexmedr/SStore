@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Genre</h1>
                <form action="/admin/genres/edit" method= "POST">
                @csrf
                <input type="hidden" name="genreid" id="genrid" value="{{ $genre->_id }}">
                <div class="form-group">
                        <label for="genre_name">Genre:</label>
                        <input class="form-control" type="text" name="genre_name" id="genre_name" value="{{ $genre->genre_name }}">
                </div>
                <a href="/admin/genres/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection