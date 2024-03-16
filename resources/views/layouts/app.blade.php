<?php 
use App\Http\Controllers\newProductController;
use Illuminate\Support\Facades\Auth;


$total=0;
if(Auth::user())
{
  $total= newProductController::cartItem();
}

?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gamesmith</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="///fonts.bunny.net">
    <link rel="stylesheet" href="/https://fonts.bunny.net/css?family=Nunito">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    GameSmith
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-link">
                            <a href="/aboutus">
                                About us
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/contactus">
                                contact us
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/allProducts">
                                products
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/myorders">
                                Orders
                            </a>
                        </li>
                        <li>
                        <form action="/search" class="navbar-form navbar-left">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="query" class="form-control search-box" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">Search</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-link"><a href="/cartlist">cart({{$total}})</a></li>
                        <li class="nav-link">
                        <a>
                            {{ Auth::user()->name }}
                        </a>
                        <li class="nav-link">
                            <a href="{{ route('customer.details') }}">my details</a>

                        </li>
                        @if(Auth::user()->is_admin == 1)
                        <li class="nav-link">
                            <a href="/product">inventory</a>
                        </li>
                        <li class="nav-link">
                            <a href="/userPage">Users</a>
                        </li>
                        <li class="nav-link">
                            <a href="{{route('reviews.show')}}">Reviews</a>
                        </li>
                        <li class="nav-link">
                            <a href="customerOrder">Customer Orders</a>
                        </li>
                        @endif
                    </li>
                    <li class="nav-link"><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>
    </div>
</div>
</nav>
<main class="py-4">
    @yield('content')
</main>
    </div>
</body>
</html>








<!--<nav class="navbar navbar-default" style="background-color: #98D831; margin: 0px auto;" >
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Gamesmith</a>
      </div>
  
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/myorders">Orders</a></li>
          <li><a href="/allproducts">Products</a></li>
          <li><a href="/aboutus">About Us</a></li>
          <li><a href="/contactus">Contact Us</a></li>
        </ul>

        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>

        </form>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="/cartlist">cart({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>-->

