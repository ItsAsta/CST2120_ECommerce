<?php

require __DIR__ . '/../vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerce;
$collection = $db->customers;

include_once('../inc/phpFunc.php');
headerOutput('Home', array("../assets/styles/stylesheet.css", "../assets/styles/bootstrap.css", "../assets/slick/slick.css", "../assets/slick/slick-theme.css"));

// Check and store the size of our collection to increment it. This avoids id duplication, which will keep it unique
$id = $collection->count();

//  Initialise an array to use for a query
$customerData = [
    'customerId' => intval($_POST['userId']),
    'fullName' => $_POST['fullName'],
    'address' => $_POST['address'],
    'postcode' => $_POST['postcode'],
    'mobileNum' => $_POST['mobileNum'],
    'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),
    'password' => filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)
];

// Query the database to find matching customer ids then update their details in the database
$result = $collection->updateOne(
    ['customerId' => intval($_POST['userId'])],
    ['$set' => array(
        'fullName' => $_POST['fullName'],
        'address' => $_POST['address'],
        'postcode' => $_POST['postcode'],
        'mobileNum' => $_POST['mobileNum'],
        'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),
        'password' => filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)
    )]
);

// Check if we successfully managed to update the user
if ($result->getModifiedCount() > 0) {
    echo '<div style="margin: 0 auto; text-align: center"><h4>Updated <i>' . intval($_POST['userId']) . '</i> In The Database</h4></div>';
} else {
    echo '<div style="margin: 0 auto; text-align: center"><h4>Failed to update Customer ID: <i>(' . intval($_POST['userId']) . ')</i> In The Database</h4></div>';
}