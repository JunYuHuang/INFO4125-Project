<?php

// create cart (if non-existent)
if (!isset($_SESSION['cart']) ) {
    $_SESSION['cart'] = array();
}

// helper integer converter and formatter function
function convertToInteger($number) {
    return round(intval($number), 0);
}

// cart CRUD functions //

function addProductToCart($productID, $productQuantity) {
    // round quantity to 0 decimal places
    // $formattedProductQuantity = round($productQuantity, 0);
    $_SESSION['cart'][$productID] = convertToInteger($productQuantity);
}

function updateProductInCart($productID, $productQuantity) {
    // check if cart has at least 1 product
    if (isset($_SESSION['cart'][$productID])) {
        $_SESSION['cart'][$productID] = convertToInteger($productQuantity);
    }
}

function deleteProductFromCart($productID) {
    // check if cart has at least 1 product
    if (isset($_SESSION['cart'][$productID])) {
        unset($_SESSION['cart'][$productID]);
    }
}

function getAllProductsInCart() {
    $allProductsInCart = array();
    foreach($_SESSION['cart'] as $productID => $productQuantity ) {
        // get product data from database & calculate costs
        $product = getProductByID($productID);
        $productImageFileName = $product['productImageFileName'];
        $productName = $product['productName'];
        $productPrice = $product['productPrice'];
        $totalProductPrice = convertToInteger($productPrice * $productQuantity);

        // store data in an array
        $allProductsInCart[$productID]['productImageFileName'] = $productImageFileName;
        $allProductsInCart[$productID]['productName'] = $productName;
        $allProductsInCart[$productID]['productDescription'] = $product['productDescription'];
        $allProductsInCart[$productID]['productPrice'] = $productPrice;
        $allProductsInCart[$productID]['totalProductPrice'] = $totalProductPrice;
        $allProductsInCart[$productID]['productQuantity'] = $productQuantity;
    }

    return $allProductsInCart;
}

// cart auxilliary functions that depend on the main cart CRUD functions //

function getCountOfTotalProductItemsInCart() {
    $totalProductItemCount = 0;
    $cart = getAllProductsInCart();

    foreach($cart as $cartItem) {
        $totalProductItemCount += $cartItem['productQuantity'];
    }

    return $totalProductItemCount;
}

function getCartSubtotal() {
    $cartSubtotal = 0;
    $cart = getAllProductsInCart();
    foreach($cart as $cartItem) {
        $cartSubtotal += $cartItem['productPrice'] * $cartItem['productQuantity'];
    }
    return $cartSubtotal;
}

function emptyCart() {
    $_SESSION['cart'] = array();
}

function getCorrectQuantifierForCartItems() {
    $cartItemQuantifier = (getCountOfTotalProductItemsInCart() == 1) ? 'item' : 'items';
    return $cartItemQuantifier;
}

?>