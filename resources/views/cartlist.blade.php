
<!--<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($products as $item)
                <div class="row searched-item cart-list-devider" style="padding: 20px;">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="images/{{$item->id}}.png">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="quantity">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn1 minus" type="button" data-item-id="{{ $item->cart_id }}">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </span>
                                <input type="text" class="form-control quantity-input" value="{{ $item->quantity }}" readonly>
                                <span class="input-group-btn">
                                    <button class="btn1 plus" type="button" data-item-id="{{ $item->cart_id }}">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <p class="item-price">£ {{$item->price}}</p>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
    </div>
</div>
</div>-->

<!--<style>
    /* CSS styles for the buttons and input group */
    .btn1 {
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn1:hover {
        background-color: #0056b3;
    }

    /* CSS for input field */
    .quantity-input {
        text-align: center;
        width: 50px;
        height: 30px;
    }

    /* Style for the input group container */
    .input-group {
        width: 130px; /* Adjust the width as needed */
        margin: 0 auto; /* Center the input group */
    }
</style>-->

<!--<script>
    // JavaScript to handle quantity increment and decrement
    $(document).ready(function () {
        $(".plus").click(function () {
            updateQuantityAndTotalPrice($(this), 1);
        });

        $(".minus").click(function () {
            updateQuantityAndTotalPrice($(this), -1);
        });

        // Function to update quantity and total price
        function updateQuantityAndTotalPrice(button, increment) {
            var itemId = button.data("item-id");
            var inputField = button.closest(".quantity").find(".quantity-input");
            var quantity = parseInt(inputField.val()) + increment;
            if (quantity < 1) {
                quantity = 1;
            }
            inputField.val(quantity);

            // You can perform an AJAX request here to update the quantity in the backend
        }
    });
</script>-->


@extends('layouts.app')
  
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <table id="cart">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                            <div class="col-sm-9">
                                <img src="images/{{$item->id}}.png" alt="">
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" data-id="{{ $id }}">
                    </td>

                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td>
                        <form action="{{ route('remove.from.cart', ['id' => $item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove from Cart</button>
                    </form></td>

                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="ordernow" class="btn btn-warning"><i class="fa fa-angle-left"></i>Checkout </a>
            </td>
        </tr>
    </tfoot>
</table>


@endsection

