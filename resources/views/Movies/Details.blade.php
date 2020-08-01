@extends(' layouts.app')

@section('content')
 <div class="container">
      <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movies->title_name }} </h5>
                        <p class="card-text"><b>Genre:</b> {{ $movies->genres}}</p
                        <p class="card-text"><b>Audio:</b> {{ $movies->audio}}</p>
                        <p class="card-text"><b>Quality:</b> {{ $movies->quality}}</p>
                        <p class="card-text"><b>Release Year:</b> {{ $movies->release_year}}</p>
                    </div>
                </div>
        </div>
   </div>
@endsection