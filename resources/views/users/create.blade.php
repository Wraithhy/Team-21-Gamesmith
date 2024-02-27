@extends('layouts.app')
@section('content')
<head>
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">

</head>
<body>
<link rel="stylesheet" href="css/user_create.css">
<div class="container">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Add a User</h3>
      <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <br>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <br>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create User</button>
      </form>
    </div>
  </div>
</div>
</body>
<style>
  body{
    font-family: "Bebas Neue", sans-serif;
    background-color: #4A5859;
    color: #98D831;
  }

  a{
    color: #98D831;

  }
</style>
@endsection