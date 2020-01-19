<?php
include_once('inc/phpFunc.php');
headerOutput('Home', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
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
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <img class="category-img" src="assets/resources/men-air-force-1.jpg">
            <h3 style="margin-top: 15px">MEN</h3>
        </div>
        <div class="col-sm-4">
            <img class="category-img" src="assets/resources/woman_react_element_55.jpg">
            <h3 style="margin-top: 15px">WOMEN</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center" style="margin-top: 50px">
        <h2 style="font-weight: bolder">FEATURED</h2>
    </div>
    <div class="slider-wrapper">
        <div class="featured-slide">
            <div><img src="assets/resources/male_airmax_97_white.jpg"></div>
            <div><img src="assets/resources/woman_air_force_1_shadow.jpg"></div>
            <div><img src="assets/resources/male_air_jordan_1_red.jpg"></div>
            <div><img src="assets/resources/woman_air_max_270_react.jpg"></div>
            <div><img src="assets/resources/male_air_max_plus_3_orange.jpg"></div>
            <div><img src="assets/resources/woman_air_force_1_sage_low.jpg"></div>
            <div><img src="assets/resources/male_leBron_7_qS.jpg"></div>
            <div><img src="assets/resources/woman_viale.jpg"></div>
        </div>
    </div>
</div>

<div class="jumbotron" style="text-align: center; margin-top: 100px">
    <h1>Leading website for the latest trending trainers!</h1>
    <p class="lead">We specialise in providing the latest trending trainers for our customers.</p>
    <hr class="my-">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>
</body>
</html>