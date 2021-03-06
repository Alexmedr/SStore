@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                    <div class="card-body">
                    <h5 class="card-title">{{ $movies->title_name }} </h5>
                    <p class="card-text"><b>Genre:</b> {{ $movies->genres}}</p>
                        <p class="card-text"><b>Audio:</b> {{ $movies->audio}}</p>
                        <p class="card-text"><b>Quality:</b> {{ $movies->quality}}</p>
                        <p class="card-text"><b>Release Year:</b> {{ $movies->release_year}}</p>
                </div>
                <div class="card-footer">
                    <p>Rating:</p>
                    <input type="radio" name="rating" id="rating">&nbsp1 </input>
                    <input type="radio" name="rating" id="rating">&nbsp2 </input>
                    <input type="radio" name="rating" id="rating">&nbsp3 </input>
                    <input type="radio" name="rating" id="rating">&nbsp4 </input>
                    <input type="radio" name="rating" id="rating">&nbsp5 </input>
                </div> 
            </div>

            <div class="col-md-12">
                <h1> <br> Add Comments </br> </h1>
                <form action="/movies/comment" method="POST">
                    @csrf
                    <input type="hidden" name="moviesid" id="moviesid" value="{{ $movies->_id }}">
                    <div class="form-group">
                        <label for="userid">Movies</label>
                        <input type="text" class="form-control" name="userid" id="userid">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comments</label>
                        <textarea name="comment" id="comment" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Add comment</button>
                </form>
            </div>
            <div class="card-body">
                <a href="/movies/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
             </div>

        </div>
    </div>
@endsection