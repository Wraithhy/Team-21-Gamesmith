@extends('layouts.app')
  
@section('content')
<head>
    <link rel="stylesheet" href="css/cartlist.css">
</head>
<body>
<table id="cart">
<thead>
    <tr>
        <th style="width:50%">Product</th>
        <th style="width:10%">Price</th>
        <th style="width:8%">Quantity</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%">Action</th>
    </tr>
</thead>
<tbody>
    @php $total = 0 @endphp
    @forelse(session('cart', []) as $id => $details)
        @php $total += $details['price'] * $details['quantity'] @endphp
        <tr data-id="{{ $id }}">
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                    </div>
                </div>
            </td>
            <td data-th="Price">${{ $details['price'] }}</td>
            <td data-th="Quantity">
                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" data-id="{{ $id }}">
            </td>
            <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
            <td data-th="Action">
                <form action="{{ route('remove.from.cart', ['id' => $id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove from Cart</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Your cart is empty.</td>
        </tr>
    @endforelse
</tbody>
<tfoot>
    <tr>
        <td colspan="5" class="text-right"><h3><strong>Total £{{ $total }}</strong></h3></td>
    </tr>
    <tr>
        <td colspan="5" class="text-right">
            <a href="ordernow" class="btn btn-warning"><i class="fa fa-angle-left"></i>Checkout </a>
        </td>
    </tr>
</tfoot>
</table>
</body>
@endsection
