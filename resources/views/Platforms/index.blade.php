@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Platforms of Movies</h1>
            <div class="row">
            @foreach($platforms as $platforms)
                <div class="card col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $platforms->platform_name}}</b></h5>
                        <p class="card-text"><b>Availble:</b> {{ $platforms->available}}</p>
                        
                    </div>
                </div>
            @endforeach 
        </div>
@endsection