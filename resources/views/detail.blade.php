@extends('layouts.app')
@section("content")
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="images/{{$product->id}}.png" alt="img">
       </div>
       <div class="col-sm-6">
           <a href="/">Go Back</a>
       <h2>{{$product['name']}}</h2>
       <h3>Price : £{{$product['price']}}</h3>
       <p>Details: {{$product['description']}}</p>
       <h4>category: {{$product['category']}}</h4>
       <br><br>
    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
       <br><br>
       <button class="button">Buy Now</button>
       <br><br>
    </div>
   </div>
</div>
@endsection


<style>

    .quantNumber{
        color: black;
    }

    .addToCart{
        color: black;
    }

    .detail-img{
        width: 800px;
        height: 800px;
    }

</style>