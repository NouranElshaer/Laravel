
    @extends('layouts.app')

@section('content')
    </br>
    <form class="container" method="post" action="{{route('posts.store')}}">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <input type="text" class="form-control" id="desc">
  </div>
  <div class="mb-3">
    <label for="creator" class="form-label">Post Creator</label>
    <input type="text" class="form-control" id="creator">
  </div>
 
  <button type="submit" class="btn btn-success">Create</button>
</form>
@endsection