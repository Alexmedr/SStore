@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                    <div class="card-body">
                    <h1 class="card-title">{{ $platforms->platform_name }}</h1>
                    <h3 class="card-subtitle mb-2 text-muted">{{ $platforms->available }}</h3>
                </div>
                <div class="card-footer">
                    <p>Rating:</p>
                    <input type="radio" name="rating" id="rating">&nbsp1 </input>
                    <input type="radio" name="rating" id="rating">&nbsp2 </input>
                    <input type="radio" name="rating" id="rating">&nbsp3 </input>
                    <input type="radio" name="rating" id="rating">&nbsp4 </input>
                    <input type="radio" name="rating" id="rating">&nbsp5 </input>
                </div> 
                <div class="card-body">
                <a href="/platforms/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                </div>
        </div>
    </div>
@endsection