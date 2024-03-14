<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameSmith</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>

  </style>
  <link rel="stylesheet" href="{{ asset('css/homepage_style.css') }}">
</head>-->

@extends('layouts.app')


@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <meta charset = "utf-8" />
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width inital-scale-1.0" />
        <link rel="stylesheet" href="css/homepage_style.css">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
</head>
<body>
<div class="homepagecontainer" >
    <div class="text-center">
        <h1 class="mh"> Welcome To Gamesmith</h>
    </div>
</div>

<div class="container">
    <div class="text-center">
        <p class="text"> Welcome to Gamesmith, where gaming prowess meets unparalleled gear. Elevate your play, conquer with us!</p>

    </div>
</div>

<div class="container">
<div class="container">
    <div class="text-center">
        <h2 class="text">Our Product Line!</h2>
        <p class="text"> Discover elite gaming gear in our curated categories!</p>
        <div class='container2'>
        <div class="card mx-auto " style="width: 10rem;">
          <img src="images/22.png" class="card-img-top div.embed-responsive" alt="..." >
          <div class="card-body">
          <a href="/allProducts#MonitorJump" class="link">Monitors</a>
            
          </div>
        </div>
        <div class="card mx-auto" style="width: 10rem;">
          <img  src="images/18.png" class="card-img-top div.embed-responsive" alt="..." >
          <div class="card-body">
          <a href="/allProducts#MouseJump" class="link">Mouse</a>
            
          </div>
        </div>
        <div class="card mx-auto" style="width: 10rem;">
          <img src="images/12.png" class="card-img-top div.embed-responsive" alt="..."  >
          <div class="card-body">
          <a href="/allProducts#ControllersJump" class="link">Controllers</a>
            
          </div>
        </div>
        <div class="card  mx-auto" style="width: 10rem;">
          <img src="images/6.png" class="card-img-top div.embed-responsive" alt="..."  >
          <div class="card-body">
          <a href="/allProducts#KeyboardsJump" class="link">Keyboards</a>
            
          </div>
        </div>
        <div class="card  mx-auto" style="width: 10rem;">
          <img src="images/1.png" class="card-img-top div.embed-responsive" alt="..."  >
          <div class="card-body">
          <a href="/allProducts#HeadsetJump" class="link">Headsets</a>
            
          </div>
        </div>
        </div>
  </div>
</div>
</div>
<dic class="container">
    <div class="text-center">
        <h2>Featured Gems</h2>
        <p class="text">Unleash Gaming Excellence</p>
    </div>
</dic>


<div class="container">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/21.png" class="d-block w-100 " alt="..."  height="500" >
      <div class="carousel-caption d-none d-md-block">
        <h12>ASOS ROG Swift</h12>
        <p class="cartext">Asus's very own high end monitor made for gaming at the highest refresh rates!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/9.png" class="d-block w-100 mx-auto" alt="..." height="500">
      <div class="carousel-caption d-none d-md-block">
        <h12>Steel Series Apex Pro</h12>
        <p class="cartext">Elevate your gaming to new heights with the SteelSeries Apex Pro Mechanical Gaming Keyboard</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/25.png" class="d-block w-100 mx-auto" alt="..." height="500">
      <div class="carousel-caption d-none d-md-block">
        <h12>AOC CQ32G1</h12>
        <p class="cartext"> a budget-friendly 32-inch curved gaming monitor.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</body>
</html>

@endsection