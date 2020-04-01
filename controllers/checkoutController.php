<?php

require '../utilities/session.php';
require '../projectRoot.php';
require '../model/databaseModel.php';
require '../model/productDBModel.php';
require '../model/cartModel.php';

$action = filter_input(INPUT_POST, 'action');
    
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == null) {
        $action = 'viewCheckout';
    }
}

switch($action) {
    case 'viewCheckout':
        $currentCartItemsArray = getAllProductsInCart();
        // show summary cart
        // show checkout form
        // - complete validation
        // show buttons - review cart, submit order
        include "../views/checkout.php";
        break;
    case 'submitOrder':
        // thank customer for shopping
        // print order summary
        // - 
        // show buttons - back to products, continue shopping
        include "../views/orderReceipt.php";
        break;
    default:
        $errorMessage = 'Unknown checkout action "' . $action . '"';
        include '../views/error.php';
        break;
}

?>