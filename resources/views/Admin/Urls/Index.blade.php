@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Movies</h1>
                <a class="text right" href="/admin/urls/create">Add New Movie</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Movie</th>
                        <th scope="col">Watch Movie Online</th>

                        </tr>   
                    </thead>
                    <tbody>
                        @foreach($url as $url)
                        <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $url->genre_name }}</td>
                        <td>{{ $url->title_movie }}</td>
                       
                        <td>
                            <a href="{{$url->url_movie}}"><button type="button" class="btn btn-outline-dark">View</button></a> <td>                <td>
                            <a href="/admin/urls/{{ $url->_id }}">Details</a> |
                            <a href="/admin/urls/edit/{{ $url->_id }}">Edit</a> |
                            <a href="/admin/urls/delete/{{ $url->_id }}">Delete</a>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection