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

<div class="container-sm">
    <div class="form-wrapper">
        <form>
            <h4>STAFF LOGIN</h4>
            <hr>
            <input class="col" placeholder="Username">
            <input class="col" placeholder="Password">
            <button type="button" class="dark-btn" style="width: 150px">LOGIN</button>
        </form>
    </div>
</div>