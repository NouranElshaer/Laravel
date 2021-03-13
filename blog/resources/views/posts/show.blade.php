<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ITI Blog</a>
  </div>
</nav>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">All Posts</span>
  </div>
</nav>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>