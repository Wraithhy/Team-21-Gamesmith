@extends('layouts.app')
@section("content")
<head>
  <link rel="stylesheet" href="css/search.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
</head>
<body>
<div class="custom-product">
  <h1>Result for Products</h1>
    <div class="trending-wrapper">
        @foreach($products as $item)
        <div class="searched-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="images/{{$item->id}}.png" alt="images">
          <div class="items">
            <h3>{{$item['name']}}</h3>
          </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
</body>
@endsection