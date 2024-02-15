  @extends('layouts.app')
  @section("content")
  <div class="custom-product">
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

  <style>
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

      /* CSS styles for the plus and minus icons */
      

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
  </style>



  <script>
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
              var quantity = parseInt(inputField.val());
              var price = parseFloat(inputField.data("price"));
              quantity += increment;
              if (quantity < 1) {
                  quantity = 1;
              }
              inputField.val(quantity);

              var total = price * quantity;
              button.closest(".row").find(".total-price").text("$ " + total.toFixed(2)); // Update total price

              // You can update the total cart price here if needed
          }
      });
  </script>
  @endsection