@extends('layouts.app')

@section('content')

<center><a class="btn btn-success">Create Post</a></center>


<table class="table container mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted by</th>
      <th scope="col">Created at</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>

    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['posted_by']}}</td>
      <td>{{$post['created_at']}}</td>
      <td> 
        <a href="{{route('posts.show', [ 'post' => $post['id'] ])}}" class="btn btn-info">view</a>
        <a class="btn btn-primary">Edit</a>
        <a class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection




