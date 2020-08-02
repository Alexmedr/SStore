@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Platform</h1>
                <form action="/admin/platforms/edit" method= "POST">
                @csrf
                <input type="hidden" name="platformid" id="platformid" value="{{ $platform->_id }}">
                <div class="form-group">
                        <label for="platform_name">Platform</label>
                        <input class="form-control" type="text" name="platform_name" id="platform_name" value="{{ $platform->platform_name }}">
                    </div>
                    <div class="form-group">
                        <label for="available">Available</label>
                        <input class="form-control" type="text" name="available" id="available" value="{{ $platform->available }}">
                    </div>
                <a href="/admin/platforms/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection