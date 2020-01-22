<?php
include_once('inc/phpFunc.php');
headerOutput('Home', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Home');
?>

<!-- CATEGORY SELECTION -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <a href="products.php"><img class="category-img" src="assets/resources/male_nike_airmax_97_red_black.jpg" width="200px" height="auto"></a>
            <h3 style="margin-top: 15px">MEN</h3>
        </div>
        <div class="col-sm-4">
            <img class="category-img" src="assets/resources/male_nike_airmax_97_red_black.jpg" width="200px" height="auto">
            <h3 style="margin-top: 15px">WOMEN</h3>
        </div>
    </div>
</div>

<!-- FEATURED PRODUCTS SLIDER -->
<div class="container">
    <div class="row justify-content-center" style="margin-top: 50px">
        <h2 style="font-weight: bolder">FEATURED</h2>
    </div>
    <div class="slider-wrapper">
        <div class="featured-slide">
            <div><a href="product_page.php"><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px" height="auto"></a></div>
            <div><a href="product_page.php"><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px" height="auto"></a></div>
            <div><a href="product_page.php"><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px" height="auto"></a></div>
            <div><a href="product_page.php"><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px" height="auto"></a></div>
            <div><a href="product_page.php"><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px" height="auto"></a></div>
            <div><a href="product_page.php"><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px" height="auto"></a></div>
            <div><a href="product_page.php"><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px" height="auto"></a></div>
            <div><a href="product_page.php"><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px" height="auto"></a></div>
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