@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Genres</h1>
                <a class="text-right" href="/admin/genres/create">Add New Genre</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Genre:</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($genre as $genre)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $genre->genre_name }}</td>
                        <td>
                            <a href="/admin/genres/{{ $genre->_id }}">Details</a> |
                            <a href="/admin/genres/edit/{{ $genre->_id }}">Edit</a> |
                            <a href="/admin/genres/delete/{{ $genre->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection