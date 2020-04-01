<?php

require_once '../utilities/session.php';
require_once '../projectRoot.php';
require_once '../model/databaseModel.php';
require_once '../model/productDBModel.php';
require_once '../model/cartModel.php';

$action = filter_input(INPUT_POST, 'action');
    
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == null) {
        $action = 'viewCheckout';
    }
}

switch($action) {
    case 'viewCheckout':
        $currentCart = getAllProductsInCart();
        // show summary cart
        // show checkout form
        // - complete validation
        // show buttons - review cart, submit order
        include "../views/checkout.php";
        break;
    case 'submitOrder':
        // empty cart
        emptyCart();
        $currentCart = getAllProductsInCart();
        // POST - get customer's first name, email address, and orderID
        // $customerFirstName = filter_input(INPUT_POST, 'customerFirstName');
        // $customerEmailAddress = filter_input(INPUT_POST, 'customerEmailAddress');
        // $productOrderID = filter_input(INPUT_POST, 'productOrderID');

        // thank customer for shopping, show buttons
        include "../views/orderSubmitted.php";
        break;
    default:
        $errorMessage = 'Unknown checkout action "' . $action . '"';
        include '../views/error.php';
        break;
}

?>