<?php
require_once('pdo.php');

function getCars(PDO $pdo){
    $query = $pdo->prepare("SELECT idCar, name, model, mileage, year, price, first_img FROM Cars;");
    $query->execute();
    return $query->fetchAll();
}

echo json_encode(getCars($pdo));