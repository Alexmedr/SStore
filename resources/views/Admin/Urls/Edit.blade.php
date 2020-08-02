@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Movie Online</h1>
                <form action="/admin/urls/edit" method= "POST">
                @csrf
                <input type="hidden" name="urlid" id="urlid" value="{{ $url->_id }}">
                <div class="form-group">
                        <label for="title_movie">Platform</label>
                        <input class="form-control" type="text" name="title_movie" id="title_movie" value="{{ $url->title_movie }}">
                    </div>
                    <div class="form-group">
                        <label for="genre_name">Genre:</label>
                        <input class="form-control" type="text" name="genre_name" id="genre_name" value="{{ $url->genre_name }}">
                    </div>
                    <div class="form-group">
                        <label for="url_movie">Link:</label>
                        <input class="form-control" type="text" name="url_movie" id="url_movie" value="{{ $url->url_movie }}">
                    </div>
                <a href="/admin/urls/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection