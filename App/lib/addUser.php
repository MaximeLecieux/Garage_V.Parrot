<?php
require_once('pdo.php');

function addUser(PDO $pdo, string $email, string $password, string $type){
    $sql = "INSERT INTO Users (email, password, type) VALUES (:email, :password, :type);";
    $query = $pdo->prepare($sql);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':type', $type, PDO::PARAM_STR);
    return $query->execute();
}