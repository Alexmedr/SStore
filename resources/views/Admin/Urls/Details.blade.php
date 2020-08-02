@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Url Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><b>{{ $url->title_movie}}</b></h3>
                        <p class="card-text">{{ $url->genre_name }}</p>
                        <p class="card-text">{{ $url->url_movie}}</p>
                    </div>
                    <div class="card-body">
                        <a href="/admin/urls/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/urls/edit/{{ $url->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/urls/delete/{{ $url->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection