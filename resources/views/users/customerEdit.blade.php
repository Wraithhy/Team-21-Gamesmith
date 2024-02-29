@extends('layouts.app')
@section("content")
<head>
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/customerEdit.css') }}">

</head>
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update User</h3>
            <form action="{{ route('customer.update', Auth::user()->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn mt-3 btn-primary">Update User</button>
            </form>
        </div>
    </div>
</div>


@endsection