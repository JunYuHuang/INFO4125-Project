<?php
require '../utilities/session.php';
require '../projectRoot.php';
require '../model/database.php';
require '../model/product_db.php';

$action = null;
$POSTAction = filter_input(INPUT_POST, 'action');
$GETAction = filter_input(INPUT_GET, 'action');

if ($POSTAction == null || $GETAction == null) {
    $action = 'viewCartItems';
}

switch($action) {
    // view current cart
    case 'viewCartItems':
        // view all cart items
        break;
    // display a selected product's details
    case 'addItemToCard':
        // gay
        break;
    case 'updateCardItems':
        // gay
        break;
    default:
        $errorMessage = 'Unknown cart action: ' . $action;
        include '../views/error.php';
        break;
}


include("../views/cart.php");

?>