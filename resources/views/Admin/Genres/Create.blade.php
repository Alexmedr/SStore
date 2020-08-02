@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Genre</h1>
                <form action="/admin/genres/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="genres">Genre:</label>
                        <input class="form-control" type="text" name="genre_name" id="genre_name">
                    </div>
                    <a href="/admin/genres/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection