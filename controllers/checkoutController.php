<?php

require_once '../utilities/session.php';
require_once '../projectRoot.php';
require_once '../model/cartModel.php';
require_once '../model/databaseModel.php';
require_once '../model/productDBModel.php';
require_once '../model/productOrderDBModel.php';
require_once '../model/productOrderItemDBModel.php';

$action = filter_input(INPUT_POST, 'action');
    
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == null) {
        $action = 'viewCheckout';
    }
}

switch($action) {
    case 'viewCheckout':
        // redirect to the products page if cart is empty
        $isEmptyCart = ((getCountOfTotalProductItemsInCart() <= 0 ) ? true : false);

        if ($isEmptyCart) {
            header("Location: ../products");
            die();
        } else {
            $currentCart = getAllProductsInCart();
            include "../views/checkout.php";
            // include "../views/checkoutTEST.php";
        }

        break;
    case 'submitOrder':
        // redirect to the products page if cart is empty
        $isEmptyCart = ((getCountOfTotalProductItemsInCart() <= 0 ) ? true : false);

        if ($isEmptyCart) {
            header("Location: ../products");
            die();
        } else {
            // POST
            try {
                // get customer's first name, email address, and orderID
                $customerFirstName = filter_input(INPUT_POST, 'customerFirstName', FILTER_SANITIZE_STRING);
                $customerLastName = filter_input(INPUT_POST, 'customerLastName', FILTER_SANITIZE_STRING);
                $customerEmailAddress = filter_input(INPUT_POST, 'customerEmailAddress', FILTER_VALIDATE_EMAIL);
                $customerPhoneNumber = filter_input(INPUT_POST, 'customerPhoneNumber', FILTER_SANITIZE_STRING);
                // get customer's address info
                $addressStreet = filter_input(INPUT_POST, 'addressStreet', FILTER_SANITIZE_STRING);
                $addressUnit = filter_input(INPUT_POST, 'addressUnit', FILTER_SANITIZE_STRING);
                $addressCity = filter_input(INPUT_POST, 'addressCity', FILTER_SANITIZE_STRING);
                $addressProvince = filter_input(INPUT_POST, 'addressProvince', FILTER_SANITIZE_STRING);
                $addressPostalCode = filter_input(INPUT_POST, 'addressPostalCode', FILTER_SANITIZE_STRING);
                $addressCountry = filter_input(INPUT_POST, 'addressCountry', FILTER_SANITIZE_STRING);
                // get customer's credit card info
                $creditCardProvider = filter_input(INPUT_POST, 'creditCardProvider', FILTER_SANITIZE_STRING);
                $creditCardNumber = filter_input(INPUT_POST, 'creditCardNumber', FILTER_SANITIZE_STRING);
                $creditCardName = filter_input(INPUT_POST, 'creditCardName', FILTER_SANITIZE_STRING);
                $creditCardExpiryDate = filter_input(INPUT_POST, 'creditCardExpiryDate', FILTER_SANITIZE_STRING);
                $creditCardSecurityCode = filter_input(INPUT_POST, 'creditCardSecurityCode', FILTER_SANITIZE_STRING);
                // get all items currently in customer's cart
                $currentCart = getAllProductsInCart();
                // insert a new record of the product order
                $productOrderID = addProductOrder($customerFirstName, $customerLastName, $customerEmailAddress, $customerPhoneNumber, $addressStreet, $addressUnit, $addressCity, $addressProvince, $addressPostalCode, $addressCountry, $creditCardProvider, $creditCardNumber, $creditCardName, $creditCardExpiryDate, $creditCardSecurityCode);
                // insert a new record of the requested quantity of each product in the customer's order
                foreach($currentCart as $productID => $productItem) {
                    $productQuantity = $productItem['productQuantity'];
                    addProductOrderItem($productOrderID, $productID, $productQuantity);
                }
                // empty the cart and show order submitted page
                emptyCart();
                include "../views/orderSubmitted.php";
            } catch(Exception $e) {
                // show error page if something goes wrong
                $errorMessage = 'Something went wrong with submitting your order. Please try again.' . $e;
                include '../views/error.php';
            }
        }
        break;
    default:
        $errorMessage = 'Unknown checkout action "' . $action . '"';
        include '../views/error.php';
        break;
}

?>