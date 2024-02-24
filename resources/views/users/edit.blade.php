@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a user</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$user->name}}" />
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="email" value="{{$user->email}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>
@endsection