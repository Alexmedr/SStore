@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/urls/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="urlid" id="urlid" value="{{ $url->_id }}">
                <div class="form-group">
                        <label for="title_movie">Movie:</label>
                        <input class="form-control" type="text" name="title_movie" id="title_movie" value="{{ $url->title_movie }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="genre_name">Genre:</label>
                        <input class="form-control" type="Text" name="genre_name" id="genre_name" value="{{ $url->genre_name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="url_movie ">Link:</label>
                        <input class="form-control" type="Text" name="url_movie " id="url_movie " value="{{ $url->url_movie }}" disabled>
                    </div>
                    <a href="/admin/urls/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection