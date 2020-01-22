<?php
include_once('inc/phpFunc.php');
headerOutput('Men', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Cart');
?>

<div class="container-fluid">

    <!--  PRODUCTS ADDED TO THE CART  -->
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
                        <img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px" height="auto">
                    </div>
                    <div class="product-details">
                        <p><strong>Mens Nike Air Max 97 Red/Black</strong></p>
                        <strong>Selected Size: </strong><span>9</span>
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
            </tr>
            </tbody>
        </table>
    </div>

    <!--  PRODUCTS ADDED TO THE CART SUMMARY  -->

    <div class="cart-summary-container">
        <div class="cart-summary-wrapper">
            <h4>SUMMARY</h4>

            <div class="row">
                <div class="col-sm-6">
                    <p>Total Quantity: </p>
                </div>
                <div class="col-sm-6 summary-right-values">
                    <span>1</span>
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
                <a href="checkout.php">
                    <button type="button">CHECKOUT</button>
                </a>
            </div>
        </div>
    </div>
</div>