
@extends('layouts.app')
@section('content')
<?php 
use App\Http\Controllers\newProductController;
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">

    
</head>

<body>
    <h1>Welcome {{ Auth::user()->name }}</h1>
    <h1>Products</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        <div class="create">
            <a href="{{ route('product.create') }}">Create a Product</a>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
@endsection