<?php

function addProductOrderItem($productOrderID, $productID, $productOrderItemQuantity) {
    global $db;
    $query = 
        'INSERT INTO ProductOrderItem (productOrderID, productID, productOrderItemQuantity)
        VALUES (:productOrderID, :productID, :productOrderItemQuantity)';
    $preparedStatement = $db->prepare($query);
    $preparedStatement->bindValue(':productOrderID', $productOrderID);
    $preparedStatement->bindValue(':productID', $productID);
    $preparedStatement->bindValue(':productOrderItemQuantity', $productOrderItemQuantity);
    $preparedStatement->execute();
    $preparedStatement->closeCursor();
    // return $productOrderID;
}

?>