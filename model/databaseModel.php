<?php

$dsn = 'mysql:host=localhost;dbname=PenzaarDB';
$username = 'PenzaarUser';
$password = 'PenzaarUser';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $errorMessage = $e->getMessage();
    include '../views/error.php';
    exit();
}

?>