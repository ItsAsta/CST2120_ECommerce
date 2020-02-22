<?php
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerce;
$collection = $db->products;

include_once('inc/phpFunc.php');
headerOutput('Home', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Home');
?>

<!-- CATEGORY SELECTION -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <?php
            $trainers = $collection->findOne();

            echo '<a href="products.php"><img class="category-img" src="upload/' . $trainers['fileName'] . '"
                                        width="200px" height="auto"></a>
            <h3 style="margin-top: 15px">VIEW PRODUCTS</h3>';
            ?>

        </div>
    </div>
</div>

<!-- FEATURED PRODUCTS SLIDER -->
<div class="container">
    <div class="row justify-content-center" style="margin-top: 50px">
        <h2 style="font-weight: bolder">RECOMMENDED</h2>
    </div>
    <div class="slider-wrapper">
        <div class="featured-slide">
            <?php
            //            Query over our whole collection
            $trainers = $collection->find();

            //            Iterate over our returned collection
            foreach ($trainers as $key => $trainer) {
//                Output product images
                echo '<div><a href="products.php">
                    <img src="upload/' . $trainer['fileName'] . '" width="150px" height="auto"></a>

            </div>';
            }
            ?>

        </div>
    </div>
</div>

<div class="jumbotron" style="text-align: center; margin-top: 100px">
    <h1>Leading website for the latest trending trainers!</h1>
    <p class="lead">We specialise in providing the latest trending trainers for our customers.</p>
    <hr class="my-">
</div>
</body>
</html>