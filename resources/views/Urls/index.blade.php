@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Genres</h1>

                <div class="row">
                    @foreach($urls as $urls)
                        <div class="card col-md-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $urls->title_movie }}</h5>
                                <p class="card-text"><b>Genre:</b> {{ $urls->genre_name}}</p>
                                <p class="card-text"><a href="{{$urls->url_movie}}">
                                <button type="button" class="btn btn-outline-dark">View</button></a>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-md-12">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mx-auto" role="group" aria-label="First group">
                                @php
                                    $cpage = request('pg') == 0 ? 1 : request('pg');
                                @endphp
                                <a href="/urls?pg={{$cpage - 1}}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                @for ($i = 1; $i <= ceil($urlCount/12); $i++)
                                <a href="/urls?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : '' }}">{{$i}}</a>
                                @endfor
                                <a href="/urls?pg={{$cpage + 1}}" class="btn btn-secondary  {{ $cpage == ceil($urlCount/12) ? 'disabled' : '' }}">&gt</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection