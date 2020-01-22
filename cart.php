<?php
include_once('inc/phpFunc.php');
headerOutput('Men', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
//navigationOutput('Home');
?>
<div class="nav-bar">
    <ul>
        <li id="active"><a href="index.php">HOME</a></li>
        <li><a href="index.php">Men</a></li>
        <li><a href="index.php">Women</a></li>
        <div class="nav-cart">
            <li><a href="index.php"><i class="fas fa-shopping-cart">2</i></a></li>
            <li><a href="index.php"><i class="fas fa-sign-in-alt"></i></i></a></li>
        </div>
    </ul>
    <div class="promotion-banner-container">
        <div class="row">
            <div class="promotion-col">
                <span>SALE ON FEATURED TRAINERS</span>
                <p>20% off on all featured trainers</p>
            </div>
            <div class="promotion-col">
                <span>FREE DELIVERY</span>
                <p>Free delivery on orders over £30</p>
            </div>
            <div class="promotion-col">
                <span>FREE RETURNS</span>
                <p>Return unwanted trainers within 30 days</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="cart-product-container">
        <table style="width: 100%">
            <thead class="table-header">
            <tr>
                <th class="col-12" scope="col"><span>Item</span></th>
                <th class="col-11" scope="col"><span>Price</span></th>
                <th class="col-10" scope="col"><span>Quantity</span></th>
                <th class="col" scope="col"><span>Total</span></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="col">
                    <div class="product-photo">
                        <img src="https://i8.amplience.net/i/office/3870013693_ld1.jpg?$newhighres$" width="187"
                             height="154">
                    </div>
                    <div class="product-details">
                        <p>Mens Nikeit</p>
                        <strong>Selected Size:</strong><span>9</span>
                    </div>
                <td class="price-qty-total col">
                    <span><strong>£144.99</strong</span>
                </td>
                <td class="price-qty-total col">
                    <input type="number" min="1" max="10" value="1">
                </td>
                <td class="price-qty-total col">
                    <span><strong>1</strong</span>
                </td>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="cart-summary-container">
        <div class="cart-summary-wrapper">
            <h4>SUMMARY</h4>

            <div class="row">
                <div class="col-sm-6">
                    <p>Total Quantity: </p>
                </div>
                <div class="col-sm-6 summary-right-values">
                    <span>6</span>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <p>Delivery & Handling</p>
                </div>
                <div class="col-sm-6 summary-right-values">
                    <span>£0.00</span>
                </div>
            </div>
            <div class="row total-price">
                <div class="col-sm-6">
                    <p style="font-weight: bold">Total: </p>
                </div>
                <div class="col-sm-6 summary-right-values">
                    <span style="font-weight: bold">£144.99</span>
                </div>
            </div>

            <div class="checkout-btns">
                <button type="button">CHECKOUT</button>
            </div>
        </div>
    </div>
</div>