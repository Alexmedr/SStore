@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                    <div class="card-body">
                    <h1 class="card-title">{{ $urls->title_movie }}</h1>
                    <h3 class="card-subtitle mb-2 text-muted">{{ $urls->genre_name }}</h3>
                    <p class="card-text"><a href="{{$urls->url_movie}}">
                    <button type="button" class="btn btn-outline-dark">Watch</button></a>
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
                    <button class="btn btn-success" type="submit">Add comment</button>
                </form>
            </div>

        </div>
    </div>
@endsection