<?php
require __DIR__ . '/../vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerce;
$collection = $db->customers;
include_once('../inc/phpFunc.php');
headerOutput('Home', array("../assets/styles/stylesheet.css", "../assets/styles/bootstrap.css", "../assets/slick/slick.css", "../assets/slick/slick-theme.css"));

// Check if we got a post request with the name 'register'
if (isset($_POST['register'])) {

    $id = $collection->count();
//    Initialise an array to use for a query
    $registerData = [
        'customerId' => ++$id,
        'fullName' => $_POST['fullName'],
        'address' => $_POST['address'],
        'postcode' => $_POST['postcode'],
        'mobileNum' => $_POST['mobileNum'],
        'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),
        'password' => filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)
    ];

//    Query the database and filter by email to check for any duplicates
    $checkDupl = $collection->findOne(array('email' => $registerData['email']));

//    Check if we found a duplicate in the database
    if (count($checkDupl, COUNT_NORMAL) > 0) {
        echo '<div style="margin: 0 auto; text-align: center"><h4>Email address has already been used!</h4></div>';
    } else {
//        Else store newly registered user in the database
        $registerResult = $collection->insertOne($registerData);
//        Check if we successfully were able to store the new user
        if ($registerResult->getInsertedCount() > 0) {
            header('Location: ../customer_login.php');
        } else {
//            Else throw an error
            echo '<div style="margin: 0 auto; text-align: center"><h4>Cant register account!</h4></div>';
        }
    }
}

// Check if we got a post request with the name 'login'
if (isset($_POST['login'])) {
//    Store email and password in variables
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

//    Query the database and find a document matching same email and password
    $customer = $collection->findOne(array('email' => $email, 'password' => $password));

//    Check if the user input matches what we got in the database
    if ($email == $customer['email'] && $password == $customer['password']) {
//        Start a session for the user with their unique customer id
        session_start();
        $_SESSION["userId"] = $customer['customerId'];
//        Return the user back to the main page
        header('Location: ../index.php');
    } else {
        echo '<div style="margin: 0 auto; text-align: center"><h4>Email or Password is incorrect!</h4></div>';
    }
}
