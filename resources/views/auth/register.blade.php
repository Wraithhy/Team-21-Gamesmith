@extends('layouts.app') 
@section('content')
<head>
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
</head>
<body>
    <link rel="stylesheet" href="css/logReg.css">
    <div class="containerLogin">
        <div class="contact-us"> 
            <div class="contact-left">
            <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                    <a href="/" class="LoginIMG">
                <img class="LoginIMG" src="images/gamesmith.png" alt="GameSmith Logo" />
            </a>
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
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
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                    <div class="logbutton-container">
                <a href= "register"> <button class="regbtn">Register</button> </a>
</div>
                    
                </form>
            </div>


            </div>
            
            <div class="contact-right">
                <h3>Account Creation</h3>
                <h4>Having issues? </h4>
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

</body>
@endsection