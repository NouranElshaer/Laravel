
    @extends('layouts.app')

@section('content')
    </br>
    <form class="container" method="post" action="{{route('posts.update', 'id', $post['id'])}}">
    @method('PUT')
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title"  value="{{$post['title']}}" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <input type="text" class="form-control" name="desc" value="{{$post['desc']}}" id="desc">
  </div>
  <div class="mb-3">
    <label for="posted_by" class="form-label">Post Creator</label>
    <input type="text" class="form-control" name="posted_by" value="{{$post['posted_by']}}" id="posted_by">
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
