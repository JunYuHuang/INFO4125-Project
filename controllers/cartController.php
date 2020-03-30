<?php

require '../utilities/session.php';
require '../projectRoot.php';
require '../model/databaseModel.php';
require '../model/productDBModel.php';
require '../model/cartModel.php';

$action = null;
$POSTAction = filter_input(INPUT_POST, 'action');
$GETAction = filter_input(INPUT_GET, 'action');

if ($POSTAction == null || $GETAction == null) {
    $action = 'viewItemsInCart';
}

$errorMessage = null;

switch($action) {
    case 'viewItemsInCart':
        $currentCart = getAllProductsInCart();
        break;
    case 'addItemToCart':
        // get user input
        $productID = filter_input(INPUT_POST, 'productID', FILTER_VALIDATE_INT);
        $productQuantity = filter_input(INPUT_POST, 'productQuantity');

        // add product(s) and visually update cart
        addProductToCart($productID, $productQuantity);
        $currentCart = getAllProductsInCart();
        break;
    case 'updateItemInCart':
        $allProductsInCart = filter_input(INPUT_POST, 'allProductsInCart', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        
        foreach($allProductsInCart as $productID => $productQuantity) {
            if ($productQuantity == 0) {
                deleteProductFromCart($productID);
            } else {
                updateProductInCart($productID, $productQuantity);
            }
        }

        $currentCart = getAllProductsInCart();
        // header('Location: .');
        break;
    case 'deleteItemFromCart':
        $productID = filter_input(INPUT_POST, 'productID', FILTER_VALIDATE_INT);
        deleteProductFromCart($productID);
        $currentCart = getAllProductsInCart();
        // header('Location: ./');
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