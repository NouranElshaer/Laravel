
    @extends('layouts.app')

@section('content')
    </br>
    <div class="card container">
    <div class="card-header">
    Post Info
    </div>
    <div class="card-body">
        <h5 class="card-title">Title :-</h5>
        <p class="card-text">{{$post['title']}}</p>
        <h5 class="card-title">Description :-</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$post['desc']}}</h6>
    </div>
    </div>
    </br>
    <div class="card container">
    <div class="card-header">
    Post Creator Info
    </div>
    <div class="card-body">
        <h5 class="card-title">Name :-</h5>
        <p class="card-text">{{$post['posted_by']}}</p>
        <h5 class="card-title">Created At :-</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$post['created_at']}}</h6>
    </div>
    </div>
@endsection