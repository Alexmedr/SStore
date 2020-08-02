@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Movie</h1>
                <form action="/admin/movies/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="title_name">Title</label>
                        <input class="form-control" type="text" name="title_name" id="title_name">
                    </div>
                    <div class="form-group">
                        <label for="genres">Genres</label>
                        <input class="form-control" type="text" name="genre" id="genre">
                    </div>
                    <div class="form-group">
                        <label for="audio">Audio</label>
                        <input class="form-control" type="text" name="audio" id="audio">
                    </div>
                    <div class="form-group">
                        <label for="quality">Quality</label>
                        <input class="form-control" type="text" name="quality" id="quality">
                    </div>
                    <div class="form-group">
                        <label for="release_year">Release year</label>
                        <input class="number" type="int" name="release_year" id="release_year">
                    </div>
                    <div class="form-group">
                        <label for="comments">Comments</label>
                        <input class="form-control" type="text" name="comments" id="comments">
                    </div>
                    <a href="/admin/movies/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection