@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Movies</h1>
                <a class="text right" href="/admin/movies/create">Add New Movie</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Genres</th>
                        <th scope="col">Audio</th>
                        <th scope="col">Quality</th>
                        <th scope="col">Year</th>

                        </tr>   
                    </thead>
                    <tbody>
                        @foreach($movie as $movie)
                        <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $movie->title_name }}</td>
                        <td>{{ $movie->genres }}</td>
                        <td>{{ $movie->audio }}</td>
                        <td>{{ $movie->quality}}</td>
                        <td>{{ $movie->release_year }}</td>
                        <td>
                            <a href="/admin/movies/{{ $movie->_id }}">Details</a> |
                            <a href="/admin/movies/edit/{{ $movie->_id }}">Edit</a> |
                            <a href="/admin/movies/delete/{{ $movie->_id }}">Delete</a>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection