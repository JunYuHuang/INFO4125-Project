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
        $action = 'viewItemsInCart';
    }
}

$errorMessage = null;

switch($action) {
    case 'viewItemsInCart':
        $currentCart = getAllProductsInCart();
        break;
    case 'addItemToCart':
        // get user input
        $productID = filter_input(INPUT_POST, 'productID', FILTER_VALIDATE_INT);
        $productQuantity = filter_input(INPUT_POST, 'productQuantity', FILTER_VALIDATE_INT);

        // add product(s) and visually update cart
        addProductToCart($productID, $productQuantity);
        $currentCart = getAllProductsInCart();
        break;
    case 'updateItemsInCart':
        $currentCartItems = filter_input(INPUT_POST, 'currentCartItems', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        
        foreach($currentCartItems as $productID => $productQuantity) {
            if ($productQuantity == 0) {
                deleteProductFromCart($productID);
            } else {
                updateProductInCart($productID, $productQuantity);
            }
        }

        $currentCart = getAllProductsInCart();
        header('Location: .');
        break;
    case 'deleteItemFromCart':
        $productID = filter_input(INPUT_POST, 'productID', FILTER_VALIDATE_INT);
        deleteProductFromCart($productID);

        // refresh cart
        $currentCart = getAllProductsInCart();
        break;
    case 'deleteAllItemsFromCart':
        emptyCart();
        break;
    default:
        $errorMessage = 'Unknown cart action "' . $action . '"';
        include '../views/error.php';
        break;
}

// don't show cart page if there is an error
if (!$errorMessage) {
    include "../views/cart.php";
} 

?>