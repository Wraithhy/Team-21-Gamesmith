@extends('layouts.app')

@section("content")
<head>
    <link rel="stylesheet" href="css/orderNow.css">
</head>
<div class="custom-product">
    <h1>Checkout</h1>
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>£ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>£ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>£ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>£ {{$total + 10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                @method('post')
                <div class="form">
                <input type="text" placeholder="Address" class="form-control" id="address" name="address" value="{{ Auth::user()->address }}" required>
                </div>
                <div class="payment">
                    <label for="pwd">Payment Method</label> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>Online Payment</span> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>
                    <button type="submit" class="submit-btn">Order Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
