<?php
include_once('inc/phpFunc.php');
headerOutput('Account', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Account');
if (!isset($_SESSION['userId'])) {
    header('Location: customer_login.php');
}
?>
<!-- A form used to send post -->
<form action="update_account.php" method="post">
    <div class="container-fluid justify-content-center">
        <!--    Hide the user id in a hidden input which will be used for our post request    -->
        <?php
        echo '<input type="hidden" name="userId" value="' . $_SESSION['userId'] . '">';
        ?>
        <button type="submit">Update Account</button>
    </div>
</form>
