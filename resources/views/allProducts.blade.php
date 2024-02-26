@extends("layouts.app")

@section("content")
<head>
    <link rel="stylesheet" href="css/allProducts.css">
</head>
<body>
  <div class="title">
    <h1>Products</h1>
  </div>
    <div class="container_grid">
        @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</body>
@endsection
