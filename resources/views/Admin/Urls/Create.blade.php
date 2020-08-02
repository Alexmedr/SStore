@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Movie Online</h1>
                <form action="/admin/urls/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="genre_name">Genre:</label>
                        <input class="form-control" type="text" name="genre_name" id="genre_name">
                    </div>
                    <div class="form-group">
                        <label for="title_movie">Title:</label>
                        <input class="form-control" type="text" name="title_movie" id="title_movie">
                    </div>
                    <div class="form-group">
                        <label for="url_movie">URL:</label>
                        <input class="form-control" type="text" name="url_movie" id="url_movie">
                    </div>
                    <a href="/admin/urls/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection