@extends('layouts.app')
@section("content")
<div class="custom-product">
  <div class="col-sm-4">
  <h4>Result for Products</h4>
    <div class="trending-wrapper">
        @foreach($products as $item)
        <div class="searched-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="images/{{$item->id}}.png">
          <div class="items">
            <h2>{{$item['name']}}</h2>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

<style>
    .searched-item a{
      color: #98D831;
      display: flex;
      gap: 50px;
      margin: 20px;
    }

    .trending-wrapper{
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* 5 columns with equal width */
    }


</style>