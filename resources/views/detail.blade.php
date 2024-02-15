@extends('layouts.app')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{images/{{$product->id}}.png}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">Go Back</a>
       <h2>{{$product['name']}}</h2>
       <h3>Price : £{{$product['price']}}</h3>
       <h4>Details: {{$product['description']}}</h4>
       <h4>category: {{$product['category']}}</h4>
       <br><br>
       <form method="POST" action="/add_to_cart">
        @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input class="quantNumber" type="number" name="quantity" value="1" min="1">
    <button class="addToCart" type="submit">Add to Cart</button>
    </form>
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

</style>