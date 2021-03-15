@extends('layouts.app')

@section('content')

<center><a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a></center>


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
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->user ? $post->user->name : 'user not found'}}</td>
      <td>{{ $post->created_at->format('Y-m-d') }}</td>
      <td> 
        <a href="{{route('posts.show', [ 'post' => $post['id'] ])}}" class="btn btn-info">view</a>
        <a href="{{route('posts.edit', [ 'post' => $post['id'] ])}}" class="btn btn-primary">Edit</a>
        <!-- <a class="btn btn-danger">Delete</a> -->
        <form action="{{ route('posts.destroy', ['post' => $post['id']]) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger"></input>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection




