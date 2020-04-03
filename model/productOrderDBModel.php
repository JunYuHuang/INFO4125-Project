<?php

function addProductOrder($currentCart, $customerFirstName, $customerLastName, $customerEmailAddress, $customerPhoneNumber, $addressStreet, $addressUnit, $addressCity, $addressProvince, $addressPostalCode, $addressCountry, $creditCardProvider, $creditCardNumber, $creditCardName,  $creditCardExpiryDate, $creditCardSecurityCode) {
    global $db;

    $query = 
        'INSERT INTO PurchaseOrder (customerFirstName, customerLastName, customerEmailAddress, customerPhoneNumber, addressStreet, addressUnit, addressCity, addressProvince, addressPostalCode, addressCountry, creditCardProvider, creditCardNumber, creditCardName, creditCardExpiryDate, creditCardSecurityCode)
        VALUES (:customerFirstName, :customerLastName, :customerEmailAddress, :customerPhoneNumber, :addressStreet, :addressUnit, :addressCity, :addressProvince, :addressPostalCode, :addressCountry, :creditCardProvider, :creditCardNumber, :creditCardName, :creditCardExpiryDate, :creditCardSecurityCode)
        ';

    $preparedStatement = $db->prepare($query);

    $preparedStatement->bindValue(':customerFirstName', $customerFirstName);
    $preparedStatement->bindValue(':customerLastName', $customerLastName);
    $preparedStatement->bindValue(':customerEmailAddress', $customerEmailAddress);
    $preparedStatement->bindValue(':customerPhoneNumber', $customerPhoneNumber);
    $preparedStatement->bindValue(':addressStreet', $addressStreet);
    $preparedStatement->bindValue(':addressUnit', $addressUnit);
    $preparedStatement->bindValue(':addressCity', $addressCity);
    $preparedStatement->bindValue(':addressProvince', $addressProvince);
    $preparedStatement->bindValue(':addressPostalCode', $addressPostalCode);
    $preparedStatement->bindValue(':addressCountry', $addressCountry);
    $preparedStatement->bindValue(':creditCardProvider', $creditCardProvider);
    $preparedStatement->bindValue(':creditCardNumber', $creditCardNumber);
    $preparedStatement->bindValue(':creditCardName', $creditCardName);
    $preparedStatement->bindValue(':creditCardExpiryDate', $creditCardExpiryDate);
    $preparedStatement->bindValue(':creditCardSecurityCode', $creditCardSecurityCode);

    $preparedStatement->execute();
    $purchaseOrderID = $db->lastInsertId();

    foreach ($currentCart as $productID => $productItem) {
        $purchaseOrderItemQuantity = $productItem['productQuantity'];
        $purchaseOrderItemQuery = 
            'INSERT INTO PurchaseOrderItem (purchaseOrderID, productID, purchaseOrderItemQuantity)
            VALUES (:purchaseOrderID, :productID, :purchaseOrderItemQuantity)
            ';

        $statement = $db->prepare($query);

        $statement->bindValue(':purchaseOrderID', $purchaseOrderID);
        $statement->bindValue(':productID', $productID);
        $statement->bindValue(':purchaseOrderItemQuantity', $purchaseOrderItemQuantity);
        $statement->execute();
        $statement->closeCursor();
    }

    $preparedStatement->closeCursor();
    return $preparedStatement;
}

?>