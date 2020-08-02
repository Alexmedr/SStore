@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/platforms/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="platformid" id="platformid" value="{{ $platform->_id }}">
                <div class="form-group">
                        <label for="platform_name">Platform</label>
                        <input class="form-control" type="text" name="platform_name" id="platform_name" value="{{ $platform->platform_name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="available">Available</label>
                        <input class="form-control" type="Text" name="available" id="available" value="{{ $platform->available }}" disabled>
                    </div>
                    <a href="/admin/platforms/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection