
    @extends('layouts.app')

@section('content')
    </br>
    <form class="container" method="post" action="{{route('posts.update', $data['id'])}}">
    @method('PUT')
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title"  value="{{$data['title']}}" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" value="{{$data['description']}}" id="description">
  </div>
  <div class="mb-3">
    <label for="posted_by" class="form-label">Post Creator</label>
    <input type="text" class="form-control" name="user_id" value="{{$data->user->name}}" id="user_id">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
