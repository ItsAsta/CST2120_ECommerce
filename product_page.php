<?php
include_once('inc/phpFunc.php');
headerOutput('Men', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Product Page');
?>

<!-- PRODUCT DISPLAY WITH IMAGE SLIDER FOR PREVIEW -->
<div class="product-container">
    <div class="product-left-container">
        <div class="product-slider-wrapper">
            <div class="product-slide">
                <div><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="400px" height="auto"></div>
                <div><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="400px" height="auto"></div>
                <div><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="400px" height="auto"></div>
                <div><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="400px" height="auto"></div>
                <div><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="400px" height="auto"></div>
                <div><img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="400px" height="auto"></div>
            </div>
        </div>
    </div>

    <!-- PRODUCT DESCRIPTION -->
    <div class="product-right-container">
        <div class="product-description-top">
            <h4>Nike Air Max 97 Red/Black</h4>
            <p>Nike Air Max 97 Trainers in Black, University Red and Black. Looking as slick and as streamlined as ever,
                the bullet-like Air Max 97 sees its exquisitely stealthy aesthetic interrupted only by subtle contrast
                embroidered Swooshes. Repeat branding.</p>
        </div>
        <div class="product-cart">
            <select>
                <option value="" disabled selected>SELECT SIZE</option>
                <option value="10">10</option>
                <option value="9">9</option>
                <option value="8">8</option>
                <option value="7">7</option>
            </select>
            <label>Quantity: </label>
            <input type="NUMBER" min="1" max="10" step="1" value="1">
            <p>£144.99</p>
            <span><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i></span>
        </div>
    </div>
</div>
