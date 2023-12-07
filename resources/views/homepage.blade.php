<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameSmith</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>

  </style>
  <link rel="stylesheet" href="{{ asset('css/homepage_style.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
</head>
<body>
@include('navbar')

<div class="container" >
    <div class="text-center">
        <h1 class="mh"> Welcome To Gamesmith</h>
    </div>
</div>

<div class="container">
    <div class="text-center">
        <p class="text"> Welcome to Gamesmith, where gaming prowess meets unparalleled gear. Elevate your play, conquer with us!</p>

    </div>
</div>

<div class="contain">
<div class="container ">
    <div class="text-center">
        <h2 class="text">Our Product Line!</h2>
        <p class="text"> Discover elite gaming gear in our curated categories!</p>
        <div class='container2'>
        <div class="card mx-auto " style="width: 10rem;">
          <img src="images/m1.png" class="card-img-top div.embed-responsive" alt="..." >
          <div class="card-body">
          <a href="/products#MonitorJump" class="link">Monitors</a>
            
          </div>
        </div>
        <div class="card mx-auto" style="width: 10rem;">
          <img  src="images/DeathV2.png" class="card-img-top div.embed-responsive" alt="..." >
          <div class="card-body">
          <a href="/products#MouseJump" class="link">Mouse</a>
            
          </div>
        </div>
        <div class="card mx-auto" style="width: 10rem;">
          <img src="images/ps5.jpg" class="card-img-top div.embed-responsive" alt="..."  >
          <div class="card-body">
          <a href="/products#ControllerJump" class="link">Controllers</a>
            
          </div>
        </div>
        <div class="card  mx-auto" style="width: 10rem;">
          <img src="images/RHGK.jpg" class="card-img-top div.embed-responsive" alt="..."  >
          <div class="card-body">
          <a href="/products#KeyboardsJump" class="link">Keyboards</a>
            
          </div>
        </div>
        <div class="card  mx-auto" style="width: 10rem;">
          <img src="images/RKG.jpg" class="card-img-top div.embed-responsive" alt="..."  >
          <div class="card-body">
          <a href="/products#HeadsetJump" class="link">Headsets</a>
            
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
      <img src="/images/m1.png" class="d-block w-100" alt="..."  height="600" >
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p class="text">Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/LMGK.jpg" class="d-block w-100" alt="..." height="600">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p class="text">Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/PS4.jpg" class="d-block w-100" alt="..." height="600">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p class="text">Some representative placeholder content for the third slide.</p>
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