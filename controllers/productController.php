<?php

require_once '../projectRoot.php';
require_once '../model/databaseModel.php';
require_once '../model/productDBModel.php';

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = 'viewAllProducts';
}

switch($action) {
    // display products page
    case 'viewAllProducts':
        $productsArray = getAllProducts();
        include("../views/products.php");
        break;
    // display a selected product's details
    case 'viewProduct':
        // return product detail page depending on if the productID was found or not
        $productID = filter_input(INPUT_GET, 'productID', FILTER_VALIDATE_INT);
        if ($productID) {
            // get the product info
            $product = getProductByID($productID);
            if ($product == null || $product == "") {
                $errorMessage = 'Product was not found.';
                include "../views/error.php";
            } else {
                // test
                $productImageURL = '/INFO4125-Project/assets/images/products/' . $product['productImageFileName'];
                $productName = $product['productName'];
                $productPrice = $product['productPrice'];
                $productDescription = $product['productDescription'];
                // display the product detail page
                include "../views/productDetail.php";
            }
        } else {
            // display error page
            $errorMessage = 'The product was not found.';
            include "../views/error.php";
        }
        break;
    default:
        $errorMessage = 'Unknown product action: ' . $action;
        include '../views/error.php';
        break;
}

?>