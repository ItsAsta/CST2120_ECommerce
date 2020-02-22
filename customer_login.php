<?php

include_once('inc/phpFunc.php');
headerOutput('Login', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Login');
?>
<!-- STAFF LOGIN -->
<div class="container-sm">
    <div class="form-wrapper">
        <div id="customerLoginForm" style="display: inline-block">
            <form method="post" action="mongoDbHandlers/customer_login_h.php">
                <h4>CUSTOMER LOGIN</h4>
                <hr>
                <input type="email" name="email" class="col" placeholder="Email">
                <input type="password" name="password" class="col" placeholder="Password">
                <a id="showRegisterForm" style="display: block" class="aHover">Not registered? <b>Register!</b></a>
                <button name="login" type="submit" class="dark-btn" style="width: 150px">LOGIN</button>
            </form>
        </div>

        <div id="customerRegisterForm" style="display: inline-block">
            <form method="post" action="mongoDbHandlers/customer_login_h.php">
                <h4>CUSTOMER REGISTER</h4>
                <hr>
                <div class="col" style="display: block">
                    <input type="text" id="registerFullName" name="fullName" class="col"
                           placeholder="Full Name">
                    <input type="text" id="registerFLAddress" name="address" class="col"
                           placeholder="First line of address">
                    <input type="text" id="registerPostCode" name="postcode" class="col" placeholder="Postcode">
                    <input type="tel" id="registerMobileNum" name="mobileNum" class="col"
                           placeholder="Mobile Number">
                </div>
                <div class="col" style="display: block">
                    <input type="email" id="registerEmail" name="email" class="col" placeholder="Email">
                    <input type="password" id="registerPasswod" name="password" class="col"
                           placeholder="Password">
                    <input type="password" id="registerConfirmPassword" name="password" class="col"
                           placeholder="Confirm Password">
                </div>
                <a id="showLoginForm" style="display: block" class="aHover">Already registered? <b>Login!</b></a>
                <button name="register" type="submit" class="dark-btn" style="width: 150px">Register</button>
            </form>
        </div>
    </div>
</div>