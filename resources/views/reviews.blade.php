@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="css/reviews.css">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
</head>

<h1>
    Reviews
</h1>

<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Contact preference </th>
                <th>Message</th>
            </tr>
            @foreach($reviews as $review )
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->name }}</td>
                    <td>{{ $review->phone}}</td>
                    <td>{{ $review->email }}</td>
                    <td>{{ $review->contactPref}}</td>
                    <td>{{ $review->message}}</td>
                </tr>
            @endforeach
        </table>


        <h1>products</h1>
        <table>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>User Name</th>
                <th>Message</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$product->product_id}}</td>
                    <td>{{ $product->product_name}}</td>
                    <td>{{ $product->user_name}}</td>
                    <td>{{ $product->product_message}}</td>


                </tr>
            @endforeach
        </table>

@endsection