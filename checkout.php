<?php
include_once('inc/phpFunc.php');
headerOutput('Men', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Checkout');
?>

<!--  CUSTOMER DETAILS & PAYMENT DETAILS FOR PAYMENT/CHECKOUT  -->
<form class="checkout-form">
    <div class="container-fluid center-form">
        <div class="customer-info-container">
            <h4>CUSTOMER DETAILS</h4>
            <div class="row">
                <input class="checkout-inputs col" type="text" autocomplete="given-name" required aria-invalid="true"
                       aria-label="Please enter a first name!" placeholder="First name">
                <input class="checkout-inputs col" type="text" autocomplete="family-name" required aria-invalid="true"
                       aria-label="Please enter a last name!" placeholder="Last name">
            </div>
            <div class="row">
                <input class="checkout-inputs col" type="text" autocomplete="street-address" required
                       aria-invalid="true" aria-label="Please enter an address!" placeholder="Address">
            </div>
            <div class="row">
                <input class="checkout-inputs col" type="text" autocomplete="address-level2" required
                       aria-invalid="true" aria-label="Please enter a city!" placeholder="City">
                <input class="checkout-inputs col" type="text" autocomplete="postal-code" required aria-invalid="true"
                       aria-label="Please enter a postcode!" placeholder="Post Code">
                <input class="checkout-inputs col" type="text" placeholder="Country" required>
            </div>
            <div class="row">
                <input class="checkout-inputs col" type="email" autocomplete="email" required aria-invalid="true"
                       aria-label="Please enter a valid email address!" placeholder="Email">
                <input class="checkout-inputs col" type="tel" autocomplete="tel" required maxlength="18"
                       aria-invalid="true" aria-label="This field is required!" placeholder="Phone Number">
            </div>
            <hr>
            <h4>PAYMENT DETAILS</h4>
            <div class="row">
                <input class="checkout-inputs col-7" type="tel" maxlength="20" onautocomplete="off" placeholder="Card Number">
                <input class="checkout-inputs col" type="tel" maxlength="5" placeholder="MM/YY">
                <input class="checkout-inputs col" type="tel" autocomplete="off" maxlength="4" placeholder="XXX(X)">
            </div>


            <div class="row" style="float: right">
                <button class="dark-btn" type="button">PLACE ORDER</button>
            </div>
        </div>
    </div>
</form>

<!--  CHECKOUT SUMMARY  -->
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
    </div>
</div>