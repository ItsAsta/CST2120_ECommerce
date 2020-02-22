<?php
include_once('inc/phpFunc.php');
headerOutput('Basket', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Basket');
?>
<!-- Javascript will be used to fill this section up -->
<div class="container-fluid">
    <div id="basketDiv">
    </div>

    <script type="text/javascript">
        loadBasket();
    </script>
</div>