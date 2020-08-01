@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Movies</h1>
                <a class="text right" href="/admin/platforms/create">Add New Platform</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Platform</th>
                        <th scope="col">Available</th>

                        </tr>   
                    </thead>
                    <tbody>
                        @foreach($platform as $platform)
                        <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $platform->platform_name }}</td>
                        <td>{{ $platform->available }}</td>
                        <td>
                            <a href="/admin/platforms/{{ $platform->_id }}">Details</a> |
                            <a href="/admin/platforms/edit/{{ $platform->_id }}">Edit</a> |
                            <a href="/admin/platforms/delete/{{ $platform->_id }}">Delete</a>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection