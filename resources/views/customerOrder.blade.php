@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="css/customerOrder.css">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
</head>

<h1>Customer Orders</h1>

<div>
    <table>
        <tr>
            <th>id</th>
            <th>product name</th>
            <th>user name</th>
            <th>status</th>
            <th>payment status</th>
            <th>address</th>
            <th>process</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->product_name}}</td>
            <td>{{$order->user_name}}</td>
            <td>{{$order->status}}</td>
            <td>{{$order->payment_method}}</td>
            <td>{{$order->address}}</td>
            <td>
                <form action="{{ route('processOrder', ['orderId' => $order->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <button type="submit">Process Order</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br><br>
</div>
@endsection
