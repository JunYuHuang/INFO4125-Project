<?php

function getAllProducts() {
    global $db;
    $query = 'SELECT * FROM Product ORDER BY productID';
    $preparedStatement = $db->prepare($query);
    $preparedStatement->execute();
    $result = $preparedStatement->fetchAll();
    $preparedStatement->closeCursor();
    return $result;
}

function getProductByID($productID) {
    global $db;
    $query = 'SELECT * FROM Product WHERE productID = :productID';
    $preparedStatement = $db->prepare($query);
    $preparedStatement->bindValue(':productID', $productID);
    $preparedStatement->execute();
    $result = $preparedStatement->fetch();
    $preparedStatement->closeCursor();
    return $result;
}

?>