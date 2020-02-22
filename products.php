<?php
include_once('inc/phpFunc.php');
headerOutput('Products', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Products');
?>

<div class="container">
    <!--  PRODUCTS DISPLAY 3X ROWS  -->

    <?php
    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->ecommerce;
    $collection = $db->products;

    //    Iterate over our whole collection
    $trainers = $collection->find();

    echo '<div class="row">';
    $i = 0;
    //              iterate over the returned collection
    foreach ($trainers as $key => $trainer) {
        echo '<form action="product_page.php" method="post">
        <div class="product-col">
            <img src="upload/' . $trainer["fileName"] . '" width="250px" height="auto">
            <a>' . $trainer["name"] . '</a>
            <p>£' . $trainer["price"] . '</p>
            <input type="hidden" name="productName" value="' . $trainer["name"] . '">
            <input type="submit" value="View">
        </div></form>';

        $i++;
//        Make a new row for every 3 iterations so only 3 products are display on a single row
        if ($i % 3 == 0 && $i != count($trainers)) {
            echo '<div class="row"></div>';
        }
    }

    echo '</div>';
    ?>
</div>

