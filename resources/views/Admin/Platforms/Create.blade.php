@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Platform</h1>
                <form action="/admin/platforms/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="platform_name">Platforms:</label>
                        <input class="form-control" type="text" name="platform_name" id="platform_name">
                    </div>
                    <div class="form-group">
                        <label for="available">Available</label>
                        <input class="form-control" type="text" name="available" id="available">
                    </div>
                    <a href="/admin/platforms/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection