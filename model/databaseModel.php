<?php

$dsn = 'mysql:host=localhost;dbname=webdevgp6';
$username = 'webdevgp6';
$password = 'webdevgp6';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $errorMessage = $e->getMessage();
    include '../views/error.php';
    exit();
}

?>