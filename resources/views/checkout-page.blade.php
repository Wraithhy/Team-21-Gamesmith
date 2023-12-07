@include('navbar')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet"  href="css\checkout_style.css" />
        <title>Checkout Page</title>
    </head>
    <body>
        <div class="product-container">
            <div class="left-half">
                <div class="cart">
                    <header>Shopping Cart</header>
                    <div class="products">
                        <div class="product-box">
                            <div class="product-columns">
                                <div class="column-1">
                                    <img class= "img-monitor" src="images/monitor.jpg" alt="">
                                </div>
                                <div class="column-2">
                                    <div class="product-details">
                                        <div class="name">
                                        Product Name
                                        </div>
                                        <div class="p1">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Est placerat in egestas erat imperdiet sed euismod nisi porta.
                                        </div>
                                    </div>
                                </div>
                                <div class="column-3">
                                    <div class="h2">
                                        Price
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                        <div class="product-columns">
                                <div class="column-1">
                                    <img class= "img-monitor" src="images/monitor.jpg" alt="">
                                </div>
                                <div class="column-2">
                                    <div class="product-details">
                                        <div class="name">
                                        Product Name
                                        </div>
                                        <div class="p1">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Est placerat in egestas erat imperdiet sed euismod nisi porta.
                                        </div>
                                    </div>
                                </div>
                                <div class="column-3">
                                    <div class="h2">
                                        Price
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                        <div class="product-columns">
                                <div class="column-1">
                                    <img class= "img-monitor" src="images/monitor.jpg" alt="">
                                </div>
                                <div class="column-2">
                                    <div class="product-details">
                                        <div class="name">
                                        Product Name
                                        </div>
                                        <div class="p1">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Est placerat in egestas erat imperdiet sed euismod nisi porta.
                                        </div>
                                    </div>
                                </div>
                                <div class="column-3">
                                    <div class="h2">
                                        Price
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-half">
                <div class="payment">
                    <header>Payment Details</header>
                    <div class="payment-details">
                        <div class="row-1">
                            Card Number: <input type="text" id="card" 
                            placeholder="0123 4567 8910 1112">
                            CVC: <input type="text" id="cvc" 
                            placeholder="123">
                        </div>
                        <div class="row-2">
                            Card Holder Name: <input type="text" id="name" 
                            placeholder="John Smith">
                        </div>
                        <div class="row-3">
                            Expiration Date: <input type="date" id="card" 
                            placeholder="01">
                        </div>
                    </div>
                </div>
                <div class="total">
                    <div class="total-row-1">
                    <header>Total Cost</header>
                    </div>
                    <div class="total-row-2">
                        <div class="p2">
                        Amount Due:         £
                        </div>
                    </div>
                    <div class="total-row-3">
                        <button>PAY NOW
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>