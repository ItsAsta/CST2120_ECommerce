<?php
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerce;
$collection = $db->orders;

include_once('inc/phpFunc.php');
headerOutput('Checkout', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Checkout');

?>

<!--  CUSTOMER DETAILS & PAYMENT DETAILS FOR PAYMENT/CHECKOUT  -->
<form class="checkout-form" action="checkout_confirmation.php" method="post">
    <div class="container-fluid center-form">
        <div class="customer-info-container">
            <h4>CUSTOMER DETAILS</h4>
            <div class="row">
                <input class="checkout-inputs col" type="text" name="name" autocomplete="given-name" required
                       aria-invalid="true"
                       aria-label="Please enter a first name!" placeholder="Full Name">
            </div>
            <div class="row">
                <input class="checkout-inputs col" type="text" name="address" autocomplete="street-address" required
                       aria-invalid="true" aria-label="Please enter an address!" placeholder="Address">
            </div>
            <div class="row">
                <input class="checkout-inputs col" type="text" name="postcode" autocomplete="postal-code" required
                       aria-invalid="true"
                       aria-label="Please enter a postcode!" placeholder="Post Code">
            </div>
            <div class="row">
                <input class="checkout-inputs col" type="email" name="email" autocomplete="email" required
                       aria-invalid="true"
                       aria-label="Please enter a valid email address!" placeholder="Email">
                <input class="checkout-inputs col" type="tel" name="mobileNum" autocomplete="tel" required
                       maxlength="18"
                       aria-invalid="true" aria-label="This field is required!" placeholder="Phone Number">
            </div>
            <div class="row" style="float: right">
                <button class="dark-btn" type="submit">PLACE ORDER</button>
            </div>
        </div>
    </div>
</form>

<!--  CHECKOUT SUMMARY  -->
<div class="cart-summary-container">
    <div class="cart-summary-wrapper">
        <h4>SUMMARY</h4>
        <div class="row">
            <div class="col-sm-6" style="border-right: 1px solid white">
                <?php
                //                Store post request in a variable
                $products = $_POST['products'];
                //                Make post into an array to iterate through
                $productArray = json_decode($products, true);
                $totalQuantity = null;
                $totalPrice = null;
                //              Iterate over the array to get the elements
                foreach ($productArray as $key => $product) {
//                    Add quantity together
                    $totalQuantity += $product['quantity'];
//                    Add the price together to get total price
                    $totalPrice += $product['price'] * $product['quantity'];
//                  Display the product name, size and quantity
                    echo '<p><b>' . $product['name'] . '</b></p>';
                    echo '<span>Size: ' . $product['size'] . ' </span>';
                    echo '<p>Quantity: ' . $product['quantity'] . ' </p>';
                    echo '<hr style="border-color: white">';
                }

                //                Display the total quantity of our items
                echo '</div>
                    <div class="col-sm-6 summary-right-values">
                    <span><b>Total Quantity: </b>' . $totalQuantity . '</span>
                    </div>';
                ?>
            </div>
            <div class="row total-price">
                <div class="col-sm-6">
                    <p style="font-weight: bold">Total: </p>
                </div>
                <div class="col-sm-6 summary-right-values">
                    <?php
                    //                    Output total price
                    echo '<span style="font-weight: bold">£' . $totalPrice . '</span>'
                    ?>
                </div>
            </div>
        </div>
    </div>