@extends('layouts.app')
@section("content")
<link rel="stylesheet" href="/https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="/https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<head>
</head>
<body>
<link rel="stylesheet" href=/css/detail.css>
    <div class="detailcontainer">
        <div class="containerleft">
            <img class="detail-img" src="/images/{{$product->id}}.png" alt="">
        </div>
        <div class="containerright">
            <a class = "backbutton" href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price : £{{$product['price']}}</h3>
            <p>{{$product['description']}}</p>
            <h4>Category: {{$product['Category']}}</h4>
            <br><br>

            <form class="cartcontainer" method="POST" action="/add_to_cart">
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input class="quantNumber" type="number" name="quantity" value="1" min="1">
            <p class="btn-holder">
            <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
            <!--<button class="addToCart" type="submit">Add to Cart</button>-->
            </form>
        </div>
        @if(Auth::check()) 
        <form class="reviews" action="/submit_product_form" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <textarea id="message" name="message" placeholder="Your message here"></textarea>
            <button type="submit">Submit</button>
        </form>
        @endif

    </div>

    <div class="reviewContainer">
    @foreach($reviews as $review)
    <h1>{{$review->user_name}}</h1>
    <h1>{{$review->product_message}}</h1>
@endforeach

</div>
</body>
@endsection
