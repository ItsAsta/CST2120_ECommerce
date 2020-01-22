<?php
include_once('inc/phpFunc.php');
headerOutput('Men', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Staff Login');
?>
<!-- STAFF LOGIN -->
<div class="container-sm">
    <div class="form-wrapper">
        <form>
            <h4>STAFF LOGIN</h4>
            <hr>
            <input class="col" placeholder="Username">
            <input class="col" placeholder="Password">
            <a href="staffPanel.php"><button type="button" class="dark-btn" style="width: 150px">LOGIN</button></a>
        </form>
    </div>
</div>