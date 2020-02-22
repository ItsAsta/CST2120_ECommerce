<?php
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerce;
$collection = $db->customers;

$customer = $collection->findOne([
    'customerId' => intval($_POST['userId'])
]);

include_once('inc/phpFunc.php');
headerOutput('Account Update', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('');
?>

<div class="container-fluid justify-content-center">
    <form action="mongoDbHandlers/update_account_h.php" method="post">
        <?php
        echo '<h4 style="margin-left: 25px">ACCOUNT UPDATING</h4>';
        echo '<label style="margin-left: 25px">Full Name: <input style="display: block" type="text" name="fullName" value="' . $customer['fullName'] . '"></label>';
        echo '<label style="margin-left: 25px">Address: <input style="display: block" type="text" name="address" value="' . $customer['address'] . '"></label>';
        echo '<label style="margin-left: 25px">Postcode: <input style="display: block" type="text" name="postcode" value="' . $customer['postcode'] . '"></label>';
        echo '<label style="margin-left: 25px">Mobile Number: <input style="display: block" type="tel" name="mobileNum" value="' . $customer['mobileNum'] . '"></label>';
        echo '<label style="margin-left: 25px">Email: <input style="display: block" type="email" name="email" value="' . $customer['email'] . '"></label>';
        echo '<label style="margin-left: 25px">Password: <input style="display: block" name="password" type="password" value="' . $customer['password'] . '"></label>';
        echo '<input type="hidden" name="userId" value="' . $customer['customerId'] . '">';
        echo '<button style="margin-left: 25px" type="submit" style="margin-top: 15px">Update Account</button>';
        ?>

    </form>
</div>
