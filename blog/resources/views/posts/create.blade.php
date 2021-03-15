
    @extends('layouts.app')

@section('content')
    </br>
    <form class="container" method="post" action="{{route('posts.store')}}">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <input type="text" class="form-control" name="description">
  </div>
  <div class="mb-3">
    <label for="creator" class="form-label">Post Creator</label>
    <select class="form-control" name="user_id">
    @foreach($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
    </select>
  </div>
 
  <button type="submit" class="btn btn-success">Create</button>
</form>
@endsection