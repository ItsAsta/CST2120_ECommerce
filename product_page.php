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

<div class="product-container">
    <div class="product-left-container">
        <div class="product-slider-wrapper">
            <div class="product-slide">
                <div><img src="assets/resources/test.png"></div>
                <div><img src="assets/resources/test.png"></div>
                <div><img src="assets/resources/test.png"></div>
                <div><img src="assets/resources/test.png"></div>
                <div><img src="assets/resources/test.png"></div>
                <div><img src="assets/resources/test.png"></div>
                <div><img src="assets/resources/test.png"></div>
                <div><img src="assets/resources/test.png"></div>
                <div><img src="assets/resources/test.png"></div>
            </div>
        </div>
    </div>

    <div class="product-right-container">
        <div class="product-description-top">
            <h4>Nike Air Max 97</h4>
            <p>The Nike Air Max 97 shook up the running world with its revolutionary full-length Max Air unit and
                Metallic Silver silhouette. The Nike Air Max 97 G celebrates the original design, adding a grippy
                outsole that's made for the course.</p>
        </div>
        <div class="product-cart">
            <input type="NUMBER" min="1" max="10" step="1" value="1">
            <p>£144.99</p>
            <span><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i></span>
        </div>
    </div>
</div>
