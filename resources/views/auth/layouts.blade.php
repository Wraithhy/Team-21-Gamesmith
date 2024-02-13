<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamesmith</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ URL('/') }}">Gamesmith</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                @guest
                <li class="nav-item">
                        <a class="nav-link" href="about-us">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus">contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkout">checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allproducts">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                
                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="about-us">about us</a>
                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="contactus">contact us</a>
                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="checkout">checkout</a>
                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="allproducts">Products</a>


                    <li class="">
                        <a class="nav-link">
                            {{ Auth::user()->name }}
                        </a>
                        <li><a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>    

    <div class="container">
        @yield('content')
    </div>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>