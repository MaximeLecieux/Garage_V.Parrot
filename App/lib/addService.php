<?php
require_once('pdo.php');

function addService(PDO $pdo, string $title, string $description, string|null $image){
    $sql = "INSERT INTO Services (name, description, img) VALUES (:title, :description, :image);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    return $query->execute();
}