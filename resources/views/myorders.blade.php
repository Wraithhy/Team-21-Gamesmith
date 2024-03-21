@extends('layouts.app')
@section("content")
<link rel="stylesheet" href="/https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="/https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<head>
  <h4>My Orders</h4>
</head>
<body>
<link rel="stylesheet" href="css/myOrders.css">
<div class="custom-product">
  <div class="trending-wrapper">
      @foreach($orders as $item)
      <div class="ordercontainer">
        <div class="containerleft">
          <div>
            <a href="detail/{{$item->id}}">
              <img class="order-image" src="images/{{$item->id}}.png">
            </a>
          </div>
        </div>
        <div class="containerright">
          <h2>Name : {{$item->name}}</h2>
          <h5>Delivery Status : {{$item->status}}</h5>
          <h5>Address : {{$item->address}}</h5>
          <h5>Payment Status : {{$item->payment_status}}</h5>
          <h5>Payment Method : {{$item->payment_method}}</h5>
        </div>
    </div>
      @endforeach
  </div>
</div>
</body>
@endsection 