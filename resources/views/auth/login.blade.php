@extends('layouts.app')

@section('content')
<head>
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
</head>
    <link rel="stylesheet" href="css/logstyle.css">
    <div class="containerLogin">
        <div class="contact-us"> 
            <div class="contact-left">
            <div class="card-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-3 row">

                    <a href="/" class="LoginIMG">
                <img class="LoginIMG" src="images/gamesmith.png" alt="GameSmith Logo" />
            </a>
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="logbutton-container">
                        <input type="submit" class="logbtn" value="Login">
                       
                </form>
                </div>
                <div class="logbutton-container">
                <a href= "register"> <button class="regbtn">Register</button> </a>
</div>
            </div>
                
            </div>
            
            <div class="contact-right">
                <h3>Having issues?</h3>
                <h4>Get in Touch: </h4>

                <table>
                    <tr>
                        <td>&#128383 Phone:</td>
                        <td>0800 03 1337</td>
                    </tr>
                    <tr>
                        <td>&#128231 Email:</td>
                        <td><a href="mailto:220160340@aston.ac.uk">220160340@aston.ac.uk</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection


<!--<link rel="stylesheet" href="css/temp.css">
<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
-->