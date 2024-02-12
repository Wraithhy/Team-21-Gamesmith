@extends("auth.layouts")
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">

@section("content")
<body>
  <link rel="stylesheet" href="css/allProducts.css">
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
