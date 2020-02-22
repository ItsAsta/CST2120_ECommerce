<?php
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerce;
$collection = $db->products;

include_once('inc/phpFunc.php');
headerOutput('Men', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Product Page');
?>

<!-- PRODUCT DISPLAY WITH IMAGE SLIDER FOR PREVIEW -->
<div class="product-container">
    <div class="product-left-container">
        <div class="product-slider-wrapper">
            <div class="product-slide">
                <?php
                //                query over our collection looking for a specific product name which we get from the post request
                $trainers = $collection->find(array(
                    'name' => $_POST['productName']
                ));
                //              iterate over the returned collection
                foreach ($trainers as $key => $trainer) {
                    echo '<div><img src="upload/' . $trainer['fileName'] . '" width="400px" height="auto"></div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- PRODUCT DESCRIPTION -->
    <form action="basket.php" method="post">
        <div class="product-right-container">
            <div class="product-description-top">
                <?php
                //                query over our collection looking for a specific product name which we get from the post request
                $trainers = $collection->find(array(
                    'name' => $_POST['productName']
                ));
                //              iterate over the returned collection
                foreach ($trainers as $key => $trainer) {
                    echo '<h4>' . $trainer['name'] . '</h4>';
                    echo '<p>' . $trainer['description'] . '</p>';
                }
                ?>
            </div>
            <div class="product-cart">
                <label> Size
                    <select id="shoeSize" name="shoeSize">
                        <option value="" disabled selected>SELECT SIZE</option>
                        <?php
                        //                query over our collection looking for a specific product name which we get from the post request
                        $trainers = $collection->find(array(
                            'name' => $_POST['productName']
                        ));
                        //              iterate over the returned collection
                        foreach ($trainers as $key => $trainer) {
                            echo '<h4>' . $trainer['name'] . '</h4>';
                            echo '<p>' . $trainer['description'] . '</p>';

                            foreach ($trainer['sizes'] as $keySize => $size) {
                                echo '<option value="' . $size . '">' . $size . '</option>';
                            }

                            echo '</select>
                                    </label>
                                    <label> Quantity
                                        <input id="shoeQuantity" type="NUMBER" min="1" max="10" step="1" value="1" name="quantity">
                                    </label>
                                    <p>£' . $trainer['price'] . '</p>
                                    <input type="hidden" name="productName" value="' . $trainer["productName"] . '">
                                    <input id="type" type="hidden" name="type" value="' . $trainer["type"] . '">
                                    <input id="color" type="hidden" name="color" value="' . $trainer["color"] . '">
                                    <input id="price" type="hidden" name="price" value="' . $trainer["price"] . '">
                                    <input id="fileName" type="hidden" name="fileName" value="' . $trainer["fileName"] . '">';

//                            echo '<button onclick="addToBasket()" type="submit" class="simple-btn">Add to basket</button>';
                            echo '<button type="button" onclick=\'addToBasket("' . $trainer["_id"] . '", "' . $trainer["name"] . '")\'>Add to basket</button>';
                        }
                        ?>
            </div>
        </div>
    </form>
</div>
