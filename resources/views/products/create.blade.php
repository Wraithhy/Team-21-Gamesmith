@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Product</title>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/create.css') }}">
    
</head>
<body>
    <h1>Create a Product</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form class="cprod" method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div>
            <label>Name</label>
            <input class="name-input" type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Qty</label>
            <input class="qty-input" type="text" name="qty" placeholder="Qty" />
        </div>
        <div>
            <label>Price</label>
            <input class="price-input" type="text" name="price" placeholder="Price" />
        </div>
        <div>
            <label>Description</label>
            <input class="description-input" type="text" name="description" placeholder="Description" />
        </div>
        <div>
            <input class="submit-input1" type="submit" value="Save a New Product" />
        </div>
    </form>
</body>
</html>
@endsection