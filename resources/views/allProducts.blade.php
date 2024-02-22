@extends("auth.layouts")
@section("content")
<head>
        <meta charset = "utf-8" />
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width inital-scale-1.0" />
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
        <link rel="stylesheet" href="css/allProducts.css">

</head>
<body>
  <div class="title">
    <h1>Products</h1>
  </div>
    <div class="container_grid">
        @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <img class="productSlider" src="images/newImages/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h4>{{$item['name']}}</h4>
                    </div>
            </div>
        @endforeach
    </div>
</body>
@endsection
