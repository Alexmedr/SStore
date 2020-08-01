@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title_name}}</h5>
                        <p class="card-text"><b>: </b> {{ $movie->genre_name}}</p>
                    </div>
                    <ul class="list-group list-group-flash">
                     <li class= "list-group-item"><b>Audio:</b> {{ $movie->audio}}</li> 
                     <li class= "list-group-item" ><b>Quality:</b>  {{ $movie->quality}}</li> 
                     <li class= "list-group-item"><b>Year:</b>  {{ $movie->release_year}}</li> 
                    </ul>
                        <div class="card-body">
                        <a href="/admin/movies/edit/{{ $movie->_id }}" class="card-link">Edit</a>
                        <a href="/admin/movies/delete/{{ $movie->_id }}" class="card-link">Delete</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
