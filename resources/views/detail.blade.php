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
        <div class="leftcontainer">
            <img class="detail-img" src="/images/{{$product->id}}.png" alt="">
        </div>
        <div class="midcontainer">
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
        <div class="rightcontainer">
        @if(Auth::check()) 
        <form class="reviews" action="/submit_product_form" method="post">
            <h5>Leave a Review!<h5>
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <textarea class= "message" id="message" name="message" placeholder="Your message here"></textarea>
            <button class= "submit" type="submit">Submit</button>
        </form>
        @endif
        </div>
    </div>
    <div class="reviewcontainer">
    <h6>Product Reviews</h6>
    @foreach($reviews as $review)
        <div class="customerreview">
        <h2>{{$review->user_name}}</h2>
        <p>{{$review->product_message}}</p>
        </div>
    @endforeach
    </div>
</body>
@endsection
